<?php
/**
 * RecentItems Eklentisi için Türkçe Dil Dosyası
 *
 * @package RecentItems
 * @copyright (c) Cotonti Takımı
 * @license https://github.com/Cotonti/Cotonti/blob/master/License.txt
 */

defined('COT_CODE') or die('Hatalı URL.');

/**
 * Eklenti Bilgisi
 */
$L['info_desc'] = 'Ana sayfada son eklenen içerikleri (sayfalar, konular) gösterir';

/**
 * Eklenti Ayarları
 */
$L['cfg_recentpages'] = 'Ana sayfada son sayfalar';
$L['cfg_pagesOrder'] = 'Sayfaları sıralama kriteri';
$L['cfg_pagesOrder_params'] = 'date:Oluşturulma tarihi,begin:Yayınlanma tarihi,updated:Son güncellenme tarihi';
$L['cfg_pagesPeriod'] = 'Gösterilecek sayfa süresi';
$L['cfg_pagesPeriod_params'] = 'all:--,1D:1 gün,2D:2 gün,4D:4 gün,1W:1 hafta,2W:2 hafta,3W:3 hafta,1M:1 ay,'
    . '2M:2 ay,3M:3 ay,4M:4 ay,5M:5 ay,6M:6 ay,7M:7 ay,8M:8 ay,9M:9 ay,1Y:1 yıl';
$L['cfg_maxpages'] = 'Gösterilecek son sayfa sayısı';
$L['cfg_recentforums'] = 'Ana sayfada son forum konuları';
$L['cfg_maxtopics'] = 'Gösterilecek son forum konusu sayısı';
$L['cfg_forumsPeriod'] = 'Gösterilecek konu süresi';
$L['cfg_forumsPeriod_params'] = $L['cfg_pagesPeriod_params'];
$L['cfg_newpages'] = 'Bağımsız modülde son sayfalar';
$L['cfg_newforums'] = 'Bağımsız modülde son forumlar';
$L['cfg_newadditional'] = 'Bağımsız modülde ek modüller';
$L['cfg_itemsperpage'] = 'Bağımsız modülde sayfa başına öğe sayısı';
$L['cfg_rightscan'] = 'Kategori izinlerini ön tarama';
$L['cfg_recentpagestitle'] = 'Son sayfa başlık uzunluğu sınırı';
$L['cfg_recentpagestitle_hint'] = 'Başlangıçtan itibaren yalnızca belirtilen karakter sayısı kadar başlık gösterilir. Varsayılan olarak kesme işlemi devre dışıdır.';
$L['cfg_recentpagestext'] = 'Son sayfa metin uzunluğu sınırı';
$L['cfg_recentpagestext_hint'] = 'Başlangıçtan itibaren yalnızca belirtilen karakter sayısı kadar metin gösterilir. Varsayılan olarak kesme işlemi devre dışıdır.';
$L['cfg_recentforumstitle'] = 'Son forum başlık uzunluğu sınırı';
$L['cfg_recentforumstitle_hint'] = 'Başlangıçtan itibaren yalnızca belirtilen karakter sayısı kadar başlık gösterilir. Varsayılan olarak kesme işlemi devre dışıdır.';
$L['cfg_newpagestext'] = 'Yeni sayfalar metin uzunluğu sınırı';
$L['cfg_newpagestext_hint'] = 'Başlangıçtan itibaren yalnızca belirtilen karakter sayısı kadar metin gösterilir. Varsayılan olarak kesme işlemi devre dışıdır.';
$L['cfg_whitelist'] = 'Kategori beyaz listesi';
$L['cfg_whitelist_hint'] = 'Her satıra bir kod yazın. Eğer boş değilse, yalnızca bu kategoriler listelenir.';
$L['cfg_blacklist'] = 'Kategori kara listesi';
$L['cfg_blacklist_hint'] = 'Her satıra bir kod yazın. Eğer boş değilse, yalnızca bu kategoriler dışlanır.';
$L['cfg_cache_ttl'] = 'Önbellek süresi (TTL)';
$L['cfg_cache_ttl_hint'] = '0 - önbellek kapalı';

/**
 * Eklenti Gövdesi
 */

$L['recentitems_title'] = 'Son İçerikler';
$L['recentitems_forums'] = 'Forumlarda yeni';
$L['recentitems_pages'] = 'Yeni sayfalar';

$L['recentitems_nonewpages'] = 'Yeni sayfa yok';
$L['recentitems_nonewposts'] = 'Yeni gönderi yok';

$L['recentitems_shownew'] = 'Yeni içerikleri göster';
$L['recentitems_fromlastvisit'] = 'son ziyaretimden beri';
$L['recentitems_1day'] = 'dünden beri';
$L['recentitems_2days'] = '2 gündür';
$L['recentitems_3days'] = '3 gündür';
$L['recentitems_1week'] = '1 haftadır';
$L['recentitems_2weeks'] = '2 haftadır';
$L['recentitems_1month'] = '1 aydır';

$L['recentitems_posts'] = 'Yeni gönderi yok';
$L['recentitems_posts_new'] = 'Yeni gönderiler';
$L['recentitems_posts_hot'] = 'Yeni gönderi yok (popüler)';
$L['recentitems_posts_new_hot'] = 'Yeni gönderiler (popüler)';
$L['recentitems_posts_sticky'] = 'Sabit';
$L['recentitems_posts_new_sticky'] = 'Yeni gönderiler (sabit)';
$L['recentitems_posts_locked'] = 'Kilitli';
$L['recentitems_posts_new_locked'] = 'Yeni gönderiler (kilitli)';
$L['recentitems_posts_sticky_locked'] = 'Duyuru';
$L['recentitems_posts_new_sticky_locked'] = 'Yeni duyuru';
$L['recentitems_posts_moved'] = 'Bu bölümden taşındı';
