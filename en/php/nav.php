<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide"><img src="images/logo.png" alt="logo" style="width: auto; height: 45px;">Trio Nova Lex</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">

        
          <div class="w3-dropdown-hover w3-bar-item w3-button w3-white" style="padding: 0;">
            <button class="w3-button">Languages <i class="fa fa-caret-down"></i></button>
            <div class="w3-dropdown-content  w3-bar-block">
             <a href="https://www.trionovalex.com/en/home.php" class="w3-bar-item w3-button">English</a>
             <a href="https://www.trionovalex.com/ro/home.php" class="w3-bar-item w3-button">Română</a>
             <a href="https://www.trionovalex.com/ru/home.php" class="w3-bar-item w3-button">Русский</a>
            </div>
          </div>

      <a href="/en/about-us.php" class="w3-bar-item w3-button"><i class="fas fa-question-circle"></i> About</a>
      <a href="/en/team.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i> Team</a>
      <!-- <a href="/en/work.php" class="w3-bar-item w3-button"><i class="fa fa-th"></i> Work</a> -->
      <a href="https://www.trionovalex.shop" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> Shop</a>
      <a href="https://www.trionovalex.tech" class="w3-bar-item w3-button"><i class="fas fa-flask"></i> Tech</a>
      <a href="/en/contact.php" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> Contact</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">

  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button"><i class=" fas fa-question-circle "></i> ABOUT</a>
  <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-user"></i> TEAM</a>
  <!-- <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-th"></i> WORK</a> -->
  <a href="www.trionovalex.shop" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> SHOP</a>
  <a href="www.trionovalex.tech" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fas fa-flask"></i> TECH</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
</nav>