<aside class="main-sidebar sidebar-dark-secondary elevation-4">
    <!-- Brand Logo -->
    <a href="#!" class="brand-link">
      <img src="https://adminlte.io/themes/v3/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Starter Pack Produk</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview {{ Route::is('back.cms.*') ? 'menu-open' : '' }}">
            <a href="#!" class="nav-link">
              <p style="font-size: 15px;" class="font-weight-700">
                Content Management System
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item pl-2">
                <a href="{{ route('back.cms.header.index') }}" class="nav-link {{ Route::is('back.cms.header.*') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-desktop"></i>
                  <p>Header</p>
                </a>
              </li>
              <li class="nav-item pl-2">
                <a href="{{ route('back.cms.produk-list.index') }}" class="nav-link {{ Route::is('back.cms.produk-list.*') ? 'active' : '' }}">
                  <i class="nav-icon fa fa-boxes"></i>
                  <p>Produk</p>
                </a>
              </li>
              <li class="nav-item pl-2">
                <a href="{{ route('back.cms.gambar-proses.index') }}" class="nav-link {{ Route::is('back.cms.gambar-proses.*') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-images"></i>
                  <p>Gambar Proses</p>
                </a>
              </li>
              <li class="nav-item pl-2">
                <a href="{{ route('back.cms.tentang-kami.index') }}" class="nav-link {{ Route::is('back.cms.tentang-kami.*') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-address-card"></i>
                  <p>Tentang Kami</p>
                </a>
              </li>
              <li class="nav-item pl-2">
                <a href="{{ route('back.cms.keunggulan-perusahaan.index') }}" class="nav-link {{ Route::is('back.cms.keunggulan-perusahaan.*') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-thumbs-up"></i>
                  <p>Keunggulan</p>
                </a>
              </li>
              <li class="nav-item pl-2">
                <a href="{{ route('back.cms.team-kami.index') }}" class="nav-link {{ Route::is('back.cms.team-kami.*') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-users"></i>
                  <p>Team Kami</p>
                </a>
              </li>
              <li class="nav-item pl-2">
                <a href="{{ route('back.cms.client-kami.index') }}" class="nav-link {{ Route::is('back.cms.client-kami.*') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-users"></i>
                  <p>Client Kami</p>
                </a>
              </li>
              <li class="nav-item pl-2">
                <a href="{{ route('back.cms.testimoni.index') }}" class="nav-link {{ Route::is('back.cms.testimoni.*') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-users"></i>
                  <p>Testimoni</p>
                </a>
              </li>
              <li class="nav-item pl-2">
                <a href="{{ route('back.cms.promosi.index') }}" class="nav-link {{ Route::is('back.cms.promosi.*') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-bullhorn"></i>
                  <p>Promosi</p>
                </a>
              </li>
              <li class="nav-item pl-2">
                <a href="{{ route('back.cms.footer.index') }}" class="nav-link {{ Route::is('back.cms.footer.*') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-info"></i>
                  <p>Footer</p>
                </a>
              </li>
              <li class="nav-item pl-2">
                <a href="{{ route('back.cms.whatsapp.index') }}" class="nav-link link-whatsapp-edit">
                  <i class="nav-icon fab fa-whatsapp"></i>
                  <p>Whatsapp</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
