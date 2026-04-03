<?php
/**
 * Title: Jak działamy
 * Slug: probud/process
 * Categories: probud-sections
 */

$steps = array(
	array( 'num' => '01', 'title' => 'Konsultacja', 'desc' => 'Bezpłatne spotkanie, omówienie potrzeb i wizji Twojego projektu.' ),
	array( 'num' => '02', 'title' => 'Projekt', 'desc' => 'Przygotowanie projektu, kosztorysów i harmonogramu prac.' ),
	array( 'num' => '03', 'title' => 'Realizacja', 'desc' => 'Profesjonalna budowa z bieżącą kontrolą jakości i raportowaniem.' ),
	array( 'num' => '04', 'title' => 'Odbiór', 'desc' => 'Przekazanie gotowego obiektu z pełną dokumentacją i gwarancją.' ),
);
?>
<!-- wp:html -->
<section class="section section--light" id="proces">
	<div class="section-inner">
		<div class="section-header center fade-up">
			<div class="section-label">Proces</div>
			<h2 class="section-title" style="font-size:clamp(1.75rem, 3vw, 2.5rem);">Jak działamy</h2>
			<p class="section-desc">Przejrzysty, sprawdzony proces realizacji inwestycji budowlanej w czterech krokach.</p>
		</div>
		<div class="process-grid">
			<?php foreach ( $steps as $i => $step ) : ?>
			<div class="process-step fade-up delay-<?php echo esc_attr( $i + 1 ); ?>">
				<div class="process-step-number"><?php echo esc_html( $step['num'] ); ?></div>
				<h3><?php echo esc_html( $step['title'] ); ?></h3>
				<p><?php echo esc_html( $step['desc'] ); ?></p>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<!-- /wp:html -->
