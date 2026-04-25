<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
        <meta name="theme-color" content="#ffffff">
        <title>SohoXash — Earn Real Money From Simple Online Tasks</title>
        <meta name="description" content="Complete small online tasks, earn money daily. Withdraw via bKash, Nagad, Rocket, or PayPal.">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800,900" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    {{-- Extra bottom padding on mobile for sticky CTA strip --}}
    <body class="bg-white text-zinc-900 antialiased pb-[76px] md:pb-0">

        {{-- ── NAV ── --}}
        <nav class="sticky top-0 z-50 border-b border-zinc-100 bg-white/95 backdrop-blur-xl">
            <div class="mx-auto flex max-w-6xl items-center justify-between gap-3 px-4 py-3 sm:px-6">
                <a href="/" class="flex flex-none items-center gap-2" aria-label="SohoXash">
                    <span class="flex h-8 w-8 flex-none items-center justify-center rounded-xl bg-zinc-900 text-xs font-black text-white">SX</span>
                    <span class="text-sm font-black tracking-[-0.04em] sm:text-base">SohoXash</span>
                </a>

                {{-- Desktop nav links --}}
                <div class="hidden items-center gap-6 md:flex">
                    <a href="#how" class="text-sm font-medium text-zinc-400 transition-colors hover:text-zinc-900">How it works</a>
                    <a href="#payouts" class="text-sm font-medium text-zinc-400 transition-colors hover:text-zinc-900">Payouts</a>
                </div>

                {{-- Both auth buttons — always visible --}}
                <div class="flex items-center gap-2">
                    <a href="{{ route('login') }}" class="btn btn-outline btn-sm">Sign in</a>
                    <a href="{{ route('register') }}" class="btn btn-primary btn-sm">Register</a>
                </div>
            </div>
        </nav>

        {{-- ── HERO ── --}}
        <section class="relative overflow-hidden bg-white px-4 pb-10 pt-10 sm:px-6 sm:pt-16 lg:pt-20">
            <div class="pointer-events-none absolute inset-x-0 top-0 h-52 bg-gradient-to-b from-zinc-50/70 to-transparent" aria-hidden="true"></div>

            <div class="mx-auto max-w-6xl">
                {{-- Mobile: single column. Desktop: two column --}}
                <div class="grid gap-10 lg:grid-cols-[1.1fr_0.9fr] lg:items-center">

                    {{-- Copy --}}
                    <div>
                        <div class="hero-animate" style="animation-delay:0ms">
                            <div class="live-badge">
                                <span class="live-dot"></span>
                                <span>12,450 users earning right now</span>
                            </div>
                        </div>

                        <h1
                            class="hero-animate mt-4 text-[clamp(2.5rem,8vw,4.75rem)] font-black leading-[1.04] tracking-[-0.055em]"
                            style="animation-delay:90ms"
                        >
                            Turn free time<br>into
                            <span class="text-emerald-600">real&nbsp;money.</span>
                        </h1>

                        <p
                            class="hero-animate mt-4 max-w-md text-[1rem] leading-7 text-zinc-500 sm:text-lg"
                            style="animation-delay:180ms"
                        >
                            Complete simple tasks, build referrals, and withdraw to bKash, Nagad, or Rocket — instantly.
                        </p>

                        {{-- CTA buttons: full-width on mobile, inline on desktop --}}
                        <div
                            class="hero-animate mt-6 flex flex-col gap-2.5 sm:flex-row sm:items-center"
                            style="animation-delay:270ms"
                        >
                            <a href="{{ route('register') }}" class="btn btn-primary w-full justify-center px-7 py-3.5 text-base sm:w-auto">
                                Start Earning — Free
                            </a>
                            <a href="#how" class="btn btn-outline w-full justify-center px-7 sm:w-auto">
                                How it works
                            </a>
                        </div>

                        <div
                            class="hero-animate mt-5 flex flex-wrap gap-x-5 gap-y-2 text-sm font-medium text-zinc-400"
                            style="animation-delay:360ms"
                        >
                            <span class="flex items-center gap-1.5"><span class="h-1.5 w-1.5 rounded-full bg-emerald-600"></span> No investment</span>
                            <span class="flex items-center gap-1.5"><span class="h-1.5 w-1.5 rounded-full bg-emerald-600"></span> Free to join</span>
                            <span class="flex items-center gap-1.5"><span class="h-1.5 w-1.5 rounded-full bg-emerald-600"></span> Same-day payout</span>
                        </div>
                    </div>

                    {{-- Live withdrawal card --}}
                    <div class="hero-animate mx-auto w-full max-w-xs lg:max-w-none" style="animation-delay:200ms">
                        <div class="card overflow-hidden p-4">
                            <div class="mb-3 flex items-center justify-between">
                                <p class="text-sm font-bold">Live Withdrawals</p>
                                <span class="live-badge py-1 text-xs"><span class="live-dot"></span>Live</span>
                            </div>
                            <div class="relative h-[190px] overflow-hidden sm:h-[210px]" aria-hidden="true">
                                <div class="pointer-events-none absolute inset-x-0 top-0 z-10 h-8 bg-gradient-to-b from-white to-transparent"></div>
                                <div class="pointer-events-none absolute inset-x-0 bottom-0 z-10 h-8 bg-gradient-to-t from-white to-transparent"></div>
                                @php
                                    $feed = [
                                        ['user'=>'Rahim***',  'method'=>'bKash',   'ago'=>'just now', 'amt'=>'+৳120'],
                                        ['user'=>'Karim***',  'method'=>'Nagad',   'ago'=>'2 min',    'amt'=>'+৳75'],
                                        ['user'=>'Shuvo***',  'method'=>'Rocket',  'ago'=>'4 min',    'amt'=>'+৳200'],
                                        ['user'=>'Mitu***',   'method'=>'bKash',   'ago'=>'6 min',    'amt'=>'+৳50'],
                                        ['user'=>'Jamal***',  'method'=>'Nagad',   'ago'=>'8 min',    'amt'=>'+৳340'],
                                        ['user'=>'Rupa***',   'method'=>'Rocket',  'ago'=>'11 min',   'amt'=>'+৳95'],
                                    ];
                                @endphp
                                <div class="feed-track space-y-2">
                                    @foreach (array_merge($feed, $feed) as $row)
                                        <div class="activity-item">
                                            <div class="flex items-center gap-2.5">
                                                <span class="flex h-7 w-7 flex-none items-center justify-center rounded-lg bg-zinc-100">
                                                    <svg class="h-3.5 w-3.5 text-zinc-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                        <rect x="7" y="2" width="10" height="20" rx="2"></rect>
                                                        <path d="M11 18h2"></path>
                                                    </svg>
                                                </span>
                                                <div>
                                                    <p class="text-xs font-semibold leading-none text-zinc-900">{{ $row['user'] }}</p>
                                                    <p class="mt-0.5 text-[10px] text-zinc-400">via {{ $row['method'] }} · {{ $row['ago'] }}</p>
                                                </div>
                                            </div>
                                            <span class="earn-pill text-xs">{{ $row['amt'] }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Mobile-only activity chips ticker (horizontal scroll) --}}
                <div class="mt-5 -mx-4 px-4 overflow-x-auto no-scrollbar sm:hidden" style="animation-delay:450ms" aria-label="Recent withdrawals">
                    <div class="flex gap-2 pb-1">
                        @foreach ($feed as $row)
                            <div class="activity-chip">
                                <span class="live-dot"></span>
                                <span>{{ $row['user'] }} · {{ $row['amt'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        {{-- ── STATS BAR ── --}}
        <section class="border-y border-zinc-100 bg-zinc-50 px-4 py-8 sm:px-6">
            <div class="mx-auto max-w-6xl">
                <div class="grid grid-cols-3 gap-4 reveal-stagger">
                    <div class="text-center sm:text-left">
                        <p class="stat-number text-emerald-600" data-count="15" data-prefix="৳" data-suffix="L+">৳0L</p>
                        <p class="stat-label mt-0.5">Total paid</p>
                    </div>
                    <div class="text-center sm:text-left">
                        <p class="stat-number" data-count="50" data-suffix="K+">0K</p>
                        <p class="stat-label mt-0.5">Members</p>
                    </div>
                    <div class="text-center sm:text-left">
                        <p class="stat-number" data-count="4.4" data-suffix="★">0★</p>
                        <p class="stat-label mt-0.5">App rating</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- ── HOW IT WORKS ── --}}
        <section id="how" class="px-4 py-14 sm:px-6">
            <div class="mx-auto max-w-6xl">
                <div class="reveal mb-7">
                    <p class="section-eyebrow">How it works</p>
                    <h2 class="mt-2 text-2xl font-black tracking-[-0.04em] sm:text-4xl">Three steps to your first payout.</h2>
                </div>
                <div class="grid gap-3 md:grid-cols-3 reveal-stagger">
                    <div class="card flex gap-4 p-5 md:flex-col md:gap-0">
                        <span class="flex h-10 w-10 flex-none items-center justify-center rounded-xl border border-zinc-100 bg-zinc-50 text-lg font-black text-zinc-300 md:mb-4">1</span>
                        <div>
                            <h3 class="text-[0.9375rem] font-bold text-zinc-900">Create free account</h3>
                            <p class="mt-1 text-sm leading-6 text-zinc-500">Sign up with your phone or email in under a minute. No fees, no KYC.</p>
                        </div>
                    </div>
                    <div class="card flex gap-4 border-emerald-100 p-5 md:flex-col md:gap-0">
                        <span class="flex h-10 w-10 flex-none items-center justify-center rounded-xl bg-emerald-50 text-lg font-black text-emerald-500 md:mb-4">2</span>
                        <div>
                            <h3 class="text-[0.9375rem] font-bold text-zinc-900">Pick and complete tasks</h3>
                            <p class="mt-1 text-sm leading-6 text-zinc-500">Browse tasks by reward and time. Each one shows exactly what to do.</p>
                        </div>
                    </div>
                    <div class="card flex gap-4 p-5 md:flex-col md:gap-0">
                        <span class="flex h-10 w-10 flex-none items-center justify-center rounded-xl border border-zinc-100 bg-zinc-50 text-lg font-black text-zinc-300 md:mb-4">3</span>
                        <div>
                            <h3 class="text-[0.9375rem] font-bold text-zinc-900">Withdraw to your wallet</h3>
                            <p class="mt-1 text-sm leading-6 text-zinc-500">Cash out to bKash, Nagad, Rocket, Binance, or PayPal. Minimum ৳50.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ── PAYOUTS ── --}}
        <section id="payouts" class="border-t border-zinc-100 bg-zinc-50 px-4 py-14 sm:px-6">
            <div class="mx-auto max-w-6xl">
                <div class="reveal mb-7">
                    <p class="section-eyebrow">Fast payouts</p>
                    <h2 class="mt-2 text-2xl font-black tracking-[-0.04em] sm:text-4xl">Withdraw to wallets<br class="hidden sm:block"> you already use.</h2>
                </div>
                {{-- 3-col on mobile, 5-col on desktop --}}
                <div class="grid grid-cols-3 gap-2.5 sm:grid-cols-5 reveal-stagger">
                    <div class="payout-tile">
                        <div class="payout-icon bg-pink-50">BK</div>
                        <p class="payout-name text-sm">bKash</p>
                        <p class="payout-min">min ৳50</p>
                    </div>
                    <div class="payout-tile">
                        <div class="payout-icon bg-orange-50">NG</div>
                        <p class="payout-name text-sm">Nagad</p>
                        <p class="payout-min">min ৳50</p>
                    </div>
                    <div class="payout-tile">
                        <div class="payout-icon bg-purple-50">RK</div>
                        <p class="payout-name text-sm">Rocket</p>
                        <p class="payout-min">min ৳50</p>
                    </div>
                    <div class="payout-tile">
                        <div class="payout-icon bg-yellow-50">BN</div>
                        <p class="payout-name text-sm">Binance</p>
                        <p class="payout-min">min $1</p>
                    </div>
                    <div class="payout-tile">
                        <div class="payout-icon bg-blue-50">PP</div>
                        <p class="payout-name text-sm">PayPal</p>
                        <p class="payout-min">min $5</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- ── DARK CTA ── --}}
        <section id="dark-cta" class="bg-zinc-900 px-4 py-14 sm:px-6">
            <div class="mx-auto max-w-2xl text-center reveal">
                <div class="live-badge inline-flex border-zinc-700 bg-zinc-800 text-zinc-400">
                    <span class="live-dot"></span>
                    <span>Thousands earning every day</span>
                </div>
                <h2 class="mt-5 text-[clamp(1.875rem,5vw,3.25rem)] font-black tracking-[-0.05em] text-white">
                    Ready to start<br>earning today?
                </h2>
                <p class="mx-auto mt-3 max-w-sm text-sm leading-7 text-zinc-400">
                    Free account. No investment required. Withdraw from ৳50.
                </p>
                <div class="mt-6 flex flex-col items-stretch gap-2.5 sm:flex-row sm:items-center sm:justify-center">
                    <a href="{{ route('register') }}" class="btn btn-white px-8 py-3.5">Create Free Account</a>
                    <a href="{{ route('login') }}" class="btn btn-ghost px-8">Sign in instead</a>
                </div>
            </div>
        </section>

        @include('partials.footer')

        {{-- ── STICKY MOBILE CTA (hidden on md+) ── --}}
        <div
            id="mobile-cta-strip"
            class="mobile-cta-strip md:hidden"
            aria-hidden="true"
        >
            <a href="{{ route('register') }}" class="btn btn-primary flex-1 justify-center py-3.5 text-base">
                Start Earning — Free
            </a>
            <a href="{{ route('login') }}" class="btn btn-outline btn-sm flex-none px-4">
                Sign in
            </a>
        </div>

    </body>
</html>
