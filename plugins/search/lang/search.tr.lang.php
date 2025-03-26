<?php
/**
 * Search Eklentisi için Türkçe Dil Dosyası
 *
 * @package Search
 * @copyright (c) Cotonti Takımı
 * @license https://github.com/Cotonti/Cotonti/blob/master/License.txt
 */

defined('COT_CODE') or die('Hatalı URL.');

/**
 * Eklenti Başlığı ve Alt Başlığı
 */

$L['plu_search'] = 'Arama';

/**
 * Eklenti Gövdesi
 */

// Genel - başlık, bilgi, sorgu
$L['plu_search_req'] = 'Sorgu';
$L['plu_search_key'] = 'Bul';
$L['plu_search_forums'] = 'Forumlarda ara';
$L['plu_search_pages'] = 'Sayfalarda ara';

// Sekmeler ve sonuç başlıkları
$L['plu_tabs_all'] = 'Tümü';
$L['plu_tabs_frm'] = 'Forumlar';
$L['plu_tabs_pag'] = 'Sayfalar';

// Ortak parametreler
$L['plu_ctrl_list'] = 'Birden fazla bölüm seçmek için CTRL tuşunu basılı tutun';
$L['plu_allsections'] = 'Tüm bölümler';
$L['plu_allcategories'] = 'Tüm kategoriler';
$L['plu_res_sort'] = 'Sonuçları sırala';
$L['plu_sort_desc'] = 'Azalan';
$L['plu_sort_asc'] = 'Artan';
$L['plu_other_opt'] = 'Diğer seçenekler';
$L['plu_other_date'] = 'Tarih dahil';
$L['plu_other_userfilter'] = 'Kullanıcı filtresi';

// Tarih parametreleri
$L['plu_any_date'] = 'Tüm tarihler';
$L['plu_last_2_weeks'] = 'Son 2 hafta';
$L['plu_last_1_month'] = 'Son 1 ay';
$L['plu_last_3_month'] = 'Son 3 ay';
$L['plu_last_1_year'] = 'Son 1 yıl';
$L['plu_need_datas'] = 'Özel aralık';

// Forum parametreleri
$L['plu_frm_set_sec'] = 'Forum bölümlerini seç';
$L['plu_frm_res_sort1'] = 'Konu güncellendi';
$L['plu_frm_res_sort2'] = 'Konu başlatıldı';
$L['plu_frm_res_sort3'] = 'Konu başlığı';
$L['plu_frm_res_sort4'] = 'Yanıt sayısı';
$L['plu_frm_res_sort5'] = 'Görüntülenme sayısı';
$L['plu_frm_res_sort6'] = 'Bölüm';
$L['plu_frm_search_names'] = 'Konu başlıklarında ara';
$L['plu_frm_search_post'] = 'Gönderilerde ara';
$L['plu_frm_search_answ'] = 'Sadece yanıtlanmış konuları göster';
$L['plu_frm_set_subsec'] = 'Alt bölümleri dahil et';

// Sayfa parametreleri
$L['plu_pag_set_sec'] = 'Sayfa kategorilerini seç';
$L['plu_pag_res_sort1'] = 'Yayınlanma tarihi';
$L['plu_pag_res_sort2'] = 'Başlık';
$L['plu_pag_res_sort3'] = 'Popülerlik';
$L['plu_pag_res_sort4'] = 'Kategori';
$L['plu_pag_search_names'] = 'Sayfa başlıklarında ara';
$L['plu_pag_search_desc'] = 'Sayfa açıklamalarında ara';
$L['plu_pag_search_text'] = 'Sayfa içeriğinde ara';
$L['plu_pag_search_file'] = 'Sadece dosya içeren sayfaları göster';
$L['plu_pag_set_subsec'] = 'Alt kategorileri dahil et';

// Hata mesajları
$L['plu_querytooshort'] = 'Arama sorgusu çok kısa';
$L['plu_toomanywords'] = 'Çok fazla kelime, sınır:';
$L['plu_noneresult'] = 'Hiçbir sonuç bulunamadı. Lütfen sorgunuzu basitleştirin.';
$L['plu_usernotexist'] = 'Kullanıcı mevcut değil';

// Sonuçlar
$L['plu_result'] = 'Arama sonuçları';
$L['plu_found'] = 'Bulundu';
$L['plu_match'] = 'eşleşme';
$L['plu_section'] = 'Bölüm';
$L['plu_last_date'] = 'Güncellenme tarihi';

/**
 * Eklenti Ayarları
 */

$L['cfg_maxwords'] = 'Arama sorgusundaki maksimum kelime sayısı';
$L['cfg_maxsigns'] = 'Arama sorgusundaki maksimum karakter sayısı';
$L['cfg_maxitems'] = 'Normal arama sonuçlarındaki maksimum öğe sayısı';
$L['cfg_minsigns'] = 'Sorgudaki minimum karakter sayısı';
$L['cfg_pagesearch'] = 'Sayfa aramasını etkinleştir';
$L['cfg_forumsearch'] = 'Forum aramasını etkinleştir';
$L['cfg_searchurl'] = 'Kullanılacak forum bağlantı türü';
$L['cfg_searchurl_hint'] = '“Single” tek gönderi görünümünü kullanır, “Normal” geleneksel konu bağlantısını kullanır';
$L['cfg_addfields'] = 'Sayfa aramasına dahil edilecek ek alanlar (virgülle ayrılmış)';
$L['cfg_addfields_hint'] = 'Örnek: "page_extra1,page_extra2,page_key"';
$L['cfg_extrafilters'] = 'Ana arama sayfasında ek filtreleri göster';

$L['info_desc'] = 'Sayfalar, forumlar ve diğer alanlarda gelişmiş arama.';
