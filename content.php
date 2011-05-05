<?php
/**
 * @package WordPress
 * @subpackage Yoko
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-details">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array( 140,140 )); ?></a>
		<div class="day"><?php echo get_the_date("j"); ?></div>	
		<div class="month"><?php echo get_the_date("M"); ?></div>
		<div class="year"><?php echo get_the_date("Y"); ?></div>
	</div><!--end entry-details -->
    
	<header class="entry-header">
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'yoko' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

			<?php if ( count( get_the_category() ) ) : ?>
				<p class="categories">
					<?php echo get_the_category_list(' '); ?>
				</p>
			<?php endif; ?>
	</header><!--end entry-header -->
        
	<div class="entry-content">
		<?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
			<?php the_excerpt(); ?>			
		<?php else : ?>
			<?php the_content( __( 'Continue Reading &rarr;', 'yoko' ) ); ?>		
			<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'yoko' ), 'after' => '</div>' ) ); ?>					
		<?php endif; ?>
		
		<footer class="entry-meta">
			<p>
			<?php $tags_list = get_the_tag_list( '', ', ' ); 
			if ( $tags_list ): ?>
			<?php printf( __( 'Tags: %2$s', 'yoko' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list ); ?> | 
			<?php endif; ?>
			<?php edit_post_link( __( 'Edit &rarr;', 'yoko' ), '<span class="edit-link">', '</span>' ); ?>
			|
			<?php comments_popup_link( __( 'Add the first comment &rarr;', 'yoko' ), __( '1 comment &rarr;', 'yoko' ), __( '% comments &rarr;', 'yoko' ) ); ?>
			</p>


			</p>
	</footer><!--end entry-meta-->
	</div><!--end entry-content-->
			
</article><!-- #post-<?php the_ID(); ?> --><!--end Post-->
