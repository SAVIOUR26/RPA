<?php
define('SITE_NAME', 'Restoration Prayer Altar Ministries Ltd');
define('SITE_SHORT', 'RPA Ministries');
define('SITE_TAGLINE', 'Prayer Without Ceasing, Faith Without Fainting');
define('SITE_VERSE', 'Luke 18:1');
define('SITE_EMAIL', 'info@restorationprayeraltar.online');
define('SITE_PHONE1', '+256 782 784 452');
define('SITE_PHONE2', '+256 704 690 785');
define('SITE_ADDRESS', 'Bukuwa Ward, Nabumali Town Council, Mbale, Uganda');
define('SITE_POBOX', 'P.O. Box 312608, Mbale, Uganda');
define('SITE_URL', 'https://www.restorationprayeraltar.online');

function active_page($page) {
    $uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    if ($page === 'index' && $uri === '') return 'active';
    return ($uri === $page) ? 'active' : '';
}
