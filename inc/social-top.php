<?php 
/**
 * Top Border social links
 *
 * @package hedmark
 * @since 	hedmark 1.1
**/ 
 global $hedmark_option;
?>
<div class="social-top">
			 
			   <ul>
			<?php if($hedmark_option['facebook-top-link'] !== '') { ?>
			   <li><a href="<?php echo esc_url($hedmark_option['facebook-top-link']); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
			<?php }  ?>
			<?php if($hedmark_option['twitter-top-link'] !== '') { ?>
			   <li><a href="<?php echo esc_url($hedmark_option['twitter-top-link']); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
			<?php }  ?>
            <?php if($hedmark_option['linkedin-top-link'] !== '') { ?>			
			   <li><a href="<?php echo esc_url($hedmark_option['linkedin-top-link']); ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
			<?php }  ?>
			<?php if($hedmark_option['instagram-top-link'] !== '') { ?>	
			   <li><a href="<?php echo esc_url($hedmark_option['instagram-top-link']); ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
			<?php }  ?> 
            <?php if($hedmark_option['googleplus-top-link'] !== '') { ?>				
			   <li><a href="<?php echo esc_url($hedmark_option['googleplus-top-link']); ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
			<?php }  ?> 
			   </ul> 
</div>