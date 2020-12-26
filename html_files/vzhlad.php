<?php include '../languages/decide.php'; ?>
<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <title><?php echo $language[$_SESSION['jazyk']]['des_title']; ?></title>
    <link rel="stylesheet" href="../css_files/styles.css" />
    <link rel="stylesheet" href="../css_files/vzhlad_styles.css" />
</head>

<body>
    <div class="container">
        <div class="content">

            <?php include '../includes/navbar.php'; ?>

            <div class="medzera"></div>

            <header>
                <div class="nadpis">
                    <h1><?php echo $language[$_SESSION['jazyk']]['des_header']; ?></h1>
                </div>
            </header>

            <section>

                <h2 class="kapitola"><?php echo $language[$_SESSION['jazyk']]['des_kap1']; ?></h2>
                <div class="sekcia flex uprava">
                    <div class="galeria1">
                        <input onclick="rozhodni('sisky')" type="radio" name="obrazky" id="obr1">
                        <input onclick="rozhodni('zdola')" type="radio" name="obrazky" id="obr2">
                        <input onclick="rozhodni('zhora')" type="radio" name="obrazky" id="obr3">
                        <input onclick="rozhodni('zlava')" type="radio" name="obrazky" id="obr4">
                    </div>
                    <div class="galeria2">
                        <input onclick="rozhodni('zprava')" type="radio" name="obrazky" id="obr5">
                        <input onclick="rozhodni('zozadu')" type="radio" name="obrazky" id="obr6">
                        <input onclick="rozhodni('zpredu')" type="radio" name="obrazky" id="obr7">
                        <input onclick="rozhodni('rozmery')" type="radio" name="obrazky" id="obr8">
                    </div>
                    <div class="obrazok">
                        <div id="zobraz"></div>
                    </div>
                </div>

            </section>
            <section>

                <h2 class="kapitola"><?php echo $language[$_SESSION['jazyk']]['des_kap2']; ?></h2>
                <div class="sekcia flex uprava">
                    <div class="text">
                        <p><?php echo $language[$_SESSION['jazyk']]['des_desc']; ?></p>
                    </div>
                    <div class="fotky flex">
                        <div class="vedla">
                            <img src="../images/vzhlad_prislusenstvo/krabica.png" alt="">
                        </div>
                        <div class="podseba">
                            <img src="../images/vzhlad_prislusenstvo/prislusenstvo1.png" alt="">
                            <img src="../images/vzhlad_prislusenstvo/prislusenstvo2.png" alt="">
                        </div>
                    </div>
                </div>

            </section>
        </div>
        <?php include '../includes/footer.php'; ?>
    </div>
    <script src="../js_files/galeria.js"></script>
</body>

</html>