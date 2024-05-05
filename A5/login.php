<style>
    /*//////////////////////////////////////////////////////////////////
[ FONT ]*/

    @font-face {
        font-family: Poppins-Regular;
        src: url('A5/Login_v1/fonts/poppins/Poppins-Regular.ttf');
    }

    @font-face {
        font-family: Poppins-Bold;
        src: url('A5/Login_v1/fonts/poppins/Poppins-Bold.ttf');
    }

    @font-face {
        font-family: Poppins-Medium;
        src: url('A5/Login_v1/fonts/poppins/Poppins-Medium.ttf');
    }

    @font-face {
        font-family: Montserrat-Bold;
        src: url('A5/Login_v1/fonts/montserrat/Montserrat-Bold.ttf');
    }


    /*//////////////////////////////////////////////////////////////////
[ RESTYLE TAG ]*/

    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }

    body,
    html {
        height: 100%;
        font-family: Arial, Helvetica, sans-serif;
    }


    /*---------------------------------------------*/

    a {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 14px;
        line-height: 1.7;
        color: #666666;
        margin: 0px;
        transition: all 0.4s;
        -webkit-transition: all 0.4s;
        -o-transition: all 0.4s;
        -moz-transition: all 0.4s;
    }

    a:focus {
        outline: none !important;
    }

    a:hover {
        text-decoration: none;
        color: #57b846;
    }


    /*---------------------------------------------*/

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin: 0px;
    }

    p {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 14px;
        line-height: 1.7;
        color: #666666;
        margin: 0px;
    }

    ul,
    li {
        margin: 0px;
        list-style-type: none;
    }


    /*---------------------------------------------*/

    input {
        outline: none;
        border: none;
    }

    textarea {
        outline: none;
        border: none;
    }

    textarea:focus,
    input:focus {
        border-color: transparent !important;
    }

    input:focus::-webkit-input-placeholder {
        color: transparent;
    }

    input:focus:-moz-placeholder {
        color: transparent;
    }

    input:focus::-moz-placeholder {
        color: transparent;
    }

    input:focus:-ms-input-placeholder {
        color: transparent;
    }

    textarea:focus::-webkit-input-placeholder {
        color: transparent;
    }

    textarea:focus:-moz-placeholder {
        color: transparent;
    }

    textarea:focus::-moz-placeholder {
        color: transparent;
    }

    textarea:focus:-ms-input-placeholder {
        color: transparent;
    }

    input::-webkit-input-placeholder {
        color: #999999;
    }

    input:-moz-placeholder {
        color: #999999;
    }

    input::-moz-placeholder {
        color: #999999;
    }

    input:-ms-input-placeholder {
        color: #999999;
    }

    textarea::-webkit-input-placeholder {
        color: #999999;
    }

    textarea:-moz-placeholder {
        color: #999999;
    }

    textarea::-moz-placeholder {
        color: #999999;
    }

    textarea:-ms-input-placeholder {
        color: #999999;
    }


    /*---------------------------------------------*/

    button {
        outline: none !important;
        border: none;
        background: transparent;
    }

    button:hover {
        cursor: pointer;
    }

    iframe {
        border: none !important;
    }


    /*//////////////////////////////////////////////////////////////////
[ Utility ]*/

    .txt1 {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 13px;
        line-height: 1.5;
        color: #999999;
    }

    .txt2 {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 13px;
        line-height: 1.5;
        color: #000;
    }


    /*//////////////////////////////////////////////////////////////////
[ login ]*/

    .limiter {
        width: 100%;
        margin: 0 auto;
    }

    .container-login100 {
        width: 100%;
        min-height: 100vh;
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        padding: 15px;
        background: #9053c7;
        background: -webkit-linear-gradient(-135deg, #14224c, #3d4d6a);
        background: -o-linear-gradient(-135deg, #14224c, #3d4d6a);
        background: -moz-linear-gradient(-135deg, #14224c, #3d4d6a);
        background: linear-gradient(-135deg, #14224c, #3d4d6a);
    }

    .wrap-login100 {
        width: 960px;
        margin-top: 30px;
        background: rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        overflow: hidden;
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        padding: 90px 130px 33px 95px;
        box-shadow: 5px 8px rgba(0, 0, 0, 0.2);
    }


    /*------------------------------------------------------------------
[  ]*/

    .login100-pic {
        width: 316px;
    }

    .login100-pic img {
        margin-top: -17px;
        max-width: 100%;
        padding-bottom: 50px;
    }


    /*------------------------------------------------------------------
[  ]*/

    .login100-form {
        width: 310px;
    }

    .login100-form-title {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 28px;
        font-weight: 600;
        color: #fff;
        line-height: 1.2;
        text-align: center;
        width: 100%;
        display: block;
        padding-bottom: 54px;
    }


    /*---------------------------------------------*/

    .wrap-input100 {
        position: relative;
        width: 100%;
        z-index: 1;
        margin-bottom: 10px;
    }

    .input100 {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 15px;
        line-height: 1.5;
        color: #666666;
        display: block;
        width: 100%;
        background: #e6e6e6;
        height: 50px;
        border-radius: 25px;
        padding: 0 30px 0 30px;
    }


    /*------------------------------------------------------------------
[ Focus ]*/

    .focus-input100 {
        display: block;
        position: absolute;
        border-radius: 25px;
        bottom: 0;
        left: 0;
        z-index: -1;
        width: 100%;
        height: 100%;
        box-shadow: 0px 0px 0px 0px;
        color: #3d57a4;
    }

    .input100:focus+.focus-input100 {
        -webkit-animation: anim-shadow 0.5s ease-in-out forwards;
        animation: anim-shadow 0.5s ease-in-out forwards;
    }

    @-webkit-keyframes anim-shadow {
        to {
            box-shadow: 0px 0px 70px 25px;
            opacity: 0;
        }
    }

    @keyframes anim-shadow {
        to {
            box-shadow: 0px 0px 70px 25px;
            opacity: 0;
        }
    }

    .symbol-input100 {
        font-size: 15px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        position: absolute;
        border-radius: 25px;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        padding-left: 35px;
        pointer-events: none;
        color: #666666;
        -webkit-transition: all 0.4s;
        -o-transition: all 0.4s;
        -moz-transition: all 0.4s;
        transition: all 0.4s;
    }

    .input100:focus+.focus-input100+.symbol-input100 {
        color: #3d57a4;
        padding-left: 28px;
    }


    /*------------------------------------------------------------------
[ Button ]*/

    .container-login100-form-btn {
        width: 100%;
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        padding-top: 20px;
    }

    .login100-form-btn {
        font-family: Montserrat-Bold;
        font-size: 15px;
        line-height: 1.5;
        color: #fff;
        text-transform: uppercase;
        width: 100%;
        height: 50px;
        border-radius: 25px;
        background: #1f3661;
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0 25px;
        -webkit-transition: all 0.4s;
        -o-transition: all 0.4s;
        -moz-transition: all 0.4s;
        transition: all 0.4s;
        cursor: pointer;
    }

    .login100-form-btn:hover {
        background: #3e5b91;
    }


    /*------------------------------------------------------------------
[ Responsive ]*/

    @media (max-width: 992px) {
        .wrap-login100 {
            padding: 177px 90px 33px 85px;
        }

        .login100-pic {
            width: 35%;
        }

        .login100-form {
            width: 50%;
        }
    }

    @media (max-width: 768px) {
        .wrap-login100 {
            padding: 100px 80px 33px 80px;
        }

        .login100-pic {
            display: none;
        }

        .login100-form {
            width: 100%;
        }
    }

    @media (max-width: 576px) {
        .wrap-login100 {
            padding: 100px 15px 33px 15px;
        }
    }


    /*------------------------------------------------------------------
[ Alert validate ]*/

    .validate-input {
        position: relative;
    }

    .alert-validate::before {
        content: attr(data-validate);
        position: absolute;
        max-width: 70%;
        background-color: white;
        border: 1px solid #c80000;
        border-radius: 13px;
        padding: 4px 25px 4px 10px;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -moz-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        -o-transform: translateY(-50%);
        transform: translateY(-50%);
        right: 8px;
        pointer-events: none;
        font-family: Arial, Helvetica, sans-serif;
        color: #c80000;
        font-size: 13px;
        line-height: 1.4;
        text-align: left;
        visibility: hidden;
        opacity: 0;
        -webkit-transition: opacity 0.4s;
        -o-transition: opacity 0.4s;
        -moz-transition: opacity 0.4s;
        transition: opacity 0.4s;
    }

    .alert-validate::after {
        content: "\f06a";
        font-family: FontAwesome;
        display: block;
        position: absolute;
        color: #c80000;
        font-size: 15px;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -moz-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        -o-transform: translateY(-50%);
        transform: translateY(-50%);
        right: 13px;
    }

    .alert-validate:hover:before {
        visibility: visible;
        opacity: 1;
    }

    @media (max-width: 992px) {
        .alert-validate::before {
            visibility: visible;
            opacity: 1;
        }
    }

    .custom-error-message {
        color: #000;
    }
</style>
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="A5/assets/img/clients/perfume.png" alt="IMG">
            </div>

            <form action="index.php?act=login" method="post" class="login100-form validate-form">
                <span class="login100-form-title">
                    Đăng Nhập
                </span>

                <div class="wrap-input100 validate-input">
                    <input class="input100" type="text" name="username" placeholder="Tên đăng nhập">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input">
                    <input class="input100" type="password" id="password" name="password" placeholder="Nhập mật khẩu">
                    <span class="focus-input100"></span>
                    <input type="checkbox" value="" id="show-password-toggle">
                    <label for="show-pass" style="color: #000;">Hiện mật khẩu</label>
                </div>
                <div class="container-login100-form-btn">
                    <input type="submit" class="login100-form-btn" name="login" value="Đăng Nhập">
                </div>

                <div class="text-center p-t-136">
                    <a class="txt2" href="index.php?act=register">
                        Tạo tài khoản của bạn
                        <i classden="true"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
<!--===============================================================================================-->
<script src="A5/Login_v1/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="A5/Login_v1/vendor/bootstrap/js/popper.js"></script>
<script src="A5/Login_v1/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="A5/Login_v1/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="A5/Login_v1/vendor/tilt/tilt.jquery.min.js"></script>
<script>
    $('.js-tilt').tilt({
        scale: 1.1
    })

    const passwordInput = document.getElementById("password");
    const showPasswordToggle = document.getElementById("show-password-toggle");

    showPasswordToggle.addEventListener("click", () => {
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            showPasswordToggle.textContent = "Hide";
        } else {
            passwordInput.type = "password";
            showPasswordToggle.textContent = "Show";
        }
    });
</script>