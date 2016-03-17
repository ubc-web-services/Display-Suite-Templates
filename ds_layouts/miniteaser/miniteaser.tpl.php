<?php
/**
 * @file
 * Display Suite Mini Teaser template.
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
 * - $miniteaser_content: Rendered content for the "Mini Teaser" region.
 * - $miniteaser_content_classes: String of classes that can be used to style the "Mini Teaser" region.
 */
?>

<?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
<?php endif; ?>
<article class="box teaser <?php print $miniteaser_content_classes; ?>">
   <div class="inner-content">
	   <?php print $miniteaser_content; ?>
   </div>
</article>
<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
