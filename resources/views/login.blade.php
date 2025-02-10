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
        height: 30vh;
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
        height: 70vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    form {
        display: flex;
        flex-direction: column;
        gap: 15px;
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        width: 300px;
    }

    input {
        padding: 12px;
        font-size: 16px;
        border: 2px solid #ddd;
        border-radius: 5px;
        transition: 0.3s;
        outline: none;
    }

    input:focus {
        border-color: #00aaff;
        box-shadow: 0px 0px 5px rgba(0, 170, 255, 0.5);
    }

    button {
        padding: 12px;
        font-size: 16px;
        background: #00aaff;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
    }

    button:hover {
        background: #0088cc;
    }
</style>
<body>
    <div class="container-login">
        <div class="header-login">
            <h1>Galaksi Evaluator</h1>
        </div>
        <div class="content-login">
            @csrf
            <form action="/login" method="POST">
                <h2 style="text-align: center;">Login</h2>
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="password" placeholder="Password">
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>
