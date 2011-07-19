<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package copious
 * @subpackage bare
 */
remove_filter( 'the_content', 'wptexturize'        );
remove_filter( 'the_content', 'convert_smilies'    );
remove_filter( 'the_content', 'convert_chars'      );
remove_filter( 'the_content', 'wpautop'            );
remove_filter( 'the_content', 'shortcode_unautop'  );
remove_filter( 'the_content', 'prepend_attachment' );
remove_filter( 'the_content', 'capital_P_dangit'   );
the_post();
the_content();
?>
