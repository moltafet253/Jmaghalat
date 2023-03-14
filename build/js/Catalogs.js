document.getElementById("Scientific_Committee_Form").onsubmit = function Validate_Scientific_Committee(){
    var Scientific_Committee_Subject=document.getElementById('Scientific_Committee_Subject');
    var Scientific_Committee_Name=document.getElementById('Scientific_Committee_Name');
    var Scientific_Committee_Family=document.getElementById('Scientific_Committee_Family');
    var Scientific_Committee_National_Code=document.getElementById('Scientific_Committee_National_Code');
    var Scientific_Committee_Position=document.getElementById('Scientific_Committee_Position');
    if (Scientific_Committee_Subject.value=='عنوان را انتخاب کنید'){
        alert ('عنوان را انتخاب کنید');
        return false;
    }else if (Scientific_Committee_Name.value==''){
        alert ('نام را وارد کنید');
        return false;
    }else if (Scientific_Committee_Family.value==''){
        alert ('نام خانوادگی را وارد کنید');
        return false;
    }else if (Scientific_Committee_National_Code.value==''){
        alert ('کد ملی را وارد کنید');
        return false;
    }else if (Scientific_Committee_Position.value=='سمت را انتخاب کنید'){
        alert ('سمت را انتخاب کنید');
        return false;
    }else{
        return true;
    }
};

document.getElementById("Disable_Scientific_Committee_Form").onsubmit = function Validate_Scientific_Committee(){
    var Disable_Scientific_Committee=document.getElementById('Disable_Scientific_Committee');
    if (Disable_Scientific_Committee.value=='کاربر را انتخاب کنید'){
        alert ('کاربر را انتخاب کنید');
        return false;
    }else{
        return true;
    }
};

document.getElementById("Enable_Scientific_Committee_Form").onsubmit = function Validate_Scientific_Committee(){
    var Enable_Scientific_Committee=document.getElementById('Enable_Scientific_Committee');
    if (Enable_Scientific_Committee.value=='کاربر را انتخاب کنید'){
        alert ('کاربر را انتخاب کنید');
        return false;
    }else{
        return true;
    }
};