<?php
    $cardDetails = [
        'title'                 => get_sub_field('title') ?: '',
        'subtitle'              => get_sub_field('subtitle') ?: '',
        'description'           => get_sub_field('description') ?: '',
        'description_two'       => get_sub_field('description_two') ?: '',
        'description_three'     => get_sub_field('description_three') ?: '',
        'image'                 => get_sub_field('image') ?: '',
        'image_two'             => get_sub_field('image_two') ?: '',
        'cta_button_one'        => get_sub_field('cta_button_one') ?: '',
        'cta_button_two'        => get_sub_field('cta_button_two') ?: '',
        
    ];

    get_template_part( 'flexible-content/card/singleCards/single', get_sub_field('card_type')['value'], $cardDetails);
