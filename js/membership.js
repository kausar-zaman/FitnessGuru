// JavaScript Document
// Student Pay
function myFunction() {
    var person = prompt("Enter your student discount code");
Check = /^(?:STU123?)$/;
    if(!person.match(Check)) {  
         alert("Error: Invalid student discount code! Please try again "); 
      return false;  
    }  else
	{
		alert("Your student code has been validated! "); 
		window.location.href = "http://unn-w17022892.newnumyspace.co.uk/FitnessGuru/studentpay.php";
	  }
 }
