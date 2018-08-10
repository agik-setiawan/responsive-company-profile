<?php
$server=$_SERVER;
$host=$server['HTTP_HOST'];
$app_name='company-profile';
$base_url=$host.'/'.$app_name;
function route($url){
    echo $base_url.'/'.$url;
}
?>