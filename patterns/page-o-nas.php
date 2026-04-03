<?php
/**
 * Title: Strona O nas
 * Slug: probud/page-o-nas
 * Categories: probud-sections
 */

$team = array(
	array(
		'image'    => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?w=400&h=400&fit=crop&q=80',
		'name'     => 'Jan Kowalski',
		'role'     => 'Prezes Zarządu',
		'desc'     => 'Inżynier budownictwa z 25-letnim doświadczeniem w zarządzaniu projektami.',
	),
	array(
		'image'    => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&h=400&fit=crop&q=80',
		'name'     => 'Maria Wiśniewska',
		'role'     => 'Dyrektor ds. Projektów',
		'desc'     => 'Architektka z pasją do zrównoważonego budownictwa i nowoczesnych rozwiązań.',
	),
	array(
		'image'    => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=400&h=400&fit=crop&q=80',
		'name'     => 'Piotr Nowak',
		'role'     => 'Kierownik Budowy',
		'desc'     => 'Doświadczony kierownik z uprawnieniami budowlanymi bez ograniczeń.',
	),
	array(
		'image'    => 'https://images.unsplash.com/photo-1580489944761-15a19d654956?w=400&h=400&fit=crop&q=80',
		'name'     => 'Katarzyna Zielińska',
		'role'     => 'Główna Projektantka',
		'desc'     => 'Specjalistka od projektów mieszkaniowych i komercyjnych z certyfikatem BIM.',
	),
);

$milestones = array(
	array( 'year' => '2003', 'title' => 'Założenie firmy', 'desc' => 'Rozpoczęcie działalności jako mała firma budowlana w Warszawie.' ),
	array( 'year' => '2008', 'title' => 'Pierwsze duże projekty', 'desc' => 'Realizacja pierwszego osiedla mieszkaniowego i budynku komercyjnego.' ),
	array( 'year' => '2013', 'title' => 'Ekspansja', 'desc' => 'Rozszerzenie działalności na teren całej Polski. Zatrudnienie 80+ pracowników.' ),
	array( 'year' => '2018', 'title' => 'Certyfikacja ISO', 'desc' => 'Uzyskanie certyfikatów ISO 9001 i ISO 14001. Wdrożenie systemu BIM.' ),
	array( 'year' => '2023', 'title' => '850+ projektów', 'desc' => 'Ponad 850 zrealizowanych projektów i 120 pracowników w zespole.' ),
);
?>
<!-- wp:html -->
<section class="page-hero" style="background:linear-gradient(135deg, #1B2A4A 0%, #0D1926 100%);">
	<div class="page-hero-inner">
		<nav class="breadcrumbs" aria-label="Nawigacja okruszkowa">
			<a href="/">Strona główna</a>
			<span class="separator">/</span>
			<span class="current">O firmie</span>
		</nav>
		<h1 class="page-hero-title">O firmie PRO-BUD</h1>
		<p class="page-hero-desc">Ponad 20 lat budujemy zaufanie klientów poprzez rzetelną pracę, innowacyjne rozwiązania i&nbsp;najwyższą jakość wykonawstwa.</p>
	</div>
</section>

<!-- About intro -->
<section class="section">
	<div class="section-inner">
		<div class="about-grid">
			<div class="about-image-wrap fade-up">
				<img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=800&h=600&fit=crop&q=80" alt="Plac budowy PRO-BUD" loading="lazy">
				<div class="about-experience-badge">
					<div class="number">20+</div>
					<div class="text">Lat doświadczenia</div>
				</div>
			</div>
			<div class="fade-up delay-2">
				<div class="section-header">
					<div class="section-label">Kim jesteśmy</div>
					<h2 class="section-title" style="font-size:clamp(1.75rem, 3vw, 2.25rem);">Twój zaufany partner w&nbsp;branży budowlanej</h2>
				</div>
				<p style="color:var(--wp--preset--color--gray-500);line-height:1.8;margin-bottom:1.5rem;">PRO-BUD to przedsiębiorstwo budowlane działające na polskim rynku od 2003 roku. Specjalizujemy się w budownictwie mieszkaniowym, komercyjnym i przemysłowym — realizując projekty od fundamentów po wykończenie pod klucz.</p>
				<p style="color:var(--wp--preset--color--gray-500);line-height:1.8;margin-bottom:2rem;">Nasz zespół to ponad 120 wykwalifikowanych inżynierów, architektów i fachowców. Łączymy nowoczesne technologie z tradycyjnym rzemiosłem, dbając o każdy detal i terminowość realizacji.</p>
				<div class="about-features">
					<div class="about-feature">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
						Certyfikat ISO 9001
					</div>
					<div class="about-feature">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
						Certyfikat ISO 14001
					</div>
					<div class="about-feature">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
						Ubezpieczenie OC 10M PLN
					</div>
					<div class="about-feature">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
						Technologia BIM
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Timeline -->
<section class="section section--light">
	<div class="section-inner">
		<div class="section-header center fade-up">
			<div class="section-label">Historia</div>
			<h2 class="section-title" style="font-size:clamp(1.75rem, 3vw, 2.25rem);">Nasza droga do sukcesu</h2>
		</div>
		<div class="timeline">
			<?php foreach ( $milestones as $i => $m ) : ?>
			<div class="timeline-item fade-up delay-<?php echo esc_attr( ( $i % 3 ) + 1 ); ?>">
				<div class="timeline-year"><?php echo esc_html( $m['year'] ); ?></div>
				<div class="timeline-content">
					<h3 style="font-family:var(--wp--preset--font-family--heading);font-size:1.1rem;font-weight:600;color:var(--wp--preset--color--primary);margin:0 0 0.5rem;"><?php echo esc_html( $m['title'] ); ?></h3>
					<p style="color:var(--wp--preset--color--gray-500);font-size:0.9rem;line-height:1.6;margin:0;"><?php echo esc_html( $m['desc'] ); ?></p>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- Team -->
<section class="section">
	<div class="section-inner">
		<div class="section-header center fade-up">
			<div class="section-label">Zespół</div>
			<h2 class="section-title" style="font-size:clamp(1.75rem, 3vw, 2.25rem);">Poznaj nasz zespół</h2>
			<p class="section-desc">Za każdym sukcesem stoją ludzie. Nasz zespół to doświadczeni specjaliści z pasją do budownictwa.</p>
		</div>
		<div class="team-grid">
			<?php foreach ( $team as $i => $person ) : ?>
			<div class="team-card fade-up delay-<?php echo esc_attr( $i + 1 ); ?>">
				<img src="<?php echo esc_url( $person['image'] ); ?>" alt="<?php echo esc_attr( $person['name'] ); ?>" class="team-photo" loading="lazy">
				<h3 class="team-name"><?php echo esc_html( $person['name'] ); ?></h3>
				<div class="team-role"><?php echo esc_html( $person['role'] ); ?></div>
				<p class="team-desc"><?php echo esc_html( $person['desc'] ); ?></p>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<!-- /wp:html -->
