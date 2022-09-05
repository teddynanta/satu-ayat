  $.ajax({
    url: 'https://api.banghasan.com/quran/format/json/acak',
    type: 'get',
    dataType: 'json',
    success: function(result){
      if (result.status == 'ok') {
        let dataId = result.acak.id;
        let dataAr = result.acak.ar;
        let dataSurat = result.surat;

        console.log(dataSurat.asma)
        $('#title').html(dataSurat.nama);
        $('#asma').text(dataSurat.asma);
        $('#chapter').text(dataSurat.nomor);
        $('#verse').text(dataSurat.ayat);
        $('#arabic').html(dataAr.teks);
        $('#text-id').html('<i>"' + dataId.teks + '"</i>');

      }
    }
  });