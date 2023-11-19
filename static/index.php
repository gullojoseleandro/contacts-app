<?php
  require "./contacts-app/static/database.php";

  $contacts = $conn->query("SELECT * FROM contacts");

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.2/darkly/bootstrap.min.css"
      integrity="sha512-JjQ+gz9+fc47OLooLs9SDfSSVrHu7ypfFM7Bd+r4dCePQnD/veA7P590ovnFPzldWsPwYRpOK1FnePimGNpdrA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <!-- Static Content -->
    <link rel="stylesheet" href="css/index.css">
    <title>Contacts App</title>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="img/logo.png" alt="logo">Contact App</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasDarkNavbar"
          aria-controls="offcanvasDarkNavbar"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="offcanvas offcanvas-end text-bg-dark"
          tabindex="-1"
          id="offcanvasDarkNavbar"
          aria-labelledby="offcanvasDarkNavbarLabel"
        >
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">
              Contact App
            </h5>
            <button
              type="button"
              class="btn-close btn-close-white"
              data-bs-dismiss="offcanvas"
              aria-label="Close"
            ></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./add.html">Add contact</a>
              </li>
              <li class="nav-item dropdown">
                
              </li>
            </ul>
            
          </div>
        </div>
      </div>
    </nav>
    <main>
      <div class="container pt-4 p-3 mt-4">
        <div class="row">
          <?php if($contacts->rowCOUNT() == 0): ?>
          <div class="col-md-4 mx-auto mt-5">
              <div class="card card-body text-center">
                <div class="card-body">
                  <p class="m-2">No contacts saved yet</p>
                  <a href="add.php">Add one!</a>
                </div>
              </div>
            </div>
          <?php endif ?>
          <?php foreach ($contacts as $contact): ?>
            <div class="col-md-4 mb-3 mt-5">
              <div class="card text-center">
                <div class="card-body">
                  <h3 class="card-title text-capitalize"><?= $contact["name"]?> </h3>
                  <p class="m-2"><?= $contact["phone_number"]?></p>
                  <a href="#" class="btn btn-secondary mb-2">Edit Contact</a>
                  <a href="#" class="btn btn-danger mb-2">Delete Contact</a>
                </div>
              </div>
            </div>
          <?php endforeach ?>
        </div>
      </div>
    </main>
  </body>
</html>
