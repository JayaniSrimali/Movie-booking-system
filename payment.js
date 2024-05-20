function validateForm() {
    let cardName = document.forms["form"]["NameOnCard"].value;
    let CardNumber = document.forms["form"]["Cardnumber"].value;
    let expMonth = document.forms["form"]["Expmonth"].value;
    let expYear = document.forms["form"]["Expyear"].value;
    let CVV = document.forms["form"]["CVV"].value;

    if (cardName == "") {
        alert("Name on Card must be filled!");
        return false;
    }

    // Card Validation
    if(CardNumber == ""){
        alert("Card Number must be filled!");
        return false;

    } else if(CardNumber.length<16){
        alert("Invalid Card Number..Please Check again!");
        return false;
    }
    if(expMonth == ""){
        alert("Expiry Month must be filled!");
        return false;
    }

    // Exp Year Validation
    if(expYear == ""){
        alert("Expiry Year must be filled!");
        return false;
    }else if(expYear.length<4){
        alert("Invalid Expire Year");
        return false;    
    }
    // CVV Validation
    if(CVV == ""){
        alert("CVV must be filled!");
        return false;
    }else if(CVV.length<3){
        alert("Invalid CVV.Please Check Again!");
        return false;    
    }
}

//payment successfull alert
function myFunction() {
	alert("Payment Successfull !");
}
	
