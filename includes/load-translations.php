<?php 
function eptc_load_php_translations() {
  
  load_plugin_textdomain(
    'e-potis',
    false,
    "ept-communication-form/languages"
  );
  
}

function eptc_load_block_translations(){
  $blocks = [
    'ept-contact-contact-form-editor-script',
  ];

  foreach($blocks as $block){
    wp_set_script_translations(
      $block,
      'e-potis',
      EPT_CONTACT_FORM_PLUGIN_DIR . "languages"
    );
  }
}