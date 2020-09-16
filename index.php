  
  <?php get_header(); ?>

      <!-- メインコンテンツ（ダミーサイトイメージ）-->
      <div class="p-headImg">
        <p>ダミーサイト</p>
      </div>

      <!-- メインコンテンツ（eatIn＆takeOut）-->
      <div class="p-mainContents">
        <div class="p-content">
          <a href="<?php echo home_url('/shopPage'); ?>"><img src="<?php echo esc_url( get_template_directory_uri()); ?>/img/TakeOut.png" alt="Take Out1"></a>
          <p class="contentTiele">Take Out</p>
          <div class="contentSentense1">
            <h3>小見出しが入ります1</h3>
            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
          </div>
          <div class="contentSentense2">
            <h3>小見出しが入ります2</h3>
            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
          </div>
        </div>
        <div class="p-content">
          <a href="<?php echo home_url('/shopPage'); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/EatIn.png" alt="Eat In2"></a>
          <p class="contentTiele">Eat In</p>
          <div class="contentSentense1">
            <h3>小見出しが入ります1</h3>
            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
          </div>
          <div class="contentSentense2">
            <h3>小見出しが入ります2</h3>
            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
          </div>
        </div>
      </div>

      <!-- メインコンテンツ（マップ）-->
      <div class="map-img">
        <div class="map-text">
          <h3>見出しが入ります。</h3>
          <p>テストが入ります。テストが入ります。テストが入ります。テストが入ります。テストが入ります。テストが入ります。テストが入ります。テストが入ります。テストが入ります。</p>
        </div>
      </div>

    </article>
    
    <?php get_sidebar(); ?>
    
  </div>

  <?php get_footer(); ?>

