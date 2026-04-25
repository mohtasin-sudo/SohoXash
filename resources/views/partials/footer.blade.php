<footer class="{{ $class ?? 'border-t border-zinc-100 bg-white' }} px-4 py-8 sm:px-6">
    <div class="mx-auto max-w-6xl">

        {{-- Brand + trust strip --}}
        <div class="rounded-2xl border border-zinc-100 bg-zinc-50 p-4 sm:p-5">
            <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                <div class="max-w-md">
                    <a href="/" class="inline-flex items-center gap-2">
                        <span class="flex h-8 w-8 flex-none items-center justify-center rounded-xl bg-zinc-900 text-[10px] font-black text-white">SX</span>
                        <span class="text-base font-black tracking-[-0.04em] text-zinc-900">SohoXash</span>
                    </a>
                    <p class="mt-2 text-xs leading-5 text-zinc-500">
                        Mobile-first micro job platform. Complete tasks, track income, and withdraw securely with trusted payment channels.
                    </p>
                </div>

                <div class="grid grid-cols-3 gap-2 sm:w-auto">
                    <span class="rounded-lg border border-zinc-200 bg-white px-3 py-1.5 text-center text-[10px] font-semibold text-zinc-500">SSL Secured</span>
                    <span class="rounded-lg border border-zinc-200 bg-white px-3 py-1.5 text-center text-[10px] font-semibold text-zinc-500">Fast Payout</span>
                    <span class="rounded-lg border border-zinc-200 bg-white px-3 py-1.5 text-center text-[10px] font-semibold text-zinc-500">24/7 Support</span>
                </div>
            </div>
        </div>

        {{-- Main footer links --}}
        <div class="mt-6 grid grid-cols-2 gap-5 sm:grid-cols-4">
            <div>
                <p class="text-[11px] font-bold uppercase tracking-wider text-zinc-400">Platform</p>
                <div class="mt-2.5 space-y-1.5 text-sm text-zinc-500">
                    <a href="{{ route('dashboard') }}" class="block transition-colors hover:text-zinc-900">Dashboard</a>
                    <a href="{{ route('partner') }}" class="block transition-colors hover:text-zinc-900">Partner Program</a>
                    <a href="{{ route('gift.card') }}" class="block transition-colors hover:text-zinc-900">Gift Card Redeem</a>
                    <a href="#" class="block transition-colors hover:text-zinc-900">Tasks</a>
                    <a href="#" class="block transition-colors hover:text-zinc-900">Earnings</a>
                </div>
            </div>

            <div>
                <p class="text-[11px] font-bold uppercase tracking-wider text-zinc-400">Company</p>
                <div class="mt-2.5 space-y-1.5 text-sm text-zinc-500">
                    <a href="#" class="block transition-colors hover:text-zinc-900">About Us</a>
                    <a href="#" class="block transition-colors hover:text-zinc-900">Careers</a>
                    <a href="#" class="block transition-colors hover:text-zinc-900">Blog</a>
                    <a href="#" class="block transition-colors hover:text-zinc-900">Media Kit</a>
                </div>
            </div>

            <div>
                <p class="text-[11px] font-bold uppercase tracking-wider text-zinc-400">Support</p>
                <div class="mt-2.5 space-y-1.5 text-sm text-zinc-500">
                    <a href="#" class="block transition-colors hover:text-zinc-900">Help Center</a>
                    <a href="{{ route('support.ticket') }}" class="block transition-colors hover:text-zinc-900">Contact Support</a>
                    <a href="#" class="block transition-colors hover:text-zinc-900">Community</a>
                    <a href="#" class="block transition-colors hover:text-zinc-900">Status</a>
                </div>
            </div>

            <div>
                <p class="text-[11px] font-bold uppercase tracking-wider text-zinc-400">Legal</p>
                <div class="mt-2.5 space-y-1.5 text-sm text-zinc-500">
                    <a href="#" class="block transition-colors hover:text-zinc-900">Privacy Policy</a>
                    <a href="#" class="block transition-colors hover:text-zinc-900">Terms of Service</a>
                    <a href="#" class="block transition-colors hover:text-zinc-900">Refund Policy</a>
                    <a href="#" class="block transition-colors hover:text-zinc-900">AML Policy</a>
                </div>
            </div>
        </div>

        {{-- Partners + socials --}}
        <div class="mt-6 rounded-xl border border-zinc-100 p-4">
            <p class="text-[11px] font-bold uppercase tracking-wider text-zinc-400">Payment & Community Partners</p>
            <div class="mt-2.5 flex flex-wrap gap-2">
                <span class="rounded-lg border border-zinc-200 px-2.5 py-1 text-[11px] font-semibold text-zinc-500">bKash</span>
                <span class="rounded-lg border border-zinc-200 px-2.5 py-1 text-[11px] font-semibold text-zinc-500">Nagad</span>
                <span class="rounded-lg border border-zinc-200 px-2.5 py-1 text-[11px] font-semibold text-zinc-500">Rocket</span>
                <span class="rounded-lg border border-zinc-200 px-2.5 py-1 text-[11px] font-semibold text-zinc-500">Binance</span>
                <span class="rounded-lg border border-zinc-200 px-2.5 py-1 text-[11px] font-semibold text-zinc-500">PayPal</span>
            </div>

            <div class="mt-3 flex flex-wrap items-center gap-x-3 gap-y-1 text-xs text-zinc-500">
                <a href="#" class="transition-colors hover:text-blue-500">Facebook</a>
                <span class="text-zinc-300">•</span>
                <a href="#" class="transition-colors hover:text-sky-500">Telegram</a>
                <span class="text-zinc-300">•</span>
                <a href="#" class="transition-colors hover:text-emerald-500">WhatsApp</a>
                <span class="text-zinc-300">•</span>
                <a href="#" class="transition-colors hover:text-zinc-900">LinkedIn</a>
                <span class="text-zinc-300">•</span>
                <a href="#" class="transition-colors hover:text-zinc-900">YouTube</a>
            </div>
        </div>

        <div class="mt-5 border-t border-zinc-100 pt-4">
            <p class="text-center text-xs text-zinc-400">© {{ date('Y') }} SohoXash. All rights reserved.</p>
        </div>

    </div>
</footer>
