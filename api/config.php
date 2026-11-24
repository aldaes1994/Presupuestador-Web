<?php
function entorno($claves, $porDefecto = "") {
    foreach ((array)$claves as $nombre) {
        $valor = getenv($nombre);
        if ($valor !== false && $valor !== "") {
            return $valor;
        }
        if (isset($_ENV[$nombre]) && $_ENV[$nombre] !== "") {
            return $_ENV[$nombre];
        }
    }
    return $porDefecto;
}

define("DB_HOST", entorno(["MYSQLHOST", "DB_HOST"], "switchyard.proxy.rlwy.net"));
define("DB_PORT", entorno(["MYSQLPORT", "DB_PORT"], "50475"));
define("DB_NAME", entorno(["MYSQLDATABASE", "DB_NAME"], "presupuestador"));
define("DB_USER", entorno(["MYSQLUSER", "DB_USER"], "root"));
define("DB_PASS", entorno(["MYSQLPASSWORD", "DB_PASS"], "BTCChaLTgguRnkzwiqUFaxirrgTyHpQf"));
