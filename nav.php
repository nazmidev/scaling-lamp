
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href=""><img src="images/swaptized logo.png" width="150px" <?php if (isset($align_logo)){ ?>class="al"<?php } ?> ></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
    </ul>
    <span class="navbar-text">

      <?php 
        $_SESSION['client_id'] = '1';
        if (!isset($_SESSION['client_id'])) {
      ?>      
      <a href="/login">login here</a>

       <?php } else {?>
            <a href="/login">Edit My Barter</a>
            <a href="/login">My Account</a>
            <a href="/login">Logout</a>
        
       <?php } ?>

    </span>
  </div>
</nav>