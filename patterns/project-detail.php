<?php
/**
 * Title: Szczegóły realizacji
 * Slug: probud/project-detail
 * Categories: probud-sections
 */

if ( ! function_exists( 'probud_get_projects' ) ) {
	require_once get_template_directory() . '/inc/project-data.php';
}

$projects = probud_get_projects();
$current_slug = get_post_field( 'post_name', get_the_ID() );

// Strip "realizacja-" prefix if present
$project_key = preg_replace( '/^realizacja-/', '', $current_slug );

if ( ! isset( $projects[ $project_key ] ) ) {
	// Fallback: try to find by matching
	foreach ( $projects as $key => $p ) {
		if ( sanitize_title( $p['title'] ) === $current_slug || $key === $current_slug ) {
			$project_key = $key;
			break;
		}
	}
}

if ( ! isset( $projects[ $project_key ] ) ) {
	return;
}

$project = $projects[ $project_key ];

// Get other projects for "See also" section
$other_projects = array_diff_key( $projects, array( $project_key => true ) );
$related = array_slice( $other_projects, 0, 3, true );
?>
<!-- wp:html -->
<section class="page-hero" style="background:linear-gradient(135deg, #1B2A4A 0%, #0D1926 100%);">
	<div class="page-hero-inner">
		<nav class="breadcrumbs" aria-label="Nawigacja okruszkowa">
			<a href="/">Strona główna</a>
			<span class="separator">/</span>
			<a href="/realizacje/">Realizacje</a>
			<span class="separator">/</span>
			<span class="current"><?php echo esc_html( $project['title'] ); ?></span>
		</nav>
		<div class="project-category" style="margin-bottom:0.5rem;"><?php echo esc_html( $project['category'] ); ?></div>
		<h1 class="page-hero-title"><?php echo esc_html( $project['title'] ); ?></h1>
		<p class="page-hero-desc"><?php echo esc_html( $project['desc'] ); ?></p>
	</div>
</section>

<!-- Gallery -->
<section class="section" style="padding-bottom:0;">
	<div class="section-inner">
		<div class="project-gallery">
			<?php foreach ( $project['gallery'] as $gi => $img ) : ?>
			<div class="project-gallery-item<?php echo $gi === 0 ? ' project-gallery-item--main' : ''; ?>">
				<img src="<?php echo esc_url( $img ); ?>" alt="<?php echo esc_attr( $project['title'] ); ?> — zdjęcie <?php echo $gi + 1; ?>" loading="<?php echo $gi === 0 ? 'eager' : 'lazy'; ?>">
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- Details -->
<section class="section">
	<div class="section-inner">
		<div class="project-detail-grid">
			<div class="project-detail-content">
				<div class="section-label">O projekcie</div>
				<h2 style="font-family:var(--wp--preset--font-family--heading);font-size:clamp(1.5rem,2.5vw,2rem);font-weight:700;color:var(--wp--preset--color--primary);margin:0.5rem 0 1.5rem;">Szczegóły realizacji</h2>
				<p style="color:var(--wp--preset--color--gray-500);line-height:1.8;font-size:1.05rem;"><?php echo esc_html( $project['full_desc'] ); ?></p>

				<h3 style="font-family:var(--wp--preset--font-family--heading);font-size:1.15rem;font-weight:600;color:var(--wp--preset--color--primary);margin:2.5rem 0 1rem;">Zakres prac</h3>
				<ul class="project-scope-list">
					<?php foreach ( $project['scope'] as $item ) : ?>
					<li>
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--accent)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
						<?php echo esc_html( $item ); ?>
					</li>
					<?php endforeach; ?>
				</ul>
			</div>

			<div class="project-detail-sidebar">
				<div class="project-info-card">
					<h3 style="font-family:var(--wp--preset--font-family--heading);font-size:1.05rem;font-weight:600;color:var(--wp--preset--color--primary);margin:0 0 1.5rem;">Informacje o projekcie</h3>
					<div class="project-info-row">
						<span class="project-info-label">Kategoria</span>
						<span class="project-info-value"><?php echo esc_html( $project['category'] ); ?></span>
					</div>
					<div class="project-info-row">
						<span class="project-info-label">Lokalizacja</span>
						<span class="project-info-value"><?php echo esc_html( $project['location'] ); ?></span>
					</div>
					<div class="project-info-row">
						<span class="project-info-label">Powierzchnia</span>
						<span class="project-info-value"><?php echo esc_html( $project['area'] ); ?></span>
					</div>
					<div class="project-info-row">
						<span class="project-info-label">Czas realizacji</span>
						<span class="project-info-value"><?php echo esc_html( $project['duration'] ); ?></span>
					</div>
					<div class="project-info-row">
						<span class="project-info-label">Rok ukończenia</span>
						<span class="project-info-value"><?php echo esc_html( $project['year'] ); ?></span>
					</div>

					<a href="/kontakt/" class="btn-primary" style="width:100%;justify-content:center;margin-top:1.5rem;">Zapytaj o podobny projekt &rarr;</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Related projects -->
<section class="section section--light">
	<div class="section-inner">
		<div class="section-header center fade-up">
			<div class="section-label">Zobacz również</div>
			<h2 class="section-title" style="font-size:clamp(1.5rem,2.5vw,2rem);">Inne realizacje</h2>
		</div>
		<div class="projects-grid">
			<?php foreach ( $related as $rkey => $rp ) : ?>
			<a href="/realizacja-<?php echo esc_attr( $rp['slug'] ); ?>/" class="project-card fade-up" style="text-decoration:none;">
				<img src="<?php echo esc_url( $rp['image'] ); ?>" alt="<?php echo esc_attr( $rp['title'] ); ?>" loading="lazy">
				<div class="project-overlay">
					<div class="project-category"><?php echo esc_html( $rp['category'] ); ?></div>
					<h3 class="project-title"><?php echo esc_html( $rp['title'] ); ?></h3>
					<div class="project-meta"><?php echo esc_html( $rp['meta'] ); ?></div>
				</div>
			</a>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<!-- /wp:html -->
