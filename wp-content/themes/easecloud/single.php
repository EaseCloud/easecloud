<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package EaseCloud
 * @subpackage EaseCloud
 * @since EaseCloud 1.0
 */
get_header();

// If comments are open or we have at least one comment, load up the comment template.
if ( comments_open() || get_comments_number() ) {
    comments_template();
}

?>

<?php get_footer();