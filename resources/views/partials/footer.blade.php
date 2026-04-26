<footer class="{{ $class ?? 'border-t border-zinc-100 bg-white' }} px-4 py-8 sm:px-6">
    <div class="mx-auto max-w-6xl space-y-6">
        <div class="rounded-2xl border border-zinc-100 bg-gradient-to-br from-white to-zinc-50 p-4 sm:p-5">
            <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                <div class="max-w-lg">
                    <a href="/" class="inline-flex items-center gap-2">
                        <span class="flex h-8 w-8 flex-none items-center justify-center rounded-xl bg-zinc-900 text-[10px] font-black text-white">SX</span>
                        <span class="text-base font-black tracking-[-0.04em] text-zinc-900">SohoXash</span>
                    </a>
                    <p class="mt-2 text-xs leading-5 text-zinc-500">
                        Simple micro-job platform for everyday users in Bangladesh. Complete tasks, earn safely, and withdraw quickly.
                    </p>
                </div>
                <div class="grid grid-cols-3 gap-2 text-[10px] font-semibold text-zinc-500">
                    <span class="rounded-lg border border-zinc-200 bg-white px-3 py-1.5 text-center">Easy to Use</span>
                    <span class="rounded-lg border border-zinc-200 bg-white px-3 py-1.5 text-center">Fast Payout</span>
                    <span class="rounded-lg border border-zinc-200 bg-white px-3 py-1.5 text-center">Support Ready</span>
                </div>
            </div>
        </div>

        <div class="grid gap-6 sm:grid-cols-3">
            <div class="rounded-xl border border-zinc-100 p-4">
                <p class="text-[11px] font-bold uppercase tracking-wider text-zinc-400">Quick Links</p>
                <div class="mt-2.5 space-y-1.5 text-sm text-zinc-600">
                    <a href="{{ route('dashboard') }}" class="block transition-colors hover:text-zinc-900">Dashboard</a>
                    <a href="{{ route('jobs.index') }}" class="block transition-colors hover:text-zinc-900">My Jobs</a>
                    <a href="{{ route('referrals') }}" class="block transition-colors hover:text-zinc-900">Referrals</a>
                    <a href="{{ route('news.feed') }}" class="block transition-colors hover:text-zinc-900">News Feed</a>
                </div>
            </div>

            <div class="rounded-xl border border-zinc-100 p-4">
                <p class="text-[11px] font-bold uppercase tracking-wider text-zinc-400">Help & Account</p>
                <div class="mt-2.5 space-y-1.5 text-sm text-zinc-600">
                    <a href="{{ route('support.ticket') }}" class="block transition-colors hover:text-zinc-900">Support Tickets</a>
                    <a href="{{ route('gift.card') }}" class="block transition-colors hover:text-zinc-900">Redeem Gift Card</a>
                    <a href="{{ route('partner') }}" class="block transition-colors hover:text-zinc-900">Partner Program</a>
                    <a href="{{ route('profile') }}" class="block transition-colors hover:text-zinc-900">Profile</a>
                </div>
            </div>

            <div class="rounded-xl border border-zinc-100 p-4">
                <p class="text-[11px] font-bold uppercase tracking-wider text-zinc-400">Payments & Social</p>
                <div class="mt-2.5 flex flex-wrap gap-2">
                    <span class="rounded-lg border border-zinc-200 px-2.5 py-1 text-[11px] font-semibold text-zinc-500">bKash</span>
                    <span class="rounded-lg border border-zinc-200 px-2.5 py-1 text-[11px] font-semibold text-zinc-500">Nagad</span>
                    <span class="rounded-lg border border-zinc-200 px-2.5 py-1 text-[11px] font-semibold text-zinc-500">Rocket</span>
                    <span class="rounded-lg border border-zinc-200 px-2.5 py-1 text-[11px] font-semibold text-zinc-500">PayPal</span>
                </div>
                <div class="mt-3 flex flex-wrap items-center gap-x-3 gap-y-1 text-xs text-zinc-500">
                    <a href="#" class="transition-colors hover:text-blue-500">Facebook</a>
                    <span class="text-zinc-300">•</span>
                    <a href="#" class="transition-colors hover:text-sky-500">Telegram</a>
                    <span class="text-zinc-300">•</span>
                    <a href="#" class="transition-colors hover:text-emerald-500">WhatsApp</a>
                </div>
            </div>
        </div>

        <div class="border-t border-zinc-100 pt-4">
            <p class="text-center text-xs text-zinc-400">© {{ date('Y') }} SohoXash. All rights reserved.</p>
        </div>
    </div>
</footer>
