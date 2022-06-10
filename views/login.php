<?php

    $loginUser = new UsersController();
    $loginUser->auth();
?>

<!DOCTYPE html>
      <html lang="en">
      <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="./public/css/registration.css">
          <title>Login</title>
      </head>
      <body>
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
          <div class="card-img-left d-none d-md-flex">
            <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">login</h5>
            <form method="POST">

              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInputUsername" placeholder="username" name="username" required autofocus>
                <label for="floatingInputUsername">username</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInputUsername" placeholder="password" name="password" required autofocus>
                <label for="floatingInputUsername">password</label>
              </div>


              <div class="d-grid mb-2">
                <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" name="submit" type="submit">Login</button>
              </div>

              <a class="d-block text-center mt-2 small" href="<?php echo BASE_URL;?>register">Dont have an account ? Register</a>

              <hr class="my-4">

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
        <!-- end form -->
</body>

  </html>