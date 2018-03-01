<?php

include("service.php");
if(!defined('STDOUT')) define('STDOUT', fopen('php://stdout', 'w'));

set_exception_handler(function ($e) {
    $code = $e->getCode() ? : 400;
    header("Content-Type: application/json", NULL, $code);
    echo json_encode(["error" => $e->getMessage()]);
    exit;
});

// assume JSON, handle requests by verb and path
$verb = $_SERVER['REQUEST_METHOD'];
$url_pieces = explode('/', $_SERVER['PATH_INFO']);

if ($url_pieces[1] != 'employees') {
    throw new Exception('Unknown endpoint', 404);
}

$service = new Service ();
$data;
error_log(print_r($verb, TRUE));
switch ($verb) {
    case 'GET':
            $data = $service->getAll();
        break;
    default:
        throw new Exception('Method Not Supported', 405);
}

header("Content-Type: application/json");
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:GET, POST, OPTIONS, PUT, PATCH, DELETE');
header('Access-Control-Allow-Headers:X-Requested-With,content-type');
header('Access-Control-Allow-Credentials:true');
echo json_encode($data);
fclose(STDOUT);
?>