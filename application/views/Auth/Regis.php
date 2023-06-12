<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4">Registration Form</h3>
                            </div>
                            <center>
                                <?php if ($this->session->flashdata('msg')) { ?>
                                    <p style="color: green;"><?php echo $this->session->flashdata('msg'); ?></p>
                                    <php <?php } ?> <?php echo $this->session->flashdata('error'); ?> </center>

                                        <div class="card-body">

                                            <!-- open form -->


                                            <?php echo form_open_multipart('Registrasi/process'); ?>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="nama" id="nama" type="text" placeholder="Enter your name" />
                                                        <label for="inputFirstName">Name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="foto_profil">Foto Profil:</label>
                                                    <input type="file" name="foto_profil" accept=".png,.jpg, jpeg" required><br><br>
                                                </div>
                                            </div>

                                            <div class="row mb-3">

                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input class="form-control" name="email" id="email" type="email" placeholder="name@example.com" />
                                                        <label for="inputEmail">Email address</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="user_password" id="user_password" type="password" placeholder="Create a password" />
                                                        <label for="inputPassword">Password</label>
                                                    </div>
                                                </div>

                                            </div>


                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><button class="btn btn-dark" type="submit" name="submit" value="Daftar">Create Account</button></div>
                                            </div>
                                            <?php echo form_close(); ?>
                                            <!-- close form -->

                                        </div>
                                        <div class="card-footer text-center py-3">
                                            <div class="small"><a href="<?php echo base_url('Login/index') ?>">Have an account? Go to login</a></div>
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