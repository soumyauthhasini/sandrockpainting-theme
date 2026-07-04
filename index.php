<?php
get_header();
    // Retrieve the flexible content value
    $flexible_content = get_field('flexible_content');
    $i = 1;
    // Check if there are any layouts
    if ($flexible_content) {
        while (have_rows('flexible_content')) {
            the_row();
            get_template_part('flexible-content/'.  get_row_layout());
            $i++;
        }
    }
get_footer();