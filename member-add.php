

<!DOCTYPE html>
<html lang="en" >

<head>

  <meta charset="UTF-8">
  
<link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
<meta name="apple-mobile-web-app-title" content="CodePen">

<link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />

<link rel="mask-icon" type="" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />


  <title>CodePen - Simple Register Form with AngularJS &amp; Material Design</title>
  <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
  
<style>
body {
    min-height:100%;
    background-color: #263238;
}

.text-center{
  text-align: center;
}

.space-bot{
  margin-bottom: 35px;
}

.space-top{
  margin-top: 35px;
}

/* Title */

h1 {
    color: white;
    font-family: 'Roboto';
    text-transform: uppercase;
    font-weight: 900;
    font-size: 25px;
    text-align: center;
}

/* Sign Up */

.container {
    max-width: 400px;
    max-height: 100px;
    margin-top: 10px;
}

.alert-danger{
	text-align: center;
}

.signup-screen {
	  padding: 20px;
    padding-bottom: 40px;
    border-radius: 5px;
    background-color: #2c3940;
    box-shadow: 0 1px 6px rgba(0,0,0,.3);
    color: white;
}

.btn{
  border-radius: 2px;
}

.cancel{
  background-color: #df405a;
}

.done{
  background-color: #5CAB7D;
}

.done:hover{
  background-color: #6dc793;
}

.done:focus{
  background-color: #6dc793;
}

.cancel:hover{
  background-color: #f0435f;
}

.cancel:focus{
  background-color: #f0435f;
}

.input-group {
    width:100%;
}

.input-group .ng-invalid {
    border: 2px solid #e74c3c;
    border-radius: 3px;
}

/* Error Box */

.alert{
  padding: 15px;
  margin-bottom: 20px;
  border: 1px solid transparent;
  border-radius: 2px;
  border-color: #e85a71;
  background-color:  #e85a71;
  color: white;
  
}

.help-block {
    font-size: 12px;
    color: white
}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


</head>

<body translate="no" >
  <body ng-controller="RegisterCtrl" ng-app="myApp">
 <div class="container">
   <div id="signup">
      <div class="signup-screen">
         <div class="space-bot text-center">
            <h1>Sign up</h1>
           <div class="divider"></div>
         </div>
           <form class="form-register" method="post" name="register" novalidate>
	            <div class="input-field col s6">
              <input id="first-name" type="text" class="validate" required>
              <label for="first-name">First Name</label>
            </div>
            <div class="input-field col s6">
              <input id="last-name" type="text" class="validate" required>
              <label for="last-name">Last Name</label>
             </div>
             <div class="input-field col s6">
              <input id="email" type="email" name="email" ng-model="email" class="validate" required>
              <label for="email">Email</label>
             </div>
             <p class="alert alert-danger" ng-show="form-register.email.$error.email">Your email is invalid.</p>
             <div class="input-field col s6">
               <input id="password" type="password" name="password" ng-model="password" ng-minlength='6' class="validate" required>
               <label for="password">Password</label>
              </div>
              <p class="alert alert-danger" ng-show="form-register.password.$error.minlength || form.password.$invalid">Your password must be at least 6 characters.</p>
              <div class="space-top text-center">
               <button ng-disabled="form-register.$invalid" class="waves-effect waves-light btn done">
               <i class="material-icons left">done</i> Done
               </button>
               <button type="button" class="waves-effect waves-light btn cancel">
               <i class="material-icons left">clear</i>Cancel
               </button>
              </div>
             </form>
           </div>
        </div>
    </div>
</body>
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>

  <script src='https://code.jquery.com/jquery-2.1.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js'></script>
      <script id="rendered-js" >
var myApp = angular.module("myApp", []);
myApp.controller("RegisterCtrl", function ($scope) {

});
//# sourceURL=pen.js
    </script>

  

</body>

</html>
 
