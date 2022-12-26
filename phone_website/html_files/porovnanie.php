<?php include '../languages/decide.php'; ?>
<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <title><?php echo $language[$_SESSION['jazyk']]['nav_comp']; ?></title>
    <link rel="stylesheet" href="../css_files/styles.css" />
    <link rel="stylesheet" href="../css_files/porovnanie_styles.css" />
</head>

<body>
    <div class="container">
        <div class="content">

            <?php include '../includes/navbar.php'; ?>

            <div class="medzera"></div>

            <header>
                <div class="nadpis">
                    <h1><?php echo $language[$_SESSION['jazyk']]['comp_header']; ?></h1>
                </div>
                <p class="popis"><?php echo $language[$_SESSION['jazyk']]['comp_desc']; ?></p>
            </header>
            <section>

                <div class="sekcia">
                    <div class="flex">
                        <div class="gify">
                            <h2><?php echo $language[$_SESSION['jazyk']]['comp_name1']; ?></h2>
                            <img src="../images/porovnanie/REDMI_9.gif" alt="">
                        </div>
                        <div class="gify edit">
                            <h2><?php echo $language[$_SESSION['jazyk']]['comp_name2']; ?></h2>
                            <img src="../images/porovnanie/REDMI_8.gif" alt="">
                        </div>
                    </div>
                    <div class="flex">
                        <div class="zaznam">
                            <p><?php echo $language[$_SESSION['jazyk']]['comp_size1']; ?></p>
                        </div>
                        <div class="zaznam okraj">
                            <h2><?php echo $language[$_SESSION['jazyk']]['comp_h1']; ?></h2>
                            <img src="../images/sipka.svg" alt="" class="doprava">
                        </div>
                        <div class="zaznam">
                            <p><?php echo $language[$_SESSION['jazyk']]['comp_size2']; ?></p>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="zaznam">
                            <p><?php echo $language[$_SESSION['jazyk']]['comp_photo']; ?></p>
                        </div>
                        <div class="zaznam okraj">
                            <h2><?php echo $language[$_SESSION['jazyk']]['comp_h2']; ?></h2>
                            <img src="../images/sipka.svg" alt="" class="kruh">
                        </div>
                        <div class="zaznam">
                            <p><?php echo $language[$_SESSION['jazyk']]['comp_photo']; ?></p>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="zaznam">
                            <p><?php echo $language[$_SESSION['jazyk']]['comp_disp1']; ?></p>
                        </div>
                        <div class="zaznam okraj">
                            <h2><?php echo $language[$_SESSION['jazyk']]['comp_h3']; ?></h2>
                            <img src="../images/sipka.svg" alt="" class="dolava">
                        </div>
                        <div class="zaznam">
                            <p><?php echo $language[$_SESSION['jazyk']]['comp_disp2']; ?></p>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="zaznam">
                            <p><?php echo $language[$_SESSION['jazyk']]['comp_bat1']; ?></p>
                        </div>
                        <div class="zaznam okraj">
                            <h2><?php echo $language[$_SESSION['jazyk']]['comp_h4']; ?></h2>
                            <img src="../images/sipka.svg" alt="" class="dolava">
                        </div>
                        <div class="zaznam">
                            <p><?php echo $language[$_SESSION['jazyk']]['comp_bat2']; ?></p>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="zaznam">
                            <p><?php echo $language[$_SESSION['jazyk']]['comp_proc']; ?></p>
                        </div>
                        <div class="zaznam okraj">
                            <h2><?php echo $language[$_SESSION['jazyk']]['comp_h5']; ?></h2>
                            <img src="../images/sipka.svg" alt="" class="kruh">
                        </div>
                        <div class="zaznam">
                            <p><?php echo $language[$_SESSION['jazyk']]['comp_proc']; ?></p>
                        </div>
                    </div>
                </div>

            </section>
        </div>
        <?php include '../includes/footer.php'; ?>
    </div>
</body>

</html>