<?php
if (!empty($args)) :
    extract($args);
?>

<section id="behind" class="content interior container-fluid">

    <div class="col-md-8 mx-auto">

        <?php if (!empty($title)) : ?>
            <h1><?= $title; ?></h1>
        <?php endif; ?>

        <div class="line mb-5">&nbsp;</div>

    </div>

    <div class="col-md-8 mx-auto">

        <div class="row">
            <div class="col-12">

                <?php if (!empty($subtitle)) : ?>
                    <p><?= $subtitle; ?></p>
                <?php endif; ?>

                <?php if (!empty($description)) : ?>
                    <?= $description; ?>
                <?php endif; ?>

                <?php if (!empty($description_two)) : ?>
                    <?= $description_two; ?>
                <?php endif; ?>

                <?php if (!empty($description_three)) : ?>
                    <?= $description_three; ?>
                <?php endif; ?>

                <?php
                if (!empty($cta_button_one)) :
                    echo customCta($cta_button_one, 'btn me-2');
                endif;

                if (!empty($cta_button_two)) :
                    echo customCta($cta_button_two, 'btn');
                endif;
                ?>

            </div>
        </div>
        <div class="line">&nbsp;</div>

    </div>

</section>

<?php endif; ?>