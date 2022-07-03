<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php");
guestsOnly();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- custom css -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/auth.css">
    <title>myblog</title>

    <!-- bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Line awesome -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
  integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

</head>
<body>

<?php include(ROOT_PATH . "/app/includes/header.php"); ?>

  <div class="login-container">
    <form action="login.php" method="POST">
      <div class="login-form">
        <span>Log In</span>

        <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

        <input type="email" name="email" value="<?php echo $email; ?>" placeholder="email">
        <input type="password" name="password" value="<?php echo $password; ?>"placeholder="password">
        <a href="#">forgot password?</a>
        <button name="login-btn">Log In</button>
        <p>Not registered yet? <a href="<?php echo BASE_URL . '/register.php'?>">Sign Up</a></p>
      </div>
    </form>
  </div>

  <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>

</body>
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- custom js -->
    <script src="script.js"></script>
</html>