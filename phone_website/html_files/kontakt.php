<?php include '../languages/decide.php'; ?>
<!DOCTYPE html>
<html lang="sk">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width" />
  <title><?php echo $language[$_SESSION['jazyk']]['nav_cont']; ?></title>
  <link rel="stylesheet" href="../css_files/styles.css" />
  <link rel="stylesheet" href="../css_files/kontakt_styles.css" />
</head>

<body>
  <div class="container">
    <div class="content">

      <?php include '../includes/navbar.php'; ?>

      <div class="medzera"></div>

      <header>
        <div class="nadpis">
          <h1><?php echo $language[$_SESSION['jazyk']]['nav_cont']; ?></h1>
        </div>
      </header>

      <section>
        <h2 class="kapitola"><?php echo $language[$_SESSION['jazyk']]['cont_kap1']; ?></h2>
        <div class="sekcia flex">
          <div class="paragraf">
            <p><?php echo $language[$_SESSION['jazyk']]['cont_desc']; ?></p>
          </div>
          <div class="odkazy">
            <a href="https://www.mi.com/global/redmi-note-9" target="_blank" rel="noopener noreferrer"><?php echo $language[$_SESSION['jazyk']]['cont_off']; ?></a>
            <a href="https://xiaomi-store.sk/sk/content/23-vratenie-tovaru-reklamacie-a-servis" target="_blank" rel="noopener noreferrer"><?php echo $language[$_SESSION['jazyk']]['cont_sk']; ?></a>
            <a href="https://www.mi.com/global/service/warranty/" target="_blank" rel="noopener noreferrer"><?php echo $language[$_SESSION['jazyk']]['cont_global']; ?></a>
          </div>
        </div>
      </section>

      <section>

        <h2 class="kapitola"><?php echo $language[$_SESSION['jazyk']]['cont_kap2']; ?></h2>
        <div class="sekcia">
          <form action="kontakt.php" method="POST">
            <div class="stred">
              <div class="meno">
                <label for="meno"><?php echo $language[$_SESSION['jazyk']]['cont_name']; ?></label>
                <input type="text" name="meno" id="meno">
              </div>
              <div class="komentar">
                <textarea name="komentar" id="komentar" cols="60" rows="12"></textarea>
              </div>
              <input type="submit" name="odoslat" value="<?php echo $language[$_SESSION['jazyk']]['cont_but']; ?>" id="odoslat">
            </div>
          </form>
          <?php include '../includes/comments.php' ?>
        </div>
      </section>
    </div>
    <?php include '../includes/footer.php'; ?>
  </div>
</body>

</html>