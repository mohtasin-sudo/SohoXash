<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
        <meta name="theme-color" content="#ffffff">
        <title>Sign In — SohoXash</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800,900" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    {{-- Full white on mobile so there's no gray peeking around the card --}}
    <body class="bg-white text-zinc-900 antialiased sm:bg-zinc-100">

        {{-- Back link sits above the card on mobile --}}
        <div class="flex items-center justify-between px-5 py-4 sm:hidden">
            <a href="/" class="flex items-center gap-1.5 text-sm font-semibold text-zinc-500">
                <span class="text-base leading-none">←</span> Back
            </a>
            <a href="{{ route('register') }}" class="text-sm font-semibold text-emerald-600">Register free →</a>
        </div>

        <div class="auth-wrap pt-4 sm:pt-0">
            <div class="w-full max-w-sm">

                {{-- Logo (hidden on mobile — shown in back row above) --}}
                <div class="mb-7 text-center">
                    <a href="/" class="hidden items-center justify-center gap-2.5 sm:inline-flex">
                        <span class="flex h-10 w-10 flex-none items-center justify-center rounded-xl bg-zinc-900 text-sm font-black text-white">SX</span>
                        <span class="text-lg font-black tracking-[-0.04em] text-zinc-900">SohoXash</span>
                    </a>
                    <h1 class="mt-5 text-2xl font-black tracking-[-0.04em] text-zinc-900 sm:mt-6">Welcome back</h1>
                    <p class="mt-1.5 text-sm text-zinc-500">Sign in to continue earning</p>
                </div>

                <div class="auth-card">

                    <form method="POST" action="#" class="space-y-3">
                        @csrf

                        <label class="auth-field">
                            <span class="auth-field-label">Email or phone</span>
                            <input
                                type="text"
                                name="email"
                                class="auth-field-input"
                                placeholder="you@example.com"
                                autocomplete="email"
                                inputmode="email"
                                required
                            >
                        </label>

                        {{-- Password field with show/hide toggle --}}
                        <div class="auth-field flex items-center gap-1">
                            <div class="flex-1">
                                <span class="auth-field-label">Password</span>
                                <input
                                    id="login-password"
                                    type="password"
                                    name="password"
                                    class="auth-field-input"
                                    placeholder="••••••••"
                                    autocomplete="current-password"
                                    required
                                >
                            </div>
                            <button
                                type="button"
                                class="pw-toggle"
                                data-toggle-password="login-password"
                                aria-label="Show password"
                            >Show</button>
                        </div>

                        <div class="flex justify-end pt-0.5">
                            <a href="{{ route('password.request') }}" class="text-xs font-medium text-zinc-400 transition-colors hover:text-zinc-700">Forgot password?</a>
                        </div>

                        <button type="submit" class="btn btn-primary mt-1 w-full py-3.5 text-base">
                            Sign In
                        </button>
                    </form>

                </div>

                <p class="mt-6 text-center text-sm text-zinc-500">
                    Don't have an account?
                    <a href="{{ route('register') }}" class="ml-1 font-semibold text-emerald-600 transition-colors hover:text-emerald-700">Create one free</a>
                </p>

                <p class="mt-3 hidden text-center text-xs text-zinc-400 sm:block">
                    <a href="/" class="transition-colors hover:text-zinc-600">← Back to homepage</a>
                </p>

            </div>
        </div>

        @include('partials.footer', ['class' => 'border-t border-zinc-100 bg-white sm:bg-zinc-100'])

    </body>
</html>
