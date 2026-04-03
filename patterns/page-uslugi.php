<?php
/**
 * Title: Strona Usług
 * Slug: probud/page-uslugi
 * Categories: probud-sections
 */

$services = array(
	array(
		'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>',
		'image' => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=600&h=400&fit=crop&q=80',
		'title' => 'Budownictwo mieszkaniowe',
		'desc'  => 'Kompleksowa budowa domów jednorodzinnych, wielorodzinnych i osiedli mieszkaniowych. Od projektu architektonicznego, przez prace fundamentowe, aż po wykończenie pod klucz. Stosujemy nowoczesne materiały i technologie, zapewniając energooszczędność i komfort użytkowania.',
		'features' => array( 'Domy jednorodzinne', 'Osiedla wielorodzinne', 'Wykończenie pod klucz', 'Systemy energooszczędne' ),
	),
	array(
		'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/><line x1="12" y1="12" x2="12" y2="16"/></svg>',
		'image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=600&h=400&fit=crop&q=80',
		'title' => 'Obiekty komercyjne',
		'desc'  => 'Budowa biurowców, hal produkcyjnych, magazynów i obiektów handlowo-usługowych. Projektujemy i realizujemy obiekty spełniające najwyższe standardy bezpieczeństwa, funkcjonalności i prestiżu.',
		'features' => array( 'Biurowce klasy A/B', 'Hale magazynowe', 'Obiekty handlowe', 'Centra logistyczne' ),
	),
	array(
		'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 000 1.4l1.6 1.6a1 1 0 001.4 0l3.77-3.77a6 6 0 01-7.94 7.94l-6.91 6.91a2.12 2.12 0 01-3-3l6.91-6.91a6 6 0 017.94-7.94l-3.76 3.76z"/></svg>',
		'image' => 'https://images.unsplash.com/photo-1582268611958-ebfd161ef9cf?w=600&h=400&fit=crop&q=80',
		'title' => 'Remonty i modernizacje',
		'desc'  => 'Kompleksowa modernizacja budynków mieszkalnych i użytkowych. Termomodernizacje, wymiana instalacji, rewitalizacja zabytkowych kamienic z zachowaniem oryginalnego charakteru obiektu.',
		'features' => array( 'Termomodernizacje', 'Rewitalizacje budynków', 'Wymiana instalacji', 'Adaptacje wnętrz' ),
	),
	array(
		'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 014 4v14a3 3 0 00-3-3H2z"/><path d="M22 3h-6a4 4 0 00-4 4v14a3 3 0 013-3h7z"/></svg>',
		'image' => 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=600&h=400&fit=crop&q=80',
		'title' => 'Projektowanie',
		'desc'  => 'Profesjonalne projekty architektoniczne i konstrukcyjne z wykorzystaniem technologii BIM. Wizualizacje 3D, analiza wytrzymałościowa i pełna dokumentacja techniczna zgodna z obowiązującymi przepisami.',
		'features' => array( 'Projekty architektoniczne', 'Wizualizacje 3D / BIM', 'Dokumentacja techniczna', 'Pozwolenia budowlane' ),
	),
);
?>
<!-- wp:html -->
<section class="page-hero" style="background:linear-gradient(135deg, #1B2A4A 0%, #0D1926 100%);">
	<div class="page-hero-inner">
		<nav class="breadcrumbs" aria-label="Nawigacja okruszkowa">
			<a href="/">Strona główna</a>
			<span class="separator">/</span>
			<span class="current">Usługi</span>
		</nav>
		<h1 class="page-hero-title">Nasze usługi</h1>
		<p class="page-hero-desc">Oferujemy kompleksowe usługi budowlane — od projektu, przez realizację, po wykończenie i serwis gwarancyjny.</p>
	</div>
</section>

<section class="section">
	<div class="section-inner">
		<?php foreach ( $services as $i => $s ) : ?>
		<div class="service-detail fade-up <?php echo $i % 2 === 1 ? 'service-detail--reverse' : ''; ?>" style="<?php echo $i > 0 ? 'margin-top:4rem;' : ''; ?>">
			<div class="service-detail-image">
				<img src="<?php echo esc_url( $s['image'] ); ?>" alt="<?php echo esc_attr( $s['title'] ); ?>" loading="lazy">
			</div>
			<div class="service-detail-content">
				<div class="service-icon"><?php echo $s['icon']; ?></div>
				<h2 style="font-family:var(--wp--preset--font-family--heading);font-size:1.5rem;font-weight:700;color:var(--wp--preset--color--primary);margin:1rem 0 0.75rem;"><?php echo esc_html( $s['title'] ); ?></h2>
				<p style="color:var(--wp--preset--color--gray-500);line-height:1.8;margin-bottom:1.5rem;"><?php echo esc_html( $s['desc'] ); ?></p>
				<ul class="service-feature-list">
					<?php foreach ( $s['features'] as $f ) : ?>
					<li>
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--accent)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
						<?php echo esc_html( $f ); ?>
					</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
</section>
<!-- /wp:html -->
