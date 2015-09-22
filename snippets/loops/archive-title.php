<div class="bs-container archive-title">
	<?php if ( ! is_home() ) : ?>

		<h1>
			<?php if ( is_tag() ) : ?>
				<?php  echo single_cat_title( '', false );
				echo ' ';
				echo _e( 'articles', 'geckopress' ); ?>
			<?php elseif ( is_category() ) : ?>
				<?php  echo single_cat_title( '', false );
				echo ' ';
				echo _e( 'articles', 'geckopress' ); ?>
			<?php elseif ( is_author() ) : ?>
			    <?php echo get_the_author_meta( 'display_name' );
				_e( "'s articles", 'geckopress' ); ?>
			<?php elseif ( is_search() ) : ?>
				<?php _e( 'Search for:', 'geckopress' );
				echo ' ';
				echo get_search_query(); ?>
			<?php elseif ( is_day() ) : ?>
				<?php _e( 'Archive:', 'geckopress' );
				echo ' ';
				echo get_the_date(); ?>
			<?php elseif ( is_month() ) : ?>
				<?php _e( 'Archive:', 'geckopress' );
				echo ' ';
				echo get_the_date( 'Y. F' ); ?>
			<?php elseif ( is_year() ) : ?>
				<?php _e( 'Archive:', 'geckopress' );
				echo ' ';
				echo get_the_date( 'Y' ); ?>
			<?php else : ?>
				<?php echo _e( 'Blog Archives', 'geckopress' ); ?>
			<?php endif; ?>
		</h1>

	<?php endif; ?>
</div>
