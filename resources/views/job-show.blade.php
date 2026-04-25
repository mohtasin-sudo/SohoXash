<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
        <meta name="theme-color" content="#ffffff">
        <title>Job Details — SohoXash</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800,900" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-zinc-50 text-zinc-900 antialiased">
        @include('partials.desktop-sidebar', ['active' => 'tasks'])

        <div class="w-full bg-white md:ml-56 md:min-h-screen">
            <header class="dash-header">
                <a href="{{ route('jobs.index') }}" class="flex h-9 w-9 flex-none items-center justify-center rounded-xl border border-zinc-100 text-zinc-500 transition-all hover:border-zinc-300" aria-label="Back to my jobs">
                    <i class="bi bi-arrow-left"></i>
                </a>
                <a href="/" class="flex items-center gap-2">
                    <span class="flex h-8 w-8 flex-none items-center justify-center rounded-xl bg-zinc-900 text-xs font-black text-white">SX</span>
                    <span class="text-base font-black tracking-[-0.04em]">SohoXash</span>
                </a>
                <span class="text-xs font-semibold text-zinc-400">Details</span>
            </header>

            <main class="space-y-3 px-4 py-4 pb-28">
                <section class="card p-4">
                    <div class="mb-2 flex items-center justify-between">
                        <p class="text-xs font-bold text-zinc-900">#{{ $jobId }}</p>
                        <span class="rounded-full border border-emerald-100 bg-emerald-50 px-2 py-0.5 text-[10px] font-semibold text-emerald-700">Available</span>
                    </div>
                    <h1 class="text-lg font-black tracking-[-0.03em] text-zinc-900">Install app and submit proof screenshot</h1>
                    <div class="mt-2 grid grid-cols-3 gap-2">
                        <div class="rounded-xl border border-zinc-100 bg-zinc-50 px-2.5 py-2">
                            <p class="text-[10px] text-zinc-400">Reward</p>
                            <p class="text-sm font-black text-emerald-700">৳35</p>
                        </div>
                        <div class="rounded-xl border border-zinc-100 bg-zinc-50 px-2.5 py-2">
                            <p class="text-[10px] text-zinc-400">Estimated</p>
                            <p class="text-sm font-black text-zinc-900">4 min</p>
                        </div>
                        <div class="rounded-xl border border-zinc-100 bg-zinc-50 px-2.5 py-2">
                            <p class="text-[10px] text-zinc-400">Slots Left</p>
                            <p class="text-sm font-black text-zinc-900">42</p>
                        </div>
                    </div>
                </section>

                <section class="card p-4">
                    <p class="text-sm font-bold text-zinc-900">Instructions</p>
                    <ol class="mt-2 space-y-2 text-xs leading-5 text-zinc-600">
                        <li>1. Click the task link and install the target app.</li>
                        <li>2. Open the app and keep it active for at least 30 seconds.</li>
                        <li>3. Take one clear screenshot as proof.</li>
                        <li>4. Submit screenshot + app profile link below.</li>
                    </ol>
                </section>

                <section class="card p-4">
                    <p class="text-sm font-bold text-zinc-900">Submit Job Proof</p>
                    <p class="mt-1 text-xs text-zinc-400">Submission will be reviewed by admin in 5-30 minutes.</p>
                    <form method="POST" action="#" class="mt-3 space-y-2.5">
                        @csrf
                        <label class="auth-field">
                            <span class="auth-field-label">Proof URL</span>
                            <input type="url" class="auth-field-input" placeholder="https://..." required>
                        </label>
                        <label class="auth-field">
                            <span class="auth-field-label">Upload Screenshot</span>
                            <input type="file" class="auth-field-input" required>
                        </label>
                        <label class="auth-field">
                            <span class="auth-field-label">Note (optional)</span>
                            <textarea class="auth-field-input min-h-20 resize-none" placeholder="Any extra details for reviewer"></textarea>
                        </label>
                        <button type="submit" class="btn btn-primary mt-1 w-full justify-center py-3">Submit Job</button>
                    </form>
                </section>
            </main>
        </div>

        @include('partials.footer', ['class' => 'border-t border-zinc-100 bg-white'])
        @include('partials.mobile-bottom-nav', ['active' => 'tasks'])
    </body>
</html>
