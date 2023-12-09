<?php



require "vendor/autoload.php";






use App\Controller\HomeController;
$rig = new HomeController();
$rig->index('sajjad bafandeh');


$e = new \GuzzleHttp\Client();
$data = $e->request("GET" , "https://roocket.ir/series/learn-composer/episode/18");
echo $data->getBody();