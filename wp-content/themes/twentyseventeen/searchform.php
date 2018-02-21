<?php
/**
* Template for displaying search forms
*
* @link http://codex.wordpress.org/Template_Hierarchy
*
 * @package WordPress
 * @subpackage Athena.LA
 * @since Athena.LA
*/
?>

<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="search" />
	<input type="submit" id="searchsubmit" value="" />
</form>
