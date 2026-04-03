<?php
/**
 * Title: Statystyki
 * Slug: probud/stats
 * Categories: probud-sections
 */

$stats = array(
	array( 'number' => '850+', 'label' => 'Zrealizowanych projektów' ),
	array( 'number' => '20+',  'label' => 'Lat na rynku' ),
	array( 'number' => '120',  'label' => 'Wykwalifikowanych pracowników' ),
	array( 'number' => '99%',  'label' => 'Zadowolonych klientów' ),
);
?>
<!-- wp:html -->
<section class="stats-section">
	<div class="stats-grid">
		<?php foreach ( $stats as $i => $stat ) : ?>
		<div class="stat-item fade-up delay-<?php echo esc_attr( $i + 1 ); ?>">
			<div class="stat-number"><?php echo esc_html( $stat['number'] ); ?></div>
			<div class="stat-label"><?php echo esc_html( $stat['label'] ); ?></div>
		</div>
		<?php endforeach; ?>
	</div>
</section>
<!-- /wp:html -->
