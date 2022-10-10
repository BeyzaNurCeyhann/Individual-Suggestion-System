<?php 
    include "db_functions.php";   
        if(isset($_POST["action"])){
            if($_POST["action"]=="oneriGoster"){
                $oneriID = $_POST["oneriID"];
                //Db ile bağlantı 
                $cek = $VeriTabaniBaglantisi->query("SELECT * FROM user_recommendations WHERE id = $oneriID")->fetch();              
                //Verinin çekildiğinin sorgusu
                if($cek != false && !empty($cek))
                {
                    echo '
                        <strong>Mevcut Durum</strong> <hr> '.$cek["mevcut_durum"].' <br>
                        <strong>Öneri</strong><hr> '.$cek["oneri"].'' ;      
                }
            }
            elseif($_POST["action"]=="kategoriOnerileri"){
                $katID= $_POST["kategori_id"];
                $veriler = $VeriTabaniBaglantisi ->query("SELECT * FROM user_recommendations WHERE kategori_id = $katID  ", PDO::FETCH_ASSOC);
            
                //displ($cek);
                
                //Verinin çekildiğinin sorgusu
                if($veriler != false && !empty($veriler))
                { //<li>'.$row["baslik"].'</li>
                    foreach($veriler as $row){
                        echo '
                            <ul> 
                                <li><a href="_tumoneriler.php">'.$row["baslik"].'</a></li>    
                            </ul>
                            ' ;
                    }
                }
            }
            elseif($_POST["action"]=="degerlendirmeEkle")
            {
                    //displ($_POST);
                    $user_id = 1;
                    $recommendation_id = $_POST["oneriID"];
                    $comment = $_POST["yorum"];
                    $point	 = $_POST["puan"];
                    
                    $yorumEkle = "insert into recommendation_evaluation
                                (user_id,recommendation_id,comment,point)
                                values('$user_id','$recommendation_id','$comment','$point')";   
                    //veriKaydet($yorumEkle,"yorumKaydet");
                    $sonuc = veriKaydet($yorumEkle);
                    if($sonuc){
                        echo "değerlendirme kaydedildi.";
                    }
                    else {
                        echo "değerlendirme kaydedilemedi.";
                    }
            }
        }
?>