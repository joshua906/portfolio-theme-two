<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package hedmark
 */

if ( ! function_exists( 'hedmark_posts_navigation' ) ) :
/**
 * Display navigation to next/previous set of posts when applicable.
 *
 * @todo Remove this function when WordPress 4.3 is released.
 */
function hedmark_posts_navigation() {
	// Don't print empty markup if there's only one page.
	if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
		return;
	}
	?>
	<nav class="navigation posts-navigation">
		<h2 class="screen-reader-text"><?php esc_html_e( 'Posts navigation', 'hedmark' ); ?></h2>
		<div class="nav-links">

			<?php if ( get_next_posts_link() ) : ?>
			<a class="nav-previous"><?php next_posts_link( esc_html__( 'Older posts', 'hedmark' ) ); ?></a>
			<?php endif; ?>

			<?php if ( get_previous_posts_link() ) : ?>
			<a class="nav-next"><?php previous_posts_link( esc_html__( 'Newer posts', 'hedmark' ) ); ?></a>
			<?php endif; ?>

		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;



if ( ! function_exists( 'hedmark_post_nav' ) ) :
/**
 * Display navigation to next/previous post when applicable.
 *
 */
function hedmark_post_nav() {
	// Don't print empty markup if there's nowhere to navigate.
	$prev_post = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next_post     = get_adjacent_post( false, '', false );

	if ( ! $next_post && ! $prev_post ) {
		return;
	}
	?>

	<div class="post-nav clear">
		<?php if ( ! empty( $prev_post ) ): ?>
			<a class="post-nav-prev" title="<?php esc_attr_e( 'Previous post:', 'hedmark' ); echo ' ' . esc_attr( get_the_title( $prev_post ) ); ?>" href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>">
				<?php esc_html_e( 'Previous post', 'hedmark' ); ?>
			</a>
		<?php endif; ?>

		<?php if ( ! empty( $next_post ) ) : ?>
			<a class="post-nav-next" title="<?php esc_attr_e( 'Next post:', 'hedmark' ); echo ' ' . esc_attr( get_the_title( $next_post ) ); ?>" href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>">
				<?php esc_html_e( 'Next post', 'hedmark' ); ?>
			</a>
		<?php endif; ?>

		<?php edit_post_link( sprintf( esc_html__( '%s Edit Post ', 'hedmark' ), '<i class="fa fa-pencil-square-o"></i>' ) ); ?>


	</div>

	<?php
}
endif;



if ( ! function_exists( 'hedmark_post_meta' ) ) :
/**
 * Display date posted, zilla likes and comments on posts
 *
 */

function hedmark_post_meta() { ?>

	<?php if ( is_sticky() ) : ?>
		<span class="sticky-post"><i class="fa fa-thumb-tack"></i><?php esc_attr_e( 'Featured post', 'hedmark' ); ?></span>
	<?php endif; ?>

	<div class="post-meta clear">
		<time class="updated" datetime="<?php the_time( 'Y-m-d' ); ?>">
			<a class="post-date" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<i class="fa fa-clock-o"></i><?php the_time( get_option( 'date_format' ) ); ?>
			</a>
		</time>
		<?php
			if ( comments_open() ) :
				if ( ! post_password_required() ) :
					comments_popup_link( '0', '1', '%', 'post-comments' );
				endif;
			endif;

			edit_post_link( sprintf( esc_html__( '%s Edit Post ', 'hedmark' ), '<i class="fa fa-pencil-square-o"></i>' ) );
		?>
	</div>

<?php
}
endif;



if ( ! function_exists( 'hedmark_single_post_author' ) ) :
/**
 * Display author details on single.php posts
 *
 */
function hedmark_single_post_author() { ?>

	<div class="post-author">
		<i class="fa fa-user"></i>
		<div class="post-author-content">
			<h4><?php the_author_meta( 'display_name' ); ?></h4>
			<p><?php the_author_meta( 'description' ); ?></p>

			<div class="author-links">
				<a class="author-link-posts" title="<?php esc_attr_e( 'Author archive', 'hedmark' ); ?>" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
					<i class="fa fa-archive"></i>
					<?php esc_html_e( 'Author archive', 'hedmark' ); ?>
				</a>
				<?php
				$author_url = get_the_author_meta( 'user_url' );
				$author_url = preg_replace( '#^https?://#', '', rtrim( $author_url, '/' ) );

				if ( ! empty( $author_url ) ) : ?>
					<a class="author-link-website" title="<?php esc_attr_e( 'Author website', 'hedmark' ); ?>" href="<?php the_author_meta( 'user_url' ); ?>">
						<i class="fa fa-home"></i>
						<?php esc_html_e( 'Author website', 'hedmark' ); ?>
					</a>
				<?php endif; ?>
			</div> <!-- /author-links -->

		</div> <!-- /post-author-content -->
	</div> <!-- /post-author -->

<?php
}
endif;



