<?php 
  include "db_functions.php";
  ini_set ('display_errors', 1);
  ini_set ('display_startup_errors', 1);
  error_reporting (E_ALL);
?>

<?php 
  require_once("../../Ayarlar/ayar.php");
  require_once("../../Ayarlar/fonksiyonlar.php");
  require_once("../../Ayarlar/sitesayfalari.php");
  ?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>BİREYSEL ÖNERİ SİSTEMİ</title>

    <!-- vendor css -->
    <link href="../../dashboard_assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../../dashboard_assets/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="../../dashboard_assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="../../dashboard_assets/lib/rickshaw/rickshaw.min.css" rel="stylesheet">

    <!-- Starlight CSS -->
    <link rel="stylesheet" href="../../dashboard_assets/css/starlight.css">
  </head>
  
  <body>


    <!-- ########## START: LEFT PANEL ########## -->
    <div class="sl-logo"><a href=""><i class=""></i> Turkuaz Seramik</a></div>
    <div class="sl-sideleft">
      <div class="input-group input-group-search">
        <input type="search" name="search" class="form-control" placeholder="Search">
        <span class="input-group-btn">
          <button class="btn"><i class="fa fa-search"></i></button>
        </span><!-- input-group-btn -->
      </div><!-- input-group -->

      <div class="sl-sideleft-menu">
        <a href="index.php" class="sl-menu-link active">
            <div class="sl-menu-item">
              <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
              <span class="menu-item-label">Ana Sayfa</span>
            </div><!-- menu-item -->
          </a><!-- sl-menu-link -->

          <a href="index.php?SayfaKodu=1&yol=hesabim_layouts/_yenioneri.php" target="_blank" class="sl-menu-link">
            <div class="sl-menu-item">
            <i class="menu-item-icon icon fa fa-plus tx-20"></i>  
              <span class="menu-item-label">Yeni Öneri Ekle</span>
            </div><!-- menu-item -->
          </a><!-- sl-menu-link -->

          <a href="#" class="sl-menu-link">
            <div class="sl-menu-item">
              <i class="menu-item-icon ion-wand"></i>
              <span class="menu-item-label">ÖNERİLER</span>
              <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
          </a><!-- sl-menu-link -->

          <ul class="sl-menu-sub nav flex-column">

          <li class="nav-item"><a href="index.php?SayfaKodu=1&yol=hesabim_layouts/_tumoneriler.php" target="_blank" class="nav-link">Tüm Öneriler Göster </a></li>

            <li class="nav-item"><a href="index.php?SayfaKodu=1&yol=hesabim_layouts/_kabuloneri.php" target="_blank" class="nav-link">Kabul Olan Öneriler </a></li>
            <li class="nav-item"><a href="chart-flot.html" class="nav-link">Reddedilen Öneriler</a></li>
            <li class="nav-item"><a href="chart-chartjs.html" class="nav-link">Değerlendirme Aşamasındaki Öneriler</a></li>
            <!-- <li class="nav-item"><a href="chart-rickshaw.html" class="nav-link">Rickshaw</a></li> 
            <li class="nav-item"><a href="chart-sparkline.html" class="nav-link">Sparkline</a></li> -->
          </ul>
          <a href="#" class="sl-menu-link">
            <div class="sl-menu-item">
              <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
              <span class="menu-item-label">Önerilerim</span>
              <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
          </a><!-- sl-menu-link -->
          <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="form-elements.html" class="nav-link"> Öneri Listele</a></li>
            <li class="nav-item"><a href="form-layouts.html" class="nav-link">Yeni Öneri Ekle</a></li>
            <!-- <li class="nav-item"><a href="form-validation.html" class="nav-link">Form Validation</a></li>
            <li class="nav-item"><a href="form-wizards.html" class="nav-link">Form Wizards</a></li>
            <li class="nav-item"><a href="form-editor-text.html" class="nav-link">Text Editor</a></li> -->
          </ul>
          <a href="#" class="sl-menu-link">
            <div class="sl-menu-item">
              <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
              <span class="menu-item-label">Raporlar</span>
              <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
          </a><!-- sl-menu-link -->
        
      </div><!-- sl-sideleft-menu -->

      <br>
    </div><!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="sl-header">
      <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
      </div><!-- sl-header-left -->
      <div class="sl-header-right">
        <nav class="nav">
          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name">Jane<span class="hidden-md-down"> Doe</span></span>
              <img src="../../dashboard_assets/img/img3.jpg" class="wd-32 rounded-circle" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200">
              <ul class="list-unstyled user-profile-nav">
                <li><a href=""><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
                <li><a href=""><i class="icon ion-ios-gear-outline"></i> Settings</a></li>
                <li><a href=""><i class="icon ion-ios-download-outline"></i> Downloads</a></li>
                <li><a href=""><i class="icon ion-ios-star-outline"></i> Favorites</a></li>
                <li><a href=""><i class="icon ion-ios-folder-outline"></i> Collections</a></li>
                <li><a href=""><i class="icon ion-power"></i> Sign Out</a></li> 
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
      </div><!-- sl-header-right -->
    </div><!-- sl-header -->
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">TURKUAZ SERAMİK</a>
         <!-- <span class="breadcrumb-item active">Dashboard</span> -->
      </nav>

      <div class="sl-pagebody">
          <?php 
              if(isset($_GET["EditId"])){
              $EditId =  $_GET['EditId'];

          $cek = $VeriTabaniBaglantisi->query("SELECT * FROM user_recommendations WHERE id = $EditId")->fetch();
          //displ($cek);
          }
          ?>

      <form class="" action="test.php" method="post">
