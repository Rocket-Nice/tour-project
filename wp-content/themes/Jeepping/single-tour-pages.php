<?php get_header();
setlocale(LC_ALL, 'ru_RU.utf8');

// Многодневные туры
$argsMulti = array('post_type' => 'tour-pages', 'posts_per_page' => -1, 'orderby' => 'date');
$tourListMulti = new WP_Query($argsMulti);
$count_day_tour = get_field("count_day_tour");

$tourDate = get_field('uncoming_date_tour');
$dateIfMore = "";

$uncomingDate = date('j F', strtotime(str_replace('/', '-', $tourDate . ' +'. $count_day_tour .'days')));

$initialMonth = date('n', strtotime(str_replace('/', '-', $tourDate)));
$futureMonth = date('n', strtotime(str_replace('/', '-', $uncomingDate)));

$month_names = array(
    'января', 'февраля', 'марта', 'апреля', 'мая', 'июня',
    'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря'
);

if ($futureMonth > $initialMonth) {
    $russian_date = date('j', strtotime(str_replace('/', '-', $tourDate))) . ' ' . $month_names[$initialMonth - 1];
    $futureDay = date('j', strtotime(str_replace('/', '-', $uncomingDate)));
    $futureMonthName = $month_names[$futureMonth - 1];
    $dateIfMore = $russian_date . ' - ' . $futureDay . ' ' . $futureMonthName;
} else {
    $russian_date = date('j', strtotime(str_replace('/', '-', $tourDate)));
    $dateIfMore = $russian_date . ' - ' . date('j', strtotime(str_replace('/', '-', $uncomingDate))) . ' ' . $month_names[$initialMonth - 1];
}

wp_reset_postdata();
?>

