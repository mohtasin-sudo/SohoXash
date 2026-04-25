<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
        <meta name="theme-color" content="#ffffff">
        <title>Referrals — SohoXash</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800,900" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-zinc-50 text-zinc-900 antialiased">
        @include('partials.desktop-sidebar', ['active' => 'referrals'])

        <div class="w-full bg-white md:ml-56 md:min-h-screen">

            <header class="dash-header">
                <button
                    type="button"
                    id="drawer-open"
                    aria-label="Open menu"
                    aria-expanded="false"
                    class="flex h-9 w-9 flex-none items-center justify-center rounded-xl border border-zinc-100 text-zinc-400 transition-all hover:border-zinc-300 hover:text-zinc-700 md:hidden"
                >
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true">
                        <circle cx="8" cy="3" r="1.5"></circle>
                        <circle cx="8" cy="8" r="1.5"></circle>
                        <circle cx="8" cy="13" r="1.5"></circle>
                    </svg>
                </button>

                <a href="/" class="flex items-center gap-2">
                    <span class="flex h-8 w-8 flex-none items-center justify-center rounded-xl bg-zinc-900 text-xs font-black text-white">SX</span>
                    <span class="text-base font-black tracking-[-0.04em]">SohoXash</span>
                </a>

                <button
                    type="button"
                    aria-label="Cart"
                    class="relative flex h-9 w-9 flex-none items-center justify-center rounded-xl border border-zinc-100 text-base text-zinc-500 transition-all hover:border-zinc-300"
                >
                    <i class="bi bi-cart3"></i>
                    <span class="absolute -right-1 -top-1 flex h-4 w-4 items-center justify-center rounded-full bg-zinc-900 text-[9px] font-black text-white">2</span>
                </button>
            </header>

            <main class="space-y-3 px-4 py-4 pb-28">
                <section class="card p-4">
                    <div class="mb-2.5 flex items-center justify-between">
                        <h1 class="text-lg font-black tracking-[-0.03em] text-zinc-900">Referral Dashboard</h1>
                        <span class="rounded-full border border-emerald-100 bg-emerald-50 px-2 py-0.5 text-[10px] font-semibold text-emerald-700">Level 4 Enabled</span>
                    </div>
                    <div class="grid grid-cols-3 gap-2">
                        <div class="rounded-xl border border-zinc-100 bg-zinc-50 px-2.5 py-2 text-center">
                            <p class="text-[9px] text-zinc-400">Direct Users</p>
                            <p class="text-sm font-black text-zinc-900">24</p>
                        </div>
                        <div class="rounded-xl border border-zinc-100 bg-zinc-50 px-2.5 py-2 text-center">
                            <p class="text-[9px] text-zinc-400">Team Total</p>
                            <p class="text-sm font-black text-zinc-900">184</p>
                        </div>
                        <div class="rounded-xl border border-zinc-100 bg-zinc-50 px-2.5 py-2 text-center">
                            <p class="text-[9px] text-zinc-400">This Month</p>
                            <p class="text-sm font-black text-emerald-700">৳1,920</p>
                        </div>
                    </div>
                </section>

                <section class="card p-4">
                    <div class="mb-2.5 flex items-center justify-between">
                        <p class="text-sm font-bold text-zinc-900">Your Referral Link</p>
                        <span class="rounded-full border border-emerald-100 bg-emerald-50 px-2 py-0.5 text-[10px] font-semibold text-emerald-700">Active</span>
                    </div>
                    <div class="flex items-center gap-2 rounded-xl border border-zinc-200 bg-zinc-50 px-3 py-2.5">
                        <p id="refer-link" class="flex-1 truncate text-xs font-medium text-zinc-500">https://sohoxash.com/r/rahim2321</p>
                        <button type="button" id="copy-refer-btn" class="flex-none rounded-lg bg-zinc-900 px-3 py-1.5 text-xs font-bold text-white transition-colors hover:bg-zinc-700">Copy</button>
                    </div>
                </section>

                <section class="card p-4">
                    <p class="text-sm font-bold text-zinc-900">Level Commission Plan</p>
                    <div class="mt-3 space-y-2">
                        <div class="flex items-center justify-between rounded-xl border border-emerald-100 bg-emerald-50 px-3 py-2.5"><span class="text-xs font-semibold text-zinc-700">Level 1 (Direct)</span><span class="text-xs font-black text-emerald-700">20%</span></div>
                        <div class="flex items-center justify-between rounded-xl border border-zinc-100 bg-zinc-50 px-3 py-2.5"><span class="text-xs font-semibold text-zinc-700">Level 2</span><span class="text-xs font-black text-blue-700">10%</span></div>
                        <div class="flex items-center justify-between rounded-xl border border-zinc-100 bg-zinc-50 px-3 py-2.5"><span class="text-xs font-semibold text-zinc-700">Level 3</span><span class="text-xs font-black text-violet-700">5%</span></div>
                        <div class="flex items-center justify-between rounded-xl border border-zinc-100 bg-zinc-50 px-3 py-2.5"><span class="text-xs font-semibold text-zinc-700">Level 4</span><span class="text-xs font-black text-amber-700">3%</span></div>
                    </div>
                </section>

                <section class="card p-4">
                    <p class="text-sm font-bold text-zinc-900">Team Data</p>
                    <div class="mt-3 grid grid-cols-2 gap-2">
                        <div class="rounded-xl border border-zinc-100 bg-zinc-50 px-3 py-2.5">
                            <p class="text-[10px] text-zinc-400">Total Team Size</p>
                            <p class="mt-0.5 text-sm font-black text-zinc-900">184</p>
                        </div>
                        <div class="rounded-xl border border-zinc-100 bg-zinc-50 px-3 py-2.5">
                            <p class="text-[10px] text-zinc-400">Active This Week</p>
                            <p class="mt-0.5 text-sm font-black text-zinc-900">62</p>
                        </div>
                        <div class="rounded-xl border border-zinc-100 bg-zinc-50 px-3 py-2.5">
                            <p class="text-[10px] text-zinc-400">Total Referral Income</p>
                            <p class="mt-0.5 text-sm font-black text-emerald-700">৳12,480</p>
                        </div>
                        <div class="rounded-xl border border-zinc-100 bg-zinc-50 px-3 py-2.5">
                            <p class="text-[10px] text-zinc-400">This Month Income</p>
                            <p class="mt-0.5 text-sm font-black text-emerald-700">৳1,920</p>
                        </div>
                    </div>
                </section>

                <section class="card p-4">
                    <div class="mb-2.5 flex items-center justify-between">
                        <p class="text-sm font-bold text-zinc-900">Level-wise Team Count</p>
                        <span class="text-[10px] text-zinc-400">Updated daily</span>
                    </div>
                    <div class="space-y-2">
                        <div class="flex items-center justify-between rounded-xl border border-zinc-100 bg-zinc-50 px-3 py-2.5"><span class="text-xs font-medium text-zinc-600">Level 1 members</span><span class="text-xs font-black text-zinc-900">24</span></div>
                        <div class="flex items-center justify-between rounded-xl border border-zinc-100 bg-zinc-50 px-3 py-2.5"><span class="text-xs font-medium text-zinc-600">Level 2 members</span><span class="text-xs font-black text-zinc-900">47</span></div>
                        <div class="flex items-center justify-between rounded-xl border border-zinc-100 bg-zinc-50 px-3 py-2.5"><span class="text-xs font-medium text-zinc-600">Level 3 members</span><span class="text-xs font-black text-zinc-900">58</span></div>
                        <div class="flex items-center justify-between rounded-xl border border-zinc-100 bg-zinc-50 px-3 py-2.5"><span class="text-xs font-medium text-zinc-600">Level 4 members</span><span class="text-xs font-black text-zinc-900">55</span></div>
                    </div>
                </section>

                <section class="card p-4">
                    <div class="mb-2.5 flex items-center justify-between">
                        <p class="text-sm font-bold text-zinc-900">Joined By Your Referral</p>
                        <a href="#" class="text-[11px] font-semibold text-zinc-500 hover:text-zinc-900">View all</a>
                    </div>
                    <div class="space-y-2">
                        <div class="flex items-center gap-2.5 rounded-xl border border-zinc-100 bg-zinc-50 px-3 py-2.5">
                            <span class="flex h-8 w-8 items-center justify-center rounded-full bg-zinc-900 text-[10px] font-black text-white">RA</span>
                            <div class="min-w-0 flex-1">
                                <p class="truncate text-xs font-semibold text-zinc-900">Rahat Ahmed</p>
                                <p class="text-[10px] text-zinc-400">Joined 2 days ago · Level 1</p>
                            </div>
                            <span class="rounded-full border border-emerald-100 bg-emerald-50 px-2 py-0.5 text-[10px] font-semibold text-emerald-700">Active</span>
                        </div>
                        <div class="flex items-center gap-2.5 rounded-xl border border-zinc-100 bg-zinc-50 px-3 py-2.5">
                            <span class="flex h-8 w-8 items-center justify-center rounded-full bg-zinc-900 text-[10px] font-black text-white">SI</span>
                            <div class="min-w-0 flex-1">
                                <p class="truncate text-xs font-semibold text-zinc-900">Siam Khan</p>
                                <p class="text-[10px] text-zinc-400">Joined 5 days ago · Level 2</p>
                            </div>
                            <span class="rounded-full border border-blue-100 bg-blue-50 px-2 py-0.5 text-[10px] font-semibold text-blue-700">New</span>
                        </div>
                        <div class="flex items-center gap-2.5 rounded-xl border border-zinc-100 bg-zinc-50 px-3 py-2.5">
                            <span class="flex h-8 w-8 items-center justify-center rounded-full bg-zinc-900 text-[10px] font-black text-white">ME</span>
                            <div class="min-w-0 flex-1">
                                <p class="truncate text-xs font-semibold text-zinc-900">Mehedi Hasan</p>
                                <p class="text-[10px] text-zinc-400">Joined 1 week ago · Level 3</p>
                            </div>
                            <span class="rounded-full border border-zinc-200 bg-white px-2 py-0.5 text-[10px] font-semibold text-zinc-600">Idle</span>
                        </div>
                    </div>
                </section>
            </main>
        </div>

        @include('partials.footer', ['class' => 'border-t border-zinc-100 bg-white'])
        @include('partials.mobile-drawer', ['active' => 'referrals'])
        @include('partials.mobile-bottom-nav')

    </body>
</html>
