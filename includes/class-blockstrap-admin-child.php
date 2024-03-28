<?php

if ( class_exists( 'BlockStrap_Admin' ) ) {


	class BlockStrap_Admin_Child extends BlockStrap_Admin {
		public function __construct() {
			parent::__construct();
		}

		/**
		 * Get the theme title.
		 *
		 * @return string|null
		 */
		public function get_theme_title() {
			return __( 'Jobs Directory', 'job-board' );
		}

		/**
		 * Get the array of demo pages.
		 *
		 * @return array[]
		 */
		public function get_demo_pages() {
			return array(
				'contact' => array(
					'title' => __( 'Contact Us', 'job-board' ),
					'slug'  => 'contact',
					'desc'  => $this->get_template_content( dirname( __FILE__ ) . '/../patterns/contact-page.php' ),
				),
				'blog'    => array(
					'title'   => __( 'Our Blog', 'job-board' ),
					'slug'    => 'blog',
					'desc'    => $this->get_template_content( dirname( __FILE__ ) . '/../patterns/blog-page.php' ),
					'is_blog' => true,
				),
			);
		}

		/**
		 * Get the required plugins details array.
		 *
		 * @return array
		 */
		public function get_required_plugins() {
			return array(
				'blockstrap-page-builder-blocks' => __( 'BlockStrap Builder', 'job-board' ),
				'geodirectory' => __( 'GeoDirectory', 'job-board' ),
				'userswp' => __( 'UsersWP', 'job-board' ),
			);
		}

		/**
		 * This can be set in child themes to set the GD dummy data default type.
		 *
		 * @param $type
		 * @param $post_type
		 *
		 * @return mixed
		 */
		public function gd_set_default_dummy_data_type( $type, $post_type ) {

			if ( ! $type ) {
				$type = 'job_board';
			}
			return $type;
		}


	}

}