<?php
    include "db_functions.php";
    //displ($_POST);
    //ONERİ EKLE KISMI 
    if(isset($_POST["oneriEkle"])){
        //displ($_POST);
        $kullanici_id = $_POST["kullanici_id"];
        $bolum_id = $_POST["bolum_id"];
        $baslik = $_POST["baslik"];
        $kategori_id = $_POST["kategori_id"];
        $mevcut_durum = $_POST["mevcut_durum"];
        $oneri = $_POST["oneri"];
        $ekle = "insert into user_recommendations
                (kullanici_id,bolum_id,baslik,kategori_id,mevcut_durum,oneri)
                values('$kullanici_id','$bolum_id','$baslik','$kategori_id','$mevcut_durum','$oneri')";   
                $sonuc = veriKaydet($ekle);

                    if($sonuc){
                        echo "öneri kaydedildi.";
                    }
                    else {
                        echo "öneri kaydedilemedi.";
                    }
    }
/*
$dbVeriCek = "insert into kullanicilar"; 
veriCek($dbVeriCek);*/

//GÜNCELLEME KISMI
    if(isset($_POST["oneriDuzelt"])){
        //displ($_POST); //veriler doğru bir şekilde geliyor mu kontrolü yapılıyor.
        $oneriId = $_POST["oneriId"];
        $kullanici_id = $_POST["kullanici_id"];
        $bolum_id = $_POST["bolum_id"];
        $baslik = $_POST["baslik"];
        $kategori_id = $_POST["kategori_id"];
        $mevcut_durum = $_POST["mevcut_durum"];
        $oneri = $_POST["oneri"];

        $ekle =$VeriTabaniBaglantisi->query("UPDATE user_recommendations SET 
                                                    kullanici_id ='$kullanici_id', 
                                                    bolum_id = '$bolum_id', 
                                                    baslik = '$baslik',
                                                    kategori_id=$kategori_id,
                                                    mevcut_durum='$mevcut_durum',
                                                    oneri='$oneri' WHERE id= $oneriId");

    if ($ekle->rowCount() > 0) {
        echo $ekle->rowCount() . " kayıt güncellendi.";
    }else{
        echo "Herhangi bir kayıt güncellenemedi.";
    }
    }
?>
