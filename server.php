<?php

    $paragrafo = $_GET['paragrafo'];
    echo $paragrafo."<br />";
    echo "Lunghezza paragrafo:".strlen($paragrafo)."<br /><br /><br /><br /><br />";

    echo "Badword:'sono'<br />".str_replace('sono', '***', $paragrafo)."<br />";
    echo "Lunghezza paragrafo:".strlen($paragrafo)

?>