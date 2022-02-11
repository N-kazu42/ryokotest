<?php
function register_cpts($name, $label, $options = array()) {
  $labels = array(
    "name"               => $label,
    "singular_name"      => $label,
    'add_new'            => '新規追加',
    'add_new_item'       => $label.'を新規追加',
    'edit_item'          => $label.'を編集する',
    'new_item'           => '新規の'.$label,
    'all_items'          => $label.'一覧',
    'view_item'          => $label.'をプレビュー',
    'search_items'       => '検索する',
    'not_found'          => $label.'が見つかりませんでした。',
    'not_found_in_trash' => 'ゴミ箱内に'.$label.'が見つかりませんでした。',
  );

  $args = array(
    "labels"              => $labels,
    "description"         => "",
    "public"              => true,
    "show_ui"             => true,
    "has_archive"         => true,
    "show_in_menu"        => true,
    "exclude_from_search" => false,
    "capability_type"     => "post",
    "map_meta_cap"        => true,
    "hierarchical"        => false,
    "rewrite"             => array(
      "slug" => $name,
      "with_front" => true
    ),
    "query_var"           => true,
    "supports"            => array(
      "title",
      "editor",
      "author",
      "post-formats"
    )
  );
  $args = array_merge($args, $options);
  register_post_type( $name, $args );
}
function register_taxes($post_types, $name, $label, $options = array()) {
  $labels = array(
    "name"  => $label,
    "label" => $label,
		'name'                       => $label, //複数系のときのタグ名
		'singular_name'              => $label, //単数系のときのタグ名
		'search_items'               => $label.'を検索',
		'all_items'                  => '全ての'.$label,
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => $label.'を編集',
		'update_item'                => $label.'を更新',
		'add_new_item'               => '新規'.$label.'を追加',
		'new_item_name'              => '新規'.$label,
		'separate_items_with_commas' => $label.'をコンマで区切る',
		'add_or_remove_items'        => $label.'を追加or削除する',
		'choose_from_most_used'      => 'よく使われている'.$label.'から選択',
		'not_found'                  => 'アイテムは見つかりませんでした',
		'menu_name'                  => $label,	//ダッシュボードのサイドバーメニュー名
  );

  $args = array(
    "labels"                => $labels,
    "hierarchical"          => true,
    "show_ui"               => true,
    "query_var"             => true,
    "rewrite"               => array( 'slug' => $name, 'with_front' => true ),
    "update_count_callback" => null,
    "show_admin_column"     => false,
  );
  $args = array_merge($args, $options);
  register_taxonomy( $name, $post_types, $args );
  register_taxonomy_for_object_type( $name, $post_types );
}
