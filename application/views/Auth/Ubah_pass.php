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
                                <center>
                                    <div class="small mb-3 text-muted">Enter your email address and we will reset your password.</div>
                                </center>
                                <center>
                                    <?php if ($this->session->flashdata('error')) : ?>
                                        <div class="error"><?php echo $this->session->flashdata('error'); ?></div>
                                    <?php endif; ?>

                                    <?php echo $this->session->flashdata('msg'); ?>

                                    <?php if ($this->session->flashdata('error')) { ?>
                                        <p style="color: red;"><?php echo $this->session->flashdata('error'); ?></p>
                                    <?php } ?>
                                </center>

                                <?php echo form_open('Reset_pass/process_reset'); ?>
                                <div class="form-floating mb-3">
                                    <input class="form-control" name="email" id="email" type="email" placeholder="name@example.com" required />
                                    <label for="inputEmail">Email address</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" name="new_password" type="password" placeholder="New Password" required />
                                    <label for="inputNewPass">New Password</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" name="confirm_password" type="password" placeholder="Confirm New Password" required />
                                    <label for="inputCnfmPass">Confirm Passoword</label>
                                </div>
                                <?php echo form_error('email', '<p style="color:red;">', '</p>'); ?>



                                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                    <a class="small" href="<?php echo base_url('Login/index') ?>">Return to login</a>
                                    <button class="btn btn-dark" value="Reset Password" type="submit">Reset Password</button>
                                </div>
                                <?php echo form_close(); ?>

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
                    < </div>
                </div>
        </footer>
    </div>
</div>