<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <!-- Materialize CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
  <div class="container">
    <form action="controllers/verified.php" method="POST">
    <div class="row">
      <div class="col s12 m6 offset-m3">
        <div class="card">
          <div class="card-content">
            <span class="card-title center-align">Login</span>
            <div class="input-field">
              <i class="prefix fas fa-envelope"></i>
              <input id="email" type="email" name="email" class="validate">
              <label for="email">Email</label>
            </div>
            <div class="input-field">
              <i class="prefix fas fa-lock"></i>
              <input id="password" type="password" name="password" class="validate">
              <label for="password">Password</label>
            </div>
          </div>
          <div class="card-action center-align">
            <button class="btn waves-effect waves-light" type="submit" name="action">Login</button>
          </div>
        </div>
      </div>
    </div>
    </form>
  </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
