<?php include '../languages/decide.php'; ?>
<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <title><?php echo $language[$_SESSION['jazyk']]['int_head']; ?></title>
    <link rel="stylesheet" href="../css_files/styles.css" />
    <link rel="stylesheet" href="../css_files/rozhranie_styles.css" />
</head>

<body>
    <div class="container">
        <div class="content">

            <?php include '../includes/navbar.php'; ?>

            <div class="medzera"></div>

            <header>
                <div class="nadpis">
                    <h1><?php echo $language[$_SESSION['jazyk']]['int_header']; ?></h1>
                </div>
            </header>

            <section>
                <h2 class="kapitola"><?php echo $language[$_SESSION['jazyk']]['int_kap1']; ?></h2>
                <div class="sekcia flex">
                    <div class="text">
                        <p class="popis"><?php echo $language[$_SESSION['jazyk']]['int_desc1']; ?></p>
                    </div>
                    <div class="video">
                        <video controls>
                            <source src="../Videos/rozhranie_video.mp4" type="video/mp4">
                            <?php echo $language[$_SESSION['jazyk']]['more_war']; ?>
                        </video>
                    </div>
                </div>
            </section>

            <section>
                <h2 class="kapitola"><?php echo $language[$_SESSION['jazyk']]['int_kap2']; ?></h2>
                <div class="rozhranie flex2">
                    <?php include '../includes/image_generator.php'; ?>
                </div>
            </section>
        </div>
        <?php include '../includes/footer.php'; ?>
    </div>
</body>

</html>