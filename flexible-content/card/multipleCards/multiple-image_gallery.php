<?php
if (!empty($args)) :
    extract($args);
?>

<section class="content interior container-fluid">

    <div class="col-md-10 mx-auto">

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



<?php if (!empty($gallery_images)) : ?>

    <div class="d-flex justify-content-center flex-wrap gallery">

        <?php foreach ($gallery_images as $image) : ?>

            <a href="<?= $image['url']; ?>"
               data-lightbox="<?= sanitize_title($heading ?: 'gallery'); ?>"
               title="<?= $image['title']; ?>">

                <?= wp_get_attachment_image(
                    $image['ID'],
                    'full',
                    false,
                    [
                        'class' => 'img-fluid',
                        'alt'   => !empty($image['alt']) ? $image['alt'] : $image['title']
                    ]
                ); ?>

            </a>

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