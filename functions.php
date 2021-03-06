<?php //子テーマ用関数

//親skins の取得有無の設定
function include_parent_skins(){
  return true; //親skinsを含める場合はtrue、含めない場合はfalse
}

//子テーマ用のビジュアルエディタースタイルを適用
add_editor_style();

//以下にSimplicity子テーマ用の関数を書く

//投稿1枚目の画像をサムネイルに
function catch_that_image() {
global $post, $posts;
$first_img = '';
ob_start();
ob_end_clean();
$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/', $post->post_content, $matches);
$first_img = $matches [1][0];

if(empty($first_img)){ //Defines a default image
	$first_img = "http://life-thewild.com/wp-content/uploads/2016/09/thum.jpg";
}
return $first_img;
}

//アイキャッチ画像サイズの関数
add_image_size('thumb324', 324, 216, true);


//ロゴのcss
function my_custom_login_logo() {
  echo '<style type="text/css">
body #login h1 a { background-size:contain; }
</style>';
}
 add_action('login_head', 'my_custom_login_logo');
