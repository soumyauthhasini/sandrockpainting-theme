<?php
if (!empty($args)) :
    extract($args);
?>

<section class="content interior container-fluid">
    <div class="col-md-7 mx-auto full-content">

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
            <div class="cities-list">
                <?=$description_two;?>
            </div>
        <?php endif; ?>

        <?php if (!empty($description_three)) : ?>
            <?= $description_three; ?>
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