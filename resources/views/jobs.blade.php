<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
        <meta name="theme-color" content="#ffffff">
        <title>My Jobs — SohoXash</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800,900" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-zinc-50 text-zinc-900 antialiased">
        @include('partials.desktop-sidebar', ['active' => 'tasks'])

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
                <section class="section-card space-y-2.5">
                    <div class="flex items-center justify-between">
                        <h1 class="text-lg font-black tracking-[-0.03em] text-zinc-900">Job Marketplace</h1>
                        <span class="micro-chip">124 jobs live</span>
                    </div>

                    <label class="flex items-center gap-2 rounded-xl border border-zinc-100 bg-zinc-50 px-3 py-2.5">
                        <i class="bi bi-search text-zinc-400"></i>
                        <input type="text" class="w-full bg-transparent text-sm text-zinc-700 outline-none" placeholder="Search jobs, category, reward">
                    </label>

                    <div class="flex gap-2 overflow-x-auto no-scrollbar">
                        <button class="flex-none rounded-full border border-zinc-900 bg-zinc-900 px-3 py-1 text-[11px] font-semibold text-white">All</button>
                        <button class="micro-chip flex-none">App Install</button>
                        <button class="micro-chip flex-none">Social</button>
                        <button class="micro-chip flex-none">Survey</button>
                        <button class="micro-chip flex-none">Review</button>
                    </div>
                </section>

                <section class="space-y-2.5">
                    <a href="{{ route('jobs.show', ['jobId' => 'JOB-1024']) }}" class="block rounded-2xl border-2 border-solid border-zinc-300 bg-white p-4 shadow-[0_1px_0_rgba(0,0,0,0.03)] transition-all hover:border-zinc-500 hover:shadow-sm">
                        <div class="mb-2 flex items-start justify-between gap-2">
                            <div>
                                <p class="text-[10px] font-bold uppercase tracking-wider text-zinc-400">JOB-1024</p>
                                <h2 class="mt-0.5 text-sm font-bold text-zinc-900">Install app and submit proof screenshot</h2>
                            </div>
                            <span class="rounded-full border border-emerald-100 bg-emerald-50 px-2 py-0.5 text-[10px] font-semibold text-emerald-700">Open</span>
                        </div>
                        <div class="mb-2 flex flex-wrap items-center gap-1.5 text-[10px] font-medium text-zinc-500">
                            <span class="rounded-md bg-zinc-100 px-2 py-0.5">App Install</span>
                            <span class="rounded-md bg-zinc-100 px-2 py-0.5">4 min</span>
                            <span class="rounded-md bg-zinc-100 px-2 py-0.5">Slots 42</span>
                        </div>
                        <p class="text-xs leading-5 text-zinc-500">Install the app, open it for 30 seconds, and submit one screenshot as proof.</p>
                        <div class="mt-3 flex items-center justify-between">
                            <div>
                                <p class="text-[10px] text-zinc-400">Budget</p>
                                <p class="text-sm font-black text-emerald-700">৳35</p>
                            </div>
                            <span class="rounded-lg bg-zinc-900 px-3 py-1.5 text-[11px] font-semibold text-white">View & Apply</span>
                        </div>
                    </a>

                    <a href="{{ route('jobs.show', ['jobId' => 'JOB-1018']) }}" class="block rounded-2xl border-2 border-solid border-zinc-300 bg-white p-4 shadow-[0_1px_0_rgba(0,0,0,0.03)] transition-all hover:border-zinc-500 hover:shadow-sm">
                        <div class="mb-2 flex items-start justify-between gap-2">
                            <div>
                                <p class="text-[10px] font-bold uppercase tracking-wider text-zinc-400">JOB-1018</p>
                                <h2 class="mt-0.5 text-sm font-bold text-zinc-900">Follow social page and submit post URL</h2>
                            </div>
                            <span class="rounded-full border border-blue-100 bg-blue-50 px-2 py-0.5 text-[10px] font-semibold text-blue-700">In Progress</span>
                        </div>
                        <div class="mb-2 flex flex-wrap items-center gap-1.5 text-[10px] font-medium text-zinc-500">
                            <span class="rounded-md bg-zinc-100 px-2 py-0.5">Social</span>
                            <span class="rounded-md bg-zinc-100 px-2 py-0.5">2 min</span>
                            <span class="rounded-md bg-zinc-100 px-2 py-0.5">Easy</span>
                        </div>
                        <p class="text-xs leading-5 text-zinc-500">Follow the target page, then submit the post/profile URL as verification proof.</p>
                        <div class="mt-3 flex items-center justify-between">
                            <div>
                                <p class="text-[10px] text-zinc-400">Budget</p>
                                <p class="text-sm font-black text-emerald-700">৳18</p>
                            </div>
                            <span class="rounded-lg border border-zinc-200 bg-zinc-50 px-3 py-1.5 text-[11px] font-semibold text-zinc-700">Continue</span>
                        </div>
                    </a>

                    <a href="{{ route('jobs.show', ['jobId' => 'JOB-1007']) }}" class="block rounded-2xl border-2 border-solid border-zinc-300 bg-white p-4 shadow-[0_1px_0_rgba(0,0,0,0.03)] transition-all hover:border-zinc-500 hover:shadow-sm">
                        <div class="mb-2 flex items-start justify-between gap-2">
                            <div>
                                <p class="text-[10px] font-bold uppercase tracking-wider text-zinc-400">JOB-1007</p>
                                <h2 class="mt-0.5 text-sm font-bold text-zinc-900">Complete product feedback survey</h2>
                            </div>
                            <span class="rounded-full border border-amber-100 bg-amber-50 px-2 py-0.5 text-[10px] font-semibold text-amber-700">Pending Review</span>
                        </div>
                        <div class="mb-2 flex flex-wrap items-center gap-1.5 text-[10px] font-medium text-zinc-500">
                            <span class="rounded-md bg-zinc-100 px-2 py-0.5">Survey</span>
                            <span class="rounded-md bg-zinc-100 px-2 py-0.5">8 min</span>
                            <span class="rounded-md bg-zinc-100 px-2 py-0.5">High Reward</span>
                        </div>
                        <p class="text-xs leading-5 text-zinc-500">Submit honest product feedback. Approval depends on quality and completion checks.</p>
                        <div class="mt-3 flex items-center justify-between">
                            <div>
                                <p class="text-[10px] text-zinc-400">Budget</p>
                                <p class="text-sm font-black text-emerald-700">৳85</p>
                            </div>
                            <span class="rounded-lg border border-amber-200 bg-amber-50 px-3 py-1.5 text-[11px] font-semibold text-amber-700">Track Status</span>
                        </div>
                    </a>
                </section>
            </main>
        </div>

        @include('partials.footer', ['class' => 'border-t border-zinc-100 bg-white'])
        @include('partials.mobile-drawer', ['active' => 'tasks'])
        @include('partials.mobile-bottom-nav', ['active' => 'tasks'])

    </body>
</html>
