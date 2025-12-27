<?php
$activePage = $activePage ?? 'home';
?>
<nav class="navbar navbar-light bg-white border-bottom px-3 px-lg-4">
  <div class="d-flex align-items-center gap-2">
    <button class="btn btn-sm btn-outline-secondary d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#saSidebar" aria-controls="saSidebar">
      <i class="bi bi-list"></i>
    </button>
  </div>

  <div class="d-flex align-items-center gap-2">
    <a class="btn btn-sm btn-outline-secondary" href="#" title="Notificações" aria-label="Notificações">
      <i class="bi bi-bell"></i>
    </a>
  </div>
</nav>