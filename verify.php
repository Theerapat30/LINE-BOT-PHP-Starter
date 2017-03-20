<?php
$access_token = 'Bra2+2U13hEbgOlU6lOa1+z1ZIThZzJ0Fuyv9/IzcE0EEyfHMK1CrBfxbNOIBVXn0hJkuZtFRAEChRtgePSW4PzOL7Gg3i3CHlqRbYPLALxTod7j7CWssmbDWFTeq3BS7Ar3sAi38rO2sqMZN4fPjgdB04t89/1O/w1cDnyilFU=';

$url = 'httpS://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
