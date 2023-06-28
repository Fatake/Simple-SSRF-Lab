<?php
    if (isset($_GET['url'])) {
        $url = $_GET['url'];
        echo "\n[i] Listando la web: ".$url;
        include($url);
    }else {
        echo "[!] Por aquí no es carnal";
    }
?>