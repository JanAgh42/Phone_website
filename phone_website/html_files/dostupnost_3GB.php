<?php include '../languages/decide.php'; ?>
<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <title><?php echo $language[$_SESSION['jazyk']]['nav_av']; ?></title>
    <link rel="stylesheet" href="../css_files/styles.css" />
    <link rel="stylesheet" href="../css_files/dostupnost_styles.css" />
</head>

<body>
    <div class="container">
        <div class="content">

            <?php include '../includes/navbar.php'; ?>

            <div class="medzera"></div>

            <header>
                <div class="nadpis">
                    <h1><?php echo $language[$_SESSION['jazyk']]['nav_av']; ?></h1>
                </div>
            </header>

            <section>
                <h2 class="kapitola"><?php echo $language[$_SESSION['jazyk']]['av_kap1']; ?></h2>
                <p class="popis"><?php echo $language[$_SESSION['jazyk']]['av_desc']; ?></p>
                <div class="center flex">
                    <div class="tlacidlo">
                        <h3><?php echo $language[$_SESSION['jazyk']]['av2_curr']; ?></h3>
                    </div>
                    <div class="tlacidlo">
                        <a href="./dostupnost.php"><?php echo $language[$_SESSION['jazyk']]['av2_oth']; ?></a>
                    </div>
                </div>
            </section>

            <section>
                <div class="linky flex">
                    <div class="odkaz">
                        <a target="_blank" rel="noopener noreferrer" class="stred" href="https://www.hej.sk/mobilny-telefon-xiaomi-redmi-note-9-64-gb-27991-zeleny/"><?php echo $language[$_SESSION['jazyk']]['av_sh1']; ?></a>
                    </div>
                    <div class="odkaz">
                        <a target="_blank" rel="noopener noreferrer" class="stred" href="https://www.bonusko.sk/xiaomi-redmi-note-9-3gb-64gb-onyx-black-nfc/"><?php echo $language[$_SESSION['jazyk']]['av2_sh1']; ?></a>
                    </div>
                    <div class="odkaz">
                        <a target="_blank" rel="noopener noreferrer" class="stred" href="https://www.andreashop.sk/xiaomi-redmi-note-9-3gb64gb-midnight-grey-0?utm_source=utm_heureka"><?php echo $language[$_SESSION['jazyk']]['av2_sh2']; ?></a>
                    </div>
                </div>
                <div class="linky flex">
                    <div target="_blank" rel="noopener noreferrer" class="odkaz">
                        <a class="stred" href="https://xm.sk/xiaomi-redmi-note-9-bez-nfc-seda-3-64-gb"><?php echo $language[$_SESSION['jazyk']]['av2_sh3']; ?></a>
                    </div>
                    <div target="_blank" rel="noopener noreferrer" class="odkaz">
                        <a class="stred" href="https://lacnenotebooky.eu/d/xiaomi-redmi-note-9-3gb64gb-midnight-grey/239444"><?php echo $language[$_SESSION['jazyk']]['av2_sh4']; ?></a>
                    </div>
                    <div target="_blank" rel="noopener noreferrer" class="odkaz">
                        <a class="stred" href="https://bestcena.sk/mobilne-telefony/xiaomi-redmi-note-9-dual-sim-3gb-ram-64gb-black"><?php echo $language[$_SESSION['jazyk']]['av_sh6']; ?></a>
                    </div>
                </div>
            </section>

            <section>

                <h2 class="kapitola"><?php echo $language[$_SESSION['jazyk']]['av_kap2']; ?></h2>
                <div class="sekcia flex uprava">
                    <div class="odkaz">
                        <img src="../images/dostupnost/note9_3.png" alt="">
                    </div>
                </div>

            </section>
        </div>
        <?php include '../includes/footer.php'; ?>
    </div>
</body>

</html>