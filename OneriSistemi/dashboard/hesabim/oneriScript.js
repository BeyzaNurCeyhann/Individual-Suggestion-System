$(document).ready(function(){

    $(document).on('click', '.oneriGoster', function(e){
        btnId = this.id
            console.log("btnId  " + btnId); 
            gidecekVeri =  {oneriID : btnId , action : "oneriGoster"};
            $.ajax({
                type:"POST",
                url:"backgroundProcess.php",
                data: gidecekVeri,
                success:function(sonuc){
                    //alert(sonuc);
                    console.log(sonuc);
                    $("#message").html(sonuc)
                }
            })
    });

    
    //benzer önerinin kategorisinin değerinin getirilmesi
    $('#benzerOneriler').click(function(){
        console.log("benzer öneri");
        kategori_id =$("#kategori_id").val();
        //kategori seçilmemişse uyarı verilir.
        if (kategori_id == ""){
            //alert("kategori seçiniz!")
            $("#message").html("<h1> kategori seçiniz! </h1>")
        }else {
            //kategori seçilmiş ise backgroundProcess.php ile gidilmesi ajax ile sağlanmıştır.
            //$("#message").html("<h1> "+kategori_id+" </h1>")
            gidecekVeri= { kategori_id : kategori_id , action : "kategoriOnerileri"}

            $.ajax({
                url:"backgroundProcess.php", 
                method:"POST",
                data: gidecekVeri,
                success:function(data)
                { 
                  $("#message").html(data)
                }
            });
        }
      });


      //Ekle butonunun aktifleştirilmesi
      $(document).on('click','#degerlendirmeEkle',function(event){
        event.preventDefault();
        console.log("Ekle");
        $("#degerlendirmeFormu").submit();         
      });


      //gelen öneriye karşı yorumun ajax yolu ile submit edilmesi
      $(document).on('submit','#degerlendirmeFormu',function(event){
            event.preventDefault();
            console.log("form submit edilecek.");
            form_data = new FormData(this); 
            form_data.append("action","degerlendirmeEkle");
            form_data.append("oneriID",'<?php echo $_GET["EditId"] ?>');
            console.log(form_data);
        
          $.ajax({
                url:'backgroundProcess.php',
                type:'POST',
                data:form_data,
                contentType:false,
                processData:false,
                success:function(result){ 
                    console.log("sonuç: " + result);
                    $('#message').html(result)
                }
         });     
      });

});
      //öneri eklenirken mevcut durumun ve öneri kısmının eklenmesi
      $(document).ready(function(){
          $('#button').click(function(){
            var mevcut_durum = $('#mevcut_durum').val();
            var oneri = $('#oneri').val();

            $.ajax({
                url:"backgroundProcess.php",
                method:"POST",
                data: {mevcut_durum : mevcut_durum , oneri : oneri},
                success:function(data){ 
                  $('$button').hide();
                  location.reload();
                }
            });
          });
        });