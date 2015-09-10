<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage The_Client_Name
 * @since The Client Name 1.0
 */

get_header(); ?>

		<!-- ADD MAIN CONTENT BELOW -->

    <div class="content">

      <div class="inner">

        <div class="main">

          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <div class="post" id="post-<?php the_ID(); ?>">
                <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to
                <?php the_title(); ?>"><?php the_title(); ?></a></h2>
                <small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>

                <div class="entry">
                    <?php the_content('Read the rest of this entry »'); ?>
                </div>

                <p class="postmetadata">Posted in <?php the_category(', ') ?> <strong>|</strong>
                    <?php edit_post_link('Edit','','<strong>|</strong>'); ?>
                    <?php comments_popup_link('No Comments »', '1 Comment »', '% Comments
                »'); ?>
                </p>
            </div>
            <?php endwhile; ?>
        <?php else : ?>
            <h2 class="center">Not Found</h2>
            <p class="center">Sorry, but you are looking for something that isn't here.</p>
        <?php endif; ?>

        </div>

        <!-- REMOVE IF NO SIDEBAR NEEDED -->
        <div class="sidebar">

        </div>

      </div>

    </div>

<?php get_footer(); ?>
