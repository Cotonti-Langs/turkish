<?php
/**
 * Sitemap Eklentisi için Türkçe Dil Dosyası
 *
 * @package SiteMap
 * @copyright (c) Cotonti Team
 * @license https://github.com/Cotonti/Cotonti/blob/master/License.txt
 */

defined('COT_CODE') or die('Yanlış URL.');

$L['sitemap_title'] = 'XML-site haritası';
$L['info_desc'] = 'Arama motorları için içerik verileri içeren XML-site haritası';

$sitemap_freqs = [
	'default' => 'Varsayılan',
	'always'  => 'Her zaman',
	'hourly'  => 'Saatlik',
	'daily'   => 'Günlük',
	'weekly'  => 'Haftalık',
	'monthly' => 'Aylık',
	'yearly'  => 'Yıllık',
	'never'   => 'Asla',
];

$L['cfg_cache_ttl']          = 'Önbellek yaşam süresi';
$L['cfg_freq']               = 'Varsayılan güncelleme sıklığı';
$L['cfg_freq_params']        = $sitemap_freqs;
$L['cfg_prio']               = 'Varsayılan öncelik';
$L['cfg_perpage']            = 'Site haritası sayfası başına maksimum öğe sayısı';
$L['cfg_perpage_hint']       = 'Daha fazla bağlantı varsa, site haritası bölümlere ayrılır, bakınız: https://siteniz/index.php?r=sitemap&a=index';
$L['cfg_indexSep'] = 'Anasayfa';
$L['cfg_index_freq']         = 'Anasayfa güncelleme sıklığı';
$L['cfg_index_freq_params']  = $sitemap_freqs;
$L['cfg_index_prio']         = 'Anasayfa önceliği';
$L['cfg_pageSep'] = 'Sayfalar';
$L['cfg_page']               = 'Sayfaları etkinleştir';
$L['cfg_page_freq']          = 'Sayfa güncelleme sıklığı';
$L['cfg_page_freq_params']   = $sitemap_freqs;
$L['cfg_page_prio']          = 'Sayfa önceliği';
$L['cfg_forumsSep'] = 'Forumlar';
$L['cfg_forums']             = 'Forumları etkinleştir';
$L['cfg_forums_freq']        = 'Forum güncelleme sıklığı';
$L['cfg_forums_freq_params'] = $sitemap_freqs;
$L['cfg_forums_prio']        = 'Forum önceliği';
$L['cfg_usersSep'] = 'Kullanıcılar';
$L['cfg_users']              = 'Kullanıcıları etkinleştir';
$L['cfg_users_freq']         = 'Kullanıcı güncelleme sıklığı';
$L['cfg_users_freq_params']  = $sitemap_freqs;
$L['cfg_users_prio']         = 'Kullanıcı önceliği';
