<?php

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="liste_d\'adresses.csv"');
$data = $db->getAllAddress();
// var_dump($data);
// exit();

$fp = fopen('php://output', 'w');
foreach ( $data as $line ) {
    $val = explode(",", $line);
    print_r($line);
    fputcsv($fp, $val);
}
fclose($fp);