<?php require ('head.php');

session_start();

 ?>

  <body>
    <div class="container">
      <div class="row">
          <div class="col-sm-6 col-md-4 col-md-offset-4">
              <h1 class="text-center login-title">Welcome to Chat without traces</h1>
              <div class="account-wall">
                  <img class="profile-img" src="images/anonimous.jpg"
                      alt="">
                  <form method="POST" action="sala.php" class="form-signin">
                  <input type="text" name = "alias" class="form-control" placeholder="Alias" required autofocus>
                  <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">
                      Access
                  </button>
                  </form>
              </div>
          </div>
      </div>
  </div>
  </body>
</html>
