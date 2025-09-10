<?php
/**
 * List View Loop
 * This file overrides the default loop in The Events Calendar's list view.
 * It's customized to display events in a responsive card grid.
 *
 * @version 4.6.19
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
} ?>

<!-- Mofire Custom Grid Start -->
<?php while ( have_posts() ) : the_post(); ?>
	<?php do_action( 'tribe_events_inside_before_loop' ); ?>

	<!-- Event -->
	<div id="post-<?php the_ID() ?>" class="<?php tribe_events_list_the_classes(); ?>">
		<?php
        // RENDER THE CUSTOM CARD INSTEAD OF THE DEFAULT LIST ITEM
        // This is the same card structure from your homepage for consistency.
        ?>
        <article class="mofire-event-item">
            <?php if (has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>" class="mofire-event-image-link">
                    <?php the_post_thumbnail('medium_large'); ?>
                </a>
            <?php endif; ?>

            <div class="mofire-event-content">
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <p>
                    <strong>Date:</strong> <?php echo tribe_get_start_date(get_the_ID(), true, 'M j, Y'); ?><br>
                    <strong>Location:</strong> <?php echo tribe_get_venue(); ?>
                </p>
                
                <?php
                // You can optionally add an excerpt of the description here
                // echo '<p class="mofire-event-excerpt">' . get_the_excerpt() . '</p>';
                ?>

                <a href="<?php echo esc_url( tribe_get_event_website_url() ); ?>" class="mofire-event-register-button" target="_blank" rel="noopener noreferrer">
                    Register Now
                </a>
            </div>
        </article>
	</div>

	<?php do_action( 'tribe_events_inside_after_loop' ); ?>
<?php endwhile; ?>
<!-- Mofire Custom Grid End -->