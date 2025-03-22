<?php
/**
 * Ziyaretçi Sayacı Eklentisi için Türkçe Dil Dosyası
 *
 * @package Hits
 * @copyright (c) Cotonti Takımı
 * @license https://github.com/Cotonti/Cotonti/blob/master/License.txt
 */

defined('COT_CODE') or die('Yanlış URL.');

/**
 * Eklenti Ayarları
 */

$L['cfg_adminhits'] = 'Yönetici ziyaretlerini say';
$L['cfg_timeback'] = 'İstatistik toplama süresi';
$L['cfg_timeback_hint'] = '(gün olarak)';
$L['cfg_disableactivitystats'] = 'Belirtilen dönem için aktivite istatistiklerini gösterme';
$L['cfg_disableactivitystats_hint'] = '(yönetim panelinin ana sayfasında görüntülenir)';
$L['cfg_hit_precision'] = 'Optimize edilmiş ziyaret sayacı hassasiyeti';
$L['cfg_hit_precision_hint'] = '(daha büyük değerler sunucu yükünü azaltır)';

/**
 * Eklenti Başlığı ve Açıklama
 */
$L['hits'] = isset($L['hits']) ? $L['hits'] : 'Ziyaretler'; // bkz. lang/ru/main.en.lang.php
$L['info_desc'] = 'Küçük siteler için önerilen basit ziyaretçi istatistikleri';

/**
 * Eklenti İçeriği
 */

$L['hits_maxhits'] = 'Maksimum ziyaret sayısına %1$s tarihinde ulaşıldı, bu gün %2$s sayfa görüntülendi.';

$L['hits_byyear'] = 'Yıllık';
$L['hits_bymonth'] = 'Aylık';
$L['hits_byweek'] = 'Haftalık';

$L['hits_hits'] = 'Son {$days} gün içindeki ziyaretler';
$L['hits_activity'] = 'Son {$days} gün içindeki aktivite';
