  <div class="main-sidebar sidebar-style-2">
      <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
              Koperasi PSM<br />
              @if (Auth::user()->id_roles !== 1)
              {{ Auth::user()->cabang->nama_cabang }}
              @endif
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
              <a href="/">PSM</a>
          </div>
          <ul class="sidebar-menu">
            <li class="{{ request()->is('/') ? 'active' : '' }}">
                <a href="/" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
        @if (Auth::user()->id_roles == 1)
            <li class="menu-header">Data Master</li>
            {{-- cabang --}}
            <li
                class="dropdown {{ request()->is('admin-cabang*') ? 'active' : '' }} || {{ request()->is('cabang*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Cabang</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="/cabang">Data Cabang</a></li>
                    <li><a class="nav-link" href="/cabang/create">Tambah Cabang</a>
                    </li>
                </ul>
            </li>
            {{-- divisi --}}
            <li
                class="dropdown {{ request()->is('admin-divisi*') ? 'active' : '' }} || {{ request()->is('divisi*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i>
                    <span>Divisi</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('divisi.index') }}">Data Divisi</a></li>
                    <li><a class="nav-link" href="{{ route('divisi.create') }}">Tambah Divisi</a></li>
                </ul>
            </li>
            {{-- jabatan --}}
            <li
                class="dropdown {{ request()->is('admin-jabatan*') ? 'active' : '' }} || {{ request()->is('jabatan*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-map-marker-alt"></i>
                    <span>Jabatan</span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('jabatan.index') }}">Data Jabatan</a></li>
                    <li><a href="{{ route('jabatan.create') }}">Tambah Jabatan</a></li>
                </ul>
            </li>
            {{-- karyawan --}}
            <li
                class="dropdown {{ request()->is('admin-karyawan*') ? 'active' : '' }} || {{ request()->is('karyawan*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-plug"></i>
                    <span>Karyawan</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('karyawan.index') }}">Data Karyawan</a></li>
                    <li><a class="nav-link" href="{{ route('karyawan.create') }}">Tambah Karyawan</a>
                    </li>
                </ul>
            </li>
        @elseif (Auth::user()->id_roles == 2)
            <li class="menu-header">Data Master</li>
            {{-- karyawan --}}
            <li
                class="dropdown {{ request()->is('admin-karyawan*') ? 'active' : '' }} || {{ request()->is('superadmin-karyawan*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-plug"></i>
                    <span>Karyawan</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('karyawan.index') }}">Data Karyawan</a></li>
                    <li><a class="nav-link" href="{{ route('karyawan.create') }}">Tambah Karyawan</a></li>
                </ul>
            </li>
            {{-- jabatan --}}
            <li
                class="dropdown {{ request()->is('jabatan*') ? 'active' : '' }} || {{ request()->is('jabatan*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-map-marker-alt"></i>
                    <span>Jabatan</span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('jabatan.index') }}">Data Jabatan</a></li>
                    <li><a href="{{ route('jabatan.create') }}">Tambah Jabatan</a></li>
                </ul>
            </li>
            {{-- divisi --}}
            <li
                class="dropdown {{ request()->is('divisi*') ? 'active' : '' }} || {{ request()->is('divisi*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i>
                    <span>Divisi</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('divisi.index') }}">Data Divisi</a></li>
                    <li><a class="nav-link" href="{{ route('divisi.create') }}">Tambah Divisi</a></li>
                </ul>
            </li>
        @elseif (Auth::user()->id_roles == 3)
            <li class="menu-header">Data Master</li>
            {{-- karyawan --}}
            <li
                class="dropdown {{ request()->is('admin-karyawan*') ? 'active' : '' }} || {{ request()->is('superadmin-karyawan*') ? 'active' : '' }} || {{ request()->is('cabang-karyawan*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-plug"></i>
                    <span>Karyawan</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('cabang.karyawan') }}">Data Karyawan</a></li>
                    <li><a class="nav-link" href="{{ route('cabang.karyawan-tambah') }}">Tambah Karyawan</a></li>
                </ul>
            </li>
        @endif
          </ul>

          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="{{ route('logout') }}" class="btn btn-primary btn-lg btn-block btn-icon-split"
                  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                  <i class="fas fa-rocket"></i>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
          </div>
      </aside>
  </div>
