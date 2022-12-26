<?php include '../languages/decide.php'; ?>
<!DOCTYPE html>
<html lang="sk">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width" />
  <title><?php echo $language[$_SESSION['jazyk']]['index_title']; ?></title>
  <link rel="stylesheet" href="../css_files/styles.css" />
</head>

<body>
  <div class="container">
    <div class="content">

      <?php include '../includes/navbar.php'; ?>

      <div class="medzera"></div>

      <section>
        <div class="uvod">
          <h1><?php echo $language[$_SESSION['jazyk']]['title']; ?></h1>
          <p><?php echo $language[$_SESSION['jazyk']]['index_desc']; ?></p>
          <img class="main" src="../images/hlavna_stranka/banner.png" alt="">
        </div>
      </section>

      <section class="moznosti">
        <div>
          <a href="../html_files/techn-param.php"><img src="../images/hlavna_stranka/technicke.jpg" alt="">
            <h2><?php echo $language[$_SESSION['jazyk']]['tech_head']; ?></h2>
          </a>
        </div>
        <div>
          <a href="./pouz-rozhranie.php"><img src="../images/hlavna_stranka/gui.jpg" alt="">
            <h2><?php echo $language[$_SESSION['jazyk']]['int_head']; ?></h2>
          </a>
        </div>
        <div>
          <a href="./vzhlad.php"><img src="../images/hlavna_stranka/vzhlad.jpg" alt="">
            <h2><?php echo $language[$_SESSION['jazyk']]['des_head']; ?></h2>
          </a>
        </div>
        <div>
          <a href="./dalse_inf.php"><img src="../images/hlavna_stranka/dalsie_inf.jpg" alt="">
            <h2><?php echo $language[$_SESSION['jazyk']]['more_head']; ?></h2>
          </a>
        </div>
      </section>
    </div>
    <?php include '../includes/footer.php'; ?>
  </div>
</body>

</html>