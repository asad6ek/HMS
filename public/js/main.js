function checkboxf(chek) {

    if(chek.checked) {
        chek.value=true;
        document.getElementById('palatahid').hidden = false;

    }
    else  {
        document.getElementById('palatahid').hidden = true;
        chek.value=false;
    }
}

function summ_h(summ) {
   document.getElementById('um_sum').innerHTML=(document.getElementById('summ').value)+document.getElementById('soni').value;


}