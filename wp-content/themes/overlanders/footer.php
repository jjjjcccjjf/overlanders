<?php
/**
* The template for displaying the footer
*
* Contains the closing of the #content div and all content after.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package WordPress
* @subpackage Twenty_Seventeen
* @since 1.0
* @version 1.2
*/
?>
<footer>
	<div class="pagewrapper-footer">
		<div class="footer-logo">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/overlanders-logo-footer.png">
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Duis tristique mollis elit. Morbi quis nunc. Vivamus rhoncus. Proin quam nunc, tincidunt at, commodo et, cursus eu, enim. Mauris ligula. Nam malesuada, sapien et volutpat nonummy, nibh enim tincidunt </p>
		</div>
		<div class="quick-links">
			<h4>Quick Links</h4>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Brands</a></li>
				<li><a href="#">Careers</a></li>
			</ul>
			<ul>
				<li><a href="#">Locations</a></li>
				<li><a href="#">Offers</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</div>
		<div class="subscribe">
			<h4>Subscribe</h4>
			<aside>
				<input type="email" name="" placeholder="EMAIL">
				<input type="submit" name="" value=" ">
			</aside>
		</div>
	</div>
</footer>

<!-- Scripts -->
<script src="https://use.fontawesome.com/108c9331e1.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/flickity.pkgd.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>
