<?php
     $url = 'http://pong-server:8081';
     $response = file_get_contents($url);
     echo "ping - response: ".$response;
?>