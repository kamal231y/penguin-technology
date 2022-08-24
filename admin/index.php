<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <?php include "include/css-url.php"; ?>
</head>

<body class="h-100" ng-app="pengu" ng-controller="admin-ctrl">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters" id="login_main">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="logo">
                                        <img src="../assets/images/logo.png" alt="">
                                    </div>
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    <form class="change_password" ng-submit="login()">
                                        <div class="form-group">
                                            <label><strong>Email</strong></label>
                                            <input type="email" ng-model="admin.username" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input type="password" ng-model="admin.password" class="form-control">
                                            <i class="fa fa-eye-slash" aria-hidden="true" show-password></i>
                                        </div>
                                       
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Sign me in</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="snackbar"></div>
    <?php include "include/js-url.php"; ?>
</body>

</html>