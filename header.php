<html lang="en">
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="<?php bloginfo('description');?>">">
	<title><?php bloginfo('name');?><?php wp_title('|');?> </title>
	<?php wp_head(); ?>


</head>
<body>
	
	<?php 
		
		if( is_front_page() ):
			$awesome_classes = array( 'awesome-class', 'my-class' );
		else:
			$awesome_classes = array( 'no-awesome-class' );
		endif;
		
	?>
	
	<body <?php body_class( $awesome_classes ); ?>>
		
		<div class="container">
		
			<div class="row">
				
				<div class="col-xs-12">
					
					<nav class="navbar navbar-default">
					  <div class="container-fluid">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					      <a class="navbar-brand" href="#">Awesome Theme</a>
					    </div>
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<?php 
								wp_nav_menu(array(
									'theme_location' => 'primary',
									'container' => false,
									'menu_class' => 'nav navbar-nav navbar-right',
									'fallback_cb' => '__return_false',
									'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
									'depth' => 2,
									'walker' => new bootstrap_5_wp_nav_menu_walker()
									
									)
								);
							?>
						</div>
					  </div><!-- /.container-fluid -->
					</nav>
				
				</div>
				
				<div class="search-form-container">
					<?php get_search_form(); ?>
				</div>
				
			</div>
			
			<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />