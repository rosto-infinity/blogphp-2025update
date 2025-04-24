<?php
require_once 'database/database.php';

// 1--On affiche le titre de la page admin

$pageTitle ='Page Admin'; 

// 2-Debut du tampon de la page de sortie
 
ob_start();

// 3-inclure le layout de la page Admin
require_once 'layouts/adminfghghhjfhf/admin_dashboardgfdgdqsfqqssqs_html.php';

//4-recuperation du contenu du tampon de la page Admin
$pageContent = ob_get_clean();

//5-Inclure le layout de la page de sortie
require_once 'layouts/layout_html.php';