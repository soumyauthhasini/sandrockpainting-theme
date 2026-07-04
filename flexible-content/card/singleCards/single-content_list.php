<?php
if (!empty($args)) :
    extract($args);
?>

<section class="serviceArea">
    <div class="col-md-6 mx-auto">

        <?php if (!empty($title)) : ?>
            <h2 class="text-center"><?=$title; ?></h2>
            <div class="line mx-auto">&nbsp;</div>
        <?php endif; ?>

        <?php if ($subtitle != '') : ?>
            <p class="text-center">
                <?=$subtitle; ?>
            </p>
        <?php endif; ?>

        <div class="row mt-5">

            <?php if (!empty($description)) : ?>
                <div class="col-md-4">
                    <?=$description; ?>
                </div>
            <?php endif; ?>

            <?php if (!empty($description_two)) : ?>
                <div class="col-md-4">
                    <?=$description_two; ?>
                </div>
            <?php endif; ?>

            <?php if (!empty($description_three)) : ?>
                <div class="col-md-4">
                    <?=$description_three; ?>
                </div>
            <?php endif; ?>

        </div>

    </div>
</section>

<?php endif; ?>