<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
        <meta name="theme-color" content="#ffffff">
        <title>News Feed — SohoXash</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800,900" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-zinc-50 text-zinc-900 antialiased">
        @include('partials.desktop-sidebar', ['active' => 'feed'])

        <div class="w-full bg-white md:ml-56 md:min-h-screen">

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
                <section class="space-y-2.5">
                    <article class="card p-4">
                        <div class="mb-2.5 flex items-center gap-2">
                            <span class="flex h-8 w-8 items-center justify-center rounded-full bg-zinc-900 text-[10px] font-black text-white">AD</span>
                            <div class="min-w-0 flex-1">
                                <p class="truncate text-xs font-bold text-zinc-900">Admin Update</p>
                                <p class="text-[10px] text-zinc-400">2h ago · Public</p>
                            </div>
                        </div>
                        <h2 class="text-sm font-bold text-zinc-900">New high-reward app install tasks are live</h2>
                        <p class="mt-1 text-xs leading-5 text-zinc-500">20+ new tasks are available tonight. Complete before 11:59 PM for bonus multiplier.</p>

                        <div class="mt-3 flex items-center justify-between border-t border-zinc-100 pt-2.5 text-[11px] text-zinc-400">
                            <span class="inline-flex items-center gap-1"><i class="bi bi-hand-thumbs-up"></i> 284 likes</span>
                            <span class="inline-flex items-center gap-1"><i class="bi bi-hand-thumbs-down"></i> 13 dislikes</span>
                            <span class="inline-flex items-center gap-1"><i class="bi bi-eye"></i> 2.4K views</span>
                        </div>
                        <div class="mt-2.5 grid grid-cols-3 gap-2 text-[11px] font-semibold text-zinc-500">
                            <button class="rounded-lg border border-zinc-100 bg-zinc-50 py-1.5 hover:bg-zinc-100"><i class="bi bi-hand-thumbs-up mr-1"></i>Like</button>
                            <button class="rounded-lg border border-zinc-100 bg-zinc-50 py-1.5 hover:bg-zinc-100"><i class="bi bi-hand-thumbs-down mr-1"></i>Dislike</button>
                            <button class="rounded-lg border border-zinc-100 bg-zinc-50 py-1.5 hover:bg-zinc-100"><i class="bi bi-share mr-1"></i>Share</button>
                        </div>
                    </article>

                    <article class="card p-4">
                        <div class="mb-2.5 flex items-center gap-2">
                            <span class="flex h-8 w-8 items-center justify-center rounded-full bg-zinc-900 text-[10px] font-black text-white">AD</span>
                            <div class="min-w-0 flex-1">
                                <p class="truncate text-xs font-bold text-zinc-900">Admin Update</p>
                                <p class="text-[10px] text-zinc-400">5h ago · Public</p>
                            </div>
                        </div>
                        <h2 class="text-sm font-bold text-zinc-900">Referral sprint started (+৳50 per valid refer)</h2>
                        <p class="mt-1 text-xs leading-5 text-zinc-500">Invite friends with your referral link. Campaign ends in 72 hours.</p>

                        <div class="mt-3 flex items-center justify-between border-t border-zinc-100 pt-2.5 text-[11px] text-zinc-400">
                            <span class="inline-flex items-center gap-1"><i class="bi bi-hand-thumbs-up"></i> 196 likes</span>
                            <span class="inline-flex items-center gap-1"><i class="bi bi-hand-thumbs-down"></i> 9 dislikes</span>
                            <span class="inline-flex items-center gap-1"><i class="bi bi-eye"></i> 1.6K views</span>
                        </div>
                        <div class="mt-2.5 grid grid-cols-3 gap-2 text-[11px] font-semibold text-zinc-500">
                            <button class="rounded-lg border border-zinc-100 bg-zinc-50 py-1.5 hover:bg-zinc-100"><i class="bi bi-hand-thumbs-up mr-1"></i>Like</button>
                            <button class="rounded-lg border border-zinc-100 bg-zinc-50 py-1.5 hover:bg-zinc-100"><i class="bi bi-hand-thumbs-down mr-1"></i>Dislike</button>
                            <button class="rounded-lg border border-zinc-100 bg-zinc-50 py-1.5 hover:bg-zinc-100"><i class="bi bi-share mr-1"></i>Share</button>
                        </div>
                    </article>

                    <article class="card p-4">
                        <div class="mb-2.5 flex items-center gap-2">
                            <span class="flex h-8 w-8 items-center justify-center rounded-full bg-zinc-900 text-[10px] font-black text-white">AD</span>
                            <div class="min-w-0 flex-1">
                                <p class="truncate text-xs font-bold text-zinc-900">Admin Update</p>
                                <p class="text-[10px] text-zinc-400">Yesterday · Public</p>
                            </div>
                        </div>
                        <h2 class="text-sm font-bold text-zinc-900">Maintenance update: withdrawal queue delay</h2>
                        <p class="mt-1 text-xs leading-5 text-zinc-500">Some withdrawal requests may take up to 2 hours during maintenance window. Funds remain safe.</p>

                        <div class="mt-3 flex items-center justify-between border-t border-zinc-100 pt-2.5 text-[11px] text-zinc-400">
                            <span class="inline-flex items-center gap-1"><i class="bi bi-hand-thumbs-up"></i> 412 likes</span>
                            <span class="inline-flex items-center gap-1"><i class="bi bi-hand-thumbs-down"></i> 21 dislikes</span>
                            <span class="inline-flex items-center gap-1"><i class="bi bi-eye"></i> 3.8K views</span>
                        </div>
                        <div class="mt-2.5 grid grid-cols-3 gap-2 text-[11px] font-semibold text-zinc-500">
                            <button class="rounded-lg border border-zinc-100 bg-zinc-50 py-1.5 hover:bg-zinc-100"><i class="bi bi-hand-thumbs-up mr-1"></i>Like</button>
                            <button class="rounded-lg border border-zinc-100 bg-zinc-50 py-1.5 hover:bg-zinc-100"><i class="bi bi-hand-thumbs-down mr-1"></i>Dislike</button>
                            <button class="rounded-lg border border-zinc-100 bg-zinc-50 py-1.5 hover:bg-zinc-100"><i class="bi bi-share mr-1"></i>Share</button>
                        </div>
                    </article>
                </section>
            </main>
        </div>

        @include('partials.footer', ['class' => 'border-t border-zinc-100 bg-white'])
        @include('partials.mobile-drawer', ['active' => 'feed'])
        @include('partials.mobile-bottom-nav', ['active' => 'feed'])

    </body>
</html>
