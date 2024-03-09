function chooseFile(fileInput){
    if(fileInput.files && fileInput.files[0]){
      var reader = new FileReader();//doc thong tin hinh dc chon

      reader.onload = function(e){//khi hinh dc nap xong thi hien thi tren the img
        $('#image').attr('src', e.target.result);
      }

      reader.readAsDataURL(fileInput.files[0]);
    }
} 