<section class="main-content page-container">
    <div class="tour-page__fixed-block-for-info-tour">
        <span class="tour-page__title-for-fixed-block">Привет, Алания!<br>Тур в Северную Осетию</span>
        <ul class="head-content__chips">
            <li class="chips__item">
                <div class="chips__container">
                    <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15 7.66955C15.0021 8.56717 14.6464 9.43066 14.0076 10.0788C12.543 11.5552 11.1221 13.0946 9.60353 14.5168C9.25492 14.8377 8.70232 14.826 8.36931 14.4906L3.99226 10.0793C2.66925 8.74582 2.66925 6.59329 3.99226 5.26035C4.30495 4.94126 4.68103 4.68723 5.09771 4.51366C5.51438 4.34008 5.96298 4.25058 6.41629 4.25058C6.8696 4.25058 7.3182 4.34008 7.73487 4.51366C8.15155 4.68723 8.52763 4.94126 8.84032 5.26035L8.99992 5.42018L9.15892 5.26035C9.47224 4.94202 9.84843 4.68845 10.265 4.51484C10.6815 4.34123 11.1298 4.25115 11.583 4.25C12.495 4.25 13.3668 4.61401 14.007 5.26035C14.646 5.90835 15.0019 6.77185 15 7.66955Z"
                            fill="white"></path>
                    </svg>
                    <p>от <?= get_field('age_from'); ?> до <?= get_field('age_up_to'); ?> лет</p>
                </div>
            </li>
            <li class="chips__item">
                <div class="chips__container">
                    <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M9.00003 4.25C8.20438 4.25 7.44132 4.56607 6.87871 5.12868C6.3161 5.69129 6.00003 6.45435 6.00003 7.25C6.00003 8.04565 6.3161 8.80871 6.87871 9.37132C7.44132 9.93393 8.20438 10.25 9.00003 10.25C9.79568 10.25 10.5587 9.93393 11.1214 9.37132C11.684 8.80871 12 8.04565 12 7.25C12 6.45435 11.684 5.69129 11.1214 5.12868C10.5587 4.56607 9.79568 4.25 9.00003 4.25ZM7.93937 6.18934C8.22067 5.90804 8.60221 5.75 9.00003 5.75C9.39785 5.75 9.77939 5.90804 10.0607 6.18934C10.342 6.47064 10.5 6.85217 10.5 7.25C10.5 7.64783 10.342 8.02936 10.0607 8.31066C9.77939 8.59196 9.39786 8.75 9.00003 8.75C8.6022 8.75 8.22067 8.59196 7.93937 8.31066C7.65807 8.02936 7.50003 7.64783 7.50003 7.25C7.50003 6.85217 7.65807 6.47064 7.93937 6.18934Z"
                            fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M9 1.25C4.44354 1.25 0.75 4.94354 0.75 9.5C0.75 11.4813 1.4484 13.2995 2.61245 14.7218C2.61957 14.7308 2.62691 14.7398 2.63449 14.7486C4.14764 16.5817 6.43734 17.75 9 17.75C11.556 17.75 13.8405 16.5877 15.3537 14.7628C15.3702 14.7447 15.3856 14.7259 15.3999 14.7066C16.5566 13.2866 17.25 11.4743 17.25 9.5C17.25 4.94354 13.5565 1.25 9 1.25ZM14.6918 13.1301C15.3617 12.0819 15.75 10.8363 15.75 9.5C15.75 5.77196 12.728 2.75 9 2.75C5.27196 2.75 2.25 5.77196 2.25 9.5C2.25 10.8364 2.63836 12.0821 3.30837 13.1304C3.53856 12.9474 3.8286 12.7435 4.18259 12.5411C5.22445 11.9456 6.80129 11.375 9.00003 11.375C11.1988 11.375 12.7758 11.9456 13.8178 12.5411C14.1717 12.7433 14.4616 12.9471 14.6918 13.1301ZM4.25123 14.2971C5.47076 15.5044 7.14828 16.25 9 16.25C10.8519 16.25 12.5295 15.5043 13.749 14.2969C13.5757 14.1598 13.3517 14.0024 13.0735 13.8434C12.248 13.3717 10.9263 12.875 9.00003 12.875C7.07377 12.875 5.75223 13.3717 4.92697 13.8434C4.64865 14.0025 4.42456 14.16 4.25123 14.2971Z"
                            fill="white"></path>
                        <path
                            d="M4.25123 14.2971C5.47076 15.5044 7.14828 16.25 9 16.25C10.8519 16.25 12.5295 15.5043 13.749 14.2969C13.5757 14.1598 13.3517 14.0024 13.0735 13.8434C12.248 13.3717 10.9263 12.875 9.00003 12.875C7.07377 12.875 5.75223 13.3717 4.92697 13.8434C4.64865 14.0025 4.42456 14.16 4.25123 14.2971Z"
                            fill="white"></path>
                        <path
                            d="M9.00003 5.75C8.60221 5.75 8.22067 5.90804 7.93937 6.18934C7.65807 6.47064 7.50003 6.85217 7.50003 7.25C7.50003 7.64783 7.65807 8.02936 7.93937 8.31066C8.22067 8.59196 8.6022 8.75 9.00003 8.75C9.39786 8.75 9.77939 8.59196 10.0607 8.31066C10.342 8.02936 10.5 7.64783 10.5 7.25C10.5 6.85217 10.342 6.47064 10.0607 6.18934C9.77939 5.90804 9.39785 5.75 9.00003 5.75Z"
                            fill="white"></path>
                    </svg>
                    <p>от <?= get_field('count_people_from'); ?> до <?= get_field('count_people_up_to'); ?> человек</p>
                </div>
            </li>
            <li class="chips__item">
                <div class="chips__container">
                    <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M5.25 1.25C5.66421 1.25 6 1.58579 6 2V5C6 5.41421 5.66421 5.75 5.25 5.75C4.83579 5.75 4.5 5.41421 4.5 5V4.25H3.75C3.55109 4.25 3.36032 4.32902 3.21967 4.46967C3.07902 4.61032 3 4.80109 3 5V7.25H15V5C15 4.80109 14.921 4.61032 14.7803 4.46967C14.6397 4.32902 14.4489 4.25 14.25 4.25H13.875C13.4608 4.25 13.125 3.91421 13.125 3.5C13.125 3.08579 13.4608 2.75 13.875 2.75H14.25C14.8467 2.75 15.419 2.98705 15.841 3.40901C16.2629 3.83097 16.5 4.40326 16.5 5V14.75C16.5 15.3467 16.2629 15.919 15.841 16.341C15.419 16.7629 14.8467 17 14.25 17H3.75C3.15326 17 2.58097 16.7629 2.15901 16.341C1.73705 15.919 1.5 15.3467 1.5 14.75V5C1.5 4.40326 1.73705 3.83097 2.15901 3.40901C2.58097 2.98705 3.15326 2.75 3.75 2.75H4.5V2C4.5 1.58579 4.83579 1.25 5.25 1.25ZM15 8.75H3V14.75C3 14.9489 3.07902 15.1397 3.21967 15.2803C3.36032 15.421 3.55109 15.5 3.75 15.5H14.25C14.4489 15.5 14.6397 15.421 14.7803 15.2803C14.921 15.1397 15 14.9489 15 14.75V8.75ZM11.25 1.25C11.6642 1.25 12 1.58579 12 2V5C12 5.41421 11.6642 5.75 11.25 5.75C10.8358 5.75 10.5 5.41421 10.5 5V4.25H7.875C7.46079 4.25 7.125 3.91421 7.125 3.5C7.125 3.08579 7.46079 2.75 7.875 2.75H10.5V2C10.5 1.58579 10.8358 1.25 11.25 1.25Z"
                            fill="white"></path>
                        <path
                            d="M3 8.75H15V14.75C15 14.9489 14.921 15.1397 14.7803 15.2803C14.6397 15.421 14.4489 15.5 14.25 15.5H3.75C3.55109 15.5 3.36032 15.421 3.21967 15.2803C3.07902 15.1397 3 14.9489 3 14.75V8.75Z"
                            fill="white"></path>
                    </svg>
                    <p><?= get_field('count_day_tour') ?>&nbsp;<?= get_field('count_day_tour_text'); ?></p>
                </div>
            </li>
            <li class="chips__item chips__item-for-select">
                <div class="chips__container">
                    <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M5.25 1.25C5.66421 1.25 6 1.58579 6 2V5C6 5.41421 5.66421 5.75 5.25 5.75C4.83579 5.75 4.5 5.41421 4.5 5V4.25H3.75C3.55109 4.25 3.36032 4.32902 3.21967 4.46967C3.07902 4.61032 3 4.80109 3 5V7.25H15V5C15 4.80109 14.921 4.61032 14.7803 4.46967C14.6397 4.32902 14.4489 4.25 14.25 4.25H13.875C13.4608 4.25 13.125 3.91421 13.125 3.5C13.125 3.08579 13.4608 2.75 13.875 2.75H14.25C14.8467 2.75 15.419 2.98705 15.841 3.40901C16.2629 3.83097 16.5 4.40326 16.5 5V14.75C16.5 15.3467 16.2629 15.919 15.841 16.341C15.419 16.7629 14.8467 17 14.25 17H3.75C3.15326 17 2.58097 16.7629 2.15901 16.341C1.73705 15.919 1.5 15.3467 1.5 14.75V5C1.5 4.40326 1.73705 3.83097 2.15901 3.40901C2.58097 2.98705 3.15326 2.75 3.75 2.75H4.5V2C4.5 1.58579 4.83579 1.25 5.25 1.25ZM15 8.75H3V14.75C3 14.9489 3.07902 15.1397 3.21967 15.2803C3.36032 15.421 3.55109 15.5 3.75 15.5H14.25C14.4489 15.5 14.6397 15.421 14.7803 15.2803C14.921 15.1397 15 14.9489 15 14.75V8.75ZM11.25 1.25C11.6642 1.25 12 1.58579 12 2V5C12 5.41421 11.6642 5.75 11.25 5.75C10.8358 5.75 10.5 5.41421 10.5 5V4.25H7.875C7.46079 4.25 7.125 3.91421 7.125 3.5C7.125 3.08579 7.46079 2.75 7.875 2.75H10.5V2C10.5 1.58579 10.8358 1.25 11.25 1.25Z"
                            fill="white"></path>
                        <path
                            d="M3 8.75H15V14.75C15 14.9489 14.921 15.1397 14.7803 15.2803C14.6397 15.421 14.4489 15.5 14.25 15.5H3.75C3.55109 15.5 3.36032 15.421 3.21967 15.2803C3.07902 15.1397 3 14.9489 3 14.75V8.75Z"
                            fill="white"></path>
                    </svg>
                    <p class="chip_item-select"><?= $dateIfMore; ?></p>
                </div>
            </li>
        </ul>
        <button type="button" class="button button--red button--small-red open-btn">
            <div class="button__item-and-icon">
                <div class="button__text-price">
                    <span>
                        <?php if (get_field('price_with_interest')) { ?>
                                <?= get_field('price_with_interest'); ?>
                        <?php } else { ?>
                                <?= get_field('price_without_interest'); ?>
                        <?php } ?>₽
                    </span>
                    <p>/ за чел.</p>
                </div>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.16699 15.8333L15.0003 5M15.0003 5V15.4M15.0003 5H4.60033" stroke="white"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </div>
        </button>
    </div>
    <div class="main-content__item triger-class-for-bottom-block padding-left-right-tour-page padding-top-107">
        <img class="main-content__img-bg" src="<?= get_field('photo_card_tour')['url']; ?>" alt="">
        <div class="main-content__container main-content__container-tour-page margin-top-167">
            <div class="tour-page__block">
                <div>
                    <h2 class="tour-page__block-title">
                        <div class="tour-title__container">
                            <span class="title_tour_first"><?= get_field('title_tour_first'); ?></span>
                            <div class="tour-page__select-desktop container-select">
                                <select name="select" id="selectProject" class="choosing-performance">
                        <option value="<?= $dateIfMore; ?>"><?= $dateIfMore; ?></option>
                        <?php if (have_rows('subsequent_dates')){
                                while (have_rows('subsequent_dates')){
                                   the_row(); 
                                   $tourDateNext = get_sub_field('date_next');
                                    $russian_date_next = "";
                                    
                                    $uncomingDate = date('j F', strtotime(str_replace('/', '-', $tourDateNext . ' +'. $count_day_tour .'days')));
                                    
                                    $initialMonth = date('n', strtotime(str_replace('/', '-', $tourDateNext)));
                                    $futureMonth = date('n', strtotime(str_replace('/', '-', $uncomingDate)));
                                    
                                    $month_names = array(
                                        'января', 'февраля', 'марта', 'апреля', 'мая', 'июня',
                                        'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря'
                                    );
                                    
                                    if ($futureMonth > $initialMonth) {
                                        $russian_date = date('j', strtotime(str_replace('/', '-', $tourDateNext))) . ' ' . $month_names[$initialMonth - 1];
                                        $futureDay = date('j', strtotime(str_replace('/', '-', $uncomingDate)));
                                        $futureMonthName = $month_names[$futureMonth - 1];
                                        $russian_date_next = $russian_date . ' - ' . $futureDay . ' ' . $futureMonthName;
                                    } else {
                                        $russian_date = date('j', strtotime(str_replace('/', '-', $tourDateNext)));
                                        $russian_date_next = $russian_date . ' - ' . date('j', strtotime(str_replace('/', '-', $uncomingDate))) . ' ' . $month_names[$initialMonth - 1];
                                    }?>
                                   <option value="<?= $russian_date_next; ?>"><?= $russian_date_next; ?></option>
                         <?php }} ?>
                        </select>
                                    <div class="select__header">
                                        <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.25 1.25C5.66421 1.25 6 1.58579 6 2V5C6 5.41421 5.66421 5.75 5.25 5.75C4.83579 5.75 4.5 5.41421 4.5 5V4.25H3.75C3.55109 4.25 3.36032 4.32902 3.21967 4.46967C3.07902 4.61032 3 4.80109 3 5V7.25H15V5C15 4.80109 14.921 4.61032 14.7803 4.46967C14.6397 4.32902 14.4489 4.25 14.25 4.25H13.875C13.4608 4.25 13.125 3.91421 13.125 3.5C13.125 3.08579 13.4608 2.75 13.875 2.75H14.25C14.8467 2.75 15.419 2.98705 15.841 3.40901C16.2629 3.83097 16.5 4.40326 16.5 5V14.75C16.5 15.3467 16.2629 15.919 15.841 16.341C15.419 16.7629 14.8467 17 14.25 17H3.75C3.15326 17 2.58097 16.7629 2.15901 16.341C1.73705 15.919 1.5 15.3467 1.5 14.75V5C1.5 4.40326 1.73705 3.83097 2.15901 3.40901C2.58097 2.98705 3.15326 2.75 3.75 2.75H4.5V2C4.5 1.58579 4.83579 1.25 5.25 1.25ZM15 8.75H3V14.75C3 14.9489 3.07902 15.1397 3.21967 15.2803C3.36032 15.421 3.55109 15.5 3.75 15.5H14.25C14.4489 15.5 14.6397 15.421 14.7803 15.2803C14.921 15.1397 15 14.9489 15 14.75V8.75ZM11.25 1.25C11.6642 1.25 12 1.58579 12 2V5C12 5.41421 11.6642 5.75 11.25 5.75C10.8358 5.75 10.5 5.41421 10.5 5V4.25H7.875C7.46079 4.25 7.125 3.91421 7.125 3.5C7.125 3.08579 7.46079 2.75 7.875 2.75H10.5V2C10.5 1.58579 10.8358 1.25 11.25 1.25Z" fill="white"></path>
                                            <path d="M3 8.75H15V14.75C15 14.9489 14.921 15.1397 14.7803 15.2803C14.6397 15.421 14.4489 15.5 14.25 15.5H3.75C3.55109 15.5 3.36032 15.421 3.21967 15.2803C3.07902 15.1397 3 14.9489 3 14.75V8.75Z" fill="white"></path>
                                        </svg>
                                        <span class="select__current"><?= $dateIfMore; ?></span>
                                        <div class="select__icon">
                                            <svg class="select__svg" width="12" height="13" viewBox="0 0 12 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M2.46967 4.46967C2.76256 4.17678 3.23744 4.17678 3.53033 4.46967L6 6.93934L8.46967 4.46967C8.76256 4.17678 9.23744 4.17678 9.53033 4.46967C9.82322 4.76256 9.82322 5.23744 9.53033 5.53033L6.53033 8.53033C6.23744 8.82322 5.76256 8.82322 5.46967 8.53033L2.46967 5.53033C2.17678 5.23744 2.17678 4.76256 2.46967 4.46967Z"
                                                    fill="white" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="select__body">
                                        <div class="select__item">
                                        <?= $dateIfMore; ?> </div>
                                        <?php if (have_rows('subsequent_dates')) {
                                                while (have_rows('subsequent_dates')) {
                                                    the_row();
                                                    $tourDateNext = get_sub_field('date_next');
                                                    $russian_date_next = "";
                                                    
                                                    $uncomingDate = date('j F', strtotime(str_replace('/', '-', $tourDateNext . ' +'. $count_day_tour .'days')));
                                                    
                                                    $initialMonth = date('n', strtotime(str_replace('/', '-', $tourDateNext)));
                                                    $futureMonth = date('n', strtotime(str_replace('/', '-', $uncomingDate)));
                                                    
                                                    $month_names = array(
                                                        'января', 'февраля', 'марта', 'апреля', 'мая', 'июня',
                                                        'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря'
                                                    );
                                                    
                                                    if ($futureMonth > $initialMonth) {
                                                        $russian_date = date('j', strtotime(str_replace('/', '-', $tourDateNext))) . ' ' . $month_names[$initialMonth - 1];
                                                        $futureDay = date('j', strtotime(str_replace('/', '-', $uncomingDate)));
                                                        $futureMonthName = $month_names[$futureMonth - 1];
                                                        $russian_date_next = $russian_date . ' - ' . $futureDay . ' ' . $futureMonthName;
                                                    } else {
                                                        $russian_date = date('j', strtotime(str_replace('/', '-', $tourDateNext)));
                                                        $russian_date_next = $russian_date . ' - ' . date('j', strtotime(str_replace('/', '-', $uncomingDate))) . ' ' . $month_names[$initialMonth - 1];
                                                    }
                                                    ?>
                                                    <div class="select__item">
                                                        <?= $russian_date_next; ?>
                                                    </div>
                                                <?php }
                                            } ?>
                                    </div>
                                </div>
                            </div>
                        <?php if (get_field('title_tour_second') !== "") { ?>
                            <div class="title_tour_second"><?= get_field('title_tour_second'); ?></div>
                        <?php } ?>
                    </h2>
                    <ul class="head-content__chips">
                        <li class="chips__item">
                            <div class="chips__container">
                                <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15 7.66955C15.0021 8.56717 14.6464 9.43066 14.0076 10.0788C12.543 11.5552 11.1221 13.0946 9.60353 14.5168C9.25492 14.8377 8.70232 14.826 8.36931 14.4906L3.99226 10.0793C2.66925 8.74582 2.66925 6.59329 3.99226 5.26035C4.30495 4.94126 4.68103 4.68723 5.09771 4.51366C5.51438 4.34008 5.96298 4.25058 6.41629 4.25058C6.8696 4.25058 7.3182 4.34008 7.73487 4.51366C8.15155 4.68723 8.52763 4.94126 8.84032 5.26035L8.99992 5.42018L9.15892 5.26035C9.47224 4.94202 9.84843 4.68845 10.265 4.51484C10.6815 4.34123 11.1298 4.25115 11.583 4.25C12.495 4.25 13.3668 4.61401 14.007 5.26035C14.646 5.90835 15.0019 6.77185 15 7.66955Z"
                                        fill="white" />
                                </svg>
                                <p class="age_from_to">от <?= get_field('age_from'); ?> до <?= get_field('age_up_to'); ?> лет</p>
                            </div>
                        </li>
                        <li class="chips__item">
                            <div class="chips__container">
                                <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M9.00003 4.25C8.20438 4.25 7.44132 4.56607 6.87871 5.12868C6.3161 5.69129 6.00003 6.45435 6.00003 7.25C6.00003 8.04565 6.3161 8.80871 6.87871 9.37132C7.44132 9.93393 8.20438 10.25 9.00003 10.25C9.79568 10.25 10.5587 9.93393 11.1214 9.37132C11.684 8.80871 12 8.04565 12 7.25C12 6.45435 11.684 5.69129 11.1214 5.12868C10.5587 4.56607 9.79568 4.25 9.00003 4.25ZM7.93937 6.18934C8.22067 5.90804 8.60221 5.75 9.00003 5.75C9.39785 5.75 9.77939 5.90804 10.0607 6.18934C10.342 6.47064 10.5 6.85217 10.5 7.25C10.5 7.64783 10.342 8.02936 10.0607 8.31066C9.77939 8.59196 9.39786 8.75 9.00003 8.75C8.6022 8.75 8.22067 8.59196 7.93937 8.31066C7.65807 8.02936 7.50003 7.64783 7.50003 7.25C7.50003 6.85217 7.65807 6.47064 7.93937 6.18934Z"
                                        fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M9 1.25C4.44354 1.25 0.75 4.94354 0.75 9.5C0.75 11.4813 1.4484 13.2995 2.61245 14.7218C2.61957 14.7308 2.62691 14.7398 2.63449 14.7486C4.14764 16.5817 6.43734 17.75 9 17.75C11.556 17.75 13.8405 16.5877 15.3537 14.7628C15.3702 14.7447 15.3856 14.7259 15.3999 14.7066C16.5566 13.2866 17.25 11.4743 17.25 9.5C17.25 4.94354 13.5565 1.25 9 1.25ZM14.6918 13.1301C15.3617 12.0819 15.75 10.8363 15.75 9.5C15.75 5.77196 12.728 2.75 9 2.75C5.27196 2.75 2.25 5.77196 2.25 9.5C2.25 10.8364 2.63836 12.0821 3.30837 13.1304C3.53856 12.9474 3.8286 12.7435 4.18259 12.5411C5.22445 11.9456 6.80129 11.375 9.00003 11.375C11.1988 11.375 12.7758 11.9456 13.8178 12.5411C14.1717 12.7433 14.4616 12.9471 14.6918 13.1301ZM4.25123 14.2971C5.47076 15.5044 7.14828 16.25 9 16.25C10.8519 16.25 12.5295 15.5043 13.749 14.2969C13.5757 14.1598 13.3517 14.0024 13.0735 13.8434C12.248 13.3717 10.9263 12.875 9.00003 12.875C7.07377 12.875 5.75223 13.3717 4.92697 13.8434C4.64865 14.0025 4.42456 14.16 4.25123 14.2971Z"
                                        fill="white" />
                                    <path
                                        d="M4.25123 14.2971C5.47076 15.5044 7.14828 16.25 9 16.25C10.8519 16.25 12.5295 15.5043 13.749 14.2969C13.5757 14.1598 13.3517 14.0024 13.0735 13.8434C12.248 13.3717 10.9263 12.875 9.00003 12.875C7.07377 12.875 5.75223 13.3717 4.92697 13.8434C4.64865 14.0025 4.42456 14.16 4.25123 14.2971Z"
                                        fill="white" />
                                    <path
                                        d="M9.00003 5.75C8.60221 5.75 8.22067 5.90804 7.93937 6.18934C7.65807 6.47064 7.50003 6.85217 7.50003 7.25C7.50003 7.64783 7.65807 8.02936 7.93937 8.31066C8.22067 8.59196 8.6022 8.75 9.00003 8.75C9.39786 8.75 9.77939 8.59196 10.0607 8.31066C10.342 8.02936 10.5 7.64783 10.5 7.25C10.5 6.85217 10.342 6.47064 10.0607 6.18934C9.77939 5.90804 9.39785 5.75 9.00003 5.75Z"
                                        fill="white" />
                                </svg>
                                <p class="count_people_from">от <?= get_field('count_people_from'); ?> до <?= get_field('count_people_up_to'); ?> человек</p>
                            </div>
                        </li>
                        <li class="chips__item">
                            <div class="chips__container">
                                <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M5.25 1.25C5.66421 1.25 6 1.58579 6 2V5C6 5.41421 5.66421 5.75 5.25 5.75C4.83579 5.75 4.5 5.41421 4.5 5V4.25H3.75C3.55109 4.25 3.36032 4.32902 3.21967 4.46967C3.07902 4.61032 3 4.80109 3 5V7.25H15V5C15 4.80109 14.921 4.61032 14.7803 4.46967C14.6397 4.32902 14.4489 4.25 14.25 4.25H13.875C13.4608 4.25 13.125 3.91421 13.125 3.5C13.125 3.08579 13.4608 2.75 13.875 2.75H14.25C14.8467 2.75 15.419 2.98705 15.841 3.40901C16.2629 3.83097 16.5 4.40326 16.5 5V14.75C16.5 15.3467 16.2629 15.919 15.841 16.341C15.419 16.7629 14.8467 17 14.25 17H3.75C3.15326 17 2.58097 16.7629 2.15901 16.341C1.73705 15.919 1.5 15.3467 1.5 14.75V5C1.5 4.40326 1.73705 3.83097 2.15901 3.40901C2.58097 2.98705 3.15326 2.75 3.75 2.75H4.5V2C4.5 1.58579 4.83579 1.25 5.25 1.25ZM15 8.75H3V14.75C3 14.9489 3.07902 15.1397 3.21967 15.2803C3.36032 15.421 3.55109 15.5 3.75 15.5H14.25C14.4489 15.5 14.6397 15.421 14.7803 15.2803C14.921 15.1397 15 14.9489 15 14.75V8.75ZM11.25 1.25C11.6642 1.25 12 1.58579 12 2V5C12 5.41421 11.6642 5.75 11.25 5.75C10.8358 5.75 10.5 5.41421 10.5 5V4.25H7.875C7.46079 4.25 7.125 3.91421 7.125 3.5C7.125 3.08579 7.46079 2.75 7.875 2.75H10.5V2C10.5 1.58579 10.8358 1.25 11.25 1.25Z"
                                        fill="white" />
                                    <path
                                        d="M3 8.75H15V14.75C15 14.9489 14.921 15.1397 14.7803 15.2803C14.6397 15.421 14.4489 15.5 14.25 15.5H3.75C3.55109 15.5 3.36032 15.421 3.21967 15.2803C3.07902 15.1397 3 14.9489 3 14.75V8.75Z"
                                        fill="white" />
                                </svg>
                                <p class="count_day_tour"><?= get_field('count_day_tour') ?>&nbsp;<?= get_field('count_day_tour_text'); ?></p>
                            </div>
                        </li>
                    </ul>
                    <div class="tour-page__select-mobile container-select">
                        <select name="select" id="selectProject" class="choosing-performance">
                        <option value="<?= $dateIfMore; ?>"><?= $dateIfMore; ?></option>
                        <?php if (have_rows('subsequent_dates')){
                                while (have_rows('subsequent_dates')){
                                   the_row(); 
                                   $tourDateNext = get_sub_field('date_next');
                                    $russian_date_next = "";
                                    
                                    $uncomingDate = date('j F', strtotime(str_replace('/', '-', $tourDateNext . ' +'. $count_day_tour .'days')));
                                    
                                    $initialMonth = date('n', strtotime(str_replace('/', '-', $tourDateNext)));
                                    $futureMonth = date('n', strtotime(str_replace('/', '-', $uncomingDate)));
                                    
                                    $month_names = array(
                                        'января', 'февраля', 'марта', 'апреля', 'мая', 'июня',
                                        'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря'
                                    );
                                    
                                    if ($futureMonth > $initialMonth) {
                                        $russian_date = date('j', strtotime(str_replace('/', '-', $tourDateNext))) . ' ' . $month_names[$initialMonth - 1];
                                        $futureDay = date('j', strtotime(str_replace('/', '-', $uncomingDate)));
                                        $futureMonthName = $month_names[$futureMonth - 1];
                                        $russian_date_next = $russian_date . ' - ' . $futureDay . ' ' . $futureMonthName;
                                    } else {
                                        $russian_date = date('j', strtotime(str_replace('/', '-', $tourDateNext)));
                                        $russian_date_next = $russian_date . ' - ' . date('j', strtotime(str_replace('/', '-', $uncomingDate))) . ' ' . $month_names[$initialMonth - 1];
                                    }
                                    ?>
                                   <option value="<?= $russian_date_next; ?>"><?= $russian_date_next; ?></option>
                         <?php }} ?>
                        </select>
                        <div class="select__header">
                            <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.25 1.25C5.66421 1.25 6 1.58579 6 2V5C6 5.41421 5.66421 5.75 5.25 5.75C4.83579 5.75 4.5 5.41421 4.5 5V4.25H3.75C3.55109 4.25 3.36032 4.32902 3.21967 4.46967C3.07902 4.61032 3 4.80109 3 5V7.25H15V5C15 4.80109 14.921 4.61032 14.7803 4.46967C14.6397 4.32902 14.4489 4.25 14.25 4.25H13.875C13.4608 4.25 13.125 3.91421 13.125 3.5C13.125 3.08579 13.4608 2.75 13.875 2.75H14.25C14.8467 2.75 15.419 2.98705 15.841 3.40901C16.2629 3.83097 16.5 4.40326 16.5 5V14.75C16.5 15.3467 16.2629 15.919 15.841 16.341C15.419 16.7629 14.8467 17 14.25 17H3.75C3.15326 17 2.58097 16.7629 2.15901 16.341C1.73705 15.919 1.5 15.3467 1.5 14.75V5C1.5 4.40326 1.73705 3.83097 2.15901 3.40901C2.58097 2.98705 3.15326 2.75 3.75 2.75H4.5V2C4.5 1.58579 4.83579 1.25 5.25 1.25ZM15 8.75H3V14.75C3 14.9489 3.07902 15.1397 3.21967 15.2803C3.36032 15.421 3.55109 15.5 3.75 15.5H14.25C14.4489 15.5 14.6397 15.421 14.7803 15.2803C14.921 15.1397 15 14.9489 15 14.75V8.75ZM11.25 1.25C11.6642 1.25 12 1.58579 12 2V5C12 5.41421 11.6642 5.75 11.25 5.75C10.8358 5.75 10.5 5.41421 10.5 5V4.25H7.875C7.46079 4.25 7.125 3.91421 7.125 3.5C7.125 3.08579 7.46079 2.75 7.875 2.75H10.5V2C10.5 1.58579 10.8358 1.25 11.25 1.25Z" fill="white"></path>
                                <path d="M3 8.75H15V14.75C15 14.9489 14.921 15.1397 14.7803 15.2803C14.6397 15.421 14.4489 15.5 14.25 15.5H3.75C3.55109 15.5 3.36032 15.421 3.21967 15.2803C3.07902 15.1397 3 14.9489 3 14.75V8.75Z" fill="white"></path>
                            </svg>
                            <span class="select__current"><?= $dateIfMore; ?></span>
                            <div class="select__icon">
                                <svg class="select__svg" width="12" height="13" viewBox="0 0 12 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M2.46967 4.46967C2.76256 4.17678 3.23744 4.17678 3.53033 4.46967L6 6.93934L8.46967 4.46967C8.76256 4.17678 9.23744 4.17678 9.53033 4.46967C9.82322 4.76256 9.82322 5.23744 9.53033 5.53033L6.53033 8.53033C6.23744 8.82322 5.76256 8.82322 5.46967 8.53033L2.46967 5.53033C2.17678 5.23744 2.17678 4.76256 2.46967 4.46967Z"
                                        fill="white" />
                                </svg>
                            </div>
                        </div>
                        <div class="select__body">
                            <div class="select__item">
                            <?= $dateIfMore; ?> </div>
                            <?php if (have_rows('subsequent_dates')) {
                                while (have_rows('subsequent_dates')) {
                                    the_row();
                                    $tourDateNext = get_sub_field('date_next');
                                    $russian_date_next = "";
                                    
                                    $uncomingDate = date('j F', strtotime(str_replace('/', '-', $tourDateNext . ' +'. $count_day_tour .'days')));
                                    
                                    $initialMonth = date('n', strtotime(str_replace('/', '-', $tourDateNext)));
                                    $futureMonth = date('n', strtotime(str_replace('/', '-', $uncomingDate)));
                                    
                                    $month_names = array(
                                        'января', 'февраля', 'марта', 'апреля', 'мая', 'июня',
                                        'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря'
                                    );
                                    
                                    if ($futureMonth > $initialMonth) {
                                        $russian_date = date('j', strtotime(str_replace('/', '-', $tourDateNext))) . ' ' . $month_names[$initialMonth - 1];
                                        $futureDay = date('j', strtotime(str_replace('/', '-', $uncomingDate)));
                                        $futureMonthName = $month_names[$futureMonth - 1];
                                        $russian_date_next = $russian_date . ' - ' . $futureDay . ' ' . $futureMonthName;
                                    } else {
                                        $russian_date = date('j', strtotime(str_replace('/', '-', $tourDateNext)));
                                        $russian_date_next = $russian_date . ' - ' . date('j', strtotime(str_replace('/', '-', $uncomingDate))) . ' ' . $month_names[$initialMonth - 1];
                                    }
                                    ?>
                                    <div class="select__item">
                                        <?= $russian_date_next; ?>
                                    </div>
                                <?php }
                            } ?>
                        </div>
                    </div>
                </div>
                <button type="button" class="button button--red button--big-red open-btn" style="padding: 0;">
                    <div class="button__item-and-icon justif">
                        <div class="button__text-price">
                            <span class="price_with_interest">
                                <?php if (get_field('price_with_interest')) { ?>
                                        <?= get_field('price_with_interest'); ?>
                                <?php } else { ?>
                                        <?= get_field('price_without_interest'); ?>
                                <?php } ?> ₽
                            </span>
                            <p>/ за чел.</p>
                        </div>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.16699 15.8333L15.0003 5M15.0003 5V15.4M15.0003 5H4.60033" stroke="white"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                </button>
            </div>
        </div>
    </div>
    <div class="main-content__item bg-white padding-205-30">
        <div class="tours-list margin-top-194">
            <div>
                <h2 class="answer__title about-adventures-svg">
                    О приключении
                    <svg width="74" height="46" viewBox="0 0 74 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M6.16669 4.495C6.82445 1.81306 9.53181 0.172132 12.2138 0.829888L64.0794 13.5501L70.8337 23.7011L66.8439 39.969C66.1862 42.651 63.4788 44.2919 60.7969 43.6341L8.93121 30.9139L2.17694 20.7629L6.16669 4.495Z"
                            fill="#D9D9D9" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M6.16669 4.495C6.82445 1.81306 9.53181 0.172132 12.2138 0.829888L64.0794 13.5501L70.8337 23.7011L66.8439 39.969C66.1862 42.651 63.4788 44.2919 60.7969 43.6341L8.93121 30.9139L2.17694 20.7629L6.16669 4.495Z"
                            fill="url(#paint0_linear_141_14096)" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M6.16669 4.495C6.82445 1.81306 9.53181 0.172132 12.2138 0.829888L64.0794 13.5501L70.8337 23.7011L66.8439 39.969C66.1862 42.651 63.4788 44.2919 60.7969 43.6341L8.93121 30.9139L2.17694 20.7629L6.16669 4.495Z"
                            fill="url(#paint1_linear_141_14096)" fill-opacity="0.5" />
                        <path d="M19.9164 23.4983L22.4317 13.2422L24.4016 13.7254L21.8863 23.9814L19.9164 23.4983Z"
                            fill="white" />
                        <path
                            d="M23.7823 24.4464L26.2976 14.1903L28.2964 14.6806L31.1532 22.6298L32.83 15.7925L34.8289 16.2827L32.3136 26.5387L30.3147 26.0485L27.458 18.0993L25.7811 24.9366L23.7823 24.4464Z"
                            fill="white" />
                        <path
                            d="M34.0591 26.9668L36.5745 16.7108L42.9476 18.2738L42.4725 20.2111L38.0692 19.1312L37.5243 21.3533L41.0584 22.2201L40.5833 24.1573L37.0491 23.2906L36.029 27.45L34.0591 26.9668Z"
                            fill="white" />
                        <path
                            d="M45.8879 30.0944C44.845 29.8386 43.9993 29.3946 43.3508 28.7624C42.707 28.1314 42.2784 27.3643 42.0648 26.4612C41.856 25.5593 41.8821 24.5765 42.1429 23.5129C42.4038 22.4494 42.8354 21.5661 43.4377 20.8631C44.0449 20.1613 44.7799 19.6796 45.6425 19.418C46.51 19.1576 47.4652 19.1552 48.508 19.411C49.5509 19.6668 50.3942 20.1102 51.0379 20.7412C51.6865 21.3735 52.1152 22.1406 52.3239 23.0425C52.5375 23.9456 52.5139 24.9289 52.253 25.9925C51.9922 27.0561 51.5582 27.9388 50.951 28.6406C50.3486 29.3435 49.6137 29.8252 48.7462 30.0857C47.8835 30.3473 46.9308 30.3502 45.8879 30.0944ZM46.3351 28.2711C46.9942 28.4428 47.579 28.4377 48.0894 28.2559C48.5997 28.074 49.0288 27.7438 49.3765 27.2653C49.729 26.7879 49.9926 26.1932 50.1673 25.4809C50.3419 24.7687 50.3823 24.1242 50.2883 23.5475C50.1991 22.9719 49.9704 22.4854 49.602 22.088C49.2337 21.6906 48.72 21.406 48.0609 21.2343C47.4017 21.0626 46.817 21.0677 46.3066 21.2496C45.7962 21.4314 45.3647 21.7611 45.0122 22.2384C44.6645 22.7169 44.4033 23.3123 44.2287 24.0245C44.054 24.7367 44.0112 25.3806 44.1004 25.9562C44.1944 26.533 44.4256 27.02 44.7939 27.4174C45.1622 27.8148 45.6759 28.0994 46.3351 28.2711Z"
                            fill="white" />
                        <path
                            d="M10.4406 24.8533L8.95264 30.9202L2.17599 20.7671L8.97451 22.4345C10.0473 22.6976 10.7037 23.7805 10.4406 24.8533Z"
                            fill="url(#paint2_linear_141_14096)" />
                        <path
                            d="M62.5692 19.6136L64.0574 13.5447L70.8339 23.6995L64.0353 22.0324C62.9625 21.7693 62.3061 20.6864 62.5692 19.6136Z"
                            fill="url(#paint3_linear_141_14096)" />
                        <defs>
                            <linearGradient id="paint0_linear_141_14096" x1="3.71469" y1="14.4928" x2="68.0001"
                                y2="31.5" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#E93B57" />
                                <stop offset="1" stop-color="#EC5B54" />
                            </linearGradient>
                            <linearGradient id="paint1_linear_141_14096" x1="101.786" y1="38.6384" x2="3.69314"
                                y2="14.5807" gradientUnits="userSpaceOnUse">
                                <stop offset="0.354167" stop-color="white" stop-opacity="0" />
                                <stop offset="0.682292" stop-color="white" />
                                <stop offset="1" stop-color="white" stop-opacity="0" />
                            </linearGradient>
                            <linearGradient id="paint2_linear_141_14096" x1="9.95405" y1="26.837" x2="1.21309"
                                y2="24.6932" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#F8B1AF" />
                                <stop offset="1" stop-color="#F46D79" />
                            </linearGradient>
                            <linearGradient id="paint3_linear_141_14096" x1="63.0559" y1="17.6289" x2="71.7969"
                                y2="19.7724" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#F8B1AF" />
                                <stop offset="1" stop-color="#F46D79" />
                            </linearGradient>
                        </defs>
                    </svg>
                </h2>
            </div>
            <div class="about-adventures">
                <div class="about-adventures__text"><?= get_field('about_adventures_text'); ?></div>
            </div>
            <div class="about-adventures__images">
                <?php
                $aboutAdventures = get_field('adventures_gallery');
                if ($aboutAdventures ?? false) {
                    foreach ($aboutAdventures as $image_id) {
                        ?>
                        <a class="about-adventures__img" data-fancybox="img-adventures"
                            href="<?= esc_url($image_id["url"]); ?>">
                            <img src="<?= esc_url($image_id["url"]); ?>" alt="">
                        </a>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <div class="main-content__item bg-white padding-205-30">
        <div class="adventure-program margin-top-194">
            <div class="adventure-program__title-container">
                <div>
                    <h2 class="answer__title adventures-program">
                        Программа приключения
                        <svg width="74" height="46" viewBox="0 0 74 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M6.16669 4.495C6.82445 1.81306 9.53181 0.172132 12.2138 0.829888L64.0794 13.5501L70.8337 23.7011L66.8439 39.969C66.1862 42.651 63.4788 44.2919 60.7969 43.6341L8.93121 30.9139L2.17694 20.7629L6.16669 4.495Z"
                                fill="#D9D9D9" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M6.16669 4.495C6.82445 1.81306 9.53181 0.172132 12.2138 0.829888L64.0794 13.5501L70.8337 23.7011L66.8439 39.969C66.1862 42.651 63.4788 44.2919 60.7969 43.6341L8.93121 30.9139L2.17694 20.7629L6.16669 4.495Z"
                                fill="url(#paint0_linear_141_14096)" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M6.16669 4.495C6.82445 1.81306 9.53181 0.172132 12.2138 0.829888L64.0794 13.5501L70.8337 23.7011L66.8439 39.969C66.1862 42.651 63.4788 44.2919 60.7969 43.6341L8.93121 30.9139L2.17694 20.7629L6.16669 4.495Z"
                                fill="url(#paint1_linear_141_14096)" fill-opacity="0.5" />
                            <path d="M19.9164 23.4983L22.4317 13.2422L24.4016 13.7254L21.8863 23.9814L19.9164 23.4983Z"
                                fill="white" />
                            <path
                                d="M23.7823 24.4464L26.2976 14.1903L28.2964 14.6806L31.1532 22.6298L32.83 15.7925L34.8289 16.2827L32.3136 26.5387L30.3147 26.0485L27.458 18.0993L25.7811 24.9366L23.7823 24.4464Z"
                                fill="white" />
                            <path
                                d="M34.0591 26.9668L36.5745 16.7108L42.9476 18.2738L42.4725 20.2111L38.0692 19.1312L37.5243 21.3533L41.0584 22.2201L40.5833 24.1573L37.0491 23.2906L36.029 27.45L34.0591 26.9668Z"
                                fill="white" />
                            <path
                                d="M45.8879 30.0944C44.845 29.8386 43.9993 29.3946 43.3508 28.7624C42.707 28.1314 42.2784 27.3643 42.0648 26.4612C41.856 25.5593 41.8821 24.5765 42.1429 23.5129C42.4038 22.4494 42.8354 21.5661 43.4377 20.8631C44.0449 20.1613 44.7799 19.6796 45.6425 19.418C46.51 19.1576 47.4652 19.1552 48.508 19.411C49.5509 19.6668 50.3942 20.1102 51.0379 20.7412C51.6865 21.3735 52.1152 22.1406 52.3239 23.0425C52.5375 23.9456 52.5139 24.9289 52.253 25.9925C51.9922 27.0561 51.5582 27.9388 50.951 28.6406C50.3486 29.3435 49.6137 29.8252 48.7462 30.0857C47.8835 30.3473 46.9308 30.3502 45.8879 30.0944ZM46.3351 28.2711C46.9942 28.4428 47.579 28.4377 48.0894 28.2559C48.5997 28.074 49.0288 27.7438 49.3765 27.2653C49.729 26.7879 49.9926 26.1932 50.1673 25.4809C50.3419 24.7687 50.3823 24.1242 50.2883 23.5475C50.1991 22.9719 49.9704 22.4854 49.602 22.088C49.2337 21.6906 48.72 21.406 48.0609 21.2343C47.4017 21.0626 46.817 21.0677 46.3066 21.2496C45.7962 21.4314 45.3647 21.7611 45.0122 22.2384C44.6645 22.7169 44.4033 23.3123 44.2287 24.0245C44.054 24.7367 44.0112 25.3806 44.1004 25.9562C44.1944 26.533 44.4256 27.02 44.7939 27.4174C45.1622 27.8148 45.6759 28.0994 46.3351 28.2711Z"
                                fill="white" />
                            <path
                                d="M10.4406 24.8533L8.95264 30.9202L2.17599 20.7671L8.97451 22.4345C10.0473 22.6976 10.7037 23.7805 10.4406 24.8533Z"
                                fill="url(#paint2_linear_141_14096)" />
                            <path
                                d="M62.5692 19.6136L64.0574 13.5447L70.8339 23.6995L64.0353 22.0324C62.9625 21.7693 62.3061 20.6864 62.5692 19.6136Z"
                                fill="url(#paint3_linear_141_14096)" />
                            <defs>
                                <linearGradient id="paint0_linear_141_14096" x1="3.71469" y1="14.4928" x2="68.0001"
                                    y2="31.5" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#E93B57" />
                                    <stop offset="1" stop-color="#EC5B54" />
                                </linearGradient>
                                <linearGradient id="paint1_linear_141_14096" x1="101.786" y1="38.6384" x2="3.69314"
                                    y2="14.5807" gradientUnits="userSpaceOnUse">
                                    <stop offset="0.354167" stop-color="white" stop-opacity="0" />
                                    <stop offset="0.682292" stop-color="white" />
                                    <stop offset="1" stop-color="white" stop-opacity="0" />
                                </linearGradient>
                                <linearGradient id="paint2_linear_141_14096" x1="9.95405" y1="26.837" x2="1.21309"
                                    y2="24.6932" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F8B1AF" />
                                    <stop offset="1" stop-color="#F46D79" />
                                </linearGradient>
                                <linearGradient id="paint3_linear_141_14096" x1="63.0559" y1="17.6289" x2="71.7969"
                                    y2="19.7724" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F8B1AF" />
                                    <stop offset="1" stop-color="#F46D79" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </h2>
                </div>
                <div class="pagination__advantures">
                    <button disabled="" type="button" class="pagination__back-adventures">
                        <div class="pagination__arrow">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.0702 7.29167H1.34578M1.34578 7.29167L6.49352 12.4394M1.34578 7.29167L6.49352 2.14393"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </button>
                    <button type="button" class="pagination__next-adventures">
                        <div class="pagination__arrow">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.0702 7.29167H1.34578M1.34578 7.29167L6.49352 12.4394M1.34578 7.29167L6.49352 2.14393"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </button>
                </div>
            </div>
            <?php
            $count_days = 0;
            $count_days_mobile = 0;

            // Разбиение дней на группы по 4
            $groups = array_chunk(range(1, $count_day_tour), 4);
            ?>

            <div class="adventures-program__container swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide adventures-program__days">
                        <?php if (have_rows('block_day')){
                            while (have_rows('block_day')){
                                the_row(); 
                                $count_days++;
                                ?>
                                <div class="adventures-program__day">
                                    <?php if ($count_days === 1) { ?>
                                        <svg class="adventures-program__THEWORLDO-left-top" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="10" cy="10" r="9" fill="url(#paint0_linear_141_14126)" stroke="white" stroke-width="2" />
                                            <circle cx="10" cy="10" r="3" fill="white" />
                                            <defs>
                                                <linearGradient id="paint0_linear_141_14126" x1="2" y1="10.1569" x2="18" y2="10.1569" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#2057E5" />
                                                    <stop offset="1" stop-color="#0075FF" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    <?php } ?>
                                    <svg class="adventures-program__THEWORLDO-right-bottom" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="10" cy="10" r="9" fill="#2057E5" stroke="white" stroke-width="2" />
                                        <circle cx="10" cy="10" r="3" fill="white" />
                                        <defs>
                                            <linearGradient id="paint0_linear_141_14126" x1="2" y1="10.1569" x2="18" y2="10.1569" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#2057E5" />
                                                <stop offset="1" stop-color="#0075FF" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <div class="adventures-program__day-content">
                                        <span class="adventures-program__day-number">День <?php echo $count_days; ?></span>
                                        <strong class="adventures-program__day-title"><?php echo get_sub_field('title_day'); ?></strong>
                                        <strong class="adventures-program__day-subtitle"><?php echo get_sub_field('subtitle_day'); ?></strong>
                                        <?php if (have_rows('dark_and_simple_text')){
                                                while (have_rows('dark_and_simple_text')){
                                                    the_row();  ?>
                                                    <div class="adventures-program__day-time-and-text">
                                                        <div>
                                                            <span class="adventures-program__day-time"><?php echo get_sub_field('dark_text'); ?></span>
                                                            <p class="adventures-program__day-text">
                                                                <?php echo get_sub_field('simple_text'); ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                        <?php }} ?>
                                    </div>
                                </div>
                                <?php
                                if ($count_days % 3 === 0) { ?>
                                    </div>
                                    <?php if ($count_day_tour > $count_days) { ?>
                                        <div class="swiper-slide adventures-program__days">
                                    <?php }
                                }
                            }
                        }
                        if ($count_day_tour < 4) { ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!-- тут -->
            <div class="adventures-program__container-mobile">
                <div class="adventures-program__days">
                    <?php if (have_rows('block_day')){
                        while (have_rows('block_day')){
                            the_row(); 
                            $count_days_mobile++;
                            ?>
                            <div class="adventures-program__day">
                                <?php if ($count_days_mobile === 1) { ?>
                                    <svg class="adventures-program__THEWORLDO-left-top" width="20" height="20" viewBox="0 0 20 20"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="10" cy="10" r="9" fill="#2057E5" stroke="white" stroke-width="2" />
                                            <circle cx="10" cy="10" r="3" fill="white" />
                                            <defs>
                                                <linearGradient id="paint0_linear_141_14126" x1="2" y1="10.1569" x2="18" y2="10.1569"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#2057E5" />
                                                    <stop offset="1" stop-color="#0075FF" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                <?php } ?>
                                <svg class="adventures-program__THEWORLDO-right-bottom" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="10" cy="10" r="9" fill="#2057E5" stroke="white" stroke-width="2" />
                                    <circle cx="10" cy="10" r="3" fill="white" />
                                    <defs>
                                        <linearGradient id="paint0_linear_141_14126" x1="2" y1="10.1569" x2="18" y2="10.1569" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#2057E5" />
                                            <stop offset="1" stop-color="#0075FF" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <div class="adventures-program__day-content">
                                    <span class="adventures-program__day-number">День <?php echo $count_days_mobile; ?></span>
                                    <strong class="adventures-program__day-title"><?php echo get_sub_field('title_day'); ?></strong>
                                    <strong class="adventures-program__day-subtitle"><?php echo get_sub_field('subtitle_day'); ?></strong>
                                    <?php if (have_rows('dark_and_simple_text')){
                                                while (have_rows('dark_and_simple_text')){
                                                    the_row();  ?>
                                                    <div class="adventures-program__day-time-and-text">
                                                        <div>
                                                            <span class="adventures-program__day-time"><?php echo get_sub_field('dark_text'); ?></span>
                                                            <p class="adventures-program__day-text">
                                                                <?php echo get_sub_field('simple_text'); ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                        <?php }} ?>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
                </div>
    </div>
    <div class="main-content__item bg-white padding-205-30">
        <div class="tours-list margin-top-194">
            <div>
                <h2 class="answer__title tour-condition-svg">
                    Условия тура
                    <svg width="74" height="46" viewBox="0 0 74 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M6.16669 4.495C6.82445 1.81306 9.53181 0.172132 12.2138 0.829888L64.0794 13.5501L70.8337 23.7011L66.8439 39.969C66.1862 42.651 63.4788 44.2919 60.7969 43.6341L8.93121 30.9139L2.17694 20.7629L6.16669 4.495Z"
                            fill="#D9D9D9" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M6.16669 4.495C6.82445 1.81306 9.53181 0.172132 12.2138 0.829888L64.0794 13.5501L70.8337 23.7011L66.8439 39.969C66.1862 42.651 63.4788 44.2919 60.7969 43.6341L8.93121 30.9139L2.17694 20.7629L6.16669 4.495Z"
                            fill="url(#paint0_linear_141_14096)" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M6.16669 4.495C6.82445 1.81306 9.53181 0.172132 12.2138 0.829888L64.0794 13.5501L70.8337 23.7011L66.8439 39.969C66.1862 42.651 63.4788 44.2919 60.7969 43.6341L8.93121 30.9139L2.17694 20.7629L6.16669 4.495Z"
                            fill="url(#paint1_linear_141_14096)" fill-opacity="0.5" />
                        <path d="M19.9164 23.4983L22.4317 13.2422L24.4016 13.7254L21.8863 23.9814L19.9164 23.4983Z"
                            fill="white" />
                        <path
                            d="M23.7823 24.4464L26.2976 14.1903L28.2964 14.6806L31.1532 22.6298L32.83 15.7925L34.8289 16.2827L32.3136 26.5387L30.3147 26.0485L27.458 18.0993L25.7811 24.9366L23.7823 24.4464Z"
                            fill="white" />
                        <path
                            d="M34.0591 26.9668L36.5745 16.7108L42.9476 18.2738L42.4725 20.2111L38.0692 19.1312L37.5243 21.3533L41.0584 22.2201L40.5833 24.1573L37.0491 23.2906L36.029 27.45L34.0591 26.9668Z"
                            fill="white" />
                        <path
                            d="M45.8879 30.0944C44.845 29.8386 43.9993 29.3946 43.3508 28.7624C42.707 28.1314 42.2784 27.3643 42.0648 26.4612C41.856 25.5593 41.8821 24.5765 42.1429 23.5129C42.4038 22.4494 42.8354 21.5661 43.4377 20.8631C44.0449 20.1613 44.7799 19.6796 45.6425 19.418C46.51 19.1576 47.4652 19.1552 48.508 19.411C49.5509 19.6668 50.3942 20.1102 51.0379 20.7412C51.6865 21.3735 52.1152 22.1406 52.3239 23.0425C52.5375 23.9456 52.5139 24.9289 52.253 25.9925C51.9922 27.0561 51.5582 27.9388 50.951 28.6406C50.3486 29.3435 49.6137 29.8252 48.7462 30.0857C47.8835 30.3473 46.9308 30.3502 45.8879 30.0944ZM46.3351 28.2711C46.9942 28.4428 47.579 28.4377 48.0894 28.2559C48.5997 28.074 49.0288 27.7438 49.3765 27.2653C49.729 26.7879 49.9926 26.1932 50.1673 25.4809C50.3419 24.7687 50.3823 24.1242 50.2883 23.5475C50.1991 22.9719 49.9704 22.4854 49.602 22.088C49.2337 21.6906 48.72 21.406 48.0609 21.2343C47.4017 21.0626 46.817 21.0677 46.3066 21.2496C45.7962 21.4314 45.3647 21.7611 45.0122 22.2384C44.6645 22.7169 44.4033 23.3123 44.2287 24.0245C44.054 24.7367 44.0112 25.3806 44.1004 25.9562C44.1944 26.533 44.4256 27.02 44.7939 27.4174C45.1622 27.8148 45.6759 28.0994 46.3351 28.2711Z"
                            fill="white" />
                        <path
                            d="M10.4406 24.8533L8.95264 30.9202L2.17599 20.7671L8.97451 22.4345C10.0473 22.6976 10.7037 23.7805 10.4406 24.8533Z"
                            fill="url(#paint2_linear_141_14096)" />
                        <path
                            d="M62.5692 19.6136L64.0574 13.5447L70.8339 23.6995L64.0353 22.0324C62.9625 21.7693 62.3061 20.6864 62.5692 19.6136Z"
                            fill="url(#paint3_linear_141_14096)" />
                        <defs>
                            <linearGradient id="paint0_linear_141_14096" x1="3.71469" y1="14.4928" x2="68.0001"
                                y2="31.5" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#E93B57" />
                                <stop offset="1" stop-color="#EC5B54" />
                            </linearGradient>
                            <linearGradient id="paint1_linear_141_14096" x1="101.786" y1="38.6384" x2="3.69314"
                                y2="14.5807" gradientUnits="userSpaceOnUse">
                                <stop offset="0.354167" stop-color="white" stop-opacity="0" />
                                <stop offset="0.682292" stop-color="white" />
                                <stop offset="1" stop-color="white" stop-opacity="0" />
                            </linearGradient>
                            <linearGradient id="paint2_linear_141_14096" x1="9.95405" y1="26.837" x2="1.21309"
                                y2="24.6932" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#F8B1AF" />
                                <stop offset="1" stop-color="#F46D79" />
                            </linearGradient>
                            <linearGradient id="paint3_linear_141_14096" x1="63.0559" y1="17.6289" x2="71.7969"
                                y2="19.7724" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#F8B1AF" />
                                <stop offset="1" stop-color="#F46D79" />
                            </linearGradient>
                        </defs>
                    </svg>
                </h2>
            </div>
            <div class="tour-conditions">
                <div class="tour-conditions__left">
                    <strong class="tour-conditions__title">Место сбора группы</strong>
                    <div class="tour-conditions__subtitle-icon">
                        <div><img src="/wp-content/themes/Jeepping/assets/img/location.svg" alt=""></div>
                        <span>Россия, Республика Северная Осетия — Алания,
                            Владикавказ</span>
                    </div>
                </div>
                <div class="tour-conditions__right">
                    <strong class="tour-conditions__title">Продолжительность</strong>
                    <div class="tour-conditions__subtitle-icon">
                        <div><img src="/wp-content/themes/Jeepping/assets/img/calendar.svg" alt=""></div>
                        <span><?= get_field('count_day_tour') ?>&nbsp;<?= get_field('count_day_tour_text'); ?></span>
                    </div>
                </div>
            </div>
            <div class="tours-page__block-elements">
            <div class="tours-page__accordion-container-left">
                                <div class="accordion accordion--primary accordion--front-page">
                                    <!-- 1 -->
                                    <div class="accordion__item">
                                        <div class="accordion__header">
                                            <button type="button" class="accordion__header-button"><span>Включено в стоимость</span>
                                                <span class="accordion__header-button-icon icon"></span></button>
                                        </div>
                                        <div class="accordion__body">
                                            <div class="accordion__body-container">
                                                <div class="accordion-body__nav-list">
                                                    <ul class="accordion-body__content-ul">
                                                    <?php if (have_rows('tour_conditions')) {
                                                        while (have_rows('tour_conditions')) {
                                                            the_row(); ?>
                                                                        <li class="accordion-body__content-li">
                                                                            <div>
                                                                            <div><img
                                                                                src="/wp-content/themes/Jeepping/assets/img/greenCheck.svg"
                                                                                alt=""></div>
                                                                                <?= get_sub_field('included') ?>
                                                                        </div>
                                                                </li>
                                                        <?php }
                                                    } ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tours-page__accordion-container-right">
                                <div class="accordion accordion--primary accordion--front-page">
                                    <!-- 1 -->
                                    <div class="accordion__item">
                                        <div class="accordion__header">
                                            <button type="button" class="accordion__header-button"><span>Оплачивается
                                                    отдельно</span>
                                                <span class="accordion__header-button-icon icon"></span></button>
                                        </div>
                                        <div class="accordion__body">
                                            <div class="accordion__body-container">
                                                <div class="accordion-body__nav-list">
                                                    <ul class="accordion-body__content-ul">
                                                        <?php if (have_rows('not_included')) {
                                                            while (have_rows('not_included')) {
                                                                the_row(); ?>
                                                                <li class="accordion-body__content-li">
                                                                    <div>
                                                                    <div><img src="/wp-content/themes/Jeepping/assets/img/grayCheck.svg"
                                                                                alt=""></div>
                                                                                <?= get_sub_field('not_included_list') ?>
                                                                    </div>
                                                                </li>
                                                        <?php }
                                                        } ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
            </div>
        </div>
    </div>
    <div class="main-content__item bg-white padding-205-30">
        <div class="tours-list margin-top-194">
            <div>
                <h2 class="answer__title">
                    Ответы на ваши вопросы
                    <svg width="107" height="54" viewBox="0 0 107 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M6.83637 4.85609C7.49413 2.17414 10.2015 0.533216 12.8834 1.19097L97.4009 21.9192L104.155 32.0702L100.165 48.3381C99.5077 51.02 96.8003 52.6609 94.1184 52.0032L9.60088 31.275L2.84661 21.124L6.83637 4.85609Z"
                            fill="url(#paint0_linear_108_12950)" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M6.83637 4.85609C7.49413 2.17414 10.2015 0.533216 12.8834 1.19097L97.4009 21.9192L104.155 32.0702L100.165 48.3381C99.5077 51.02 96.8003 52.6609 94.1184 52.0032L9.60088 31.275L2.84661 21.124L6.83637 4.85609Z"
                            fill="url(#paint1_linear_108_12950)" fill-opacity="0.5" />
                        <path
                            d="M11.1105 25.2144L9.62256 31.2812L2.84591 21.1282L9.64444 22.7955C10.7172 23.0586 11.3736 24.1416 11.1105 25.2144Z"
                            fill="url(#paint2_linear_108_12950)" />
                        <path
                            d="M95.8934 27.985L97.3816 21.916L104.158 32.0709L97.3595 30.4037C96.2867 30.1407 95.6303 29.0578 95.8934 27.985Z"
                            fill="url(#paint3_linear_108_12950)" />
                        <path
                            d="M23.5415 24.8106L21.4667 21.4326L22.8289 20.6134L24.8906 23.9883L23.5415 24.8106ZM20.2292 23.9983C19.2902 23.768 18.5293 23.3663 17.9464 22.7932C17.3678 22.2211 16.9832 21.525 16.7926 20.7049C16.6064 19.8859 16.6318 18.9929 16.869 18.026C17.1061 17.0591 17.4967 16.2557 18.0407 15.6157C18.5891 14.9769 19.2521 14.5377 20.0298 14.2983C20.8117 14.0599 21.6722 14.0558 22.6111 14.2861C23.55 14.5164 24.3088 14.9176 24.8874 15.4896C25.4704 16.0627 25.8549 16.7588 26.0412 17.5779C26.2317 18.398 26.2085 19.2915 25.9713 20.2584C25.7342 21.2253 25.3414 22.0282 24.793 22.6671C24.249 23.307 23.586 23.7462 22.804 23.9845C22.0264 24.224 21.1681 24.2286 20.2292 23.9983ZM20.6357 22.3407C21.2291 22.4954 21.7559 22.4896 22.216 22.3233C22.6762 22.157 23.0633 21.8562 23.3775 21.4207C23.696 20.9863 23.9347 20.4453 24.0935 19.7978C24.2523 19.1504 24.2899 18.5647 24.2064 18.0408C24.1273 17.5181 23.9222 17.0765 23.5912 16.7162C23.2602 16.3559 22.798 16.0983 22.2046 15.9437C21.6112 15.789 21.0844 15.7948 20.6243 15.9611C20.1641 16.1274 19.7748 16.4277 19.4563 16.8621C19.1421 17.2976 18.9056 17.8391 18.7468 18.4866C18.588 19.134 18.5482 19.7192 18.6274 20.242C18.7109 20.7658 18.9181 21.2079 19.2491 21.5682C19.5801 21.9286 20.0423 22.1861 20.6357 22.3407Z"
                            fill="white" />
                        <path
                            d="M29.6551 26.31C28.8988 26.1245 28.2707 25.8103 27.771 25.3675C27.2724 24.9203 26.93 24.381 26.7439 23.7496C26.5577 23.1182 26.5562 22.4291 26.7393 21.6823L28.1653 15.868L29.9681 16.2964L28.5421 22.1107C28.467 22.4172 28.4508 22.7084 28.4938 22.9844C28.5367 23.2603 28.6272 23.5113 28.7653 23.7374C28.9078 23.9645 29.0885 24.1576 29.3076 24.3165C29.5321 24.4723 29.7834 24.5843 30.0616 24.6525C30.3485 24.7229 30.6259 24.7382 30.8936 24.6987C31.1657 24.6602 31.4153 24.5726 31.6424 24.4361C31.8694 24.2996 32.0636 24.1184 32.225 23.8926C32.3907 23.6678 32.5106 23.4043 32.5847 23.1022L34.0107 17.2878L35.8103 17.7292L34.3812 23.5565C34.198 24.3033 33.8778 24.9134 33.4207 25.3871C32.9635 25.8607 32.4104 26.1804 31.7615 26.3461C31.1136 26.5076 30.4115 26.4955 29.6551 26.31Z"
                            fill="white" />
                        <path
                            d="M35.0962 27.4385L37.3828 18.1149L43.5119 19.618L43.1086 21.2626L38.753 20.1944L38.2639 22.1886L41.8371 23.065L41.4337 24.7096L37.8606 23.8332L37.273 26.2289L41.6286 27.2971L41.2253 28.9417L35.0962 27.4385Z"
                            fill="white" />
                        <path
                            d="M46.0397 30.3284C45.3442 30.1578 44.7458 29.8829 44.2443 29.5037C43.7482 29.1212 43.3754 28.6591 43.1258 28.1174C42.8815 27.5724 42.7889 26.9731 42.8478 26.3194L44.7663 26.5016C44.7654 27.0688 44.9338 27.5472 45.2715 27.9366C45.6092 28.326 46.0388 28.5847 46.5605 28.7126C46.8517 28.784 47.1454 28.808 47.4414 28.7845C47.7375 28.761 47.9942 28.6821 48.2115 28.5478C48.4331 28.4145 48.5757 28.2184 48.6392 27.9594C48.6625 27.8645 48.6695 27.7701 48.6603 27.6763C48.6564 27.5792 48.6314 27.4839 48.5853 27.3902C48.5391 27.2965 48.4637 27.2002 48.3589 27.1013C48.2585 27.0034 48.1238 26.9041 47.955 26.8032L45.6911 25.4929C45.5212 25.3963 45.3262 25.2707 45.1061 25.116C44.8903 24.9624 44.6911 24.7694 44.5085 24.537C44.3258 24.3046 44.1939 24.0251 44.1127 23.6986C44.0369 23.3688 44.0535 22.9816 44.1626 22.537C44.3161 21.9111 44.6023 21.4299 45.0212 21.0933C45.4402 20.7568 45.9397 20.5521 46.5198 20.4793C47.0999 20.4065 47.711 20.4511 48.3533 20.6132C48.9989 20.7807 49.55 21.0325 50.0067 21.3688C50.4634 21.705 50.8137 22.1181 51.0576 22.6081C51.3026 23.0938 51.4297 23.6466 51.4389 24.2667L49.4425 24.1203C49.4471 23.801 49.3813 23.5149 49.2452 23.2619C49.1091 23.0088 48.9239 22.7964 48.6895 22.6245C48.4595 22.4537 48.2043 22.3293 47.9239 22.2514C47.6478 22.1745 47.3753 22.1489 47.1063 22.1745C46.8428 22.1968 46.6132 22.2686 46.4176 22.3899C46.2262 22.5123 46.1036 22.6836 46.0496 22.9037C45.9998 23.1066 46.0221 23.2883 46.1164 23.4487C46.2118 23.6048 46.3456 23.7451 46.5178 23.8697C46.69 23.9943 46.8697 24.107 47.057 24.2079L48.5791 25.048C48.8066 25.1724 49.0549 25.3248 49.3241 25.5052C49.5942 25.6813 49.8408 25.8974 50.0637 26.1534C50.292 26.4062 50.4556 26.7071 50.5543 27.0562C50.6573 27.4064 50.6512 27.8168 50.5358 28.2873C50.413 28.788 50.199 29.2 49.8939 29.5233C49.5942 29.8433 49.236 30.0827 48.8192 30.2413C48.4035 30.3956 47.9548 30.4778 47.473 30.4877C46.9957 30.4988 46.5179 30.4457 46.0397 30.3284Z"
                            fill="white" />
                        <path
                            d="M53.2193 31.8833L55.1026 24.2042L52.1424 23.4782L52.5457 21.8336L60.2397 23.7206L59.8364 25.3652L56.8761 24.6392L54.9928 32.3183L53.2193 31.8833Z"
                            fill="white" />
                        <path d="M58.8835 33.2725L61.1702 23.9488L62.9437 24.3837L60.657 33.7074L58.8835 33.2725Z"
                            fill="white" />
                        <path
                            d="M66.3459 35.3086C65.407 35.0783 64.6461 34.6766 64.0631 34.1035C63.4845 33.5314 63.1 32.8353 62.9094 32.0152C62.7232 31.1962 62.7486 30.3032 62.9857 29.3363C63.2229 28.3694 63.6135 27.566 64.1575 26.926C64.7059 26.2872 65.3689 25.848 66.1465 25.6086C66.9285 25.3702 67.789 25.3661 68.7279 25.5964C69.6668 25.8267 70.4256 26.2279 71.0042 26.7999C71.5871 27.373 71.9717 28.0691 72.1579 28.8882C72.3485 29.7083 72.3252 30.6018 72.0881 31.5687C71.851 32.5356 71.4582 33.3385 70.9098 33.9774C70.3658 34.6173 69.7027 35.0565 68.9208 35.2948C68.1432 35.5343 67.2849 35.5389 66.3459 35.3086ZM66.7525 33.651C67.3459 33.8057 67.8726 33.7999 68.3328 33.6336C68.7929 33.4673 69.1801 33.1665 69.4943 32.731C69.8128 32.2966 70.0515 31.7556 70.2103 31.1081C70.369 30.4607 70.4067 29.875 70.3232 29.3511C70.244 28.8284 70.039 28.3868 69.708 28.0265C69.377 27.6661 68.9148 27.4086 68.3214 27.254C67.728 27.0993 67.2012 27.1051 66.7411 27.2714C66.2809 27.4377 65.8916 27.738 65.5731 28.1724C65.2589 28.6079 65.0224 29.1494 64.8636 29.7969C64.7048 30.4443 64.665 31.0295 64.7441 31.5523C64.8276 32.0761 65.0349 32.5182 65.3659 32.8785C65.6969 33.2389 66.1591 33.4964 66.7525 33.651Z"
                            fill="white" />
                        <path
                            d="M71.9986 36.489L74.2853 27.1653L76.0849 27.6067L78.6422 34.8235L80.1666 28.6077L81.9662 29.0491L79.6795 38.3728L77.8799 37.9314L75.3227 30.7146L73.7982 36.9304L71.9986 36.489Z"
                            fill="white" />
                        <path
                            d="M84.7506 39.8224C84.0551 39.6518 83.4566 39.3769 82.9551 38.9976C82.4591 38.6151 82.0862 38.153 81.8366 37.6113C81.5924 37.0663 81.4997 36.467 81.5586 35.8134L83.4771 35.9956C83.4762 36.5628 83.6446 37.0411 83.9823 37.4305C84.32 37.82 84.7496 38.0786 85.2713 38.2066C85.5625 38.278 85.8562 38.302 86.1523 38.2785C86.4483 38.255 86.705 38.1761 86.9223 38.0418C87.1439 37.9085 87.2865 37.7124 87.35 37.4534C87.3733 37.3584 87.3803 37.264 87.3711 37.1702C87.3672 37.0732 87.3422 36.9778 87.2961 36.8841C87.2499 36.7905 87.1745 36.6942 87.0697 36.5952C86.9693 36.4974 86.8347 36.398 86.6658 36.2971L84.4019 34.9868C84.2321 34.8903 84.0371 34.7646 83.8169 34.61C83.6011 34.4564 83.4019 34.2634 83.2193 34.031C83.0367 33.7985 82.9047 33.5191 82.8235 33.1926C82.7477 32.8628 82.7643 32.4756 82.8734 32.031C83.0269 31.4051 83.3131 30.9239 83.7321 30.5873C84.151 30.2507 84.6505 30.0461 85.2306 29.9732C85.8107 29.9004 86.4218 29.9451 87.0641 30.1072C87.7097 30.2746 88.2608 30.5265 88.7176 30.8628C89.1743 31.199 89.5246 31.6121 89.7684 32.1021C90.0134 32.5877 90.1405 33.1406 90.1497 33.7606L88.1533 33.6142C88.1579 33.295 88.0921 33.0089 87.956 32.7558C87.8199 32.5028 87.6347 32.2904 87.4004 32.1185C87.1703 31.9477 86.9151 31.8233 86.6347 31.7454C86.3586 31.6685 86.0861 31.6429 85.8172 31.6684C85.5536 31.6907 85.324 31.7626 85.1284 31.8839C84.9371 32.0063 84.8144 32.1776 84.7604 32.3977C84.7107 32.6006 84.7329 32.7822 84.8272 32.9426C84.9226 33.0987 85.0564 33.2391 85.2286 33.3637C85.4008 33.4883 85.5805 33.601 85.7678 33.7018L87.2899 34.5419C87.5174 34.6664 87.7657 34.8188 88.0349 34.9992C88.305 35.1753 88.5516 35.3913 88.7745 35.6474C89.0029 35.9001 89.1664 36.2011 89.2651 36.5502C89.3682 36.9004 89.362 37.3107 89.2466 37.7812C89.1238 38.2819 88.9098 38.694 88.6047 39.0173C88.3051 39.3373 87.9468 39.5766 87.53 39.7353C87.1143 39.8896 86.6656 39.9717 86.1839 39.9817C85.7065 39.9928 85.2287 39.9397 84.7506 39.8224Z"
                            fill="white" />
                        <defs>
                            <linearGradient id="paint0_linear_108_12950" x1="4.38437" y1="14.8539" x2="102.477"
                                y2="38.9116" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#2057E5" />
                                <stop offset="1" stop-color="#0075FF" />
                            </linearGradient>
                            <linearGradient id="paint1_linear_108_12950" x1="102.456" y1="38.9994" x2="4.36281"
                                y2="14.9418" gradientUnits="userSpaceOnUse">
                                <stop stop-color="white" stop-opacity="0" />
                                <stop offset="0.484375" stop-color="white" />
                                <stop offset="1" stop-color="white" stop-opacity="0" />
                            </linearGradient>
                            <linearGradient id="paint2_linear_108_12950" x1="10.624" y1="27.1981" x2="1.88302"
                                y2="25.0543" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#B4D1FF" />
                                <stop offset="1" stop-color="#5A9CFA" />
                            </linearGradient>
                            <linearGradient id="paint3_linear_108_12950" x1="96.3801" y1="26.0003" x2="105.121"
                                y2="28.1437" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#B4D1FF" />
                                <stop offset="1" stop-color="#5A9CFA" />
                            </linearGradient>
                        </defs>
                    </svg>
                </h2>
            </div>
            <?php
            wp_reset_postdata();
            if (have_rows('answer_for_questions')) {
                $countAccordion = 0;
                $leftContainerOrRight = '';
                ?>
                <div class="tours-list__block-elements">
                    <div class="tours-list__accordion-container-left">
                    <?php
                    while (have_rows('answer_for_questions')) {
                        the_row();
                        $countAccordion++;
                        $question = get_sub_field('question');
                        $answer = get_sub_field('answer');
                        if ($countAccordion % 2 !== 0) {
                            ?>
                            <div class="accordion accordion--primary accordion--front-page">
                                <div class="accordion__item">
                                    <div class="accordion__header">
                                        <button type="button" class="accordion__header-button">
                                            <span><?= $question ?></span>
                                            <span class="accordion__header-button-icon icon"></span>
                                        </button>
                                    </div>
                                    <div class="accordion__body">
                                        <div class="accordion__body-container">
                                            <div class="accordion-body__nav-list">
                                                <div class="accordion-body__content"><?= $answer ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                    </div> <!-- Закрываем блок tours-list__accordion-container-left -->

                    <div class="tours-list__accordion-container-right">
                    <?php
                    $countAccordion = 0; // Сбрасываем счетчик для второго блока
                    while (have_rows('answer_for_questions')) {
                        the_row();
                        $countAccordion++;
                        $question = get_sub_field('question');
                        $answer = get_sub_field('answer');
                        if ($countAccordion % 2 === 0) {
                            ?>
                            <div class="accordion accordion--primary accordion--front-page">
                                <div class="accordion__item">
                                    <div class="accordion__header">
                                        <button type="button" class="accordion__header-button">
                                            <span><?= $question ?></span>
                                            <span class="accordion__header-button-icon icon"></span>
                                        </button>
                                    </div>
                                    <div class="accordion__body">
                                        <div class="accordion__body-container">
                                            <div class="accordion-body__nav-list">
                                                <div class="accordion-body__content"><?= $answer ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                    </div> <!-- Закрываем блок tours-list__accordion-container-right -->
                </div> <!-- Закрываем tours-list__block-elements -->
                <?php
            }
            wp_reset_postdata();
            ?>
        </div>
    </div>
    <div class="main-content__item bg-white padding-205-30">
        <div class="tours-list margin-top-194">
            <h2 class="maybe-like__title">Возможно вам понравится</h2>
            <div class="tours-list__block-elements">
                <div class="tab-container show-tab">
                <?php if ($tourListMulti->have_posts()) {
                            while ($tourListMulti->have_posts()) {
                                $tourListMulti->the_post(); 
                                $uncoming_date = get_field('uncoming_date_tour');
                                $current_date = date('Y-m-d'); // Текущая дата без времени
                                $uncoming_timestamp = strtotime(str_replace('/', '-', $uncoming_date)); // Преобразование формата даты
                                if ($uncoming_timestamp >= strtotime($current_date)) {
                                ?>
                                <div class="block-elements__item" data-place>
                                    <div class="tours-list__bg-color"></div>
                                    <img class="tours-list__bg" src="<?= get_field('photo_card_tour')['url']; ?>"
                                        alt="">
                                    <a href="<?= get_post_permalink() ?>" class="tours-list__link-title" data-link><?= get_the_title(); ?></a>
                                    <span class="tours-list__day-and-date"><?= get_field('count_day_tour') ?>&nbsp;<?= get_field('count_day_tour_text'); ?>• Ближайшая дата <?= date('d.m', $uncoming_timestamp); ?></span>
                                    <div class="tour-list__price-container">
                                        <div class="tours-list__prices">
                                            <div class="tours-list__price-with-interest">
                                                <div class="tours-list__with-interest">
                                                    <div class="tours-list__special-class-flex">
                                                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12.6667 3.83337L3.33337 13.1667M11.3334 13.1667C10.9798 13.1667 10.6406 13.0262 10.3906 12.7762C10.1405 12.5261 10 12.187 10 11.8334C10 11.4798 10.1405 11.1406 10.3906 10.8906C10.6406 10.6405 10.9798 10.5 11.3334 10.5C11.687 10.5 12.0261 10.6405 12.2762 10.8906C12.5262 11.1406 12.6667 11.4798 12.6667 11.8334C12.6667 12.187 12.5262 12.5261 12.2762 12.7762C12.0261 13.0262 11.687 13.1667 11.3334 13.1667ZM4.66671 6.50004C4.31309 6.50004 3.97395 6.35956 3.7239 6.10952C3.47385 5.85947 3.33337 5.52033 3.33337 5.16671C3.33337 4.81309 3.47385 4.47395 3.7239 4.2239C3.97395 3.97385 4.31309 3.83337 4.66671 3.83337C5.02033 3.83337 5.35947 3.97385 5.60952 4.2239C5.85956 4.47395 6.00004 4.81309 6.00004 5.16671C6.00004 5.52033 5.85956 5.85947 5.60952 6.10952C5.35947 6.35956 5.02033 6.50004 4.66671 6.50004Z"
                                                                stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>

                                                        <?= get_field('price_with_interest'); ?> ₽
                                                    </div>
                                                </div>
                                                <div class="tours-list__without-interest"><?= get_field('price_without_interest'); ?> ₽</div>
                                            </div>
                                            <span class="tours-list__price-for-human">цена за 1 чел.</span>
                                        </div>
                                    </div>
                                </div>
                    <?php }}} wp_reset_postdata();?>
                    </div>
            </div>
        </div>
    </div>
                                    
</section>

<?php get_footer(); ?>