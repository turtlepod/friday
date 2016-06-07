<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="wrap">

		<?php if ( has_post_thumbnail() ) { ?>
			<div class="entry-thumbnail">
				<a class="theme-thumbnail-link" href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail( 'large', array( 'class' => 'theme-thumbnail', 'alt' => get_the_title() ) ); ?>
					<span class="overlay"></span>
				</a>
			</div>
		<?php } ?>

		<header class="entry-header">

			<?php tamatebako_entry_title(); ?>

			<div class="entry-byline">

				<span class="entry-author vcard"><?php the_author_posts_link(); ?></span>

				<?php tamatebako_entry_date(); ?>

				<?php tamatebako_comments_link(); ?>
 
			</div><!-- .entry-byline -->

		</header><!-- .entry-header -->

		<div class="entry-summary">

			<?php the_excerpt(); ?>
			<?php tamatebako_read_more(); ?>

		</div><!-- .entry-summary -->

		<footer class="entry-footer">
			<?php edit_post_link(); ?>
			<?php tamatebako_entry_taxonomies(); ?>
		</footer><!-- .entry-footer -->

	</div><!-- .entry > .wrap -->

</article><!-- .entry -->