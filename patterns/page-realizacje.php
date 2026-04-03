<?php
/**
 * Title: Strona Realizacji
 * Slug: probud/page-realizacje
 * Categories: probud-sections
 */

if ( ! function_exists( 'probud_get_projects' ) ) {
	require_once get_template_directory() . '/inc/project-data.php';
}

$projects = probud_get_projects();
?>
<!-- wp:html -->
<section class="page-hero" style="background:linear-gradient(135deg, #1B2A4A 0%, #0D1926 100%);">
	<div class="page-hero-inner">
		<nav class="breadcrumbs" aria-label="Nawigacja okruszkowa">
			<a href="/">Strona główna</a>
			<span class="separator">/</span>
			<span class="current">Realizacje</span>
		</nav>
		<h1 class="page-hero-title">Nasze realizacje</h1>
		<p class="page-hero-desc">Zrealizowaliśmy ponad 850 projektów budowlanych. Każdy z nich to przykład naszego profesjonalizmu, dbałości o detale i terminowości.</p>
	</div>
</section>

<section class="section">
	<div class="section-inner">
		<div class="projects-grid projects-grid--2col">
			<?php $i = 0; foreach ( $projects as $key => $project ) : ?>
			<a href="/realizacja-<?php echo esc_attr( $project['slug'] ); ?>/" class="project-card-lg fade-up delay-<?php echo esc_attr( ( $i % 2 ) + 1 ); ?>" style="text-decoration:none;color:inherit;">
				<div class="project-card-lg-image">
					<img src="<?php echo esc_url( $project['image'] ); ?>" alt="<?php echo esc_attr( $project['title'] ); ?>" loading="lazy">
					<div class="project-overlay">
						<div class="project-category"><?php echo esc_html( $project['category'] ); ?></div>
					</div>
				</div>
				<div class="project-card-lg-body">
					<h3 class="project-title" style="color:var(--wp--preset--color--primary);font-size:1.25rem;"><?php echo esc_html( $project['title'] ); ?></h3>
					<div class="project-meta" style="color:var(--wp--preset--color--accent);margin:0.25rem 0 0.75rem;"><?php echo esc_html( $project['meta'] ); ?></div>
					<p style="color:var(--wp--preset--color--gray-500);font-size:0.9rem;line-height:1.7;margin:0;"><?php echo esc_html( $project['desc'] ); ?></p>
				</div>
			</a>
			<?php $i++; endforeach; ?>
		</div>
	</div>
</section>
<!-- /wp:html -->
