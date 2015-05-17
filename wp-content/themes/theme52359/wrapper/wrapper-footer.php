<?php /* Wrapper Name: Footer */ ?>

<?php if( is_front_page() ) { ?>


<div data-motopress-type="static" data-motopress-static-file="static/static-map.php">
		<?php get_template_part("static/static-map"); ?>
	</div>
<?php } ?>	
<div class="" data-motopress-type="static" data-motopress-static-file="static/static-logo.php">
	<?php //get_template_part("static/static-logo"); ?>
</div>
<div class="row copyright">
	<div class="span12" data-motopress-type="static" data-motopress-static-file="static/static-footer-text.php">
		<?php get_template_part("static/static-footer-text"); ?>
	</div>
	<div class="span12" data-motopress-type="static" data-motopress-static-file="static/static-footer-nav.php">
		<?php get_template_part("static/static-footer-nav"); ?>
	</div>

</div>
<?php if( $post->post_name == "contacts" ) { ?>
<script type="text/javascript" src="<?= get_stylesheet_directory_uri() ?>/js/map.js"></script>
<?php } ?>