<!DOCTYPE html><html lang="en" data-bs-theme="light" data-pwa="true"><head>
    <meta charset="utf-8">

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">

    <!-- SEO Meta Tags -->
    <title>FBL - <?= $title ?? '' ?></title>
    <meta name="description" content="Cartzilla - Multipurpose E-Commerce Bootstrap HTML Template">
    <meta name="keywords" content="online shop, e-commerce, online store, market, multipurpose, product landing, cart, checkout, ui kit, light and dark mode, bootstrap, html5, css3, javascript, gallery, slider, mobile, pwa">
    <meta name="author" content="Createx Studio">

    <!-- Webmanifest + Favicon / App icons -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="manifest" href="<?= base_url('/assets/default/manifest.json') ?>">
    <link rel="icon" type="image/png" href="<?= base_url('/assets/default/app-icons/icon-32x32.png') ?>" sizes="32x32">
    <link rel="apple-touch-icon" href="<?= base_url('/assets/default/app-icons/icon-180x180.png') ?>">

    <!-- Theme switcher (color modes) -->
    <script src="<?= base_url('/assets/default/js/theme-switcher.js') ?>"></script>

    <!-- Preloaded local web font (Inter) -->
    <link rel="preload" href="<?= base_url('/assets/default/fonts/inter-variable-latin.woff2') ?>" as="font" type="font/woff2" crossorigin="">

    <!-- Font icons -->
    <link rel="preload" href="<?= base_url('/assets/default/icons/cartzilla-icons.woff2') ?>" as="font" type="font/woff2" crossorigin="">
    <link rel="stylesheet" href="<?= base_url('/assets/default/icons/cartzilla-icons.min.css') ?>">

    <!-- Vendor styles -->
    <link rel="stylesheet" href="<?= base_url('/assets/default/vendor/swiper/swiper-bundle.min.css') ?>">

    <!-- Bootstrap + Theme styles -->
    <link rel="preload" href="<?= base_url('/assets/default/css/theme.min.css') ?>" as="style">
    <link rel="preload" href="<?= base_url('/assets/default/css/theme.rtl.min.css') ?>" as="style">
    <link rel="stylesheet" href="<?= base_url('/assets/default/css/theme.min.css') ?>" id="theme-styles">

</head>


<!-- Body -->
<body>

<nav class="offcanvas offcanvas-start" id="navbarNav" tabindex="-1" aria-labelledby="navbarNavLabel">
    <div class="offcanvas-header py-3">
        <h5 class="offcanvas-title" id="navbarNavLabel">Навигация</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body pt-0 pb-3">

        <!-- Navbar nav -->
        <div class="accordion" id="navigation">

            <!-- Categories collapse visible on screens < 992px wide (lg breakpoint) -->
            <div class="accordion-item border-0 d-lg-none">
                <div class="accordion-header" id="headingCategories">
                    <button type="button" class="accordion-button animate-underline fw-medium collapsed py-2" data-bs-toggle="collapse" data-bs-target="#categoriesMenu" aria-expanded="false" aria-controls="categoriesMenu">
                        <i class="ci-grid fs-lg me-2"></i>
                        <span class="d-block animate-target py-1">Каталог</span>
                    </button>
                </div>
                <div class="accordion-collapse collapse" id="categoriesMenu" aria-labelledby="headingCategories" data-bs-parent="#navigation">
                    <div class="accordion-body pb-3">
                        <div class="dropdown-menu show position-static d-flex flex-column gap-4 shadow-none p-4">
                            <div>

                                <?php
                                    new \App\Widgets\Menu\Menu([
                                        'table' => 'categories',
                                        'tpl' => 'mobile_menu_tpl',
                                        'container' => 'ul',
                                        'class' => 'nav flex-column gap-2 mt-n2',
                                        'append' => '</ul>',
                                        'cacheTime' => 20,
                                        'cacheKey' => 'mobile-catalog-menu'
                                    ]);
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="h6 fw-medium py-1 mb-0">
            <a class="d-block animate-underline py-1" href="<?= base_href('/')?>">
                <span class="d-inline-block animate-target py-1">Главная</span>
            </a>
        </div>
        <div class="h6 fw-medium py-1 mb-0">
            <a class="d-block animate-underline py-1" href="<?= base_href('/posts')?>">
                <span class="d-inline-block animate-target py-1">Новости</span>
            </a>
        </div>
    </div>

    <!-- Account button visible on screens < 768px wide (md breakpoint) -->
    <div class="offcanvas-header flex-column align-items-start d-md-none">
        <a class="btn btn-lg btn-outline-secondary w-100 rounded-pill" href="account-signin.html">
            <i class="ci-user fs-lg ms-n1 me-2"></i>
            Аккаунт
        </a>
    </div>
