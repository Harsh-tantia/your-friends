<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Login and Signup</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<style>
    body {
      background: hsl(47, 85%, 72%);
    }
    
    .register-container {
      margin: auto;
      width: 650px;
      height: 550px;
      position: relative;
    }
    
    .welcome {
      background: #f6f6f6;
      width: 650px;
      height: 415px;
      position: absolute;
      top: 25%;
      border-radius: 5px;
      box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.1);
    }
    
    .pinkbox {
      position: absolute;
      top: -10%;
      left: 5%;
      background: #C70039;
      width: 320px;
      height: 500px;
      border-radius: 5px;
      box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
      transition: all 0.5s ease-in-out;
      z-index: 2;
    }
    
    .nodisplay {
      display: none;
      transition: all 0.5s ease;
    }
    
    .leftbox,
    .rightbox {
      position: absolute;
      width: 50%;
      transition: 1s all ease;
    }
    
    .leftbox {
      left: -2%;
    }
    .rightbox {
      right: -2%;
    }
    
    h1 {
      font-family: 'Open Sans', sans-serif;
      text-align: center;
      margin-top: 95px;
      text-transform: uppercase;
      color: #f6f6f6;
      font-size: 2em;
      letter-spacing: 8px;
    }
    
    .title {
      font-family: 'Lora', serif;
      color: #8E9AAF;
      font-size: 1.8em;
      line-height: 1.1em;
      letter-spacing: 3px;
      text-align: center;
      font-weight: 300;
      margin-top: 20%;
    }
    .desc {
      margin-top: -8px;
    }
    .account {
      margin-top: 45%;
      font-size: 10px;
    }
    p {
      font-family: 'Open Sans', sans-serif;
      font-size: 0.7em;
      letter-spacing: 2px;
      color: #8E9AAF;
      text-align: center;
    }
    
    span {
      color: #C70039;
    }
    
    .flower {
      position: absolute;
      width: 120px;
      height: 120px;
      top: 46%;
      left: 29%;
      opacity: 0.7;
    }
    
    .smaller {
      width: 90px;
      height: 100px;
      top: 48%;
      left: 38%;
      opacity: 0.9;
    }
    
    button {
      padding: 12px;
      font-family: 'Open Sans', sans-serif;
      text-transform: uppercase;
      letter-spacing: 3px;
      font-size: 11px;
      border-radius: 10px;
      margin: auto;
      outline: none;
      display: block;
      cursor: pointer;
    }
    .button {
      margin-top: 3%;
      background: #f6f6f6;
      color: #C70039;
      border: solid 1px #C70039;
    }
    
    form {
      display: flex;
      align-items: center;
      flex-direction: column;
      padding-top: 7px;
    }
    .more-padding {
      padding-top: 35px;
    }
    input {
      background: #C70039;
      width: 65%;
      color: #000000;
      border: none;
      border-bottom: 1px solid rgba(246, 246, 246, 0.5);
      padding: 9px;
      margin: 7px;
    }
    input::placeholder {
      color: rgba(246, 246, 246, 1);
      letter-spacing: 2px;
      font-size: 1.3em;
      font-weight: 100;
    }
    input:focus {
      color: #000000;
      outline: none;
      border-bottom: 1.2px solid rgba(234, 199, 204, 0.7);
      font-size: 1em;
    }
    label {
      font-family: 'Open Sans', sans-serif;
      color: #000000;
      font-size: 0.8em;
      letter-spacing: 1px;
    }
    .checkbox {
      display: inline;
      white-space: nowrap;
      position: relative;
      left: -62px;
      top: 5px;
    }
    input[type=checkbox] {
      width: 7px;
      background: #C70039;
    }
    .checkbox input[type="checkbox"]:checked + label {
      color: #000000;
    }
    </style>
<div class="register-container">
  <div class="welcome">
    <div class="pinkbox">
      <div class="signup nodisplay">
        <h1>register</h1>
        <form autocomplete="off" action="./php/">
          <input type="text" placeholder="username">
          <input type="email" placeholder="email">
          <input type="password" placeholder="password">
          <input type="password" placeholder="confirm password">
          <button class="button submit">create account</button>
        </form>
      </div>
      <div class="signin">
        <h1>Login in</h1>
        <form class="more-padding" autocomplete="off" action="login.php">
          <input type="text" placeholder="username">
          <input type="password" placeholder="password">
          <div class="checkbox">
            <input type="checkbox" id="remember" /><label for="remember">remember me</label>
          </div>
          <button class="button submit">login</button>
        </form>
      </div>
    </div>
    <div class="leftbox">
      <h2 class="title"><span>YOUR</span> <br>FRIEND'S</h2>
      <p class="desc">pick your perfect <span>PACKAGES</span></p>
      <img class="flower smaller" src="../assets/images/login.png" alt="1357d638624297b" border="0">
      <p class="account">have an account?</p>
      <button class="button" id="signin">login</button>
    </div>
    <div class="rightbox">
      <h2 class="title"><span>YOUR</span> <br>FRIEND'S</h2>
      <p class="desc"> pick your perfect <span>PACKAGES</span></p>
      <img class="flower" src="../assets/images/create account.png">
      <p class="account">don't have an account?</p>
      <button class="button" id="signup">Register</button>
    </div>
  </div>
</div>

<script>
  $(document).ready(function() {
    $('#signup').click(function() {
      $('.pinkbox').css('transform', 'translateX(80%)');
      $('.signin').addClass('nodisplay');
      $('.signup').removeClass('nodisplay');
    });

    $('#signin').click(function() {
      $('.pinkbox').css('transform', 'translateX(0%)');
      $('.signup').addClass('nodisplay');
      $('.signin').removeClass('nodisplay');
    });
  });
</script>

</body>
</html>
