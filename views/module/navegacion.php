<!-- Barra Superior -->
              <!--nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <a class="mobile-search morphsearch-search" href="#">
                            <i class="ti-search"></i>
                        </a>
                        <a href="index.php">
                            <img class="img-fluid" src="assets/images/logo.png" alt="Theme-Logo" />
                        </a>
                        <a class="mobile-options">
                            <i class="ti-more"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-right">
                            <li class="user-profile header-notification">
                                <a href="#">
                                        <img src="assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                        <span>John Doe</span>
                                        <i class="ti-angle-down"></i>
                                    </a>
                                <ul class="show-notification profile-notification">
                                    <li>
                                        <a href="#!">
                                                <i class="ti-settings"></i> Settings
                                            </a>
                                    </li>
                                    <li>
                                        <a href="user-profile.html">
                                                <i class="ti-user"></i> Profile
                                            </a>
                                    </li>
                                    <li>
                                        <a href="auth-normal-sign-in.html">
                                        <i class="ti-layout-sidebar-left"></i> Logout
                                    </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav-->
            <!-- Barra Superior termina -->
            <!-- Menu lateral -->
            <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                    <img class="img-40 img-radius" src="assets/images/avatar-4.jpg" alt="User-Profile-Image">
                                    <div class="user-details">
                                        <span><?php echo $_SESSION['usuario_nombre'] ?> <?php echo $_SESSION['usuario_apellido'] ?></span>
                                        <span id="more-details"><?php echo $_SESSION['usuario_username'] ?><i class="ti-angle-down"></i></span>
                                    </div>
                                </div>

                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            <a href="index.php?action=logout"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pcoded-search">
                                <span class="searchbar-toggle">  </span>
                                <div class="pcoded-search-box ">
                                    <input type="text" placeholder="Search">
                                    <span class="search-icon"><i class="ti-search" aria-hidden="true"></i></span>
                                </div>
                            </div>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Navigation</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="index.php?action=productos">
                                        <span class="pcoded-micon"><i class="ti-package"></i><b>P</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.navigate.main">Productos</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="index.php?action=categorias">
                                        <span class="pcoded-micon"><i class="ti-tag"></i><b>C</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.navigate.main">Categorías</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="index.php?action=usuarios">
                                        <span class="pcoded-micon"><i class="ti-user"></i><b>U</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.navigate.main">Usuarios</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul> 
                        </div>
                    </nav>
            <!-- Menu lateral termina -->