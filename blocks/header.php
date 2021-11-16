<?php 
    // Hàm lấy base url bằng PHP
    function getBaseUrl() {
        // output: /myproject/index.php
        $currentPath = $_SERVER['PHP_SELF'];

        // output: Array ( [dirname] => /myproject [basename] => index.php [extension] => php [filename] => index ) 
        $pathInfo = pathinfo($currentPath);

        // output: localhost
        $hostName = $_SERVER['HTTP_HOST'];

        // output: http://
        $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"], 0, 5)) == 'https' ? 'https' : 'http';

        // return: http://localhost/myproject/
        return ($protocol . '://' . $hostName . $pathInfo['dirname'] . "/");
    }
    
    $currentPage = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
?>

<!-- Header - start -->
<header class="page-header">
    <div class="header-container ">
        <!-- Header top-bar -->
        <div class="header-topbar">
            <div class="header-topbar__advertisement">
                <img src="https://mageblueskytech.com/armania/media/wysiwyg/topbar-advastment.jpg" alt="">
            </div>
            <div class=" header-topbar__inner-wrap">
                <div class="grid wide">
                    <div class="row container header-topbar__inner">
                        <div class="topbar-inner__link">
                            <p>Welcome to our online store - Always free delivery</p>
                        </div>
                        <div class="topbar-inner__link">
                            <a href="" class="topbar-inner__link__store-locator" title="Store location">Store Location</a>
                            <div class="topbar-inner__link__language-currency menu-hover">
                                <div class="topbar__switcher-language">
                                    <div class="topbar__switcher-language__option ">
                                        <div onclick="" class="topbar__switcher-language__trigger language-option">
                                            <span>English 21</span>
                                            <i class=" ti-angle-down arrow-down-icon"></i>
                                        </div>
                                        
                                        <ul class="topbar__switcher-language__drop-down drop-down-menu">
                                            <li class="topbar__switcher-language__item drop-down-menu__item">
                                                <a class="topbar__switcher-language__link drop-down-menu__link" href="">English 22</a>
                                            </li>
                                            <li class="topbar__switcher-language__item drop-down-menu__item">
                                                <a class="topbar__switcher-language__link drop-down-menu__link" href="">English 23</a>
                                            </li>
                                            <li class="topbar__switcher-language__item drop-down-menu__item">
                                                <a class="topbar__switcher-language__link drop-down-menu__link" href="">English 24</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="topbar-inner__link__language-currency menu-hover">
                                <div class="topbar__switcher-language">
                                    <div class="topbar__switcher-language__option">
                                        <div  class="topbar__switcher-language__trigger money-option">
                                            <span>USD - US Dollar</span>
                                            <i class=" ti-angle-down arrow-down-icon"></i>
                                        </div>
                                        <ul class="topbar__switcher-language__drop-down drop-down-menu">
                                            <li class="topbar__switcher-language__item drop-down-menu__item">
                                                <a class="topbar__switcher-language__link drop-down-menu__link" href="">GBP - British Pound</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Header middle-bar -->
        <div class="grid wide header-middle">
            <div class="row container header-middle__container">
                <a href="<?php echo getBaseUrl()?>" class="header-logo">
                    <img src="https://mageblueskytech.com/armania/media/logo/stores/23/logo.png" alt="">
                </a>
                <!-- Search -->
                <div class="header-search">
                    <div class="header-search-container">
                        <div class="header-search__block-search">
                            <div class="block-search__content">
                                <i class="search-icon fas fa-search"></i>
                                <div class="search-field">
                                    <div class="search-field__control">
                                        <input  type="text" class="search-field__input-text" onfocus="displaySearchSuggest()" onblur="hideSearchSuggest()" placeholder="Search entire store here...">
                                        <div class="search-field__control__search-suite">
                                            <!-- Search suggest -->
                                            <!-- Remove class 'hidden' to display -->
                                            <div class="search-suggest hidden">
                                                <div class="search-suggest__container">
                                                    <div class="search-suggest__heading">
                                                        <span>Products</span>
                                                        <a href=""class="search-suggest__see-all">
                                                            <span>See all</span>    
                                                            <span class="see-all__result">20</span>
                                                        </a>
                                                    </div>
                                                    <div class="search-suggest__product">
                                                        <ul class="search-suggest__product__list">
                                                            <li class="search-suggest__product__item">
                                                                <a href="" class="search-suggest__product__link">
                                                                    <div class="search-suggest__img">
                                                                        <a href="" class="search-suggest__img__link" alt="" title="iPad Mini wifi 4G">
                                                                            <img src="https://mageblueskytech.com/armania/media/catalog/product/cache/1285fb951e45abaaca1c3c3bf25a9673/t/a/tablet_samll_01_1.jpg" alt="">
                                                                        </a>
                                                                    </div>
                                                                    <div class="search-suggest__info">
                                                                        <div class="search-suggest__info__titile">
                                                                            <a href="" class="search-suggest__info__titile-link">iPad Mini wifi 4G </a>
                                                                        </div>
                                                                        <div class="search-suggest__info__review">
                                                                            <div class="product-review-summary">
                                                                                <div class="rating-result">
                                                                                    <i class="rating-icon active far fa-star"></i>
                                                                                    <i class="rating-icon active far fa-star"></i>
                                                                                    <i class="rating-icon active far fa-star"></i>
                                                                                    <i class="rating-icon far fa-star"></i>
                                                                                    <i class="rating-icon far fa-star"></i>
                                                                                </div>
                                                                                <div class="reviews-actions">
                                                                                    <a href="" class="action view">
                                                                                        <span>1</span>
                                                                                        <span>review</span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="search-suggest__info__price">
                                                                            <div class="special-price">$368.99</div>
                                                                            <div class="old-price">$569.99</div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li class="search-suggest__product__item">
                                                                <a href="" class="search-suggest__product__link">
                                                                    <div class="search-suggest__img">
                                                                        <a href="" class="search-suggest__img__link" alt="" title="iPad Mini wifi 4G">
                                                                            <img src="https://mageblueskytech.com/armania/media/catalog/product/cache/1285fb951e45abaaca1c3c3bf25a9673/t/a/tablet_samll_01_1.jpg" alt="">
                                                                        </a>
                                                                    </div>
                                                                    <div class="search-suggest__info">
                                                                        <div class="search-suggest__info__titile">
                                                                            <a href="" class="search-suggest__info__titile-link">iPad Mini wifi 4G </a>
                                                                        </div>
                                                                        <div class="search-suggest__info__review">
                                                                            <div class="product-review-summary">
                                                                                <div class="rating-result">
                                                                                    <i class="rating-icon active far fa-star"></i>
                                                                                    <i class="rating-icon active far fa-star"></i>
                                                                                    <i class="rating-icon active far fa-star"></i>
                                                                                    <i class="rating-icon far fa-star"></i>
                                                                                    <i class="rating-icon far fa-star"></i>
                                                                                </div>
                                                                                <div class="reviews-actions">
                                                                                    <a href="" class="action view">
                                                                                        <span>1</span>
                                                                                        <span>review</span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="search-suggest__info__price">
                                                                            <div class="special-price">$368.99</div>
                                                                            <div class="old-price">$569.99</div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Search suggest - No result -->
                                            <div class="search-no-result hidden">No Result</div>
                                        </div>
                                    </div>

                                    <div class="search-field__action">
                                        <button class="search-field__action-btn" type="submit">
                                            <span>Search</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="header-search__search-key">
                            <ul class="search-key__list">
                                <li class="search-key__item">
                                    <a href="#" class="search-key__link">Computer & Laptops</a>
                                </li>
                                <li class="search-key__item">
                                    <a href="#" class="search-key__link">Camera & Photo</a>
                                </li>
                                <li class="search-key__item">
                                    <a href="#" class="search-key__link">SmartPhone & Tablets</a>
                                </li>
                                <li class="search-key__item">
                                    <a href="#" class="search-key__link">Games & Consoles</a>
                                </li>
                                <li class="search-key__item">
                                    <a href="#" class="search-key__link">Fashion & Jewellry</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="header-action">
                    <div class="header-action__wish-list">
                        <i class="header-action__wish-list-icon header-icon far fa-heart"></i>
                        <span class="wish-list__count">0</span>
                    </div>
                    <!-- Cart -->
                    <div class="header-action__cart">
                        <div class="header-action__cart-header dropdown-btn">
                            <i class="header-action__cart-icon header-icon fas fa-shopping-cart"></i>
                            <span class="cart__count">4</span>
                        </div>

                        <div class="header-action__cart-list dropdown-content">
                            <div class="header-cart-list-wrapper">
                                <div class="close-btn header-cart-list__close-btn">
                                    <i class="ti-close"></i>
                                </div>
                                
                                <!-- Cart has items -->
                                <div class="header-cart-has-items">
                                    <div class="header-cart-has-items__wrapper">
                                        <ol class="header-cart__list">
                                            <li class="header-cart__item">
                                                <a href="" class="header-cart__item-img">
                                                    <img src="./assets/img/products/1-product_m-03.jpg" alt="">
                                                </a>
                                                <div class="header-cart__item-detail">
                                                    <a href="" class="item-detail__name">iPad Mini wifi 4G</a>
                                                    <div class="item-detail__pricing">
                                                        <div class="item-detail__price-container">$368.99</div> 
                                                        <i class="qty-mul-icon ti-close"></i>
                                                        <div class="item-detail__qty">1</div>
                                                    </div>
                                                </div>
                                                <div class="header-cart__item-action">
                                                    <div class="item-action__primary">
                                                        <a href="" class="item-action__primary-link">
                                                            <i class="ti-close"></i>
                                                        </a>
                                                    </div>
                                                    <div class="item-action__secondary">
                                                        <a href="" class="item-action__secondary-link">
                                                            <i class="fas fa-cog"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="header-cart__item">
                                                <a href="" class="header-cart__item-img">
                                                    <img src="./assets/img/products/2-product_m-06.jpg" alt="">
                                                </a>
                                                <div class="header-cart__item-detail">
                                                    <a href="" class="item-detail__name">Lorem ipsum dolor sit</a>
                                                    <div class="item-detail__pricing">
                                                        <div class="item-detail__price-container">$368.99</div> 
                                                        <i class="qty-mul-icon ti-close"></i>
                                                        <div class="item-detail__qty">1</div>
                                                    </div>
                                                </div>
                                                <div class="header-cart__item-action">
                                                    <div class="item-action__primary">
                                                        <a href="" class="item-action__primary-link">
                                                            <i class="ti-close"></i>
                                                        </a>
                                                    </div>
                                                    <div class="item-action__secondary">
                                                        <a href="" class="item-action__secondary-link">
                                                            <i class="fas fa-cog"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="header-cart__item">
                                                <a href="" class="header-cart__item-img">
                                                    <img src="./assets/img/products/2-product_m-02.jpg" alt="">
                                                </a>
                                                <div class="header-cart__item-detail">
                                                    <a href="" class="item-detail__name">Lorem ipsum dolor sit amet, consectetur adipis</a>
                                                    <div class="item-detail__pricing">
                                                        <div class="item-detail__price-container">$368.99</div> 
                                                        <i class="qty-mul-icon ti-close"></i>
                                                        <div class="item-detail__qty">1</div>
                                                    </div>
                                                </div>
                                                <div class="header-cart__item-action">
                                                    <div class="item-action__primary">
                                                        <a href="" class="item-action__primary-link">
                                                            <i class="ti-close"></i>
                                                        </a>
                                                    </div>
                                                    <div class="item-action__secondary">
                                                        <a href="" class="item-action__secondary-link">
                                                            <i class="fas fa-cog"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="header-cart__item">
                                                <a href="" class="header-cart__item-img">
                                                    <img src="./assets/img/products/4-shoes-01.jpg" alt="">
                                                </a>
                                                <div class="header-cart__item-detail">
                                                    <a href="" class="item-detail__name">Lorem ipsum dolor sit</a>
                                                    <div class="item-detail__pricing">
                                                        <div class="item-detail__price-container">$368.99</div> 
                                                        <i class="qty-mul-icon ti-close"></i>
                                                        <div class="item-detail__qty">1</div>
                                                    </div>
                                                </div>
                                                <div class="header-cart__item-action">
                                                    <div class="item-action__primary">
                                                        <a href="" class="item-action__primary-link">
                                                            <i class="ti-close"></i>
                                                        </a>
                                                    </div>
                                                    <div class="item-action__secondary">
                                                        <a href="" class="item-action__secondary-link">
                                                            <i class="fas fa-cog"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ol>
                                    </div>

                                    <div class="header-cart-has-items__subtotal">
                                        <span class="items__subtotal__label">Cart Subtotal</span>
                                        <div class="items__subtotal__price">$2368.99</div>
                                    </div>
                                    <div class="header-cart-has-items__action">
                                        <a href="express-checkout.php"class="btn check-out-btn d-block">Proceed to Checkout</a>
                                    </div>
                                    <div class="header-cart-has-items__action">
                                        <a href="cart-checkout.php" class="btn-primary items__action__view-card">View Cart</a>
                                    </div>
                                
                                </div>

                                <!-- Cart has no item -->
                                <div class="hidden header-cart-no-item__msg">You have no items in your shopping cart.</div>
                            </div>
                        </div>

                    </div>
                    <div class="header-action__account">
                        <div class="header-action__account-icon">
                            <i class="far fa-user-circle"></i>
                        </div>
                        <div class="header-action__account-wrap">
                            <a href="login.php"class="account__link">
                                Sign In
                            </a>
                            <a href="create-account.php" class="account__link">
                                Create an Account
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header content -->
        <div class="grid wide header-content">
            <div class="row container header-content__container">
                <nav class="col l-10 m-9 header-content__nav">
                    <!-- <div class="vertical-menu">
                        <div class="vertical-menu__wrapper">
                            <nav class="vertical-menu-category">
                                <h3  class="vertical-menu-category__title">
                                    <i class="ti-menu-alt"></i>
                                    <span>All Categories</span>
                                </h3>
                                <ul class="vertical-menu-category__list">
                                    <h3 class="mobile-primary-menu__title">
                                        <i class="close-btn ti-close" id="close-category"></i>
                                        <span>All Categories</span>
                                    </h3>
                                    <li class="vertical-menu-category__item">
                                        <a href="" class="vertical-menu-category__link">
                                            <i class="vertical-munu-category__link-icon fas fa-mobile-alt"></i>
                                            Smart Phones 
                                            <i class="icon-arrow-right ti-angle-right"></i>
                                        </a>
                                        <div class="grid wide vertical-menu__sub-category">
                                            <div class="row sub-category__list-wrapper ">
                                                <ul class="col l-4 m-12 c-12 sub-category__list">
                                                    <li class="sub-category__item">
                                                        <a href="" class="sub-category__link">
                                                            SmartPhone
                                                            <i class="ti-angle-down not-pc"></i>
                                                        </a>
                                                        <ul class="sub-child-menu">
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Carrier Phones</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Unlocked Phones</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Phone & Cellphone</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Cellphone Charges</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="sub-category__item">
                                                        <a href="" class="sub-category__link">
                                                            Cell Phones
                                                            <i class="ti-angle-down not-pc"></i>
                                                        </a>
                                                        <ul class="sub-child-menu ">
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Carrier Phones</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Unlocked Phones</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Phone & Cellphone</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Cellphone Charges</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Printers & Supplies</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Accessories</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>

                                                <ul class="col l-4 m-12 c-12 sub-category__list">
                                                    <li class="sub-category__item">
                                                        <a href="" class="sub-category__link">
                                                            Laptop & Computer 
                                                            <i class="ti-angle-down not-pc"></i>
                                                        </a>
                                                        <ul class="sub-child-menu">
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Desktop Computer</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Monitor</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Hard Driver & Storage</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">iPad & Tablets</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Laptops</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Printer & Supplies</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Computer Accessories</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="sub-category__item">
                                                        <a href="" class="sub-category__link">
                                                            Keybroad & Computer
                                                            <i class="ti-angle-down not-pc"></i>
                                                        </a>
                                                        <ul class="sub-child-menu">
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Home Audio Speakers</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Projectors</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Tvs</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>

                                                <div class="col l-4 sub-category__img">
                                                    <img src="./assets/img/sub-menu/bg_smart-phone.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="vertical-menu-category__item">
                                        <a href="" class="vertical-menu-category__link">
                                            <i class="fas vertical-munu-category__link-icon fa-headphones-alt"></i>
                                            Head Phones 
                                            <i class="icon-arrow-right ti-angle-right"></i>
                                        </a>
                                        <div class="grid wide vertical-menu__sub-category">
                                            <div class="row sub-category__list-wrapper ">
                                                <ul class="col l-6 m-12 c-12 sub-category__list">
                                                    <li class="sub-category__item">
                                                        <a href="" class="sub-category__link">
                                                            Headphone
                                                            <i class="ti-angle-down not-pc"></i>
                                                        </a>
                                                        <ul class="sub-child-menu">
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Carrier Phones</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Unlocked Phones</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Phone & Cellphone</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Cellphone Charges</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="sub-category__item">
                                                        <a href="" class="sub-category__link">
                                                            Accessories
                                                            <i class="ti-angle-down not-pc"></i>
                                                        </a>
                                                        <ul class="sub-child-menu ">
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Carrier Phones</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Unlocked Phones</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Phone & Cellphone</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Cellphone Charges</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Printers & Supplies</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Accessories</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>

                                                <ul class="col l-6 m-12 c-12 sub-category__list">
                                                    <li class="sub-category__item">
                                                        <a href="" class="sub-category__link">
                                                            Laptop & Computer
                                                            <i class="ti-angle-down not-pc"></i>
                                                        </a>
                                                        <ul class="sub-child-menu">
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Desktop Computer</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Monitor</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Hard Driver & Storage</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">iPad & Tablets</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Laptops</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Printer & Supplies</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Computer Accessories</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="vertical-menu-category__item">
                                        <a href="" class="vertical-menu-category__link">
                                            <i class ="vertical-munu-category__link-icon fas fa-camera"></i>
                                            Cameras & Photos
                                            <i class="icon-arrow-right ti-angle-right"></i>
                                        </a>
                                        <div class="grid wide vertical-menu__sub-category">
                                            <div class="row sub-category__list-wrapper ">
                                                <ul class="col l-3 m-12 c-12 sub-category__list">
                                                    <li class="sub-category__item">
                                                        <a href="" class="sub-category__link">
                                                            Cameras
                                                            <i class="ti-angle-down not-pc"></i>
                                                        </a>
                                                        <ul class="sub-child-menu">
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Carrier Phones</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Unlocked Phones</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Phone & Cellphone</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Cellphone Charges</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <ul class="col l-3 m-12 c-12 sub-category__list">
                                                    <li class="sub-category__item">
                                                        <a href="" class="sub-category__link">
                                                            Accessories
                                                            <i class="ti-angle-down not-pc"></i>
                                                        </a>
                                                        <ul class="sub-child-menu ">
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Carrier Phones</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Unlocked Phones</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Phone & Cellphone</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Cellphone Charges</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Printers & Supplies</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Accessories</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <ul class="col l-3 m-12 c-12 sub-category__list">
                                                    <li class="sub-category__item">
                                                        <a href="" class="sub-category__link">
                                                            Cell Phones
                                                            <i class="ti-angle-down not-pc"></i>
                                                        </a>
                                                        <ul class="sub-child-menu ">
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Carrier Phones</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Unlocked Phones</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Phone & Cellphone</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Cellphone Charges</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Printers & Supplies</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Accessories</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>

                                                <ul class="col l-3 m-12 c-12 sub-category__list">
                                                    <li class="sub-category__item">
                                                        <a href="" class="sub-category__link">
                                                            Laptop & Computer
                                                            <i class="ti-angle-down not-pc"></i>
                                                        </a>
                                                        <ul class="sub-child-menu">
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Desktop Computer</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Monitor</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Hard Driver & Storage</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">iPad & Tablets</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Laptops</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Computer Accessories</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <div class="sub-category__list__img">
                                                    <img src="./assets/img/sub-menu/vertical_img-10_4_.jpg" alt="">
                                                    <img src="./assets/img/sub-menu/vertical_img-10_5_.jpg" alt="">
                                                    <img src="./assets/img/sub-menu/vertical_img-10_6_.jpg" alt="">
                                                    <img src="./assets/img/sub-menu/vertical_img-10_7_.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    
                                    <li class="vertical-menu-category__item">
                                        <a href="" class="vertical-menu-category__link">
                                            <i class= "vertical-munu-category__link-icon fas fa-sink"></i>
                                                Electric Kitchens
                                                <i class="icon-arrow-right ti-angle-right"></i>
                                        </a>
                                        <div class="grid wide  vertical-menu__sub-category">
                                            <div class="row sub-category__list-wrapper ">
                                                <ul class="col l-4 m-12 c-12 sub-category__list">
                                                    <li class="sub-category__item">
                                                        <a href="" class="sub-category__link">
                                                            Kettlet
                                                            <i class="ti-angle-down not-pc"></i>
                                                        </a>
                                                        <ul class="sub-child-menu">
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Carrier Phones</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Unlocked Phones</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Phone & Cellphone</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Cellphone Charges</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <ul class="col l-4 m-12 c-12 sub-category__list">
                                                    <li class="sub-category__item">
                                                        <a href="" class="sub-category__link">
                                                            Washingmachine
                                                            <i class="ti-angle-down not-pc"></i>
                                                        </a>
                                                        <ul class="sub-child-menu ">
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Carrier Phones</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Unlocked Phones</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Phone & Cellphone</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Cellphone Charges</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Printers & Supplies</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <ul class="col l-4 m-12 c-12 sub-category__list">
                                                    <li class="sub-category__item">
                                                        <a href="" class="sub-category__link">
                                                            Fridge
                                                            <i class="ti-angle-down not-pc"></i>
                                                        </a>
                                                        <ul class="sub-child-menu ">
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Carrier Phones</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Unlocked Phones</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Phone & Cellphone</a>
                                                            </li>
                                                            <li class="sub-child-menu__item">
                                                                <a href="" class="sub-child-menu__link">Cellphone Charges</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>

                                                <div class="sub-category__list__img">
                                                    <img src="./assets/img/sub-menu/kitchen-vertical-3-1.png" alt="">
                                                    <img src="./assets/img/sub-menu/kitchen-vertical-4-1.png" alt="">
                                                    <img src="./assets/img/sub-menu/kitchen-vertical-5-1.jpg" alt="">
                                                    <img src="./assets/img/sub-menu/kitchen-vertical-6-1.jpg" alt="">
                                                    <img src="./assets/img/sub-menu/kitchen-vertical-7-1.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="vertical-menu-category__item">
                                        <a href="" class="vertical-menu-category__link">
                                            <i class="vertical-munu-category__link-icon fas fa-tablet-alt"></i>
                                                Tablets & Mac
                                        </a>
                                    </li>
                                    <li class="vertical-menu-category__item">
                                        <a href="" class="vertical-menu-category__link">
                                            <i class="vertical-munu-category__link-icon far fa-gem"></i>
                                                Jewelrys
                                        </a>
                                    </li>
                                    <li class="vertical-menu-category__item">
                                        <a href="" class="vertical-menu-category__link">
                                            <i class="vertical-munu-category__link-icon fas fa-tshirt"></i>
                                                Fashion Clothings
                                        </a>
                                    </li>
                                    <li class="vertical-menu-category__item">
                                        <a href="" class="vertical-menu-category__link">
                                            <i class="vertical-munu-category__link-icon fas fa-wifi"></i>
                                                Router Wifi
                                        </a>
                                    </li>
                                    <li class="vertical-menu-category__item">
                                        <a href="" class="vertical-menu-category__link">
                                            <i class="vertical-munu-category__link-icon fas fa-podcast"></i>
                                                Ultrasound
                                        </a>
                                    </li>
                                    <li class="vertical-menu-category__item">
                                        <a href="" class="vertical-menu-category__link">
                                            <i class="vertical-munu-category__link-icon fas fa-memory"></i>
                                                Computer Card
                                        </a>
                                    </li>
                                    <li class="vertical-menu-category__item">
                                        <a href="" class="vertical-menu-category__link">
                                            <i class="vertical-munu-category__link-icon fas fa-hat-cowboy"></i>
                                                Shoes & Hats 
                                        </a>
                                    </li>
                                    <li class="vertical-menu-category__item">
                                        <a href="" class="vertical-menu-category__link">
                                                More Categories
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div> -->
                    <div class="just-mobile" style="width: 100%;">
                        <i class="ti-menu menu-icon"></i>
                    </div>
                    <nav class="primary-menu menu-wrapper">
                        <ul class="primary-menu__list">
                            <h3 class="mobile-primary-menu__title">
                                <span>Menu</span>
                                <i class="close-btn ti-close" id="close-menu"></i>
                            </h3>
                            <li class="primary-menu__item">
                                <a href="<?php echo getBaseUrl()?>" class="primary-menu__link <?php if($currentPage == getBaseUrl()) echo "page-current"?>">Home</a>
                            </li>
                            <li class="primary-menu__item">
                                <a href="<?php echo getBaseUrl()."shop.php"?>" class="primary-menu__link <?php if($currentPage == getBaseUrl()."shop.php") echo "page-current"?>">
                                    Shop
                                    <span class="primary-menu__link-hot">HOT!</span>
                                </a>
                            </li>
                            <li class="primary-menu__item menu-hover ">
                                <span class="primary-menu__link pointer dropdown-btn">
                                    Page
                                    <i class="ti-angle-down arrow-down-icon"></i>
                                </span>
                                <ul class="primary-menu__submenu drop-down-menu">
                                    <li class="drop-down-menu__item">
                                        <a href="" class="drop-down-menu__link">About Us</a>
                                    </li>
                                    <li class="drop-down-menu__item">
                                        <a href="" class="drop-down-menu__link">Store Locator</a>
                                    </li>
                                    <li class="drop-down-menu__item">
                                        <a href="" class="drop-down-menu__link">Shop by brand</a>
                                    </li>
                                    <li class="drop-down-menu__item">
                                        <a href="" class="drop-down-menu__link">Faq</a>
                                    </li>
                                    <li class="drop-down-menu__item">
                                        <a href="" class="drop-down-menu__link">404 page </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="primary-menu__item">
                                <a href="<?php echo getBaseUrl()."blog.php"?>" class="primary-menu__link <?php if($currentPage == getBaseUrl()."blog.php") echo "page-current"?>">Blog</a>
                            </li>
                            <li class="primary-menu__item">
                                <a href="<?php echo getBaseUrl()."contact.php"?>" class="primary-menu__link <?php if($currentPage == getBaseUrl()."contact.php") echo "page-current"?>">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </nav>
                <div class="col l-2 m-3 header-content__action">
                    <div class="hotline">
                        <span class="hotline-title">Hotline: </span>
                        <a href="tel:(+800) 1234 56789"class="hotline-number">(+800) 1234 56789</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="overlay"></div>
        <div class="bgOverlay"></div>
    </div>
</header>
<!-- Header - end -->