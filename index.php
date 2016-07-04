<?php
/*include 'config/config.php';
include 'config/database.php';*/
include 'includes/models.php';
include 'includes/head.php';
$action = (empty($_GET['action'])) ? '' : $_GET['action'];
include 'view/menu.php';
switch ($action) {
    case 'contact':
        include 'view/contact.php';
        break;
    case 'snacks':
        include 'view/snacks.php';
      break;
    case 'frietvanpiet':
        include 'view/frietvanpet.php';
        break;
    case 'zelfgemaaktefriet':
        include 'view/zelfgemaaktefriet.php';
        break;
    case 'home':
        include 'view/home.php';
        break;
    case 'admin':
        include 'includes/admin.php';
        break;
    default:
        header('location:index.php?action=home');
        break;
}
include 'view/footer.php';
