 <?php
    $filename = "comment.txt";
    $pocet = 0;

    if (!file_exists($filename)) {
        touch($filename);
    }
    if (isset($_POST['meno']) && isset($_POST['komentar']) && !empty($_POST['meno']) && !empty($_POST['komentar'])) {
        if ($komentare = fopen($filename, "a+")) {
            fwrite($komentare, str_replace('~', ' ', $_POST['meno']) . "~" . str_replace('~', ' ', $_POST['komentar']) . "~");
            fclose($komentare);
        }
    }
    if ($komentare = fopen($filename, "r")) {
        while (($obsah = fgetc($komentare)) !== FALSE) {
            if (($obsah == '~')) {
                $pocet++;
            }
        }
        fclose($komentare);

        if ($obsah = file_get_contents($filename)) {
            $koment = explode("~", $obsah);
            for ($i = 0; $i < $pocet; $i += 2) {
                echo "<div class=\"komentdesign\">";
                echo "<h2 class=\"komentmeno\">" . htmlspecialchars($koment[$i], ENT_QUOTES) . "</h2>";
                echo "<hr>";
                echo "<pre>";
                echo "<p class=\"komenttext\">" . htmlspecialchars($koment[$i + 1], ENT_QUOTES) . "</p>";
                echo "</pre>";
                echo "</div>";
            }
        }
    }
    ?>