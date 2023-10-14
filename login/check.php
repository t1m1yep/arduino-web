<?php
  $login = filter_var(trim($_POST['login']),
  FILTER_SANITIZE_STRING);
  $password = filter_var(trim($_POST['password']),
  FILTER_SANITIZE_STRING);
  if($login == "examplelogin" && $password == "examplepass") // yeah i should make it better prob
  {
    $logpass = login + password;
    $hash = hash('sha256', $logpass);
    setcookie('usercookie', $hash, time() + 3600 * 24, "/");
  }
  else if($login != "examplelogin" && $password != "examplepass$")
  {
      setcookie('usercookie', '', time() + 3600 * 24, "/");
  }
?>
<?php
  if($_COOKIE['usercookie'] == ''):
 ?>
 <h1>Wrong login or password.</h1>
 <a href="/login">Back to login page</a>
<?php endif;?>
 <?php
   if($_COOKIE['usercookie'] != ''):
  ?>
  <h1>
    <a href="/arduino">Move to Arduino Web Panel</a>
  </h1>
<?php endif;?>
