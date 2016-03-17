<?php

/**
 * @file
 * Display Suite Featured Content configuration.
 */

function ds_featured_content() {
  return array(
    'label' => t('Featured Content'),
    'regions' => array(
      'image' => t('Image'),
      'caption' => t('Caption'),
    ),
    // Uncomment if you want to include a CSS file for this layout (featured_content.css)
    // 'css' => TRUE,
    // Uncomment if you want to include a preview for this layout (featured_content.png)
    // 'image' => TRUE,
  );
}
