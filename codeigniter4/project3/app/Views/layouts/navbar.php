<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container">

    <!-- Logo -->
    <a class="navbar-brand" href="/">
      <img src="<?= base_url('uploads/logo.png'); ?>" alt="Logo" height="50">
    </a>

    <!-- Brand Name -->
    <a class="navbar-brand" href="#">KING MU</a>

    <!-- Mobile Toggle -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar Content -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <!-- Left Menu -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="/"><?= lang('App.home') ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('about') ?>"><?= lang('App.about') ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('post') ?>"><?= lang('App.blog') ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('contact') ?>"><?= lang('App.contact') ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('faqs') ?>"><?= lang('App.faq') ?></a>
        </li>
      </ul>

      <!-- Right Dropdown -->
      <div class="dropdown">
        <button class="btn btn-outline-success dropdown-toggle" type="button"
          data-bs-toggle="dropdown" aria-expanded="false">
          <?= lang('App.explore') ?>
        </button>

      <ul class="dropdown-menu dropdown-menu-end">
    <li><a class="dropdown-item" href="<?= base_url('explore-mu#history') ?>"><?= lang('App.history') ?></a></li>
    <li><a class="dropdown-item" href="<?= base_url('explore-mu#legends') ?>"><?= lang('App.legends') ?></a></li>
    <li><a class="dropdown-item" href="<?= base_url('explore-mu#squad') ?>"><?= lang('App.squad') ?></a></li>
    <li><a class="dropdown-item" href="<?= base_url('explore-mu#trophies') ?>"><?= lang('App.trophies') ?></a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="<?= base_url('explore-mu#about') ?>"><?= lang('App.about_mu') ?></a></li>
</ul>
      </div>
    <div class="d-flex ms-3">
    <a href="<?= base_url('lang/en') ?>" class="btn btn-sm btn-outline-light me-2">EN</a>
    <a href="<?= base_url('lang/id') ?>" class="btn btn-sm btn-outline-danger">ID</a>
</div>
    </div>
  </div>
</nav>
