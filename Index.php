<?php
include_once 'src/Router/Request.php';
include_once 'src/Router/Router.php';
include_once 'src/Connection.php';
include_once 'Mutator.php';
$con = Connection::connect();
session_start();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <?php include_once('View/Layout.php');?>

        <?php
            $router = new Router(new Request);
            $router->get($_SERVER['REQUEST_URI'],function($e) {
                Mutator::MutateGET($_SERVER['REQUEST_URI']);
            });

            $router->post($_SERVER['REQUEST_URI'],function($e) {
                Mutator::MutatePOST($_SERVER['REQUEST_URI']);
            });
        ?>
        
    </body>
</html>

<?php
// $router->get('/profile', function($request) {
//   return <<<HTML
//   <h1>Profile</h1>
// HTML;
// });
// $router->post('/data', function($request) {
//   return json_encode($request->getBody());
// });