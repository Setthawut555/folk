<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="login-01.css" />
    <title>Login</title>
  </head>
  <body>
    <div class="login">
      <h1 style="color: white">LOG</h1>
      <h1 style="color: #cf7746">IN</h1>
    </div>
    <form action="login_db.php" method="POST" class="input">
      <input type="text" name="email" placeholder="| Email" style="margin-bottom: 3%" />
      <input type="password" name="password" placeholder="| Password" />
      <div class="btn">
        <button type="submit" name="submit" class="button">Login</button>
      </div>
    </form>
  </body>
</html>
