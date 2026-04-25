<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
        <meta name="theme-color" content="#ffffff">
        <title>Support Ticket — SohoXash</title>
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
                <section class="card p-4">
                    <h1 class="text-2xl font-black tracking-[-0.04em] text-zinc-900">Support Tickets</h1>
                    <p class="mt-1 text-xs text-zinc-400">Create ticket and track response status.</p>
                </section>

                <section class="card p-4">
                    <div class="mb-3 flex items-center justify-between">
                        <p class="text-sm font-bold text-zinc-900">Create New Ticket</p>
                        <span class="rounded-full border border-zinc-100 bg-zinc-50 px-2 py-0.5 text-[10px] font-semibold text-zinc-500">Avg. reply 15 min</span>
                    </div>

                    <form class="space-y-2.5">
                        <label class="auth-field">
                            <span class="auth-field-label">Subject</span>
                            <input type="text" class="auth-field-input" placeholder="Payment issue / account issue" required>
                        </label>
                        <label class="auth-field">
                            <span class="auth-field-label">Category</span>
                            <select class="auth-field-input" required>
                                <option>Choose category</option>
                                <option>Payment</option>
                                <option>Task submission</option>
                                <option>Account verification</option>
                                <option>Other</option>
                            </select>
                        </label>
                        <label class="auth-field">
                            <span class="auth-field-label">Priority</span>
                            <select class="auth-field-input" required>
                                <option>Medium</option>
                                <option>Low</option>
                                <option>High</option>
                            </select>
                        </label>
                        <label class="auth-field">
                            <span class="auth-field-label">Message</span>
                            <textarea class="auth-field-input min-h-24 resize-none" placeholder="Explain your issue..." required></textarea>
                        </label>
                        <button type="submit" class="btn btn-primary mt-1 w-full justify-center py-3">Submit Ticket</button>
                    </form>
                </section>

                <section class="card p-4">
                    <p class="text-sm font-bold text-zinc-900">Recent Tickets</p>
                    <div class="mt-3 space-y-2.5">
                        <a href="{{ route('support.ticket.show', ['ticketId' => 'TK-10029']) }}" class="block rounded-xl border border-zinc-100 bg-zinc-50 p-3 transition-colors hover:bg-zinc-100">
                            <div class="flex items-center justify-between">
                                <p class="text-xs font-bold text-zinc-900">#TK-10029 · Withdrawal delayed</p>
                                <span class="rounded-full border border-amber-100 bg-amber-50 px-2 py-0.5 text-[10px] font-semibold text-amber-700">Pending</span>
                            </div>
                            <p class="mt-1 text-[11px] text-zinc-400">Opened 2 hours ago · Tap to view</p>
                        </a>
                        <a href="{{ route('support.ticket.show', ['ticketId' => 'TK-10010']) }}" class="block rounded-xl border border-zinc-100 bg-zinc-50 p-3 transition-colors hover:bg-zinc-100">
                            <div class="flex items-center justify-between">
                                <p class="text-xs font-bold text-zinc-900">#TK-10010 · Task proof not accepted</p>
                                <span class="rounded-full border border-blue-100 bg-blue-50 px-2 py-0.5 text-[10px] font-semibold text-blue-700">In Review</span>
                            </div>
                            <p class="mt-1 text-[11px] text-zinc-400">Opened yesterday · Tap to view</p>
                        </a>
                        <a href="{{ route('support.ticket.show', ['ticketId' => 'TK-9988']) }}" class="block rounded-xl border border-zinc-100 bg-zinc-50 p-3 transition-colors hover:bg-zinc-100">
                            <div class="flex items-center justify-between">
                                <p class="text-xs font-bold text-zinc-900">#TK-9988 · Email change request</p>
                                <span class="rounded-full border border-emerald-100 bg-emerald-50 px-2 py-0.5 text-[10px] font-semibold text-emerald-700">Resolved</span>
                            </div>
                            <p class="mt-1 text-[11px] text-zinc-400">Resolved 3 days ago · Tap to view</p>
                        </a>
                    </div>
                </section>
            </main>
        </div>

        @include('partials.footer', ['class' => 'border-t border-zinc-100 bg-white'])
        @include('partials.mobile-drawer', ['active' => 'support'])
        @include('partials.mobile-bottom-nav')

    </body>
</html>
