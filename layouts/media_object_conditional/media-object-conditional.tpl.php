<?php
/**
 * @file
 * Display Suite Media Object template (with conditional link area).
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
 * - $image_area: Rendered content for the "Image Area" region.
 * - $image_area_classes: String of classes that can be used to style the "Image Area" region.
 *
 * - $content_area: Rendered content for the "Content Area" region.
 * - $content_area_classes: String of classes that can be used to style the "Content Area" region.
 *
 * - $if_area: Rendered content for the "If Area" region.
 * - $if_area_classes: String of classes that can be used to style the "If Area" region.
 *
 * - $else_area: Rendered content for the "Else Area" region.
 * - $else_area_classes: String of classes that can be used to style the "Else Area" region.
 */
?>


<article <?php print $layout_attributes; ?> class="<?php print $classes;?> box listing media">

  <!-- Needed to activate contextual links -->
  <?php if (isset($title_suffix['contextual_links'])): ?>
    <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

    <?php print $image_area; ?>

    <div class="inner-content media-body<?php print $content_area_classes; ?>">
      <?php print $content_area; ?>
	  
	    <?php if (!empty($if_area)): print $if_area; else: print $else_area; endif; ?>
    </div>

</article>

<!-- Needed to activate display suite support on forms -->
<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
