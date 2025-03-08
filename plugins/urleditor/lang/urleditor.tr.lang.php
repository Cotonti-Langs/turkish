<?php
/**
 * URL yönetim aracı için İngilizce Dil Dosyası
 *
 * @package URLEditor
 * @copyright (c) Cotonti Team
 * @license https://github.com/Cotonti/Cotonti/blob/master/License.txt
 */

defined('COT_CODE') or die('Yanlış URL.');

$L['adm_urls'] = 'URL\'ler';
$L['adm_urls_area'] = 'Alan';
$L['adm_urls_custom_htaccess'] = 'Özel .htaccess kuralları';
$L['adm_urls_error_dat'] = 'Hata: datas/urltrans.dat yazılabilir değil! Lütfen oluşturun ve CHMOD 666 yapın.';
$L['adm_urls_format'] = 'Format';
$L['adm_urls_htaccess'] = '.htaccess\'i üzerine yaz?';
$L['adm_urls_new'] = 'Yeni Kural';
$L['adm_urls_parameters'] = 'Parametreler';
$L['adm_urls_rules'] = 'URL Dönüşüm Kuralları';
$L['adm_urls_save'] = 'Kaydet';
$L['adm_urls_your'] = 'Sizin';
$L['adm_urls_callbacks'] = 'Kural geri çağrılar içeriyor';
$L['adm_urls_errors'] = 'Onlar için yeniden yazma seçeneklerini elle eklemeniz gerekecek.';
$L['adm_help_urls'] = "Bu sayfada basit URL Dönüşüm Kuralları kullanarak URL'lerinizi özelleştirebilirsiniz. Lütfen kuralların doğru olduğundan ve mükerrer kural olmadığından emin olun. Kurallarda boşluk, tab ve diğer özel karakterleri kullanmayın. Bölümler ve parametreler aşağıda açıklanmıştır.\n<ol>\n<li><strong>Alan</strong>, kuralın ait olduğu betik adıdır. (*) metasembolü \"herhangi bir betik\" anlamına gelir.</li>\n<li><strong>Parametreler</strong>, URL parametreleriyle eşleşen bir koşuldur. Bu, & ve = işaretleriyle ayrılan isim-değer çiftlerini içeren bir dizedir ve parametre adı ile değeri arasında = işareti kullanılır. Başına ? işareti koymanıza gerek yoktur. Burada bir değişken belirtiyorsanız, bu değişkenin URL'de bulunması gerekir. * (yıldız) \"herhangi bir değer\" anlamına gelir, tek bir değer veya | işareti ile ayrılmış değer listesi kullanabilirsiniz. Tüm değerler urlencode edilmelidir. <em>Örnek: name=Val|Josh&amp;id=124&amp;page=*</em>.</li>\n<li><strong>Format</strong>, bu kural ile eşleşen URL'lerin formatını ayarlar. Bu, özel dizeleri içerip yerlerine değerlerinin konulacağı bir dizedir. Normal bir dize, URL parametresi (GET değişkeni) adını süslü parantezler içinde içerir: {\$name} (veya gerekmediğinde {!\$name}). Aşağıda URL parametrelerinden farklı bazı özel dizeler bulunuyor (\"sorgu dizesi\"):\n<ul>\n<li><em>{\$_area}</em> - betik adı;</li>\n<li><em>{\$_host}</em> - site Ana URL'nizin ana makine adı;</li>\n<li><em>{\$_rhost}</em> - geçerli HTTP isteğinden ana makine adı;</li>\n<li><em>{\$_path}</em> - sitenizin sunucuya göre yolu, site kökünde ise /.</li>\n</ul>\nAyrıca parametreli alt alan adları da kullanabilirsiniz. Örneğin: <em>http://{\$c}.site.com/{\$al}.html</em>. Şu anda alt alan adları yalnızca Apache sunucular için desteklenmektedir.</li>\n<li><strong>Yeni Kural</strong>, tabloya yeni bir kural satırı ekler.</li>\n<li><strong>Sıralama</strong> - Unutmayın ki tablo içindeki kural sırası önemlidir. URL Dönüşüm algoritması bir bağlantıya kural ararken şu şekilde ilerler: önce alan için tanımlı tüm kuralları alır, ardından parametre koşuluyla eşleşen <em>ilk</em> kuralı bulmaya çalışır; eğer eşleşen kural bulunamazsa * alanına döner ve oradaki ilk eşleşen kuralı arar. Varsayılan kuralınızın (* alan ve * parametreler) tablodaki en son *-alan kuralı ya da tablodaki en son kural olması tavsiye edilir.<br />\nSatırları sürükleyip istediğiniz konuma bırakarak kural sırasını değiştirebilirsiniz. Yeni kuralları kaydettikten sonra sürükle-bırak ile sıralamayı değiştirmeniz tavsiye edilir.</li>\n<li><strong>Sorgu Dizesi</strong> genellikle çoğu bağlantıda soru işaretinden sonra gördüğünüz bölümdür. Format dizesinde kullanmadığınız GET parametrelerini aktarmak için otomatik olarak eklenir.</li>\n<li><strong>Kaydet</strong> düğmesi kuralları kaydeder ve değişiklikleri hemen uygular. Ayrıca .htaccess (yazılabilir ise) üzerine değişiklikleri uygular ve sunucu türünüze bağlı olarak size .htaccess/IsapiRewrite4.ini/nginx.conf dosyalarını sağlar.</li>\n</ol>";

$L['cfg_preset'] = 'URL Önayarları';
$L['cfg_preset_params'] = 'handy: Kullanışlı, compat: Genoa/Seditio uyumlu, custom: Özel urltrans.dat, none: Devre Dışı';
$L['info_desc'] = 'SEF URL\'leri etkinleştiren URL dönüşümlerini önayarlar aracılığıyla sağlar';
