<div class="nav-header">
    <a href="index.php" class="brand-logo">

        <img class="brand-title" src="../assets/images/logo.png" alt="">

    </a>


</div>
<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand dropdown">
            <a href="" style="font-size: 30px;right: 0;position: absolute;color: #ff8f16;" class="dropdown-toggle"
                data-toggle="dropdown">
                <img class="brand-title" src="../assets/images/user.png" alt="">
                <span class="caret"></span>

            </a>
            <ul class="dropdown-menu droplogout">
                <li data-toggle="modal" data-target="#changePassword"><a href=""><i class="fa fa-key" aria-hidden="true"></i> Change Password</a></li>
                <hr>
                <li><a href="session/logout.php?logout=true"><i class="fa fa-sign-out" aria-hidden="true"></i> Sign Out</a></li>
            </ul>
        </nav>
    </div>
</div>
<div id="changePassword" class="modal fade" role="dialog" ng-controller="admin-ctrl">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="row">
                    <div class="col-md-12">
                        <h3>Change Password</h3>
                        <form class="change_password" ng-submit="changePassword()">
                            <div class="form-group">
                                <label for="password">Old Password</label>
                                <input type="password" class="form-control" id="email" ng-model="admin.password"
                                    placeholder="Old Password" required>
                                <i class="fa fa-eye-slash" aria-hidden="true" show-password></i>

                            </div>
                            <div class="form-group">
                                <label for="pwd">New Password</label>
                                <input type="password" class="form-control" ng-model="admin.newPassword"
                                    placeholder="New Password" required>
                                <i class="fa fa-eye-slash" aria-hidden="true" show-password></i>

                            </div>
                            <div class="form-group">
                                <label for="pwd">Confirm Password</label>
                                <input type="password" class="form-control" ng-model="admin.confirmPassword"
                                    placeholder="Confirm Password" required>
                                <i class="fa fa-eye-slash" aria-hidden="true" show-password></i>

                            </div>
                            <div class="modal-footer modal_footer_concial">
                                <button type="submit" class="btn btn-success"
                                    ng-disabled="submitBtn || admin.newPassword != admin.confirmPassword ">Submit</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>