<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="description" content="description">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <?php wp_head(); ?>
    <!-- <script src="https://radario.ru/frontend/src/api/openapi/openapi.js"></script>
    <script>radario.Widgets.setDefaultParams</script> -->
    <!-- <link rel="apple-touch-icon" sizes="180x180" href="/wp-content/themes/fenixtheatre/assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/wp-content/themes/fenixtheatre/assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/wp-content/themes/fenixtheatre/assets/img/favicon-16x16.png">
    <link rel="manifest" href="/wp-content/themes/fenixtheatre/assets/img/site.webmanifest">
    <link rel="mask-icon" href="/wp-content/themes/fenixtheatre/assets/img/safari-pinned-tab.svg" color="#5bbad5"> -->
    <meta name="msapplication-TileColor" content="#da532c">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
    <script src="https://unpkg.com/imask"></script>
    <script src="./src/js/components/swiped-events.min.js"></script>
</head>

<?php get_template_part('./components/header-nav-menu', null, [
    'theme' => 'white',
]); ?>
 