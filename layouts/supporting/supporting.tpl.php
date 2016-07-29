<?php
/**
 * @file
 * Display Suite Supporting template.
 *
 * Available variables:
 *
 * Layout:
 * - $classes: String of classes that can be used to style this layout.
 * - $contextual_links: Renderable array of contextual links.
 * - $layout_wrapper: wrapper surrounding the layout.
 *
 * Regions:
 *
 * - $supporting_style: Rendered content for the "Supporting Style" region.
 * - $supporting_style_classes: String of classes that can be used to style the "Supporting Style" region.
 *
 * - $supporting_content: Rendered content for the "Supporting Content" region.
 * - $supporting_content_classes: String of classes that can be used to style the "Supporting Content" region.
 */
?>

<?php
  if (isset($node->field_landing_layout_style['und'][0]['value'])){
    $bgstyle = $node->field_landing_layout_style['und'][0]['value']; 
  }
?>


<?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
<?php endif; ?>

<?php if ($bgstyle === 'white'): ?>
	<section class="non-clf">
		<article class="container">
<?php endif; ?>
<?php if (($bgstyle === 'dark') || ($bgstyle === 'medium') || ($bgstyle === 'light')) : ?>
	<section class="bg-<?php print $supporting_style; ?>-blue non-clf screened">
		<div class="screen-top from-white"><div class="triangle-up-left"></div></div>
		<div class="screen-bottom to-white"><div class="triangle-down-right"></div></div>
		<article class="container color-space-padding callout">
<?php endif; ?>
     	   <div class="inner-content">
	    	   <?php print $supporting_content; ?>
		   </div>
	   </article>
	</section>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
