<?php
/**
 * Template class
 *
 * @author Flipper Code<hello@flippercode.com>
 * @version 3.0.0
 * @package Posts
 */

if ( ! class_exists( 'WPGMP_Template' ) ) {

	/**
	 * Controller class to display views.
	 *
	 * @author: Flipper Code<hello@flippercode.com>
	 * @version: 5.0.9
	 * @package: Maps
	 */

	class WPGMP_Template extends FlipperCode_HTML_Markup {


		function __construct( $options = array() ) {

			$productOverview = array(
				'subscribe_mailing_list' => esc_html__( 'Subscribe to our mailing list', 'wpgmp-google-map' ),
				'product_info_heading' => esc_html__( 'Getting Started Guide', 'wpgmp-google-map' ),
				'product_info_desc' => esc_html__( 'For each of our plugins, we have created step by step detailed tutorials that helps you to get started quickly.', 'wpgmp-google-map' ),
				'live_demo_caption' => esc_html__( 'Get Started Now', 'wpgmp-google-map' ),
				'installed_version' => esc_html__( 'Installed version :', 'wpgmp-google-map' ),
				'latest_version_available' => esc_html__( 'Latest Version Available : ', 'wpgmp-google-map' ),
				'updates_available' => esc_html__( 'Update Available', 'wpgmp-google-map' ),
				'subscribe_now' => array(
					'heading' => esc_html__( 'Subscribe Now', 'wpgmp-google-map' ),
					'desc1' => esc_html__( 'Receive updates on our new product features and new products effortlessly.', 'wpgmp-google-map' ),
					'desc2' => esc_html__( 'We will not share your email addresses in any case.', 'wpgmp-google-map' ),
				),

				'product_support' => array(
					'heading' => esc_html__( 'Product Support', 'wpgmp-google-map' ),
					'desc' => esc_html__( 'For our each product we have very well explained starting guide to get you started in matter of minutes.', 'wpgmp-google-map' ),
					'click_here' => esc_html__( ' Click Here', 'wpgmp-google-map' ),
					'desc2' => esc_html__( 'For our each product we have set up demo pages where you can see the plugin in working mode. You can see a working demo before making a purchase.', 'wpgmp-google-map' ),
				),

				'refund' => array(
					'heading' => esc_html__( 'Get Refund', 'wpgmp-google-map' ),
					'desc' => esc_html__( 'Please click on the below button to initiate the refund process.', 'wpgmp-google-map' ),
					'link' => array( 
						'label' => esc_html__( 'Request a Refund', 'wpgmp-google-map' ),
						'url' => 'https://codecanyon.net/refund_requests/new'
				   )
				),

				'support' => array(
					'heading' => esc_html__( 'Extended Technical Support', 'wpgmp-google-map' ),
					'desc1' => esc_html__( 'We provide technical support for all of our products. You can opt for 12 months support below.', 'wpgmp-google-map' ),
					'link' => array(
						'label' => esc_html__( 'Extend support', 'wpgmp-google-map' ),
						'url' => 'https://www.flippercode.com/contact-us/'
					  
					  ),               
					 'link2' => array(
						'label' => esc_html__( 'Get Extended Licence', 'wpgmp-google-map' ),
						'url' => 'https://www.flippercode.com/contact-us/'
					  
					  )
				),
				'create_support_ticket' => array(
                    'heading' => esc_html__( 'Create Support Ticket', 'wpgmp-google-map' ),
                    'desc1' => esc_html__( 'If you have any question and need our help, click below button to create a support ticket and our support team will assist you.', 'wpgmp-google-map' ),
                    'link' => array( 
						'label' => esc_html__( 'Create Ticket', 'wpgmp-google-map' ),
						'url' => 'https://www.flippercode.com/support'
					)
                ),

                'hire_wp_expert' => array(
                    'heading' => esc_html__( 'Hire Wordpress Expert', 'wpgmp-google-map' ),
                    'desc' => esc_html__( 'Do you have a custom requirement which is missing in this plugin?', 'wpgmp-google-map' ),
                    'desc1' => esc_html__( 'We can customize this plugin according to your needs. Click below button to send an quotation request.', 'wpgmp-google-map' ),
                    'link' => array(
                                    
                        'label' => esc_html__( 'Request a quotation', 'wpgmp-google-map' ),
                        'url' => 'https://www.flippercode.com/contact-us/'
					)
                ),


			);

			$productInfo = array(
				'productName'       => esc_html__( 'WP Google Map Pro', 'wpgmp-google-map' ),
				'productSlug'       => 'wp-google-map-gold',
				'product_tag_line'  => 'worlds most advanced google map plugin',
				'productTextDomain' => 'wpgmp-google-map',
				'productVersion'    => WPGMP_VERSION,
				'productID'         => '5211638',
				'videoURL'          => 'https://www.youtube.com/playlist?list=PLlCp-8jiD3p2PYJI1QCIvjhYALuRGBJ2A',
				'docURL'            => 'https://wpmapspro.com/tutorials/',
				'demoURL'           => 'https://www.wpmapspro.com/docs/how-to-create-an-api-key/',
				'productSaleURL'    => 'http://codecanyon.net/item/advanced-google-maps-plugin-for-wordpress/5211638',
				'multisiteLicence'  => 'http://codecanyon.net/item/advanced-google-maps-plugin-for-wordpress/5211638?license=extended&open_purchase_for_item_id=5211638&purchasable=source',
				'productOverview' => $productOverview,
			);
			$productInfo = array_merge( $productInfo, $options );
			parent::__construct( $productInfo );

		}

	}

}
