<?php 

add_theme_support( 'title-tag' );

function wpbeg_title( $title ) {
	if ( is_front_page() && is_home() ) { //トップページなら
			$title = get_bloginfo( 'name', 'display' );
	} elseif ( is_singular() ) { //シングルページなら
			$title = single_post_title( '', false );
	}
			return $title;
}
add_filter( 'pre_get_document_title', 'wpbeg_title' );

function my_scripts() {
  wp_enqueue_style( 'style-name', get_template_directory_uri() . 'style.css', array(), '1.0.0', 'all' );
  wp_enqueue_style( 'applicationCss', get_template_directory_uri() . '/css/application.css', array(), '1.0.0' );
  //wp_enqueue_style( 'testJs', get_template_directory_uri() . '/js/test.js', array(), '1.0.0' );
	//wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/setting.js', array( 'jquery' ), '1.0.0', true );	
	wp_deregister_script( 'jquery'); //WordPress 本体の jQuery を登録解除
	wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js' , "", "3.4.1", true );
	wp_enqueue_script( 'scriptjs', get_template_directory_uri() . '/js/test.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );

//サイドバー、メニューの追加
function wpbeg_widgets_init() {
	register_sidebar(array(
		'name'=>'サイドバー',
		'id'            => 'menu_widget',
		'description'   => 'サイドバーのメニュー用ウィジェットです',
		'before_widget'=>'<div class="sidebar-wrapper">',
		'after_widget'=>'</div>',
		'before_title'  => '<h3 id="oprnBtn" class="title">',
		'after_title'   => "</h3>\n",
	));
}
add_action( 'widgets_init', 'wpbeg_widgets_init' );

add_theme_support( 'automatic-feed-links' );

if ( ! isset( $content_width ) ) {
	$content_width = 960;
}

?>