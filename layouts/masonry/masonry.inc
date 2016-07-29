<?php

/**
 * @file
 * Display Suite Accordion configuration.
 */

function ds_masonry() {
  return array(
    'label' => t('Masonry'),
    'regions' => array(
      'masonry_style' => t('Masonry Trigger'),
      'masonry_image' => t('Masonry Image Square'),
      'masonry_image_landscape' => t('Masonry Image Landscape'),
      'masonry_image_stacked' => t('Masonry Image Stacked'),
      'masonry_content' => t('Masonry Content'),
    ),
    // Uncomment if you want to include a CSS file for this layout (accordion.css)
    // 'css' => TRUE,
    // Uncomment if you want to include a preview for this layout (accordion.png)
    // 'image' => TRUE,
  );
}
