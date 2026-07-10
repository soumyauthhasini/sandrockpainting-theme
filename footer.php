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
<!-- <script src="https://code.jquery.com/ui/1.14.2/jquery-ui.min.js" integrity="sha256-mblSWfbYzaq/f+4akyMhE6XELCou4jbkgPv+JQPER2M=" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/lightbox.js"></script>

<?php wp_footer();?>
</body>
</html>