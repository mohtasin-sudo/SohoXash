<nav class="dash-nav md:hidden" aria-label="App navigation">
    <a href="{{ route('dashboard') }}" class="{{ ($active ?? '') === 'home' ? 'active' : '' }}">
        <span class="ni"><i class="bi bi-house-door"></i></span>
        <span class="nl">Home</span>
    </a>
    <a href="#">
        <span class="ni"><i class="bi bi-search"></i></span>
        <span class="nl">Search</span>
    </a>
    <a href="#" class="relative">
        <span class="ni"><i class="bi bi-list-task"></i></span>
        <span class="nl">Tasks</span>
        <span class="nav-badge"></span>
    </a>
    <a href="#" class="relative">
        <span class="ni"><i class="bi bi-bell"></i></span>
        <span class="nl">Alerts</span>
        <span class="nav-badge"></span>
    </a>
    <a href="{{ route('news.feed') }}" class="{{ ($active ?? '') === 'feed' ? 'active' : '' }}">
        <span class="ni"><i class="bi bi-newspaper"></i></span>
        <span class="nl">Feed</span>
    </a>
</nav>
