<title>Arduino Web Panel</title>
<link rel="icon" href="icon.png">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="/login/css/style.css"/>

<body>
  <div class="container mt-4">
    <?php
      if($_COOKIE['usercookie'] == ''):
     ?>
     <h1>You cant enter this page.</h1>
     <a href="/login">Back to login</a>
     <?php exit(); ?>
    <?php endif;?>
  </div>

</body>
