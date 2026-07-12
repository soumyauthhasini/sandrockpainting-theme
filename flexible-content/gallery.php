<?php
    $cardDetails = [
        'heading'                 => get_sub_field('heading') ?: '',
        'subheading'              => get_sub_field('subheading') ?: '',
        'description'             => get_sub_field('description') ?: '',
        'cta_button_one'          => get_sub_field('cta_button_one') ?: '',
        'cta_button_two'          => get_sub_field('cta_button_two') ?: '',
        'gallery_image'           => get_sub_field('gallery_image') ?: '',
    ];

    get_template_part( 'flexible-content/card/multipleCards/multiple', get_sub_field('card_type')['value'], $cardDetails);
