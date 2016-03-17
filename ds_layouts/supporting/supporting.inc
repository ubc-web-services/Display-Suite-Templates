<?php

/**
 * @file
 * Display Suite Supporting Content configuration.
 */

function ds_supporting() {
  return array(
    'label' => t('Supporting Content'),
    'regions' => array(
      'supporting_style' => t('Supporting Style'),
      'supporting_content' => t('Supporting Content'),
    ),
    // Uncomment if you want to include a CSS file for this layout (accordion.css)
    // 'css' => TRUE,
    // Uncomment if you want to include a preview for this layout (accordion.png)
    // 'image' => TRUE,
  );
}
