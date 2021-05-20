user_email=document.getElementById('inputEmail');
user_confirm_email=document.getElementById('confEmail');
user_phone=document.getElementById('phone');
user_first_name = document.getElementById('first_name');
user_last_name = document.getElementById('last_name');
city_name = document.getElementById("inputCity");
e = document.getElementById("province");


let email_expression = /[\w]+@[\w.]+/;      //This is the regular expression the email is compared against.

/**The check_email function checks the Email fields to ensure that both the IDs entered are the same and are also valid.
If invalid, it displays an error message to the user. The check_email_expression function ensures that the ID that the user enters in the first
email field is a correct email expression, else it alerts the user about the same.*/
let check_email=function(){   
 
    if(!(user_email.value.localeCompare(user_confirm_email.value)==0)){
        document.getElementById("mismatch").style.display="inline";
        return false;
     }
     else if((user_email.value=="")||(user_confirm_email.value=="")){
        document.getElementById("mismatch").style.display="none";
        document.getElementById("mismatch2").style.display="none";
        return false;
     }
     else{
         document.getElementById("mismatch").style.display="none";
         return true;
     }
    
}

let check_email_expression=function(){
        if(!(user_email.value.match(email_expression))&& (user_email.value!="")){
        
        document.getElementById("mismatch2").style.display="inline";
        return false;
      
     }
     document.getElementById("mismatch2").style.display="none";

}

user_email.onblur=check_email_expression;
user_confirm_email.onblur=check_email;


/** The phone_number function validates the phone number to ensure that there are no special characters and that the digits entered are all numbers. */

let phone_number= function(){
    let phone=/^\d{10}$/;
    if(!(user_phone.value.match(phone)) && (user_phone.value!="")){
        document.getElementById("mismatch_phone").style.display="inline";
        return false;
    }
    document.getElementById("mismatch_phone").style.display="none";
    return true;
}

user_phone.onblur=phone_number;

/** check_password() makes sure that both the password fields have the same characters, else an error message is shown. If both the fields are empty, 
 * no message is displayed.
 */
user_password=document.getElementById('inputPassword');
user_confirm_password=document.getElementById('confPassword');
let check_password=function(){
    
    if(!(user_password.value.localeCompare(user_confirm_password.value)==0)){
        document.getElementById("mismatch_password").style.display="inline";
        return false;
     }

     if((user_password.value=="")||(user_confirm_password.value=="")){
        document.getElementById("mismatch_password").style.display="none";
        return false;
     }
     document.getElementById("mismatch_password").style.display="none";
     return true;
}

user_confirm_password.onblur=check_password;


/**The resetCheck function resets the form once all the input fields have been validated. It is called from the submission function. The preventDefault 
 * function associated with the submitButton variable ensures that the default action of the button 
 * (that is, to send the entered values somewhere) is prevented. */
let submitButton=document.getElementById('signup-submit');
let resetButton=document.getElementById("signup-reset");
let inputs=document.querySelectorAll('input');


let resetCheck=function(){
    for(i=0; i<inputs.length; i++){
        inputs[i].value='';
    }
    inputs[inputs.length-1].checked=false;
    document.getElementById("subscription_box_1").checked=false;
    document.getElementById("subscription_box_2").checked=false;
    document.getElementById("mismatch").style.display="none";
    document.getElementById("mismatch2").style.display="none";
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
    user_newsletter = document.getElementById("subscription_box_2");
    user_deals = document.getElementById ("subscription_box_1");
    var user_province = e.options[e.selectedIndex].value;
    var emailAdd = user_confirm_email.value;
    var phone_1 = user_phone.value;
    var submission_data = "submit";
    var newsletter;
    var deals;
    if(user_newsletter.checked == true){
        newsletter = "true";
    }
    else{
        newsletter = "false";
    }
    if(user_deals.checked == true){
        deals = "true";
    }
    else{
        deals = "false";
    }
    
    if(!check_email() || !check_password() || !phone_number()){
        if(!check_email()){
            email="Email";
        }
        else{
            email="";
        }
        if(!check_password()){
            password="Password";
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

        swal("Make sure the following field(s) are correctly filled before submitting:\n\n"+ email + "\n " + password + "\n"+ phone);
    }
    else{
        var check=document.getElementById('radioCheck').checked;
        if(check==false){
            swal("Checking the radio button before submitting is mandatory");
        }
        else
        {
           
            $.ajax({
                url: '../php/info.php',
                type: 'POST',
                data: {email_2: emailAdd, submit: submission_data, fname: user_first_name.value, phone: phone_1, lname: user_last_name.value, password_2:user_confirm_password.value, city: city_name.value, province: user_province, sub1: deals, sub2: newsletter}

              })
              .done(function(message) {
                swal({
                    title: "Done!",
                    text: "Your form was submitted successfully! You can now login!",
                    type: "success"
                }).then(function() {
                    window.location = "../php/loginpage.php";
                });
              })
              .fail(function() {
                alert("There was a problem. Please try again later.");
              });
        }
    }
    
};
resetButton.addEventListener('click', resetCheck);



