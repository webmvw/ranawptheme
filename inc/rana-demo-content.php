<?php 

function rana_import_files() {
  return [
    [
      'import_file_name'             => 'RanaTheme Import Demo Data',
      'categories'                   => 'Category',
      'local_import_file'            => trailingslashit( get_template_directory() ) . 'demo-data/ranatheme-demo-content.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demo-data/widgets.wie',
    ],
  ];
}
add_filter( 'ocdi/import_files', 'rana_import_files' );



function rana_after_import_setup() {
    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
 
    set_theme_mod( 'nav_menu_locations', [
            'main-menu' => $main_menu->term_id, // replace 'main-menu' here with the menu location identifier from register_nav_menu() function in your theme.
        ]
    );
 
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );
 
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
 
}
add_action( 'ocdi/after_import', 'rana_after_import_setup' );


?>