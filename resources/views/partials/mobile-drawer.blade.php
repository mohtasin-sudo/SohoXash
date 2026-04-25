<div id="drawer-backdrop" class="fixed inset-0 z-[60] bg-black/40 opacity-0 pointer-events-none transition-opacity duration-300 md:hidden" aria-hidden="true"></div>
<div id="drawer-panel" class="fixed inset-y-0 left-0 z-[70] flex w-72 -translate-x-full flex-col bg-white shadow-2xl transition-transform duration-300 md:hidden" role="dialog" aria-modal="true" aria-label="App menu">
    <div class="flex items-center justify-between border-b border-zinc-100 px-5 py-4">
        <div class="flex items-center gap-2.5">
            <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-zinc-900 text-sm font-black text-white">R</span>
            <div>
                <p class="text-sm font-bold text-zinc-900 leading-none">Rahim Islam</p>
                <p class="mt-0.5 text-xs text-zinc-400">rahim@example.com</p>
            </div>
        </div>
        <button type="button" id="drawer-close" aria-label="Close menu" class="flex h-8 w-8 items-center justify-center rounded-lg text-zinc-400 hover:bg-zinc-100"><i class="bi bi-x-lg"></i></button>
    </div>

    <div class="mx-4 mt-3 rounded-xl bg-emerald-50 px-4 py-3 ring-1 ring-emerald-100">
        <p class="text-[10px] font-bold uppercase tracking-widest text-emerald-600">Pro Wallet</p>
        <p class="mt-0.5 text-2xl font-black tracking-[-0.04em] text-emerald-600">৳50.00</p>
        <a href="#" class="mt-2 inline-flex text-xs font-semibold text-emerald-700">Withdraw →</a>
    </div>

    <nav class="mt-3 flex-1 overflow-y-auto px-3 pb-4">
        <p class="mb-1 px-2 text-[10px] font-bold uppercase tracking-widest text-zinc-300">Menu</p>
        <a href="{{ route('dashboard') }}" class="flex items-center gap-3 rounded-xl {{ ($active ?? '') === 'dashboard' ? 'bg-zinc-50 text-zinc-900 font-semibold' : 'text-zinc-600 font-medium hover:bg-zinc-50' }} px-3 py-2.5 text-sm">
            <i class="bi bi-house-door text-base"></i>Dashboard
        </a>
        <a href="{{ route('partner') }}" class="flex items-center gap-3 rounded-xl {{ ($active ?? '') === 'partner' ? 'bg-zinc-50 text-zinc-900 font-semibold' : 'text-zinc-600 font-medium hover:bg-zinc-50' }} px-3 py-2.5 text-sm">
            <i class="bi bi-diagram-3 text-base"></i>Partner
        </a>
        <a href="#" class="flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-medium text-zinc-600 hover:bg-zinc-50"><i class="bi bi-list-task text-base"></i>My Tasks</a>
        <a href="#" class="flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-medium text-zinc-600 hover:bg-zinc-50"><i class="bi bi-wallet2 text-base"></i>Earnings</a>
        <a href="#" class="flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-medium text-zinc-600 hover:bg-zinc-50"><i class="bi bi-people text-base"></i>Referrals</a>
        <a href="#" class="flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-medium text-zinc-600 hover:bg-zinc-50"><i class="bi bi-bell text-base"></i>Notifications<span class="ml-auto flex h-5 w-5 items-center justify-center rounded-full bg-red-500 text-[9px] font-black text-white">3</span></a>
        <p class="mb-1 mt-3 px-2 text-[10px] font-bold uppercase tracking-widest text-zinc-300">Account</p>
        <a href="#" class="flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-medium text-zinc-600 hover:bg-zinc-50"><i class="bi bi-person text-base"></i>Profile</a>
        <a href="#" class="flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-medium text-zinc-600 hover:bg-zinc-50"><i class="bi bi-gear text-base"></i>Settings</a>
        <a href="#" class="flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-medium text-zinc-600 hover:bg-zinc-50"><i class="bi bi-life-preserver text-base"></i>Support</a>
    </nav>

    <div class="border-t border-zinc-100 px-4 py-4" style="padding-bottom: max(1rem, env(safe-area-inset-bottom, 1rem))">
        <a href="{{ route('login') }}" class="flex items-center gap-2 text-sm font-semibold text-red-500 hover:text-red-600"><i class="bi bi-box-arrow-right text-base"></i>Sign out</a>
    </div>
</div>
