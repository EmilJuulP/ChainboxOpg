<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
<!--    <link rel="stylesheet" href="/wp-content/themes/modded_twentyseventeen/assets/css/woocommerce.css">-->

    
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <a class="logo pull-left" href="#"><img src="images/koekkengrej_logo.png" alt=""></a>
        <ul class="top-navigation pull-right list-unstyled">
            <li class="dropdown open-right" id="login-dropdown-container">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-sign-in fa-fw">::before</i>
                    <span class="hidden-sm hidden-xs">Sign in</span>
                    <b class="caret"></b>
                </a>
                <div class="dropdown-menu dropdown-login-with-arrow">
                    ::before
                    <form class="has-placeholders" id="top-login-form" method="post" action="/da/kundeomraade/" novalidate="novalidate">
                       ::before
                        <input type="hidden" name="actionid" value="signin">
                        <input type="hidden" name="redirect" value="/da/">
                        <div class="form-group required">
                            <label class="sr-only" for="login-email-field">E-mail</label>
                            <input type="text" name="username" class="form-control required" id="login-email-field" placeholder="E-mail">
                        </div>
                        <div class="form-group required">
                            <label class="sr-only" for="login-password-field">Password</label>
                            <input type="password" name="password" class="form-control required" id="login-password-field" placeholder="Password">
                        </div>
                        <div class="form-group pull-left">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="rememberlogin">
                                    <span>
                                        remember me
                                    </span>
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary pull-right">
                            <i class="fa fa-sign-in">
                                ::before
                            </i>
                            <span>Sign in</span>
                        </button>
                        ::after
                    </form>
                    <div class="login-links small">
                        ::before
                        <span class="pull-left">
                            <i class="fa fa-lock">::before</i>
                            <a tabindex="-1" href="/da/login/glemt-kodeord/">Forgot password?</a>
                        </span>
                        ::after
                    </div>
                    ::after
                </div>
            </li>
            <li class="dropdown open-right">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <img class="flag" src="images/da-flag" alt="flag">
                    <span class="hidden-sm hidden-xs">Dansk</span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu with-arrow">
                    ::before
                    <li>
                        <a href="/en/">
                            <img src="images/en-flag.png" alt=flag"" class="flag">
                            <span class>English</span>
                        </a>
                    </li>
                    ::after
                </ul>
            </li>
        </ul>
        <form action="/da/produktsoegning/" method="get" class="form-search navbar-search pull-right has-placeholders" autocomplete="off">
            <div class="input-group input-group-sm">
                <input type="text" name="query" id="search-query-field" class="form-control" placeholder="Search products" data-service-url="/da/produktsoegning/?typeahead=1" data-caption-products="Products" data-caption-categories="Categories" data-caption-pages="Pages" autocomplete="off">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                        <i class="fa fa-search">
                            ::before
                        </i>
                        <span class="sr-only">Search products</span>
                    </button>
                </div>
            </div>
        </form>
    </header>
    ::after
    <div id="main-navigation" class="navbar navbar-default navbar-fixed-compact">
        ::before
        <a class="visible-sm visible-xs mobile-btn-navbar-pull-left" id="navbar-collapse-button">
            <i class="fa fa-reorder"></i>
        </a>
        <a class="visible-sm visible-xs logo-mobile" href="/da/">
            <img src="/images/koekkengrej_logo_inverse.png" alt="logo">
        </a>
        <a class="visible-sm visible-xs mobile-btn-navbar pull-right" href="/da/checkout/" title="Indkøbskurv">
            <i class="fa fa-shopping-cart"></i>
        </a>
        <nav class="navbar-content hidden-xs hidden-sm">
            <form action="" class="form-seach mobile-menu-search has-placeholders visible-sm visible-xs" autocomplete="off">
                <i class="fa fa-search"></i>
                <input type="text" name="query" class="search-query form-control" placeholder="Search products">
            </form>
            <ul class="nav navbar-nav visible-sm visible-xs">
                <li class="nav-item">
                    <a href="/da/login/">
                        <span>Sign in</span>
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav">
                ::before
                <li class="nav-item" data-category="root">
                    <a href="/da/produkter/">
                        <span>Produkter</span>
                    </a>
                </li>
                <li class="ombutik nav-item">
                    <a href="/da/om-butikken/">
                        <span>Om butikken</span>
                    </a>
                </li>
                ::after
            </ul>
            <ul class="nav navbar-nav navbar-right">
                ::before
                <li id="checkout-link-container" class="pull-right dropdown open-right">
                    <a id="checkout-link" class="hidden-sm hidden-xs" href="/da/checkout/" title="Indkøbskurv">
                        <i class="fa fa-shopping-cart fa-lg">
                            ::before
                        </i>
                        <span>Indkøbskurv</span>
                    </a>
                    <div id="compact-cart-dropdown" class="dropdown-menu with-arrow">
                        ::before
                        <div id="compact-cart-contents">
                            <section class="compact-cart">
                                <div>The shopping cart is empty</div>
                            </section>
                        </div>
                        ::after
                    </div>
                </li>
                ::after
            </ul>
        </nav>
        ::after
    </div>
    <div id="nav-placeholder"></div>