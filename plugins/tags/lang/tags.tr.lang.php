<?php
/**
 * Tags Eklentisi için Türkçe Dil Dosyası
 *
 * @package Tags
 * @copyright (c) Cotonti Team
 * @license https://github.com/Cotonti/Cotonti/blob/master/License.txt
 */

defined('COT_CODE') or die('Yanlış URL.');

/**
 * Eklenti Bilgisi
 */

$L['info_desc'] = 'Etiketleri etkinleştirir - site içeriği için anahtar kelimeler, etiket bulutu, etiket arama ve API';

/**
 * Eklenti Başlık & Alt Başlık
 */

$L['plu_title'] = 'Etiketler';

/**
 * Eklenti Gövdesi
 */
$L['tags_All'] = 'Tüm etiketler';
$L['tags_comma_separated'] = 'virgülle ayrılmış';
$L['tags_delete_confirm'] = '"{$tag}" etiketi ile ilişkili {$count} öğe var. Silmeyi onaylayın.';
$L['tags_tag_deleted'] = '"{$tag}" etiketi kaldırıldı';
$L['tags_Found_in_forums'] = 'Forumlarda bulundu';
$L['tags_Found_in_pages'] = 'Sayfalarda bulundu';
$L['tags_Keyword'] = 'Anahtar Kelime';
$L['tags_Keywords'] = 'Anahtar Kelimeler';
$L['tags_Orderby'] = 'Sonuçları sırala';
$L['tags_Query_hint'] = 'Virgülle ayrılmış birden fazla etiket, aralarında mantıksal VE (AND) olarak değerlendirilir. Noktalı virgül, mantıksal VEYA (OR) olarak kabul edilir. AND, OR üzerinde önceliğe sahiptir ve mantıksal gruplama için parantez kullanılamaz. Bir etiketteki yıldız (*) işareti, "herhangi bir dize" anlamında bir joker karakterdir.';
$L['tags_Search_results'] = 'Arama Sonuçları';
$L['tags_Search_tags'] = 'Etiket Ara';
$L['tags_Tag_cloud'] = 'Etiket Bulutu';
$L['tags_Tag_cloud_none'] = 'Etiket yok';
$L['tags_tag_edited'] = 'Etiket düzenlendi';
$L['tags_tag_exists'] = 'Etiket zaten mevcut';
$L['tags_length'] = 'Uzunluk';
$L['adm_tag_item_area'] = 'Öge alanı etiket';

/**
 * Eklenti Ayarları
 */
$L['cfg_forums'] = 'Forumlarda etiketleri etkinleştir';
$L['cfg_index'] = 'Anasayfada etiket bulutu alanı';
$L['cfg_index_params'] = 'pages: Sayfalar, forums: Forumlar, all: Hepsi';
$L['cfg_limit'] = 'Öge başına maksimum etiket sayısı, sınırsız için 0';
$L['cfg_limit_hint'] = 'Sınırsız için 0';
$L['cfg_lim_forums'] = 'Forum etiket bulutu için etiket sınırı';
$L['cfg_lim_forums_hint'] = 'Sınırsız için 0';
$L['cfg_lim_index'] = 'Anasayfa (index) etiket bulutu için etiket sınırı, sınırsız için 0';
$L['cfg_lim_index_hint'] = 'Sınırsız için 0';
$L['cfg_lim_pages'] = 'Sayfalar etiket bulutu için etiket sınırı, sınırsız için 0';
$L['cfg_lim_pages_hint'] = 'Sınırsız için 0';
$L['cfg_more'] = 'Etiket bulutlarında "Tüm etiketler" bağlantısını göster';
$L['cfg_noindex'] = 'Arama motoru indeksinden hariç tut';
$L['cfg_order'] = 'Bulut çıktısı sırası';
$L['cfg_order_params'] = 'Alphabetical: Alfabetik, Frequency: Azalan sıklık, Random: Rastgele';
$L['cfg_order_hint'] = 'Alfabetik, azalan sıklık veya rastgele';
$L['cfg_pages'] = 'Sayfalarda etiketleri etkinleştir';
$L['cfg_perpage'] = 'Bağımsız etiket bulutunda sayfa başına gösterilecek etiket sayısı';
$L['cfg_perpage_hint'] = 'Sınırsız için 0';
$L['cfg_sort'] = 'Etiket arama sonuçları için varsayılan sıralama sütunu';
$L['cfg_sort_params'] = 'ID: ID, Title: Başlık, Date: Tarih, Category: Kategori';
$L['cfg_title'] = 'Anahtar kelimelerin ilk harflerini büyük yap';
$L['cfg_translit'] = 'URL\'lerde etiketleri translitere et';
$L['cfg_css'] = 'Eklentinin CSS\'ini kullan';
