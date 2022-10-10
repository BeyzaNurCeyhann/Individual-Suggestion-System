<?php
try{
    $connect= new PDO("mysql:host=localhost;dbname=oneri;charset=UTF8","root", "");
}catch(PDOException $Hata){
   // echo "Baglanti Hatasi <br/>".$Hata -> getMessage(); //Bu alani kapatin cunku site hata verdiginde kullanicilar hatayi goremesin.
   die();
}

/*
$AyarlarSorgusu = $VeritabaniBaglantisi->prepare("SELECT * FROM ayarlar LIMIT 1");
$AyarlarSorgusu->execute();
$AyarSayisi = $AyarlarSorgusu->rowCount();
$Ayarlar = $AyarlarSorgusu->fetch(PDO::FETCH_ASSOC);
if($AyarSayisi>0){
    $SiteAdi            = $Ayarlar["SiteAdi"];
    $SiteTitle          = $Ayarlar["SiteTitle"];
    $SiteDescription    = $Ayarlar["SiteDescription"];
    $SiteKeywords       = $Ayarlar["SiteKeywords"];
    $SiteCopyrightMetni = $Ayarlar["SiteCopyrightMetni"];
    $SiteLogosu         = $Ayarlar["SiteLogosu"];
    $SiteEmailAdresi    = $Ayarlar["SiteEmailAdresi"];
    $SiteEmailSifresi   = $Ayarlar["SiteEmailSifresi"];

    $SosyalLinkFacebook   = $Ayarlar["SosyalLinkFacebook"];
    $SosyalLinkInstagram   = $Ayarlar["SosyalLinkInstagram"];
    $SosyalLinkTwitter   = $Ayarlar["SosyalLinkTwitter"];
    $SosyalLinkPinterest   = $Ayarlar["SosyalLinkPinterest"];
    $SosyalLinkYoutube   = $Ayarlar["SosyalLinkYoutube"];
    $SosyalLinkLinkedin   = $Ayarlar["SosyalLinkLinkedin"];


}
else{
    // echo "Site Ayar Sorgusu Hatali"; //Bu alani kapatin cunku site hata verdiginde kullanicilar hatayi goremesin.
   die();
}

$MetinlerSorgusu        = $VeritabaniBaglantisi->prepare("SELECT * FROM sozlesmelervemetinler LIMIT 1");
$MetinlerSorgusu->execute();
$MetinlerSayisi         = $MetinlerSorgusu->rowCount();
$Metinler               = $MetinlerSorgusu->fetch(PDO::FETCH_ASSOC);

if($MetinlerSayisi>0){
    
    $HakkimizdaMetni                = $Metinler["HakkimizdaMetni"];
    $UyelikSozlesmesiMetni          = $Metinler["UyelikSozlesmesiMetni"];
    $KullanimKosullariMetni         = $Metinler["KullanimKosullariMetni"];
    $GizlilikSozlesmesiMetni        = $Metinler["GizlilikSozlesmesiMetni"];
    $MesafeliSatisSozlesmesiMetni   = $Metinler["MesafeliSatisSozlesmesiMetni"];
    $TeslimatMetni                  = $Metinler["TeslimatMetni"];
    $IadeDegisimMetni	            = $Metinler["IadeDegisimMetni"];
    
}else{
    // echo "Metinler Sorgusu Hatali"; //Bu alani kapatin cunku site hata verdiginde kullanicilar hatayi goremesin.
   die();
}

*/
?>