        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Muhammad Mush'ab Al Mubarok</a>
            </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
                </div>
            </div>
            </div>
            <?php
                $ar_menu = ['home'=>'dashboard.php',
                    'produk'=>'produk.php',
                    'profile' => 'profil.php',
                    'about' => 'about.php',
                    ]
            ?>
            
            <!-- Sidebar Menu -->
            <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <li class="nav-item">
                <?php
                foreach ($ar_menu as $menu => $hal){
                ?>
                <a href="index.php?hal=<?=$hal?>" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                    <?=$menu?>
                    </p>
                </a>
                <?php } ?>
                </li>

                <li class="nav-item">
                <a href="login.php" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                    Login
                    <span class="right badge badge-danger">New</span>
                    </p>
                </a>
                </li>
                
            </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
        </aside>