</nav>

<header class="navbar navbar-expand navbar-sticky sticky-top d-block bg-body z-fixed py-1 py-lg-0 py-xl-1 px-0" data-sticky-element="">
    <div class="container justify-content-start py-2 py-lg-3">

        <!-- Offcanvas menu toggler (Hamburger) -->
        <button type="button" class="navbar-toggler d-block flex-shrink-0 me-3 me-sm-4" data-bs-toggle="offcanvas" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar brand (Logo) -->
        <a class="navbar-brand fs-2 p-0 pe-lg-2 pe-xxl-0 me-0 me-sm-3 me-md-4 me-xxl-5" href="<?= base_href('/')?>">Cartzilla</a>

        <!-- Categories dropdown visible on screens > 991px wide (lg breakpoint) -->
        <div class="dropdown d-none d-lg-block w-100 me-4" style="max-width: 200px">
            <button type="button" class="btn btn-lg btn-secondary w-100 border-0 rounded-pill" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ci-grid fs-lg me-2 ms-n1"></i>
                Каталог
                <i class="ci-chevron-down fs-lg me-2 ms-auto me-n1"></i>
            </button>

            <?php
                new \App\Widgets\Menu\Menu([
                    'table' => 'categories',
                    'tpl' => 'desktop_mega_menu_tpl',
                    'container' => 'div',
                    'class' => 'dropdown-menu rounded-4 p-4',
                    'prepend' => '<div class="row">',
                    'append' => '</div>',
                    'attrs' => ['style' => '--cz-dropdown-spacer: .75rem; margin-left: -75px; min-width: 1000px;'],
                    'cacheTime' => 20,
                    'cacheKey' => 'desktop-catalog-menu'
                ]);
            ?>

        </div>

        <!-- Search bar visible on screens > 768px wide (md breakpoint) -->
        <div class="position-relative w-100 d-none d-md-block me-3 me-xl-4">
            <input type="search" class="form-control form-control-lg rounded-pill" placeholder="Поиск..." aria-label="Search">
            <button type="button" class="btn btn-icon btn-ghost fs-lg btn-secondary text-bo border-0 position-absolute top-0 end-0 rounded-circle mt-1 me-1" aria-label="Search button">
                <i class="ci-search"></i>
            </button>
        </div>

        <!-- Button group -->
        <div class="d-flex align-items-center gap-md-1 gap-lg-2 ms-auto">

            <!-- Theme switcher (light/dark/auto) -->
            <div class="dropdown">
                <button type="button" class="theme-switcher btn btn-icon btn-outline-secondary fs-lg border-0 rounded-circle animate-scale" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Toggle theme (light)">
              <span class="theme-icon-active d-flex animate-target">
                <i class="ci-sun"></i>
              </span>
                </button>
                <ul class="dropdown-menu" style="--cz-dropdown-min-width: 9rem">
                    <li>
                        <button type="button" class="dropdown-item active" data-bs-theme-value="light" aria-pressed="true">
                  <span class="theme-icon d-flex fs-base me-2">
                    <i class="ci-sun"></i>
                  </span>
                            <span class="theme-label">Светлая</span>
                            <i class="item-active-indicator ci-check ms-auto"></i>
                        </button>
                    </li>
                    <li>
                        <button type="button" class="dropdown-item" data-bs-theme-value="dark" aria-pressed="false">
                  <span class="theme-icon d-flex fs-base me-2">
                    <i class="ci-moon"></i>
                  </span>
                            <span class="theme-label">Тёмная</span>
                            <i class="item-active-indicator ci-check ms-auto"></i>
                        </button>
                    </li>
                    <li>
                        <button type="button" class="dropdown-item" data-bs-theme-value="auto" aria-pressed="false">
                  <span class="theme-icon d-flex fs-base me-2">
                    <i class="ci-auto"></i>
                  </span>
                            <span class="theme-label">Авто</span>
                            <i class="item-active-indicator ci-check ms-auto"></i>
                        </button>
                    </li>
                </ul>
            </div>

            <!-- Search toggle button visible on screens < 768px wide (md breakpoint) -->
            <button type="button" class="btn btn-icon fs-xl btn-outline-secondary border-0 rounded-circle animate-shake d-md-none" data-bs-toggle="collapse" data-bs-target="#searchBar" aria-controls="searchBar" aria-label="Toggle search bar">
                <i class="ci-search animate-target"></i>
            </button>

            <!-- Account button visible on screens > 768px wide (md breakpoint) -->
            <a class="btn btn-icon fs-lg btn-outline-secondary border-0 rounded-circle animate-shake d-none d-md-inline-flex" href="account-signin.html">
                <i class="ci-user animate-target"></i>
                <span class="visually-hidden">Account</span>
            </a>

            <!-- Cart button -->
            <button type="button" class="btn btn-icon fs-xl btn-outline-secondary position-relative border-0 rounded-circle animate-scale" data-bs-toggle="offcanvas" data-bs-target="#shoppingCart" aria-controls="shoppingCart" aria-label="Shopping cart">
                <span class="position-absolute top-0 start-100 badge fs-xs text-bg-primary rounded-pill ms-n3 z-2" style="--cz-badge-padding-y: .25em; --cz-badge-padding-x: .42em">8</span>
                <i class="ci-shopping-cart animate-target"></i>
            </button>
        </div>
    </div>

    <!-- Search collapse available on screens < 768px wide (md breakpoint) -->
    <div class="collapse d-md-none" id="searchBar">
        <div class="container pt-2 pb-3">
            <div class="position-relative">
                <i class="ci-search position-absolute top-50 translate-middle-y d-flex fs-lg ms-3"></i>
                <input type="search" class="form-control form-icon-start rounded-pill" placeholder="Search for products" data-autofocus="collapse">
            </div>
        </div>
    </div>
</header>

<?php get_alerts(); ?>

<?= $this->content; ?>

<!-- Back to top button -->
<div class="floating-buttons position-fixed top-50 end-0 z-sticky me-3 me-xl-4 pb-4">
    <a class="btn-scroll-top btn btn-sm bg-body border-0 rounded-pill shadow animate-slide-end" href="#top">
        Top
        <i class="ci-arrow-right fs-base ms-1 me-n1 animate-target"></i>
        <span class="position-absolute top-0 start-0 w-100 h-100 border rounded-pill z-0"></span>
        <svg class="position-absolute top-0 start-0 w-100 h-100 z-1" viewbox="0 0 62 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x=".75" y=".75" width="60.5" height="30.5" rx="15.25" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"></rect>
        </svg>
    </a>
</div>

<!-- Vendor scripts -->
<script src="<?= base_url('/assets/default/vendor/swiper/swiper-bundle.min.js') ?>"></script>

<!-- Bootstrap + Theme scripts -->
<script src="<?= base_url('/assets/default/js/theme.min.js') ?>"></script>


</body></html>
