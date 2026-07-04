<?php
    $cardDetails = [
        'card_type'                 => get_sub_field('card_type') ?: '',
    ];

    get_template_part( 'flexible-content/card/singleCards/single', get_sub_field('card_type')['value'], $cardDetails);