<div class="form">

    <div class="sl-page-title">
    <h5>BİREYSEL ÖNERİ SİSTEMİ</h5>
  </div><!-- sl-page-title -->

  <div class="card pd-20 pd-sm-40">
    <h6 class="card-body-title">FİKRİNİ PAYLAŞ</h6>
    <p class="mg-b-20 mg-sm-b-30">Fikirlerinizi ve Önerilerinizi Bizimle Paylaşın.</p>
    
      <!--GÜNCELLEME KISMINDA ID 'nin ÇAĞRILMASI -->
    <input class="form-control" type="hidden" name="oneriId" value="<?php echo $_GET["EditId"] ?>">

    <div class="form-layout">
      <div class="row mg-b-25">
        <div class="col-lg-6">
          <div class="form-group">
            <label class="form-control-label">Ad-Soyad <span class="tx-danger">*</span></label>
            <input class="form-control" type="text" name="kullanici_id" placeholder="Ad-Soyad" value="<?php echo $cek["kullanici_id"] ?>">
          </div>
        </div><!-- col-4 -->
        <div class="col-lg-6">
          <div class="form-group">
            <label class="form-control-label">Departman: <span class="tx-danger">*</span></label>
            <input class="form-control" type="text" name="bolum_id" placeholder="Ör:Bilgi İşlem" value="<?php echo $cek["bolum_id"] ?>">
          </div>
        </div><!-- col-4 -->

        <div class="col-lg-12">
          <div class="form-group">
              <label class="form-control-label">Başlık: <span class="tx-danger">*</span></label>
              <input class="form-control" type="text" name="baslik" placeholder="Ör:Fatura Ayarlamaları" value="<?php echo $cek["baslik"] ?>">
            </div>
        </div><!-- col-4 -->

        <div class="col-lg-6">



            <div class="form-group mg-b-10-force">
                <label class="form-control-label">Öneri Kategori: <span class="tx-danger">*</span></label>
                <select class="form-control select2 select2-hidden-accessible" name="kategori_id" tabindex="-1" aria-hidden="true">
                  <option selected value="<?php echo $cek["kategori_id"]  ?>"></option>
                  <option label="Kategori Seç"></option> 
                  <option value="1">Malzeme Tasarrufu</option>
                  <option value="2">Üretim Zaman Kazancı</option>
                  <option value="3">Kalite İyileştirme</option>
                  <option value="4">Çevre ve İş Güvenliği Ortamı İyileştirme</option>
                  <option value="5">Makine Bakımı İyileştirme</option>
                  <option value="6">Risk Önleyici</option>
                  <option value="7">Maliyet Azaltımı</option>
                  <option value="8">Verimlilik/Kapasite Artırmı</option>
                  <option value="9">Hata/Fire Oranları Azaltımı</option>
                  </select>
            </div> 
        </div><!-- col-4 -->

        <div class="col-lg-12">
          <div class="form-group">
            <label class="form-control-label">Sorun: <span class="tx-danger">*</span></label>
              <textarea  class="form-control" name="mevcut_durum" id="" rows="5"><?php echo $cek["mevcut_durum"]  ?></textarea>
            </div>
        </div><!-- col-4 -->

        <div class="col-lg-12">
          <div class="form-group">
            <label class="form-control-label">Öneri: <span class="tx-danger">*</span></label>
              <textarea  class="form-control" name="oneri" id="" rows="5"><?php echo $cek["oneri"]?></textarea>
            </div>
        </div><!-- col-4 -->
       
      </div><!-- row -->

      <div class="form-layout-footer">
       <!-- <button class="btn btn-info mg-r-5">PAYLAŞ</button> -->
       <input type="submit" name="oneriDuzelt" value="GÜNCELLE">

    
      </div><!-- form-layout-footer -->
    </div><!-- form-layout -->
  </div><!-- card -->

