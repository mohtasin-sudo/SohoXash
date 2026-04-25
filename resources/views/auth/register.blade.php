<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
        <meta name="theme-color" content="#ffffff">
        <title>Create Account — SohoXash</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800,900" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-white text-zinc-900 antialiased sm:bg-zinc-100">

        {{-- Mobile top bar --}}
        <div class="flex items-center justify-between px-5 py-4 sm:hidden">
            <a href="/" class="flex items-center gap-1.5 text-sm font-semibold text-zinc-500">
                <span class="text-base leading-none">←</span> Back
            </a>
            <a href="{{ route('login') }}" class="text-sm font-semibold text-zinc-500">Sign in →</a>
        </div>

        <div class="auth-wrap py-6 sm:py-8">
            <div class="w-full max-w-sm">

                {{-- Logo --}}
                <div class="mb-6 text-center">
                    <a href="/" class="hidden items-center justify-center gap-2.5 sm:inline-flex">
                        <span class="flex h-10 w-10 flex-none items-center justify-center rounded-xl bg-zinc-900 text-sm font-black text-white">SX</span>
                        <span class="text-lg font-black tracking-[-0.04em] text-zinc-900">SohoXash</span>
                    </a>
                    <h1 class="mt-4 text-2xl font-black tracking-[-0.04em] text-zinc-900 sm:mt-6">Start earning today</h1>
                    <p class="mt-1.5 text-sm text-zinc-500">Free to join. No investment required.</p>
                </div>

                {{-- Referral bonus badge --}}
                <div class="mb-4 flex items-center justify-center gap-2 rounded-xl bg-emerald-50 px-4 py-2.5 ring-1 ring-emerald-100">
                    <span class="flex h-5 w-5 items-center justify-center rounded-md bg-emerald-100">
                        <svg class="h-3 w-3 text-emerald-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="8" width="18" height="13" rx="2"></rect>
                            <path d="M12 8v13M3 12h18M8 8c-1.2 0-2-1-2-2.1C6 4.8 6.8 4 7.9 4c1.5 0 2.4 1.5 4.1 4M16 8c1.2 0 2-1 2-2.1C18 4.8 17.2 4 16.1 4c-1.5 0-2.4 1.5-4.1 4"></path>
                        </svg>
                    </span>
                    <p class="text-xs font-semibold text-emerald-700">Get <strong>৳50</strong> bonus on registration</p>
                </div>

                <div class="auth-card">
                    <form method="POST" action="#" class="space-y-3">
                        @csrf

                        {{-- Name row --}}
                        <div class="grid grid-cols-2 gap-2.5">
                            <label class="auth-field">
                                <span class="auth-field-label">First name</span>
                                <input
                                    type="text"
                                    name="first_name"
                                    class="auth-field-input"
                                    placeholder="Rahim"
                                    autocomplete="given-name"
                                    required
                                >
                            </label>
                            <label class="auth-field">
                                <span class="auth-field-label">Last name</span>
                                <input
                                    type="text"
                                    name="last_name"
                                    class="auth-field-input"
                                    placeholder="Islam"
                                    autocomplete="family-name"
                                    required
                                >
                            </label>
                        </div>

                        <label class="auth-field">
                            <span class="auth-field-label">Phone number</span>
                            <input
                                type="tel"
                                name="phone"
                                class="auth-field-input"
                                placeholder="+880 17XX XXXXXX"
                                autocomplete="tel"
                                inputmode="tel"
                                required
                            >
                        </label>

                        <label class="auth-field">
                            <span class="auth-field-label">Email address</span>
                            <input
                                type="email"
                                name="email"
                                class="auth-field-input"
                                placeholder="you@example.com"
                                autocomplete="email"
                                inputmode="email"
                                required
                            >
                        </label>

                        {{-- Password with toggle --}}
                        <div class="auth-field flex items-center gap-1">
                            <div class="flex-1">
                                <span class="auth-field-label">Password</span>
                                <input
                                    id="reg-password"
                                    type="password"
                                    name="password"
                                    class="auth-field-input"
                                    placeholder="Min. 8 characters"
                                    autocomplete="new-password"
                                    required
                                >
                            </div>
                            <button
                                type="button"
                                class="pw-toggle"
                                data-toggle-password="reg-password"
                                aria-label="Show password"
                            >Show</button>
                        </div>

                        <label class="auth-field">
                            <span class="auth-field-label">
                                Referral code
                                <span class="ml-1 normal-case font-medium text-zinc-300">(optional)</span>
                            </span>
                            <input
                                type="text"
                                name="referral_code"
                                class="auth-field-input"
                                placeholder="Enter code if you have one"
                                autocomplete="off"
                            >
                        </label>

                        <label class="flex cursor-pointer items-start gap-3 pt-0.5">
                            <input type="checkbox" class="mt-0.5 h-4 w-4 flex-none cursor-pointer rounded border-zinc-300 accent-zinc-900" required>
                            <span class="text-xs leading-5 text-zinc-500">
                                I agree to the
                                <a href="#" class="font-medium text-zinc-700 underline underline-offset-2 hover:text-zinc-900">Terms of Service</a>
                                and
                                <a href="#" class="font-medium text-zinc-700 underline underline-offset-2 hover:text-zinc-900">Privacy Policy</a>
                            </span>
                        </label>

                        <button type="submit" class="btn btn-primary mt-2 w-full py-3.5 text-base">
                            Create Free Account
                        </button>
                    </form>
                </div>

                <p class="mt-6 text-center text-sm text-zinc-500">
                    Already have an account?
                    <a href="{{ route('login') }}" class="ml-1 font-semibold text-emerald-600 transition-colors hover:text-emerald-700">Sign in</a>
                </p>

                <p class="mt-3 hidden text-center text-xs text-zinc-400 sm:block">
                    <a href="/" class="transition-colors hover:text-zinc-600">← Back to homepage</a>
                </p>

            </div>
        </div>

        @include('partials.footer', ['class' => 'border-t border-zinc-100 bg-white sm:bg-zinc-100'])

    </body>
</html>
