<div class="sl-pagebody">
  <form class="" action="test.php" method="post">
      <div class="form">
          <div class="sl-page-title">
          <h5>BİREYSEL ÖNERİ SİSTEMİ</h5>
        </div>
        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">FİKRİNİ PAYLAŞ</h6>
          <p class="mg-b-20 mg-sm-b-30">Fikirlerinizi ve Önerilerinizi Bizimle Paylaşın.</p>
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Ad-Soyad <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="kullanici_id" placeholder="Ad-Soyad">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Departman: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="bolum_id" placeholder="Ör:Bilgi İşlem">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                    <label class="form-control-label">Başlık: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="baslik" placeholder="Ör:Fatura Ayarlamaları">
                  </div>
              </div>       
              <div class="col-lg-6">
                <div class="form-group mg-b-10-force">
                    <label class="form-control-label">Öneri Kategori: <span class="tx-danger">*</span></label>
                    <select class="form-control select2 select2-hidden-accessible" id="kategori_id"  name="kategori_id" tabindex="-1" aria-hidden="true">
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
              </div>
                      <td> 
                          <button type="button" name="benzerOneriButton" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id="benzerOneriler">
                            Benzer Öneri Göster
                          </button>   
                      </td>
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Sorun: <span class="tx-danger">*</span></label>
                    <textarea  class="form-control" name="mevcut_durum" id="" rows="5"></textarea>
                  </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Öneri: <span class="tx-danger">*</span></label>
                    <textarea  class="form-control" name="oneri" id="" rows="5"></textarea>
                  </div>
              </div>     
            </div>
            <div class="form-layout-footer">
             <input type="submit" name="oneriEkle" value="PAYLAŞ">  
            </div>
          </div>
        </div>
      </div>
  </form>     
</div>