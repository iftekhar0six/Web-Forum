<?php

session_start();

echo '
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand">Web Forum</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="forum1.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Category
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled"></a>
        </li>
      </ul>
      ';
      if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
      {
        echo '<div class=" mx-2">
               <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#login">Logout</button>
              </div>';
      }
      else
      {
        echo '<div class=" mx-2">
              <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#login">Login</button>
              <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#signup">Signup</button>
            </div>';
      }
      

      echo '<form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav> ';

include 'partial/_login.php';
include 'partial/_signup.php';

if(isset($_GET['signupsuccess'])&&$_GET['signupsuccess']=='true')
{
    echo '<div class="my0">
            <div class="alert alert-success alert-dismissible fade show my-0" role="alert">
              <strong>Success!</strong> You can now login.
            </div>
        </div>';
}

?>