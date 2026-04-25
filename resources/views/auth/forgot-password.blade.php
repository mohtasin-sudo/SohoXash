<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
        <meta name="theme-color" content="#ffffff">
        <title>Forgot Password — SohoXash</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800,900" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-white text-zinc-900 antialiased sm:bg-zinc-100">

        {{-- Mobile top bar --}}
        <div class="flex items-center px-5 py-4 sm:hidden">
            <a href="{{ route('login') }}" class="flex items-center gap-1.5 text-sm font-semibold text-zinc-500">
                <span class="text-base leading-none">←</span> Back to Sign in
            </a>
        </div>

        <div class="auth-wrap pt-4 sm:pt-0">
            <div class="w-full max-w-sm">

                {{-- Icon --}}
                <div class="mb-7 text-center">
                    <div class="mx-auto mb-5 flex h-16 w-16 items-center justify-center rounded-2xl bg-zinc-900">
                        <svg class="h-7 w-7 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="8" cy="11" r="3"></circle>
                            <path d="M11 11h10M18 11v3M21 11v2"></path>
                        </svg>
                    </div>
                    <h1 class="text-2xl font-black tracking-[-0.04em] text-zinc-900">Forgot your password?</h1>
                    <p class="mt-2 text-sm leading-6 text-zinc-500">
                        No worries. Enter your email or phone and we'll send you a reset link.
                    </p>
                </div>

                <div class="auth-card">
                    <form method="POST" action="#" class="space-y-3" id="forgot-form">
                        @csrf

                        <label class="auth-field">
                            <span class="auth-field-label">Email or phone number</span>
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

                        <button type="submit" class="btn btn-primary mt-1 w-full py-3.5 text-base">
                            Send Reset Link
                        </button>
                    </form>

                    {{-- Success state (hidden by default) --}}
                    <div id="forgot-success" class="hidden text-center">
                        <div class="mx-auto mb-4 flex h-14 w-14 items-center justify-center rounded-2xl bg-emerald-50 ring-1 ring-emerald-100">
                            <svg class="h-6 w-6 text-emerald-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="5" width="18" height="14" rx="2"></rect>
                                <path d="M3 7l9 6 9-6"></path>
                            </svg>
                        </div>
                        <p class="text-sm font-bold text-zinc-900">Check your inbox</p>
                        <p class="mt-1.5 text-xs leading-5 text-zinc-500">
                            We've sent a password reset link. Check your email or SMS and follow the instructions.
                        </p>
                        <a href="{{ route('login') }}" class="btn btn-primary mt-5 w-full py-3.5 text-base">
                            Back to Sign in
                        </a>
                    </div>
                </div>

                <p class="mt-6 text-center text-sm text-zinc-500">
                    Remember your password?
                    <a href="{{ route('login') }}" class="ml-1 font-semibold text-emerald-600 transition-colors hover:text-emerald-700">Sign in</a>
                </p>

                <p class="mt-3 hidden text-center text-xs text-zinc-400 sm:block">
                    <a href="/" class="transition-colors hover:text-zinc-600">← Back to homepage</a>
                </p>

            </div>
        </div>

        @include('partials.footer', ['class' => 'border-t border-zinc-100 bg-white sm:bg-zinc-100'])

        <script>
            document.getElementById('forgot-form')?.addEventListener('submit', function (e) {
                e.preventDefault();
                this.classList.add('hidden');
                document.getElementById('forgot-success')?.classList.remove('hidden');
            });
        </script>

    </body>
</html>
