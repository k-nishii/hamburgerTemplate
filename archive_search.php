<?php get_header(); ?>

      <!-- メインコンテンツ（ダミーサイトイメージ）-->
      <div class="p-archiveHeadImg">
        <p>Menue:<span><?php the_search_query(); ?></span></p>
      </div>

      <!-- メインコンテンツ-->
      <div class="p-archiveContents">
        <h3>小見出しが入ります。</h3>
        <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>

        <?php if(have_posts()): while(have_posts()): the_post(); ?>

          <div class="p-archiveContentList">
            <div class="p-archiveContent">
              <img src="<?php echo esc_url( get_template_directory_uri()); ?>/img/TakeOut.png" alt="検索結果イメージ">
              <div class="p-imgRightPart">
                <div class="p-imgRightPartSentense">
                  <h4><?php the_title(); ?></h4>
                  <h5>小見出しが入ります1</h5>
                  <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                  <a href="<?php the_permalink(); ?>" class="p-contentButton">詳しく見る</a>
                </div>
              </div>
            </div>
          </div>

        <?php endwhile; else: ?>
          <p>お探しのページはありません</p>
        <?php endif; ?>

        <div class="pager">
	        <?php global $wp_rewrite; $paginate_base = get_pagenum_link(1);
	        if(strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()){
		        $paginate_format = '';
		        $paginate_base = add_query_arg('paged','%#%');
	        }
	        else{
		        $paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
		        user_trailingslashit('page/%#%/','paged');;
		        $paginate_base .= '%_%';
	        }
	        echo paginate_links(array(
		      'base' => $paginate_base,
		      'format' => $paginate_format,
		      'total' => $wp_query->max_num_pages,
		      'mid_size' => 4,
		      'current' => ($paged ? $paged : 1),
		      'prev_text' => '«',
		      'next_text' => '»',
	        )); ?>
        </div>

      </div>

    </article>
    
    <?php get_sidebar(); ?>
  </div>

  <?php get_footer(); ?>