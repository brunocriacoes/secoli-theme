<?php

function custom_rewrite_rule() {
    add_rewrite_rule(
        '^brindes/([^/]*)/?',
        'index.php?pagename=brindes&prodSlug=$matches[1]',
        'top'
    );
    add_rewrite_tag('%prodSlug%','([^/]+)');
    // flush_rewrite_rules();
}

add_action('init', 'custom_rewrite_rule', 10, 0);
