<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Google FAQ</title>

    <?php
      require_once 'functions.php';
     ?>
  </head>

  <body>
    <main>
      <div class="container">
        <?php
          printFaqNum($faq);
          printFaq($faq);
         ?>
      </div>
    </main>

  </body>
</html>
