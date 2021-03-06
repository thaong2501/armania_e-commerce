
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Login</title>
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
        <main class="page-content container">
            <div class="grid wide page-login ">
                <div class="page-title-wrapper">
                    <h1 class="page-title">
                        <span>Customer Login</span>
                    </h1>
                </div>
                <div class="row container">
                    <div class="col l-6 m-12 c-12 block block-customer-login">
                        <div class="block-title">
                            <span>Registered Customers</span>
                        </div>
                        <div class="block-content">
                            <form action="" class="form form-login">
                                <div class="fieldset login">
                                    <div class="field note">If you have an account, sign in with your email address.</div>
                                    
                                    <div class="field email required">
                                        <label for="" class="label">
                                            <span>Email</span>
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
                                            <a class="action remind">
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

                    <div class="col l-6 m-12 c-12 block block-new-customer">
                        <div class="block-title">
                            <span>New Customers</span>
                        </div>

                        <div class="block-content">
                            <p>Creating an account has many benefits: check out faster, keep more than one address, track orders and more.</p>
                            <div class="actions-toolbar">
                                <div class="secondary">
                                    <button type="submit" class="btn-primary">
                                        <a href="create-account.php">
                                            <span>Create an Account</span>
                                        </a>
                                    </button>
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