<?php

if (preg_match('/\.(?:png|jpg|jpeg|gif|svg|js|css)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is. püst kriips on alt gr ja greather than lesster than klahv
}

spl_autoload_register(function($class){
    $class = substr($class, 4);
    //esimesed 4 tähte peab kaotama selle pärast et App\ on 4 tähemärki, muidu otsib App folderit
    require_once __DIR__ . "/../src/$class.php";
});

session_start();

require __DIR__ . '/../helpers.php';
// dd( __DIR__ . '/../helpers.php');
require __DIR__ . '/../routes.php';


$router = new App\Router($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
$match = $router->match();
if($match){
    if(is_callable ($match->action)) {
        call_user_func($match->action);
    } else if (is_array($match->action) && count($match->action) === 2) {
        $class = $match->action[0];
        $controller = new $class();
        $method = $match->action[1];
        $controller->$method();
    }
    
} else {
    echo '404';
}

?>