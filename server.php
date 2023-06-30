<?php

    $paragrafo = $_GET['paragrafo'];
    echo $paragrafo."<br />";
    echo "Lunghezza paragrafo:".strlen($paragrafo)."<br /><br /><br /><br /><br />";

    echo str_replace('sono', '***', $paragrafo)."<br />";
    echo "Lunghezza paragrafo:".strlen($paragrafo)

?>