</div>

</form>     
      </div>
      <!-- sl-pagebody -->
      <footer class="sl-footer">
        <div class="footer-left">
          <div class="mg-b-2">Copyright &copy; 2017. Starlight. All Rights Reserved.</div>
          <div>Made by ThemePixels.</div>
        </div>
        <div class="footer-right d-flex align-items-center">
          <span class="tx-uppercase mg-r-10">Share:</span>
          <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/starlight"><i class="fa fa-facebook tx-20"></i></a>
          <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Starlight,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/starlight"><i class="fa fa-twitter tx-20"></i></a>
        </div>
      </footer>
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## --> 
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Öneri Detayı</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
              <div id="message"></div> 
            </div>

            <div class="modal-footer">
              <button type="button" name="button"class="btn btn-secondary" data-dismiss="modal">Kapat</button>
            </div>

          </div>
        </div>
    </div>

    <script>
      $(document).ready(function(){
        $('#button').click(function(){
          var mevcut_durum = $('#mevcut_durum').val();
          var oneri = $('#oneri').val();

          $.ajax({
              url:"backgroundProcess.php", // ****************** 
              method:"POST",
              data: {mevcut_durum : mevcut_durum , oneri : oneri},
              success:function(data)
              { 
                $('$button').hide();
                location.reload();
              }
          });

        });
      });
    </script> 

    <script src="../../dashboard_assets/lib/jquery/jquery.js"></script>
    <script src="../../dashboard_assets/lib/popper.js/popper.js"></script>
    <script src="../../dashboard_assets/lib/bootstrap/bootstrap.js"></script>
    <script src="../../dashboard_assets/lib/jquery-ui/jquery-ui.js"></script>
    <script src="../../dashboard_assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="../../dashboard_assets/lib/jquery.sparkline.bower/jquery.sparkline.min.js"></script>
    <script src="../../dashboard_assets/lib/d3/d3.js"></script>
    <script src="../../dashboard_assets/lib/rickshaw/rickshaw.min.js"></script>
    <script src="../../dashboard_assets/lib/chart.js/Chart.js"></script>
    <script src="../../dashboard_assets/lib/Flot/jquery.flot.js"></script>
    <script src="../../dashboard_assets/lib/Flot/jquery.flot.pie.js"></script>
    <script src="../../dashboard_assets/lib/Flot/jquery.flot.resize.js"></script>
    <script src="../../dashboard_assets/lib/flot-spline/jquery.flot.spline.js"></script>
    <script src="../../dashboard_assets/js/starlight.js"></script>
    <script src="oneriScript.js"></script>

  </body>
</html>