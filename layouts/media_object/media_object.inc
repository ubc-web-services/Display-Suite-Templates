<?php

/**
 * @file
 * Display Suite Media Object configuration.
 */

function ds_media_object() {
  return array(
    'label' => t('Media Object'),
    'regions' => array(
      'image_area' => t('Image Area'),
      'content_area' => t('Content Area'),
    ),
    // Uncomment if you want to include a CSS file for this layout (media_object.css)
    // 'css' => TRUE,
    // Uncomment if you want to include a preview for this layout (media_object.png)
    // 'image' => TRUE,
  );
}
