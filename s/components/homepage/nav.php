<div class="bg-red nav">
    <div class="icon">
        <h1>CoreX</h1>
    </div>
      <div class="search-container">
        <div class="search-bar">
        <form action="./products.php?search=" method="get">

      <input type="text" class="search-input" name="search" id="search" placeholder="Search..." />
</form>
      <div class="search-icon">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          height="24"
          viewBox="0 0 24 24"
          width="24"
        >
          <path d="M0 0h24v24H0z" fill="none"></path>
          <path
            d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zM9.5 14C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"
          ></path>
        </svg>
      </div>
        </div>
        <div class=""></div>
      </div>
<div class="menu">
  <a class="iconpack" id="homeButton" href="./index.php">
    <div class="icon carticon"><img src="./image/icons/home.svg" alt="issue"></div>
    <p>Home</p>
</a>
    <?php
      if (isset($_SESSION['user'])){
        echo '
          <div class="iconpack">

        <div class="icon loggedinicon"><img src="./image/icons/user.icon" alt="issue"></div>
        <p>'.$_SESSION['name'].'</p>
        <div class="dropdown" id="dropdownMenu">
        <a href="details.php">See Details</a>
        <a href="./backend/formconn/logout.php">Logout</a>
        </div>
        </div>
          <div class="iconpack cartBtn">
                  <div class="icon carticon"><img src="./image/icons/cart.svg" alt="issue"></div>
                  <p>Cart</p>
          </div>
'
        ;

      }
      else{
            
        echo '  <div class="iconpack">
<div class="icon profileicon"><img src="./image/icons/user.icon" alt="issue"></div>
    <p>Login/Register</p></div>';
      }
    ?>

  <div class="iconpack">
  <div class="theme-toggle-container">
  <label for="themeToggle">
    <input type="checkbox" id="themeToggle" class="themeToggleInput" />
    <svg
      width="18"
      height="18"
      viewBox="0 0 20 20"
      fill="currentColor"
      stroke="none"
    >
      <mask id="moon-mask">
        <rect x="0" y="0" width="20" height="20" fill="white"></rect>
        <circle cx="11" cy="3" r="8" fill="black"></circle>
      </mask>
      <circle class="sunMoon" cx="10" cy="10" r="8" mask="url(#moon-mask)"></circle>
      <g>
        <circle class="sunRay sunRay1" cx="18" cy="10" r="1.5"></circle>
        <circle class="sunRay sunRay2" cx="14" cy="16.928" r="1.5"></circle>
        <circle class="sunRay sunRay3" cx="6" cy="16.928" r="1.5"></circle>
        <circle class="sunRay sunRay4" cx="2" cy="10" r="1.5"></circle>
        <circle class="sunRay sunRay5" cx="6" cy="3.1718" r="1.5"></circle>
        <circle class="sunRay sunRay6" cx="14" cy="3.1718" r="1.5"></circle>
      </g>
    </svg>
  </label>
</div>
<p>Theme</p>


  </div>
</div>
    <!-- <div class="menu">
        <div class="linemenu"></div>
        <div class="linemenuL"></div>
        <div class="linemenu"></div>
        </div> -->
</div>