if ( ! function_exists( 'hedmark_single_post_meta' ) ) :

/**
 * Display date posted, categories and tags on single.php posts
 *
 */

function hedmark_single_post_meta() { ?>

	<time class="post-date updated" datetime="<?php the_time( 'Y-m-d' ); ?>">
		<i class="fa fa-clock-o"></i>
		<?php the_time( get_option( 'date_format' ) ); ?>
	</time>

	<p class="post-categories"><i class="fa fa-folder-open"></i><?php the_category( ', ' ); ?></p>

	<?php if ( has_tag() ) : ?>
		<p class="post-tags"><i class="fa fa-tag"></i><?php the_tags( '', ', ' ); ?></p>
	<?php endif; ?>

<?php
}
endif;



if ( ! function_exists( 'hedmark_archive_title' ) ) :
/**
 */
function hedmark_archive_title() {

	if ( is_day() ) : ?>
		<h5><?php esc_html_e( 'Date', 'hedmark' ); ?></h5>
		<h3><?php echo get_the_date(); ?></h3>
	<?php elseif ( is_month() ) : ?>
		<h5><?php esc_html_e( 'Month', 'hedmark' ); ?></h5>
		<h3><?php echo get_the_date( 'F Y' ); ?></h3>
	<?php elseif ( is_year() ) : ?>
		<h5><?php esc_html_e( 'Year', 'hedmark' ); ?></h5>
		<h3><?php echo get_the_date( 'Y' ); ?></h3>
	<?php elseif ( is_category() ) : ?>
		<h5><?php esc_html_e( 'Category', 'hedmark' ); ?></h5>
		<h3><?php echo single_cat_title( '', false ); ?></h3>
	<?php elseif ( is_tag() ) : ?>
		<h5><?php esc_html_e( 'Tag', 'hedmark' ); ?></h5>
		<h3><?php echo single_tag_title( '', false ); ?></h3>
	<?php elseif ( is_author() ) : ?>
		<?php hedmark_setup_author(); ?>
		<h5><?php esc_html_e( 'Author', 'hedmark' ); ?></h5>
		<h3><?php the_author(); ?></h3>
	<?php else : ?>
		<h5><?php esc_html_e( 'Archives', 'hedmark' ); ?></h5>
	<?php endif; 
}
endif;



if ( ! function_exists( 'the_archive_description' ) ) :
/**
 * Shim for `the_archive_description()`.
 *
 * Display category, tag, or term description.
 *
 * @todo Remove this function when WordPress 4.3 is released.
 *
 * @param string $before Optional. Content to prepend to the description. Default empty.
 * @param string $after  Optional. Content to append to the description. Default empty.
 */
function the_archive_description( $before = '', $after = '' ) {
	$description = apply_filters( 'get_the_archive_description', term_description() );
	if ( ! empty( $description ) ) {
		/**
		 * Filter the archive description.
		 *
		 * @see term_description()
		 *
		 * @param string $description Archive description to be displayed.
		 */
		echo $before . $description . $after;  // WPCS: XSS OK.
	}
}
endif;



if ( ! function_exists( 'hedmark_flexslider' ) ) :
/**
 * Turn photos into flexslider gallery for Gallery posts
 * see http://www.woothemes.com/flexslider/
 */
function hedmark_flexslider( $size = thumbnail ) {

	if ( is_page() ) :
		$attachment_parent = $post->ID;
	else :
		$attachment_parent = get_the_ID();
	endif;

	/*
	 * Grab the IDs of all the image attachments for this post
	 */
	if ( $images = get_posts( array(
		'post_parent' => $attachment_parent,
		'post_type' => 'attachment',
		'numberposts' => -1, // show all
		'post_status' => null,
		'post_mime_type' => 'image',
		'orderby' => 'menu_order',
		'order' => 'ASC',
	) ) ) {
	?>
		<div class="flexslider">

			<ul class="slides">

				<?php foreach ( $images as $image ) {
					$attimg = wp_get_attachment_image( $image->ID, $size ); ?>

					<li>
						<?php echo wp_kses_post( $attimg ); ?>
						<?php if ( ! empty( $image->post_excerpt ) && is_single() ) : ?>
							<div class="media-caption-container">
								<p class="media-caption"><?php echo esc_html( $image->post_excerpt ); ?></p>
							</div>
						<?php endif; ?>
					</li>

				<?php } ?>

			</ul>

		</div><?php
	}
}
endif;


