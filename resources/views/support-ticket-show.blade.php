<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
        <meta name="theme-color" content="#ffffff">
        <title>Ticket Details — SohoXash</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800,900" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-zinc-50 text-zinc-900 antialiased">
        @include('partials.desktop-sidebar', ['active' => 'support'])

        <div class="w-full bg-zinc-50 md:ml-56 md:min-h-screen">

            <header class="dash-header">
                <a href="{{ route('support.ticket') }}" class="flex h-9 w-9 flex-none items-center justify-center rounded-xl border border-zinc-100 text-zinc-500 transition-all hover:border-zinc-300" aria-label="Back to tickets">
                    <i class="bi bi-arrow-left"></i>
                </a>
                <a href="/" class="flex items-center gap-2">
                    <span class="flex h-8 w-8 flex-none items-center justify-center rounded-xl bg-zinc-900 text-xs font-black text-white">SX</span>
                    <span class="text-base font-black tracking-[-0.04em]">SohoXash</span>
                </a>
                <span class="text-xs font-semibold text-zinc-400">Ticket</span>
            </header>

            <main class="page-shell">
                <section class="section-card">
                    <div class="flex items-start justify-between gap-2">
                        <div>
                            <p class="text-xs font-semibold text-zinc-400">Ticket ID</p>
                            <h1 class="text-lg font-black tracking-[-0.03em] text-zinc-900">#{{ $ticketId }}</h1>
                            <p class="mt-1 text-xs text-zinc-500">Withdrawal delayed issue</p>
                        </div>
                        <span class="rounded-full border border-amber-100 bg-amber-50 px-2.5 py-1 text-[10px] font-semibold text-amber-700">Pending</span>
                    </div>

                    <div class="mt-3 grid grid-cols-3 gap-2">
                        <div class="stat-tile">
                            <p class="text-[10px] text-zinc-400">Category</p>
                            <p class="text-xs font-semibold text-zinc-700">Payment</p>
                        </div>
                        <div class="stat-tile">
                            <p class="text-[10px] text-zinc-400">Priority</p>
                            <p class="text-xs font-semibold text-zinc-700">Medium</p>
                        </div>
                        <div class="stat-tile">
                            <p class="text-[10px] text-zinc-400">Opened</p>
                            <p class="text-xs font-semibold text-zinc-700">2h ago</p>
                        </div>
                    </div>
                </section>

                <section class="section-card">
                    <p class="text-sm font-bold text-zinc-900">Conversation</p>
                    <div class="mt-3 space-y-2.5">
                        <div class="section-soft">
                            <div class="mb-1 flex items-center justify-between">
                                <p class="text-xs font-bold text-zinc-900">You</p>
                                <p class="text-[10px] text-zinc-400">10:20 AM</p>
                            </div>
                            <p class="text-xs leading-5 text-zinc-600">I requested withdrawal but did not receive payment yet. Please check.</p>
                        </div>
                        <div class="rounded-xl border border-blue-100 bg-blue-50 p-3">
                            <div class="mb-1 flex items-center justify-between">
                                <p class="text-xs font-bold text-blue-700">Support Agent</p>
                                <p class="text-[10px] text-blue-400">10:32 AM</p>
                            </div>
                            <p class="text-xs leading-5 text-blue-700">Thanks for reporting. We are reviewing your transaction and will update shortly.</p>
                        </div>
                    </div>
                </section>

                <section class="section-card">
                    <p class="text-sm font-bold text-zinc-900">Reply to Ticket</p>
                    <form class="mt-2.5 space-y-2.5">
                        <label class="auth-field">
                            <span class="auth-field-label">Message</span>
                            <textarea class="auth-field-input min-h-24 resize-none" placeholder="Write your reply..." required></textarea>
                        </label>
                        <button type="submit" class="btn btn-primary w-full justify-center py-3">Send Reply</button>
                    </form>
                </section>
            </main>
        </div>

        @include('partials.footer', ['class' => 'border-t border-zinc-100 bg-white'])
        @include('partials.mobile-bottom-nav')

    </body>
</html>
