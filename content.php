<?php
/**
 * @package CeeVeeWordPress
 */
?>

<div class="row education">

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="three columns header-col">

<header class="entry-header">
		

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta"><a href="<?php echo esc_url( get_permalink())?>">
		<h1>
			<span><?php the_time('F j') ?></span>
			</h1></a>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
	
</div>

<div class="nine columns main-col">
	
	<header class="entry-header">
		<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
	<p class="info">
		Posted in  <?php echo get_the_category_list(', '); ?>  by   <?php the_author_posts_link(); ?> 
	</header><!-- .entry-header -->
	
	</p>
<hr/>
	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			
			
				
			
			echo '<a href="'. esc_url( get_permalink() ).'" class="invisible-link">';
			the_excerpt(  );
			echo'</a>';
			

		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'ceeveewordpress' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
<hr/>
	<footer class="entry-footer">
		<?php ceeveewordpress_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	
</div><div style='clear:both'></div>
</article><!-- #post-## -->
</div>