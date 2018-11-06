<?php 
/*
* Custom Post Types
*/
// function create_posttypes() {
 
//     register_post_type( 'resources',
//     // CPT Options
//         array(
//             'labels' => array(
//                 'name' => __( 'Resources' ),
//                 'singular_name' => __( 'Resource' )
//             ),
//             'public' => true,
//             'has_archive' => true,
//             'rewrite' => array('slug' => 'resource'),
//             'supports'            => array( 'title', 'editor', 'revisions', 'thumbnail'),
//             'taxonomies'          => array( 'topic' ,'keyword', 'type','audience' ),
//         )
//     );

//     // register_post_type( 'events',
//     // // CPT Options
//     //     array(
//     //         'labels' => array(
//     //             'name' => __( 'Events' ),
//     //             'singular_name' => __( 'Event' )
//     //         ),
//     //         'public' => true,
//     //         'has_archive' => true,
//     //         'rewrite' => array('slug' => 'events'),
//     //         'supports'            => array( 'title', 'editor', 'revisions', 'thumbnail' ),
//     //     )
//     // );

//     register_post_type( 'degree-types',
//     // CPT Options
//         array(
//             'labels' => array(
//                 'name' => __( 'Degree Types' ),
//                 'singular_name' => __( 'Degree Type' )
//             ),
//             'public' => true,
//             'has_archive' => true,
//             'rewrite' => array('slug' => 'degrees'),
//             'supports'            => array( 'title', 'editor', 'revisions', ),
//             'taxonomies'          => array( 'level' ,'degrees'),
//         )
//     );

//     register_post_type( 'important-dates',
//     // CPT Options
//         array(
//             'labels' => array(
//                 'name' => __( 'Important Dates' ),
//                 'singular_name' => __( 'Important Date' )
//             ),
//             'public' => true,
//             'has_archive' => true,
//             'rewrite' => array('slug' => 'important-dates'),
//             'supports'            => array( 'title', 'editor', 'revisions',),
//         )
//     );

//     register_post_type( 'newsletters',
//     // CPT Options
//         array(
//             'labels' => array(
//                 'name' => __( 'Newsletters' ),
//                 'singular_name' => __( 'newsletter' )
//             ),
//             'public' => true,
//             'has_archive' => true,
//             'rewrite' => array('slug' => 'newsletters'),
//             'supports'            => array( 'title', 'editor', 'revisions', 'thumbnail'),
//             'taxonomies'          => array( 'audience'),
//         )
//     );
// }
// // Hooking up our function to theme setup
// add_action( 'init', 'create_posttypes' );

// function create_category_taxonomies() {
//     	register_taxonomy(
//     		'topic',
//     		'resources',
//     		array(
//     			'label' => 'Topic',
//     			'hierarchical' => true,
//     			'show_admin_column' => true

    			
    			
//     		)
//     	);

//     	register_taxonomy(
//     		'type',
//     		'resources',
//     		array(
//     			'label' => 'Type',
//     			'hierarchical' => true,
//     			'show_admin_column' => true

//     		)
//     	);

//     	register_taxonomy(
//     		'keyword',
//     		'resources',
//     		array(
//     			'label' => 'Keyword',
//     			'hierarchical' => true,
//     			'show_admin_column' => true

//     		)
//     	);
//     	register_taxonomy(
//     		'audience',
//     		array('resources','newsletters'),
//     		array(
//     			'label' => 'Audience',
//     			'hierarchical' => true,
//     			'show_admin_column' => true

//     		)
//     	);
//         register_taxonomy(
//             'level',
//             'degree-types',
//             array(
//                 'label' => 'Level',
//                 'hierarchical' => true,
//                 'show_admin_column' => true

//             )
//         );
//         register_taxonomy(
//             'degree',
//             'degree-types',
//             array(
//                 'label' => 'Degrees',
//                 'hierarchical' => true,
//                 'show_admin_column' => true

//             )
//         );

    	
       

//     }

 
// add_action( 'init', 'create_category_taxonomies' );