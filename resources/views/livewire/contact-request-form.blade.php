<div class="rounded-3xl border border-[#DCE3D5] bg-white/70 p-6 shadow-sm backdrop-blur-sm sm:p-8">
    @if ($submitted)
        <div class="flex flex-col items-center gap-3 py-10 text-center" role="status">
            <span class="flex size-14 items-center justify-center rounded-full bg-[#E8EEE2] text-2xl text-[#4F6B48]">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-7">
                    <path d="M20 6 9 17l-5-5" />
                </svg>
            </span>
            <p class="text-lg font-medium text-[#3F4A3C]">اطلاعات شما با موفقیت ثبت شد. به‌زودی با شما تماس می‌گیریم.</p>
        </div>
    @else
        <form wire:submit="save" class="flex flex-col gap-5">
            <div>
                <label for="name" class="mb-1.5 block text-sm font-medium text-[#3F4A3C]">نام و نام خانوادگی</label>
                <input id="name" type="text" wire:model="name"
                    class="w-full rounded-xl border border-[#DCE3D5] bg-white px-4 py-3 text-[#333B31] outline-none transition placeholder:text-[#A9B3A3] focus:border-[#8AA07E] focus:ring-2 focus:ring-[#8AA07E]/25"
                    placeholder="مثلاً زهرا محمدی" autocomplete="name">
                @error('name')
                    <p class="mt-1.5 text-sm text-[#A4553F]">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="mobile" class="mb-1.5 block text-sm font-medium text-[#3F4A3C]">شماره موبایل</label>
                <input id="mobile" type="tel" dir="ltr" inputmode="numeric" wire:model="mobile"
                    class="w-full rounded-xl border border-[#DCE3D5] bg-white px-4 py-3 text-left text-[#333B31] outline-none transition placeholder:text-[#A9B3A3] focus:border-[#8AA07E] focus:ring-2 focus:ring-[#8AA07E]/25"
                    placeholder="۰۹۱۲۱۲۳۴۵۶۷" autocomplete="tel">
                @error('mobile')
                    <p class="mt-1.5 text-sm text-[#A4553F]">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit"
                class="mt-1 w-full rounded-xl bg-[#5F7353] px-6 py-3.5 font-medium text-white transition hover:bg-[#4F6B48] focus:outline-none focus:ring-2 focus:ring-[#5F7353]/40 disabled:opacity-60">
                <span wire:loading.remove wire:target="save">ثبت درخواست تماس</span>
                <span wire:loading wire:target="save">در حال ثبت…</span>
            </button>
        </form>
    @endif
</div>
