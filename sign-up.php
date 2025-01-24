<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link rel="stylesheet" href="css/main.css ">
</head>

<body>
  <div class="wrapper">
    <div class="tittle">Login Form</div>
    <form action="login.php" method="POST">
      <div class="field">
        <input type="text" name="email" required />
        <label>Masukan Email</label>
      </div>
      <div class="field">
        <input type="password" name="pas" required />
        <label>Masukan Password</label>
      </div>
      <div class="content">
        <div class="checkbox">
          <input type="checkbox" id="ingatkan-saya" />
          <label for="ingatkan-saya">ingatkan saya</label>
        </div>
        <div class="pass-link">
          <a href="a">Lupa Password?</a>
        </div>
      </div>
      <div class="field">
        <input type="submit" name="login">
      </div>
    </form>
  </div>
</body>

</html>