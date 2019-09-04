  function checkcrd(form)  
  {  
   var a = document.forms["myform"]["cardnum"].value; 
     	Check = /^(?:4[0-9]{12}(?:[0-9]{3})?)$/;
    if(!a.match(Check)) {  
         alert("Error: Not a credit card number! "); 
      return false;  
    }  
  var b = document.forms["myform"]["cvc"].value; 
     	Check = /^(?:401?)$/;
    if(!b.match(Check)) {  
     alert("Error: Not a CVC number! "); 
      return false;  
    }  
	
	  var c = document.forms["myform"]["expirymonth"].value; 
     	Check = /^(?:07?)$/;
    if(!c.match(Check)) {  
        alert("Error: Please enter the correct expiry month! "); 
      return false;  
    } 
	
	  var d = document.forms["myform"]["expiryyear"].value; 
     	Check = /^(?:22?)$/;
    if(!d.match(Check)) {  
     alert("Error: Please enter the correct expiry year! "); 
	       return false;  
    } 
	
	
	
	
	else {
		window.location.href = "http://unn-w17022892.newnumyspace.co.uk/FitnessGuru/pay.php";
	}   
	 
	 }  