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
<script type='text/javascript' src='http://life-thewild.com/wp-includes/js/admin-bar.min.js'></script>
<script type='text/javascript' src='http://life-thewild.com/wp-includes/js/comment-reply.min.js'></script>
<script type='text/javascript' src='http://life-thewild.com/wp-content/themes/simplicity2/javascript.js'></script>
<script type='text/javascript' src='http://life-thewild.com/wp-content/themes/simplicity2-child/javascript.js'></script>
<script type='text/javascript' src='http://life-thewild.com/wp-includes/js/wp-embed.min.js'></script>
	<script type="text/javascript">
		(function() {
			var request, b = document.body, c = 'className', cs = 'customize-support', rcs = new RegExp('(^|\\s+)(no-)?'+cs+'(\\s+|$)');

			request = true;

			b[c] = b[c].replace( rcs, ' ' );
			b[c] += ( window.postMessage && request ? ' ' : ' no-' ) + cs;
		}());
	</script>
			<div id="wpadminbar" class="nojq nojs">
							<a class="screen-reader-shortcut" href="#wp-toolbar" tabindex="1">ツールバーへスキップ</a>
						<div class="quicklinks" id="wp-toolbar" role="navigation" aria-label="ツールバー" tabindex="0">
				<ul id="wp-admin-bar-root-default" class="ab-top-menu">
		<li id="wp-admin-bar-wp-logo" class="menupop"><a class="ab-item" aria-haspopup="true" href="http://life-thewild.com/wp-admin/about.php"><span class="ab-icon"></span><span class="screen-reader-text">WordPress について</span></a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-wp-logo-default" class="ab-submenu">
		<li id="wp-admin-bar-about"><a class="ab-item" href="http://life-thewild.com/wp-admin/about.php">WordPress について</a>		</li></ul><ul id="wp-admin-bar-wp-logo-external" class="ab-sub-secondary ab-submenu">
		<li id="wp-admin-bar-wporg"><a class="ab-item" href="https://ja.wordpress.org/">WordPress.org</a>		</li>
		<li id="wp-admin-bar-documentation"><a class="ab-item" href="http://wpdocs.osdn.jp/">ドキュメンテーション</a>		</li>
		<li id="wp-admin-bar-support-forums"><a class="ab-item" href="https://ja.wordpress.org/support/">サポートフォーラム</a>		</li>
		<li id="wp-admin-bar-feedback"><a class="ab-item" href="https://ja.wordpress.org/support/forum/feedback/">フィードバック</a>		</li></ul></div>		</li>
		<li id="wp-admin-bar-site-name" class="menupop"><a class="ab-item" aria-haspopup="true" href="http://life-thewild.com/wp-admin/">THE WILD 〜行動しない天才〜</a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-site-name-default" class="ab-submenu">
		<li id="wp-admin-bar-dashboard"><a class="ab-item" href="http://life-thewild.com/wp-admin/">ダッシュボード</a>		</li></ul><ul id="wp-admin-bar-appearance" class="ab-submenu">
		<li id="wp-admin-bar-themes"><a class="ab-item" href="http://life-thewild.com/wp-admin/themes.php">テーマ</a>		</li>
		<li id="wp-admin-bar-widgets"><a class="ab-item" href="http://life-thewild.com/wp-admin/widgets.php">ウィジェット</a>		</li>
		<li id="wp-admin-bar-menus"><a class="ab-item" href="http://life-thewild.com/wp-admin/nav-menus.php">メニュー</a>		</li>
		<li id="wp-admin-bar-background" class="hide-if-customize"><a class="ab-item" href="http://life-thewild.com/wp-admin/themes.php?page=custom-background">背景</a>		</li>
		<li id="wp-admin-bar-header" class="hide-if-customize"><a class="ab-item" href="http://life-thewild.com/wp-admin/themes.php?page=custom-header">ヘッダー</a>		</li></ul></div>		</li>
		<li id="wp-admin-bar-customize" class="hide-if-no-customize"><a class="ab-item" href="http://life-thewild.com/wp-admin/customize.php?url=http%3A%2F%2Flife-thewild.com%2Fprice%2F">カスタマイズ</a>		</li>
		<li id="wp-admin-bar-comments"><a class="ab-item" href="http://life-thewild.com/wp-admin/edit-comments.php"><span class="ab-icon"></span><span id="ab-awaiting-mod" class="ab-label awaiting-mod pending-count count-0" aria-hidden="true">0</span><span class="screen-reader-text">0件のコメントが承認待ちです。</span></a>		</li>
		<li id="wp-admin-bar-new-content" class="menupop"><a class="ab-item" aria-haspopup="true" href="http://life-thewild.com/wp-admin/post-new.php"><span class="ab-icon"></span><span class="ab-label">新規</span></a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-new-content-default" class="ab-submenu">
		<li id="wp-admin-bar-new-post"><a class="ab-item" href="http://life-thewild.com/wp-admin/post-new.php">投稿</a>		</li>
		<li id="wp-admin-bar-new-media"><a class="ab-item" href="http://life-thewild.com/wp-admin/media-new.php">メディア</a>		</li>
		<li id="wp-admin-bar-new-link"><a class="ab-item" href="http://life-thewild.com/wp-admin/link-add.php">リンク</a>		</li>
		<li id="wp-admin-bar-new-page"><a class="ab-item" href="http://life-thewild.com/wp-admin/post-new.php?post_type=page">固定ページ</a>		</li>
		<li id="wp-admin-bar-new-user"><a class="ab-item" href="http://life-thewild.com/wp-admin/user-new.php">ユーザー</a>		</li></ul></div>		</li>
		<li id="wp-admin-bar-edit"><a class="ab-item" href="http://life-thewild.com/wp-admin/post.php?post=7&#038;action=edit">固定ページを編集</a>		</li>
		<li id="wp-admin-bar-dashboard_menu" class="menupop"><div class="ab-item ab-empty-item" aria-haspopup="true"><span class="ab-label">管理メニュー</span></div><div class="ab-sub-wrapper"><ul id="wp-admin-bar-dashboard_menu-default" class="ab-submenu">
		<li id="wp-admin-bar-dashboard_menu-dashboard"><a class="ab-item" href="http://life-thewild.com/wp-admin/">ダッシュボード</a>		</li>
		<li id="wp-admin-bar-dashboard_menu-singles"><a class="ab-item" href="http://life-thewild.com/wp-admin/edit.php">投稿一覧</a>		</li>
		<li id="wp-admin-bar-dashboard_menu-pages"><a class="ab-item" href="http://life-thewild.com/wp-admin/edit.php?post_type=page">固定ページ一覧</a>		</li>
		<li id="wp-admin-bar-dashboard_menu-medias"><a class="ab-item" href="http://life-thewild.com/wp-admin/upload.php">メディア一覧</a>		</li>
		<li id="wp-admin-bar-dashboard_menu-themes"><a class="ab-item" href="http://life-thewild.com/wp-admin/themes.php">テーマ</a>		</li>
		<li id="wp-admin-bar-dashboard_menu-customize"><a class="ab-item" href="http://life-thewild.com/wp-admin/customize.php?return=http://life-thewild.com/wp-admin/themes.php">カスタマイズ</a>		</li>
		<li id="wp-admin-bar-dashboard_menu-widget"><a class="ab-item" href="http://life-thewild.com/wp-admin/widgets.php">ウィジェット</a>		</li>
		<li id="wp-admin-bar-dashboard_menu-nav-menus"><a class="ab-item" href="http://life-thewild.com/wp-admin/nav-menus.php">メニュー</a>		</li>
		<li id="wp-admin-bar-dashboard_menu-theme-editor"><a class="ab-item" href="http://life-thewild.com/wp-admin/theme-editor.php">テーマの編集</a>		</li>
		<li id="wp-admin-bar-dashboard_menu-plugins"><a class="ab-item" href="http://life-thewild.com/wp-admin/plugins.php">プラグイン一覧</a>		</li></ul></div>		</li></ul><ul id="wp-admin-bar-top-secondary" class="ab-top-secondary ab-top-menu">
		<li id="wp-admin-bar-search" class="admin-bar-search"><div class="ab-item ab-empty-item" tabindex="-1"><form action="http://life-thewild.com/" method="get" id="adminbarsearch"><input class="adminbar-input" name="s" id="adminbar-search" type="text" value="" maxlength="150" /><label for="adminbar-search" class="screen-reader-text">検索</label><input type="submit" class="adminbar-button" value="検索"/></form></div>		</li>
		<li id="wp-admin-bar-my-account" class="menupop with-avatar"><a class="ab-item" aria-haspopup="true" href="http://life-thewild.com/wp-admin/profile.php">こんにちは、life-thewild さん !<img alt='' src='http://1.gravatar.com/avatar/45ab4d66aead5b0f971f25a65abb7acb?s=26&#038;d=mm&#038;r=g' srcset='http://1.gravatar.com/avatar/45ab4d66aead5b0f971f25a65abb7acb?s=52&amp;d=mm&amp;r=g 2x' class='avatar avatar-26 photo' height='26' width='26' /></a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-user-actions" class="ab-submenu">
		<li id="wp-admin-bar-user-info"><a class="ab-item" tabindex="-1" href="http://life-thewild.com/wp-admin/profile.php"><img alt='' src='http://1.gravatar.com/avatar/45ab4d66aead5b0f971f25a65abb7acb?s=64&#038;d=mm&#038;r=g' srcset='http://1.gravatar.com/avatar/45ab4d66aead5b0f971f25a65abb7acb?s=128&amp;d=mm&amp;r=g 2x' class='avatar avatar-64 photo' height='64' width='64' /><span class='display-name'>life-thewild</span></a>		</li>
		<li id="wp-admin-bar-edit-profile"><a class="ab-item" href="http://life-thewild.com/wp-admin/profile.php">プロフィールを編集</a>		</li>
		<li id="wp-admin-bar-logout"><a class="ab-item" href="http://life-thewild.com/wp-login.php?action=logout&#038;_wpnonce=7f49f7565d">ログアウト</a>		</li></ul></div>		</li></ul>			</div>
						<a class="screen-reader-shortcut" href="http://life-thewild.com/wp-login.php?action=logout&#038;_wpnonce=7f49f7565d">ログアウト</a>
					</div>

		            <!-- はてブシェアボタン用スクリプト -->
<script type="text/javascript" src="//b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.6";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

 </body>
</html>
