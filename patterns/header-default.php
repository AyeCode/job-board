<?php
/**
 * Title: Jobs - Default Header
 * Slug: job-board/header-default
 * Categories: blockstrap-site-header
 * Viewport Width: 1280
 */


$logo = get_theme_file_uri( 'assets/images/logo-no-background.png' ); /* <?php echo esc_url( $logo ); ?> */
$home_url = get_home_url(); /* <?php echo esc_url( $home_url ); ?> */

$blog_page_id = get_option( 'page_for_posts' ); /* <?php echo absint($blog_page_id); ?> */

$theme_slug  = get_template();
$page_status = function_exists( 'blockstrap_get_option' ) ? blockstrap_get_option( 'blockstrap_demo_pages' ) : get_option( 'blockstrap_demo_pages' );

$page_contact = !empty($page_status[$theme_slug]['contact']) ? absint($page_status[$theme_slug]['contact']) : 0; /* <?php echo absint($page_contact); ?> */
?>

<!-- wp:blockstrap/blockstrap-widget-skip-links {"content":""} -->
[bs_skip_links text1='Skip to main content'  hash1='main'  text2=''  hash2=''  text3=''  hash3=''  text_color=''  text_justify='false'  text_align=''  text_align_md=''  text_align_lg=''  mt=''  mr=''  mb=''  ml=''  mt_md=''  mr_md=''  mb_md=''  ml_md=''  mt_lg=''  mr_lg=''  mb_lg=''  ml_lg=''  pt=''  pr=''  pb=''  pl=''  pt_md=''  pr_md=''  pb_md=''  pl_md=''  pt_lg=''  pr_lg=''  pb_lg=''  pl_lg=''  border=''  rounded=''  rounded_size=''  shadow=''  css_class='' ]
<!-- /wp:blockstrap/blockstrap-widget-skip-links -->

