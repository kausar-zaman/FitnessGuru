// JavaScript Document


 function unsub(delid)
 {
 if(confirm("Are you sure you want to cancel your class?")){
 
 alert("You have cancelled your class");
 window.location.href='delete.php?id=' +delid+'';
 return true;
 }
 } 