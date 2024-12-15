<div class="sidebar" id="sidebar">
  <div class="logo">
    <i class="toggle-btn" onclick="toggleSidebar()">
      <img src="../assets/images/ojc-round.png" alt="ojc-round" width="40px" height="40px" class="mr-1">
    </i>  
    <span class="logo-text link-text">AdminPanel</span>
  </div>
  <ul>
    <li>
      <a href="dashboard.php">
        <i class="fa fa-tachometer"></i>
        <span class="link-text">Dashboard</span>
      </a>
    </li>
    <li>
      <a href="#" onclick="ALERT()">
        <i class="fa fa-briefcase"></i>
        <span class="link-text">Jobs</span>
      </a>
    </li>
    <li>
      <a href="#" onclick="ALERT()">
        <i class="fa fa-users"></i>
        <span class="link-text">Employer</span>
      </a>
    </li>
    <li>
      <a href="#" onclick="ALERT()">
        <i class="fa fa-users"></i>
        <span class="link-text">Employee</span>
      </a>
    </li>
  </ul>
  <ul>
  <?php if (!isset($_SESSION['user_id'])): ?>
      <li class="">
          <a href="../auth/login.php">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span class="link-text">
                  Login
              </span>
          </a>
      </li>
      <li class="">
          <a href="../auth/register.php">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span class="link-text">
                  Sign Up
              </span>
          </a>
      </li>
      <?php else: ?>
      <li class="">
          <a href="#">
          <i class="fa fa-user" aria-hidden="true"></i>
              <span class="link-text">
                  <?php echo $_SESSION['user_name']; ?>
              </span>
          </a>
      </li>
      <li class="">
          <a href="../auth/logout.php">
          <i class="fa fa-sign-out" aria-hidden="true"></i>
              <span class="link-text">
                  Logout
              </span>
          </a>
      </li>
      <?php endif; ?>
  </ul>
</div>
