<?php
/*
* Template Name: 料金表
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php
//////////////////////////////////
//ウェブマスターツール用のID表示
//////////////////////////////////
if ( get_webmaster_tool_id() ): ?>
<meta name="google-site-verification" content="<?php echo get_webmaster_tool_id() ?>" />
<?php endif;//ウェブマスターツールID終了 ?>
<meta charset="<?php bloginfo('charset'); ?>">
<?php //ビューポート
//モバイルもしくはページキャシュモードの時
if ( is_mobile() || is_responsive_enable() || is_page_cache_enable() ): ?>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
<?php else: ?>
  <meta name="viewport" content="width=1280, maximum-scale=1, user-scalable=yes">
<?php endif ?>
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php //Wordpressのバージョンが4.1以下のとき
if ( floatval(get_bloginfo('version')) < 4.1 ):
  get_template_part('header-title-tag');
endif; ?>
<?php get_template_part('header-seo');//SEOの設定テンプレート?>
<?php //get_template_part('header-css');//CSS関連の記述まとめテンプレート?>
<?php //wp_enqueue_script('jquery');//jQueryの読み込み?>
<?php //get_template_part('header-css-mobile-responsive');//モバイル時、レスポンシブ時のCSS関連ファイル読み込みテンプレート（本来ならheader-css.phpに一つにまとめたいところだけど、このテンプレート（モバイル関連の記述）をここで読み込まないとモバイルで表示が崩れるサーバもあったので、あえて分けて書いてあります。?>
<?php //get_template_part('header-javascript');//JavaScript関連の記述まとめテンプレート?>
<?php the_apple_touch_icon_tag();//Appleタッチアイコンの呼び出し ?>
<?php if ( is_facebook_ogp_enable() ) //Facebook OGPタグ挿入がオンのとき
  get_template_part('header-ogp');//Facebook OGP用のタグテンプレート?>
<?php if ( is_twitter_cards_enable() ) //Twitterカードタグ挿入がオンのとき
  get_template_part('header-twitter-card');//Twitterカード用のタグテンプレート?>
<?php get_template_part('header-insert');//ユーザーが子テーマからヘッダーに何か記述したい時に利用するテンプレート?>
<?php get_template_part('head-custom-field');//カスタムフィールドの挿入（カスタムフィールド名：head_custom）?>
<?php wp_head(); ?>
</head>
  <body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
    <div id="container" class="price">

      <!-- header -->
      <header itemscope itemtype="http://schema.org/WPHeader">
        <div id="header" class="clearfix">
          <div id="header-in">

            <?php //カスタムヘッダーがある場合
            // $h_top_style = '';
            // if (get_header_image()){
            //   $h_top_style = ' style="background-image:url('.get_header_image().')"';
            // } ?>
            <div id="h-top"<?php //echo $h_top_style; ?>>
              <?php get_template_part('button-menu'); //モバイルメニューボタンの呼び出し?>

              <div class="alignleft top-title-catchphrase">
                <?php get_template_part('header-logo');?>
              </div>
              <div class="alignright top-sns-follows">
              </div>
            </div><!-- /#h-top -->
          </div><!-- /#header-in -->
        </div><!-- /#header -->
      </header>

      <?php if (is_navi_visible())://ナビゲーションが表示のとき
        get_template_part('navi');//グローバルナビのためのテンプレート
      endif; ?>
	<!-- 本体部分 -->
	<div id="price-body">
		<div id="body-in">
	    <!-- main -->
	    <main itemscope itemprop="mainContentOfPage">
	    	<div id="main" itemscope itemtype="http://schema.org/Blog">
	  			<div id="breadcrumb" class="breadcrumb-page">
	    			<div itemtype="http://data-vocabulary.org/Breadcrumb" itemscope=""><span class="fa fa-home fa-fw"></span><a href="http://life-thewild.com" itemprop="url"><span itemprop="title">ホーム</span></a></div>
	  			</div><!-- /#breadcrumb -->
	        <div id="post-7" class="post-7 page type-page status-publish">
	        <article class="article">
	          <header>
	            <h1 class="entry-title">ホームページ制作料金</h1>
	              <span class="edit"><span class="fa fa-pencil-square-o fa-fw"></span><a class="post-edit-link" href="http://life-thewild.com/wp-admin/post.php?post=7&#038;action=edit">編集</a></span>
							</p>
	          </header>
	        	<div id="the-content" class="entry-content">
							<table>
								<tr>
									<th>メニュー</th><th>金額</th>
								</tr>
								<tr>
									<td>制作費用(TOP＋4ページ)</td><td>80,000円</td>
								</tr>
								<tr>
									<td>追加ページ</td><td>12,000円</td>
								</tr>
								<tr>
									<td>レスポンシブ対応</td><td>40,000円</td>
								</tr>
								<tr>
									<td>wordpress導入</td><td>50,000円</td>
								</tr>
								<tr>
									<td>SNS連動</td><td>7,000円</td>
								</tr>
								<tr>
									<td>バナー制作</td><td>5,000円</td>
								</tr>
								<tr>
									<td>ロゴ制作</td><td>15,000円</td>
								</tr>
								<tr>
									<td>サーバー管理費・更新費</td><td>6,000円/月</td>
								</tr>
							</table>
	        	</div><!--the-content-->
	        <footer>
	          <!-- ページリンク -->
	            <!-- 文章下広告 -->
	        	<div id="sns-group">
	          	<div class="sns-buttons sns-buttons-pc">
	    					<p class="sns-share-msg">シェアする</p>
	    						<ul class="snsb clearfix">
	    							<li class="balloon-btn twitter-balloon-btn twitter-balloon-btn-defalt">
	  									<div class="balloon-btn-set">
	    									<div class="arrow-box">
	      									<a href="//twitter.com/search?q=http%3A%2F%2Flife-thewild.com%2Fprice%2F" target="blank" class="arrow-box-link twitter-arrow-box-link" rel="nofollow">
	        									<span class="social-count twitter-count"><span class="fa fa-comments"></span></span>
	      									</a>
	    									</div>
	    									<a href="//twitter.com/share?text=%E3%83%9B%E3%83%BC%E3%83%A0%E3%83%9A%E3%83%BC%E3%82%B8%E5%88%B6%E4%BD%9C%E6%96%99%E9%87%91&amp;url=http%3A%2F%2Flife-thewild.com%2Fprice%2F" target="blank" class="balloon-btn-link twitter-balloon-btn-link" rel="nofollow">
	      									<span class="fa fa-twitter"></span>
	              					<span class="tweet-label">ツイート</span>
	          						</a>
	  									</div>
										</li>
	        					<li class="facebook-btn"><div class="fb-like" data-href="http://life-thewild.com/price/" data-layout="box_count" data-action="like" data-show-faces="false" data-share="true"></div></li>
	            			<li class="google-plus-btn"><script type="text/javascript" src="//apis.google.com/js/plusone.js"></script>
	      							<div class="g-plusone" data-size="tall" data-href="http://life-thewild.com/price/"></div>
	    							</li>
	            			<li class="hatena-btn"> <a href="//b.hatena.ne.jp/entry/http://life-thewild.com/price/" class="hatena-bookmark-button" data-hatena-bookmark-title="ホームページ制作料金｜THE WILD 〜行動しない天才〜" data-hatena-bookmark-layout="vertical-balloon" title="このエントリーをはてなブックマークに追加"><img src="//b.st-hatena.com/images/entry-button/button-only.gif" alt="このエントリーをはてなブックマークに追加" style="border: none;" /></a><script type="text/javascript" src="//b.st-hatena.com/js/bookmark_button.js" async="async"></script></li>
	            			<li class="pocket-btn"><a data-pocket-label="pocket" data-pocket-count="vertical" class="pocket-btn" data-lang="en"></a>
											<script type="text/javascript">!function(d,i){if(!d.getElementById(i)){var j=d.createElement("script");j.id=i;j.src="//widgets.getpocket.com/v1/j/btn.js?v=1";var w=d.getElementById(i);d.body.appendChild(j);}}(document,"pocket-btn-js");</script>
	    							</li>
	            		</ul>
								</div>
	          <!-- SNSページ -->
							<div class="sns-pages">
							<p class="sns-follow-msg">フォローする</p>
							<ul class="snsp">
							<li class="feedly-page"><a href='//feedly.com/index.html#subscription%2Ffeed%2Fhttp%3A%2F%2Flife-thewild.com%2Ffeed%2F' target='blank' title="feedlyで更新情報を購読" rel="nofollow"><span class="icon-feedly-logo"></span></a></li><li class="rss-page"><a href="http://life-thewild.com/feed/" target="_blank" title="RSSで更新情報をフォロー" rel="nofollow"><span class="icon-rss-logo"></span></a></li>  </ul>
							</div>
	          </div>
	        </footer>
	        </article><!-- .article -->
	      </div><!-- .page -->
	  	</div><!-- /#main -->
	  </main>
		</div><!-- /#body-in -->
	</div><!-- /#body -->

	<!-- footer -->
	<footer itemscope itemtype="http://schema.org/WPFooter">
		<div id="footer" class="main-footer">
	    <div id="footer-in">
	      <div class="clear"></div>
				<div id="copyright" class="wrapper">
	        <div id="footer-navi">
	          <div id="footer-navi-in">
	            <div class="menu-menu-container">
								<ul id="menu-menu" class="menu">
									<li id="menu-item-11" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-7 current_page_item menu-item-11"><a href="http://life-thewild.com/price/">ホームページ制作料金</a></li>
								</ul>
							</div>
						</div>
	        </div>
	        <div class="credit">
	          <address>&copy; 2016  <a href="http://life-thewild.com">THE WILD 〜行動しない天才〜</a> All Rights Reserved.</address>
	        </div>
	      </div>
	    </div><!-- /#footer-in -->
	  </div><!-- /#footer -->
	</footer>
	<div id="page-top">
	  <a id="move-page-top"><span class="fa fa-caret-square-o-up fa-2x"></span></a>
	</div>
</div><!-- /#container -->
 </body>
</html>
