        <?php if (have_posts() && get_search_query()) : 
            while (have_posts()) :
            the_post();
            //get_template_part( 'template-parts/post/content', 'excerpt' );
            get_template_part( 'archive_search');
            endwhile;
        ?>
 
        <?php else : ?>
            <p>お探しの商品は見つかりませんでした</p></div>
        <?php endif; ?>