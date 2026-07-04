<?php
if (!empty($args)) :
    extract($args);
?>

<section class="content interior container-fluid">
    <div class="col-sm-10 col-xxl-8 mx-auto">

        <div class="col-md-9 mx-auto">

            <?php if (!empty($heading)) : ?>
                <h1><?= esc_html($heading); ?></h1>
            <?php endif; ?>

            <?php if (!empty($subheading)) : ?>
                <h2><?= esc_html($subheading); ?></h2>
            <?php endif; ?>

            <div class="line">&nbsp;</div>

            <?php if (!empty($description)) : ?>
                <?= wp_kses_post($description); ?>
            <?php endif; ?>

            <?php if (!empty($extra_description)) : ?>
                <?= wp_kses_post($extra_description); ?>
            <?php endif; ?>

        </div>

        <?php if (!empty($cards_items)) : ?>
            <div class="row">

                <?php foreach ($cards_items as $item) : ?>
                    <div class="col-6 col-xl-4 galleryPreview">

                        <?php if (!empty($item['link'])) : ?>
                            <a href="<?= esc_url($item['link']['url']); ?>"
                                target="<?= esc_attr($item['link']['target'] ?: '_self'); ?>">
                        <?php endif; ?>

                        <?php if (!empty($item['image'])) : ?>
                            <?= wp_get_attachment_image(
                                $item['image']['ID'],
                                'full',
                                false,
                                [
                                    'class' => 'img-fluid',
                                    'alt'   => !empty($item['image']['alt']) ? $item['image']['alt'] : $item['title']
                                ]
                            ); ?>
                        <?php endif; ?>

                        <?php if (!empty($item['title'])) : ?>
                            <br><?= esc_html($item['title']); ?>
                        <?php endif; ?>

                        <?php if (!empty($item['link'])) : ?>
                            </a>
                        <?php endif; ?>

                    </div>
                <?php endforeach; ?>

            </div>
        <?php endif; ?>

        <?php if (!empty($cta_button_one) || !empty($cta_button_two)) : ?>
            <div class="text-center mt-4">
                <?php
                if (!empty($cta_button_one)) :
                    echo customCta($cta_button_one, 'btn btn-sm me-2');
                endif;

                if (!empty($cta_button_two)) :
                    echo customCta($cta_button_two, 'btn btn-sm');
                endif;
                ?>
            </div>
        <?php endif; ?>

    </div>
</section>

<?php endif; ?>