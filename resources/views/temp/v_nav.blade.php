<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="/" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
               Home
    
              </p>
            </a>
            @if (auth()->user()->level == 'Admin')
            </li>
            <li class="nav-item has-treeview">
            <a href="/user" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
               User
              </p>
            </a>
            </li>
          
            <li class="nav-item has-treeview">
            <a href="/verifikasi/add" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
               Pengajuan
    
              </p>
            </a>
            </li>
            <li class="nav-item has-treeview">
            <a href="/barcode" class="nav-link">
              <i class="nav-icon fas fa-barcode"></i>
              <p>
               Diterima
    
              </p>
            </a>
            </li>
            <li class="nav-item has-treeview">
            <a href="/surat" class="nav-link">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
               Jenis Surat
    
              </p>
            </a>
            </li>
            <li class="nav-item has-treeview">
            <a href="/editor" class="nav-link">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
               Editor Surat
    
              </p>
            </a>
            </li>
            @endif
            <li class="nav-item has-treeview">
            <a href="/verifikasi" class="nav-link">
              <i class="nav-icon fas fa-database"></i>
              <p>
               Tabel Pengajuan
    
              </p>
            </a>
            </li>
            
            
                          
  </ul>
      </nav>