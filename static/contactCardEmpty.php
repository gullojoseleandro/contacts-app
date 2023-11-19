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

