// password validation
document.getElementById("InputRetypepassword").onkeyup = function(){

    var p1=document.getElementById("InputPassword").value ,
        p2=document.getElementById("InputRetypepassword").value ;
   
        if ( p1 == p2 ) {
            document.getElementById("lab").innerHTML=" ✔ ";
            document.getElementById("lab").style.color="green";
            document.getElementById("lab").style.fontSize="15px";  }
   
        else {
           document.getElementById("lab").innerHTML=" ✘ ";
           document.getElementById("lab").style.color="red"; 
           document.getElementById("lab").style.fontSize="15px";   }
   }
// form validation 
var validateform = function(event) {

	var firstname = document.getElementById("InputFirstname").value;
	var lastname = document.getElementById("InputLastname").value;
    var username = document.getElementById("InputUsername").value;
    var pass1 = document.getElementById("InputPassword").value;
    var pass2 = document.getElementById("InputRetypepassword").value;
    var email = document.getElementById("InputMail").value;
	
    var errtext = ""; 

    if(firstname =="" || firstname == null)
    {$("#erralert").show("fast");
    errtext += " Please enter your First Name <br />" ;
    $("#erralert").html(errtext);
    event.preventDefault();
    window.location.hash = '#erralert';
    }

    if(lastname == "" || lastname == null)
    {$("#erralert").show("fast");
    errtext += " Please enter your Last Name  <br />" ;
    $("#erralert").html(errtext);
    event.preventDefault();
    window.location.hash = '#erralert';
    }

    if(username == null || username == ""){
        $("#erralert").show("fast");
        errtext += " Please enter your username  <br />" ;
         $("#erralert").html(errtext);
        event.preventDefault();
        window.location.hash = '#erralert';
    }
    
    if(pass1 == null || pass1 == ""){
        $("#erralert").show("fast");
        errtext += " Please enter your password <br /> " ;
         $("#erralert").html(errtext);
        event.preventDefault();
        window.location.hash = '#erralert';
		}
     else if (pass1.length < 8 ){
         $("#erralert").show("fast");
         errtext += " The password should be more than 8 characters <br />" ;
         $("#erralert").html(errtext);
         event.preventDefault();
         window.location.hash = '#erralert';
    }

    if(pass2 == null || pass2 == ""){
        $("#erralert").show("fast");
        errtext += "Please Re-type your password <br />" ;
        $("#erralert").html(errtext); 
       event.preventDefault();
       window.location.hash = '#erralert';}

   
   if(pass1 != pass2){
       $("#erralert").show("fast");
       errtext += " Please make sure your password matches <br />" ;
        $("#erralert").html(errtext); 
      event.preventDefault();
      window.location.hash = '#erralert';
  }

  if (email == null || email == "") {
    $("#erralert").show("fast");
    errtext += "Please enter your e-mail <br />" ;
    $("#erralert").html(errtext);
    event.preventDefault();
    window.location.hash = '#erralert';
    
    } else if(!validateEmail(email)) {
    $("#erralert").show("fast");
    errtext += " Please type your e-mail correctly <br />" ;
    $("#erralert").html(errtext);
    event.preventDefault();
    window.location.hash = '#erralert';
  }

}

var btn = document.getElementById("btn");
// attach event listener
btn.addEventListener("click", validateform, true);

function validateEmail(email) {
var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
return re.test(String(email).toLowerCase()); }