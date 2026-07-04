<?php
if (!empty($args)) :
    extract($args);
?>

<section class="content interior container-fluid">
    <div class="col-md-7 col-xl-5 mx-auto">

        <?php if (!empty($title)) : ?>
            <h1><?= esc_html($title); ?></h1>
        <?php endif; ?>

        <?php if (!empty($subtitle)) : ?>
            <h2><?= esc_html($subtitle); ?></h2>
        <?php endif; ?>

        <div class="line">&nbsp;</div>

        <?php if (!empty($description)) : ?>
            <?= $description; ?>
        <?php endif; ?>

    </div>
</section>

<?php endif; ?>