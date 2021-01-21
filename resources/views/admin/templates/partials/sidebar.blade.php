<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light"><b>Lib</b>rary</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
     

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-header">MAIN NAVIGATION</li>
                <li class="nav-item">
                    <a href="{{ route('admin.author.index')}}" class="nav-link">
                        <i class="nav-icon far fa-user"></i>
                        <p>
                            Penulis
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.book.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Buku
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.borrow.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Buku Sedang Dipinjam
                        </p>
                    </a>
                </li>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>