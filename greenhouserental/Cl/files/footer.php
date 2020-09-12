<?php
/*---------------------------------
	The footer of the theme
------------------------------------*/

global $rev_js;
global $sidebar;

?>

		</article>

		<!-- Content Wrapper End -->

		<!-- Sidebars -->

        <?php if($sidebar['sidebar_type'] == 'left-sidebar') { ?>
			<aside id="sidebarLeft" class="sidebar clearfix">
				<?php if(is_active_sidebar($sidebar['sidebar_id']))
					dynamic_sidebar($sidebar['sidebar_id']); ?>
			</aside>
		<?php } if($sidebar['sidebar_type'] == 'right-sidebar') { ?>
			<aside id="sidebarRight" class="sidebar clearfix">
				<?php if(is_active_sidebar($sidebar['sidebar_id']))
					dynamic_sidebar($sidebar['sidebar_id']); ?>
			</aside>
		<?php } if(is_active_sidebar('rb_shop_widget') && is_woocommerce()) { ?>
			<aside id="sidebarBottom" class="sidebar clearfix">
				<div class="row-fluid">
            		<?php dynamic_sidebar('rb_shop_widget'); ?>
           		</div>
			</aside>
        <?php } ?>

	</div>

	<!-- Main Wrapper End -->
<div style="background-color:#717070; padding-top:30px; padding-bottom:30px;text-align:center; display:block; font-family: 'Muli', sans-serif !important; font-size:22px; font-weight:bold; color:#fff; text-transform: uppercase;">
<p>We will help you drive business value from technology innovations    <a href="http://e-soft.in/contact" style="padding: 7px;
background-color: #DB9728; font-size: 15px !important; border-radius: 7px; color:#fff">Contact Us.</a></p>
</div>
	<!-- Footer #1 Wrapper Start -->

	<?php if(get_option('rb_o_ftrtype') == 'full') : ?>

	<footer id="footer1" class="clearfix">
<!--<div style="padding-left: 15px; padding-right: 15px; width: 100%;">-->	
<div class="container" style="margin-top: -29px; margin-bottom: -20px;">
	
<div style="display:inline-block;width:260px; color:#fff; text-align:left; padding-left:2px; vertical-align: top;">
<h4 style="color:#db9728;">QUICK LINKS</h4>
<ul>
 	<li><span class="list1"><a href="http://barcodesoftware.co.in/" target="_blank">Barcode Software in trichy</a></span></li>
 	<li><span class="list1"><a href="http://inplanttrainingtrichy.co.in/" target="_blank">Inplant training companies in trichy</a></span></li>
 	<li><span class="list1"><a href="http://trichythagaval.com/" target="_blank">Top 10 companies in trichy</a></span></li>
 	<li><span class="list1"><a href="http://e-soft.in/testimonials/" target="_blank">PHP Training in trichy</a></span></li>
 	<li><span class="list1"><a href="http://freeproject.in/" target="_blank">IT companies in trichy</a></span></li>
     	<li><span class="list1"><a href="http://ieee-project.in/" target="_blank">Software companies in trichy</a></span></li>

</ul>

</div>
<div style="display:inline-block;width:230px;color:#fff; text-align:left; padding-left:2px; vertical-align: top;">
<h4 style="color:#db9728;">SERVICES</h4>
<ul>
 	<li><span class="list1"><a href="http://barcodesoftware.co.in/" target="_blank">Barcode Software(Pos)</a></span></li>
 	<li><span class="list1"><a href="http://e-soft.in/invoice/" target="_blank">Invoice Software</a></span></li>
 	<li><span class="list1"><a href="http://e-soft.in/school/" target="_blank">School & College Software</a></span></li>
 	<li><span class="list1"><a href="http://e-soft.in/examino/" target="_blank">Online Exam Software</a></span></li>
 	<li><span class="list1"><a href="http://freecollegeprojects.in/" target="_blank">Tamil News Readers Training</a></span></li>
	<li><span class="list1"><a href="http://e-soft.in/" target="_blank">Computer & Laptop Services</a></span></li>
</ul>
</div>
<div style="display:inline-block;width:230px;color:#999; text-align:left; padding-left:2px; vertical-align: top;">
<h4 style="color:#db9728 !important;">INDIA</h4>
<p>e-soft IT Solutions<p>
<p>97/5-1 Wireless Main Road,</p>
<p>Airport,Trichy, 620007.</p>
<p>Land Mark:Sri Veeramakaliamman Department Stores.</p>
<p>Mobile1: +91 80724 20182</p>
<p>Mobile2: +91 91504 43183</p>
<p>Email: <a href="mailto:admin@e-soft.in" target="_top" style="color:#fff">admin@e-soft.in</a></p>
</div>
<div style="display:inline-block;width:228px;color:#999; text-align:left; padding-left:2px; vertical-align: top;">
<h4 style="color:#db9728 !important;">DUBAI</h4>
<p>#319, Al Kazim Building,</p>
<p>Hor Al Anz East,</p>
<p>(Old Labor Office)</p>
<p>P.O. Box 90289, Dubai,</p>
<p>United Arab Emirates.</p>
<p>Phone: +971 507807944</p>
<p>Email: <a href="mailto:info@e-soft.in" target="_top" style="color:#fff">info@e-soft.in</a></p>
</div>
	
