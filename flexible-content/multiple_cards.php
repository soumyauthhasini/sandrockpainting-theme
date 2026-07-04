<?php
    $cardDetails = [
        'card_type'                 => get_sub_field('card_type') ?: '',
    ];

    get_template_part( 'flexible-content/card/multipleCards/multiple', get_sub_field('card_type')['value'], $cardDetails);
