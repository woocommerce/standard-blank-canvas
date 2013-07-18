<?php
/**
 * The template for displaying status post formats.
 * 
 * @package Standard
 * @since 3.0
 */
?>
<?php /* Main Loop */ ?>

<div id="post-<?php the_ID(); ?>" <?php post_class( 'post format-status' ); ?>>

	<div class="post-header clearfix">
		<div class="row-fluid">
				<div class="post-avatar span2">
					<?php echo get_avatar( get_the_author_meta( 'ID' ), 80 ); ?>
				</div><!-- /.post-avatar -->
			<div class="entry-content span10 clearfix">
				<?php if( ( is_category() || is_archive() || is_home() ) && has_excerpt() ) { ?>
					<?php the_excerpt( ); ?>
					<a href="<?php echo get_permalink(); ?>"><?php _e( 'Continue Reading...', 'standard' ); ?></a>
				<?php } else { ?>
					<?php the_content( __( 'Continue Reading...', 'standard' ) ); ?>
				<?php } // end if/else ?>
			</div><!-- /.entry-content -->
		</div><!-- /row-fluid -->
	</div> <!-- /.post-header -->
					
	<div class="post-meta clearfix">
	
		<div class="meta-comment-link pull-left">
			<a href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>">Continue Reading</a>
			
			<?php if( comments_open() ) { ?>
				<span class="the-comment-link">&bull;&nbsp;<?php comments_popup_link( __( 'Comments { 0 }', 'standard' ), __( 'Comments { 1 }', 'standard' ), __( 'Comments { % }', 'standard' ), '', '' ); ?></span>
			<?php } // end if ?>
		</div><!-- /meta-comment-link -->

		<div class="meta-date-cat-tags pull-right">
		
			by <span class="the-author"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" title="<?php echo get_the_author_meta( 'display_name' ); ?>"><?php echo the_author_meta( 'display_name' ); ?></a> on </span>
			<?php if( strlen( trim( get_the_title() ) ) == 0 ) { ?>
				<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php printf( esc_attr__( '%s', 'standard' ), the_title_attribute( 'echo=0' ) ); ?>"><span class="the-time updated"><?php the_time( get_option( 'date_format' ) ); ?></span></a>
			<?php } else { ?>
				<span class="the-time updated"><?php the_time( get_option( 'date_format' ) ); ?></span>
			<?php } // end if/else ?>
			<?php $category_list = get_the_category_list( __( ', ', 'standard' ) ); ?>
			<?php if( $category_list ) { ?>
				<?php printf( '<span class="the-category">' . __( 'in %1$s', 'standard' ) . '</span>', $category_list ); ?>
			<?php } // end if ?>
			<?php $tag_list = get_the_tag_list( '', __( ', ', 'standard' ) ); ?>
				<?php if( $tag_list ) { ?>
					<?php printf( '<span class="the-tags">' . __( '%1$s', 'standard' ) . '</span>', $tag_list ); ?>
				<?php } // end if ?>
			<a class="post-link" href="<?php the_permalink(); ?>" title="<?php esc_attr_e( 'permalink ', 'standard' ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/icn-permalink.png' ); ?>" alt="<?php esc_attr_e( 'permalink ', 'standard' ); ?>" /></a>
			
		</div><!-- /meta-date-cat-tags -->

	</div><!-- /.post-meta -->
	
</div> <!-- /#post- -->