</div>
	
		<div class="row-fluid">

			<?php if(get_option('rb_o_ftrareas') == 'four') : ?>

			<div class="column_container span3">
				<?php if(is_active_sidebar('rb_footer_widget_1'))
					dynamic_sidebar('rb_footer_widget_1'); ?>
			</div>

			<div class="column_container span3 clearfix">
				<?php if(is_active_sidebar('rb_footer_widget_2'))
					dynamic_sidebar('rb_footer_widget_2'); ?>
			</div>

			<div class="column_container span3 clearfix">
				<?php if(is_active_sidebar('rb_footer_widget_3'))
					dynamic_sidebar('rb_footer_widget_3'); ?>
			</div>

			<div class="column_container span3">
				<?php if(is_active_sidebar('rb_footer_widget_4'))
					dynamic_sidebar('rb_footer_widget_4'); ?>
			</div>

			<?php elseif(get_option('rb_o_ftrareas') == 'three') : ?>

			<div class="column_container span4">
				<?php if(is_active_sidebar('rb_footer_widget_1'))
					dynamic_sidebar('rb_footer_widget_1'); ?>
			</div>

			<div class="column_container span4 clearfix">
				<?php if(is_active_sidebar('rb_footer_widget_2'))
					dynamic_sidebar('rb_footer_widget_2'); ?>
			</div>

			<div class="column_container span4">
				<?php if(is_active_sidebar('rb_footer_widget_3'))
					dynamic_sidebar('rb_footer_widget_3'); ?>

			<?php elseif(get_option('rb_o_ftrareas') == 'two') : ?>

			<div class="column_container span6">
				<?php if(is_active_sidebar('rb_footer_widget_1'))
					dynamic_sidebar('rb_footer_widget_1'); ?>
			</div>

			<div class="column_container span6">
				<?php if(is_active_sidebar('rb_footer_widget_2'))
					dynamic_sidebar('rb_footer_widget_2'); ?>

			<?php elseif(get_option('rb_o_ftrareas') == 'one') : ?>

			<div class="column_container span12">
				<?php if(is_active_sidebar('rb_footer_widget_1'))
					dynamic_sidebar('rb_footer_widget_1'); ?>
			</div>

			<?php endif; ?>


		</div>

    </footer>

    <?php endif; ?>

	<!-- Footer #1 Wrapper End -->

	<!-- Footer #2 Wrapper Start -->
	<footer id="footer2" class="clearfix">

		<div class="clearfix">

			<div class="left clearfix">
				<?php if(is_active_sidebar('rb_footer_widget_5'))
					dynamic_sidebar('rb_footer_widget_5'); ?>
			</div>

			<div class="right clearfix">
				<?php if(is_active_sidebar('rb_footer_widget_6'))
					dynamic_sidebar('rb_footer_widget_6'); ?>
			</div>

		</div>
        
		
		
<div align="center" style="color:#FFFFFF;"><?php echo "e-soft IT Solutions 2010. All rights Reserved. Trichy | Tn | India."; ?></div>

    </footer>

	<!-- Footer #2 Wrapper End -->

	<div id="scripts">

		<?php

			wp_register_script('theme_plugins', get_template_directory_uri().'/js/plugins.min.js', array('jquery'), NULL, true);
			wp_register_script('theme_scripts', get_template_directory_uri().'/js/scripts.min.js', array('theme_plugins'), NULL, true);
			
			wp_enqueue_script('theme_plugins');
			wp_enqueue_script('theme_scripts');

			$colors = get_option('rb_o_colors');

			wp_localize_script(
				'theme_scripts', 
				'theme_objects',
				array(
					'base' => get_template_directory_uri(),
					'colorAccent' => $colors['main1'],
					'secondColor' => '#DBDBDB',
					'blogPage' => $kT = ot_get_option('rb_modern_blog_ppp', '8'),
					'commentProcess' => __('Processing your comment...', 'goodwork'),
					'commentError' => __('You might have left one of the fields blank, or be posting too quickly.', 'goodwork'),
					'commentSuccess' => __('Thanks for your response. Your comment will be published shortly after it\'ll be moderated.', 'goodwork')
				)
			);

			if(ot_get_option('rb_tracking_where') == 'footer') echo ot_get_option('rb_tracking');

			wp_footer(); 

		?>

	</div>

	

</body>
</html>