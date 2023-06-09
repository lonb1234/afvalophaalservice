function changeAmountItems(item, operation){
    amount_of_type=document.getElementById(item)
    amount_of_type_int=parseInt(amount_of_type.innerText)
    console.log(amount_of_type)
    if (operation=="plus"){
    
    amount_of_type.innerText=amount_of_type_int+1
    }
    else if (operation=="min" &&  amount_of_type_int>0){
        amount_of_type.innerText=amount_of_type_int-1
    }
}

function removeItem(item){
    console.log(item)
}

