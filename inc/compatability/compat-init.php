<?php

if ( ! class_exists( 'All_in_One_SEO_Pack_Compatibility' ) ) {

	/**
	 * Class All_in_One_SEO_Pack_Compatibility
	 *
	 * @since 2.3.6
	 */
	class All_in_One_SEO_Pack_Compatibility {

		/**
		 * All_in_One_SEO_Pack_Compatibility constructor.
		 *
		 * @since 2.3.6
		 */
		function __construct() {

			$this->load_compatibility_classes();

		}

		/**
		 * Load Compatibility Hooks.
		 *
		 * @since 2.3.6
		 */
		function load_compatibility_hooks() {
			// We'll use this until we set up out classes.

			if ( class_exists( 'jetpack' ) ) {
				add_filter( 'jetpack_get_available_modules', array( $this, 'remove_jetpack_sitemap' ) );
			}
		}

		/**
		 * Remove Jetpack's sitemap.
		 *
		 * @param $modules
		 * @since 2.3.6
		 * @return mixed
		 */
		function remove_jetpack_sitemap( $modules ) {
			// Remove Jetpack's sitemap
			unset( $modules['sitemaps'] );

			return $modules;

		}

		/**
		 * Load Compatibility classes.
		 *
		 * @since 2.3.6
		 */
		function load_compatibility_classes() {
			// Eventually we'll load our other classes from here.
			$this->load_compatibility_hooks();
		}
	}

}

$aiosp_compat = new All_in_One_SEO_Pack_Compatibility();

