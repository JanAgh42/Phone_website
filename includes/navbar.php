<nav class="flexing">
    <div class="left">
        <a href="./index.php" id="logo"><img src="../images/logo.svg" alt=""></a>
    </div>
    <input type="checkbox" id="otvorit" class="otvorit">
    <label for="otvorit" class="ikona"><img src="../images/hlavna_stranka/menu.svg" alt=""></label>
    <ul class="buttons">
        <li><a href="#"><?php echo $language[$_SESSION['jazyk']]['nav_imp']; ?></a>
            <ul class="dropdown">
                <li><a href="./techn-param.php"><?php echo $language[$_SESSION['jazyk']]['tech_head']; ?></a></li>
                <li><a href="./pouz-rozhranie.php"><?php echo $language[$_SESSION['jazyk']]['int_head']; ?></a></li>
                <li><a href="./vzhlad.php"><?php echo $language[$_SESSION['jazyk']]['des_head']; ?></a></li>
                <li><a href="./dalse_inf.php"><?php echo $language[$_SESSION['jazyk']]['more_head']; ?></a></li>
            </ul>
        </li>
        <li><a href="./porovnanie.php"><?php echo $language[$_SESSION['jazyk']]['nav_comp']; ?></a></li>
        <li><a href="./dostupnost.php"><?php echo $language[$_SESSION['jazyk']]['nav_av']; ?></a></li>
        <li><a href="./kontakt.php"><?php echo $language[$_SESSION['jazyk']]['nav_cont']; ?></a></li>
    </ul>
    <div class="jazyky">
        <a href="?jazyk=sk"><img src="../images/hlavna_stranka/skflag.png" alt=""></a>
        <a href="?jazyk=en"><img src="../images/hlavna_stranka/ukflag.jpg" alt=""></a>
    </div>
</nav>