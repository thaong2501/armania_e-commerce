
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Customer Account</title>
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
        <main class="page-content">
            <div class="page-create-acc">
                <div class="page-title-wrapper">
                    <h1 class="page-title container">
                        <span>Create New Customer Account</span>
                    </h1>
                </div>
                <div class="container">
                    <div class="block">
                        <div class="block-title">
                            <span>Personal Information</span>
                        </div>
                        <div class="block-content">
                            <form action="" class="form">
                                <div class="fieldset">
                                    <div class="field required">
                                        <label for="" class="label">
                                            <span>First Name</span>
                                        </label>
                                        <div class="control">
                                            <input type="text" class="input-text" name="" id="">
                                        </div>
                                    </div>
                                    <div class="field required">
                                        <label for="" class="label">
                                            <span>Last Name</span>
                                        </label>
                                        <div class="control">
                                            <input type="text" class="input-text" name="" id="">
                                        </div>
                                    </div>
                                    <div class="checkbox-option">
                                        <input type="checkbox" name="" id="">
                                        <label for=""> Sign Up for Newsletter</label>
                                    </div>
                                    <div class="checkbox-option">
                                        <input type="checkbox" name="" id="">
                                        <label for="">Allow remote shopping assistance</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="block">
                        <div class="block-title">
                            <span>Sign-in Information</span>
                        </div>
                        <div class="block-content">
                            <form action="" class="form">
                                <div class="fieldset">
                                    <div class="field required">
                                        <label for="" class="label">
                                            <span>Email</span>
                                        </label>
                                        <div class="control">
                                            <input type="text" class="input-text" name="" id="">
                                        </div>
                                    </div>
                                    <div class="field required">
                                        <label for="" class="label">
                                            <span>Password</span>
                                        </label>
                                        <div class="control">
                                            <input type="password" class="input-text" name="" id="">
                                        </div>
                                    </div>
                                    <div class="field required">
                                        <label for="" class="label">
                                            <span>Confirm Password</span>
                                        </label>
                                        <div class="control">
                                            <input type="password" class="input-text" name="" id="">
                                        </div>
                                    </div>
                                    <div class="checkbox-option">
                                        <input type="checkbox" name="" id="">
                                        <label for="">Show Password</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <button class="btn btn-primary">CREATE AN ACCOUNT</button>
                </div>
            </div>
        </main>
        <!-- Main content - end -->

        <?php include "./blocks/footer.php" ?>

    </div>

    <script src="./assets/js/main.js"></script>
</body>

</html>