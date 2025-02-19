<?php
    include_once("connections/db.php");

    

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
<div class="container-main">
<div class="container p-3" id="register">
    <center><h2 class="mb-4 h2">Login</h2></center>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
  <div class="mb-3">
    <input type="email" class="form-control" name="email" placeholder="Email">
  </div>
  <div class="mb-3">
    <input type="password" class="form-control" name="password" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary mb-3">Submit</button>
  <p class="">You don't have account? <a href="registration.php">Register</a></p>
</form>
</div>
</div>
</body>
</html>