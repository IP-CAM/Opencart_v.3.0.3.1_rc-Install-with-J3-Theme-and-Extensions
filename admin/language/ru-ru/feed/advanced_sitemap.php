<?php
// Русский перевод модуля от Alexius http://alexius.esy.es/

// Heading
if (file_exists(DIR_APPLICATION . 'model/tool/seo_package.php')) {
  $_['heading_title']	= '<img src="view/seo_package/img/icon.png" style="vertical-align:top;padding-right:4px"/> <b style="color:#11b209">SEO Package</b> <b style="color:#555">Карта сайта</b>';
} else {
  $_['heading_title'] = '<i class="fa fa-sitemap" style="color:#11b209"></i> <b>Продвинутый</b> <b style="color:#11b209">Генератор карты сайта</b>';
}

// Text 
$_['text_feed'] = 'Лента товара';
$_['text_add_feed'] = 'Новая лента';
$_['text_success'] = 'Отлично: опции сохранены';
$_['text_info'] = 'Этот файл Sitemap не содержит дубликатов и интегрирует тег hreflang, если он включен в параметрах seo package.';
$_['text_minute'] = 'Минут(ы)';
$_['text_hour'] = 'Час(ы)';
$_['text_day'] = 'Дни(дней)';
$_['entry_data_feed']	= 'Полная лента:<span class="help">Канал, содержащий все языки с использованием тега hreflang (hreflang должен быть включен в полном варианте seo)</span>';
$_['entry_lang_feed']	= 'Каналы, основанные на языке:<span class="help">Используйте если разные языкм</span>';
$_['entry_grid_feed']	= 'Канал сетки товара:<span class="help">Сетка миниатюр продукта</span>';

// Tabs
$_['text_tab_0'] = 'Карта сайта';
$_['tab_opt_1'] = 'Конфигурация канала';
$_['tab_opt_2'] = 'Расширенные опции';
$_['entry_feed_title'] = 'Имя:';
$_['entry_cache_delay'] = 'Задержка с кешем';
$_['entry_cache_delay_help'] = 'Как долго отображать сгенерированный файл до перегенерации ?';
$_['entry_language'] = 'Язык:<span class="help"></span>';
$_['entry_feed_url'] = 'Ссылка карты сайта:<span class="help">Используйте эту ссылку для google или bing</span>';

$_['text_tab_1'] = 'Пользовтаельские ссылки';

// Configuration
$_['text_tab_2'] = 'Конфигурация';

$_['text_link_type'] = 'Тип ссылки';
$_['text_type_product'] = 'Товар';
$_['text_type_category'] = 'Категория';
$_['text_type_manufacturer'] = 'Бренд';
$_['text_type_information'] = 'Информация';
$_['text_type_custom'] = 'Пользовтаельские ссылки';
$_['text_type_journal'] = 'Journal блог';

$_['entry_status'] = 'Статус';
$_['entry_priority'] = 'Приоритет';
$_['entry_freq'] = 'Частота обновления';
$_['entry_in_stock'] = 'Включать только товары в наличии:<span class="help">Если отключено все продукты включены, если включен только продукт с количеством >= 1</span>';
$_['entry_item_no'] = 'Количество элементов на xml:<span class="help">Сколько URL-адресов вы хотите отображать в каждом XML-файле, по умолчанию - 500';
$_['entry_friendly_url'] = 'ЧПУ :<span class="help">Отображает ссылку на карту сайта в виде http://example.com/sitemap.xml вместо дефолтной опенкартовской карты сайта</span>';
$_['entry_display_img'] = 'Отображать миниатюру изображения в фиде:<span class="help">Это только для просмотра, изображение по-прежнему включено в поисковые системы</span>';
$_['entry_additional_img'] = 'Включать дополнительные картинки:<span class="help">Включает в канал дополнительные картинки товара. Это для того чтоб ваши картинки попали в google image search</span>';

$_['text_freq_always'] = 'Всегда';
$_['text_freq_hourly'] = 'В час';
$_['text_freq_daily'] = 'В день';
$_['text_freq_weekly'] = 'В неделю';
$_['text_freq_monthly'] = 'В месяц';
$_['text_freq_yearly'] = 'В год';
$_['text_freq_never'] = 'Никогда';

$_['text_tab_about'] = 'Описание';

// Entry

// Error
$_['error_permission'] = 'Ахтунг: У вас нет прав для внесения изменений в SEO Package канал карты сайта!';
?>