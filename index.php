<?php get_header(); ?>

    <div class="post_list">

		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<?php endwhile; ?>

            <div class="post_entry">
                <div class="title"><?php the_title(); ?></div>
                <div><?php the_content(); ?></div>
            </div>

		<?php else : ?>
			<div><h1>No posts to display</h1></div>
		<?php endif; // end have_posts() check ?>


    </div> <!-- div.post_list -->

<?php get_footer(); ?>

