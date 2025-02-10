<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - Galaksi</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Arial, sans-serif;
            background: #f4f4f4;
        }

        .navbar {
            background: linear-gradient(to right, #007bff, #0056b3);
            width: 100%;
            height: 60px;
            display: flex;
            justify-content: ;
            align-items: center;
            padding: 0 20px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
        }

        .navbar .logo {
            color: white;
            font-size: 20px;
            font-weight: bold;
            flex-grow: 1;
        }

        .navbar .menu {
            display: flex;
            gap: 20px;
            margin-right: 4rem;
        }

        .navbar .menu a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            transition: color 0.3s;
        }

        .navbar .menu a:hover {
            color: #ffeb3b;
        }

        .container-home {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 80px;
        }

        .content-home {
            margin-top: 20px;
            display: flex;
            gap: 15px;
            flex-direction: column;
        }
        @media only screen and (max-width: 600px) {
            .navbar {
                flex-direction: column;
                height: auto;
                padding: 10px 0;
            }
            .navbar .menu {
                flex-direction: column;
                gap: 10px;
                align-items: center;
            }
        }
        /* Styling untuk input redeem code */
        input#redeemcode {
            width: 300px;
            padding: 10px;
            font-size: 16px;
            border: 2px solid #007bff;
            border-radius: 5px;
            outline: none;
            transition: 0.3s;
        }

        input#redeemcode:focus {
            border-color: #0056b3;
            box-shadow: 0px 0px 8px rgba(0, 91, 187, 0.5);
        }

        /* Styling untuk button */
        button {
            margin-top: 15px;
            padding: 12px 25px;
            font-size: 16px;
            font-weight: bold;
            color: white;
            background: linear-gradient(to right, #007bff, #0056b3);
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }

        button:hover {
            background: linear-gradient(to right, #0056b3, #004095);
            transform: scale(1.05);
        }

    </style>
</head>
<body>

    <div class="navbar">
        <div class="logo">Galaksi Of The Red Cross</div>
        <div class="menu">
            <a href="#">Home</a>
            <a href="#">Rank</a>
        </div>
    </div>

    <div class="container-home">
        <h2>Masukkan Redeem Code</h2>
        <div class="content-home">
            <input type="text" id="redeemcode" placeholder="Reedem Code">
        </div>      
        <button type="submit">Submit</button>  
    </div>  
</body>
</html>
<?php /**PATH C:\laragon\www\galaksi\resources\views/peserta.blade.php ENDPATH**/ ?>