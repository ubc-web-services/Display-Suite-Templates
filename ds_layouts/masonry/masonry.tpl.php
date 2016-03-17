<?php
/**
 * @file
 * Display Suite Masonry template.
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
 * - $masonry_style: Rendered content for the "Masonry Trigger" region.
 * - $masonry_style_classes: String of classes that can be used to style the "Masonry Trigger" region.
 *
 * - $masonry_image: Rendered content for the "Masonry Image Square" region.
 * - $masonry_image_classes: String of classes that can be used to style the "Masonry Image Square" region.
 *
 * - $masonry_image_landscape: Rendered content for the "Masonry Image Landscape" region.
 * - $masonry_image_landscape_classes: String of classes that can be used to style the "Masonry Image Landscape" region.
 *
 * - $masonry_image_stacked: Rendered content for the "Masonry Image Stacked" region.
 * - $masonry_image_stacked_classes: String of classes that can be used to style the "Masonry Image Stacked" region.
 *
 * - $masonry_content: Rendered content for the "Masonry Content" region.
 * - $masonry_content_classes: String of classes that can be used to style the "Masonry Content" region.
 */
?>
<?php
	if (isset($node->field_masonry_layout['und'][0]['value'])){
 	   $layout = $node->field_masonry_layout['und'][0]['value'];
   }
?>
<div class="grid-item <?php print $masonry_style; ?>">
	<article class="teaser clearfix">
	  <?php if (isset($title_suffix['contextual_links'])): ?>
		  <?php print render($title_suffix['contextual_links']); ?>
	  <?php endif; ?>
	  
	  <?php if ($layout === 'text-image-stack'): ?>
	    <?php print $masonry_image_stacked; ?>
	  <?php endif; ?>
	  <?php if (($layout === 'text-image-unequal') || ($layout === 'image-text-unequal')): ?>
	  <?php print $masonry_image_landscape; ?>
	  <?php endif; ?>
	  <?php if (($layout === 'text-image-equal') || ($layout === 'image-text-equal')): ?>
    <?php print $masonry_image; ?>
    <?php endif; ?>
    <div class="inner-content">
	    <?php print $masonry_content; ?>
	  </div>
	</article>
 </div>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
