
function valid(){
    if($('input[type=text]').val() !="" && $('input[type=number]').val() !="" && $('input[type=email]').val() !="" && $('input[type=checkbox]').is(':checked')!=false){
        return true;
    }
    else{
        alert('Please fill every details');
        return false;
    }
}
