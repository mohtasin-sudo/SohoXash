<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
        <meta name="theme-color" content="#ffffff">
        <title>Profile — SohoXash</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800,900" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-zinc-50 text-zinc-900 antialiased">

        <div class="mx-auto w-full max-w-xl bg-white md:max-w-3xl md:rounded-none">

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

                <section class="rounded-2xl border border-zinc-100 bg-white p-4 text-center">
                    <h1 class="text-3xl font-black tracking-[-0.04em] text-zinc-900">Personal Data</h1>
                    <p class="mt-1 text-xs text-zinc-400">Update your account and security details</p>
                </section>

                <section class="card p-4">
                    <div class="flex items-center gap-3">
                        <div class="relative">
                            <div class="flex h-16 w-16 items-center justify-center rounded-full bg-zinc-100 text-zinc-400">
                                <i class="bi bi-person text-2xl"></i>
                            </div>
                            <button class="absolute -right-1 -top-1 flex h-6 w-6 items-center justify-center rounded-full bg-blue-600 text-white ring-2 ring-white" aria-label="Change photo">
                                <i class="bi bi-camera text-[10px]"></i>
                            </button>
                        </div>
                        <div class="min-w-0 flex-1">
                            <p class="truncate text-sm font-bold text-zinc-900">Aasdasd@gmail.com</p>
                            <p class="text-xs text-zinc-400">ID: 2150</p>
                            <p class="mt-0.5 inline-flex items-center gap-1 text-[11px] font-semibold text-red-500">
                                Unverified <i class="bi bi-x-circle"></i>
                            </p>
                        </div>
                    </div>
                </section>

                <section class="card p-4">
                    <form class="space-y-2.5">
                        <label class="auth-field">
                            <span class="auth-field-label">First Name</span>
                            <input type="text" class="auth-field-input" placeholder="Enter first name">
                        </label>
                        <label class="auth-field">
                            <span class="auth-field-label">Last Name</span>
                            <input type="text" class="auth-field-input" placeholder="Enter last name">
                        </label>
                        <label class="auth-field">
                            <span class="auth-field-label">Date Of Birth</span>
                            <input type="text" class="auth-field-input" placeholder="25 Apr, 2026 10:20 PM">
                        </label>
                        <label class="auth-field">
                            <span class="auth-field-label">Email Address</span>
                            <input type="email" class="auth-field-input" placeholder="aadsasd@gmail.com">
                        </label>
                        <label class="auth-field">
                            <span class="auth-field-label">Phone Number</span>
                            <input type="text" class="auth-field-input" placeholder="0135XXXXXX">
                        </label>
                        <label class="auth-field">
                            <span class="auth-field-label">Preferred Language</span>
                            <select class="auth-field-input">
                                <option>English</option>
                                <option>Bangla</option>
                            </select>
                        </label>
                        <label class="auth-field">
                            <span class="auth-field-label">UTC Time Zone</span>
                            <select class="auth-field-input">
                                <option>Select Time Zone</option>
                                <option>UTC+6 Dhaka</option>
                                <option>UTC+5.5 Kolkata</option>
                            </select>
                        </label>
                        <button type="submit" class="btn btn-primary mt-1 w-full justify-center py-3">Update User</button>
                    </form>
                </section>

                <section class="card p-4">
                    <p class="text-sm font-bold text-zinc-900">Change Password</p>
                    <form class="mt-2.5 space-y-2.5">
                        <label class="auth-field">
                            <span class="auth-field-label">Current Password</span>
                            <input type="password" class="auth-field-input" placeholder="Enter current password">
                        </label>
                        <label class="auth-field">
                            <span class="auth-field-label">New Password</span>
                            <input type="password" class="auth-field-input" placeholder="Enter new password">
                        </label>
                        <label class="auth-field">
                            <span class="auth-field-label">Confirm Password</span>
                            <input type="password" class="auth-field-input" placeholder="Confirm new password">
                        </label>
                        <button type="submit" class="btn btn-primary mt-1 w-full justify-center py-3">Update Password</button>
                    </form>
                </section>

                <section class="card border-red-100 p-4">
                    <p class="text-sm font-bold text-red-500">Danger Zone</p>
                    <p class="mt-1 text-xs text-zinc-400">This action is permanent and cannot be undone.</p>
                    <button type="button" class="btn mt-3 w-full justify-center border border-red-100 bg-red-50 py-3 text-red-500 hover:bg-red-100">
                        Delete Account
                    </button>
                </section>
            </main>
        </div>

        @include('partials.footer', ['class' => 'border-t border-zinc-100 bg-white'])
        @include('partials.mobile-drawer', ['active' => 'profile'])
        @include('partials.mobile-bottom-nav')

    </body>
</html>
