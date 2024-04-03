<?php

function gp_rewrite() {

    add_rewrite_tag(
        '%%customvariable%%',
        '([^/]+)'
    );
    add_rewrite_rule(
        '^page/([^/]+)/?',
        'index.php?pagename=brindes&customvariable=$matches[1]', 
        'top'
    );
    
  }
  
  add_action( 'init', 'gp_rewrite' );