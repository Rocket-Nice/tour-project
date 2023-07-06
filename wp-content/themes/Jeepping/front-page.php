<?php get_header();
$PhotoReview = get_field('review_gallery');
// Однодневные туры
$argsDayTours = array('post_type' => 'tour-pages', 'posts_per_page' => -1, 'orderby' => 'date', 'tour-pages-type' => 'day_tours');
$tourListDayTours = new WP_Query($argsDayTours);
// Тур выходного дня
$argsDayWeekend = array('post_type' => 'tour-pages', 'posts_per_page' => -1, 'orderby' => 'date', 'tour-pages-type' => 'weekend_tour');
$tourListWeekend = new WP_Query($argsDayWeekend);
// Многодневные туры
$argsMulti = array('post_type' => 'tour-pages', 'posts_per_page' => -1, 'orderby' => 'date', 'tour-pages-type' => 'multi_day_tours');
$tourListMulti = new WP_Query($argsMulti);

wp_reset_postdata();
?>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<section class="main-content page-container">
    <div class="main-content__item video padding-left-right padding-left-right-top padding-top-107">
        <!-- <video class="main-content__img-bg" autoplay muted loop>
            <source src="/wp-content/themes/Jeepping/assets/img/bg-1.mp4" type="video/mp4">
        </video> -->
        <div class="main-content__container margin-top-167">
            <div class="main-content__block-elements border-white">
                <div class="main-content__head-content">
                    <ul class="head-content__chips">
                        <li class="chips__item">Крафтово</li>
                        <li class="chips__item">Беззаботно</li>
                        <li class="chips__item">Доступно</li>
                    </ul>
                    <span class="head-content__year">2023</span>
                </div>
                <h2 class="main-content__title">Авторские джип туры
                    по Северной–Осетии</h2>
                <div class="block-elements__mobile">
                    <div class="block-elements__for-love">С любовью</div>
                    <span class="head-content__year">2023</span>
                </div>
                <div class="block-elements__down">
                    <button type="button" class="button button--header button--red button--small-red open-btn">
                        <div class="button__item-and-icon padding-unset">
                            <span>Подобрать тур</span>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.16699 15.8333L15.0003 5M15.0003 5V15.4M15.0003 5H4.60033" stroke="white"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </button>
                    <div class="block-elements__for-love">С любовью</div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-content__item item--flex-center padding-top-107 margin-top-vmeste">
        <picture class="main-content__img-bg main-content__special-class-for-img-contain">
            <source srcset="/wp-content/themes/Jeepping/assets/img/Вместе-mobile.png" media="(max-width: 577px)" />
            <source srcset="/wp-content/themes/Jeepping/assets/img/Вместе-mobile-320.png" media="(max-width: 374px)" />
            <img src="/wp-content/themes/Jeepping/assets/img/Вместе.png" alt="" loading="eager" />
        </picture>
        <div class="main-content__container">
            <div class="main-content__block-elements">
                <div class="block-elements__two-blocks">
                    <div class="two-block__container">
                        <div class="two-blocks__block">
                            <ul class="head-content__chips">
                                <li class="chips__item">
                                    <div class="chips__container">
                                        <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.94859 15.2785C6.81323 15.4413 6.55082 15.3097 6.60035 15.1039L7.60051 10.9471C7.62635 10.8397 7.56024 10.7317 7.45285 10.7059L5.12443 10.1456C4.97951 10.1108 4.92229 9.9353 5.01879 9.8217L10.2858 3.62091C10.4221 3.46043 10.682 3.59245 10.6327 3.79718L9.62785 7.97341C9.60201 8.0808 9.66812 8.18881 9.77552 8.21464L12.0016 8.75026C12.1456 8.78491 12.2033 8.95867 12.1086 9.07258L6.94859 15.2785Z"
                                                fill="white" />
                                        </svg>
                                        <p style="text-transform: uppercase;">НАША СИЛА</p>
                                    </div>
                                </li>
                            </ul>

                            <p class="two-blocks__text">Наша несомненная сила - это умение сращивать классные места в
                                единый
                                маршрут, тем самым
                                экономя ваше время и деньги. Мы показали и погрузили в эти красоты сотни
                                путешественников,
                                но все еще не вас.</p>
                        </div>
                    </div>
                    <div class="two-block__container">
                        <div class="two-blocks__block">
                            <ul class="head-content__chips">
                                <li class="chips__item">
                                    <div class="chips__container">
                                        <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15 7.66955C15.0021 8.56717 14.6464 9.43066 14.0076 10.0788C12.543 11.5552 11.1221 13.0946 9.60353 14.5168C9.25492 14.8377 8.70232 14.826 8.36931 14.4906L3.99226 10.0793C2.66925 8.74582 2.66925 6.59329 3.99226 5.26035C4.30495 4.94126 4.68103 4.68723 5.09771 4.51366C5.51438 4.34008 5.96298 4.25058 6.41629 4.25058C6.8696 4.25058 7.3182 4.34008 7.73487 4.51366C8.15155 4.68723 8.52763 4.94126 8.84032 5.26035L8.99992 5.42018L9.15892 5.26035C9.47224 4.94202 9.84843 4.68845 10.265 4.51484C10.6815 4.34123 11.1298 4.25115 11.583 4.25C12.495 4.25 13.3668 4.61401 14.007 5.26035C14.646 5.90835 15.0019 6.77185 15 7.66955Z"
                                                fill="white" />
                                        </svg>
                                        <p style="text-transform: uppercase;">НАША ЗАДАЧА</p>
                                    </div>
                                </li>
                            </ul>
                            <p class="two-blocks__text">Ощутить дух региона, познакомить с его классным бытом и кухней -
                                задача наших туров.</p>
                        </div>
                        <button type="button" class="button button--red button--big-red open-btn">
                            <div class="button__item-and-icon">
                                <span>Посмотреть туры</span>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.16699 15.8333L15.0003 5M15.0003 5V15.4M15.0003 5H4.60033" stroke="white"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-content__item bg-white padding-60-20">
        <div class="tours-list margin-top-194">
            <h2 class="tours-list__title">Познай Осетию</h2>
            <div class="tabs-container--for-scroll">
                <div class="tabs-container tabs-container--tours-list">
                    <span class="tab tab-active" data-tab="day-tours">Однодневные туры</span>
                    <span class="tab" data-tab="weekend-tour">Тур выходного дня</span>
                    <span class="tab" data-tab="multi-day-tours">Многодневные туры</span>
                </div>
            </div>
            <div class="tours-list__block-elements">
                <div id="day-tours" class="tab-container show-tab">
                    <?php if ($tourListDayTours->have_posts()) {
                            while ($tourListDayTours->have_posts()) {
                                $tourListDayTours->the_post();
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
                                    <span class="tours-list__day-and-date"><?= get_field('count_day_tour') ?>&nbsp;<?= get_field('count_day_tour_text'); ?> • Ближайшая дата <?= date('d.m', $uncoming_timestamp); ?></span>
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
                <div id="weekend-tour" class="tab-container">
                    <?php if ($tourListWeekend->have_posts()) {
                            while ($tourListWeekend->have_posts()) {
                                $tourListWeekend->the_post();
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
                                    <span class="tours-list__day-and-date"><?= get_field('count_day_tour') ?>&nbsp;<?= get_field('count_day_tour_text'); ?> • Ближайшая дата <?= date('d.m', $uncoming_timestamp); ?></span>
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
                <div id="multi-day-tours" class="tab-container">
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
                                    <span class="tours-list__day-and-date"><?= get_field('count_day_tour') ?>&nbsp;<?= get_field('count_day_tour_text'); ?> • Ближайшая дата <?= date('d.m', $uncoming_timestamp); ?></span>
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
    <div class="main-content__item bg-white padding-60-20">
        <div class="personal-offer margin-top-194">
            <div class="personal-offer__title-container">
                <div class="personal-offer__title-container">
                    <h2 class="personal-offer__title">
                        Хотите персональное<br>предложение?
                    </h2>
                    <svg class="before-4-step" width="106" height="54" viewBox="0 0 106 54" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M5.95533 4.85604C6.61319 2.17412 9.32061 0.533298 12.0025 1.19115L96.5193 21.9225L103.273 32.0738L99.2828 48.3415C98.6249 51.0234 95.9175 52.6643 93.2356 52.0064L8.71886 31.275L1.96497 21.1238L5.95533 4.85604Z"
                            fill="#D9D9D9" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M5.95533 4.85604C6.61319 2.17412 9.32061 0.533298 12.0025 1.19115L96.5193 21.9225L103.273 32.0738L99.2828 48.3415C98.6249 51.0234 95.9175 52.6643 93.2356 52.0064L8.71886 31.275L1.96497 21.1238L5.95533 4.85604Z"
                            fill="url(#paint0_linear_108_12812)" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M5.95533 4.85604C6.61319 2.17412 9.32061 0.533298 12.0025 1.19115L96.5193 21.9225L103.273 32.0738L99.2828 48.3415C98.6249 51.0234 95.9175 52.6643 93.2356 52.0064L8.71886 31.275L1.96497 21.1238L5.95533 4.85604Z"
                            fill="url(#paint1_linear_108_12812)" fill-opacity="0.5" />
                        <path
                            d="M10.2285 25.2144L8.74036 31.2812L1.96409 21.1279L8.76255 22.7955C9.83532 23.0587 10.4916 24.1417 10.2285 25.2144Z"
                            fill="url(#paint2_linear_108_12812)" />
                        <path
                            d="M95.0116 27.989L96.5 21.92L103.276 32.0751L96.4776 30.4078C95.4048 30.1447 94.7485 29.0617 95.0116 27.989Z"
                            fill="url(#paint3_linear_108_12812)" />
                        <path
                            d="M16.9974 22.803L19.2844 13.4794L23.2608 14.4548C23.3523 14.4772 23.4734 14.5115 23.6239 14.5576C23.7798 14.6004 23.9161 14.6476 24.0329 14.6991C24.5742 14.9234 24.9892 15.2197 25.2779 15.5879C25.5709 15.9573 25.7501 16.3765 25.8153 16.8455C25.8816 17.3102 25.8507 17.8037 25.7225 18.326C25.5944 18.8483 25.3908 19.3018 25.1115 19.6863C24.8377 20.0676 24.4855 20.3542 24.0548 20.546C23.6284 20.7388 23.1256 20.81 22.5463 20.7594C22.42 20.7467 22.2773 20.7255 22.1182 20.6956C21.9592 20.6657 21.836 20.6401 21.7488 20.6187L19.5513 20.0797L18.7763 23.2394L16.9974 22.803ZM19.9547 18.4351L22.0737 18.9549C22.1653 18.9773 22.2666 18.9976 22.3778 19.0157C22.4889 19.0338 22.5934 19.0412 22.6913 19.0377C22.947 19.0318 23.1588 18.9693 23.3266 18.8504C23.4955 18.727 23.6268 18.5785 23.7202 18.4046C23.8191 18.2275 23.8892 18.0548 23.9305 17.8865C23.9718 17.7181 23.9891 17.5347 23.9823 17.3363C23.9809 17.1346 23.9334 16.9422 23.8396 16.759C23.7469 16.5715 23.5886 16.416 23.3647 16.2924C23.2795 16.2441 23.1834 16.2022 23.0766 16.1669C22.9697 16.1315 22.8705 16.1026 22.7789 16.0801L20.6599 15.5603L19.9547 18.4351Z"
                            fill="white" />
                        <path
                            d="M25.7662 24.9539L28.0533 15.6303L34.201 17.1383L33.7976 18.7829L29.4288 17.7113L28.9396 19.7055L32.5236 20.5846L32.1202 22.2292L28.5362 21.3501L27.9486 23.7457L32.3174 24.8174L31.914 26.4619L25.7662 24.9539Z"
                            fill="white" />
                        <path
                            d="M33.7432 26.9106L36.0302 17.587L40.0066 18.5624C40.0981 18.5849 40.2192 18.6191 40.3696 18.6652C40.5255 18.708 40.6619 18.7552 40.7787 18.8067C41.32 19.031 41.7349 19.3273 42.0236 19.6956C42.3167 20.0649 42.4959 20.4841 42.5611 20.9531C42.6274 21.4179 42.5964 21.9114 42.4683 22.4337C42.2767 23.2149 41.9164 23.8359 41.3874 24.2964C40.8594 24.7527 40.161 24.9429 39.2921 24.8671L38.4946 24.7263L36.2971 24.1873L35.5221 27.347L33.7432 26.9106ZM39.0537 28.2133L38.127 23.9635L40.044 24.063L41.0681 28.7074L39.0537 28.2133ZM36.7005 22.5427L38.8195 23.0625C38.9111 23.085 39.0124 23.1053 39.1235 23.1234C39.2347 23.1415 39.3392 23.1488 39.4371 23.1454C39.6928 23.1394 39.9046 23.077 40.0724 22.958C40.2413 22.8347 40.3725 22.6861 40.466 22.5123C40.5649 22.3352 40.635 22.1624 40.6763 21.9941C40.7176 21.8258 40.7349 21.6424 40.7281 21.4439C40.7267 21.2422 40.6791 21.0498 40.5854 20.8666C40.4927 20.6792 40.3344 20.5236 40.1105 20.4001C40.0253 20.3517 39.9292 20.3099 39.8224 20.2745C39.7155 20.2391 39.6162 20.2102 39.5247 20.1877L37.4057 19.668L36.7005 22.5427Z"
                            fill="white" />
                        <path
                            d="M46.2777 30.1912C45.5801 30.0201 44.9797 29.7447 44.4765 29.365C43.9788 28.982 43.6046 28.5196 43.3539 27.9776C43.1086 27.4323 43.0152 26.8328 43.0739 26.1791L44.998 26.3628C44.9975 26.9301 45.1667 27.4086 45.5056 27.7984C45.8445 28.1881 46.2756 28.4471 46.7988 28.5755C47.0909 28.6471 47.3855 28.6713 47.6824 28.6481C47.9793 28.6248 48.2367 28.5461 48.4545 28.4119C48.6767 28.2787 48.8195 28.0827 48.883 27.8237C48.9063 27.7287 48.9133 27.6343 48.904 27.5405C48.9 27.4435 48.8749 27.3481 48.8286 27.2543C48.7822 27.1606 48.7065 27.0642 48.6013 26.9652C48.5006 26.8673 48.3655 26.7678 48.1961 26.6667L45.9248 25.3545C45.7544 25.2578 45.5588 25.132 45.3379 24.9772C45.1214 24.8234 44.9215 24.6302 44.7382 24.3976C44.5548 24.165 44.4224 23.8854 44.3407 23.5588C44.2644 23.2289 44.2808 22.8417 44.3899 22.3971C44.5434 21.7712 44.8302 21.2901 45.2501 20.9538C45.67 20.6174 46.1708 20.4131 46.7525 20.3407C47.3342 20.2683 47.9472 20.3134 48.5914 20.476C49.239 20.644 49.7918 20.8963 50.2501 21.233C50.7083 21.5696 51.0599 21.983 51.3048 22.4733C51.5508 22.9592 51.6786 23.5122 51.6883 24.1324L49.6861 23.9845C49.6905 23.6652 49.6243 23.379 49.4876 23.1258C49.351 22.8726 49.1651 22.66 48.93 22.4879C48.6992 22.3169 48.4431 22.1923 48.1619 22.1142C47.8849 22.0371 47.6116 22.0112 47.3419 22.0366C47.0776 22.0587 46.8474 22.1304 46.6513 22.2516C46.4595 22.3739 46.3366 22.5451 46.2826 22.7652C46.2329 22.9681 46.2553 23.1498 46.35 23.3103C46.4457 23.4665 46.58 23.607 46.7528 23.7317C46.9256 23.8565 47.1059 23.9694 47.2937 24.0703L48.8208 24.9117C49.0491 25.0363 49.2982 25.189 49.5682 25.3696C49.8393 25.5459 50.0867 25.7622 50.3104 26.0184C50.5396 26.2714 50.7038 26.5725 50.803 26.9218C50.9066 27.2721 50.9007 27.6825 50.7853 28.153C50.6625 28.6537 50.4482 29.0657 50.1424 29.3888C49.8421 29.7087 49.483 29.9478 49.0651 30.1061C48.6483 30.2601 48.1983 30.342 47.7152 30.3516C47.2365 30.3623 46.7573 30.3088 46.2777 30.1912Z"
                            fill="white" />
                        <path
                            d="M55.7988 32.5266C54.857 32.2956 54.0936 31.8933 53.5086 31.3196C52.928 30.747 52.5418 30.0506 52.3501 29.2302C52.1628 28.4108 52.1878 27.5177 52.4249 26.5508C52.6621 25.5839 53.0533 24.7807 53.5985 24.141C54.148 23.5025 54.8126 23.0637 55.5923 22.8248C56.3764 22.587 57.2393 22.5836 58.1811 22.8146C59.1229 23.0456 59.8841 23.4474 60.4647 24.02C61.0497 24.5936 61.4359 25.2901 61.6232 26.1094C61.8149 26.9298 61.7921 27.8235 61.5549 28.7904C61.3178 29.7573 60.9244 30.56 60.3749 31.1986C59.8297 31.8382 59.1651 32.277 58.381 32.5148C57.6013 32.7537 56.7406 32.7577 55.7988 32.5266ZM56.2054 30.8691C56.8006 31.0243 57.3289 31.0189 57.7902 30.8529C58.2516 30.6869 58.6396 30.3862 58.9544 29.9509C59.2736 29.5167 59.5126 28.9758 59.6714 28.3283C59.8302 27.6809 59.8676 27.0951 59.7835 26.5711C59.7037 26.0482 59.4978 25.6064 59.1656 25.2458C58.8334 24.8851 58.3697 24.6272 57.7745 24.4721C57.1793 24.3169 56.651 24.3224 56.1897 24.4883C55.7283 24.6543 55.3381 24.9544 55.0189 25.3887C54.7041 25.824 54.4673 26.3654 54.3085 27.0129C54.1497 27.6603 54.1101 28.2455 54.1899 28.7685C54.274 29.2925 54.4821 29.7348 54.8143 30.0954C55.1465 30.4561 55.6102 30.714 56.2054 30.8691Z"
                            fill="white" />
                        <path
                            d="M61.9786 33.8366L64.2656 24.513L66.0707 24.9558L68.6401 32.1758L70.1648 25.96L71.9699 26.4028L69.6829 35.7264L67.8778 35.2836L65.3084 28.0636L63.7837 34.2794L61.9786 33.8366Z"
                            fill="white" />
                        <path
                            d="M71.1154 36.0778L76.28 27.46L78.9353 28.1114L79.526 38.1408L77.6947 37.6916L77.148 28.8399L77.4881 28.9233L72.9466 36.527L71.1154 36.0778ZM73.3184 34.5589L73.7218 32.9143L78.6923 34.1335L78.2889 35.7781L73.3184 34.5589Z"
                            fill="white" />
                        <path
                            d="M81.0906 38.5246L83.3776 29.201L85.1565 29.6374L83.2729 37.3164L87.3278 38.311L86.9244 39.9556L81.0906 38.5246Z"
                            fill="white" />
                        <defs>
                            <linearGradient id="paint0_linear_108_12812" x1="3.50295" y1="14.8538" x2="101.595"
                                y2="38.9151" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#E93B57" />
                                <stop offset="1" stop-color="#EC5B54" />
                            </linearGradient>
                            <linearGradient id="paint1_linear_108_12812" x1="101.573" y1="39.003" x2="3.4814"
                                y2="14.9417" gradientUnits="userSpaceOnUse">
                                <stop stop-color="white" stop-opacity="0" />
                                <stop offset="0.484375" stop-color="white" />
                                <stop offset="1" stop-color="white" stop-opacity="0" />
                            </linearGradient>
                            <linearGradient id="paint2_linear_108_12812" x1="9.74192" y1="27.1981" x2="1.00105"
                                y2="25.054" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#F8B1AF" />
                                <stop offset="1" stop-color="#F46D79" />
                            </linearGradient>
                            <linearGradient id="paint3_linear_108_12812" x1="95.4983" y1="26.0043" x2="104.239"
                                y2="28.148" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#F8B1AF" />
                                <stop offset="1" stop-color="#F46D79" />
                            </linearGradient>
                        </defs>
                    </svg>

                    <svg class="after-4-step" width="106" height="54" viewBox="0 0 106 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.95551 4.85609C6.61327 2.17414 9.32063 0.533216 12.0026 1.19097L96.5201 21.9192L103.274 32.0702L99.2846 48.3381C98.6268 51.02 95.9195 52.6609 93.2375 52.0032L8.72003 31.275L1.96576 21.124L5.95551 4.85609Z" fill="#6bd876"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.95551 4.85609C6.61327 2.17414 9.32063 0.533216 12.0026 1.19097L96.5201 21.9192L103.274 32.0702L99.2846 48.3381C98.6268 51.02 95.9195 52.6609 93.2375 52.0032L8.72003 31.275L1.96576 21.124L5.95551 4.85609Z" fill="url(#paint0_linear_108_12931)"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.95551 4.85609C6.61327 2.17414 9.32063 0.533216 12.0026 1.19097L96.5201 21.9192L103.274 32.0702L99.2846 48.3381C98.6268 51.02 95.9195 52.6609 93.2375 52.0032L8.72003 31.275L1.96576 21.124L5.95551 4.85609Z" fill="url(#paint1_linear_108_12931)" fill-opacity="0.5"/>
                        <path d="M10.2291 25.2144L8.74121 31.2812L1.96457 21.1282L8.76309 22.7955C9.83587 23.0586 10.4922 24.1416 10.2291 25.2144Z" fill="url(#paint2_linear_108_12931)"/>
                        <path d="M95.0128 27.9869L96.501 21.918L103.278 32.0728L96.4789 30.4057C95.4061 30.1426 94.7497 29.0597 95.0128 27.9869Z" fill="url(#paint3_linear_108_12931)"/>
                        <path d="M20.8721 24.5883C19.8931 24.3482 19.1 23.9279 18.4929 23.3273C17.8904 22.7279 17.4904 21.9979 17.293 21.1375C17.1001 20.2781 17.1282 19.3408 17.3772 18.3256C17.6262 17.3103 18.035 16.4664 18.6036 15.7938C19.1767 15.1223 19.869 14.6603 20.6805 14.4076C21.4966 14.1561 22.3941 14.1504 23.3731 14.3905C24.4971 14.6662 25.3715 15.1761 25.9962 15.9204C26.6254 16.6657 26.9797 17.5526 27.059 18.5811L25.0695 18.6409C25.0338 18.0027 24.8407 17.4677 24.4902 17.0357C24.1407 16.5993 23.6261 16.2977 22.9463 16.1309C22.3253 15.9786 21.7725 15.9896 21.2877 16.1638C20.8074 16.3391 20.4014 16.6528 20.0695 17.1047C19.7376 17.5567 19.4883 18.1226 19.3216 18.8025C19.1548 19.4823 19.114 20.0993 19.1991 20.6536C19.2842 21.2078 19.4991 21.6737 19.8437 22.0513C20.1929 22.4301 20.678 22.6956 21.2989 22.8479C21.9787 23.0146 22.5745 22.9853 23.0863 22.7601C23.598 22.5348 24.0167 22.1498 24.3425 21.6051L26.0786 22.5786C25.5324 23.4537 24.808 24.0761 23.9053 24.4457C23.0072 24.8164 21.9961 24.864 20.8721 24.5883ZM30.7584 27.013C29.7794 26.7729 28.9864 26.3525 28.3793 25.752C27.7767 25.1525 27.3767 24.4226 27.1793 23.5621C26.9865 22.7028 27.0145 21.7655 27.2635 20.7502C27.5125 19.735 27.9213 18.8911 28.4899 18.2185C29.063 17.547 29.7553 17.0849 30.5668 16.8323C31.3829 16.5808 32.2804 16.5751 33.2594 16.8152C34.2384 17.0553 35.0292 17.475 35.6317 18.0745C36.2388 18.675 36.6388 19.405 36.8317 20.2643C37.0291 21.1248 37.0033 22.0626 36.7543 23.0779C36.5053 24.0931 36.0942 24.9365 35.5211 25.608C34.9525 26.2806 34.2602 26.7426 33.4442 26.9942C32.6326 27.2468 31.7374 27.2531 30.7584 27.013ZM31.1852 25.2725C31.8039 25.4339 32.3534 25.4269 32.8337 25.2516C33.3139 25.0763 33.7183 24.7598 34.0467 24.3022C34.3797 23.8457 34.6296 23.2775 34.7963 22.5977C34.963 21.9178 35.0033 21.3031 34.9171 20.7534C34.8354 20.2048 34.6222 19.7417 34.2776 19.3641C33.933 18.9864 33.4513 18.7169 32.8326 18.5556C32.2139 18.3942 31.6644 18.4012 31.1841 18.5765C30.7039 18.7519 30.2973 19.0678 29.9643 19.5243C29.6358 19.9819 29.3882 20.5506 29.2215 21.2304C29.0548 21.9103 29.0122 22.5245 29.0939 23.0731C29.1801 23.6228 29.3956 24.0864 29.7402 24.4641C30.0848 24.8417 30.5665 25.1112 31.1852 25.2725ZM36.6526 28.2423L39.0536 18.4524L40.7124 18.8593L42.3545 26.1523L47.1846 20.4466L48.8435 20.8534L46.4425 30.6433L44.7156 30.2198L46.1496 24.3731L41.8738 29.5228L41.2212 29.3628L39.8133 22.8191L38.3794 28.6658L36.6526 28.2423ZM48.0925 31.048L50.4935 21.2581L54.627 22.2719C54.7222 22.2952 54.848 22.3309 55.0044 22.3788C55.1664 22.4234 55.3081 22.4725 55.4295 22.5263C55.9919 22.7604 56.4228 23.0703 56.7222 23.456C57.0262 23.8429 57.2115 24.2823 57.2782 24.7744C57.346 25.2619 57.3127 25.7799 57.1782 26.3283C57.0437 26.8767 56.8308 27.353 56.5394 27.7573C56.2537 28.1581 55.8867 28.4597 55.4382 28.662C54.9943 28.8655 54.4712 28.9414 53.8688 28.8897C53.7375 28.8768 53.5891 28.8548 53.4237 28.8238C53.2583 28.7929 53.1303 28.7663 53.0396 28.7441L50.7553 28.1838L49.9417 31.5015L48.0925 31.048ZM51.1789 26.457L53.3816 26.9972C53.4768 27.0206 53.5821 27.0416 53.6976 27.0603C53.8132 27.079 53.9219 27.0865 54.0237 27.0826C54.2897 27.0758 54.5101 27.0097 54.685 26.8844C54.8609 26.7546 54.9978 26.5984 55.0954 26.4157C55.1987 26.2296 55.272 26.0482 55.3154 25.8714C55.3587 25.6947 55.3771 25.5022 55.3705 25.294C55.3696 25.0823 55.3206 24.8805 55.2235 24.6885C55.1276 24.492 54.9633 24.3292 54.7307 24.2001C54.6422 24.1495 54.5424 24.1058 54.4313 24.069C54.3202 24.0321 54.2171 24.002 54.1219 23.9787L51.9192 23.4385L51.1789 26.457ZM56.8135 33.1868L59.2145 23.397L61.0637 23.8505L59.0862 31.9135L63.3013 32.9473L62.8778 34.6741L56.8135 33.1868ZM63.7754 34.8943L66.1764 25.1044L72.567 26.6717L72.1435 28.3985L67.6021 27.2847L67.0885 29.3787L70.8141 30.2924L70.3906 32.0192L66.665 31.1055L66.0481 33.621L70.5895 34.7348L70.166 36.4616L63.7754 34.8943ZM73.8079 37.3548L75.7854 29.2917L72.6988 28.5347L73.1224 26.8079L81.1446 28.7754L80.7211 30.5022L77.6346 29.7452L75.6571 37.8083L73.8079 37.3548ZM79.5778 38.7699L81.9788 28.98L88.3694 30.5473L87.9459 32.2741L83.4045 31.1603L82.891 33.2543L86.6165 34.168L86.193 35.8948L82.4674 34.9811L81.8505 37.4966L86.3919 38.6104L85.9684 40.3372L79.5778 38.7699Z" fill="white"/>
                        <defs>
                        <linearGradient id="paint0_linear_108_12931" x1="3.50351" y1="14.8539" x2="101.596" y2="38.9116" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#5ED56A"/>
                        <stop offset="1" stop-color="#5ED46A"/>
                        </linearGradient>
                        <linearGradient id="paint1_linear_108_12931" x1="101.575" y1="38.9994" x2="3.48195" y2="14.9418" gradientUnits="userSpaceOnUse">
                        <stop stop-color="white" stop-opacity="0"/>
                        <stop offset="0.484375" stop-color="white"/>
                        <stop offset="1" stop-color="white" stop-opacity="0"/>
                        </linearGradient>
                        <linearGradient id="paint2_linear_108_12931" x1="9.74263" y1="27.1981" x2="1.00167" y2="25.0543" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#BDFEC4"/>
                        <stop offset="1" stop-color="#56EC65"/>
                        </linearGradient>
                        <linearGradient id="paint3_linear_108_12931" x1="95.4995" y1="26.0022" x2="104.24" y2="28.1456" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#BDFEC4"/>
                        <stop offset="1" stop-color="#56EC65"/>
                        </linearGradient>
                        </defs>
                    </svg>
                </div>
                <div class="personal-offer__count-steps">
                    <div class="persona-offer__step active-step-js">
                        <p class="personal-offer__count-step">1</p>
                        <p class="personal-offer__step-active">шаг</p>
                    </div>
                    <div class="persona-offer__step">
                        <p class="personal-offer__count-step">2</p>
                        <p class="personal-offer__step-active">шаг</p>
                    </div>
                    <div class="persona-offer__step">
                        <p class="personal-offer__count-step">3</p>
                        <p class="personal-offer__step-active">шаг</p>
                    </div>
                    <div class="persona-offer__step">
                        <p class="personal-offer__count-step">4</p>
                        <p class="personal-offer__step-active">шаг</p>
                    </div>
                </div>
            </div>
            <?php get_template_part('./components/personal-offer'); ?>
        </div>
    </div>
    <div class="main-content__item bg-white padding-60-20">
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
    <div class="main-content__item bg-white padding-60-20 padding-left-right-unset">
        <div class="margin-top-194">
            <h2 class="reviews__title">Что пишут о нас</h2>
            <div class="reviews-grid">
                <?php
                if ($PhotoReview ?? false) {
                    $countPhoto = 0;
                    foreach ($PhotoReview as $image_id) {
                        $countPhoto++;
                        ?>
                        <a class="reviews-item <?php if ($countPhoto > 10) { ?> reviews-item--active <?php } ?>" data-fancybox="img" href="<?= esc_url($image_id["url"]); ?>">
                            <img src="<?= esc_url($image_id["url"]); ?>" alt="">
                        </a>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
        <!-- Кнопка "Показать все отзывы" -->
        <div class="reviews__button-all">
            <button type="button" class="button button--header button--red reviews__btn-see-more button--big-red">
                <div class="button__item-and-icon">
                    <span>Смотреть все отзывы</span>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.16699 15.8333L15.0003 5M15.0003 5V15.4M15.0003 5H4.60033" stroke="white"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </div>
            </button>
        </div>
    </div>
    <div class="main-content__item video padding-left-right main-content-flex-center">
        <!-- <video class="main-content__img-bg" autoplay muted loop>
            <source src="/wp-content/themes/Jeepping/assets/img/bg-2.mp4" type="video/mp4">
        </video> -->
        <div class="main-content__container">
            <div class="main-content__block-elements main-content__video-and-text">
                <h2 class="main-content__title">Все еще
                    думаете?
                    <div class="tours-list__with-interest">
                        <div class="tours-list__special-class-flex">
                            <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.94859 15.2785C6.81323 15.4413 6.55082 15.3097 6.60035 15.1039L7.60051 10.9471C7.62635 10.8397 7.56024 10.7317 7.45285 10.7059L5.12443 10.1456C4.97951 10.1108 4.92229 9.9353 5.01879 9.8217L10.2858 3.62091C10.4221 3.46043 10.682 3.59245 10.6327 3.79718L9.62785 7.97341C9.60201 8.0808 9.66812 8.18881 9.77552 8.21464L12.0016 8.75026C12.1456 8.78491 12.2033 8.95867 12.1086 9.07258L6.94859 15.2785Z"
                                    fill="white"></path>
                            </svg>

                            Вот, что вас ждет. 
                        </div>
                    </div>
                </h2>
                <button type="button" class="button button--header button--red button--big-red open-btn">
                    <div class="button__item-and-icon" style="padding: unset;">
                        <span>Подобрать тур</span>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.16699 15.8333L15.0003 5M15.0003 5V15.4M15.0003 5H4.60033" stroke="white"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </button>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>