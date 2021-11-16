<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="icon" type="image/x-icon" href="./assets/img/icon-brand.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="./assets/fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
</head>

<body>
    <div class="page-wrapper">

        <?php include "./blocks/header.php" ?>

        <!-- Main content - start -->
        <main class="page-shop">
            <!-- Breadcrumbs -->
            <div class="breadcrumbs">
                <ul class="breadcrumbs-list grid wide">
                    <li class="breadcrumbs-item">
                        <a href="" class="breadcrumbs-link">Home</a>
                    </li>
                    <li class="breadcrumbs-item">
                        <a href="" class="breadcrumbs-link">Shop</a>
                    </li>
                </ul>
            </div>
            <div class="grid wide container mg-bot-30">
                <div class="main-content">
                    <div class="row">
                        <div class="not-pc">
                            <!-- <i class="fas fa-filter filter-icon"></i> -->
                        </div>
                        <!-- Sidebar -->
                        <div class="col l-3 m-0 c-0 sidebar">
                            <div class="sidebar-main">
                                <div class="block filter">
                                    <div class="block-title filter-title">
                                    </div>
                                    <div class="block-content filter-content">
                                        <div class="block-subtitle filter-subtitle">Shopping Options</div>
                                        <div class="block-subtitle filter-subtitle not-pc ">Shop By</div>
                                        <i class="ti-close close-btn not-pc"></i>
                                        <div class="filter-options">
                                            <div class="filter-options-item">
                                                <div class="filter-options-title">Price</div>
                                                <div class="filter-options-content">
                                                    <ul class="filter-options-content__list">
                                                        <li class="filter-options-content__item">
                                                            <a href="" class="filter-options-content__link">
                                                                <span class="price">$0.00</span>
                                                                -
                                                                <span class="price">$99.99</span>
                                                                <span class="count">
                                                                    3
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="filter-options-content__item">
                                                            <a href="" class="filter-options-content__link">
                                                                <span class="price">$200.00</span>
                                                                -
                                                                <span class="price">$299.99</span>
                                                                <span class="count">
                                                                    3
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="filter-options-content__item">
                                                            <a href="" class="filter-options-content__link">
                                                                <span class="price">$300.00</span>
                                                                -
                                                                <span class="price">$399.99</span>
                                                                <span class="count">
                                                                    6
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="filter-options-content__item">
                                                            <a href="" class="filter-options-content__link">
                                                                <span class="price">$400.00</span>
                                                                and above 
                                                                <span class="count">
                                                                    6
                                                                </span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="sidebar-addition">
                                <div class="block block-compare">
                                    <div class="block-title">Compare Products</div>
                                    <div class="empty">You have no items to compare.</div>
                                </div>
                                <div class="block block-wishlist">
                                    <div class="block-title">My Wish List</div>
                                    <div class="empty">You have no items in your wish list.</div>
                                </div>
                            </div>
                        </div>

                        <div class="col l-9 m-12 c-12 col-main">
                            <!-- Filter -->
                            <div class="toolbar toolbar-products">
                                <div class="modes">
                                    <a href="#col-4" class="modes-mode layout-mode active">
                                        <i class="fas fa-th"></i>
                                    </a>
                                    <a href="#col-1"class="modes-mode mode-list layout-mode">
                                        <i class="fas fa-th-large"></i>
                                    </a>
                                </div>
                                <p class="toolbar-amount">Items
                                    <span class="toolbar-number">1</span>
                                    -
                                    <span class="toolbar-number">12</span>
                                    of
                                    <span class="toolbar-number">18</span>
                                </p>
                                <div class="toolbar-sorter sorter">
                                    <label for="" class="sorter-label">Sort By</label>
                                    <select name="" id="" class="sorter-options">
                                        <option value="position" selected="selected">Position</option>
                                        <option value="name">Name</option>
                                        <option value="price">Price</option>
                                    </select>
                                    <a href="" class="action sorter-action sort-asc">
                                        <i class="fas fa-long-arrow-alt-up"></i>
                                    </a>
                                </div>
                            </div>
                            
                            <!-- 4 col -->
                            <div id="col-4" class="product-grid active">
                                <div class="grid">
                                    <ul class="row product-list">
                                        <li class="col l-3 m-4 c-6 product-wrapper">
                                            <a href="" class="product-img">
                                                <img src="https://mageblueskytech.com/armania/media/catalog/product/cache/b0e30b12438bc565aef7dca2860081de/a/p/appliances6.jpg" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a href=""><i class="add-to-cart fas fa-cart-plus"></i></a>
                                                <a href=""><i class="quick-view far fa-eye"></i></a>
                                                <a href=""><i class="to-compare fas fa-exchange-alt"></i></a> 
                                                <a href=""><i class="add-to-wish-list far fa-heart"></i></a>
                                            </div>
                                            <a href="" class="product-name">Kitchen Dining Table</a>
                                            <div class="product-review-summary">
                                                <div class="rating-result">
                                                    <i class="rating-icon active far fa-star"></i>
                                                    <i class="rating-icon active far fa-star"></i>
                                                    <i class="rating-icon active far fa-star"></i>
                                                    <i class="rating-icon active far fa-star"></i>
                                                    <i class="rating-icon active far fa-star"></i>
                                                </div>
                                                <div class="rating-action">
                                                    <a href="" class="action-view">
                                                        1
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-price">
                                                <div class="price-final">$388.66</div>
                                                <div class="price-old">$569.99</div>
                                            </div>
                                            <span class="onsale">
                                                <span>-20%</span>
                                            </span>
                                        </li>
                                        <li class="col l-3 m-4 c-6 product-wrapper">
                                            <a href="" class="product-img">
                                                <img src="https://mageblueskytech.com/armania/media/catalog/product/cache/b0e30b12438bc565aef7dca2860081de/a/p/appliances4.jpg" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a href=""><i class="add-to-cart fas fa-cart-plus"></i></a>
                                                <a href=""><i class="quick-view far fa-eye"></i></a>
                                                <a href=""><i class="to-compare fas fa-exchange-alt"></i></a> 
                                                <a href=""><i class="add-to-wish-list far fa-heart"></i></a>
                                            </div>
                                            <a href="" class="product-name">Stainless Steel FS3 Fre</a>
                                            <div class="product-review-summary">
                                                <div class="rating-result">
                                                    <i class="rating-icon active far fa-star"></i>
                                                    <i class="rating-icon active far fa-star"></i>
                                                    <i class="rating-icon active far fa-star"></i>
                                                    <i class="rating-icon active far fa-star"></i>
                                                    <i class="rating-icon  far fa-star"></i>
                                                </div>
                                                <div class="rating-action">
                                                    <a href="" class="action-view">
                                                        3
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-price">
                                                <div class="price-final">$68.99</div>
                                                <div class="price-old">$268.99</div>
                                            </div>
                                            <span class="onsale">
                                                <span>-74%</span>
                                            </span>
                                        </li>
                                        <li class="col l-3 m-4 c-6 product-wrapper">
                                            <a href="" class="product-img">
                                                <img src="https://mageblueskytech.com/armania/media/catalog/product/cache/b0e30b12438bc565aef7dca2860081de/a/p/appliances2_1.jpg" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a href=""><i class="add-to-cart fas fa-cart-plus"></i></a>
                                                <a href=""><i class="quick-view far fa-eye"></i></a>
                                                <a href=""><i class="to-compare fas fa-exchange-alt"></i></a> 
                                                <a href=""><i class="add-to-wish-list far fa-heart"></i></a>
                                            </div>
                                            <a href="" class="product-name">Electric Kettlet 1.5L</a>
                                            <div class="product-review-summary">
                                                <div class="rating-result">
                                                    <i class="rating-icon active far fa-star"></i>
                                                    <i class="rating-icon active far fa-star"></i>
                                                    <i class="rating-icon active far fa-star"></i>
                                                    <i class="rating-icon active far fa-star"></i>
                                                    <i class="rating-icon active far fa-star"></i>
                                                </div>
                                                <div class="rating-action">
                                                    <a href="" class="action-view">
                                                        1
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-price">
                                                <div class="price-final">$278.99</div>
                                            </div>
                                        </li>
                                        <li class="col l-3 m-4 c-6 product-wrapper">
                                            <a href="" class="product-img">
                                                <img src="https://mageblueskytech.com/armania/media/catalog/product/cache/b0e30b12438bc565aef7dca2860081de/a/p/appliances8_1.jpg" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a href=""><i class="add-to-cart fas fa-cart-plus"></i></a>
                                                <a href=""><i class="quick-view far fa-eye"></i></a>
                                                <a href=""><i class="to-compare fas fa-exchange-alt"></i></a> 
                                                <a href=""><i class="add-to-wish-list far fa-heart"></i></a>
                                            </div>
                                            <a href="" class="product-name">Luby Slice Convection 9</a>
                                            <div class="product-review-summary">
                                                <div class="rating-result">
                                                    <i class="rating-icon active far fa-star"></i>
                                                    <i class="rating-icon active far fa-star"></i>
                                                    <i class="rating-icon active far fa-star"></i>
                                                    <i class="rating-icon active far fa-star"></i>
                                                    <i class="rating-icon active far fa-star"></i>
                                                </div>
                                                <div class="rating-action">
                                                    <a href="" class="action-view">
                                                        1
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-price">
                                                <div class="price-final">$290.00</div>
                                            </div>
                                        </li>
                                        <li class="col l-3 m-4 c-6 product-wrapper">
                                            <a href="" class="product-img">
                                                <img src="https://mageblueskytech.com/armania/media/catalog/product/cache/b0e30b12438bc565aef7dca2860081de/a/p/appliances7_1.jpg" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a href=""><i class="add-to-cart fas fa-cart-plus"></i></a>
                                                <a href=""><i class="quick-view far fa-eye"></i></a>
                                                <a href=""><i class="to-compare fas fa-exchange-alt"></i></a> 
                                                <a href=""><i class="add-to-wish-list far fa-heart"></i></a>
                                            </div>
                                            <a href="" class="product-name">Senbeam Classic 1200</a>
                                            <div class="product-review-summary">
                                                <div class="rating-result">
                                                    <i class="rating-icon active far fa-star"></i>
                                                    <i class="rating-icon active far fa-star"></i>
                                                    <i class="rating-icon active far fa-star"></i>
                                                    <i class="rating-icon active far fa-star"></i>
                                                    <i class="rating-icon active far fa-star"></i>
                                                </div>
                                                <div class="rating-action">
                                                    <a href="" class="action-view">
                                                        3
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-price">
                                                <div class="price-final">$295.55</div>
                                            </div>
                                        </li>
                                        <li class="col l-3 m-4 c-6 product-wrapper">
                                            <a href="" class="product-img">
                                                <img src="https://mageblueskytech.com/armania/media/catalog/product/cache/b0e30b12438bc565aef7dca2860081de/a/p/appliances5_2.jpg" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a href=""><i class="add-to-cart fas fa-cart-plus"></i></a>
                                                <a href=""><i class="quick-view far fa-eye"></i></a>
                                                <a href=""><i class="to-compare fas fa-exchange-alt"></i></a> 
                                                <a href=""><i class="add-to-wish-list far fa-heart"></i></a>
                                            </div>
                                            <a href="" class="product-name">Mi Washer Dryer Gold</a>
                                            <div class="product-review-summary">
                                                <div class="rating-result">
                                                    <i class="rating-icon active far fa-star"></i>
                                                    <i class="rating-icon active far fa-star"></i>
                                                    <i class="rating-icon active far fa-star"></i>
                                                    <i class="rating-icon active far fa-star"></i>
                                                    <i class="rating-icon far fa-star"></i>
                                                </div>
                                                <div class="rating-action">
                                                    <a href="" class="action-view">
                                                        2
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-price">
                                                <div class="price-final">$321.05</div>
                                            </div>
                                        </li>
                                        <li class="col l-3 m-4 c-6 product-wrapper">
                                            <a href="" class="product-img">
                                                <img src="https://mageblueskytech.com/armania/media/catalog/product/cache/b0e30b12438bc565aef7dca2860081de/a/p/appliances3.jpg" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a href=""><i class="add-to-cart fas fa-cart-plus"></i></a>
                                                <a href=""><i class="quick-view far fa-eye"></i></a>
                                                <a href=""><i class="to-compare fas fa-exchange-alt"></i></a> 
                                                <a href=""><i class="add-to-wish-list far fa-heart"></i></a>
                                            </div>
                                            <a href="" class="product-name">Roku Smart LED TV</a>
                                            <div class="product-review-summary">
                                                <div class="rating-result">
                                                    <i class="rating-icon active far fa-star"></i>
                                                    <i class="rating-icon active far fa-star"></i>
                                                    <i class="rating-icon active far fa-star"></i>
                                                    <i class="rating-icon active far fa-star"></i>
                                                    <i class="rating-icon active far fa-star"></i>
                                                </div>
                                                <div class="rating-action">
                                                    <a href="" class="action-view">
                                                        1
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-price">
                                                <div class="price-final">$278.99</div>
                                            </div>
                                        </li>
                                        <li class="col l-3 m-4 c-6 product-wrapper">
                                            <a href="" class="product-img">
                                                <img src="https://mageblueskytech.com/armania/media/catalog/product/cache/b0e30b12438bc565aef7dca2860081de/i/p/iphone_03_1.jpg" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a href=""><i class="add-to-cart fas fa-cart-plus"></i></a>
                                                <a href=""><i class="quick-view far fa-eye"></i></a>
                                                <a href=""><i class="to-compare fas fa-exchange-alt"></i></a> 
                                                <a href=""><i class="add-to-wish-list far fa-heart"></i></a>
                                            </div>
                                            <a href="" class="product-name">Xanna Note 4GB RAM</a>
                                            <div class="product-review-summary">
                                                <div class="rating-result">
                                                    <i class="rating-icon active far fa-star"></i>
                                                    <i class="rating-icon active far fa-star"></i>
                                                    <i class="rating-icon active far fa-star"></i>
                                                    <i class="rating-icon active far fa-star"></i>
                                                    <i class="rating-icon active far fa-star"></i>
                                                </div>
                                                <div class="rating-action">
                                                    <a href="" class="action-view">
                                                        1
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-price">
                                                <div class="price-final">$$68.66</div>
                                                <div class="price-old">$368.68</div>
                                            </div>
                                            <span class="onsale">
                                                <span>-81%</span>
                                            </span>
                                        </li>
                                        <li class="col l-3 m-4 c-6 product-wrapper">
                                            <a href="" class="product-img">
                                                <img src="https://mageblueskytech.com/armania/media/catalog/product/cache/b0e30b12438bc565aef7dca2860081de/p/h/phone-01.jpg" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a href=""><i class="add-to-cart fas fa-cart-plus"></i></a>
                                                <a href=""><i class="quick-view far fa-eye"></i></a>
                                                <a href=""><i class="to-compare fas fa-exchange-alt"></i></a> 
                                                <a href=""><i class="add-to-wish-list far fa-heart"></i></a>
                                            </div>
                                            <a href="" class="product-name">Galuxy 4 7 9 Wi-Fi 4G</a>
                                            <div class="product-review-summary">
                                                <div class="rating-result">
                                                    <i class="rating-icon active far fa-star"></i>
                                                    <i class="rating-icon active far fa-star"></i>
                                                    <i class="rating-icon active far fa-star"></i>
                                                    <i class="rating-icon  far fa-star"></i>
                                                    <i class="rating-icon  far fa-star"></i>
                                                </div>
                                                <div class="rating-action">
                                                    <a href="" class="action-view">
                                                        5
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-price">
                                                <div class="price-final">$357.26</div>
                                            </div>
                                        </li>
                                        <li class="col l-3 m-4 c-6 product-wrapper">
                                            <a href="" class="product-img">
                                                <img src="https://mageblueskytech.com/armania/media/catalog/product/cache/b0e30b12438bc565aef7dca2860081de/i/p/iphone_02_2.jpg" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a href=""><i class="add-to-cart fas fa-cart-plus"></i></a>
                                                <a href=""><i class="quick-view far fa-eye"></i></a>
                                                <a href=""><i class="to-compare fas fa-exchange-alt"></i></a> 
                                                <a href=""><i class="add-to-wish-list far fa-heart"></i></a>
                                            </div>
                                            <a href="" class="product-name">Bosch WAT286H0GB</a>
                                            <div class="product-review-summary">
                                                <div class="rating-result">
                                                    <i class="rating-icon active far fa-star"></i>
                                                    <i class="rating-icon active far fa-star"></i>
                                                    <i class="rating-icon active far fa-star"></i>
                                                    <i class="rating-icon active far fa-star"></i>
                                                    <i class="rating-icon  far fa-star"></i>
                                                </div>
                                                <div class="rating-action">
                                                    <a href="" class="action-view">
                                                        10
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-price">
                                                <div class="price-final">$388.66</div>
                                            </div>
                                        </li>
                                        <li class="col l-3 m-4 c-6 product-wrapper">
                                            <a href="" class="product-img">
                                                <img src="https://mageblueskytech.com/armania/media/catalog/product/cache/b0e30b12438bc565aef7dca2860081de/t/a/tablet_samll_04.jpg" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a href=""><i class="add-to-cart fas fa-cart-plus"></i></a>
                                                <a href=""><i class="quick-view far fa-eye"></i></a>
                                                <a href=""><i class="to-compare fas fa-exchange-alt"></i></a> 
                                                <a href=""><i class="add-to-wish-list far fa-heart"></i></a>
                                            </div>
                                            <a href="" class="product-name">Tempered Glass Film</a>
                                            <div class="product-review-summary">
                                                <div class="rating-result">
                                                    <i class="rating-icon active far fa-star"></i>
                                                    <i class="rating-icon active far fa-star"></i>
                                                    <i class="rating-icon active far fa-star"></i>
                                                    <i class="rating-icon active far fa-star"></i>
                                                    <i class="rating-icon active far fa-star"></i>
                                                </div>
                                                <div class="rating-action">
                                                    <a href="" class="action-view">
                                                        1
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-price">
                                                <div class="price-final">$278.99</div>
                                            </div>
                                        </li>
                                        <li class="col l-3 m-4 c-6 product-wrapper">
                                            <a href="" class="product-img">
                                                <img src="https://mageblueskytech.com/armania/media/catalog/product/cache/b0e30b12438bc565aef7dca2860081de/h/e/headphone.jpg" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a href=""><i class="add-to-cart fas fa-cart-plus"></i></a>
                                                <a href=""><i class="quick-view far fa-eye"></i></a>
                                                <a href=""><i class="to-compare fas fa-exchange-alt"></i></a> 
                                                <a href=""><i class="add-to-wish-list far fa-heart"></i></a>
                                            </div>
                                            <a href="" class="product-name">Computer Wireless</a>
                                            <div class="product-review-summary">
                                                <div class="rating-result">
                                                    <i class="rating-icon  far fa-star"></i>
                                                    <i class="rating-icon  far fa-star"></i>
                                                    <i class="rating-icon  far fa-star"></i>
                                                    <i class="rating-icon  far fa-star"></i>
                                                    <i class="rating-icon  far fa-star"></i>
                                                </div>
                                                <div class="rating-action">
                                                    <a href="" class="action-view">
                                                        0
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-price">
                                                <div class="price-final">$402.58</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- 1 col -->
                            <div id="col-1" class="product-grid full-row">
                                <div class="grid">
                                    <ul class="row product-list">
                                        <li class="col l-12 m-12 c-12 product-wrapper item-horizontal">
                                            <a href="" class="product-img">
                                                <img src="https://mageblueskytech.com/armania/media/catalog/product/cache/b0e30b12438bc565aef7dca2860081de/a/p/appliances6.jpg" alt="">
                                            </a>
                                            <span class="onsale">
                                                <span>-12%</span>
                                            </span>
                                            <div class="product-info">
                                                <a href="" class="product-name">Kitchen Dining Table</a>
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
                                                        <a href="" class="action add">
                                                            <span>Add Your Review</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <div class="price-final">$68.99</div>
                                                    <div class="price-old">$78.00</div>
                                                </div>
                                                <div class="product-description">
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <th class="col-label">Item model number:</th>
                                                                <td class="col-data"> PC-08361922</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="col-label">Item Weight:</th>
                                                                <td class="col-data"> 5 ounces</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="col-label">Product Dimensions:</th>
                                                                <td class="col-data">9.8 x 6.8 x 0.3 inches Item</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="product-action-static">
                                                    <button class="btn btn-add-to-cart">Add to card</button>
                                                    <div class="action-secondary">
                                                        <a href=""class="add-to-wish-list">
                                                            <i class="far fa-heart"></i>
                                                        </a>
                                                        <a href="" class="to-compare" title="Add to Compare">
                                                            <i class="fas fa-exchange-alt"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col l-12 m-12 c-12 product-wrapper item-horizontal">
                                            <a href="" class="product-img">
                                                <img src="https://mageblueskytech.com/armania/media/catalog/product/cache/b0e30b12438bc565aef7dca2860081de/a/p/appliances4.jpg" alt="">
                                            </a>
                                            <span class="onsale">
                                                <span>-74%</span>
                                            </span>
                                            <div class="product-info">
                                                <a href="" class="product-name">Stainless Steel FS3 Fre</a>
                                                <div class="product-review-summary">
                                                    <div class="rating-result">
                                                        <i class="rating-icon active far fa-star"></i>
                                                        <i class="rating-icon active far fa-star"></i>
                                                        <i class="rating-icon active far fa-star"></i>
                                                        <i class="rating-icon active far fa-star"></i>
                                                        <i class="rating-icon active far fa-star"></i>
                                                    </div>
                                                    <div class="reviews-actions">
                                                        <a href="" class="action view">
                                                            <span>1</span>
                                                            <span>review</span>
                                                        </a>
                                                        <a href="" class="action add">
                                                            <span>Add Your Review</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <div class="price-final">$68.99</div>
                                                    <div class="price-old">$78.00</div>
                                                </div>
                                                <div class="product-description">
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <th class="col-label">Item model number:</th>
                                                                <td class="col-data"> PC-08361922</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="col-label">Item Weight:</th>
                                                                <td class="col-data"> 5 ounces</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="col-label">Product Dimensions:</th>
                                                                <td class="col-data">9.8 x 6.8 x 0.3 inches Item</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="product-action-static">
                                                    <button class="btn btn-add-to-cart">Add to card</button>
                                                    <div class="action-secondary">
                                                        <a href=""class="add-to-wish-list">
                                                            <i class="far fa-heart"></i>
                                                        </a>
                                                        <a href="" class="to-compare" title="Add to Compare">
                                                            <i class="fas fa-exchange-alt"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col l-12 m-12 c-12 product-wrapper item-horizontal">
                                            <a href="" class="product-img">
                                                <img src="https://mageblueskytech.com/armania/media/catalog/product/cache/b0e30b12438bc565aef7dca2860081de/a/p/appliances2_1.jpg" alt="">
                                            </a>
                                            <div class="product-info">
                                                <a href="" class="product-name">Kitchen Dining Table</a>
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
                                                        <a href="" class="action add">
                                                            <span>Add Your Review</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <div class="price-final">$278.99</div>
                                                </div>
                                                <div class="product-description">
                                                    <ul>
                                                        <li>Small screen 7.9" Retina</li>
                                                        <li>Compatible with Apple Pencil</li>
                                                    </ul>
                                                </div>
                                                <div class="product-action-static">
                                                    <button class="btn btn-add-to-cart">Add to card</button>
                                                    <div class="action-secondary">
                                                        <a href=""class="add-to-wish-list">
                                                            <i class="far fa-heart"></i>
                                                        </a>
                                                        <a href="" class="to-compare" title="Add to Compare">
                                                            <i class="fas fa-exchange-alt"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col l-12 m-12 c-12 product-wrapper item-horizontal">
                                            <a href="" class="product-img">
                                                <img src="https://mageblueskytech.com/armania/media/catalog/product/cache/b0e30b12438bc565aef7dca2860081de/a/p/appliances8_1.jpg" alt="">
                                            </a>
                                            <div class="product-info">
                                                <a href="" class="product-name">Luby Slice Convection 9</a>
                                                <div class="product-review-summary">
                                                    <div class="rating-result">
                                                        <i class="rating-icon active far fa-star"></i>
                                                        <i class="rating-icon active far fa-star"></i>
                                                        <i class="rating-icon active far fa-star"></i>
                                                        <i class="rating-icon active far fa-star"></i>
                                                        <i class="rating-icon active far fa-star"></i>
                                                    </div>
                                                    <div class="reviews-actions">
                                                        <a href="" class="action view">
                                                            <span>2</span>
                                                            <span>review</span>
                                                        </a>
                                                        <a href="" class="action add">
                                                            <span>Add Your Review</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <div class="price-final">$290.00</div>
                                                </div>
                                                <div class="product-description">
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <th class="col-label">Item model number:</th>
                                                                <td class="col-data"> PC-08361922</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="col-label">Item Weight:</th>
                                                                <td class="col-data"> 5 ounces</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="col-label">Product Dimensions:</th>
                                                                <td class="col-data">9.8 x 6.8 x 0.3 inches Item</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="product-action-static">
                                                    <button class="btn btn-add-to-cart">Add to card</button>
                                                    <div class="action-secondary">
                                                        <a href=""class="add-to-wish-list">
                                                            <i class="far fa-heart"></i>
                                                        </a>
                                                        <a href="" class="to-compare" title="Add to Compare">
                                                            <i class="fas fa-exchange-alt"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col l-12 m-12 c-12 product-wrapper item-horizontal">
                                            <a href="" class="product-img">
                                                <img src="https://mageblueskytech.com/armania/media/catalog/product/cache/b0e30b12438bc565aef7dca2860081de/a/p/appliances7_1.jpg" alt="">
                                            </a>
                                            <div class="product-info">
                                                <a href="" class="product-name">Senbeam Classic 1200</a>
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
                                                        <a href="" class="action add">
                                                            <span>Add Your Review</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <div class="price-final">$295.55</div>
                                                </div>
                                                <div class="product-description">
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <th class="col-label">Item model number:</th>
                                                                <td class="col-data"> PC-08361922</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="col-label">Item Weight:</th>
                                                                <td class="col-data"> 5 ounces</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="col-label">Product Dimensions:</th>
                                                                <td class="col-data">9.8 x 6.8 x 0.3 inches Item</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="product-action-static">
                                                    <button class="btn btn-add-to-cart">Add to card</button>
                                                    <div class="action-secondary">
                                                        <a href=""class="add-to-wish-list">
                                                            <i class="far fa-heart"></i>
                                                        </a>
                                                        <a href="" class="to-compare" title="Add to Compare">
                                                            <i class="fas fa-exchange-alt"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col l-12 m-12 c-12 product-wrapper item-horizontal">
                                            <a href="" class="product-img">
                                                <img src="https://mageblueskytech.com/armania/media/catalog/product/cache/b0e30b12438bc565aef7dca2860081de/a/p/appliances5_2.jpg" alt="">
                                            </a>
                                            <span class="onsale">
                                                <span>-12%</span>
                                            </span>
                                            <div class="product-info">
                                                <a href="" class="product-name">Mi Washer Dryer Gold</a>
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
                                                        <a href="" class="action add">
                                                            <span>Add Your Review</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <div class="price-final">$68.99</div>
                                                    <div class="price-old">$78.00</div>
                                                </div>
                                                <div class="product-description">
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <th class="col-label">Item model number:</th>
                                                                <td class="col-data"> PC-08361922</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="col-label">Item Weight:</th>
                                                                <td class="col-data"> 5 ounces</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="col-label">Product Dimensions:</th>
                                                                <td class="col-data">9.8 x 6.8 x 0.3 inches Item</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="product-action-static">
                                                    <button class="btn btn-add-to-cart">Add to card</button>
                                                    <div class="action-secondary">
                                                        <a href=""class="add-to-wish-list">
                                                            <i class="far fa-heart"></i>
                                                        </a>
                                                        <a href="" class="to-compare" title="Add to Compare">
                                                            <i class="fas fa-exchange-alt"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col l-12 m-12 c-12 product-wrapper item-horizontal">
                                            <a href="" class="product-img">
                                                <img src="https://mageblueskytech.com/armania/media/catalog/product/cache/b0e30b12438bc565aef7dca2860081de/a/p/appliances3.jpg" alt="">
                                            </a>
                                            <div class="product-info">
                                                <a href="" class="product-name">Roku Smart LED TV</a>
                                                <div class="product-review-summary">
                                                    <div class="rating-result">
                                                        <i class="rating-icon active far fa-star"></i>
                                                        <i class="rating-icon active far fa-star"></i>
                                                        <i class="rating-icon active far fa-star"></i>
                                                        <i class="rating-icon active far fa-star"></i>
                                                        <i class="rating-icon far fa-star"></i>
                                                    </div>
                                                    <div class="reviews-actions">
                                                        <a href="" class="action view">
                                                            <span>12</span>
                                                            <span>review</span>
                                                        </a>
                                                        <a href="" class="action add">
                                                            <span>Add Your Review</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <div class="price-final">$328.88</div>
                                                </div>
                                                <div class="product-description">
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <th class="col-label">Item model number:</th>
                                                                <td class="col-data"> PC-08361922</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="col-label">Item Weight:</th>
                                                                <td class="col-data"> 5 ounces</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="col-label">Product Dimensions:</th>
                                                                <td class="col-data">9.8 x 6.8 x 0.3 inches Item</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="product-action-static">
                                                    <button class="btn btn-add-to-cart">Add to card</button>
                                                    <div class="action-secondary">
                                                        <a href=""class="add-to-wish-list">
                                                            <i class="far fa-heart"></i>
                                                        </a>
                                                        <a href="" class="to-compare" title="Add to Compare">
                                                            <i class="fas fa-exchange-alt"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col l-12 m-12 c-12 product-wrapper item-horizontal">
                                            <a href="" class="product-img">
                                                <img src="https://mageblueskytech.com/armania/media/catalog/product/cache/b0e30b12438bc565aef7dca2860081de/i/p/iphone_03_1.jpg" alt="">
                                            </a>
                                            <span class="onsale">
                                                <span>-80%</span>
                                            </span>
                                            <div class="product-info">
                                                <a href="" class="product-name">Xanna Note 4GB RAM</a>
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
                                                        <a href="" class="action add">
                                                            <span>Add Your Review</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <div class="price-final">$68.99</div>
                                                    <div class="price-old">$368.68</div>
                                                </div>
                                                <div class="product-description">
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <th class="col-label">Item model number:</th>
                                                                <td class="col-data"> PC-08361922</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="col-label">Item Weight:</th>
                                                                <td class="col-data"> 5 ounces</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="col-label">Product Dimensions:</th>
                                                                <td class="col-data">9.8 x 6.8 x 0.3 inches Item</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="product-action-static">
                                                    <button class="btn btn-add-to-cart">Add to card</button>
                                                    <div class="action-secondary">
                                                        <a href=""class="add-to-wish-list">
                                                            <i class="far fa-heart"></i>
                                                        </a>
                                                        <a href="" class="to-compare" title="Add to Compare">
                                                            <i class="fas fa-exchange-alt"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col l-12 m-12 c-12 product-wrapper item-horizontal">
                                            <a href="" class="product-img">
                                                <img src="https://mageblueskytech.com/armania/media/catalog/product/cache/b0e30b12438bc565aef7dca2860081de/p/h/phone-01.jpg" alt="">
                                            </a>
                                            <div class="product-info">
                                                <a href="" class="product-name">Kitchen Dining Table</a>
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
                                                        <a href="" class="action add">
                                                            <span>Add Your Review</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <div class="price-final">$68.99</div>
                                                </div>
                                                <div class="product-description">
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <th class="col-label">Item model number:</th>
                                                                <td class="col-data"> PC-08361922</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="col-label">Item Weight:</th>
                                                                <td class="col-data"> 5 ounces</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="col-label">Product Dimensions:</th>
                                                                <td class="col-data">9.8 x 6.8 x 0.3 inches Item</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="product-action-static">
                                                    <button class="btn btn-add-to-cart">Add to card</button>
                                                    <div class="action-secondary">
                                                        <a href=""class="add-to-wish-list">
                                                            <i class="far fa-heart"></i>
                                                        </a>
                                                        <a href="" class="to-compare" title="Add to Compare">
                                                            <i class="fas fa-exchange-alt"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col l-12 m-12 c-12 product-wrapper item-horizontal">
                                            <a href="" class="product-img">
                                                <img src="https://mageblueskytech.com/armania/media/catalog/product/cache/b0e30b12438bc565aef7dca2860081de/i/p/iphone_02_2.jpg" alt="">
                                            </a>
                                            <span class="onsale">
                                                <span>-12%</span>
                                            </span>
                                            <div class="product-info">
                                                <a href="" class="product-name">Bosch WAT286H0GB</a>
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
                                                        <a href="" class="action add">
                                                            <span>Add Your Review</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <div class="price-final">$68.99</div>
                                                    <div class="price-old">$78.00</div>
                                                </div>
                                                <div class="product-description">
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <th class="col-label">Item model number:</th>
                                                                <td class="col-data"> PC-08361922</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="col-label">Item Weight:</th>
                                                                <td class="col-data"> 5 ounces</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="col-label">Product Dimensions:</th>
                                                                <td class="col-data">9.8 x 6.8 x 0.3 inches Item</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="product-action-static">
                                                    <button class="btn btn-add-to-cart">Add to card</button>
                                                    <div class="action-secondary">
                                                        <a href=""class="add-to-wish-list">
                                                            <i class="far fa-heart"></i>
                                                        </a>
                                                        <a href="" class="to-compare" title="Add to Compare">
                                                            <i class="fas fa-exchange-alt"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Pagination -->
                            <div class="toolbar toolbar-products bg-white">
                                <div class="pages">
                                    <ul class="pages-list">
                                        <li class="page-item current">
                                            <span class="page">1</span>
                                        </li>
                                        <li class="page-item ">
                                            <a href="" class="page">2</a>
                                        </li>
                                        <li class="page-item page-next">
                                            <a href="" class="action next">
                                                <span class="page">
                                                    <i class="ti-angle-right"></i>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="field limiter">
                                    <label for="" class="label">Show</label>
                                    <select name="" id="" class="limiter-options">
                                        <option value="12" selected="selected">12</option>
                                        <option value="24">24</option>
                                        <option value="36">36</option>
                                    </select>
                                    <span class="limiter-text">per page</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Main content - end -->

        <?php include "./blocks/footer.php" ?>

    </div>

    <script src="./assets/js/main.js"></script>
    
</body>

</html>