<?php

/**
 * Cotonti CMF için İletişim Eklentisi (Türkçe Yerelleştirme)
 * @copyright (c) Cotonti Takımı
 * @license https://github.com/Cotonti/Cotonti/blob/master/License.txt
 */

defined('COT_CODE') or die('Yanlış URL');

/**
 * Eklenti Ayarları
 */

$L['cfg_email'] = 'E-posta';
$L['cfg_email_hint'] = '(Admin e-postasını kullanmak için boş bırakın)';
$L['cfg_minchars'] = 'Mesaj için minimum karakter sayısı';
$L['cfg_map'] = 'Harita';
$L['cfg_about'] = 'Hakkında';
$L['cfg_save'] = 'Kayıt yöntemi';
$L['cfg_save_params'] = 'e-posta,veritabanı,e-posta + veritabanı';
$L['cfg_template'] = 'E-posta şablonu';
$L['cfg_template_hint'] = 'Kullanılabilir değişkenler: {$sitetitle}, {$siteurl}, {$author}, {$email}, {$subject}, {$text}, {$extra}, {$extraXXXX}, {$extraXXXX_title}';
$L['info_desc'] = 'Kullanıcıların geri bildirimlerini e-posta ile gönderen ve veritabanına kaydeden iletişim formu';

/**
 * Yönetici Bölümü
 */

$L['contact_view'] = 'Mesajı görüntüle';
$L['contact_markread'] = 'Okundu olarak işaretle';
$L['contact_read'] = 'Okundu';
$L['contact_markunread'] = 'Okunmadı olarak işaretle';
$L['contact_unread'] = 'Okunmadı';
$L['contact_new'] = 'yeni mesaj';
$L['contact_shortnew'] = 'yeni';
$L['contact_sent'] = 'Son yanıt';
$L['contact_nosubject'] = 'Konu yok';

/**
 * Eklenti Başlığı ve Alt Başlık
 */

$L['contact_title'] = 'İletişim';
$L['contact_subtitle'] = 'İletişim bilgileri';

/**
 * Eklenti İçeriği
 */

$L['contact_headercontact'] = 'İletişim';
$Ls['contact_headercontact'] = "iletişim mesajı,iletişim mesajları";
$L['contact_entrytooshort'] = 'Mesaj çok kısa veya eksik';
$L['contact_noname'] = 'İsim belirtilmemiş';
$L['contact_emailnotvalid'] = 'Geçersiz e-posta adresi';
$L['contact_message_sent'] = 'Mesajınız gönderildi';
