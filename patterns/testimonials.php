<?php
/**
 * Title: Opinie
 * Slug: probud/testimonials
 * Categories: probud-sections
 */

$testimonials = array(
	array(
		'text'     => 'PRO-BUD zrealizował dla nas osiedle mieszkaniowe w terminie i budżecie. Jakość wykończenia przewyższyła nasze oczekiwania. Gorąco polecam!',
		'name'     => 'Marek Kowalski',
		'role'     => 'Deweloper, MK Development',
		'initials' => 'MK',
	),
	array(
		'text'     => 'Profesjonalne podejście od pierwszego spotkania. Budowa naszego domu przebiegła sprawnie, a ekipa była zawsze dostępna i pomocna.',
		'name'     => 'Anna Nowak',
		'role'     => 'Klient indywidualny',
		'initials' => 'AN',
	),
	array(
		'text'     => 'Współpracujemy z PRO-BUD od 5 lat przy obiektach komercyjnych. Rzetelność, terminowość i wysoka jakość — to ich wizytówka.',
		'name'     => 'Tomasz Wiśniewski',
		'role'     => 'Prezes, TW Investments',
		'initials' => 'TW',
	),
);
?>
<!-- wp:html -->
<section class="section" id="opinie">
	<div class="section-inner">
		<div class="section-header center fade-up">
			<div class="section-label">Opinie</div>
			<h2 class="section-title" style="font-size:clamp(1.75rem, 3vw, 2.5rem);">Co mówią nasi klienci</h2>
			<p class="section-desc">Zaufanie klientów jest naszą największą nagrodą. Poznaj opinie osób, z którymi współpracowaliśmy.</p>
		</div>
		<div class="testimonials-grid">
			<?php foreach ( $testimonials as $i => $t ) : ?>
			<div class="testimonial-card fade-up delay-<?php echo esc_attr( $i + 1 ); ?>">
				<div class="testimonial-stars">★★★★★</div>
				<p class="testimonial-text">"<?php echo esc_html( $t['text'] ); ?>"</p>
				<div class="testimonial-author">
					<div class="testimonial-avatar"><?php echo esc_html( $t['initials'] ); ?></div>
					<div>
						<div class="testimonial-name"><?php echo esc_html( $t['name'] ); ?></div>
						<div class="testimonial-role"><?php echo esc_html( $t['role'] ); ?></div>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<!-- /wp:html -->
