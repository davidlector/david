<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand" href="<?php echo $base_url."index.php"?>">Bina Nusantara</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo $base_url."index.php?p=mahasiswa"?>">Mahasiswa<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"> <?php echo $_SESSION['username'] ?> </a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="<?php echo $base_url."query/logout.php" ?>">Logout</a>
      </li>

    </ul>
  </div>
</nav>