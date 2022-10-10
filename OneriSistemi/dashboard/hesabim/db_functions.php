<?php 

    function displ($value){
        echo "<pre>".print_r($value, true)."</pre>";
        die();
    }
    try{
        $VeriTabaniBaglantisi= new PDO("mysql:host=localhost;dbname=oneri;charset=UTF8","root","");
    }
    catch(PDOException $Hata){
    // echo "Baglanti Hatasi <br/>".$Hata -> getMessage(); //Bu alani kapattik cunku site hata verdiginde kullanicilar hatayi goremesin.
    die();
    }
/*
function veriKaydet($sorgu,$islem){
    global $VeriTabaniBaglantisi; 
    if($islem == "oneriKaydet"){
        if($VeriTabaniBaglantisi -> query($sorgu)){
            echo "kayıt yapıldı.";
        }else{
            echo "kayıt yapılamadı.";
        }
    }
    elseif($islem == "yorumKaydet"){
        if($VeriTabaniBaglantisi -> query($sorgu)){
            echo "yorum yapıldı.";
        }else{
            echo "yorum kaydedilemedi.";
        }
    }  
}
*/
    function veriKaydet($sorgu){
        global $VeriTabaniBaglantisi;
        $sonuc= $VeriTabaniBaglantisi -> query($sorgu);
        return $sonuc;       
    }
    
    function tumOneriGetir(){
        global $VeriTabaniBaglantisi;
        $cek =$VeriTabaniBaglantisi ->query("SELECT * FROM user_recommendations", PDO::FETCH_ASSOC);
        return $cek;
    }
    /*function veriCek($cek){
        global $VeriTabaniBaglantisi;
        $cek =$VeriTabaniBaglantisi ->query("SELECT id,pkno,adi_soyadi,bolum,email FROM kullanicilar", PDO::FETCH_ASSOC);

        if($cek != false && !empty($cek))
        {
                foreach($cek as $kullanici){
                    $id         = $kullanici["id"];
                    $pkno       = $kullanici["pkno"];
                    $adi_soyadi = $kullanici["adi_soyadi"];
                    $bolum      = $kullanici["bolum"];
                    $email      = $kullanici["email"];             
                    echo "ID: ".$id."PKNO: ".$pkno."ADI-SOYADI: ".$adi_soyadi."DEPARTMAN: ".$bolum."EMAİL: ".$email;
                    echo "<br>";   
            }
        }
    }*/
/*
    function girisIslemleri(){
        global $VeriTabaniBaglantisi;
        $giris =$VeriTabaniBaglantisi ->query("SELECT * FROM kullanicilar", PDO::FETCH_ASSOC);
        return $giris;
    }*/
?>