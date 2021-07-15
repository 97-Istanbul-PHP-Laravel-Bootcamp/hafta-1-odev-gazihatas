<?php
//Veri tabanı bağlantı işlemleri
try {
    $baglanti = new PDO('mysql:host=localhost; dbname=mahallendeniste; charset=utf8', 'root', '1234');
    #echo "bağlantı başarılı";
} catch (Exception $e) {

    echo $e->getMessage();
}









