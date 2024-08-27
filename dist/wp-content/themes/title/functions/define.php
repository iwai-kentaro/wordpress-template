<?php

/**
 *  定数:定数はここに全部書いてください
 *  定数名は単語毎「_」区切りで全て大文字にすること
 *  使用方法のコメントを必ず残すこと
 * // home url
 * define('HOME_URL', home_url('/'));
 * // テーマディレクトリまでのパス
 * define('ITEM_URL', get_stylesheet_directory_uri() . '/');
 * // ノーイメージパス
 * define('NOIMAGE', ITEM_URL . 'assets/images/noimage.png');
 * //css,js等のアセットへのパス
 * define('ASSETS_DIR', get_stylesheet_directory_uri() . '/assets/');
 * //staticsへのパス
 * define('STATICS_DIR', get_stylesheet_directory_uri() . '/statics/');
 */

// デバッグモードならエラーを表示する
// if (defined('WP_DEBUG') && WP_DEBUG) {
//     ini_set('display_errors', 1);
// }

// define('AUTOMATIC_UPDATER_DISABLED', true);
// define('DISALLOW_FILE_EDIT', true);

// home url

// テーマディレクトリまでのパス

// ノーイメージパス

//css,js等のアセットへのパス
//アセットへのパス
define("ASSETS_DIR", get_stylesheet_directory_uri() . "/assets/");
// css
define("AST_CSS", get_stylesheet_directory_uri() . "/assets/css/");
// js
define("AST_JS", get_stylesheet_directory_uri() . "/assets/js/");
// img
define("AST_IMG", get_stylesheet_directory_uri() . "/assets/img/");
// ダミーサムネイル
define("AST_DUMMYTHUMB", get_stylesheet_directory_uri() . "/assets/img/global/no_img.jpg");
define("AST_DUMMYTHUMBWEBP", get_stylesheet_directory_uri() . "/assets/img/global/no_img.webp");
//staticsへのパス

//URL
// TOPページ
define("URL_TOP", get_home_url(""));

// 外部URL

// date
define("DATE_DISPLAY", ("Y.m.d"));
define("DATE_ISO", ("Y-m-d"));