<?php 
function mkdruding2_preprocess_page(&$vars, $hook) {
  // it would be nice to include this only during the search hook

  // could test $vars['theme_hook_suggestions'][0] = 'page__search'
  // but am not fully sure how reliable that would be 

  // it might not work if this only gets called on that page for this reason:
  // http://www.drupaler.co.uk/blog/joys-preprocessing/70

  drupal_add_js(drupal_get_path('theme', 'mkdruding2') . '/recipe.js');
  drupal_add_js(drupal_get_path('theme', 'mkdruding2') . '/mkdruding2.js');

  //for mkdru to generate facet container client-side in the given element
  drupal_add_js(array('mkdru_ding' => array('facetContainerSelector' => 
    '#block-ding-facetbrowser-facetbrowser')), 'setting');
}

