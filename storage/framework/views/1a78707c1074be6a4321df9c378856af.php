<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Galaksi Evaluator</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
    body, html {
        margin: 0;
        padding: 0;
        height: 100%;
        font-family: Arial, sans-serif;
        background: linear-gradient(to right, #f0f0f0, #dcdcdc);
    }

    .container-login {
        display: flex;
        flex-direction: column;
        height: 100vh;
    }

    .header-login {
        background: linear-gradient(to right, #00aaff, #005f99);
        height: 70vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        border-radius: 0rem 0rem 2rem 2rem;
        color: white;
        font-size: 24px;
        font-weight: bold;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
    }

    .content-login {
        height: 30vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: row;
        gap: 20px;
    }

    .btn {
        width: 250px;
        padding: 15px;
        font-size: 18px;
        font-weight: bold;
        text-align: center;
        text-decoration: none;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
    }

    .btn-login {
        background: #00aaff;
    }

    .btn-login:hover {
        background: #0088cc;
    }

    .btn-forgot {
        background: #ff4500;
    }

    .btn-forgot:hover {
        background: #cc3700;
    }
    @media only screen and (max-width: 600px) {
        .title-login {
            font-size: 3.8rem;
        }
        .subtitle-login {
            font-size: 1rem;
        }
        .btn {
            width: 150px;
            padding: 10px;
            font-size: 14px;
        }
    }
</style>
<body>
    <div class="container-login">
        <div class="header-login">
            <h1 class="title-login">Galaksi Evaluator</h1>
            <h2 class="subtitle-login" style="font-size: 2rem;">Selamat datang di perlombaan para planet!</h2>
        </div>
        <div class="content-login">
            <a href="/login" class="btn btn-login">Login</a>
            <a class="btn btn-forgot" onclick="window.location.href='https://wa.me/+6289639876962?text=Halo%20Admin,%20saya%20lupa%20password%20akun%20saya.'">Forgot Password</a>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\laragon\www\galaksi\resources\views/landing.blade.php ENDPATH**/ ?>