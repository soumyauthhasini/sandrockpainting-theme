<?php
if (!empty($args)) :
    extract($args);
?>

<section class="content interior container-fluid">
    <div class="col-md-8 mx-auto">

        <?php if (!empty($title)) : ?>
            <h1><?= esc_html($title); ?></h1>
            <div class="line">&nbsp;</div>
        <?php endif; ?>

        <?php if (!empty($image)) : ?>
            <div class="float-md-end float-sm-none">
                <?= wp_get_attachment_image($image['ID'], 'full', false, [
                    'class' => 'img-fluid',
                    'alt'   => $image['alt'] ?: $title
                ]); ?>
            </div>
        <?php endif; ?>
        <?= $description; ?>
    </div>
</section>

<?php endif; ?>