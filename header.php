<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no"> <!-- 勝手にリンクしないための設定 -->
  <meta name="description" content="WordPress theme development static data for beginners"><!-- 検索エンジンの検索結果一覧ページで活用されている。表示される内容。 -->
	<meta name="keywords" content="WordPress, Theme, development">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/common/ico/favicon.ico">
  
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>"> <!-- 必要か不明。。。。 -->
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
  <!-- メインコンテンツ（トップ検索部）-->
  <div class="l-main">
    <article>
      <!-- メインコンテンツ（トップ検索部）-->
      <div class="p-mainHead">
        <div class="headMenuLine">
          <p class="headMenu" id="headMenu">Menu</p>
        </div>
        <h1 class="header__ttl">
          <!-- Hamburger -->
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Hamburger</a>
        </h1>
        <!-- <form action="https://www.google.com/" method="GET">
          <div class="p-searchForm">
            <div class="p-searchInputArea">
              <span class="searchIcon fa fa-search"></span>
              <input class="searchText" type="search" name="search" placeholder="">            
            </div>

            <input class="p-searchBtn c-btn" type="submit" name="submit" value="検索">              
          </div>
        </form> -->
        <?php get_search_form(); ?>
      </div>