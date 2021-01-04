valid=()=>{
    if($('input[type=text]').val()=="" || $('input[type=email]').val()=="" || $('input[type=number]').val()=="" || $("input[type=checkbox]").is(':checked') == false){
        alert('please enter all details');
        return false;
    }
}
valid1=()=>{
    if($("input[type=checkbox]").is(':checked') == false){
        alert('Select atleast one row');
        return false;
    }
}