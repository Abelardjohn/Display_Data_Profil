<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="index.html">Profile App</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">

    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="<?php echo site_url('Home/logout'); ?>">Logout</a></li>
            </ul>
        </li>
    </ul>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Pages</div>

                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Pages
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                Authentication
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo site_url('Login/index'); ?>">Login</a>
                                    <a class="nav-link" href="<?php echo site_url('Registrasi/index'); ?>">Register</a>
                                    <a class="nav-link" href="<?php echo site_url('Reset_pass/forgotPassword'); ?>">Forgot Password</a>
                                </nav>
                            </div>

                        </nav>
                    </div>

                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                <?php echo $user['nama']; ?> |
                <?php echo $this->session->userdata('access'); ?>
            </div>
        </nav>
    </div>

    <div id="layoutSidenav_content">
        <main>

            <!-- start content -->

            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="card mt-5">
                            <div class="card-body text-center">
                                <img src="<?php echo base_url() . '/uploads/' . $user['foto_profil']; ?>" alt="Foto Profil" class=" mb-4" width="150" height="200">
                                <!-- <img src="<?php echo base_url('uploads/pp.png'); ?>" alt="Gambar Pengguna" class="rounded-circle mb-4" width="150"> -->
                                <h3 class="mb-3"><?php echo $user['nama']; ?></h3>
                                <p><strong>Email:</strong> <?php echo $user['email']; ?></p>
                                <p><strong>Waktu Dibuat:</strong> <?php echo $user['date_created']; ?></p>
                                <p><strong>Status:</strong> <?php echo $this->session->userdata('access'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- end content -->

        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Abelard 2023</div>

                </div>
            </div>
        </footer>
    </div>
</div>