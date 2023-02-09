<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="panel.php" class="nav-link <?php
            if ($_SERVER['PHP_SELF'] == "/Jmaghalat/panel.php") {
                echo "active";
            }
            ?>">
                <i class="fa fa-home nav-icon"></i>
                <p>صفحه اصلی</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="mag_manager.php" class="nav-link">
                <i class="fa fa-book  nav-icon"></i>
                <p>مدیریت مجلات</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="version_manager.php" class="nav-link">
                <i class="fa fa-copy nav-icon"></i>
                <p>مدیریت نسخه های نشریه</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="article_manager.php" class="nav-link">
                <i class="fa fa-pencil-square  nav-icon"></i>
                <p>مدیریت مقالات</p>
            </a>
        </li>

        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fa fa-user-circle"></i>
                <p>
                    اختصاص اثر به ارزیاب
                    <i class="right fa fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="set_ejmali.php" class="nav-link">
                        <i class="fa fa-dot-circle-o nav-icon"></i>
                        <p>اجمالی</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="set_tafsili.php" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>تفصیلی</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fa fa-bar-chart"></i>
                <p>
                    آمار و گزارشات
                    <i class="right fa fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="pages/charts/chartjs.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>ثبت اثر جدید</p>
                    </a>
                </li>
            </ul>
        </li>


        <li class="nav-item">
            <a href="user_manager.php" class="nav-link">
                <i class="fa fa-user nav-icon"></i>
                <p>مدیریت کاربران</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="festival_manager.php" class="nav-link">
                <i class="fa fa-cogs  nav-icon"></i>
                <p>مدیریت جشنواره</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="catalogs.php" class="nav-link">
                <i class="fa fa-cogs  nav-icon"></i>
                <p>مدیریت کاتالوگ ها</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="logout.php" class="nav-link">
                <i class="fa fa-sign-in nav-icon"></i>
                <p>خروج</p>
            </a>
        </li>
    </ul>
</nav>