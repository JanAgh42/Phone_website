<?php include '../languages/decide.php'; ?>
<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <title><?php echo $language[$_SESSION['jazyk']]['more_title']; ?></title>
    <link rel="stylesheet" href="../css_files/styles.css" />
    <link rel="stylesheet" href="../css_files/dalsie_styles.css" />
</head>

<body>
    <div class="container">
        <div class="content">

            <?php include '../includes/navbar.php'; ?>

            <div class="medzera"></div>

            <header>
                <div class="nadpis">
                    <h1><?php echo $language[$_SESSION['jazyk']]['more_header']; ?></h1>
                </div>
            </header>

            <section>
                <h2 class="kapitola"><?php echo $language[$_SESSION['jazyk']]['more_kap1']; ?></h2>
                <div class="sekcia">
                    <p class="popis"><?php echo $language[$_SESSION['jazyk']]['more_desc1']; ?></p>
                    <div class="audio">
                        <div class="prve_audio flex">
                            <div class="zvonenia">
                                <audio src="../music/MiRemix.ogg" id="zvonenie1" preload="auto"></audio>
                                <a id="button1" onclick="rozhodni(document.getElementById('button1'), document.getElementById('zvonenie1'))"><?php echo $language[$_SESSION['jazyk']]['more_play']; ?></a>
                            </div>
                            <div class="zvonenia">
                                <audio src="../music/AcousticGuitar.ogg" id="zvonenie2" preload="auto"></audio>
                                <a id="button2" onclick="rozhodni(document.getElementById('button2'), document.getElementById('zvonenie2'))"><?php echo $language[$_SESSION['jazyk']]['more_play']; ?></a>
                            </div>
                            <div class="zvonenia">
                                <audio src="../music/Childhood.ogg" id="zvonenie3" preload="auto"></audio>
                                <a id="button3" onclick="rozhodni(document.getElementById('button3'), document.getElementById('zvonenie3'))"><?php echo $language[$_SESSION['jazyk']]['more_play']; ?></a>
                            </div>
                        </div>
                        <div class="druhe_audio flex">
                            <div class="zvonenia">
                                <audio src="../music/Cowboy.ogg" id="zvonenie4" preload="auto"></audio>
                                <a id="button4" onclick="rozhodni(document.getElementById('button4'), document.getElementById('zvonenie4'))"><?php echo $language[$_SESSION['jazyk']]['more_play']; ?></a>
                            </div>
                            <div class="zvonenia">
                                <audio src="../music/CrazyDream.ogg" id="zvonenie5" preload="auto"></audio>
                                <a id="button5" onclick="rozhodni(document.getElementById('button5'), document.getElementById('zvonenie5'))"><?php echo $language[$_SESSION['jazyk']]['more_play']; ?></a>
                            </div>
                            <div class="zvonenia">
                                <audio src="../music/Rasalas.ogg" id="zvonenie6" preload="auto"></audio>
                                <a id="button6" onclick="rozhodni(document.getElementById('button6'), document.getElementById('zvonenie6'))"><?php echo $language[$_SESSION['jazyk']]['more_play']; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <h2 class="kapitola"><?php echo $language[$_SESSION['jazyk']]['more_kap2']; ?></h2>
                <div class="sekcia flex uprava">
                    <div class="text">
                        <p class="popis videotext"><?php echo $language[$_SESSION['jazyk']]['more_desc2']; ?></p>
                    </div>
                    <div class="video">
                        <video controls>
                            <source src="../Videos/dalsie_inf_video.mp4" type="video/mp4">
                            <?php echo $language[$_SESSION['jazyk']]['more_war']; ?>
                        </video>
                    </div>
                </div>
            </section>

            <section>
                <h2 class="kapitola"><?php echo $language[$_SESSION['jazyk']]['more_kap3']; ?></h2>
                <div class="sekcia flex uprava">
                    <div class="photo">
                        <h3><?php echo $language[$_SESSION['jazyk']]['more_sun']; ?></h3>
                        <img class="ukazka" src="../images/dalsie_informacie/slnecno.jpg" alt="">
                    </div>
                    <div class="photo">
                        <h3><?php echo $language[$_SESSION['jazyk']]['more_sunset']; ?></h3>
                        <img class="ukazka" src="../images/dalsie_informacie/zasera.jpg" alt="">
                    </div>
                    <div class="photo">
                        <h3><?php echo $language[$_SESSION['jazyk']]['more_det']; ?></h3>
                        <img class="sirka" src="../images/dalsie_informacie/detaily.jpg" alt="">
                    </div>
                </div>
            </section>
        </div>
        <?php include '../includes/footer.php'; ?>
    </div>
    <script type="text/javascript" src="<?php echo $language[$_SESSION['jazyk']]['prehravac']; ?>"></script>
</body>

</html>