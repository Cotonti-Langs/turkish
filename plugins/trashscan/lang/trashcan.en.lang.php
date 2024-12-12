<?php
/**
 * Çöp Kutusu için İngilizce Dil Dosyası (Aslında Türkçe Çeviri)
 *
 * @package TrashCan
 * @copyright (c) Cotonti Team
 * @license https://github.com/Cotonti/Cotonti/blob/master/License.txt
 */

defined('COT_CODE') or die('Yanlış URL.');

$L['Trash'] = 'Çöp';
$L['Trashcan'] = 'Çöp Kutusu';
$L['core_trash'] = &$L['Trashcan'];

/**
 * Yapılandırma Bölümü
 * Çöp Kutusu Alt Bölümü
 */

$L['cfg_trash_forum'] = 'Forumlar için çöp kutusunu kullan';
$L['cfg_trash_forum_hint'] = '';
$L['cfg_trash_page'] = 'Sayfalar için çöp kutusunu kullan';
$L['cfg_trash_page_hint'] = '';
$L['cfg_trash_pm'] = 'Özel mesajlar için çöp kutusunu kullan';
$L['cfg_trash_pm_hint'] = '';
$L['cfg_trash_prunedelay'] = 'Öğeleri * gün sonra çöp kutusundan kaldır (Sonsuza kadar tutmak için sıfır girin)';
$L['cfg_trash_prunedelay_hint'] = '';
$L['cfg_trash_user'] = 'Kullanıcılar için çöp kutusunu kullan';
$L['cfg_trash_user_hint'] = '';
$L['cfg_trash_comment'] = 'Yorumlar için çöp kutusunu kullan';
$L['cfg_trash_comment_hint'] = '';

$L['info_desc'] = 'Gelecekte gerekirse kurtarmak için öğeleri silerken çöp kutusuna atar';

/**
  * Çöp Kutusu Bölümü
 */

$L['adm_help_trashcan'] = "Burada kullanıcılar ve moderatörler tarafından yakın zamanda silinen öğeler listelenir.<br />\nTamamen Sil (Wipe): Öğeyi kalıcı olarak siler<br />\nGeri Yükle (Restore): Öğeyi canlı veritabanına geri getirir<br />\n<b>Not</b>:<br />\n- Bir forum konusunu geri yüklemek, konuya ait tüm mesajları da geri yükler<br />\n- Silinmiş bir konudaki bir mesajı geri yüklemek, varsa tüm konuyu ve altındaki tüm mesajları da geri yükler.<br />";
$L['adm_trashcan_deleted'] = 'Öğe silindi';
$L['adm_trashcan_prune'] = 'Çöp kutusu boşaltıldı';
$L['adm_trashcan_restored'] = 'Öğe geri yüklendi';
