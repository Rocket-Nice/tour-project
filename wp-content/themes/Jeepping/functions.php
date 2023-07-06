<?php
/**
 * Добавить всем встраиваемым скриптам вне админки добавить атрибут defer.
 * @param $tag
 * @param $handle
 *
 * @return array|mixed|string|string[]
 */
function add_defer_attribute($tag, $handle)
{
    if (is_admin()) {
        return $tag;
    }

    return str_replace(' src', ' defer="defer" src', $tag);
}

add_filter('script_loader_tag', 'add_defer_attribute', 10, 2);

function disable_emojis()
{
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
    add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
}

add_action('init', 'disable_emojis');


function disable_emojis_tinymce($plugins): array
{
    if (is_array($plugins)) {
        return array_diff($plugins, array('wpemoji'));
    }

    return array();
}

add_action('wp_enqueue_scripts', 'jeepping_wp_scripts', 1000);
function jeepping_wp_scripts()
{
    // отменяем зарегистрированный jQuery
    wp_deregister_script('jquery-core');
    wp_deregister_script('jquery');

    // подключаем скрипты
    wp_register_script('jeepping-index', get_template_directory_uri() . '/dist/js/index.js?v=6/20', false, false, true);
    wp_enqueue_script('jeepping-index');
    // 
    wp_register_script('jeepping-runtime', get_template_directory_uri() . '/dist/js/runtime.js?v=6/20', false, false, true);
    wp_enqueue_script('jeepping-runtime');

    // подключаем стили
    wp_enqueue_style('main-Css', get_template_directory_uri() . '/dist/css/index.css?v=2');
}
/**
 * Скрывает админ панель для залогиненных пользователей.
 */
add_filter('show_admin_bar', '__return_false');

function disable_wp_emojicons()
{
    global $wp_query;
    // all actions related to emojis
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    //
    remove_action('wp_head', 'wp_oembed_add_host_js');
    //
    // filter to remove TinyMCE emojis
    //add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );

}
add_action('init', 'disable_wp_emojicons');

// Скрытие лишних inline стилей добавки их в wordpress после 5.9 обновления.
remove_action('wp_enqueue_scripts', 'wp_enqueue_global_styles');
remove_action('wp_footer', 'wp_enqueue_global_styles', 1);

// filter
function my_posts_where($where)
{
    $where = str_replace("meta_key = 'project_data_time_$", "meta_key LIKE 'project_data_time_%", $where);
    return $where;
}
add_filter('posts_where', 'my_posts_where');

/**
 * Включение автоматической подстановки title страниц.
 * В данном случае title прописывает плагин Yoast SEO
 * Тэг <title> в header должен отсутствовать.
 */
add_theme_support('title-tag');

add_action('wpseo_register_extra_replacements', 'register_yoast_var_countAuthorPost');

// Регистрация обработки кастомной переменной
function register_yoast_var_countAuthorPost()
{
    wpseo_register_var_replacement(
        '%%post_category%%',
        'getCountAuthorPosts',
        'advanced'
    );
}

// функция сортировки ближайших дат
function sort_date_poster($a_new, $b_new): bool|int
{
    $a_new = strtotime($a_new["time"]);
    $b_new = strtotime($b_new["time"]);

    return $a_new - $b_new;
}

/**
 * Возвращает количество постов автора.
 * @return int Количество выбранных постов
 */
function getCountAuthorPosts()
{
    global $wp_query;
    $term = get_the_terms($wp_query->post->ID, 'fenix_project-type');

    return $term ? $term[0]->name : '';
}

// add_action('wp_ajax_feedbackFunction', 'feedbackFunction');
// function feedbackFunction()
// {
//     if ($_POST['btnType'] === 'mainpage') {
//         //user posted variables
//         $name = $_POST['name'];
//         $phone = $_POST['phone'];
//         $email = $_POST['emailInput'];
//         $tourChaked = $_POST['tourChaked'];
//         $arrivalDate = $_POST['arrivalDate'];
//         $departureDate = $_POST['departureDate'];
//         $countAdults = $_POST['countAdults'];
//         $countChildren = $_POST['countChildren'];
//         $countTransport = $_POST['countTransport'];
//         $userCity = $_POST['userCity'];
//         $message = "Сообщение от пользователя: " . $name . "<br>" .
//             "Почта пользователя: " . $email . "<br>" .
//             "Город: " . $userCity . "<br>" .
//             "Телефон: " . $phone . "<br>" .
//             "Дата заезда: " . $arrivalDate . "<br>" .
//             "Дата выезда: " . $departureDate . "<br>" .
//             "Количество взрослых: " . $countAdults . "<br>" .
//             "Количество детей: " . $countChildren . "<br>" .
//             "Количество транспорта: " . $countTransport . "<br>" .
//             "Выбранные туры: " . $tourChaked . "<br>" .
//             "Сообщение: " . $_POST['review'];

//     } elseif ($_POST['btnType'] === 'tourpage') {
//         //user posted variables
//         $name = $_POST['name'];
//         $phone = $_POST['phone'];
//         $email = $_POST['emailInput'];
//         $userCity = $_POST['userCity'];

//         if($_POST['thisSelect'] === "") {
//             $message = "Сообщение от пользователя: " . $name . "<br>" .
//             "Почта пользователя: " . $email . "<br>" .
//             "Город: " . $userCity . "<br>" .
//             "Телефон: " . $phone . "<br>" .
//             "Сообщение: " . $_POST['review'];
//         } else {
//             $message = "Сообщение от пользователя: " . $name . "<br>" .
//             "Почта пользователя: " . $email . "<br>" .
//             "Город: " . $userCity . "<br>" .
//             "Телефон: " . $phone . "<br>" .
//             "Заголовок тура: " . $_POST['tourTitle'] . "<br>" .
//             "Дата: " . $_POST['thisSelect'] . "<br>" .
//             "Возраст: " . $_POST['ageFromTo'] . "<br>" .
//             "Количество людей: " . $_POST['countPeopleFrom'] . "<br>" .
//             "Количество дней: " . $_POST['countDayTour'] . "<br>" .
//             "Цена: " . $_POST['priceWithInterest'] . "<br>" .
//             "Сообщение: " . $_POST['review'];
//         }
//     }
//     //php mailer variables
//     $to = 'lisdb@bk.ru';
//     $subject = 'Данные клиента';

//     $headers = array(
//         "MIME-Version: 1.0",
//         "Content-type: text/html; charset=UTF-8",
//     );

//     //Here put your Validation and send mail
//     $send = wp_mail($to, $subject, $message, $headers);

//     wp_die();
// }