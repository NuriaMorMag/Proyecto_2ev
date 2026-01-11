<?php
// index.php → controller 

require_once "app/dat/DataAccess.php";
require_once "app/dat/Gallery.php";

session_start();

$message = "";

/* SESSION TIME CONTROL (10 min) 
Antes que nada: si caduca se corta todo
Comprueba si el usuario estaba logueado antes ($_SESSION['timeout'] se define en el proceso login)
Mira cuánto tiempo ha pasado desde la última acción
Si han pasado 10 minutos: se cierra la sesión y se vuelve al login
*/
if (isset($_SESSION['timeout'])) {
    if (time() - $_SESSION['timeout'] > 600) {
        session_destroy();
        header("Location: index.php?timeout=1");
        exit;
    }
}

/* LOGOUT */
if (isset($_REQUEST['order']) && $_REQUEST['order'] == "Logout") { 
    session_destroy();
    header("Location: index.php");
    exit;
}

/* LOGGED-IN USER */
if (isset($_SESSION['user'])) {
    //Cada vez que se interactúa con la página se actualiza el tiempo
    $_SESSION['timeout'] = time();

    // Si no se pide ninguna vista, se va a home
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';

    include "app/layouts/header.php"; 

    switch ($page) {
        case 'gallery':
            $bd = DataAccess::getModel(); 
            $images = $bd->getAllImages();
            include "app/layouts/gallery.php";
            break;
        case 'contact':
            include "app/layouts/contact.php";
            break;
        case 'about':
            include "app/layouts/about.php";
            break;
        case 'blog':
            include "app/layouts/blog.php";
            break;
        default:
            include "app/layouts/home.php";
            break;
    }

    include "app/layouts/footer.php"; 

    exit;
}

/* LOGIN PROCESS */
if (isset($_REQUEST['order']) && $_REQUEST['order'] == "Log in") {
    $login = $_REQUEST['login'];
    $password = $_REQUEST['password'];

    $bd = DataAccess::getModel(); 
    $user = $bd->getUser($login);

    if ($user === false) {
        $message = "Incorrect user or password";
    } else {
        if (password_verify($password, $user->password)) {
            $_SESSION['user'] = $user->login;
            $_SESSION['name'] = $user->name;
            $_SESSION['timeout'] = time();
            header("Location: index.php"); //Fuerza a volver a empezar ya con sesión activa para que: isset($_SESSION['user'])
            exit;
        } else {
            $message = "Incorrect user or password";
        }
    }
}


/* LOGIN FORM
Si el usuario no está autenticado se va aquí
*/
include "app/layouts/header.php"; 
include "app/layouts/login.php"; 
include "app/layouts/footer.php";

?>
