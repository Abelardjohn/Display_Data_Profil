<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4">Password Recovery</h3>
                            </div>
                            <div class="card-body">
                                <div class="small mb-3 text-muted">Enter your email address and we will send you a link to reset your password.</div>
                                <center>
                                    <?php if ($this->session->flashdata('error')) : ?>
                                        <div class="error"><?php echo $this->session->flashdata('error'); ?></div>
                                    <?php endif; ?>
                                </center>

                                <?php echo form_open('Reset_pass/new_password/'); ?>

                                <div class="form-floating mb-3">
                                    <?php echo form_open('auth/new_password/' . $token); ?>
                                    <label for="password">Password:</label>
                                    <input type="password" name="password" required>
                                    <?php echo form_error('password', '<p style="color:red;">', '</p>'); ?>
                                </div>

                                <div class="form-floating mb-3">
                                    <label for="confirm_password">Konfirmasi Password:</label>
                                    <input type="password" name="confirm_password" required>
                                    <?php echo form_error('confirm_password', '<p style="color:red;">', '</p>'); ?>
                                </div>

                                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                    <a class="small" href="<?php echo base_url('Login/index') ?>">Return to login</a>
                                    <button class="btn btn-dark" type="submit">Reset Password</button>
                                </div>
                                <?php echo form_close(); ?>

                            </div>
                            <div class="card-footer text-center py-3">
                                <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
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