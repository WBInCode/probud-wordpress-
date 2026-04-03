<?php
/**
 * Title: Baner podstrony
 * Slug: probud/page-hero
 * Categories: probud-sections
 */
?>
<!-- wp:html -->
<section class="page-hero" style="background:linear-gradient(135deg, #1B2A4A 0%, #0D1926 100%);">
	<div class="page-hero-inner">
		<nav class="breadcrumbs" aria-label="Nawigacja okruszkowa">
			<a href="/">Strona główna</a>
			<span class="separator">/</span>
			<span class="current" id="breadcrumb-current"></span>
		</nav>
		<h1 class="page-hero-title" id="page-hero-title"></h1>
		<p class="page-hero-desc" id="page-hero-desc"></p>
	</div>
</section>
<script>
(function(){
	var t = document.querySelector('.page-hero-title');
	if (!t) return;
	var h1 = document.querySelector('.wp-block-group h1, .wp-block-post-title, .entry-title');
	if (h1) { t.textContent = h1.textContent; h1.style.display = 'none'; }
	var bc = document.getElementById('breadcrumb-current');
	if (bc && t.textContent) bc.textContent = t.textContent;
})();
</script>
<!-- /wp:html -->
