// JavaScript Document
function myFunction() {
    var person = prompt("Enter your student discount code");
Check = /^(?:STU123?)$/;
    if(!person.match(Check)) {  
         alert("Error: Invalid student discount code! Please try again "); 
		 document.getElementById("myCheck").checked = false;
      return false;  
    }  else
	{
		alert("Your student code has been validated! "); 
		 document.getElementById("myCheck").checked = true;
		 document.getElementById("membership").innerHTML = "&#163;9.09";
    }
}