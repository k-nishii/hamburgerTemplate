<!-- サイドバー-->  

<aside id="sidebar">
  <nav id="global-nav">
    <span id="closeBtn">×</span>
    <?php
      if ( is_active_sidebar( 'menu_widget' ) ) :
        dynamic_sidebar( 'menu_widget' );
        else:
    ?>
    <div class="widget">
      <h2>No Widget</h2>
      <p>ウィジットは設定されていません。</p>
    </div>
    <?php endif; ?>
  </nav>
</aside>