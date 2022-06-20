<?php
$user = new UsersController();
$id = $_SESSION['user_id'];
$user = $user->getUserById($id);


?>

<div class="container ">
  <div class="main-body">



    <div class="row gutters-sm">
      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-column align-items-center text-center">
              <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
              <div class="mt-3">
                <h4><?= $user->fullname ?></h4>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="card mb-3">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">User Name</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <?= $user->username ?>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Email</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <?= $user->email ?>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Phone</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <?= $user->numero_tele ?>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Address de Facturation </h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <?= $user->adress_facture ?>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
   </div>
</div>
</div>
