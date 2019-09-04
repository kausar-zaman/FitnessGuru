// JavaScript Document
// Senior Pay
 function myFunction1() {
    var person = prompt("Enter your senior discount code");
Check = /^(?:SEN456?)$/;
    if(!person.match(Check)) {  
         alert("Error: Invalid senior discount code! Please try again "); 
      return false;  
    }  else
	{
		alert("Your senior code has been validated! "); 
		window.location.href = "http://unn-w17022892.newnumyspace.co.uk/FitnessGuru/seniorpay.php";
	  }
 }