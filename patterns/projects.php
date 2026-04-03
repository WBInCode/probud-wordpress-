<?php
/**
 * Title: Realizacje
 * Slug: probud/projects
 * Categories: probud-sections
 */

if ( ! function_exists( 'probud_get_projects' ) ) {
	require_once get_template_directory() . '/inc/project-data.php';
}

$all_projects = probud_get_projects();
$projects = array_slice( $all_projects, 0, 6, true );
?>
<!-- wp:html -->
<section class="section" id="realizacje">
	<div class="section-inner">
		<div class="section-header center fade-up">
			<div class="section-label">Portfolio</div>
			<h2 class="section-title" style="font-size:clamp(1.75rem, 3vw, 2.5rem);">Nasze realizacje</h2>
			<p class="section-desc">Każdy projekt to dowód naszego zaangażowania i profesjonalizmu. Poznaj wybrane realizacje PRO-BUD.</p>
		</div>
		<div class="projects-grid">
			<?php $i = 0; foreach ( $projects as $key => $project ) : ?>
			<a href="/realizacja-<?php echo esc_attr( $project['slug'] ); ?>/" class="project-card fade-up delay-<?php echo esc_attr( ( $i % 3 ) + 1 ); ?>" style="text-decoration:none;">
				<img src="<?php echo esc_url( $project['image'] ); ?>" alt="<?php echo esc_attr( $project['title'] ); ?>" loading="lazy">
				<div class="project-overlay">
					<div class="project-category"><?php echo esc_html( $project['category'] ); ?></div>
					<h3 class="project-title"><?php echo esc_html( $project['title'] ); ?></h3>
					<div class="project-meta"><?php echo esc_html( $project['meta'] ); ?></div>
				</div>
			</a>
			<?php $i++; endforeach; ?>
		</div>
		<div style="text-align:center;margin-top:2.5rem;" class="fade-up">
			<a href="/realizacje/" class="btn-primary">Wszystkie realizacje &rarr;</a>
		</div>
	</div>
</section>
<!-- /wp:html -->
