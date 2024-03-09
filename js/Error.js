function check_error() {
    var txtEmail = document.forms["signupFrm"]["email"].value;
    var txtName = document.forms["signupFrm"]["hoten"].value;
    var txtPass = document.forms["signupFrm"]["password"].value;
    var txtAdd = document.forms["signupFrm"]["dchi"].value;
    var txtPhone = document.forms["signupFrm"]["sdt"].value;
    var txtUsername = document.forms["signupFrm"]["username"].value;

    var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var phone = /^(0?)(3[2-9]|5[6|8|9]|7[0|6-9]|8[0-6|8|9]|9[0-4|6-9])[0-9]{7}$/;
    if(txtName == ""){
        alert(document.innerHTML = "Họ Tên không được rỗng");
        return false;
    }else if(txtPhone == ""){
        alert(document.innerHTML = "Số điện thoại không được rỗng");
        return false;
    }else if(txtEmail == ""){
        alert(document.innerHTML = "Email không được rỗng");
        return false;
    }else if(txtAdd == ""){
        alert(document.innerHTML = "Địa chỉ không được rỗng");
        return false;
    }else if(txtPass == ""){
        alert(document.innerHTML = "Mật khẩu không được rỗng");
        return false;
    }else if(txtUsername == ""){
        alert(document.innerHTML = "Tên đăng nhập không được rỗng");
        return false;
    }else if(!phone.test(txtPhone)){
        alert(document.innerHTML = "Số điện thoại không đúng");
        return false;
    }else if(!regex.test(txtEmail)){
        alert(document.innerHTML = "Email không đúng");
        return false;
    } 
    

}

