<?php
if(!empty($args)): 
    extract($args);
?>
<section class="leadIns container-fluid">
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