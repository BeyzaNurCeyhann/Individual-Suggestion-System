<div class="card pd-20 pd-sm-40 mg-t-50">
          <h6 class="card-body-title">TÜM ÖNERİ LİSTELERİ</h6>
          <div class="table-wrapper">
            <div id="" class=" ">
              <table class="table display responsive " style="width: 1160px;">
                <thead>
                  <tr>
                    <th> ID               </th>
                    <th> KULLANICI        </th>
                    <th> DEPARTMAN        </th>       
                    <th> BAŞLIK           </th>
                    <th> KATEGORİ         </th>
                    <th> MEVCUT DURUM     </th>
                    <th> ÖNERİ            </th>
                    <th> ARAÇLAR          </th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                      $tumOneriler = tumOneriGetir();
                      if($tumOneriler != false && !empty($tumOneriler)){
                          foreach($tumOneriler as $row){
                              echo '<tr role="row" class="odd">
                                          <td> '.$row["id"].'                           </td>
                                          <td> '.$row["kullanici_id"].'                 </td>
                                          <td> '.$row["bolum_id"].'                     </td>
                                          <td> '.$row["baslik"].'                       </td>
                                          <td> '.$row["kategori_id"].'                  </td>
                                          <td> '.substr($row["mevcut_durum"],0,30).'    </td>
                                          <td> '.$row["oneri"].'                        </td>                                          
                                          <td> 
                                            <button type="button" class="btn btn-primary oneriGoster btn-sm btn-inline" id='.$row["id"].'   data-toggle="modal" data-target="#exampleModal" title="Detay Göster">
                                              <i class="fa fa-eye"></i>
                                            </button>                                          
                                            <a href="edit.php?EditId='.$row["id"].'" target="_blank" class="btn btn-primary btn-sm btn-inline" id='.$row["id"].' title="Düzenle">
                                            <i class="fa fa-edit"></i>
                                            </a>                                       
                                            <a href="oneri_degerlendirme.php?EditId='.$row["id"].'" target="_blank" class="btn btn-primary btn-sm btn-inline" id='.$row["id"].' title="Değerlendirme">
                                          <i class="icon ion-gear-b"> </i>
                                            </a>
                                        </td>
                                    </tr>'; 
                          }
                        }
                      ?>        
                </tbody>
              </table>
          </div>
        </div>   
</div>
