<!-- start footer =========================================================================================================== -->
<footer class="container-fluid footer-main">
  <div class="container-xl">
    <div class="row">
      <div class="col-md-6 col-lg-3">
        <?=get_field('address', 'option')?>
      </div>
      <?php if(!empty(get_field('hours', 'option'))):?>
        <div class="col-md-6 col-lg-3">
          <?=get_field('hours', 'option');?>
        </div>
      <?php endif; ?>
      <?php if(!empty(get_field('services', 'option'))):?>
      <div class="col-md-6 col-lg-3">
        <?=get_field('services', 'option');?>
      </div>
      <?php endif; ?>
      <?php if(!empty(get_field('social', 'option'))):?>
      <div class="col-md-6 col-lg-3">
        <?=get_field('social', 'option');?>
      </div>
      <?php endif; ?>
    </div>
  </div>
</footer>
 <?php if(!empty(get_field('subfooter', 'option'))):?>
<div class="subFooter container-fluid">
  <?=get_field('subfooter', 'option');?>
</div>
<?php endif; ?>
<!-- end footer =========================================================================================================== --> 
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/lightbox-plus-jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<?php wp_footer();?>
</body>
</html>