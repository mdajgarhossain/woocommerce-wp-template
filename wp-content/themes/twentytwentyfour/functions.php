<?php
/**
 * Twenty Twenty-Four functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Twenty Twenty-Four
 * @since Twenty Twenty-Four 1.0
 */

/**
 * Register block styles.
 */

if ( ! function_exists( 'twentytwentyfour_block_styles' ) ) :
	/**
	 * Register custom block styles
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_block_styles() {

		register_block_style(
			'core/details',
			array(
				'name'         => 'arrow-icon-details',
				'label'        => __( 'Arrow icon', 'twentytwentyfour' ),
				/*
				 * Styles for the custom Arrow icon style of the Details block
				 */
				'inline_style' => '
				.is-style-arrow-icon-details {
					padding-top: var(--wp--preset--spacing--10);
					padding-bottom: var(--wp--preset--spacing--10);
				}

				.is-style-arrow-icon-details summary {
					list-style-type: "\2193\00a0\00a0\00a0";
				}

				.is-style-arrow-icon-details[open]>summary {
					list-style-type: "\2192\00a0\00a0\00a0";
				}',
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'         => 'pill',
				'label'        => __( 'Pill', 'twentytwentyfour' ),
				/*
				 * Styles variation for post terms
				 * https://github.com/WordPress/gutenberg/issues/24956
				 */
				'inline_style' => '
				.is-style-pill a,
				.is-style-pill span:not([class], [data-rich-text-placeholder]) {
					display: inline-block;
					background-color: var(--wp--preset--color--base-2);
					padding: 0.375rem 0.875rem;
					border-radius: var(--wp--preset--spacing--20);
				}

				.is-style-pill a:hover {
					background-color: var(--wp--preset--color--contrast-3);
				}',
			)
		);
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Checkmark', 'twentytwentyfour' ),
				/*
				 * Styles for the custom checkmark list block style
				 * https://github.com/WordPress/gutenberg/issues/51480
				 */
				'inline_style' => '
				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
			)
		);
		register_block_style(
			'core/navigation-link',
			array(
				'name'         => 'arrow-link',
				'label'        => __( 'With arrow', 'twentytwentyfour' ),
				/*
				 * Styles for the custom arrow nav link block style
				 */
				'inline_style' => '
				.is-style-arrow-link .wp-block-navigation-item__label:after {
					content: "\2197";
					padding-inline-start: 0.25rem;
					vertical-align: middle;
					text-decoration: none;
					display: inline-block;
				}',
			)
		);
		register_block_style(
			'core/heading',
			array(
				'name'         => 'asterisk',
				'label'        => __( 'With asterisk', 'twentytwentyfour' ),
				'inline_style' => "
				.is-style-asterisk:before {
					content: '';
					width: 1.5rem;
					height: 3rem;
					background: var(--wp--preset--color--contrast-2, currentColor);
					clip-path: path('M11.93.684v8.039l5.633-5.633 1.216 1.23-5.66 5.66h8.04v1.737H13.2l5.701 5.701-1.23 1.23-5.742-5.742V21h-1.737v-8.094l-5.77 5.77-1.23-1.217 5.743-5.742H.842V9.98h8.162l-5.701-5.7 1.23-1.231 5.66 5.66V.684h1.737Z');
					display: block;
				}

				/* Hide the asterisk if the heading has no content, to avoid using empty headings to display the asterisk only, which is an A11Y issue */
				.is-style-asterisk:empty:before {
					content: none;
				}

				.is-style-asterisk:-moz-only-whitespace:before {
					content: none;
				}

				.is-style-asterisk.has-text-align-center:before {
					margin: 0 auto;
				}

				.is-style-asterisk.has-text-align-right:before {
					margin-left: auto;
				}

				.rtl .is-style-asterisk.has-text-align-left:before {
					margin-right: auto;
				}",
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_block_styles' );

/**
 * Enqueue block stylesheets.
 */

if ( ! function_exists( 'twentytwentyfour_block_stylesheets' ) ) :
	/**
	 * Enqueue custom block stylesheets
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_block_stylesheets() {
		/**
		 * The wp_enqueue_block_style() function allows us to enqueue a stylesheet
		 * for a specific block. These will only get loaded when the block is rendered
		 * (both in the editor and on the front end), improving performance
		 * and reducing the amount of data requested by visitors.
		 *
		 * See https://make.wordpress.org/core/2021/12/15/using-multiple-stylesheets-per-block/ for more info.
		 */
		wp_enqueue_block_style(
			'core/button',
			array(
				'handle' => 'twentytwentyfour-button-style-outline',
				'src'    => get_parent_theme_file_uri( 'assets/css/button-outline.css' ),
				'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
				'path'   => get_parent_theme_file_path( 'assets/css/button-outline.css' ),
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_block_stylesheets' );

/**
 * Register pattern categories.
 */

if ( ! function_exists( 'twentytwentyfour_pattern_categories' ) ) :
	/**
	 * Register pattern categories
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_pattern_categories() {

		register_block_pattern_category(
			'twentytwentyfour_page',
			array(
				'label'       => _x( 'Pages', 'Block pattern category', 'twentytwentyfour' ),
				'description' => __( 'A collection of full page layouts.', 'twentytwentyfour' ),
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_pattern_categories' );

// add_action('rest_api_init', function () {
//     register_rest_route('custom/v1', '/login', array(
//         'methods' => 'POST',
//         'callback' => 'custom_login',
//     ));
// });

// function custom_login(WP_REST_Request $request) {
//     $creds = array();
//     $creds['user_login'] = $request->get_param('username');
//     $creds['user_password'] = $request->get_param('password');
//     $creds['remember'] = true;
    
//     $user = wp_signon($creds, false);
    
//     if (is_wp_error($user)) {
//         return new WP_Error('invalid_login', __('Invalid login credentials'), array('status' => 403));
//     }
    
//     return $user->data;
// }

// add_action('rest_api_init', function () {
//     register_rest_route('custom/v1', '/register', array(
//         'methods' => 'POST',
//         'callback' => 'custom_register',
//     ));
// });

// function custom_register(WP_REST_Request $request) {
//     $username = $request->get_param('username');
//     $password = $request->get_param('password');
//     $email = $request->get_param('email');
    
//     if (username_exists($username) || email_exists($email)) {
//         return new WP_Error('user_exists', __('User already exists'), array('status' => 403));
//     }
    
//     $user_id = wp_create_user($username, $password, $email);
    
//     if (is_wp_error($user_id)) {
//         return new WP_Error('registration_failed', __('User registration failed'), array('status' => 500));
//     }
    
//     return get_userdata($user_id)->data;
// }


// Register custom REST API endpoint for user registration
// add_action('rest_api_init', function () {
//     register_rest_route('custom/v1', 'register', [
//         'methods' => 'POST',
//         'callback' => 'custom_user_registration',
//         'permission_callback' => '__return_true',
//     ]);
// });

// function custom_user_registration($request) {
//     $username = sanitize_text_field($request['username']);
//     $email = sanitize_email($request['email']);
//     $password = $request['password'];

//     if (username_exists($username) || email_exists($email)) {
//         return new WP_Error('registration_failed', 'Username or Email already exists.', ['status' => 400]);
//     }

//     $user_id = wp_create_user($username, $password, $email);

//     if (is_wp_error($user_id)) {
//         return new WP_Error('registration_failed', 'User registration failed.', ['status' => 400]);
//     }

//     $user = get_user_by('ID', $user_id);
//     $user_data = [
//         'id' => $user->ID,
//         'username' => $user->user_login,
//         'email' => $user->user_email,
//     ];

//     return new WP_REST_Response($user_data, 200);
// }

// // Allow CORS for custom endpoint
// add_action('rest_api_init', function() {
//     remove_filter('rest_pre_serve_request', 'rest_send_cors_headers');
//     add_filter('rest_pre_serve_request', function($value) {
//         header('Access-Control-Allow-Origin: *');
//         header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE');
//         header('Access-Control-Allow-Credentials: true');
//         return $value;
//     });
// }, 15);


// Register custom REST API endpoint for user registration
add_action('rest_api_init', function () {
    register_rest_route('custom/v1', 'register', [
        'methods' => 'POST',
        'callback' => 'custom_user_registration',
        'permission_callback' => '__return_true',
    ]);
});

function custom_user_registration($request) {
    $username = sanitize_text_field($request['username']);
    $email = sanitize_email($request['email']);
    $password = $request['password'];

    if (empty($username) || empty($email) || empty($password)) {
        return new WP_Error('missing_fields', 'All fields are required.', ['status' => 400]);
    }

    if (!is_email($email)) {
        return new WP_Error('invalid_email', 'Invalid email format.', ['status' => 400]);
    }

    if (username_exists($username) || email_exists($email)) {
        return new WP_Error('registration_failed', 'Username or Email already exists.', ['status' => 400]);
    }

    $user_id = wp_create_user($username, $password, $email);

    if (is_wp_error($user_id)) {
        return new WP_Error('registration_failed', 'User registration failed.', ['status' => 400]);
    }

    $user = get_user_by('ID', $user_id);
    $user_data = [
        'id' => $user->ID,
        'username' => $user->user_login,
        'email' => $user->user_email,
    ];

    return new WP_REST_Response($user_data, 200);
}

// Register custom REST API endpoint for user login
add_action('rest_api_init', function () {
    register_rest_route('custom/v1', 'login', [
        'methods' => 'POST',
        'callback' => 'custom_user_login',
        'permission_callback' => '__return_true',
    ]);
});

function custom_user_login($request) {
    $username = sanitize_text_field($request['username']);
    $password = $request['password'];

    if (empty($username) || empty($password)) {
        return new WP_Error('missing_fields', 'All fields are required.', ['status' => 400]);
    }

    $user = wp_authenticate($username, $password);

    if (is_wp_error($user)) {
        return new WP_Error('invalid_credentials', 'Invalid username or password.', ['status' => 401]);
    }

    $user_data = [
        'id' => $user->ID,
        'username' => $user->user_login,
        'email' => $user->user_email,
    ];

    return new WP_REST_Response($user_data, 200);
}


add_action('rest_api_init', function () {
    register_rest_route('custom/v1', 'orders', [
        'methods' => 'GET',
        'callback' => 'custom_get_user_orders',
        'permission_callback' => '__return_true',
    ]);
});

function custom_get_user_orders($request) {
    $user_id = $request->get_param('user_id');

    if (empty($user_id)) {
        return new WP_Error('missing_user_id', 'User ID is required.', ['status' => 400]);
    }

    $args = [
        'customer_id' => $user_id,
    ];
    $orders = wc_get_orders($args);

    $orders_data = [];
    foreach ($orders as $order) {
        $order_data = $order->get_data();
        $order_data['line_items'] = [];

        foreach ($order->get_items() as $item) {
            $product = $item->get_product();
            $order_data['line_items'][] = [
                'product_id' => $product->get_id(),
                'product_name' => $product->get_name(),
                'quantity' => $item->get_quantity(),
                'total' => $item->get_total(),
            ];
        }

        $orders_data[] = $order_data;
    }

    return new WP_REST_Response($orders_data, 200);
}


// function custom_get_user_orders($request) {
//     $user_id = $request->get_param('user_id');

//     if (empty($user_id)) {
//         return new WP_Error('missing_user_id', 'User ID is required.', ['status' => 400]);
//     }

//     $args = [
//         'customer_id' => $user_id,
//     ];
//     $orders = wc_get_orders($args);

//     $orders_data = [];
//     foreach ($orders as $order) {
//         $orders_data[] = $order->get_data();
//     }

//     return new WP_REST_Response($orders_data, 200);
// }

// Register custom REST API endpoint for fetching a single order by ID
add_action('rest_api_init', function () {
    register_rest_route('custom/v1', 'orders/(?P<id>\d+)', [
        'methods' => 'GET',
        'callback' => 'custom_get_order_by_id',
        'permission_callback' => '__return_true',
    ]);
});

function custom_get_order_by_id($request) {
    $order_id = $request['id'];

    if (empty($order_id)) {
        return new WP_Error('missing_order_id', 'Order ID is required.', ['status' => 400]);
    }

    $order = wc_get_order($order_id);

    if (!$order) {
        return new WP_Error('order_not_found', 'Order not found.', ['status' => 404]);
    }

    $order_data = $order->get_data();
    $order_data['line_items'] = [];

    foreach ($order->get_items() as $item) {
        $product = $item->get_product();
        $order_data['line_items'][] = [
            'product_id' => $product->get_id(),
            'product_name' => $product->get_name(),
            'quantity' => $item->get_quantity(),
            'total' => $item->get_total(),
        ];
    }

    return new WP_REST_Response($order_data, 200);
}

// function custom_get_order_by_id($request) {
//     $order_id = $request['id'];

//     if (empty($order_id)) {
//         return new WP_Error('missing_order_id', 'Order ID is required.', ['status' => 400]);
//     }

//     $order = wc_get_order($order_id);

//     if (!$order) {
//         return new WP_Error('order_not_found', 'Order not found.', ['status' => 404]);
//     }

//     return new WP_REST_Response($order->get_data(), 200);
// }


// Allow CORS for custom endpoint
add_action('rest_api_init', function () {
    remove_filter('rest_pre_serve_request', 'rest_send_cors_headers');
    add_filter('rest_pre_serve_request', function ($value) {
        header('Access-Control-Allow-Origin: *'); // You can restrict this to your frontend's domain
        header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Allow-Headers: Authorization, Content-Type');
        return $value;
    });
}, 15);


