<?php

if (preg_match('/\.(?:png|jpg|jpeg|gif|svg|js|css)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is. püst kriips on alt gr ja greather than lesster than klahv
}

function dump(...$vars){
    echo '<pre>';
    var_dump(...$vars);
    echo '</pre>';
}

spl_autoload_register(function($class){
    $class = substr($class, 4);
    //esimesed 4 tähte peab kaotama selle pärast et App\ on 4 tähemärki, muidu otsib App folderit
    require_once "src/$class.php";
});

require 'routes.php';

$router = new App\Router($_SERVER['REQUEST_URI']);
$match = $router->match();
if($match){
    if(is_callable ($match['action'])) {
        call_user_func($match['action']);
    } else if (is_array($match['action']) && count($match['action']) === 2) {
        $class = $match['action'][0];
        $controller = new $class();
        $method = $match['action'][1];
        $controller->$method();
    }
    
} else {
    echo '404';
}

?>