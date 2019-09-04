// JavaScript Document
// Regular Pay
 function myFunction2() {
    var person = prompt("Enter your regular discount discount code");
Check = /^(?:REG789?)$/;
    if(!person.match(Check)) {  
         alert("Error: Invalid regular discount code! Please try again "); 
      return false;  
    }  else
	{
		alert("Your regular membership code has been validated! "); 
		window.location.href = "http://unn-w17022892.newnumyspace.co.uk/FitnessGuru/regularpay.php";
	  }
 }