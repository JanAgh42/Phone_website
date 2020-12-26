<?php include '../languages/decide.php'; ?>
<!DOCTYPE html>
<html lang="sk">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width" />
  <title><?php echo $language[$_SESSION['jazyk']]['tech_head']; ?></title>
  <link rel="stylesheet" href="../css_files/styles.css" />
  <link rel="stylesheet" href="../css_files/tech_styles.css" />
</head>

<body>
  <div class="container">
    <div class="content">

      <?php include '../includes/navbar.php'; ?>

      <div class="medzera"></div>

      <header>
        <div class="nadpis">
          <h1><?php echo $language[$_SESSION['jazyk']]['tech_header']; ?></h1>
        </div>
        <p class="popis"><?php echo $language[$_SESSION['jazyk']]['tech_desc']; ?></p>
      </header>
      <section>
        <h2 class="kapitola"><?php echo $language[$_SESSION['jazyk']]['tech_tab1']; ?></h2>
        <div class="tabulky flex">
          <div class="tab">
            <table>
              <tr>
                <td class="nazvy lavy_horny"><?php echo $language[$_SESSION['jazyk']]['tech_tab1_r1']; ?></td>
                <td class="obsah pravy_horny"><?php echo $language[$_SESSION['jazyk']]['tech_tab1_r1d']; ?></td>
              </tr>
              <tr>
                <td class="nazvy2"><?php echo $language[$_SESSION['jazyk']]['tech_tab1_r2']; ?></td>
                <td class="obsah"><?php echo $language[$_SESSION['jazyk']]['tech_tab1_r2d']; ?></td>
              </tr>
              <tr>
                <td class="nazvy"><?php echo $language[$_SESSION['jazyk']]['tech_tab1_r3']; ?></td>
                <td class="obsah"><?php echo $language[$_SESSION['jazyk']]['tech_tab1_r3d']; ?></td>
              </tr>
              <tr>
                <td class="nazvy2 lavy_dolny"><?php echo $language[$_SESSION['jazyk']]['tech_tab1_r4']; ?></td>
                <td class="obsah pravy_dolny"><?php echo $language[$_SESSION['jazyk']]['tech_tab1_r4d']; ?></td>
              </tr>
            </table>
          </div>
          <div class="image">
            <img src="../images/technicke_parametre/rozmery.jpg" alt="">
          </div>
        </div>
      </section>
      <section>
        <h2 class="kapitola"><?php echo $language[$_SESSION['jazyk']]['tech_tab2']; ?></h2>
        <div class="tabulky flex">
          <div class="image">
            <img src="../images/technicke_parametre/displej.png" alt="">
          </div>
          <div class="tab">
            <table>
              <tr>
                <td class="nazvy lavy_horny"><?php echo $language[$_SESSION['jazyk']]['tech_tab2_r1']; ?></td>
                <td class="obsah pravy_horny"><?php echo $language[$_SESSION['jazyk']]['tech_tab2_r1d']; ?></td>
              </tr>
              <tr>
                <td class="nazvy2"><?php echo $language[$_SESSION['jazyk']]['tech_tab2_r2']; ?></td>
                <td class="obsah"><?php echo $language[$_SESSION['jazyk']]['tech_tab2_r2d']; ?></td>
              </tr>
              <tr>
                <td class="nazvy"><?php echo $language[$_SESSION['jazyk']]['tech_tab2_r3']; ?></td>
                <td class="obsah"><?php echo $language[$_SESSION['jazyk']]['tech_tab2_r3d']; ?></td>
              </tr>
              <tr>
                <td class="nazvy2 lavy_dolny"><?php echo $language[$_SESSION['jazyk']]['tech_tab2_r4']; ?></td>
                <td class="obsah pravy_dolny"><?php echo $language[$_SESSION['jazyk']]['tech_tab2_r4d']; ?></td>
              </tr>
            </table>
          </div>
        </div>
      </section>
      <section>
        <h2 class="kapitola"><?php echo $language[$_SESSION['jazyk']]['tech_tab3']; ?></h2>
        <div class="tabulky flex">
          <div class="tab">
            <table>
              <tr>
                <td class="nazvy lavy_horny"><?php echo $language[$_SESSION['jazyk']]['tech_tab3_r1']; ?></td>
                <td class="obsah pravy_horny"><?php echo $language[$_SESSION['jazyk']]['tech_tab3_r1d']; ?></td>
              </tr>
              <tr>
                <td class="nazvy2"><?php echo $language[$_SESSION['jazyk']]['tech_tab3_r2']; ?></td>
                <td class="obsah"><?php echo $language[$_SESSION['jazyk']]['tech_tab3_r2d']; ?></td>
              </tr>
              <tr>
                <td class="nazvy"><?php echo $language[$_SESSION['jazyk']]['tech_tab3_r35']; ?></td>
                <td class="obsah"><?php echo $language[$_SESSION['jazyk']]['tech_tab3_r35d']; ?></td>
              </tr>
              <tr>
                <td class="nazvy2"><?php echo $language[$_SESSION['jazyk']]['tech_tab3_r4']; ?></td>
                <td class="obsah"><?php echo $language[$_SESSION['jazyk']]['tech_tab3_r4d']; ?></td>
              </tr>
              <tr>
                <td class="nazvy lavy_dolny"><?php echo $language[$_SESSION['jazyk']]['tech_tab3_r35']; ?></td>
                <td class="obsah pravy_dolny"><?php echo $language[$_SESSION['jazyk']]['tech_tab3_r35d']; ?></td>
              </tr>
            </table>
          </div>
          <div class="image">
            <img src="../images/technicke_parametre/fotak.jpg" alt="">
          </div>
        </div>
      </section>
      <section>
        <h2 class="kapitola"><?php echo $language[$_SESSION['jazyk']]['tech_tab4']; ?></h2>
        <div class="tabulky flex">
          <div class="image">
            <img src="../images/technicke_parametre/porty.jpg" alt="">
          </div>
          <div class="tab">
            <table>
              <tr>
                <td class="nazvy lavy_horny"><?php echo $language[$_SESSION['jazyk']]['tech_tab4_r1']; ?></td>
                <td class="obsah pravy_horny"><?php echo $language[$_SESSION['jazyk']]['tech_tab4_r1d']; ?></td>
              </tr>
              <tr>
                <td class="nazvy2"><?php echo $language[$_SESSION['jazyk']]['tech_tab4_r2']; ?></td>
                <td class="obsah"><?php echo $language[$_SESSION['jazyk']]['tech_tab4_r234d']; ?></td>
              </tr>
              <tr>
                <td class="nazvy"><?php echo $language[$_SESSION['jazyk']]['tech_tab4_r3']; ?></td>
                <td class="obsah"><?php echo $language[$_SESSION['jazyk']]['tech_tab4_r234d']; ?></td>
              </tr>
              <tr>
                <td class="nazvy2"><?php echo $language[$_SESSION['jazyk']]['tech_tab4_r4']; ?></td>
                <td class="obsah"><?php echo $language[$_SESSION['jazyk']]['tech_tab4_r234d']; ?></td>
              </tr>
              <tr>
                <td class="nazvy lavy_dolny"><?php echo $language[$_SESSION['jazyk']]['tech_tab4_r5']; ?></td>
                <td class="obsah pravy_dolny"><?php echo $language[$_SESSION['jazyk']]['tech_tab4_r5d']; ?></td>
              </tr>
            </table>
          </div>
        </div>
      </section>
      <section>
        <h2 class="kapitola"><?php echo $language[$_SESSION['jazyk']]['tech_tab5']; ?></h2>
        <div class="tabulky flex">
          <div class="tab">
            <table>
              <tr>
                <td class="nazvy lavy_horny"><?php echo $language[$_SESSION['jazyk']]['tech_tab5_r1']; ?></td>
                <td class="obsah pravy_horny"><?php echo $language[$_SESSION['jazyk']]['tech_tab5_r1d']; ?></td>
              </tr>
              <tr>
                <td class="nazvy2"><?php echo $language[$_SESSION['jazyk']]['tech_tab5_r2']; ?>r</td>
                <td class="obsah"><?php echo $language[$_SESSION['jazyk']]['tech_tab5_r2d']; ?></td>
              </tr>
              <tr>
                <td class="nazvy"><?php echo $language[$_SESSION['jazyk']]['tech_tab5_r3']; ?></td>
                <td class="obsah"><?php echo $language[$_SESSION['jazyk']]['tech_tab5_r3d']; ?></td>
              </tr>
              <tr>
                <td class="nazvy2"><?php echo $language[$_SESSION['jazyk']]['tech_tab5_r4']; ?></td>
                <td class="obsah"><?php echo $language[$_SESSION['jazyk']]['tech_tab5_r4d']; ?></td>
              </tr>
              <tr>
                <td class="nazvy"><?php echo $language[$_SESSION['jazyk']]['tech_tab5_r5']; ?></td>
                <td class="obsah"><?php echo $language[$_SESSION['jazyk']]['tech_tab5_r5d']; ?></td>
              </tr>
              <tr>
                <td class="nazvy2"><?php echo $language[$_SESSION['jazyk']]['tech_tab5_r6']; ?></td>
                <td class="obsah"><?php echo $language[$_SESSION['jazyk']]['tech_tab5_r6d']; ?></td>
              </tr>
              <tr>
                <td class="nazvy lavy_dolny"><?php echo $language[$_SESSION['jazyk']]['tech_tab5_r7']; ?></td>
                <td class="obsah pravy_dolny"><?php echo $language[$_SESSION['jazyk']]['tech_tab5_r7d']; ?></td>
              </tr>
            </table>
          </div>
        </div>
      </section>
      <section>
        <h2 class="kapitola"><?php echo $language[$_SESSION['jazyk']]['tech_tab6']; ?></h2>
        <div class="tabulky flex">
          <div class="tab">
            <table>
              <tr>
                <td class="nazvy lavy_horny"><?php echo $language[$_SESSION['jazyk']]['tech_tab6_r1']; ?></td>
                <td class="obsah pravy_horny"><?php echo $language[$_SESSION['jazyk']]['tech_tab6_r1d']; ?></td>
              </tr>
              <tr>
                <td class="nazvy2"><?php echo $language[$_SESSION['jazyk']]['tech_tab6_r2']; ?></td>
                <td class="obsah"><?php echo $language[$_SESSION['jazyk']]['tech_tab6_r2d']; ?></td>
              </tr>
              <tr>
                <td class="nazvy"><?php echo $language[$_SESSION['jazyk']]['tech_tab6_r3']; ?></td>
                <td class="obsah"><?php echo $language[$_SESSION['jazyk']]['tech_tab6_r3d']; ?></td>
              </tr>
              <tr>
                <td class="nazvy2"><?php echo $language[$_SESSION['jazyk']]['tech_tab6_r4']; ?></td>
                <td class="obsah"><?php echo $language[$_SESSION['jazyk']]['tech_tab6_r4d']; ?></td>
              </tr>
              <tr>
                <td class="nazvy"><?php echo $language[$_SESSION['jazyk']]['tech_tab6_r5']; ?></td>
                <td class="obsah"><?php echo $language[$_SESSION['jazyk']]['tech_tab6_r5d']; ?></td>
              </tr>
              <tr>
                <td class="nazvy2 lavy_dolny"><?php echo $language[$_SESSION['jazyk']]['tech_tab6_r6']; ?></td>
                <td class="obsah pravy_dolny"><?php echo $language[$_SESSION['jazyk']]['tech_tab6_r6d']; ?></td>
              </tr>
            </table>
          </div>
        </div>
      </section>

    </div>
    <?php include '../includes/footer.php'; ?>
  </div>
</body>

</html>