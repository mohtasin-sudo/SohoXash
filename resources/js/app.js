import './bootstrap';

// ── Scroll reveal ────────────────────────────────────────────────────────────

const revealObserver = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('in-view');
            }
        });
    },
    { threshold: 0.1, rootMargin: '0px 0px -48px 0px' },
);

document.querySelectorAll('.reveal, .reveal-scale').forEach((el) => {
    revealObserver.observe(el);
});

// Staggered child groups
document.querySelectorAll('.reveal-stagger').forEach((group) => {
    Array.from(group.children).forEach((child, i) => {
        child.classList.add('reveal');
        child.style.transitionDelay = `${i * 90}ms`;
        revealObserver.observe(child);
    });
});

// ── Stat count-up ────────────────────────────────────────────────────────────

function easeOutCubic(t) {
    return 1 - Math.pow(1 - t, 3);
}

function animateCount(el) {
    const target = parseFloat(el.dataset.count);
    const prefix = el.dataset.prefix ?? '';
    const suffix = el.dataset.suffix ?? '';
    const isDecimal = !Number.isInteger(target);
    const duration = 1300;
    const startTime = performance.now();

    function update(now) {
        const t = Math.min((now - startTime) / duration, 1);
        const current = easeOutCubic(t) * target;
        el.textContent = prefix + (isDecimal ? current.toFixed(1) : Math.round(current)) + suffix;
        if (t < 1) requestAnimationFrame(update);
    }

    requestAnimationFrame(update);
}

const countObserver = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                animateCount(entry.target);
                countObserver.unobserve(entry.target);
            }
        });
    },
    { threshold: 0.6 },
);

document.querySelectorAll('[data-count]').forEach((el) => countObserver.observe(el));

// ── Sticky mobile CTA strip ───────────────────────────────────────────────────

const darkCta = document.getElementById('dark-cta');
const mobileCta = document.getElementById('mobile-cta-strip');

if (darkCta && mobileCta) {
    const ctaObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                mobileCta.classList.toggle('is-hidden', entry.isIntersecting);
            });
        },
        { threshold: 0.1 },
    );
    ctaObserver.observe(darkCta);
}

// ── Password visibility toggle ────────────────────────────────────────────────

document.querySelectorAll('[data-toggle-password]').forEach((btn) => {
    btn.addEventListener('click', () => {
        const input = document.getElementById(btn.dataset.togglePassword);
        if (!input) return;
        const isHidden = input.type === 'password';
        input.type = isHidden ? 'text' : 'password';
        btn.textContent = isHidden ? 'Hide' : 'Show';
        btn.setAttribute('aria-label', isHidden ? 'Hide password' : 'Show password');
    });
});

// ── Dashboard: period tab switcher ───────────────────────────────────────────

document.querySelectorAll('[data-period]').forEach((btn) => {
    btn.addEventListener('click', () => {
        const siblings = btn.closest('div').querySelectorAll('[data-period]');
        siblings.forEach((b) => {
            b.classList.remove('bg-white', 'shadow-sm', 'text-zinc-900');
            b.classList.add('text-zinc-400');
        });
        btn.classList.remove('text-zinc-400');
        btn.classList.add('bg-white', 'shadow-sm', 'text-zinc-900');
    });
});

// ── Dashboard: section tab buttons ───────────────────────────────────────────

document.querySelectorAll('.section-tab').forEach((btn) => {
    btn.addEventListener('click', () => {
        document.querySelectorAll('.section-tab').forEach((b) => {
            b.classList.remove('active', 'bg-zinc-900', 'border-zinc-900', 'text-white');
            b.classList.add('bg-zinc-50', 'border-zinc-100', 'text-zinc-500');
        });
        btn.classList.add('active', 'bg-zinc-900', 'border-zinc-900', 'text-white');
        btn.classList.remove('bg-zinc-50', 'border-zinc-100', 'text-zinc-500');
    });
});

// ── Dashboard: app drawer ─────────────────────────────────────────────────────

const drawerOpen = document.getElementById('drawer-open');
const drawerClose = document.getElementById('drawer-close');
const drawerPanel = document.getElementById('drawer-panel');
const drawerBackdrop = document.getElementById('drawer-backdrop');

function openDrawer() {
    drawerPanel?.classList.remove('-translate-x-full');
    drawerBackdrop?.classList.remove('opacity-0', 'pointer-events-none');
    drawerOpen?.setAttribute('aria-expanded', 'true');
    document.body.style.overflow = 'hidden';
}

function closeDrawer() {
    drawerPanel?.classList.add('-translate-x-full');
    drawerBackdrop?.classList.add('opacity-0', 'pointer-events-none');
    drawerOpen?.setAttribute('aria-expanded', 'false');
    const hasOpenModal = Array.from(document.querySelectorAll('[data-modal]')).some((m) => !m.classList.contains('hidden'));
    if (!hasOpenModal) {
        document.body.style.overflow = '';
    }
}

