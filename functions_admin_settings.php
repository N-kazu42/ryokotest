<?php
/*
 * カスタム投稿タイプ
 */
function register_my_cpts(){
  register_cpts( "event", "イベント", array( 'supports' => array( "title", 'editor', 'author' )) );
}
add_action( 'init', 'register_my_cpts');

/*
 * カスタムタクソノミー
 */
function register_my_taxes(){
  register_taxes("event", "kinds", "イベントカテゴリ");
}
add_action( 'init', 'register_my_taxes');

// カスタム投稿タイプでカテゴリ未選択時にデフォルトで hold を設定
function add_defaultcategory_automatically($post_ID) {
  global $wpdb;
  // 設定されているカスタム分類のタームを取得
  $current_term = wp_get_object_terms($post_ID, 'kinds');
  // 既存のターム指定数が 0（つまり未設定）であれば）「hold」を指定
  if (0 == count($current_term)) {
      // hold のターム ID
      $term= array(5);
      wp_set_object_terms($post_ID, $term, 'kinds');
  }
}
// event を作成する際に指定
add_action('publish_event', 'add_defaultcategory_automatically');


/*
 * サイドバーの項目を削除
 */
function remove_menus () {
  // 管理者でない場合は、サイドバーの項目を制限する
  if (!current_user_can('administrator')) {
//    remove_menu_page( 'index.php' );               // ダッシュボード
//    remove_menu_page( 'edit.php' );                // 投稿
//    remove_menu_page( 'upload.php' );              // メディア
//    remove_menu_page( 'edit.php?post_type=page' ); // 固定ページ
    remove_menu_page( 'edit-comments.php' );       // コメント
    remove_menu_page( 'themes.php' );              // 外観
    remove_menu_page( 'plugins.php' );             // プラグイン
//    remove_menu_page( 'users.php' );               // ユーザー
    remove_menu_page( 'tools.php' );               // ツール
    remove_menu_page( 'options-general.php' );     // 設定
  }
}
add_action('admin_menu', 'remove_menus');


/*
 * サイドバーの順番を変更
 */
function custom_menu_order($menu_order) {
  if( !$menu_order ) return true;
  
  // 管理者でない場合は、サイドバーの順序を変更する
  if (!current_user_can('administrator')) {
    return array(
        'index.php',               // ダッシュボード
        'separator1',              // 区切り線１
        'edit.php',                // 投稿
        'edit.php?post_type=event',// イベント
        'edit.php?post_type=page', // 固定ページ
//        'edit-comments.php',       // コメント
        'separator2',              // 区切り線２
        'upload.php',              // メディア
//        'link-manager.php',        // リンク
        'users.php',               // ユーザー
//        'themes.php',              // テーマ
//        'plugins.php',             // プラグイン
//        'tools.php',               // ツール
//        'options-general.php',     // 設定
//        'separator-last',          // 区切り線３
    );
  } else {
    return $menu_order;
  }
}
add_filter('custom_menu_order', '__return_true');
add_filter('menu_order', 'custom_menu_order');
?>