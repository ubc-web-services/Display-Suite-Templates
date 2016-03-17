<?php

/**
 * @file
 * Display Suite Mini Teaser configuration.
 */

function ds_miniteaser() {
  return array(
    'label' => t('Mini Teaser'),
    'regions' => array(
      'miniteaser_content' => t('Mini Teaser Content'),
    ),
    // Uncomment if you want to include a CSS file for this layout (accordion.css)
    // 'css' => TRUE,
    // Uncomment if you want to include a preview for this layout (accordion.png)
    // 'image' => TRUE,
  );
}
