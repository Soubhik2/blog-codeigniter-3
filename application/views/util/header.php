<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->

<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container">
    <a class="navbar-brand" href="<?= base_url() ?>"><i class="bi bi-shop"></i></a>
    <a class="navbar-brand" href="<?= base_url() ?>">WordWeave</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?= ($page=='home')?'active':'' ?>" aria-current="page" href="<?= base_url() ?>">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link <?= ($page=='blogs')?'active':'' ?>" href="<?= base_url('/blogs') ?>">Blogs</a>
        </li>

        <li class="nav-item">
          <a class="nav-link <?= ($page=='blog_post')?'active':'' ?>" href="<?= base_url('/post') ?>">Blog post</a>
        </li>
        
      </ul>
      <form class="d-flex ms-2" action="<?= base_url('/blogs') ?>" role="search">
        <input class="form-control me-2" name="query" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
      </form>
    </div>
  </div>
</nav>