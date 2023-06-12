<body class="" style="background-color: #343434;">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Login</h3>
                                </div>
                                <center>
                                    <?php echo $this->session->flashdata('msg'); ?>
                                </center>
                                <div class="card-body">
                                    <form action="<?= base_url('Login/autentikasi'); ?>" method="POST">
                                        <div class="form-floating mb-3">
                                            <input name="email" class="form-control" id="email" type="email" placeholder="name@example.com" />
                                            <label for="inputEmail">Email address</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input name="pass" class="form-control" id="password" type="password" placeholder="Password" />
                                            <label for="inputPassword">Password</label>
                                        </div>

                                        <!-- another action -->

                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="<?php echo base_url('Reset_pass/forgotPassword') ?>">Forgot Password?</a>
                                            <button class="btn btn-dark" class="btn-login autentikasi" type="submit">Login</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="<?php echo base_url('Registrasi/index') ?>">Need an account? Sign up!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Abelard 2023</div>

                    </div>
                </div>
            </footer>
        </div>
    </div>