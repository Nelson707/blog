<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?php echo BASE_URL . '/index.php'?>">Fotec</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>

          <?php if(isset($_SESSION['id'])):?>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              <?php echo $_SESSION['username'];?>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php if($_SESSION['admin']):?>
                <li><a class="dropdown-item" href="<?php echo BASE_URL . '/admin/dashboard.php'?>">Dashboard</a></li>
              <?php endif;?>
              <!-- <li>
                <hr class="dropdown-divider">
              </li> -->
              <li><a class="dropdown-item" href="<?php echo BASE_URL . '/logout.php'?>">Log out</a></li>
            </ul>
          </li>
          <?php else:?>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL . '/login.php'?>">Log In</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL . '/register.php'?>">Sign Up</a>
          </li>
          <?php endif;?>
          

          
        </ul>
        <form action="index.php" method="post" class="d-flex">
          <input class="form-control me-2" type="search" name="search-term" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>