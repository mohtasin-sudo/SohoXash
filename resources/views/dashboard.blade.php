<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
        <meta name="theme-color" content="#f4f4f5">
        <title>Dashboard — SohoXash</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800,900" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-zinc-50 text-zinc-900 antialiased">

        {{-- ══════════════════════════════════════════
             DESKTOP SIDEBAR (md+)
        ══════════════════════════════════════════ --}}
        <aside class="fixed inset-y-0 left-0 z-30 hidden w-56 flex-col border-r border-zinc-100 bg-white md:flex">

            {{-- Logo --}}
            <div class="flex items-center gap-2.5 border-b border-zinc-100 px-5 py-4">
                <span class="flex h-8 w-8 flex-none items-center justify-center rounded-xl bg-zinc-900 text-xs font-black text-white">SX</span>
                <span class="text-base font-black tracking-[-0.04em]">SohoXash</span>
            </div>

            {{-- User info --}}
            <div class="flex items-center gap-2.5 border-b border-zinc-100 px-5 py-3.5">
                <span class="flex h-8 w-8 flex-none items-center justify-center rounded-xl bg-zinc-900 text-xs font-black text-white">R</span>
                <div class="min-w-0">
                    <p class="truncate text-sm font-bold text-zinc-900">Rahim Islam</p>
                    <p class="truncate text-[11px] text-zinc-400">rahim@example.com</p>
                </div>
            </div>

            {{-- Balance --}}
            <div class="mx-4 mt-3.5 rounded-xl bg-emerald-50 px-3.5 py-3 ring-1 ring-emerald-100">
                <p class="text-[10px] font-bold uppercase tracking-widest text-emerald-600">Pro Wallet</p>
                <p class="mt-0.5 text-xl font-black tracking-[-0.04em] text-emerald-600">৳50.00</p>
                <a href="#" class="mt-1.5 inline-flex text-xs font-semibold text-emerald-700 hover:text-emerald-900">Withdraw →</a>
            </div>

            {{-- Nav --}}
            <nav class="mt-3 flex-1 overflow-y-auto px-3 pb-4">
                <p class="mb-1 px-2 text-[10px] font-bold uppercase tracking-widest text-zinc-300">Menu</p>
                <a href="{{ route('dashboard') }}" class="flex items-center gap-2.5 rounded-xl bg-zinc-50 px-3 py-2.5 text-sm font-semibold text-zinc-900">
                    <i class="bi bi-house-door text-base"></i>
                    Dashboard
                </a>
                <a href="#" class="flex items-center gap-2.5 rounded-xl px-3 py-2.5 text-sm font-medium text-zinc-500 transition-colors hover:bg-zinc-50 hover:text-zinc-900">
                    <i class="bi bi-list-task text-base"></i>
                    My Tasks
                    <span class="ml-auto flex h-5 w-5 items-center justify-center rounded-full bg-emerald-100 text-[9px] font-black text-emerald-700">4</span>
                </a>
                <a href="#" class="flex items-center gap-2.5 rounded-xl px-3 py-2.5 text-sm font-medium text-zinc-500 transition-colors hover:bg-zinc-50 hover:text-zinc-900">
                    <i class="bi bi-wallet2 text-base"></i>
                    Earnings
                </a>
                <a href="#" class="flex items-center gap-2.5 rounded-xl px-3 py-2.5 text-sm font-medium text-zinc-500 transition-colors hover:bg-zinc-50 hover:text-zinc-900">
                    <i class="bi bi-people text-base"></i>
                    Referrals
                </a>
                <a href="#" class="flex items-center gap-2.5 rounded-xl px-3 py-2.5 text-sm font-medium text-zinc-500 transition-colors hover:bg-zinc-50 hover:text-zinc-900">
                    <i class="bi bi-bell text-base"></i>
                    Notifications
                    <span class="ml-auto flex h-5 w-5 items-center justify-center rounded-full bg-red-500 text-[9px] font-black text-white">3</span>
                </a>
                <p class="mb-1 mt-3 px-2 text-[10px] font-bold uppercase tracking-widest text-zinc-300">Account</p>
                <a href="#" class="flex items-center gap-2.5 rounded-xl px-3 py-2.5 text-sm font-medium text-zinc-500 transition-colors hover:bg-zinc-50 hover:text-zinc-900">
                    <i class="bi bi-person text-base"></i>
                    Profile
                </a>
                <a href="#" class="flex items-center gap-2.5 rounded-xl px-3 py-2.5 text-sm font-medium text-zinc-500 transition-colors hover:bg-zinc-50 hover:text-zinc-900">
                    <i class="bi bi-gear text-base"></i>
                    Settings
                </a>
                <a href="#" class="flex items-center gap-2.5 rounded-xl px-3 py-2.5 text-sm font-medium text-zinc-500 transition-colors hover:bg-zinc-50 hover:text-zinc-900">
                    <i class="bi bi-life-preserver text-base"></i>
                    Support
                </a>
            </nav>

            <div class="border-t border-zinc-100 px-4 py-4">
                <a href="{{ route('login') }}" class="flex items-center gap-2 text-sm font-semibold text-red-500 hover:text-red-600">
                    <i class="bi bi-box-arrow-right text-base"></i>
                    Sign out
                </a>
            </div>
        </aside>

        {{-- ══════════════════════════════════════════
             MAIN SHELL (offset by sidebar on desktop)
        ══════════════════════════════════════════ --}}
        <div class="md:ml-56">

            {{-- ── VERIFICATION NOTICE ── --}}
            <div
                class="dash-alert relative overflow-hidden border-b-0 px-4 py-3"
                style="background: linear-gradient(135deg, #92400e 0%, #c2410c 100%);"
            >
                <div class="pointer-events-none absolute -right-6 -top-6 h-20 w-20 rounded-full bg-white/10" aria-hidden="true"></div>
                <div class="pointer-events-none absolute -bottom-4 right-10 h-12 w-12 rounded-full bg-white/10" aria-hidden="true"></div>
                <div class="relative flex items-center gap-3">
                    <span class="flex h-8 w-8 flex-none items-center justify-center rounded-lg bg-white/20">
                        <svg class="h-4 w-4 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="5" y="11" width="14" height="9" rx="2"></rect>
                            <path d="M8 11V8a4 4 0 1 1 8 0v3"></path>
                        </svg>
                    </span>
                    <div class="min-w-0 flex-1">
                        <p class="text-xs font-black text-white">Account not verified</p>
                        <p class="text-[11px] font-medium text-orange-200">Verify to unlock all tasks &amp; withdrawals</p>
                    </div>
                    <a href="#" class="flex-none rounded-lg bg-white px-3 py-1.5 text-xs font-black text-orange-700 shadow-sm transition-opacity hover:opacity-90 active:scale-95">Verify →</a>
                    <button type="button" aria-label="Dismiss" class="ml-1 flex-none text-white/60 transition-colors hover:text-white">✕</button>
                </div>
            </div>

            {{-- ── HEADER ── --}}
            <header class="dash-header md:px-6">
                {{-- Mobile: 3-dot drawer | Desktop: page title --}}
                <button
                    type="button"
                    id="drawer-open"
                    aria-label="Open menu"
                    aria-expanded="false"
                    class="flex h-9 w-9 flex-none items-center justify-center rounded-xl border border-zinc-100 text-zinc-400 transition-all hover:border-zinc-300 hover:text-zinc-700 md:hidden"
                >
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true">
                        <circle cx="8" cy="3" r="1.5"/>
                        <circle cx="8" cy="8" r="1.5"/>
                        <circle cx="8" cy="13" r="1.5"/>
                    </svg>
                </button>
                <p class="hidden text-lg font-black tracking-[-0.03em] md:block">Dashboard</p>

                {{-- Mobile: logo | Desktop: hidden (sidebar has it) --}}
                <a href="/" class="flex items-center gap-2 md:hidden">
                    <span class="flex h-8 w-8 flex-none items-center justify-center rounded-xl bg-zinc-900 text-xs font-black text-white">SX</span>
                    <span class="text-base font-black tracking-[-0.04em]">SohoXash</span>
                </a>

                {{-- Right: Cart --}}
                <button
                    type="button"
                    aria-label="Cart"
                    class="relative flex h-9 w-9 flex-none items-center justify-center rounded-xl border border-zinc-100 text-base text-zinc-500 transition-all hover:border-zinc-300"
                >
                    <i class="bi bi-cart3"></i>
                    <span class="absolute -right-1 -top-1 flex h-4 w-4 items-center justify-center rounded-full bg-zinc-900 text-[9px] font-black text-white">2</span>
                </button>
            </header>

            {{-- ── SECTION TABS ── --}}
            <div class="border-b border-zinc-100 bg-white px-4 py-2 md:px-6">
                <div class="no-scrollbar flex gap-2 overflow-x-auto">
                    <a href="{{ route('partner') }}" class="flex flex-none items-center gap-1.5 rounded-lg border border-zinc-100 bg-zinc-50 px-3 py-1.5 text-xs font-semibold text-zinc-600 transition-colors hover:border-zinc-200 hover:bg-zinc-100">
                        <i class="bi bi-diagram-3"></i>
                        <span>Partner</span>
                    </a>
                    <a href="#" class="flex flex-none items-center gap-1.5 rounded-lg border border-zinc-100 bg-zinc-50 px-3 py-1.5 text-xs font-semibold text-zinc-600 transition-colors hover:border-zinc-200 hover:bg-zinc-100">
                        <i class="bi bi-cash-stack"></i>
                        <span>Salary</span>
                    </a>
                    <a href="#" class="flex flex-none items-center gap-1.5 rounded-lg border border-zinc-100 bg-zinc-50 px-3 py-1.5 text-xs font-semibold text-zinc-600 transition-colors hover:border-zinc-200 hover:bg-zinc-100">
                        <i class="bi bi-broadcast"></i>
                        <span>Live</span>
                    </a>
                    <a href="#" class="flex flex-none items-center gap-1.5 rounded-lg border border-zinc-100 bg-zinc-50 px-3 py-1.5 text-xs font-semibold text-zinc-600 transition-colors hover:border-zinc-200 hover:bg-zinc-100">
                        <i class="bi bi-trophy"></i>
                        <span>Leader</span>
                    </a>
                </div>
            </div>

            {{-- ══════════════════════════════════════════
                 CONTENT — single col mobile / 2-col desktop
            ══════════════════════════════════════════ --}}
            <div class="px-4 py-4 pb-28 md:grid md:grid-cols-[1fr_17rem] md:items-start md:gap-6 md:px-6 md:py-6 md:pb-6">

                {{-- ── LEFT / MAIN COLUMN ── --}}
                <main class="space-y-3 md:space-y-4">

                    {{-- Wallet + financial summary --}}
                    <section aria-label="Wallets and financial summary" class="card p-3.5">
                        <div class="grid grid-cols-3 gap-2">
                            <div class="rounded-xl border border-blue-100 bg-blue-50 px-2.5 py-2">
                                <p class="text-[9px] font-bold uppercase tracking-widest text-blue-600">Lite</p>
                                <p class="mt-0.5 text-sm font-black tracking-tight text-blue-700">৳0.00</p>
                            </div>
                            <div class="rounded-xl border border-emerald-100 bg-emerald-50 px-2.5 py-2">
                                <p class="text-[9px] font-bold uppercase tracking-widest text-emerald-600">Pro</p>
                                <p class="mt-0.5 text-sm font-black tracking-tight text-emerald-700">৳50.00</p>
                            </div>
                            <div class="rounded-xl border border-violet-100 bg-violet-50 px-2.5 py-2">
                                <p class="text-[9px] font-bold uppercase tracking-widest text-violet-600">Refer</p>
                                <p class="mt-0.5 text-sm font-black tracking-tight text-violet-700">৳0.00</p>
                            </div>
                        </div>

                        <div class="mt-2.5 grid grid-cols-3 gap-2">
                            <div class="rounded-xl border border-blue-100 bg-blue-50 px-2.5 py-2">
                                <p class="text-[9px] font-semibold uppercase tracking-wider text-blue-600">Total Income</p>
                                <p class="mt-0.5 text-xs font-black text-blue-700">৳8,420</p>
                            </div>
                            <div class="rounded-xl border border-emerald-100 bg-emerald-50 px-2.5 py-2">
                                <p class="text-[9px] font-semibold uppercase tracking-wider text-emerald-600">Total Withdraw</p>
                                <p class="mt-0.5 text-xs font-black text-emerald-700">৳6,980</p>
                            </div>
                            <div class="rounded-xl border border-amber-100 bg-amber-50 px-2.5 py-2">
                                <p class="text-[9px] font-semibold uppercase tracking-wider text-amber-600">Pending Withdraw</p>
                                <p class="mt-0.5 text-xs font-black text-amber-700">৳240</p>
                            </div>
                        </div>
                    </section>

                    {{-- Earnings chart --}}
                    <section aria-label="Earnings chart">
                        <div class="mb-2.5 flex items-center justify-between">
                            <p class="text-sm font-bold text-zinc-900">Earnings Overview</p>
                            <div class="flex overflow-hidden rounded-lg border border-zinc-100 bg-zinc-50 p-0.5 gap-0.5">
                                <button data-period="day" class="rounded-md px-3 py-1.5 text-xs font-semibold text-zinc-900 bg-white shadow-sm">Day</button>
                                <button data-period="week" class="rounded-md px-3 py-1.5 text-xs font-semibold text-zinc-400">Week</button>
                                <button data-period="month" class="rounded-md px-3 py-1.5 text-xs font-semibold text-zinc-400">Month</button>
                            </div>
                        </div>
                        <div class="card p-4">
                            <p class="mb-3 text-xs font-medium text-zinc-400">Apr 25 – Apr 26, 2026</p>
                            <div class="flex h-16 items-end gap-0.5">
                                @foreach ([15, 35, 20, 55, 40, 75, 50, 30, 65, 45, 25, 60, 70, 10, 80, 45, 20, 55, 35, 65] as $h)
                                    <div
                                        class="flex-1 rounded-t-sm transition-all"
                                        style="height: {{ $h }}%; background: {{ $h >= 60 ? '#09090b' : '#e4e4e7' }};"
                                    ></div>
                                @endforeach
                            </div>
                            <div class="mt-2 flex justify-between text-[10px] font-medium text-zinc-300">
                                <span>00:00</span><span>06:00</span><span>12:00</span><span>18:00</span><span>24:00</span>
                            </div>
                        </div>
                    </section>

                    {{-- Referral link --}}
                    <section aria-label="Referral link">
                        <div class="card p-4">
                            <div class="mb-2.5 flex items-center justify-between">
                                <p class="text-sm font-bold text-zinc-900">Your Referral Link</p>
                                <span class="earn-pill">+৳50 / refer</span>
                            </div>
                            <div class="flex items-center gap-2 rounded-xl border border-zinc-200 bg-zinc-50 px-3 py-2.5">
                                <p id="refer-link" class="flex-1 truncate text-xs font-medium text-zinc-500">https://sohoxash.com/r/rahim2321</p>
                                <button
                                    type="button"
                                    id="copy-refer-btn"
                                    class="flex-none rounded-lg bg-zinc-900 px-3 py-1.5 text-xs font-bold text-white transition-colors hover:bg-zinc-700 active:scale-95"
                                >Copy</button>
                            </div>
                            <p class="mt-2 text-[11px] text-zinc-400">Share this link and earn ৳50 for every friend who joins.</p>
                        </div>
                    </section>

                    {{-- ── PROMO BANNER SLIDER ── --}}
                    <section aria-label="Promotions">
                        <div class="relative overflow-hidden rounded-2xl" id="banner-slider">
                            {{-- Slides --}}
                            <div class="banner-track flex transition-transform duration-500 ease-out">

                                <div class="banner-slide min-w-full rounded-2xl p-5 text-white" style="background: linear-gradient(135deg, #1e3a5f 0%, #1d4ed8 100%);">
                                    <p class="text-[10px] font-bold uppercase tracking-widest text-blue-200">Limited time</p>
                                    <p class="mt-1 text-lg font-black leading-tight tracking-[-0.03em]">Complete 5 tasks<br>Earn ৳200 bonus</p>
                                    <p class="mt-1.5 text-xs text-blue-200">Offer ends tonight at midnight</p>
                                    <a href="#" class="mt-3 inline-flex rounded-lg bg-white px-4 py-1.5 text-xs font-black text-blue-700 transition-opacity hover:opacity-90">Start Now →</a>
                                </div>

                                <div class="banner-slide min-w-full rounded-2xl p-5 text-white" style="background: linear-gradient(135deg, #14532d 0%, #16a34a 100%);">
                                    <p class="text-[10px] font-bold uppercase tracking-widest text-emerald-200">Referral bonus</p>
                                    <p class="mt-1 text-lg font-black leading-tight tracking-[-0.03em]">Invite a friend<br>Get ৳50 instantly</p>
                                    <p class="mt-1.5 text-xs text-emerald-200">No limit — refer as many as you want</p>
                                    <a href="#" class="mt-3 inline-flex rounded-lg bg-white px-4 py-1.5 text-xs font-black text-emerald-700 transition-opacity hover:opacity-90">Share Link →</a>
                                </div>

                                <div class="banner-slide min-w-full rounded-2xl p-5 text-white" style="background: linear-gradient(135deg, #4c1d95 0%, #7c3aed 100%);">
                                    <p class="text-[10px] font-bold uppercase tracking-widest text-violet-200">New tasks</p>
                                    <p class="mt-1 text-lg font-black leading-tight tracking-[-0.03em]">50+ new tasks<br>added today</p>
                                    <p class="mt-1.5 text-xs text-violet-200">App installs, reviews &amp; surveys</p>
                                    <a href="#" class="mt-3 inline-flex rounded-lg bg-white px-4 py-1.5 text-xs font-black text-violet-700 transition-opacity hover:opacity-90">Browse Tasks →</a>
                                </div>

                                <div class="banner-slide min-w-full rounded-2xl p-5 text-white" style="background: linear-gradient(135deg, #7c2d12 0%, #ea580c 100%);">
                                    <p class="text-[10px] font-bold uppercase tracking-widest text-orange-200">Fast payout</p>
                                    <p class="mt-1 text-lg font-black leading-tight tracking-[-0.03em]">Withdraw in minutes<br>via bKash &amp; Nagad</p>
                                    <p class="mt-1.5 text-xs text-orange-200">Minimum withdrawal only ৳50</p>
                                    <a href="#" class="mt-3 inline-flex rounded-lg bg-white px-4 py-1.5 text-xs font-black text-orange-700 transition-opacity hover:opacity-90">Withdraw →</a>
                                </div>

                            </div>

                            {{-- Dot indicators --}}
                            <div class="absolute bottom-3 left-1/2 flex -translate-x-1/2 gap-1.5" id="banner-dots">
                                <button class="banner-dot h-1.5 w-5 rounded-full bg-white transition-all" data-index="0" aria-label="Slide 1"></button>
                                <button class="banner-dot h-1.5 w-1.5 rounded-full bg-white/40 transition-all" data-index="1" aria-label="Slide 2"></button>
                                <button class="banner-dot h-1.5 w-1.5 rounded-full bg-white/40 transition-all" data-index="2" aria-label="Slide 3"></button>
                                <button class="banner-dot h-1.5 w-1.5 rounded-full bg-white/40 transition-all" data-index="3" aria-label="Slide 4"></button>
                            </div>
                        </div>
                    </section>

                    {{-- Community (mobile — hidden on desktop) --}}
                    <section class="card overflow-hidden p-4 md:hidden">
                        <p class="text-base font-black tracking-[-0.03em] text-zinc-900">Need Help? Join Our Community</p>
                        <p class="mt-1 text-xs leading-5 text-zinc-500">Get instant support on Telegram &amp; WhatsApp.</p>
                        <p class="text-xs leading-5 text-red-400">আমাদের সাথে কানেক্ট থাকুন, আপডেট ও হেল্প দ্রুত পাবেন।</p>

                        <div class="mt-3 grid grid-cols-2 gap-2.5">
                            <div class="rounded-xl border border-zinc-100 bg-zinc-50 p-3">
                                <div class="flex items-center justify-between">
                                    <span class="flex h-9 w-9 items-center justify-center rounded-xl border border-zinc-200 bg-white shadow-sm">
                                        <svg class="h-4 w-4 text-zinc-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M22 2L11 13"></path><path d="M22 2l-7 20-4-9-9-4z"></path>
                                        </svg>
                                    </span>
                                    <a href="#" class="rounded-lg bg-zinc-900 px-3 py-1.5 text-xs font-bold text-white transition-opacity hover:opacity-80 active:scale-95">Join</a>
                                </div>
                                <p class="mt-2.5 text-xs font-bold text-zinc-900">Telegram Support</p>
                                <p class="mt-0.5 text-[11px] leading-4 text-zinc-400">Join our Telegram group for fast replies</p>
                            </div>
                            <div class="rounded-xl border border-zinc-100 bg-zinc-50 p-3">
                                <div class="flex items-center justify-between">
                                    <span class="flex h-9 w-9 items-center justify-center rounded-xl border border-zinc-200 bg-white shadow-sm">
                                        <svg class="h-4 w-4 text-zinc-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M22 2L11 13"></path><path d="M22 2l-7 20-4-9-9-4z"></path>
                                        </svg>
                                    </span>
                                    <a href="#" class="rounded-lg bg-zinc-900 px-3 py-1.5 text-xs font-bold text-white transition-opacity hover:opacity-80 active:scale-95">Chat</a>
                                </div>
                                <p class="mt-2.5 text-xs font-bold text-zinc-900">Telegram Support</p>
                                <p class="mt-0.5 text-[11px] leading-4 text-zinc-400">Chat with us on Telegram anytime</p>
                            </div>
                        </div>

                        <div class="mt-3 flex gap-2">
                            <span class="flex-none rounded-full border border-zinc-100 bg-zinc-50 px-3 py-1 text-[11px] font-semibold text-zinc-500">24/7 Support</span>
                            <span class="flex-none rounded-full border border-zinc-100 bg-zinc-50 px-3 py-1 text-[11px] font-semibold text-zinc-500">Quick Response</span>
                            <span class="flex-none rounded-full border border-zinc-100 bg-zinc-50 px-3 py-1 text-[11px] font-semibold text-zinc-500">Community Updates</span>
                        </div>
                    </section>


                </main>

                {{-- ── RIGHT PANEL (desktop only) ── --}}
                <aside class="hidden space-y-4 md:block">

                    {{-- Community --}}
                    <div class="card overflow-hidden p-4">
                        <p class="text-sm font-black tracking-[-0.03em] text-zinc-900">Need Help? Join Our Community</p>
                        <p class="mt-1 text-xs leading-5 text-zinc-500">Get instant support on Telegram &amp; WhatsApp.</p>
                        <p class="text-xs leading-5 text-red-400">আমাদের সাথে কানেক্ট থাকুন।</p>

                        <div class="mt-3 grid grid-cols-2 gap-2">
                            <div class="rounded-xl border border-zinc-100 bg-zinc-50 p-3">
                                <div class="flex items-center justify-between">
                                    <span class="flex h-8 w-8 items-center justify-center rounded-xl border border-zinc-200 bg-white shadow-sm">
                                        <svg class="h-4 w-4 text-zinc-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M22 2L11 13"></path><path d="M22 2l-7 20-4-9-9-4z"></path>
                                        </svg>
                                    </span>
                                    <a href="#" class="rounded-lg bg-zinc-900 px-2.5 py-1 text-[11px] font-bold text-white hover:opacity-80 active:scale-95">Join</a>
                                </div>
                                <p class="mt-2 text-xs font-bold text-zinc-900">Telegram Support</p>
                                <p class="mt-0.5 text-[10px] leading-4 text-zinc-400">Join our group for fast replies</p>
                            </div>
                            <div class="rounded-xl border border-zinc-100 bg-zinc-50 p-3">
                                <div class="flex items-center justify-between">
                                    <span class="flex h-8 w-8 items-center justify-center rounded-xl border border-zinc-200 bg-white shadow-sm">
                                        <svg class="h-4 w-4 text-zinc-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M22 2L11 13"></path><path d="M22 2l-7 20-4-9-9-4z"></path>
                                        </svg>
                                    </span>
                                    <a href="#" class="rounded-lg bg-zinc-900 px-2.5 py-1 text-[11px] font-bold text-white hover:opacity-80 active:scale-95">Chat</a>
                                </div>
                                <p class="mt-2 text-xs font-bold text-zinc-900">Telegram Support</p>
                                <p class="mt-0.5 text-[10px] leading-4 text-zinc-400">Chat with us anytime</p>
                            </div>
                        </div>

                        <div class="mt-3 flex flex-wrap gap-1.5">
                            <span class="rounded-full border border-zinc-100 bg-zinc-50 px-2.5 py-0.5 text-[10px] font-semibold text-zinc-500">24/7 Support</span>
                            <span class="rounded-full border border-zinc-100 bg-zinc-50 px-2.5 py-0.5 text-[10px] font-semibold text-zinc-500">Quick Response</span>
                            <span class="rounded-full border border-zinc-100 bg-zinc-50 px-2.5 py-0.5 text-[10px] font-semibold text-zinc-500">Community Updates</span>
                        </div>
                    </div>


                </aside>

            </div>{{-- end content grid --}}

        @include('partials.footer', ['class' => 'border-t border-zinc-100 bg-white'])

        </div>{{-- end main shell --}}

        {{-- ══════════════════════════════════════════
             MOBILE BOTTOM NAV (hidden on desktop)
        ══════════════════════════════════════════ --}}
        @include('partials.mobile-bottom-nav', ['active' => 'home'])

        {{-- ══════════════════════════════════════════
             APP DRAWER (mobile only)
        ══════════════════════════════════════════ --}}
        @include('partials.mobile-drawer', ['active' => 'dashboard'])

    </body>
</html>
