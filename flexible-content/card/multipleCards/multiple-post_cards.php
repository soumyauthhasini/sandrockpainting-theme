<?php
if(!empty($args)): 
    extract($args);
?>
<section class="leadIns container-fluid">
    <?php if (!empty($heading)) : ?>
        <div class="col-sm-10 col-xxl-8 mx-auto">

            <div class="col-md-9 mx-auto">
                <h1><?= esc_html($heading); ?></h1>
                
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
        </div>
    <?php endif; ?>
    <div class="row justify-content-center g-4">
        <?php foreach($cards_items as $item){?>
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body">
                        <p><img src="<?=$item["image"]["url"];?>" alt="<?=$item["image"]["alt"];?>" class="img-fluid"></p>
                        <h3><?=$item['title'];?></h3>
                        <p class="card-text"><?=$item['subtitle'];?></p>
                    </div>
                    <?php if (!empty($item['link'])) { ?>
                        <div class="card-footer">
                            <?= customCta($item['link'], 'btn btn-sm'); ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
    </div>
</section>
<?php endif; ?>