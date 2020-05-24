<?php

// fungsi http request
function http_request($url)
{

    // persiapan CURL
    $ch = curl_init();

    // set URL
    curl_setopt($ch, CURLOPT_URL, $url);

    // aktifkan fungsi transfer nilai string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    // setting localhost
    // mematikan ssl verify(https)
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

    // tampung hasil ke dalam variabel $output
    $output = curl_exec($ch);

    // tutup curl
    curl_close($ch);

    // mengembalikan hasil CURL retun
    return $output;
}

// panggil fungsi http_request(url / link API)
$data = http_request("https://api.kawalcorona.com/indonesia/provinsi/");

// ubah format json
$data =     json_decode($data, TRUE);

// echo "<pre>";
// print_r($data);
// echo "</pre>";

$bali = $data[11]['attributes'];

// panggil data
// $Provinsi = $bali['Provinsi'];
print_r($bali_Posi = $bali['Kasus_Posi']);
$bali_Semb = $bali['Kasus_Semb'];
$bali_Meni = $bali['Kasus_Meni'];
