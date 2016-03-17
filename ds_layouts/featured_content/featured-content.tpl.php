<?php
/**
 * @file
 * Display Suite Featured Content template.
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
 * - $image: Rendered content for the "Image" region.
 * - $image_classes: String of classes that can be used to style the "Image" region.
 *
 * - $caption: Rendered content for the "Caption" region.
 * - $caption_classes: String of classes that can be used to style the "Caption" region.
 */
?>
<div class="flexslider noslider featured-content <?php print $classes;?>" <?php print $layout_attributes; ?> role="complementary" aria-label="promotions">
  <?php if (isset($title_suffix['contextual_links'])): ?>
    <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>
    <ul class="slides">
      <li class="wow fadeIn" data-wow-duration=".25s" data-wow-delay=".05s">
		  <?php print $image; ?>
		  <div class="container">
			  <div class="flex-caption col-sm-7<?php print $caption_classes; ?>">
				  <?php print $caption; ?>
			  </div>
		  </div>			 
	  </li>
	</ul>
</div>
<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>