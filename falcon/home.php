  <?php get_header();?>
  <video src="<?php echo get_template_directory_uri(); ?>/video/falcon.mp4" autoplay muted loop playsinline width="100%">
  </video>
  <article class="video_bottom_bar">
    <?php
      //取得したい投稿記事などの条件を引数として渡す
      $args = array(
          // 投稿タイプ
          'post_type'      => 'post',
          // カテゴリー名
          'category_name' => 'news',
          // 1ページに表示する投稿数
          'posts_per_page' => 1,
      );
      // データの取得
      $posts = get_posts($args);
      ?>
      <!-- ループ処理 -->
      <?php foreach($posts as $post): ?>
      <!-- 投稿データをセット -->
      <?php setup_postdata($post); ?>  
      <!-- 投稿のタイトルを表示 -->
      <time><?php the_title();?></time> 
      <a href="#"><p><?php the_content(); ?></p></a>
      <?php endforeach; ?>
      <!--使用した投稿データをリセット -->
      <?php wp_reset_postdata(); ?>
  </article>

  <section class="carousel">
    <ul class="carousel-area">
      <li class="carousel-list"><img class="carousel-img" src="http://falcon.local/wp-content/themes/falcon/images/s_4.jpg" alt="ハムスターの画像"></li>
      <li class="carousel-list"><img class="carousel-img" src="<?php echo get_template_directory_uri(); ?>/images/s_5.jpg" alt="羊の画像"></li>
      <li class="carousel-list"><img class="carousel-img" src="<?php echo get_template_directory_uri(); ?>/images/s_1.jpg" alt="亀の画像"></li>
      <li class="carousel-list"><img class="carousel-img" src="<?php echo get_template_directory_uri(); ?>/images/s_2.jpg" alt="鳥の画像"></li>
      <li class="carousel-list"><img class="carousel-img" src="<?php echo get_template_directory_uri(); ?>/images/s_3.jpg" alt="ライオンの画像"></li>
    </ul>
    <!-- <div class="carousel">
      <div class="d-demo__item"><img class="slide slide1"  src="../../images/s_4.jpg" alt=""></div>
      <div class="d-demo__item"><img class="slide slide2"  src="../../images/s_5.jpg" alt=""></div>
      <div class="d-demo__item"><img class="slide slide3"  src="../../images/s_1.jpg" alt=""></div>
      <div class="d-demo__item"><img class="slide slide4"  src="../../images/s_2.jpg" alt=""></div>
      <div class="d-demo__item"><img class="slide slide4"  src="../../images/s_3.jpg" alt=""></div>
    </div> -->

    <div class="arow-wrap">
      <div class="arrow-left">
        <button class="arrow-btn js-btn-back" type="button"></button>
      </div>
      <div class="arrow-right">
        <button class="arrow-btn js-btn-next" type="button"></button>
      </div>
    </div>
  </section>
  <section class="back_white">
    <div class="service">
      <h1>クラシックカーがあなたを魅了する。</h1>
      <div class="sentence">
        <p>趣味のクルマを中心に様々なクラシックカーを取り扱っています。</p>
        <p>日本国内にはないクラシックカーを御購入・御売却に関してもご相談を承っております。</p>
        <p>現行車には無い魅力と新しい愉しみを見つけていただけると幸いです。</p>
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/images/2image.jpg" alt="">
      <a class="button" href="#">SERVICE</a>
    </div>
  </section>
  <section class="back_black">
    <div class="big_exhibition">
      <h1>輸入クラシックカー展示台数日本最大級。</h1>
      <div class="exhibition_first">
        <div class="sentence">
          <p>
            広々とした弊社のショールームでは、クラシ<br>ックカーを美しい状態で保管しています。<br>
            日々メンテナンスを行っているので、ご来場<br>の方にいつでも試乗いただける状態にしてお<br>ります。
            実際に目で見て、試乗してみてくだ<br>さい。現行車とは異なるクラシックカーの魅<br>力を存分に感じていただけると思います。
          </p>
          <?php
      //取得したい投稿記事などの条件を引数として渡す
      $args = array(
          // 投稿タイプ
          'post_type'      => 'post',
          // カテゴリー名
          'category_name' => 'news',
          // 1ページに表示する投稿数
          'posts_per_page' => 2,
      );
      // データの取得
      $posts = get_posts($args);
      ?>
      <!-- ループ処理 -->
      <?php foreach($posts as $post): ?>
      <!-- 投稿データをセット -->
      <?php sleep(5); ?>
      <?php setup_postdata($post); ?>  
      <!-- 投稿のタイトルを表示 -->
      <time><?php for ($i = 0; $i < 3;$i++){
        sleep(5);
        the_title();
      }
      ?></time> 
      <a href="#"><p><?php the_content(); ?></p></a>
      <?php endforeach; ?>
      <!--使用した投稿データをリセット -->
      <?php wp_reset_postdata(); ?>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/images/top_block1.jpg" alt="">
      </div>
      <div class="exhibition_second">
        <img src="<?php echo get_template_directory_uri(); ?>/images/top_block2.jpg" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/images/top_block3.jpg" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/images/top_block4.jpg" alt="">
      </div>
      <a class="shop_button" href="#" >SHOP</a>
    </div>
  </section>
  <section class="parallax">
    <h1>最高の状態で、あなたの手に。</h1>
      <p>趣味のクルマを中心に様々なクラシックカーを取り扱っています。</p>
      <p>日本国内にはないクラシックカーを御購入・御売却に関してもご相談を承っております。</p>
      <p>古き良き時代を走り抜けたクルマを最高の状態でお届けします。</p>
      <a href="#" class="button">わたしたちのお約束</a>
  </section>
  <section class="big_stock_list">
    <div class="flex_carList_first carList">
      <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/beetle-1.jpg" alt=""></a>
      <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/austin-green-1.jpg" alt=""></a>
      <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/mk2-1-752x468.jpg" alt=""></a>
    </div>
    <div class="flex_carList_second carList">
      <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/falcon-1-752x468.jpg" alt=""></a>
      <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/s2-1.jpg" alt=""></a>
      <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/ontinental-1947-1-752x468.jpg" alt=""></a>
    </div>
    <div class="flex_carList_third carList">
      <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/mark-v-1.jpg" alt=""></a>
      <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/600-1-752x468.jpg" alt=""></a>
      <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/190sl-1-752x468.jpg" alt=""></a>
    </div>
    <div class="button">
      <a href="#">STOCK LIST</a>
    </div>
  </section>
  <!-- <section class="big_blog">
    <div class="content">
      <h1>魅惑的なクラシックカーの美しさを学ぶ。</h1>
      <p>クラシックカーのイロハから最新の入庫情報などを発信します。</p>
      <p>購入を検討中の方やオーナー様にとっても役立つ情報を更新していますので、ぜひご覧ください。</p>
    </div>
    <div class="blog_list1">
      <img src="../../images/blog_news-41-752x468.jpg" alt="">
      <img src="../../images/blog_news-34-752x468.jpg" alt="">
      <img src="../../images/blog_news-35-752x468.jpg" alt="">
    </div>
    <div class="blog_list2">
      <img src="../../images/blog_news-9-752x468.jpg" alt="">
      <img src="../../images/blog_news-48-752x468.jpg" alt="">
      <img src="../../images/blog_news-2-752x468.jpg" alt="">
    </div>
    <a href="">BLOG</a>
  </section> -->
  <section class="big_blog_wrap back_white">
    <div class="blog_list_content">
      <div class="sentence">
        <h1>魅惑的なクラシックカーの美しさを学ぶ。</h1>
        <p>クラシックカーのイロハから最新の入庫情報などを発信します。</p>
        <p>購入を検討中の方やオーナー様にとっても役立つ情報を更新していますので、ぜひご覧ください。</p>
      </div>
      <div class="blog_list">
        <div class="blog_list_detail">
          <!-- <a href="#"></a>
          <a href="#"></a>
          <a href="#"></a> -->
          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/blog_news-41-752x468.jpg" alt=""></a>
          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/blog_news-34-752x468.jpg" alt=""></a>
          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/blog_news-35-752x468.jpg" alt=""></a>
        </div>
        <div class="blog_list_detail">
          <!-- <a href="#"></a>
          <a href="#"></a>
          <a href="#"></a> -->
          <a href="#"><img src=".<?php echo get_template_directory_uri(); ?>/images/blog_news-9-752x468.jpg" alt=""></a>
          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/blog_news-48-752x468.jpg" alt=""></a>
          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/blog_news-2-752x468.jpg" alt=""></a>
        </div>
      </div>
      <div class="button">
        <a href="#">BLOG</a>
      </div>
    </div>
  </section>

  <footer>
    <section class="footer_1">
      <a href="#" class="flex_grow">
        <img src="<?php echo get_template_directory_uri(); ?>/images/footer_1.jpg" alt="">
        <p>STOCK LIST</p>
        <p>在庫リスト</p>
      </a>
      <a href="#" class="flex_grow">
        <img src="<?php echo get_template_directory_uri(); ?>/images/footer_2.jpg" alt="">
        <div>
          <p>SERVICE</p>
          <p>サービス</p>
        </div>

      </a>
      <a href="#" class="flex_grow">
        <img src="<?php echo get_template_directory_uri(); ?>/images/footer_3.jpg" alt="">
        <p>CONTACT</p>
        <p>お問い合わせ・お見積り</p>
      </a>
    </section>
    <section class="info">
      <img src="<?php echo get_template_directory_uri(); ?>/images/footer_logo-1.png" alt="">
      <p>〒530-8201 大阪府大阪市北区中之島1丁目</p>
      <p>平日 10:00 ～ 20:00　土日祝 10:00 ～ 19:30　サービス受付 10:00 ～ 19:00　水曜定休</p>
      <div class="sns">
        <!-- 作成者・出典：<a href="https://www.freepik.com/search?format=search&icon_color=solid-black&last_filter=query&last_value=instagram&query=instagram&type=icon">Icon by Freepik</a> -->
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/sns/instagram.png"></a>
        <!-- 作成者・出典：<a href="https://www.freepik.com/search?format=search&icon_color=solid-black&last_filter=icon_color&last_value=solid-black&query=%E3%82%A4%E3%83%B3%E3%82%B9%E3%82%BF%E3%82%B0%E3%83%A9%E3%83%A0&type=icon">Icon by edt.im</a> -->
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/sns/twitter.png"></a>
        <!-- 作成者・出典：<a href="https://www.freepik.com/search?format=search&icon_color=solid-black&last_filter=query&last_value=facebook&query=facebook&type=icon">Icon by Freepik</a> -->
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/sns/facebook.png"></a>
        <!-- 作成者・出典：<a href="https://www.freepik.com/search?format=search&icon_color=solid-black&last_filter=query&last_value=pinterest&query=pinterest&type=icon">Icon by Freepik</a> -->
        <a href="#"><img src="sns/pinterest.png"></a>
        <!-- 作成者・出典：<a href="https://www.freepik.com/search?format=search&icon_color=solid-black&last_filter=query&last_value=youtube&query=youtube&type=icon">Icon by Freepik</a> -->
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/sns/youtube.png"></a>
        <!-- 作成者・出典：<a href="https://www.freepik.com/search?format=search&icon_color=solid-black&last_filter=query&last_value=contact&query=contact&type=icon">Icon by Icongeek26</a> -->
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/sns/letter.png"></a>
        <!-- 作成者・出典：<a href="https://www.freepik.com/search?format=search&icon_color=solid-black&last_filter=query&last_value=rss&query=rss&type=icon">Icon by Lizel Arina</a> -->
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/sns/rss.png"></a>
      </div>
    </section>
      <?php get_footer();?>