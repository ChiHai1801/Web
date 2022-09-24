//Đăng ký
function checkName(){
    var name = document.getElementById("name").value;
    var errorName = document.getElementById("errorName");

    if(name == "" || name == null){
        errorName.innerHTML = "Vui lòng không bỏ trống trường này";
    } else if(name.length < 6){
        errorName.innerHTML = "Họ tên phải dài hơn 6 ký tự ";
        return false;
    } else {
        errorName.innerHTML = "";
    }
}
    
function checkEmail(){
    var email = document.getElementById("email").value;
    var errorEmail = document.getElementById("errorEmail");
    var regexEmail =  /[A-Z0-9._%+-]+@[A-Z0-9-]+.+.[A-Z]{2,4}/igm;

    if(email == "" || email == null){
        errorEmail.innerHTML = "Vui lòng không bỏ trống trường này"; 
    } else if(!regexEmail.test(email)){
        errorEmail.innerHTML = "Email không hợp lệ";
        email = "";
    }else{
        errorEmail.innerHTML = "";
    }
}

function checkkPhone(){
    var phone = document.getElementById("phone").value;
    var errorPhone = document.getElementById("errorPhone");
    var regexPhone =  /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;

    if(phone == "" || phone == null){
        errorPhone.innerHTML = "Vui lòng không bỏ trống trường này";
    }else if(!regexPhone.test(phone)){
        errorPhone.innerHTML = "Số điện thoại không hợp lệ";
    }else{
        errorPhone.innerHTML = "";
    }
}

function checkPw(){
    var pw = document.getElementById("pw").value;
    var errorPw = document.getElementById("errorPw");
    // var regexPw =  /^(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$

    if(pw == "" || pw == null){
        errorPw.innerHTML = "Vui lòng không bỏ trống trường này";
    } else{
        errorPw.innerHTML = "";
    }
}

function checkPw2(){
    var pw2 = document.getElementById("pw2").value;
    var errorPw2 = document.getElementById("errorPw2");

    if(pw2 == "" || pw2 == null){
        errorPw2.innerHTML = "Vui lòng không bỏ trống trường này"
    } else if(pw2 != pw){
        errorPw2.innerHTML = "Mật khẩu không khớp";
    }else {
        errorPw2.innerHTML = "";
    }

}
    

function FormValidate(){
    if(checkName() == true){
        alert(1);
    }else{
        return false;
    }
}