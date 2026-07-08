<?php
if (!empty($args)) :
    extract($args);
?>

<section id="behind" class="content interior container-fluid">

    <div class="col-md-8 mx-auto">

        <?php if (!empty($heading)) : ?>
            <h1><?= $heading; ?></h1>
        <?php endif; ?>

        <?php if (!empty($subheading)) : ?>
            <h2><?= $subheading; ?></h2>
        <?php endif; ?>

        <div class="line mb-5">&nbsp;</div>

        <?php if (!empty($description)) : ?>
            <?= $description; ?>
        <?php endif; ?>

        <?php if (!empty($extra_description)) : ?>
            <?= $extra_description; ?>
        <?php endif; ?>

    </div>

    <div class="col-md-8 mx-auto">

        <?php
        $imageCount = 0;

        if (!empty($cards_items)) :
            foreach ($cards_items as $index => $item) :
        ?>

                <div class="row">
                    <div class="col-12">

                        <?php if (!empty($item['title'])) : ?>
                            <h1><?= $item['title']; ?></h1>
                        <?php endif; ?>

                        <?php if (!empty($item['subtitle'])) : ?>
                            <p><?= $item['subtitle']; ?></p>
                        <?php endif; ?>

                        <?php
                        if (!empty($item['image'])) :

                            // Alternate only items that actually have an image.
                            $floatClass = ($imageCount % 2 == 0)
                                ? 'float-md-start float-sm-none me-4 mb-md-3'
                                : 'float-md-end float-sm-none ms-4 mb-md-3';

                            $imageCount++;
                        ?>
                            <div class="<?= $floatClass; ?>">
                                <?= wp_get_attachment_image(
                                    $item['image']['ID'],
                                    'full',
                                    false,
                                    [
                                        'class' => 'img-fluid',
                                        'alt'   => !empty($item['image']['alt']) ? $item['image']['alt'] : $item['title']
                                    ]
                                ); ?>
                            </div>
                        <?php endif; ?>

                        <?php if (!empty($item['description'])) : ?>
                            <?= $item['description']; ?>
                        <?php endif; ?>

                        <?php if (!empty($item['extra_text'])) : ?>
                            <?= $item['extra_text']; ?>
                        <?php endif; ?>

                        <?php
                        if (!empty($item['link'])) :
                            echo customCta($item['link'], 'btn');
                        endif;
                        ?>

                    </div>
                </div>

                <?php if ($index < count($cards_items) - 1) : ?>
                    <div class="line">&nbsp;</div>
                <?php endif; ?>

        <?php
            endforeach;
        endif;
        ?>

    </div>

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

</section>

<?php endif; ?>