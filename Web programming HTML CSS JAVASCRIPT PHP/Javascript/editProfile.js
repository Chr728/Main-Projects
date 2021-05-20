user_email=document.getElementById('inputEmail4');
user_new_email=document.getElementById('inputEmail');
user_phone=document.getElementById('phone');
user_city = document.getElementById('inputCity');
user_address = document.getElementById('inputAddress');
e = document.getElementById("province");
let email_expression = /[\w]+@[\w.]+/;


/*The check_email function checks the Current Email field to ensure that the user enters an ID that is valid. 
If invalid, it displays an error message to the user*/
let check_email=function(){   
if((user_email.value=="") && (user_new_email.value=="")){
    document.getElementById("mismatch2").style.display="none";
    document.getElementById("mismatch").style.display="none";
    return true;
}
    else if(!(user_email.value.match(email_expression))){
        document.getElementById("mismatch").style.display="inline";
        return false;
     }
    
     else{
         document.getElementById("mismatch").style.display="none";
         return true;
     }
}

/**The check_new_email function ensures that the new email is a valid expression. It also checks if the user has entered an email in the 
 * Current Email field. If not, an error message is displayed.
 */
let check_new_email=function(){   
   
            if((user_email.value=="") && (user_new_email.value=="")){
                document.getElementById("mismatch2").style.display="none";
                document.getElementById("mismatch").style.display="none";
                return true;
            }
        else if(!(user_new_email.value.match(email_expression))){
           
            document.getElementById("mismatch2").style.display="inline";
            return false;
            
         }
         else if(user_email.value==""){
            document.getElementById("mismatch2").style.display="inline";
            return false;
         }
         else{
             document.getElementById("mismatch2").style.display="none";
             return true;
         }
    }

user_email.onblur=check_email;
user_new_email.onblur=check_new_email;


/** User password values (both new and old) are stored in the variables as shown below. The check_password function ensures that both the old and the new 
 * passwords entered are the same. If not, an error message is displayed. This function checks for the above as soon as the password field moves out of focus.
 */
user_password=document.getElementById('inputPassword4');
user_new_password=document.getElementById('inputPassword');


let check_password=function(){
    if(!(user_password.value.localeCompare(user_new_password.value)==0)){
        document.getElementById("mismatch_password").style.display="inline";
        return false;
     }

     if((user_password.value=="")||(user_new_password.value=="")){
        document.getElementById("mismatch_password").style.display="none";
        return false;
     }
     document.getElementById("mismatch_password").style.display="none";
     return true;
}

user_new_password.onblur=check_password;


/**
 * The phone_number function checks if the user enters a valid phone number- one with 10 digits and without any special characters. An error message is displayed 
 * accordingly.
 */
let phone_number= function(){
    let phone=/^\d{10}$/;
    if(!(user_phone.value.match(phone))&& (user_phone.value!="")){
        document.getElementById("mismatch_phone").style.display="inline";
        return false;
    }
    document.getElementById("mismatch_phone").style.display="none";
    return true;
}

user_phone.onblur=phone_number;


/**
 * The resetCheck function helps reset the form once all the input fields have been validated. It is called from the submission function and resets the 
 * entire form after submission. The preventDefault function associated with the submitButton variable ensures that the default action of the button 
 * (that is, to send the entered values somewhere) is prevented.
 */

let submitButton=document.getElementById('save');
let inputs=document.querySelectorAll('input');


let resetCheck=function(){
    for(i=0; i<inputs.length; i++){
        inputs[i].value='';
    }
   
    document.getElementById("mismatch").style.display="none";
    document.getElementById("mismatch2").style.display="none";
    document.getElementById("mismatch_password").style.display="none";
    document.getElementById("mismatch_password").style.display="none";
    document.getElementById("mismatch_phone").style.display="none";
    document.getElementById("province").selectedIndex=0;
}



submitButton.addEventListener('click', function(e)
{
    e.preventDefault();
});
    

/**The submission function checks all the fields once more to ensure that the user not entered invalid details or left some field incomplete. It gives either
 * an error message or a completion message accordingly.
 */
function submission()
{   
    var user_province = e.options[e.selectedIndex].value;
    if(((user_email.value!="")&&(user_new_email.value==""))||((user_email.value=="")&&(user_new_email.value!="")))
    {
        
        email = "Email";
    }
    else if((!(user_new_email.value.match(email_expression))||!(user_email.value.match(email_expression)))&& (user_email.value!="") && (user_new_email.value!="")){
        email="Email";
    }
    else{
        email="";
    }

    if(((user_password.value!="")&&(user_new_password.value==""))||((user_password.value=="")&&(user_new_password.value!="")))
    {
        password = "Password";
    }
    else if(!(user_password.value.localeCompare(user_new_password.value)==0)){
        password = "Password";
    }
    else{
        password="";
    }
    
    if(!phone_number()){
        phone="Phone Number";
    }
    else{
        phone="";
    }
    
    if((email!="")||(password!="") || (phone!="")){
        swal("Please ensure the following field(s) are correctly filled:\n\n"+ email + "\n " + password + "\n"+ phone);
    }
    else{
        $.ajax({
            url: '../php/editProfile.php',
            type: 'POST',
            data: {original_email: user_email.value, new_email: user_new_email.value, new_password: user_new_password.value, address: user_address.value, new_city: user_city.value, new_province: user_province, new_phone: user_phone.value}

          })
          .done(function(message) {
            
          })
          .fail(function() {
            alert("There was a problem. Please try again later.");
          });
        swal("Done!", "The changes were saved successfully!", "success");
        resetCheck();
    }
    
}