<?php
echo "hej";
/**
 * Inställningar för api:et
 * @return stdClass
 */
function settings(): stdClass {
    $retur = new stdClass();

    $retur->dsn = "mysql:host=localhost;dbname=tidsrapport";
    $retur->dbUser = "root";
    $retur->dbPassword= "";
    return $retur;
}