drawerOpen?.addEventListener('click', openDrawer);
drawerClose?.addEventListener('click', closeDrawer);
drawerBackdrop?.addEventListener('click', closeDrawer);

document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') closeDrawer();
});

// ── Dashboard: Live/Leader modal popups ───────────────────────────────────────

const modalTriggers = document.querySelectorAll('[data-open-modal]');
const modalCloseButtons = document.querySelectorAll('[data-close-modal]');
const modalAnimationMs = 240;

function openModal(modalId) {
    const modal = document.getElementById(modalId);
    if (!modal) return;
    modal.classList.remove('hidden');
    modal.classList.add('flex');
    requestAnimationFrame(() => modal.classList.add('is-open'));
    document.body.style.overflow = 'hidden';
}

function closeModal(modal) {
    if (!modal) return;
    modal.classList.remove('is-open');
    window.setTimeout(() => {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }, modalAnimationMs);
    const drawerVisible = drawerPanel && !drawerPanel.classList.contains('-translate-x-full');
    if (!drawerVisible) {
        document.body.style.overflow = '';
    }
}

modalTriggers.forEach((trigger) => {
    trigger.addEventListener('click', () => openModal(trigger.dataset.openModal));
});

modalCloseButtons.forEach((btn) => {
    btn.addEventListener('click', () => closeModal(btn.closest('[data-modal]')));
});

document.querySelectorAll('[data-modal]').forEach((modal) => {
    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            closeModal(modal);
        }
    });
});

document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
        document.querySelectorAll('[data-modal]').forEach((modal) => closeModal(modal));
    }
});

// ── Referral link copy ───────────────────────────────────────────────────────

const copyBtn = document.getElementById('copy-refer-btn');
const referLink = document.getElementById('refer-link');

if (copyBtn && referLink) {
    copyBtn.addEventListener('click', async () => {
        try {
            await navigator.clipboard.writeText(referLink.textContent.trim());
        } catch {
            const range = document.createRange();
            range.selectNode(referLink);
            window.getSelection()?.removeAllRanges();
            window.getSelection()?.addRange(range);
            document.execCommand('copy');
            window.getSelection()?.removeAllRanges();
        }
        copyBtn.textContent = 'Copied';
        copyBtn.classList.add('bg-emerald-600');
        copyBtn.classList.remove('bg-zinc-900', 'hover:bg-zinc-700');
        setTimeout(() => {
            copyBtn.textContent = 'Copy';
            copyBtn.classList.remove('bg-emerald-600');
            copyBtn.classList.add('bg-zinc-900', 'hover:bg-zinc-700');
        }, 2000);
    });
}

// ── Promo banner slider ───────────────────────────────────────────────────────

const bannerTrack = document.querySelector('.banner-track');
const bannerDots = document.querySelectorAll('.banner-dot');
const totalSlides = bannerDots.length;
let currentSlide = 0;
let bannerTimer;

function goToSlide(index) {
    currentSlide = (index + totalSlides) % totalSlides;
    if (bannerTrack) {
        bannerTrack.style.transform = `translateX(-${currentSlide * 100}%)`;
    }
    bannerDots.forEach((dot, i) => {
        const active = i === currentSlide;
        dot.classList.toggle('w-5', active);
        dot.classList.toggle('bg-white', active);
        dot.classList.toggle('w-1.5', !active);
        dot.classList.toggle('bg-white/40', !active);
    });
}

function startBannerTimer() {
    bannerTimer = setInterval(() => goToSlide(currentSlide + 1), 3500);
}

if (bannerTrack) {
    startBannerTimer();

    bannerDots.forEach((dot) => {
        dot.addEventListener('click', () => {
            clearInterval(bannerTimer);
            goToSlide(Number(dot.dataset.index));
            startBannerTimer();
        });
    });

    // Touch swipe support
    let touchStartX = 0;
    bannerTrack.addEventListener('touchstart', (e) => { touchStartX = e.touches[0].clientX; }, { passive: true });
    bannerTrack.addEventListener('touchend', (e) => {
        const diff = touchStartX - e.changedTouches[0].clientX;
        if (Math.abs(diff) > 40) {
            clearInterval(bannerTimer);
            goToSlide(currentSlide + (diff > 0 ? 1 : -1));
            startBannerTimer();
        }
    }, { passive: true });
}

// ── Alert bar dismiss ─────────────────────────────────────────────────────────

document.querySelectorAll('.dash-alert button').forEach((btn) => {
    btn.addEventListener('click', () => {
        btn.closest('.dash-alert')?.remove();
    });
});
