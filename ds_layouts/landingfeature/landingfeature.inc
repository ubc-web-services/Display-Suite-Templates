<?php

/**
 * @file
 * Display Suite landingfeature configuration.
 */

function ds_landingfeature() {
  return array(
    'label' => t('Landing Page Feature'),
    'regions' => array(
      'landingfeature_title' => t('Landing Page Feature Title'),
      'landingfeature_image' => t('Landing Page Feature Image'),
      'landingfeature_content' => t('Landing Page Feature CTA Area'),
    ),
    // Uncomment if you want to include a CSS file for this layout (accordion.css)
    // 'css' => TRUE,
    // Uncomment if you want to include a preview for this layout (accordion.png)
    // 'image' => TRUE,
  );
}
