</div> <!-- // .container -->

<?php 
/**
 * Default Footer
 *
 * @package WordPress
 * @subpackage SliderDGI
 * @since SliderDGI 1.0
 *
 */
 
// Gets all the scripts included by wordpress, wordpress plugins or functions.php 
// using wp_enqueue_script if it has $in_footer set to true

wp_footer(); ?>

<div class="well well-sm navbar-fixed-bottom">
  <a href="#top" class="pull-right">Back to top</a>
  Copyright © Beatrice Castaldo <?php echo date('Y'); ?>
</div>

</body>
</html>