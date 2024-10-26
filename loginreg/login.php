<?php
session_start();
if (isset($_SESSION['errors'])) {
  $errors = $_SESSION['errors'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
  <script type="text/javascript" src="validation.js" defer></script>
</head>
<body>

  <div class="wrapper" id="signIn">
  <h1>Login</h1>
    <p id="error-message"></p>
    <?php
    if (isset($errors['login'])) {
      echo '<div class="error-main">
                    <p>' . $errors['login'] . '</p>
                    </div>';
      unset($errors['login']);
    }
    ?>
    <?php
        if (isset($errors['email'])) {
          echo ' <div class="error">
                    <p>' . $errors['email'] . '</p>
                </div>';
        }
        ?>
        <?php
        if (isset($errors['password'])) {
          echo ' <div class="error">
                    <p>' . $errors['password'] . '</p>
                </div>';
        }
        ?>
    <form id="form" method="post" action="user-account.php" class="form-control">
      <div>
        <label for="username-input">
          <span>@</span>
        </label>
        <input type="text" name="email" id="email" placeholder="Email">
      </div>
      <div>
        <label for="password-input">
          <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M240-80q-33 0-56.5-23.5T160-160v-400q0-33 23.5-56.5T240-640h40v-80q0-83 58.5-141.5T480-920q83 0 141.5 58.5T680-720v80h40q33 0 56.5 23.5T800-560v400q0 33-23.5 56.5T720-80H240Zm240-200q33 0 56.5-23.5T560-360q0-33-23.5-56.5T480-440q-33 0-56.5 23.5T400-360q0 33 23.5 56.5T480-280ZM360-640h240v-80q0-50-35-85t-85-35q-50 0-85 35t-35 85v80Z"/></svg>
        </label>
        <input type="password" name="password" id="password-input" placeholder="Password">
        <i id="pass-toggle-btn" class="fa-solid fa-eye"></i>
      </div>
      <button type="submit" name="signin">Login</button>
    </form>
    <p>New here? <a href="register.php">Create an Account</a></p>
  </div>
</body>
</html>
<?php
if (isset($_SESSION['errors'])) {
  unset($_SESSION['errors']);
}
?>