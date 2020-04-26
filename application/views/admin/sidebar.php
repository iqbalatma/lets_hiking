    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="<?= base_url('Landing'); ?>" class="brand-link">
            <img src="<?= base_url(); ?>assets/img/Ftik.jpeg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">FTIK UNIKOM</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="<?= base_url(); ?>assets/AdminLTE-master/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block"><?= $nama ?></a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview menu-open">
                        <a href="<?= base_url(); ?>admin" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <!-- --------------------------------------------------------------------- -->

                    <!-- ======================================================================== -->
                    <li class="nav-item has-treeview">
                        <a href="<?= base_url('Content'); ?>" class="nav-link">
                            <i class="nav-icon fas fa-desktop"></i>
                            <p>
                                My Site
                            </p>
                        </a>
                    </li>
                    <!-- ======================================================================== -->

                    <!-- ======================================================================== -->
                    <li class="nav-item has-treeview">
                        <a href="<?= base_url('Write'); ?>" class="nav-link">
                            <i class="nav-icon fas fa-pen"></i>
                            <p>
                                Write a Post
                            </p>
                        </a>
                    </li>
                    <!-- ======================================================================== -->

                    <!-- ======================================================================== -->
                    <li class="nav-item has-treeview">
                        <a href="<?= base_url('Sorry'); ?>" class="nav-link">
                            <i class="nav-icon fas fa-images"></i>
                            <p>
                                Galerry
                            </p>
                        </a>
                    </li>
                    <!-- ======================================================================== -->


                    <!-- ======================================================================== -->
                    <li class="nav-item has-treeview">
                        <a href="<?= base_url('todolist'); ?>" class="nav-link">
                            <i class="nav-icon fas fa-th-list"></i>
                            <p>
                                To Do List
                            </p>
                        </a>
                    </li>
                    <!-- ======================================================================== -->


                    <!-- ======================================================================== -->
                    <!-- <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                Forms
                            </p>
                        </a>
                    </li> -->
                    <!-- ======================================================================== -->

                    <!-- ======================================================================== -->
                    <!-- <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Tables
                            </p>
                        </a>
                    </li> -->
                    <!-- ======================================================================== -->

                    <!-- ======================================================================== -->
                    <!-- <li class="nav-header">EXAMPLES</li>
                    <li class="nav-item">
                        <a href="pages/calendar.html" class="nav-link">
                            <i class="nav-icon far fa-calendar-alt"></i>
                            <p>
                                Calendar
                            </p>
                        </a>
                    </li> -->
                    <!-- ======================================================================== -->

                    <!-- ======================================================================== -->
                    <!-- <li class="nav-item">
                        <a href="pages/gallery.html" class="nav-link">
                            <i class="nav-icon far fa-image"></i>
                            <p>
                                Gallery
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon far fa-envelope"></i>
                            <p>
                                Mailbox
                            </p>
                        </a>
                    </li> -->
                    <!-- ======================================================================== -->


                    <!-- ======================================================================== -->
                    <!-- <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                Pages
                            </p>
                        </a>

                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon far fa-plus-square"></i>
                            <p>
                                Extras
                            </p>
                        </a>
                    </li> -->
                    <!-- ======================================================================== -->

                    <li class="nav-header">Account</li>
                    <li class="nav-item">
                        <a href="<?= base_url('Sorry'); ?>" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>My Profile</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('Sorry'); ?>" class="nav-link">
                            <i class="nav-icon fas fa-user-cog"></i>
                            <p>Setting Profile</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('Auth/logout'); ?>" class="nav-link">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>
                                Logout
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>