<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Express Checkout</title>
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
        <main class="page-main page-content bg-white mg-bot-60">
            <div class="grid wide page-express-checkout">
                <div class="page-title-wrapper">
                    <h1 class="page-title">
                        <span>Express Checkout</span>
                    </h1>
                </div>
                <div class="row container">
                    <!-- Sign in -->
                    <div class="authentication-wrapper">
                        <div class="action-auth-toggle-toggle dropdown-btn">
                            <button class="action-auth-btn">
                                <span>Sign In</span>
                            </button>
                        </div>
                        <div class="authentication-form-wrapper dropdown-content">
                            <div class="authentication-form__heading close-btn">
                                <span>Sign In</span>
                                <button class="">
                                    <i class="ti-close"></i>
                                </button>
                            </div>
                            <form action="" class="form form-login">
                                <div class="fieldset login">
                                    <div class="field email required">
                                        <label for="" class="label">
                                            <span>Email Address</span>
                                        </label>
                                        <div class="control">
                                            <input type="text" class="input-text" name="email" id="">
                                        </div>
                                    </div>
                                    <div class="field password required">
                                        <label for="" class="label">
                                            <span>Password</span>
                                        </label>
                                        <div class="control">
                                            <input type="password" class="input-text" name="" id="">
                                        </div>
                                    </div>
                                    <div class="actions-toolbar">
                                        <div class="primary">
                                            <a href="" class="action remind">
                                                <span>Forgot Your Password?</span>
                                            </a>
                                        </div>
                                        <div class="secondary">
                                            <button type="submit" class="btn-primary">
                                                <span>Sign In</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col l-8 m-12 c-12 checkout-wrapper">
                        <div class="grid">
                            <div class="row">
                                <!-- Shipping address -->
                                <div class="col l-6 m-12 c-12 checkout-shipping-address-wrapper">
                                    <div class="checkout-shipping-address">
                                        <div class="checkout-shipping-address__title checkout-title">
                                            <i class="fas fa-home"></i>
                                            <span>Shipping Address</span>
                                        </div>
                                        <div class="checkout-shipping-address__steps">
                                            <form action="" class="form form-login">
                                                <div class="fieldset login">
                                                    <div class="field email required">
                                                        <label for="" class="label">
                                                            <span>Email Address</span>
                                                        </label>
                                                        <div class="control">
                                                            <input type="text" class="input-text" name="email" id="">
                                                            <i class="far fa-question-circle"></i>
                                                        </div>
                                                    </div>
                                                    <div class="field password required">
                                                        <label for="" class="label">
                                                            <span>Password</span>
                                                        </label>
                                                        <div class="control">
                                                            <input type="password" class="input-text" name="" id="">
                                                        </div>
                                                    </div>
                                                    <span class="note">
                                                        <i class="fas fa-sort-up"></i>
                                                        You already have an account with us. Sign in or continue as guest.
                                                    </span>
                                                    <div class="actions-toolbar">
                                                        <div class="primary">
                                                            <a href="" class="action remind">
                                                                <span>Forgot Your Password?</span>
                                                            </a>
                                                        </div>
                                                        <div class="secondary">
                                                            <button type="submit" class="btn-primary">
                                                                <span>Sign In</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="field required shipping-address-firstname">
                                                <label for="" class="label">First Name</label>
                                                <div class="control">
                                                    <input type="text" name="" id="">
                                                </div>
                                            </div>
        
                                            <div class="field required shipping-address-lastname">
                                                <label for="" class="label">Last Name</label>
                                                <div class="control">
                                                    <input type="text" name="" id="">
                                                </div>
                                            </div>
        
                                            <div class="fieldset  field shipping-street-address">
                                                <div class="control">
                                                    <div class="field required">
                                                        <label for="" class="label">Street Address </label>
                                                        <div class="control">
                                                            <input type="text" name="" id="">
                                                        </div>
                                                    </div>
                                                    <div class="field addional">
                                                        <label for="" class="label">Street Address: Line 2</label>
                                                        <div class="control">
                                                            <input type="text" name="" id="">
                                                        </div>
                                                    </div>
                                                    <div class="field addional">
                                                        <label for="" class="label">Street Address: Line 3</label>
                                                        <div class="control">
                                                            <input type="text" name="" id="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
        
                                            <div class="field city">
                                                <label for="" class="label">City</label>
                                                <div class="control">
                                                    <input type="text" name="" id="">
                                                </div>
                                            </div>
        
                                            <div class="field code">
                                                <label for="" class="label">Zip/Postal Code</label>
                                                <div class="control">
                                                    <input type="text" name="" id="">
                                                </div>
                                            </div>
        
                                            <div class="field country-select">
                                                <label for="" class="label">Country</label>
                                                <div class="control">
                                                    <select name="" id="">
                                                        <option value="">United States</option>
                                                        <option value="">Vietnam</option>
                                                    </select>
                                                </div>
                                            </div>
        
                                            <div class="field state">
                                                <label for="" class="label">State/Province</label>
                                                <div class="control">
                                                    <input type="text" name="" id="">
                                                </div>
                                            </div>
        
                                            <div class="field company">
                                                <label for="" class="label">Company</label>
                                                <div class="control">
                                                    <input type="text" name="" id="">
                                                </div>
                                            </div>
        
                                            <div class="field phone-number">
                                                <label for="" class="label">Phone Number</label>
                                                <div class="control">
                                                    <input type="text" name="" id="">
                                                    <i class="far fa-question-circle"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="col l-6 m-12 c-12 checkout-methods-wrapper">
                                    <div class="checkout-methods">
                                        <!-- Shipping methods -->
                                        <div class="checkout-shipping-method">
                                            <div class="checkout-shipping-method__title checkout-title">
                                                <i class="fas fa-truck"></i>
                                                <span>Shipping Methods</span>
                                            </div>
                                            <div class="checkout-shipping-method__steps">
                                                <div class="field delivery-date">
                                                    <label for="" class="label">Shipping Delivery Date</label>
                                                    <div class="control">
                                                        <input type="text" name="" id="">
                                                    </div>
                                                </div>
        
                                                <div class="field delivery-comment">
                                                    <label for="" class="label">Shipping Delivery Comment</label>
                                                    <div class="control">
                                                        <textarea name="" id="" cols="3" rows="3"></textarea>
                                                    </div>
                                                </div>
        
                                                <div class="shipping-method-steps__content">
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <td class="col-method">
                                                                    <input type="radio" name="" id="">
                                                                </td>
                                                                <td class="col-price">
                                                                    <span>$0.00</span>
                                                                </td>
                                                                <td class="col-method">
                                                                    <span>Free</span>
                                                                </td>
                                                                <td class="col-carrierr">
                                                                    <span>Free Shipping</span>
                                                                </td>
                                                            </tr>
        
                                                            <tr>
                                                                <td class="col-method">
                                                                    <input type="radio" name="" id="">
                                                                </td>
                                                                <td class="col-price">
                                                                    <span>$10.00</span>
                                                                </td>
                                                                <td class="col-method">
                                                                    <span>Fixed</span>
                                                                </td>
                                                                <td class="col-carrierr">
                                                                    <span>Flat Rate</span>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
        
                                        <!-- Payment-method -->
                                        <div class="checkout-payment-method">
                                            <div class="checkout-title">
                                                <i class="far fa-credit-card"></i>
                                                <span>Payment Method</span>
                                            </div>
                                            <div class="checkout-billing-address checkbox-option">
                                                <input type="checkbox" name="" id="">
                                                <label for=""> My billing and shipping address are the same</label>
                                            </div>
        
                                            <div class="radio-option">
                                                <input type="radio" name="" id="">
                                                <label for="">
                                                    <span>Check / Money order</span>
                                                </label>
                                            </div>
        
                                            <div class="radio-option">
                                                <input type="radio" name="" id="">
                                                <label for="">
                                                    <span>Cash On Delivery</span>
                                                </label>
                                            </div>
        
                                            <div class="radio-option">
                                                <input type="radio" name="" id="">
                                                <label for="">
                                                    <span>Bank Transfer Payment</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col l-4 m-12 c-12 checkout-sidebar-wrapper">
                        <div class="checkout-sidebar">
                            <div class="block-summary">
                                <div class="checkout-title">
                                    <span>Order Summary</span>
                                </div>
                                <div class="block items-in-cart">
                                    <div class="title">
                                        <span>3</span>
                                        <span> Items In Cart</span>
                                    </div>

                                    <ul class="items-in-cart__list">
                                        <li class="items-in-cart__item">
                                            <div class="items-in-cart__img-wrapper">
                                                <div class="items-in-cart__img">
                                                    <img src="https://mageblueskytech.com/armania/media/catalog/product/cache/73c11367e3053a96b37ec0281e6d439d/p/r/prod_0001s_0007s_0002_1_1.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="items-in-cart__detail">
                                                <div class="items-in-cart-name-block">
                                                    <a href="" class="product-name">
                                                        <span>Smart Watch Apllo 68GB</span>
                                                    </a>
                                                    <span class="details-qty">
                                                        <label for="" class="label">Qty: </label>
                                                        <input type="number" class="input-text qty" name="" id="">
                                                    </span>
                                                    <span class="qty-button">
                                                        <span class="increase">
                                                            <i class="fas fa-sort-up"></i>&nbsp;
                                                        </span>
                                                        <span class="decrease">
                                                            <i class="fas fa-sort-down"></i>
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="items-in-cart-subtotal">
                                                    <span class="price-excluding-tax">$369.99</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="items-in-cart__item">
                                            <div class="items-in-cart__img-wrapper">
                                                <div class="items-in-cart__img">
                                                    <img src="https://mageblueskytech.com/armania/media/catalog/product/cache/73c11367e3053a96b37ec0281e6d439d/a/p/appliances3.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="items-in-cart__detail">
                                                <div class="items-in-cart-name-block">
                                                    <a href="" class="product-name">
                                                        <span>Roku Smart LED TV</span>
                                                    </a>
                                                    <span class="details-qty">
                                                        <label for="" class="label">Qty: </label>
                                                        <input type="number" class="input-text qty" name="" id="">
                                                    </span>
                                                    <span class="qty-button">
                                                        <span class="increase">
                                                            <i class="fas fa-sort-up"></i>&nbsp;
                                                        </span>
                                                        <span class="decrease">
                                                            <i class="fas fa-sort-down"></i>
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="items-in-cart-subtotal">
                                                    <span class="price-excluding-tax">$369.99</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="items-in-cart__item">
                                            <div class="items-in-cart__img-wrapper">
                                                <div class="items-in-cart__img">
                                                    <img src="https://mageblueskytech.com/armania/media/catalog/product/cache/73c11367e3053a96b37ec0281e6d439d/a/p/appliances6.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="items-in-cart__detail">
                                                <div class="items-in-cart-name-block">
                                                    <a href="" class="product-name">
                                                        <span>Kitchen Dining Table</span>
                                                    </a>
                                                    <span class="details-qty">
                                                        <label for="" class="label">Qty: </label>
                                                        <input type="number" class="input-text qty" name="" id="">
                                                    </span>
                                                    <span class="qty-button">
                                                        <span class="increase">
                                                            <i class="fas fa-sort-up"></i>&nbsp;
                                                        </span>
                                                        <span class="decrease">
                                                            <i class="fas fa-sort-down"></i>
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="items-in-cart-subtotal">
                                                    <span class="price-excluding-tax">$369.99</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="cart-total">
                                        <div class="cart-total-item">
                                            <div class="cart-total__title">
                                                <span>Cart Subtotal</span>
                                            </div>
                                            <div class="cart-total__amount">
                                                <span>$796.24</span>
                                            </div>
                                        </div>
                                        <div class="cart-total-item">
                                            <div class="cart-total__title">
                                                <span>Shipping</span>
                                            </div>
                                            <div class="cart-total__amount shipping">
                                                <span>Not yet calculated</span>
                                            </div>
                                        </div>
                                        <div class="cart-total-item total">
                                            <div class="cart-total__title">
                                                <span>Order Total</span>
                                            </div>
                                            <div class="cart-total__amount total">
                                                <span>$811.24</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="block-comment">
                                <div class="field order-comment">
                                    <label for="" class="label">
                                        <span>Order comment</span>
                                    </label>
                                    <div class="option">
                                        <textarea name="" id="" cols="3" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="checkbox-option">
                                <input type="checkbox" name="" id="">
                                <label for="">Check To Subscribe Order Newsletter</label>
                            </div>

                            <div class="payment-option">
                                <form action="" class="form form-discount">
                                    <div class="payment-option-inner field">
                                        <div class="control">
                                            <input type="text" name="" id="" placeholder="Enter discount code">
                                        </div>
                                        <div class="actions-toolbar">
                                            <div class="secondary">
                                                <button class="btn-primary">Apply Discount</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="checkout-agreements-block">
                                <button class="action-show">
                                    <span>Term and condition</span>
                                </button>
                            </div>
                            <div class="place-order-btn ">
                                <button class="btn-primary disabled">
                                    <span>Place Order</span>
                                </button>
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