<!-- wp:blockstrap/blockstrap-widget-navbar {"bg":"white","bg_color":"rgba(255,255,255,0.84)","inner_container":"container","mb_lg":"","pr":"2","pl":"3","pt_lg":"4","pb_lg":"4","border":"0"} -->
[bs_navbar bg='white'  bg_color='rgba(255,255,255,0.84)'  bg_gradient='linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%)'  bg_image_fixed='false'  bg_image_use_featured='false'  bg_image=''  bg_image_id=''  bg_image_xy='{x:undefined,y:undefined}'  bgtus='false'  cscos='false'  container=''  inner_container='container'  mt=''  mr=''  mb=''  ml=''  mt_md=''  mr_md=''  mb_md=''  ml_md=''  mt_lg=''  mr_lg=''  mb_lg=''  ml_lg=''  pt=''  pr='2'  pb=''  pl='3'  pt_md=''  pr_md=''  pb_md=''  pl_md=''  pt_lg='4'  pr_lg=''  pb_lg='4'  pl_lg=''  border='0'  rounded=''  rounded_size=''  shadow=''  position=''  sticky_offset_top=''  sticky_offset_bottom='' ]<nav class="navbar navbar-expand-lg pe-2 ps-3 pt-4 pb-4 border-0 bg-white"><div class="wp-block-blockstrap-blockstrap-widget-navbar container"><!-- wp:blockstrap/blockstrap-widget-navbar-brand {"text":"","icon_image":"<?php echo esc_url( $logo ); ?>","img_max_width":90,"custom_url":"/","brand_font_size":"h1","brand_font_weight":"font-weight-normal","brand_font_italic":"font-italic","bg_gradient":"linear-gradient(135deg,rgb(34,227,7) 0%,rgb(245,245,245) 100%)","bg_on_text":true,"mb_lg":"","rounded_size":"lg"} -->
        [bs_navbar_brand text=''  icon_image='<?php echo esc_url( $logo ); ?>'  img_max_width='90'  type='home'  custom_url='/'  text_color=''  brand_font_size='h1'  brand_font_weight='font-weight-normal'  brand_font_italic='font-italic'  text_justify='false'  text_align=''  text_align_md=''  text_align_lg=''  bg=''  bg_color='#0073aa'  bg_gradient='linear-gradient(135deg,rgb(34,227,7) 0%,rgb(245,245,245) 100%)'  bg_on_text='true'  mt=''  mr=''  mb=''  ml=''  mt_md=''  mr_md=''  mb_md=''  ml_md=''  mt_lg=''  mr_lg=''  mb_lg=''  ml_lg=''  pt=''  pr=''  pb=''  pl=''  pt_md=''  pr_md=''  pb_md=''  pl_md=''  pt_lg=''  pr_lg=''  pb_lg=''  pl_lg=''  border=''  rounded=''  rounded_size='lg'  shadow=''  css_class='' ]<a class="navbar-brand d-flex align-items-center rounded-lg" href="<?php echo esc_url( $home_url ); ?>"><img class="" alt="Site logo" src="<?php echo esc_url( $logo ); ?>" style="max-width:90px" width="90" height="50"/><span class="mb-0 props.attributes.brand_font_size props.attributes.brand_font_weight fst-italic"></span></a>[/bs_navbar_brand]
        <!-- /wp:blockstrap/blockstrap-widget-navbar-brand -->

        <!-- wp:blockstrap/blockstrap-widget-nav {"anchor":"main-nav","inside_navbar":"1","font_size":"0","ml_lg":"","rounded_size":"lg","width":"w-100"} -->
        [bs_nav anchor='main-nav'  inside_navbar='1'  container=''  flex_direction=''  nav_style=''  flex_justify_content=''  flex_justify_content_md=''  flex_justify_content_lg=''  nav_fill=''  font_size='0'  font_size_custom=''  bg=''  mt=''  mr='auto'  mb=''  ml='auto'  mt_md=''  mr_md=''  mb_md=''  ml_md=''  mt_lg=''  mr_lg='0'  mb_lg=''  ml_lg=''  pt=''  pr=''  pb=''  pl=''  pt_md=''  pr_md=''  pb_md=''  pl_md=''  pt_lg=''  pr_lg=''  pb_lg=''  pl_lg=''  border=''  rounded=''  rounded_size='lg'  shadow=''  width='w-100'  css_class='' ]<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav_main-nav" aria-label="Open menu"><span class="navbar-toggler-icon"></span></button><div class="wp-block-blockstrap-blockstrap-widget-nav blockstrap-nav collapse navbar-collapse" id="navbarNav_main-nav"><ul class="wp-block-blockstrap-blockstrap-widget-nav navbar-nav me-auto ms-auto me-lg-0 rounded-lg w-100">
				<?php
				// Location switcher if location manager installed
				if ( defined( 'GEODIRLOCATION_VERSION' ) ) {
					?>
                    <!-- wp:blockstrap/blockstrap-widget-nav-item {"type":"gd_location_switcher","page_id":"70","custom_url":"#about","text":"Set Location","icon_class":"fas fa-map-marker-alt fa-lg text-primary","link_divider":"right","ml":"0","ml_md":"0","mr_lg":"2","pr_lg":"2","content":"\u003ca href=\u0022##location-switcher\u0022 class=\u0022nav-link \u0022\u003e\u003ci class=\u0022fas fa-map-marker-alt fa-lg text-primary me-2\u0022\u003e\u003c/i\u003eSet Location\u003cspan class=\u0022navbar-divider d-none d-lg-block position-absolute top-50 end-0 translate-middle-y\u0022\u003e\u003c/span\u003e\u003c/a\u003e"} -->
                    [bs_nav_item type='gd_location_switcher'  page_id='70'  post_id=''  custom_url='#about'  text='Set Location'  icon_class='fas fa-map-marker-alt fa-lg text-primary'  icon_aria_label=''  link_type=''  link_size=''  link_bg=''  link_pt=''  link_pr=''  link_pb=''  link_pl=''  link_pt_md=''  link_pr_md=''  link_pb_md=''  link_pl_md=''  link_pt_lg=''  link_pr_lg=''  link_pb_lg=''  link_pl_lg=''  link_divider='right'  text_color=''  text_justify='false'  text_align=''  text_align_md=''  text_align_lg=''  font_weight=''  mt=''  mr=''  mb=''  ml='0'  mt_md=''  mr_md=''  mb_md=''  ml_md='0'  mt_lg=''  mr_lg='2'  mb_lg=''  ml_lg=''  pt=''  pr=''  pb=''  pl=''  pt_md=''  pr_md=''  pb_md=''  pl_md=''  pt_lg=''  pr_lg='2'  pb_lg=''  pl_lg=''  border=''  rounded=''  rounded_size=''  shadow=''  visibility_conditions=''  css_class='' ]
                    <!-- /wp:blockstrap/blockstrap-widget-nav-item -->
					<?php
				}

				// CPTs
				if ( defined( 'GEODIRECTORY_VERSION' ) ) {
					$post_types = geodir_get_posttypes( 'array' );

					foreach ( $post_types as $pt => $cpt ) {

						if ( $cpt['public'] ) {
							$name = ! empty( $cpt['labels']['name'] ) ? esc_attr( $cpt['labels']['name'] ) : esc_attr( $pt );
							?>
                            <!-- wp:blockstrap/blockstrap-widget-nav-item {"type":"<?php echo esc_attr( $pt ); ?>","custom_url":"","text":"<?php echo esc_attr( $name ); ?>","content":""} -->
                            [bs_nav_item type='<?php echo esc_attr( $pt ); ?>'  page_id=''  post_id=''  custom_url=''  text='<?php echo esc_attr( $name ); ?>'  icon_class=''  icon_aria_label=''  link_type=''  link_size=''  link_bg=''  link_pt=''  link_pr=''  link_pb=''  link_pl=''  link_pt_md=''  link_pr_md=''  link_pb_md=''  link_pl_md=''  link_pt_lg=''  link_pr_lg=''  link_pb_lg=''  link_pl_lg=''  link_divider=''  text_color=''  text_justify='false'  text_align=''  text_align_md=''  text_align_lg=''  font_weight=''  mt=''  mr=''  mb=''  ml=''  mt_md=''  mr_md=''  mb_md=''  ml_md=''  mt_lg=''  mr_lg=''  mb_lg=''  ml_lg=''  pt=''  pr=''  pb=''  pl=''  pt_md=''  pr_md=''  pb_md=''  pl_md=''  pt_lg=''  pr_lg=''  pb_lg=''  pl_lg=''  border=''  rounded=''  rounded_size=''  shadow=''  visibility_conditions=''  css_class='' ]
                            <!-- /wp:blockstrap/blockstrap-widget-nav-item -->
							<?php
						}
					}
				}

				// Blog page

				if ( 'page' === get_option( 'show_on_front' ) ) {
					$blog_page_id = get_option( 'page_for_posts' );
					if ( $blog_page_id ) {
						?>
                        <!-- wp:blockstrap/blockstrap-widget-nav-item {"type":"page","page_id":"<?php echo absint( $blog_page_id ); ?>","text":"Blog","content":""} -->
                        [bs_nav_item type='page'  page_id='<?php echo absint( $blog_page_id ); ?>'  post_id=''  custom_url=''  text='Blog'  icon_class=''  icon_aria_label=''  link_type=''  link_size=''  link_bg=''  link_pt=''  link_pr=''  link_pb=''  link_pl=''  link_pt_md=''  link_pr_md=''  link_pb_md=''  link_pl_md=''  link_pt_lg=''  link_pr_lg=''  link_pb_lg=''  link_pl_lg=''  link_divider=''  text_color=''  text_justify='false'  text_align=''  text_align_md=''  text_align_lg=''  font_weight=''  mt=''  mr=''  mb=''  ml=''  mt_md=''  mr_md=''  mb_md=''  ml_md=''  mt_lg=''  mr_lg=''  mb_lg=''  ml_lg=''  pt=''  pr=''  pb=''  pl=''  pt_md=''  pr_md=''  pb_md=''  pl_md=''  pt_lg=''  pr_lg=''  pb_lg=''  pl_lg=''  border=''  rounded=''  rounded_size=''  shadow=''  visibility_conditions=''  css_class='' ]
                        <!-- /wp:blockstrap/blockstrap-widget-nav-item -->
						<?php
					}
				}

				if ( $page_contact ) {
                    ?>
                    <!-- wp:blockstrap/blockstrap-widget-nav-item {"type":"page","page_id":"<?php echo absint( $page_contact ); ?>","text":"Contact Us","content":""} -->
                    [bs_nav_item type='page'  page_id='<?php echo absint( $page_contact ); ?>'  post_id=''  custom_url=''  text='Contact Us'  icon_class=''  icon_aria_label=''  link_type=''  link_size=''  link_bg=''  link_pt=''  link_pr=''  link_pb=''  link_pl=''  link_pt_md=''  link_pr_md=''  link_pb_md=''  link_pl_md=''  link_pt_lg=''  link_pr_lg=''  link_pb_lg=''  link_pl_lg=''  link_divider=''  text_color=''  text_justify='false'  text_align=''  text_align_md=''  text_align_lg=''  font_weight=''  mt=''  mr=''  mb=''  ml=''  mt_md=''  mr_md=''  mb_md=''  ml_md=''  mt_lg=''  mr_lg=''  mb_lg=''  ml_lg=''  pt=''  pr=''  pb=''  pl=''  pt_md=''  pr_md=''  pb_md=''  pl_md=''  pt_lg=''  pr_lg=''  pb_lg=''  pl_lg=''  border=''  rounded=''  rounded_size=''  shadow=''  visibility_conditions=''  css_class='' ]
                    <!-- /wp:blockstrap/blockstrap-widget-nav-item -->
                    <?php
				}

				// spacer
				?>
                <!-- wp:blockstrap/blockstrap-widget-nav-item {"type":"spacer","text":" ","icon_class":" ","link_bg":"outline-light","mt_lg":"0","mb_lg":"0","ml_lg":"auto","pt_lg":"0","pr_lg":"0","pb_lg":"0","pl_lg":"0","content":"\u003cli class=\u0022nav-item mt-0 mb-0 ms-auto pt-0 pe-0 pb-0 ps-0\u0022\u003e\u003c/li\u003e"} -->
                [bs_nav_item type='spacer'  page_id=''  post_id=''  custom_url=''  text=' '  icon_class=' '  icon_aria_label=''  link_type=''  link_size=''  link_bg='outline-light'  link_pt=''  link_pr=''  link_pb=''  link_pl=''  link_pt_md=''  link_pr_md=''  link_pb_md=''  link_pl_md=''  link_pt_lg=''  link_pr_lg=''  link_pb_lg=''  link_pl_lg=''  link_divider=''  text_color=''  text_justify='false'  text_align=''  text_align_md=''  text_align_lg=''  font_weight=''  mt=''  mr=''  mb=''  ml=''  mt_md=''  mr_md=''  mb_md=''  ml_md=''  mt_lg='0'  mr_lg=''  mb_lg='0'  ml_lg='auto'  pt=''  pr=''  pb=''  pl=''  pt_md=''  pr_md=''  pb_md=''  pl_md=''  pt_lg='0'  pr_lg='0'  pb_lg='0'  pl_lg='0'  border=''  rounded=''  rounded_size=''  shadow=''  visibility_conditions=''  css_class='' ]
                <!-- /wp:blockstrap/blockstrap-widget-nav-item -->
				<?php

				if ( defined( 'USERSWP_VERSION' ) ) {
					// Sign in/out with UWP
					?>
                    <!-- wp:blockstrap/blockstrap-widget-nav-item {"type":"uwp_login","text":"Sign in","icon_class":"far fa-user","link_bg":"outline-light","mt_lg":"0","mb_lg":"0","pt_lg":"0","pr_lg":"0","pb_lg":"0","pl_lg":"0","content":"\u003ca href=\u0022#http://localhost/login/?redirect_to=http://localhost/add-listing/\u0022 class=\u0022nav-link \u0022\u003e\u003ci class=\u0022far fa-user me-2\u0022\u003e\u003c/i\u003eSign in\u003c/a\u003e"} -->
                    [bs_nav_item type='uwp_login'  page_id=''  post_id=''  custom_url=''  text='Sign in'  icon_class='far fa-user'  icon_aria_label=''  link_type=''  link_size=''  link_bg='outline-light'  link_pt=''  link_pr=''  link_pb=''  link_pl=''  link_pt_md=''  link_pr_md=''  link_pb_md=''  link_pl_md=''  link_pt_lg=''  link_pr_lg=''  link_pb_lg=''  link_pl_lg=''  link_divider=''  text_color=''  text_justify='false'  text_align=''  text_align_md=''  text_align_lg=''  font_weight=''  mt=''  mr=''  mb=''  ml=''  mt_md=''  mr_md=''  mb_md=''  ml_md=''  mt_lg='0'  mr_lg=''  mb_lg='0'  ml_lg=''  pt=''  pr=''  pb=''  pl=''  pt_md=''  pr_md=''  pb_md=''  pl_md=''  pt_lg='0'  pr_lg='0'  pb_lg='0'  pl_lg='0'  border=''  rounded=''  rounded_size=''  shadow=''  visibility_conditions=''  css_class='' ]
                    <!-- /wp:blockstrap/blockstrap-widget-nav-item -->

                    <!-- wp:blockstrap/blockstrap-widget-nav-item {"type":"uwp_logout","text":"Sign out","icon_class":"fas fa-sign-out-alt","link_bg":"outline-light","mt_lg":"0","mb_lg":"0","pt_lg":"0","pr_lg":"0","pb_lg":"0","pl_lg":"0","content":"\u003ca href=\u0022#http://localhost/wp-login.php?action=logout\u0026amp;_wpnonce=ff174f2c84\u0022 class=\u0022nav-link \u0022\u003e\u003ci class=\u0022fas fa-sign-out-alt me-2\u0022\u003e\u003c/i\u003eSign out\u003c/a\u003e"} -->
                    [bs_nav_item type='uwp_logout'  page_id=''  post_id=''  custom_url=''  text='Sign out'  icon_class='fas fa-sign-out-alt'  icon_aria_label=''  link_type=''  link_size=''  link_bg='outline-light'  link_pt=''  link_pr=''  link_pb=''  link_pl=''  link_pt_md=''  link_pr_md=''  link_pb_md=''  link_pl_md=''  link_pt_lg=''  link_pr_lg=''  link_pb_lg=''  link_pl_lg=''  link_divider=''  text_color=''  text_justify='false'  text_align=''  text_align_md=''  text_align_lg=''  font_weight=''  mt=''  mr=''  mb=''  ml=''  mt_md=''  mr_md=''  mb_md=''  ml_md=''  mt_lg='0'  mr_lg=''  mb_lg='0'  ml_lg=''  pt=''  pr=''  pb=''  pl=''  pt_md=''  pr_md=''  pb_md=''  pl_md=''  pt_lg='0'  pr_lg='0'  pb_lg='0'  pl_lg='0'  border=''  rounded=''  rounded_size=''  shadow=''  visibility_conditions=''  css_class='' ]
                    <!-- /wp:blockstrap/blockstrap-widget-nav-item -->
					<?php
				} else {
					// Signin/out without UWP
					?>
                    <!-- wp:blockstrap/blockstrap-widget-nav-item {"type":"wp-login","text":"Sign in","icon_class":"far fa-user","link_bg":"outline-light","mt_lg":"0","mb_lg":"0","pt_lg":"0","pr_lg":"0","pb_lg":"0","pl_lg":"0","content":"\u003ca href=\u0022#http://localhost/login/?redirect_to=http://localhost/add-listing/\u0022 class=\u0022nav-link \u0022\u003e\u003ci class=\u0022far fa-user me-2\u0022\u003e\u003c/i\u003eSign in\u003c/a\u003e"} -->
                    [bs_nav_item type='wp-login'  page_id=''  post_id=''  custom_url=''  text='Sign in'  icon_class='far fa-user'  icon_aria_label=''  link_type=''  link_size=''  link_bg='outline-light'  link_pt=''  link_pr=''  link_pb=''  link_pl=''  link_pt_md=''  link_pr_md=''  link_pb_md=''  link_pl_md=''  link_pt_lg=''  link_pr_lg=''  link_pb_lg=''  link_pl_lg=''  link_divider=''  text_color=''  text_justify='false'  text_align=''  text_align_md=''  text_align_lg=''  font_weight=''  mt=''  mr=''  mb=''  ml=''  mt_md=''  mr_md=''  mb_md=''  ml_md=''  mt_lg='0'  mr_lg=''  mb_lg='0'  ml_lg=''  pt=''  pr=''  pb=''  pl=''  pt_md=''  pr_md=''  pb_md=''  pl_md=''  pt_lg='0'  pr_lg='0'  pb_lg='0'  pl_lg='0'  border=''  rounded=''  rounded_size=''  shadow=''  visibility_conditions=''  css_class='' ]
                    <!-- /wp:blockstrap/blockstrap-widget-nav-item -->

                    <!-- wp:blockstrap/blockstrap-widget-nav-item {"type":"wp-logout","text":"Sign out","icon_class":"fas fa-sign-out-alt","link_bg":"outline-light","mt_lg":"0","mb_lg":"0","pt_lg":"0","pr_lg":"0","pb_lg":"0","pl_lg":"0","content":"\u003ca href=\u0022#http://localhost/wp-login.php?action=logout\u0026amp;_wpnonce=ff174f2c84\u0022 class=\u0022nav-link \u0022\u003e\u003ci class=\u0022fas fa-sign-out-alt me-2\u0022\u003e\u003c/i\u003eSign out\u003c/a\u003e"} -->
                    [bs_nav_item type='wp-logout'  page_id=''  post_id=''  custom_url=''  text='Sign out'  icon_class='fas fa-sign-out-alt'  icon_aria_label=''  link_type=''  link_size=''  link_bg='outline-light'  link_pt=''  link_pr=''  link_pb=''  link_pl=''  link_pt_md=''  link_pr_md=''  link_pb_md=''  link_pl_md=''  link_pt_lg=''  link_pr_lg=''  link_pb_lg=''  link_pl_lg=''  link_divider=''  text_color=''  text_justify='false'  text_align=''  text_align_md=''  text_align_lg=''  font_weight=''  mt=''  mr=''  mb=''  ml=''  mt_md=''  mr_md=''  mb_md=''  ml_md=''  mt_lg='0'  mr_lg=''  mb_lg='0'  ml_lg=''  pt=''  pr=''  pb=''  pl=''  pt_md=''  pr_md=''  pb_md=''  pl_md=''  pt_lg='0'  pr_lg='0'  pb_lg='0'  pl_lg='0'  border=''  rounded=''  rounded_size=''  shadow=''  visibility_conditions=''  css_class='' ]
                    <!-- /wp:blockstrap/blockstrap-widget-nav-item -->

					<?php
				}
				?>

                <!-- wp:blockstrap/blockstrap-widget-nav-item {"type":"add_gd_place","page_id":"4426","custom_url":"#about","text":"Post a job","link_type":"btn","link_size":"large","link_bg":"primary","font_weight":"font-weight-bold","content":""} -->
                [bs_nav_item type='add_gd_place'  page_id='4426'  post_id=''  custom_url='#about'  text='Post a job'  icon_class=''  icon_aria_label=''  link_type='btn'  link_size='large'  link_bg='primary'  link_pt=''  link_pr=''  link_pb=''  link_pl=''  link_pt_md=''  link_pr_md=''  link_pb_md=''  link_pl_md=''  link_pt_lg=''  link_pr_lg=''  link_pb_lg=''  link_pl_lg=''  link_divider=''  text_color=''  text_justify='false'  text_align=''  text_align_md=''  text_align_lg=''  font_weight='font-weight-bold'  mt=''  mr=''  mb=''  ml=''  mt_md=''  mr_md=''  mb_md=''  ml_md=''  mt_lg=''  mr_lg=''  mb_lg=''  ml_lg=''  pt=''  pr=''  pb=''  pl=''  pt_md=''  pr_md=''  pb_md=''  pl_md=''  pt_lg=''  pr_lg=''  pb_lg=''  pl_lg=''  border=''  rounded=''  rounded_size=''  shadow=''  visibility_conditions=''  css_class='' ]
                <!-- /wp:blockstrap/blockstrap-widget-nav-item -->



            </ul></div>[/bs_nav]
        <!-- /wp:blockstrap/blockstrap-widget-nav --></div></nav>[/bs_navbar]
<!-- /wp:blockstrap/blockstrap-widget-navbar -->

