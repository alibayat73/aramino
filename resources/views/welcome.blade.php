<!DOCTYPE html>
<html lang="fa" dir="rtl" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="آرامینو؛ همراه شما در برگزاری شایسته مراسم تشییع، تدفین و یادبود عزیزانتان">
    <title>آرامینو | خدمات تشییع، تدفین و یادبود</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#FAF8F1] text-[#333B31] antialiased">
    {{-- botanical motif --}}
    <div class="pointer-events-none absolute -top-10 -left-16 -z-0 opacity-[0.12] text-[#5F7353]" aria-hidden="true">
        <svg width="420" height="420" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M100 190C100 130 100 70 100 10M100 60C100 60 78 52 70 30C92 32 100 60 100 60ZM100 60C100 60 122 52 130 30C108 32 100 60 100 60ZM100 110C100 110 72 102 62 74C92 78 100 110 100 110ZM100 110C100 110 128 102 138 74C108 78 100 110 100 110ZM100 160C100 160 66 152 54 118C90 124 100 160 100 160ZM100 160C100 160 134 152 146 118C110 124 100 160 100 160Z"
                stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
        </svg>
    </div>

    <header class="mx-auto flex max-w-6xl items-center justify-between px-6 py-5">
        <a href="#" class="flex items-center gap-2 text-xl font-bold text-[#3F4A3C]">
            <span class="flex size-9 items-center justify-center rounded-full bg-[#E8EEE2] text-[#4F6B48]">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                    <path d="M12 21c-4.97 0-9-4.03-9-9 0-3.87 2.44-7.17 5.87-8.45A7 7 0 0 0 12 21Zm2.13-.55A7 7 0 0 0 15.13 3.05 9 9 0 0 1 14.13 20.45Z"/>
                </svg>
            </span>
            آرامینو
        </a>
        <a href="tel:+989382277285"
           class="flex items-center gap-2 rounded-full border border-[#DCE3D5] bg-white px-4 py-2 text-sm font-medium text-[#4F6B48] transition hover:bg-[#E8EEE2]">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-4">
                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>
            </svg>
            <span dir="ltr">09382277285</span>
        </a>
    </header>

    <main>
        {{-- hero --}}
        <section class="relative overflow-hidden">
            <div class="pointer-events-none absolute inset-x-0 top-0 -z-10 h-[480px] bg-gradient-to-b from-[#EDF2E6] via-[#FAF8F1] to-transparent" aria-hidden="true"></div>
            <div class="mx-auto max-w-3xl px-6 pt-16 pb-20 text-center sm:pt-24">
                <h1 class="text-4xl leading-snug font-bold text-[#3F4A3C] sm:text-5xl sm:leading-snug">همراه شما در واپسین بدرقه</h1>
                <p class="mx-auto mt-5 max-w-2xl text-lg leading-8 text-[#5C6657]">
                    برگزاری شایسته مراسم تشییع، تدفین و یادبود عزیزانتان — از آماده‌سازی و کفن تا مراسم سوم و هفتم و رزرو سالن و مسجد.
                </p>
                <a href="#contact-form"
                   class="mt-8 inline-block rounded-xl bg-[#5F7353] px-8 py-3.5 font-medium text-white shadow-sm transition hover:bg-[#4F6B48] focus:outline-none focus:ring-2 focus:ring-[#5F7353]/40">
                    درخواست تماس
                </a>
            </div>
        </section>

        {{-- services --}}
        <section class="mx-auto max-w-6xl px-6 pb-24">
            <h2 class="text-center text-2xl font-bold text-[#3F4A3C] sm:text-3xl">خدمات ما</h2>
            <p class="mt-3 text-center text-[#5C6657]">تمام آنچه برای بدرقه‌ای شایسته نیاز دارید، زیر یک سقف.</p>

            <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ([
                    ['تشییع و آماده‌سازی', 'غسل، کفن و آماده‌سازی محترمانه متوفی مطابق موازین', 'M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z'],
                    ['مراسم تدفین', 'هماهنگی کامل تشییع و به خاک‌سپاری بدون دغدغه خانواده', 'M12 22V8m0 0C12 5 10 3 7 3c0 3 2 5 5 5Zm0 0c0-3 2-5 5-5 0 3-2 5-5 5Z'],
                    ['مراسم سوم و هفتم', 'برنامه‌ریزی و برگزاری مراسم یادبود سوم و هفتم', 'M12 3a2 2 0 0 1 2 2c0 .8-.7 1.5-2 2-1.3-.5-2-1.2-2-2a2 2 0 0 1 2-2ZM9 9h6v12H9zM9 13h6'],
                    ['رزرو سالن و مسجد', 'رزرو مسجد، حسینیه و سالن متناسب با اندازه مراسم', 'M4 21v-7c0-4 3-6 8-8 5 2 8 4 8 8v7M4 21h16M9 21v-4a3 3 0 0 1 6 0v4M12 6V4'],
                    ['پذیرایی و کیترینگ', 'خدمات پذیرایی و توزیع برای مراسم ترحیم', 'M17 8h1a4 4 0 1 1 0 8h-1M3 8h14v9a4 4 0 0 1-4 4H7a4 4 0 0 1-4-4V8Zm6-5v3m4-3v3'],
                    ['لوازم مراسم', 'تأمین تمام لوازم و تجهیزات مورد نیاز مراسم', 'M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16ZM3.29 7 12 12l8.71-5M12 22V12'],
                ] as $i => [$title, $description, $iconPath])
                    <div wire:key="service-{{ $i }}"
                        class="rounded-2xl border border-[#E4E8DD] bg-white p-6 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                        <span class="mb-4 flex size-11 items-center justify-center rounded-xl bg-[#E8EEE2] text-[#4F6B48]">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="size-5">
                                <path d="{{ $iconPath }}" />
                            </svg>
                        </span>
                        <h3 class="font-semibold text-[#3F4A3C]">{{ $title }}</h3>
                        <p class="mt-2 text-sm leading-6 text-[#5C6657]">{{ $description }}</p>
                    </div>
                @endforeach
            </div>
        </section>

        {{-- contact form --}}
        <section id="contact-form" class="relative overflow-hidden bg-gradient-to-b from-[#EDF2E6]/70 to-[#FAF8F1] py-20">
            <div class="mx-auto max-w-lg px-6">
                <h2 class="text-center text-2xl font-bold text-[#3F4A3C] sm:text-3xl">درخواست مشاوره و هماهنگی</h2>
                <p class="mt-3 mb-8 text-center text-[#5C6657]">شماره خود را بگذارید تا در سریع‌ترین زمان با شما تماس بگیریم.</p>
                <livewire:contact-request-form />
            </div>
        </section>
    </main>

    <footer class="border-t border-[#E4E8DD] py-8">
        <div class="mx-auto flex max-w-6xl flex-col items-center justify-between gap-4 px-6 sm:flex-row">
            <span class="font-bold text-[#3F4A3C]">آرامینو</span>
            <a href="tel:+989382277285" class="flex items-center gap-2 text-sm text-[#5C6657] transition hover:text-[#4F6B48]">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-4">
                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>
                </svg>
                <span dir="ltr">09382277285</span>
            </a>
        </div>
    </footer>
</body>
</html>
