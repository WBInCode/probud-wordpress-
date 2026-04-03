(function () {
	'use strict';

	if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

	/* Sticky header */
	const header = document.querySelector('.site-header');
	if (header) {
		const onScroll = () => {
			header.classList.toggle('scrolled', window.scrollY > 60);
		};
		window.addEventListener('scroll', onScroll, { passive: true });
		onScroll();
	}

	/* Mobile menu toggle */
	const toggle = document.querySelector('.menu-toggle');
	const nav = document.querySelector('.header-nav');
	if (toggle && nav) {
		toggle.addEventListener('click', () => {
			nav.classList.toggle('open');
			const expanded = toggle.getAttribute('aria-expanded') === 'true';
			toggle.setAttribute('aria-expanded', String(!expanded));
		});
	}

	/* Smooth scroll for anchor links */
	document.querySelectorAll('a[href^="#"]').forEach(link => {
		link.addEventListener('click', e => {
			const id = link.getAttribute('href');
			if (id.length < 2) return;
			const target = document.querySelector(id);
			if (target) {
				e.preventDefault();
				target.scrollIntoView({ behavior: 'smooth', block: 'start' });
				if (nav) nav.classList.remove('open');
			}
		});
	});

	/* Scroll reveal (fade-up) */
	const reveals = document.querySelectorAll('.fade-up');
	if (reveals.length) {
		const io = new IntersectionObserver(
			(entries) => {
				entries.forEach(entry => {
					if (entry.isIntersecting) {
						entry.target.classList.add('visible');
						io.unobserve(entry.target);
					}
				});
			},
			{ threshold: 0.15, rootMargin: '0px 0px -40px 0px' }
		);
		reveals.forEach(el => io.observe(el));
	}

	/* Counter animation */
	const counters = document.querySelectorAll('.stat-number');
	if (counters.length) {
		const counterIO = new IntersectionObserver(
			(entries) => {
				entries.forEach(entry => {
					if (entry.isIntersecting) {
						animateCounter(entry.target);
						counterIO.unobserve(entry.target);
					}
				});
			},
			{ threshold: 0.5 }
		);
		counters.forEach(el => counterIO.observe(el));
	}

	function animateCounter(el) {
		const text = el.textContent.trim();
		const match = text.match(/^(\d+)/);
		if (!match) return;
		const target = parseInt(match[1], 10);
		const suffix = text.replace(/^\d+/, '');
		const duration = 2000;
		const start = performance.now();

		function update(now) {
			const progress = Math.min((now - start) / duration, 1);
			const eased = 1 - Math.pow(1 - progress, 4);
			el.textContent = Math.round(target * eased) + suffix;
			if (progress < 1) requestAnimationFrame(update);
		}

		requestAnimationFrame(update);
	}
})();
