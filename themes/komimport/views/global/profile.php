<?php

function myoffers($sid, $type = 'myoffers', $action = 'showmyoffers')
{
    echo "http://partist.ru/connector.php?type=$type&action=$action&SID=$sid";
    $data = PartistConnector::file_contents("http://partist.ru/connector.php?type=$type&action=$action&sid=$sid");
    return $data;
}

$myoffers = myoffers($data['SID']);
echo '<pre>';
print_r($data);
print_r($myoffers);
echo '</pre>';
