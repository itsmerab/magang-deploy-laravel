<nav id="sidebar"
class="sidebar js-sidebar">
<div class="sidebar-content js-simplebar">
  <a class="sidebar-brand" href="{{ url('/') }}">
    <img src="{{ url('pt1.jpg') }}" class="avatar img-fluid me-1 rounded">
    <span class="align-middle">Magang Latihan</span>
  </a>

  <ul class="sidebar-nav">
    <li class="sidebar-header">Menu Utama</li>
    <li class="sidebar-item">
      <a class="sidebar-link" 
        href="{{ route('admin.barang.index') }}">
        <i class="align-middle"
          data-feather="monitor"></i>
        <span class="align-middle">Dashboard</span>
      </a>
    </li>

    <li class="sidebar-item">
      <a class="sidebar-link" 
        href="{{ route('admin.kategori-barang.index') }}">
        <i class="align-middle"
          data-feather="database"></i>
        <span class="align-middle">Kategori Barang</span>
      </a>
    </li>

    <li class="sidebar-item">
      <a class="sidebar-link" 
        href="{{ url('admin/barang') }}">
        <i class="align-middle"
          data-feather="database"></i>
        <span class="align-middle">Barang</span>
      </a>
    </li>

    <li class="sidebar-header">Menu Lainnya</li>
    <li class="sidebar-item">
      <a class="sidebar-link" href="#">
        <i class="align-middle"
          data-feather="bar-chart-2"></i>
        <span class="align-middle">Lainnya</span>
      </a>
    </li>
  </ul>
</div>
</nav>