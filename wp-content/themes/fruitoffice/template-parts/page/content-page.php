<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
<?php twentyseventeen_edit_link( get_the_ID() ); ?>
<?php the_content(); ?>