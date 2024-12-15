<div class="hero_area">
<header class="header_section">
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg custom_nav-container ">
      <a class="navbar-brand" href="../public">
          <img src="../assets/images/ojc-round.png" alt="ojc-round" width="50px" height="50px">
          <span>Overseas Job Central</span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  ml-auto">
          <li class="nav-item">
              <a class="nav-link" href="../public"> Home </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="../jobs/jobs.php"> Jobs </a>
          </li>
          <?php if (!isset($_SESSION['user_id'])): ?>
          <li class="nav-item">
              <a class="nav-link" href="../auth/login.php">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span>
                  Login
              </span>
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="../auth/register.php">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span>
                  Sign Up
              </span>
              </a>
          </li>
            <?php else: ?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                    <?php echo $_SESSION['user_name']; ?>
                </a>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <li>
                        <a class="dropdown-item" href="#" onclick="ALERT()"> Profile</a>
                        <a class="dropdown-item" href="#" onclick="ALERT()"> Dashboard</a>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="../auth/logout.php">Logout</a></li>
                </ul>
            </li>          
            <?php endif; ?>
          </ul>
      </div>
    </nav>
  </div>
</header>
