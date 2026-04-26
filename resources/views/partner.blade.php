<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
        <meta name="theme-color" content="#ffffff">
        <title>Partner Program — SohoXash</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800,900" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-zinc-50 text-zinc-900 antialiased">
        @include('partials.desktop-sidebar', ['active' => 'partner'])

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
                    <p class="text-[10px] font-bold uppercase tracking-widest text-zinc-300">Partner Program</p>
                    <h1 class="mt-1 text-xl font-black tracking-[-0.03em]">Freely Partner Application</h1>
                    <p class="mt-1.5 text-xs leading-5 text-zinc-200">
                        Partner dashboard access, higher task limits, and premium referral rewards.
                    </p>
                </section>

                <section class="section-card">
                    <h2 class="text-sm font-black text-zinc-900">Why join partner program?</h2>
                    <div class="mt-2 space-y-2 text-xs text-zinc-500">
                        <p>Get priority task access and stronger earning potential from referrals.</p>
                        <p>Dedicated support response and higher trust score in campaigns.</p>
                        <p>Perfect for creators, team leaders, and community managers.</p>
                    </div>
                </section>

                <section class="section-card">
                    <h2 class="text-sm font-black text-zinc-900">Partner Benefits</h2>
                    <div class="mt-3 grid gap-2">
                        <div class="section-soft text-xs font-medium text-zinc-600">High conversion referral campaign tools</div>
                        <div class="section-soft text-xs font-medium text-zinc-600">Priority review for submitted proofs</div>
                        <div class="section-soft text-xs font-medium text-zinc-600">Weekly performance insights and tips</div>
                        <div class="section-soft text-xs font-medium text-zinc-600">Direct support line for partner members</div>
                    </div>
                </section>

                <section class="section-card">
                    <h2 class="text-sm font-black text-zinc-900">Apply for Partner Program</h2>
                    <p class="mt-1 text-xs text-zinc-400">Fill all required fields to submit your request.</p>

                    <form class="mt-3 space-y-2.5">
                        <label class="auth-field">
                            <span class="auth-field-label">Full name</span>
                            <input type="text" class="auth-field-input" placeholder="Your full name" required>
                        </label>
                        <label class="auth-field">
                            <span class="auth-field-label">Gmail</span>
                            <input type="email" class="auth-field-input" placeholder="you@gmail.com" required>
                        </label>
                        <label class="auth-field">
                            <span class="auth-field-label">Paste number</span>
                            <input type="text" class="auth-field-input" placeholder="01XXXXXXXXX" required>
                        </label>
                        <label class="auth-field">
                            <span class="auth-field-label">Country</span>
                            <input type="text" class="auth-field-input" placeholder="Bangladesh" required>
                        </label>
                        <label class="auth-field">
                            <span class="auth-field-label">Address</span>
                            <input type="text" class="auth-field-input" placeholder="Your area / district" required>
                        </label>
                        <label class="auth-field">
                            <span class="auth-field-label">About yourself</span>
                            <textarea class="auth-field-input min-h-20 resize-none" placeholder="Tell us about your work and audience..." required></textarea>
                        </label>
                        <button type="submit" class="btn btn-primary mt-1 w-full justify-center py-3">Submit</button>
                    </form>
                </section>

            </main>
        </div>

        @include('partials.footer', ['class' => 'border-t border-zinc-100 bg-white'])

        @include('partials.mobile-drawer', ['active' => 'partner'])

        @include('partials.mobile-bottom-nav')

    </body>
</html>
