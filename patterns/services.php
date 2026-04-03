<?php
/**
 * Title: Usługi
 * Slug: probud/services
 * Categories: probud-sections
 */

$services = array(
	array(
		'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>',
		'title' => 'Budownictwo mieszkaniowe',
		'desc'  => 'Budowa domów jednorodzinnych, wielorodzinnych i osiedli. Od projektu po wykończenie pod klucz.',
	),
	array(
		'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/><line x1="12" y1="12" x2="12" y2="16"/></svg>',
		'title' => 'Obiekty komercyjne',
		'desc'  => 'Budowa biurowców, hal produkcyjnych, magazynów i obiektów handlowych spełniających najwyższe standardy.',
	),
	array(
		'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 000 1.4l1.6 1.6a1 1 0 001.4 0l3.77-3.77a6 6 0 01-7.94 7.94l-6.91 6.91a2.12 2.12 0 01-3-3l6.91-6.91a6 6 0 017.94-7.94l-3.76 3.76z"/></svg>',
		'title' => 'Remonty i modernizacje',
		'desc'  => 'Kompleksowe remonty budynków mieszkalnych i użytkowych. Termomodernizacje i adaptacje.',
	),
	array(
		'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 014 4v14a3 3 0 00-3-3H2z"/><path d="M22 3h-6a4 4 0 00-4 4v14a3 3 0 013-3h7z"/></svg>',
		'title' => 'Projektowanie',
		'desc'  => 'Profesjonalne projekty architektoniczne i konstrukcyjne. Wizualizacje 3D i dokumentacja techniczna.',
	),
	array(
		'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg>',
		'title' => 'Nadzór budowlany',
		'desc'  => 'Profesjonalny nadzór inwestorski i kierowanie budową. Kontrola jakości na każdym etapie.',
	),
	array(
		'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="4" width="22" height="16" rx="2"/><path d="M1 10h22"/></svg>',
		'title' => 'Infrastruktura drogowa',
		'desc'  => 'Budowa dróg, parkingów, chodników i sieci uzbrojenia terenu. Prace ziemne i fundamentowe.',
	),
);
?>
<!-- wp:html -->
<section class="section section--light" id="uslugi">
	<div class="section-inner">
		<div class="section-header center fade-up">
			<div class="section-label">Nasze usługi</div>
			<h2 class="section-title" style="font-size:clamp(1.75rem, 3vw, 2.5rem);">Kompleksowa obsługa budowlana</h2>
			<p class="section-desc">Oferujemy pełen zakres usług budowlanych — od projektu, przez realizację, po odbiór i serwis gwarancyjny.</p>
		</div>
		<div class="services-grid">
			<?php foreach ( $services as $i => $s ) : ?>
			<div class="service-card fade-up delay-<?php echo esc_attr( $i + 1 ); ?>">
				<div class="service-icon"><?php echo $s['icon']; ?></div>
				<h3><?php echo esc_html( $s['title'] ); ?></h3>
				<p><?php echo esc_html( $s['desc'] ); ?></p>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<!-- /wp:html -->
