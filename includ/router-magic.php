<?php

function custom_rewrite_rule() {
    add_rewrite_rule('^brindes/([^/]*)/?','index.php?pagename=brindes&produto=$matches[1]','top');
}
add_action('init', 'custom_rewrite_rule', 10, 0);

// brindes