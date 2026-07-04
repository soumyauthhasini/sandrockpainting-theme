<?php
    $galleryDetails = [
        'heading'               => get_sub_field('heading') ?: '',
        'class'                 => get_sub_field('class') ?: '',
        'banner_subtitle'       => get_sub_field('banner_subtitle') ?: '',
        'description'           => get_sub_field('description') ?: '',
        'cta_one'               => get_sub_field('cta_one') ?: '',
        'cta_two'               => get_sub_field('cta_two') ?: '',
        'cta_three'             => get_sub_field('cta_three') ?: '',
        'cta_four'              => get_sub_field('cta_four') ?: '',
        'slider_image'          => get_sub_field('slider_image') ?: '',
    ];

 get_template_part( 'flexible-content/banner/banner', get_sub_field('banner_type')['value'], $galleryDetails);
