<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="reg-01.css" />
    <title>Register</title>
  </head>
  <body>
    <div class="reg">
      <h1 style="color: #cf7746">REGIS</h1>
      <h1 style="color: white">TER</h1>
    </div>
    <form action="reg_db.php" method="post" class="input">
      <input type="text" placeholder="| First Name" name="fname" />
      <input type="text" placeholder="| Last Name" name="lname" />
      <input type="tel" placeholder="| Tel." name="tel" />
      <input type="text" placeholder="| E-Mail" name="email" />
      <input type="password" placeholder="| Password" name="password" />
      <div class="btn">
        <button type="submit " name="submit" class="btn-submit">register</button>
        <!-- <button class="button" type="submit" name="submit">Register</button> -->
      </div>
    </form>
  </body>
</html>
