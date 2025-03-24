<?php
/**
 * Comments Eklentisi için Türkçe Dil Dosyası
 *
 * @package Comments
 * @copyright (c) Cotonti Takımı
 * @license https://github.com/Cotonti/Cotonti/blob/master/License.txt
 */

defined('COT_CODE') or die('Yanlış URL.');

$L['comments_title'] = 'Yorumlar';
$L['comments_description'] = 'Cotonti için sayfa, liste, anket, RSS ve diğer eklentilerle entegre, API destekli yorum sistemi';

/**
 * Eklenti Ayarları
 */
$L['cfg_enable_comments'] = 'Yorumları etkinleştir';
$L['cfg_mail'] = 'Yeni yorumları e-posta ile bildir';
$L['cfg_markitup'] = 'MarkItUp kullan';
$L['cfg_markup'] = 'İşaretlemeyi etkinleştir';
$L['cfg_minsize'] = 'Yorum için minimum uzunluk';
$L['cfg_time'] = 'Kullanıcıların yorum düzenleme süresi';
$L['cfg_time_hint'] = 'dakika cinsinden';
$L['cfg_rss_commentmaxsymbols'] = 'Yorumlar: Açıklamayı N karakterden sonra kes';
$L['cfg_rss_commentmaxsymbols_hint'] = 'Varsayılan olarak devre dışıdır';
$L['cfg_expand_comments'] = 'Yorumları genişlet';
$L['cfg_expand_comments_hint'] = 'Yorumları varsayılan olarak açık göster';
$L['cfg_maxcommentsperpage'] = 'Sayfa başına maksimum yorum sayısı';
$L['cfg_maxcommentsperpage_hint'] = ' ';
$L['cfg_commentsize'] = 'Yorumun maksimum boyutu (byte)';
$L['cfg_commentsize_hint'] = 'Limitsiz için 0 girin';
$L['cfg_countcomments'] = 'Yorum sayısını göster';
$L['cfg_countcomments_hint'] = 'İkonun yanında yorum sayısını görüntüler';
$L['cfg_order'] = 'Sıralama düzeni';
$L['cfg_order_hint'] = 'Kronolojik veya önce en yeniler';
$L['cfg_order_params'] = 'Kronolojik,En yeni';
$L['cfg_parsebbcodecom'] = 'Yorumlarda BBcode ayrıştır';
$L['cfg_parsebbcodecom_hint'] = '';
$L['cfg_parsesmiliescom'] = 'Yorumlarda ifadeleri (smilies) ayrıştır';
$L['cfg_parsesmiliescom_hint'] = '';

/**
 * Eklenti İçeriği
 */
$L['comments_comment'] = 'Yorum';
$L['comments_comments'] = 'Yorumlar';
$L['comments_commentOn'] = 'Şunun üzerine yorum:';
$L['comments_commentOnPage'] = 'Sayfaya yorum yap';
$L['comments_commentOnPoll'] = 'Ankete yorum yap';
$L['comments_confirm_delete'] = 'Bu yorumu gerçekten silmek istiyor musunuz?';
$L['Newcomment'] = 'Yeni yorum';

$L['comm_on_page'] = 'sayfada';

$L['com_closed'] = 'Bu öğe için yorum ekleme devre dışıdır';
$L['com_commentadded'] = 'Başarılı, yorum eklendi';
$L['com_commenttoolong'] = 'Yorum çok uzun';
$L['com_commenttooshort'] = 'Yorum çok kısa veya boş bırakılmış';
$L['com_nocommentsyet'] = 'Henüz yorum yapılmamış';
$L['com_authortooshort'] = 'Yorumcu ismi çok kısa';
$L['com_regonly'] = 'Yalnızca kayıtlı kullanıcılar yorum yapabilir';

$L['plu_comgup'] = ' kaldı';
$L['com_edithint'] = 'Yorumunuzu {$time} süre boyunca düzenleyebilirsiniz';

$L['plu_comlive'] = 'Sitemizde yeni yorum';
$L['plu_comlive1'] = 'Sitede yorum düzenlendi';
$L['plu_comlive2'] = 'şu yorumu yaptı: ';
$L['plu_comlive3'] = 'şu yorumu düzenledi: ';
$L['rss_comments'] = 'Yorumlar:';
$L['rss_comment_of_user'] = 'Şu kullanıcının yorumu:';
$L['rss_comments_item_desc'] = 'Sayfadaki son yorumlar';
$L['rss_original'] = 'Orijinal mesaj';

/**
 * Yönetici Bölümü
 */
$L['home_newcomments'] = 'Yeni yorumlar';
$L['core_comments'] = &$L['comments_comments'];
$L['adm_comm_already_del'] = 'Yorum silindi';

/**
 * cot_declension Dizileri
 */
$Ls['Comments'] = "yorum,yorum";
