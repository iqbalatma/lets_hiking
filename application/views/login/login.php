<body class="hold-transition login-page">
    <?= $this->session->flashdata('message'); ?>
    <div class="login-box">
        <div class="login-logo">
            <a href="<?= base_url(); ?>"><b>Let's Hiking Administrator</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Please login to get access</p>




                <form class="user" method="post" action="<?= base_url('Auth'); ?>">

                    <div class="input-group mb-1">
                        <input name="username" type="text" class="form-control" placeholder="Username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>



                    <div class="input-group mb-1">
                        <input name="password" type="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>






                    <br>
                    <br>
                    <br>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-4 mx-auto">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->