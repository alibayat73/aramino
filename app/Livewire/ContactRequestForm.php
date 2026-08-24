<?php

namespace App\Livewire;

use App\Models\ContactRequest;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ContactRequestForm extends Component
{
    #[Validate('required|string|max:100')]
    public string $name = '';

    #[Validate(['required', 'regex:/^09\d{9}$/'])]
    public string $mobile = '';

    public bool $submitted = false;

    /**
     * @var array<string, string>
     */
    protected array $messages = [
        'name.required' => 'لطفاً نام و نام خانوادگی خود را وارد کنید.',
        'name.max' => 'نام وارد شده بیش از حد مجاز طولانی است.',
        'mobile.required' => 'لطفاً شماره موبایل خود را وارد کنید.',
        'mobile.regex' => 'شماره موبایل معتبر نیست؛ لطفاً به صورت ۰۹۱۲۱۲۳۴۵۶۷ وارد کنید.',
    ];

    public function save(): void
    {
        $this->validate();

        ContactRequest::create([
            'name' => trim($this->name),
            'mobile' => $this->mobile,
        ]);

        $this->reset('name', 'mobile');

        $this->submitted = true;
    }

    public function render(): View
    {
        return view('livewire.contact-request-form');
    }
}
