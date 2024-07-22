<style>
    .video-wrapper video {
    height: auto;
    vertical-align: middle;
    width: 22%;
  }
</style>

<br>
<nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-dark shadow">
  <div class="container">
  <a class="navbar-brand" href="index.php">
  <div class="video-wrapper">
        <video autoplay loop muted>
         <source src="1.mp4" type="video/mp4"></a>
        </video>
        <div class="video-description">
        </div>
    </div>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="categories.php">Collections</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php">Cart</a>
        </li>

        <?php
          if(isset($_SESSION['auth']))

          {
            ?>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <?= $_SESSION['auth_user']['name'];  ?>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="my-orders.php">My Orders</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
              </li>
            <?php

          }
          else
          {
            ?>
            <li class="nav-item">
              <a class="nav-link" href="register.php">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>

            <?php
          }
            ?>
      </ul>
    </div>
  </div>
</nav>