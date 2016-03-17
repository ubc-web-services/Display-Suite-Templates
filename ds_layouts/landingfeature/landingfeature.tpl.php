<?php
/**
 * @file
 * Display Suite landingfeature template.
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
 * - $landingfeature_title: Rendered content for the "Landing Page Feature Title" region.
 * - $landingfeature_title_classes: String of classes that can be used to style the "Landing Page Feature Title" region.
 *
 * - $landingfeature_image: Rendered content for the "Landing Page Feature Image" region.
 * - $landingfeature_image_classes: String of classes that can be used to style the "Landing Page Feature Image" region.
 *
 * - $landingfeature_content: Rendered content for the "Landing Page Feature CTA Area" region.
 * - $landingfeature_content_classes: String of classes that can be used to style the "Landing Page Feature CTA Area" region.
 */
?>

<?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
<?php endif; ?>
<div class="featured-content" role="complementary" aria-label="promotions">
  <ul class="slide">
    <li>
      <?php print $landingfeature_image; ?>
      
      <div class="flex-caption">
        <div class="row-fluid">
          <div class="col-md-4 hidden-sm hidden-xs">
            <a href="/" style="display: block;">
              <object type="image/svg+xml" data="<?php print base_path() . drupal_get_path('theme', 'sala');?>/img/sala_signature-trans.svg" class="signature">
                School of Architecture + Landscape Architecture  
              </object>
            </a>
          </div>
        </div>
        <div class="row-fluid headline">
          <div class="col-md-10 col-md-offset-2 inner-caption">
            <?php print $landingfeature_title; ?>
            <?php print $landingfeature_content; ?>
          </div>
        </div>
      </div>
    </li>
  </ul>
</div>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
