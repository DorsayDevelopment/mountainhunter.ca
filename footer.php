<?php wp_footer(); ?>

<?php if(is_product()) { ?>
  <script>
  $j('#main-nav').addClass('nav-fixed');
  $j('body').css("margin-top", "64px");
  </script>
<?php } ?>



<footer>
  <div class="footer-logo">
    <a href="#"><img src="<?php bloginfo('template_directory') ?>/img/MHS_dark.png" alt=""></a>
  </div>
  <div class="footer-byline">
    &copy; Mountain Hunter Society <?php echo getdate()['year'] ?> | Site by&nbsp;<a href="http://dorsaydevelopment.ca">Dorsay Development</a>
  </div>
</footer>

</body>
</html>