<?php
//error_reporting(0);
global $global, $config;
if(!isset($global['systemRootPath'])){
    require_once '../videos/configuration.php';
}
require_once $global['systemRootPath'] . 'objects/video_ad.php';
require_once $global['systemRootPath'] . 'objects/functions.php';
header('Content-Type: application/json');
$videos = Video_ad::getAllVideos();
$total = Video_ad::getTotalVideos();

echo '{  "current": '.$_POST['current'].',"rowCount": '.$_POST['rowCount'].', "total": '.$total.', "rows":'. json_encode($videos).'}';
