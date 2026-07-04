<?php
if (!empty($args)) :
    extract($args);
?>

<section class="content interior container-fluid">
    <div class="col-md-7 mx-auto">

        <?php if (!empty($title)) : ?>
            <h1><?= $title; ?></h1>
        <?php endif; ?>

        <?php if (!empty($subtitle)) : ?>
            <h2><?= $subtitle; ?></h2>
        <?php endif; ?>

        <div class="line">&nbsp;</div>

        <?php if (!empty($description)) : ?>
            <?= $description; ?>
        <?php endif; ?>

        <?php if (!empty($description_two)) : ?>
            <?= $description_two; ?>
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