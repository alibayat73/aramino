<?php

use App\Livewire\ContactRequestForm;
use App\Models\ContactRequest;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;

uses(RefreshDatabase::class);

it('renders the landing page', function () {
    $this->get('/')
        ->assertSuccessful()
        ->assertSee('آرامینو')
        ->assertSee('۰۹۳۸۲۲۷۷۲۸۵')
        ->assertSee('tel:+989382277285');
});

it('stores a valid contact request and shows the success message', function () {
    Livewire::test(ContactRequestForm::class)
        ->set('name', 'زهرا محمدی')
        ->set('mobile', '09121234567')
        ->call('save')
        ->assertSet('submitted', true)
        ->assertSee('اطلاعات شما با موفقیت ثبت شد. به‌زودی با شما تماس می‌گیریم.');

    expect(ContactRequest::count())->toBe(1)
        ->and(ContactRequest::first())
        ->name->toBe('زهرا محمدی')
        ->mobile->toBe('09121234567');
});

it('normalizes persian digits before storing the mobile number', function () {
    Livewire::test(ContactRequestForm::class)
        ->set('name', 'زهرا محمدی')
        ->set('mobile', '۰۹۱۲۱۲۳۴۵۶۷')
        ->call('save')
        ->assertSet('submitted', true);

    expect(ContactRequest::first()->mobile)->toBe('09121234567');
});

it('rejects an invalid mobile number without storing anything', function (string $mobile) {
    Livewire::test(ContactRequestForm::class)
        ->set('name', 'زهرا محمدی')
        ->set('mobile', $mobile)
        ->call('save')
        ->assertHasErrors(['mobile']);

    expect(ContactRequest::count())->toBe(0);
})->with([
    'too short' => '09123',
    'not starting with 09' => '9191234567',
    'non numeric' => '0912abc4567',
    'too long' => '091212345678',
]);
