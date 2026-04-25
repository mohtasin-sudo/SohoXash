<aside class="fixed inset-y-0 left-0 z-30 hidden w-56 flex-col border-r border-zinc-100 bg-white md:flex">
    <div class="flex items-center gap-2.5 border-b border-zinc-100 px-5 py-4">
        <span class="flex h-8 w-8 flex-none items-center justify-center rounded-xl bg-zinc-900 text-xs font-black text-white">SX</span>
        <span class="text-base font-black tracking-[-0.04em]">SohoXash</span>
    </div>

    <div class="mx-4 mt-3.5 rounded-xl bg-emerald-50 px-3.5 py-3 ring-1 ring-emerald-100">
        <p class="text-[10px] font-bold uppercase tracking-widest text-emerald-600">Pro Wallet</p>
        <p class="mt-0.5 text-xl font-black tracking-[-0.04em] text-emerald-600">৳50.00</p>
        <a href="#" class="mt-1.5 inline-flex text-xs font-semibold text-emerald-700 hover:text-emerald-900">Withdraw →</a>
    </div>

    <nav class="mt-3 flex-1 overflow-y-auto px-3 pb-4">
        <p class="mb-1 px-2 text-[10px] font-bold uppercase tracking-widest text-zinc-300">Menu</p>
        <a href="{{ route('dashboard') }}" class="flex items-center gap-2.5 rounded-xl px-3 py-2.5 text-sm {{ ($active ?? '') === 'dashboard' ? 'bg-zinc-50 font-semibold text-zinc-900' : 'font-medium text-zinc-500 hover:bg-zinc-50 hover:text-zinc-900' }}">
            <i class="bi bi-house-door text-base"></i>Dashboard
        </a>
        <a href="{{ route('partner') }}" class="flex items-center gap-2.5 rounded-xl px-3 py-2.5 text-sm {{ ($active ?? '') === 'partner' ? 'bg-zinc-50 font-semibold text-zinc-900' : 'font-medium text-zinc-500 hover:bg-zinc-50 hover:text-zinc-900' }}">
            <i class="bi bi-diagram-3 text-base"></i>Partner
        </a>
        <a href="{{ route('jobs.index') }}" class="flex items-center gap-2.5 rounded-xl px-3 py-2.5 text-sm {{ ($active ?? '') === 'tasks' ? 'bg-zinc-50 font-semibold text-zinc-900' : 'font-medium text-zinc-500 hover:bg-zinc-50 hover:text-zinc-900' }}">
            <i class="bi bi-list-task text-base"></i>My Jobs
        </a>
        <a href="{{ route('news.feed') }}" class="flex items-center gap-2.5 rounded-xl px-3 py-2.5 text-sm {{ ($active ?? '') === 'feed' ? 'bg-zinc-50 font-semibold text-zinc-900' : 'font-medium text-zinc-500 hover:bg-zinc-50 hover:text-zinc-900' }}">
            <i class="bi bi-newspaper text-base"></i>News Feed
        </a>
        <a href="{{ route('referrals') }}" class="flex items-center gap-2.5 rounded-xl px-3 py-2.5 text-sm {{ ($active ?? '') === 'referrals' ? 'bg-zinc-50 font-semibold text-zinc-900' : 'font-medium text-zinc-500 hover:bg-zinc-50 hover:text-zinc-900' }}">
            <i class="bi bi-people text-base"></i>Referrals
        </a>
        <a href="{{ route('gift.card') }}" class="flex items-center gap-2.5 rounded-xl px-3 py-2.5 text-sm {{ ($active ?? '') === 'gift' ? 'bg-zinc-50 font-semibold text-zinc-900' : 'font-medium text-zinc-500 hover:bg-zinc-50 hover:text-zinc-900' }}">
            <i class="bi bi-gift text-base"></i>Gift Card
        </a>
        <a href="{{ route('support.ticket') }}" class="flex items-center gap-2.5 rounded-xl px-3 py-2.5 text-sm {{ ($active ?? '') === 'support' ? 'bg-zinc-50 font-semibold text-zinc-900' : 'font-medium text-zinc-500 hover:bg-zinc-50 hover:text-zinc-900' }}">
            <i class="bi bi-life-preserver text-base"></i>Support
        </a>
        <p class="mb-1 mt-3 px-2 text-[10px] font-bold uppercase tracking-widest text-zinc-300">Account</p>
        <a href="{{ route('profile') }}" class="flex items-center gap-2.5 rounded-xl px-3 py-2.5 text-sm {{ ($active ?? '') === 'profile' ? 'bg-zinc-50 font-semibold text-zinc-900' : 'font-medium text-zinc-500 hover:bg-zinc-50 hover:text-zinc-900' }}">
            <i class="bi bi-person text-base"></i>Profile
        </a>
        <a href="#" class="flex items-center gap-2.5 rounded-xl px-3 py-2.5 text-sm font-medium text-zinc-500 hover:bg-zinc-50 hover:text-zinc-900">
            <i class="bi bi-gear text-base"></i>Settings
        </a>
    </nav>

    <div class="border-t border-zinc-100 px-4 py-4">
        <a href="{{ route('login') }}" class="flex items-center gap-2 text-sm font-semibold text-red-500 hover:text-red-600">
            <i class="bi bi-box-arrow-right text-base"></i>Sign out
        </a>
    </div>
</aside>
