<?php
/**
 * Title: Strona Kontakt
 * Slug: probud/page-kontakt
 * Categories: probud-sections
 */

$contacts = array(
	array(
		'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>',
		'label' => 'Adres biura',
		'value' => 'ul. Budowlana 12, 00-001 Warszawa',
	),
	array(
		'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.362 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.338 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>',
		'label' => 'Telefon',
		'value' => '+48 123 456 789',
	),
	array(
		'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>',
		'label' => 'Email',
		'value' => 'biuro@pro-bud.pl',
	),
	array(
		'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>',
		'label' => 'Godziny otwarcia',
		'value' => 'Pon–Pt: 7:00 – 17:00, Sob: 8:00 – 13:00',
	),
);
?>
<!-- wp:html -->
<section class="page-hero" style="background:linear-gradient(135deg, #1B2A4A 0%, #0D1926 100%);">
	<div class="page-hero-inner">
		<nav class="breadcrumbs" aria-label="Nawigacja okruszkowa">
			<a href="/">Strona główna</a>
			<span class="separator">/</span>
			<span class="current">Kontakt</span>
		</nav>
		<h1 class="page-hero-title">Kontakt</h1>
		<p class="page-hero-desc">Masz pytania, chcesz omówić projekt lub uzyskać wycenę? Skontaktuj się z nami — jesteśmy do Twojej dyspozycji.</p>
	</div>
</section>

<section class="section">
	<div class="section-inner">
		<div class="contact-page-grid">
			<!-- Contact form -->
			<div class="contact-form-wrap fade-up">
				<h2 style="font-family:var(--wp--preset--font-family--heading);font-size:1.5rem;font-weight:700;color:var(--wp--preset--color--primary);margin:0 0 0.5rem;">Wyślij zapytanie</h2>
				<p style="color:var(--wp--preset--color--gray-500);margin-bottom:2rem;">Wypełnij formularz, a odezwiemy się w ciągu 24 godzin.</p>
				<form class="contact-form" onsubmit="event.preventDefault();alert('Dziękujemy za wiadomość! Odezwiemy się wkrótce.');">
					<div class="form-row">
						<div class="form-group">
							<label for="cf-name">Imię i nazwisko *</label>
							<input type="text" id="cf-name" name="name" required placeholder="Jan Kowalski">
						</div>
						<div class="form-group">
							<label for="cf-email">Email *</label>
							<input type="email" id="cf-email" name="email" required placeholder="jan@example.pl">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group">
							<label for="cf-phone">Telefon</label>
							<input type="tel" id="cf-phone" name="phone" placeholder="+48 123 456 789">
						</div>
						<div class="form-group">
							<label for="cf-subject">Temat</label>
							<select id="cf-subject" name="subject">
								<option value="">Wybierz temat...</option>
								<option>Wycena projektu</option>
								<option>Budownictwo mieszkaniowe</option>
								<option>Obiekty komercyjne</option>
								<option>Remonty i modernizacje</option>
								<option>Współpraca</option>
								<option>Inne</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="cf-message">Wiadomość *</label>
						<textarea id="cf-message" name="message" rows="5" required placeholder="Opisz swój projekt lub zadaj pytanie..."></textarea>
					</div>
					<button type="submit" class="btn-primary">Wyślij wiadomość &rarr;</button>
				</form>
			</div>

			<!-- Contact info sidebar -->
			<div class="contact-sidebar fade-up delay-2">
				<div class="contact-info-card">
					<h3 style="font-family:var(--wp--preset--font-family--heading);font-size:1.15rem;font-weight:600;color:#fff;margin:0 0 1.5rem;">Dane kontaktowe</h3>
					<ul class="contact-info-list" style="margin:0;">
						<?php foreach ( $contacts as $c ) : ?>
						<li class="contact-info-item">
							<div class="contact-info-icon" style="background:rgba(232,122,30,0.2);"><?php echo $c['icon']; ?></div>
							<div>
								<div class="contact-info-label" style="color:rgba(255,255,255,0.5);"><?php echo esc_html( $c['label'] ); ?></div>
								<div class="contact-info-value" style="color:#fff;"><?php echo esc_html( $c['value'] ); ?></div>
							</div>
						</li>
						<?php endforeach; ?>
					</ul>
				</div>
				<div class="contact-map" style="margin-top:1.5rem;">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2443.616684655937!2d21.01222831579907!3d52.23291067976413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471ecc669a869f01%3A0x72f0be2a88ead3fc!2sPa%C5%82ac%20Kultury%20i%20Nauki!5e0!3m2!1spl!2spl!4v1680000000000!5m2!1spl!2spl" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Lokalizacja PRO-BUD"></iframe>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /wp:html -->
