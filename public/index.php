<?php

if (preg_match('/\.(?:png|jpg|jpeg|gif|svg|js|css)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is. püst kriips on alt gr ja greather than lesster than klahv
}

function dump(...$vars){
    echo '<pre>';
    var_dump(...$vars);
    echo '</pre>';
}

// dump($_SERVER);


spl_autoload_register(function($class){
    $class = substr($class, 4);
    //esimesed 4 tähte peab kaotama selle pärast et App\ on 4 tähemärki, muidu otsib App folderit
    dump($class);
    require_once "src/$class.php";
});
// spl autoloadiga automaatselt töötavad muud klassid ka src folderist

// require 'src/Router.php';
// require_once 'src/Router.php';
// include oleks edasi läinud isegi siis kui routerit ei leia, require_once hoiab erroreid vähemaks


// $router = new Router();
// $db = new DB();

// use App\Controllers\PublicController;
use App\Controllers\PublicController as PC;

$router = new App\Router();
$db = new App\DB();
// $controller = new App\Controllers\PublicController();
// $controller = new PublicController();
$controller = new PC();

dump($router, $db, $controller);

// switch($_SERVER['REQUEST_URI']){
//     case '/':
//         $posts = [
//             ['title'=> 'Some titties 1', 'body' => 'Some boy 1'],
//             ['title'=> 'Some titties 2', 'body' => 'Some boy 2'],
//             ['title'=> 'Some titties 3', 'body' => 'Some boy 3'],
//             ['title'=> 'Some titties 4', 'body' => 'Some boy 4'],
//         ];
//         include 'views/index.php';
//         break;
//     case '/us':
//         $posts = [
//             ['title'=> 'Some titties 1', 'body' => 'Some boy 1'],
//             ['title'=> 'Some titties 2', 'body' => 'Some boy 2'],
//             ['title'=> 'Some titties 3', 'body' => 'Some boy 3'],
//             ['title'=> 'Some titties 4', 'body' => 'Some boy 4'],
//         ];
//         include 'views/us.php';
//         break;
//     case '/tech':
//         $posts = [
//             ['title'=> 'Some titties 1', 'body' => 'Some boy 1'],
//             ['title'=> 'Some titties 2', 'body' => 'Some boy 2'],
//             ['title'=> 'Some titties 3', 'body' => 'Some boy 3'],
//             ['title'=> 'Some titties 4', 'body' => 'Some boy 4'],
//         ];
//         include 'views/index.php';
//         break;
//     default:
//         echo 'ERROR 404';
// };


?>