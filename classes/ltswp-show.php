<?php

if ( ! class_exists( 'ltswp_Show' ) ) {

    class ltswp_Show extends ltswp_Module {
        /**
         * Constructor
         */
        protected function __construct() {

            $this->register_hook_callbacks();
        }

        /**
         * Register callbacks for actions and filters
         */
        public function register_hook_callbacks() {

            add_action('wp_footer', __CLASS__. '::fake_wp_footer' );

            return;
        }

        /**
         * hook wp_footer
         */
        public function fake_wp_footer() {
            // Only to add the head in Single page where Post is shown
            if (is_single() || is_page()) {

               
            }
        }
    } // end ltswp_Show
}
