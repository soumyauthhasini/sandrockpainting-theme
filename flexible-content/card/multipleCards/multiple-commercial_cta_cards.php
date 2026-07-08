<?php
if (!empty($args)) :
    extract($args);
?>

<section class="content interior container-fluid">

    <div class="col-md-7 mx-auto">

        <?php if (!empty($heading)) : ?>
            <h1><?= $heading; ?></h1>
        <?php endif; ?>

        <?php if (!empty($subheading)) : ?>
            <h2><?= $subheading; ?></h2>
        <?php endif; ?>

        <div class="line">&nbsp;</div>

        <?php if (!empty($description)) : ?>
            <?= $description; ?>
        <?php endif; ?>

        <?php if (!empty($extra_description)) : ?>
            <?= $extra_description; ?>
        <?php endif; ?>

        <?php if (!empty($cards_items)) : ?>
            <div class="row mt-5">

                <?php foreach ($cards_items as $item) : ?>

                    <div class="col-lg-6 mb-4">

                        <?php if (!empty($item['image'])) : ?>
                            <p class="text-center">

                                <?php if (!empty($item['link'])) : ?>
                                    <a href="<?= $item['link']['url']; ?>" target="<?= $item['link']['target'] ?: '_self'; ?>">
                                <?php endif; ?>

                                <?= wp_get_attachment_image(
                                    $item['image']['ID'],
                                    'full',
                                    false,
                                    [
                                        'class' => 'img-fluid',
                                        'alt'   => !empty($item['image']['alt']) ? $item['image']['alt'] : $item['title']
                                    ]
                                ); ?>

                                <?php if (!empty($item['link'])) : ?>
                                    </a>
                                <?php endif; ?>

                                <br><br>

                                <?php
                                if (!empty($item['link'])) :
                                    echo customCta($item['link'], 'btn btn-md');
                                endif;
                                ?>

                            </p>
                        <?php endif; ?>

                        <?php if (!empty($item['subtitle'])) : ?>
                            <?= $item['subtitle']; ?>
                        <?php endif; ?>

                        <?php if (!empty($item['description'])) : ?>
                            <?= $item['description']; ?>
                        <?php endif; ?>

                        <?php if (!empty($item['extra_text'])) : ?>
                            <?= $item['extra_text']; ?>
                        <?php endif; ?>

                        <?php if (!empty($item['extra_image'])) : ?>
                            <?= wp_get_attachment_image(
                                $item['extra_image']['ID'],
                                'full',
                                false,
                                [
                                    'class' => 'img-fluid',
                                    'alt'   => !empty($item['extra_image']['alt']) ? $item['extra_image']['alt'] : $item['title']
                                ]
                            ); ?>
                        <?php endif; ?>

                    </div>

                <?php endforeach; ?>

            </div>
        <?php endif; ?>

        <?php
        if (!empty($cta_button_one)) :
            echo customCta($cta_button_one, 'btn btn-md me-2');
        endif;

        if (!empty($cta_button_two)) :
            echo customCta($cta_button_two, 'btn btn-md');
        endif;
        ?>

    </div>

</section>

<?php endif; ?>