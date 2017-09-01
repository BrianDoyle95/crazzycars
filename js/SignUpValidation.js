function signUpValidation()  
{  
var user_name = document.registration.user_name;  
var password = document.registration.password;   
var email = document.registration.email;

{  
if(password_validation(password,8,20))  
{  
if(ValidateEmail(email))  
 


  

return false;  
  
} function user_name_validation(user,mx,my)  
{  
var user_len = user.value.length;  
if (user_len == 0 || user_len >= my || user_len < mx)  
{  
alert("Username should not be empty / length be between "+mx+" to "+my);  
user.focus();  
return false;  
}  
return true;  
}  

function password_validation(password,mx,my)  
{  
var password_len = password.value.length;  
if (password_len == 0 ||password_len >= my || password_len < mx)  
{  
alert("Password should not be empty / length be between "+mx+" to "+my);  
password.focus();  
return false;  
} 
else  
{  
alert('Form Succesfully Submitted');  
window.location.reload()  
return true;  
} 
}  


  
function ValidateEmail(email)  
{  
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
if(email.value.match(mailformat))  
{  
return true;  
}  
else  
{  
alert("You have entered an invalid email address!");  
email.focus();  
return false;  
}  
} 

}
}