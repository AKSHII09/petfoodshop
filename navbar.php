<!-- 
<header class="m-auto" style="background-color: white;">

  <div class="container-fluid"> -->
  <nav class="navbar navbar-expand-lg bg-light text-dark sticky-navbar" id="navb" >
      <div class="container-fluid" id="sticky_nav" style="background-color:#f3ca20;">
        <a href="./index.php"><img src="./img/logo.png" alt="" style="width: 10rem;" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 navbar-brand ms-auto ">
            <li class="nav-item">
              <a class="nav-link text-dark" aria-current="page" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="allproducts.php">PRODUCTS</a>
            </li>
      
            <li class="nav-item">
              <a class="nav-link text-dark" href="about.php">ABOUT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="contactus.php">CONTACT</a>
            </li>
          </ul>
          <!-- search -->
          <div class="search d-flex">
            <form method="GET" id="search-form">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for Pet Food..." name="search" id="search-input">
                <div class="input-group-append">
                  <button class="btn btn-dark searchbtn" type="submit">Search</button>
                </div>
              </div>
            </form>
          </div>

          <!-- Account dropdown -->
           <!-- Account dropdown -->
           
          <?php
          if (isset($_SESSION['username'])) {
            echo '<div class="dropdown" style="display: flex; align-items: center;">';
            echo '<span class="navbar-text">';
            echo '<a href="./add_to_cart.php"><img class="carts" src="./img/cart.png" alt="" style="width: 1.5rem; margin-right: -2rem;"></a>';
            echo '<img class="carts" src="./img/notification.png" alt="" style="width: 1.5rem; margin-right: -2rem;">';
            echo '<img class="carts" src="./img/account.png" alt="" style="width: 1.5rem; margin-right: -0.5rem;">';
            echo '</span>';
            echo '</div>';
          } else {
            echo '<div class="account d-flex">';
            echo '</div>';
          }
          ?>
          <div class="account d-flex">
            <?php
            if (isset($_SESSION['username'])) {
              echo '<a href="#" class="btn"><b>' . $_SESSION['username'] . '</b>' . '</a>';
              echo '<a class="btn" href="./logout.php">Log Out</a>';
            } else {
              
              echo'<div class="account d-flex">';
              echo' <div class="dropdown" style="display: flex; align-items: center;">';
              echo'<button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false"style="margin-left: 2rem;">
                Login
              </button>';
              echo' <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">';
              echo'<li><a class="dropdown-item" href="./login.php">User Login</a></li>';
              echo'<li><a class="dropdown-item" href="./admin.php">Admin Login</a></li>';
              echo' </ul>';
              echo' </div>';
              echo' </div>';
            }
            ?>
          </div>
        </div>
      </div>
    </nav>
  <!-- </div>
</header> -->