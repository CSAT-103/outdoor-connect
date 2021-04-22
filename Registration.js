let modal = document.getElementById("myModal");
function pageNavigation(){
 location.href="Registration.html";
}
function loadFunction() {

}

function registerValues() {

 let email = document.getElementById('email').value;
 let firstName = document.getElementById('fname').value;
 let lastName = document.getElementById('sname').value;
 let passWord = document.getElementById('pwd').value;
 let gender = document.getElementById('gender').value;
 let dob = document.getElementById('datepicker').value;
 let sports = document.getElementById('sports').value;
 console.log(sports);
 document.getElementById('myModal').style.display = "block";

/*setTimeout(function() { document.getElementById('myModal').style.display = "none";}, 2000)*/
}

function checkConfirmPassword(){

 let passWord = document.getElementById('pwd').value;
 let cpassWord = document.getElementById('cpwd').value;

 if(passWord.localeCompare(cpassWord)==0){
  document.getElementById("error").style.display="none";
 }
 else{
 let error = "password and confirm password should be same";
  document.getElementById("error").innerHTML = error;
  document.getElementById('error').setAttribute("style", "color:red;");
 }
}

