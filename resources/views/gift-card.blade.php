<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
        <meta name="theme-color" content="#ffffff">
        <title>Gift Card Redeem — SohoXash</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800,900" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-zinc-50 text-zinc-900 antialiased">
        @include('partials.desktop-sidebar', ['active' => 'gift'])

        <div class="w-full bg-zinc-50 md:ml-56 md:min-h-screen">

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

            <main class="page-shell">
                <section class="section-hero">
                    <p class="text-[10px] font-bold uppercase tracking-widest text-zinc-300">Bonus Center</p>
                    <h1 class="mt-1 text-xl font-black tracking-[-0.03em]">Redeem Gift Card</h1>
                    <p class="mt-1.5 text-xs leading-5 text-zinc-200">
                        Enter your gift card number and claim instant bonus into your wallet.
                    </p>
                </section>

                <section class="section-card">
                    <p class="text-sm font-bold text-zinc-900">Gift Card Number</p>
                    <p class="mt-1 text-xs text-zinc-400">Use a valid card number provided by SohoXash campaigns.</p>

                    <form class="mt-3 space-y-2.5">
                        <label class="auth-field">
                            <span class="auth-field-label">Card Number</span>
                            <input type="text" class="auth-field-input" placeholder="SX-GIFT-XXXX-XXXX" required>
                        </label>
                        <button type="submit" class="btn btn-primary mt-1 w-full justify-center py-3">
                            Redeem Bonus
                        </button>
                    </form>
                </section>

                <section class="section-card">
                    <div class="mb-2.5 flex items-center justify-between">
                        <p class="text-sm font-bold text-zinc-900">Recent Redeem History</p>
                        <span class="rounded-full border border-zinc-100 bg-zinc-50 px-2 py-0.5 text-[10px] font-semibold text-zinc-500">Latest</span>
                    </div>
                    <div class="space-y-2">
                        <div class="section-soft">
                            <div class="flex items-center justify-between">
                                <p class="text-xs font-bold text-zinc-900">SX-GIFT-4K9A-1172</p>
                                <span class="rounded-full border border-emerald-100 bg-emerald-50 px-2 py-0.5 text-[10px] font-semibold text-emerald-700">Success</span>
                            </div>
                            <p class="mt-1 text-[11px] text-zinc-400">Bonus +৳120 · Redeemed 2 days ago</p>
                        </div>
                        <div class="section-soft">
                            <div class="flex items-center justify-between">
                                <p class="text-xs font-bold text-zinc-900">SX-GIFT-ABCD-9091</p>
                                <span class="rounded-full border border-amber-100 bg-amber-50 px-2 py-0.5 text-[10px] font-semibold text-amber-700">Used</span>
                            </div>
                            <p class="mt-1 text-[11px] text-zinc-400">This code was already used.</p>
                        </div>
                    </div>
                </section>
            </main>
        </div>

        @include('partials.footer', ['class' => 'border-t border-zinc-100 bg-white'])
        @include('partials.mobile-drawer', ['active' => 'gift'])
        @include('partials.mobile-bottom-nav')

    </body>
</html>
