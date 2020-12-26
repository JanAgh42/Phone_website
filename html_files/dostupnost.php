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
                        <h3><?php echo $language[$_SESSION['jazyk']]['av_curr']; ?></h3>
                    </div>
                    <div class="tlacidlo">
                        <a href="./dostupnost_3GB.php"><?php echo $language[$_SESSION['jazyk']]['av_oth']; ?></a>
                    </div>
                </div>
            </section>

            <section>
                <div class="linky flex">
                    <div class="odkaz">
                        <a target="_blank" rel="noopener noreferrer" class="stred" href="https://www.hej.sk/mobilny-telefon-xiaomi-redmi-note-9-128-gb-29939-cierny-sivy/"><?php echo $language[$_SESSION['jazyk']]['av_sh1']; ?></a>
                    </div>
                    <div class="odkaz">
                        <a target="_blank" rel="noopener noreferrer" class="stred" href="https://www.mall.sk/mobilne-telefony/xiaomi-redmi-note-9-4gb-128gb-global-version-midnight-grey?utm_source=heureka.sk&utm_medium=cse&utm_campaign=EF&utm_content=mobilne-telefony&utm_term=2508013"><?php echo $language[$_SESSION['jazyk']]['av_sh2']; ?></Mall></a>
                    </div>
                    <div class="odkaz">
                        <a target="_blank" rel="noopener noreferrer" class="stred" href="https://www.mobilmarket.sk/index.php?route=product/product&product_id=171797"><?php echo $language[$_SESSION['jazyk']]['av_sh3']; ?></a>
                    </div>
                </div>
                <div class="linky flex">
                    <div class="odkaz">
                        <a target="_blank" rel="noopener noreferrer" class="stred" href="https://www.marzo.sk/xiaomi-redmi-note-9-4gb-128gb-grey"><?php echo $language[$_SESSION['jazyk']]['av_sh4']; ?></a>
                    </div>
                    <div class="odkaz">
                        <a target="_blank" rel="noopener noreferrer" class="stred" href="https://eshop.mobilpc.sk/obchod/xiaomi-redmi-note-9-4gb-128gb-s-nfc-dual-sim-white/p-4783220.xhtml"><?php echo $language[$_SESSION['jazyk']]['av_sh5']; ?></a>
                    </div>
                    <div class="odkaz">
                        <a target="_blank" rel="noopener noreferrer" class="stred" href="https://bestcena.sk/mobilne-telefony/xiaomi-redmi-note-9-nfc-dual-sim-4gb-ram-128gb-black-global"><?php echo $language[$_SESSION['jazyk']]['av_sh6']; ?></a>
                    </div>
                </div>
            </section>

            <section>

                <h2 class="kapitola"><?php echo $language[$_SESSION['jazyk']]['av_kap2']; ?></h2>
                <div class="sekcia flex uprava">
                    <div class="odkaz">
                        <img src="../images/dostupnost/note9_4.png" alt="">
                    </div>
                </div>

            </section>
        </div>
        <?php include '../includes/footer.php'; ?>
    </div>
</body>

</html>