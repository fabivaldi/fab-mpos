<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ url(auth()->user()->foto ?? '') }}" class="img-circle img-profil" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ auth()->user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li>
                <a href="{{ route('dashboard') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>

            @if (auth()->user()->level == 1)
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-cogs"></i>
                        <span>MASTER</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="{{ route('kategori.index') }}">
                                <i class="fa fa-cube"></i> <span>Master Kategori</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('produk.index') }}">
                                <i class="fa fa-cubes"></i> <span>Master Produk</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('member.index') }}">
                                <i class="fa fa-id-card"></i> <span>Master Member</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('supplier.index') }}">
                                <i class="fa fa-truck"></i> <span>Master Supplier</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-exchange"></i>
                        <span>TRANSAKSI</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="{{ route('pengeluaran.index') }}">
                                <i class="fa fa-money"></i> <span>Master Pengeluaran</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('pembelian.index') }}">
                                <i class="fa fa-download"></i> <span>Master Pembelian</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('penjualan.index') }}">
                                <i class="fa fa-upload"></i> <span>Monitoring Penjualan</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('transaksi.index') }}">
                                <i class="fa fa-cart-arrow-down"></i> <span>Riwayat Transaksi</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('transaksi.baru') }}">
                                <i class="fa fa-cart-arrow-down"></i> <span>Transaksi Baru</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="header">REPORT</li>
                <li>
                    <a href="{{ route('laporan.index') }}">
                        <i class="fa fa-file-pdf-o"></i> <span>Master Laporan</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-cogs"></i>
                        <span>SISTEM</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="{{ route('user.index') }}">
                                <i class="fa fa-users"></i> <span>Sistem User</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('setting.index') }}">
                                <i class="fa fa-cogs"></i> <span>Sistem Web</span>
                            </a>
                        </li>
                    </ul>
                </li>
            @else
                <li>
                    <a href="{{ route('transaksi.index') }}">
                        <i class="fa fa-cart-arrow-down"></i> <span>Riwayat Transaksi</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('transaksi.baru') }}">
                        <i class="fa fa-cart-arrow-down"></i> <span>Transaksi Baru</span>
                    </a>
                </li>
            @endif
        </ul>

    </section>
    <!-- /.sidebar -->
</aside>
