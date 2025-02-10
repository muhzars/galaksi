<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - Galaksi Evaluator</title>
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

        .school-card {
            background: white;
            padding: 15px;
            width: 80rem;
            border-radius: 10px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }

        .school-card:hover {
            background: #007bff;
            color: white;
            transform: scale(1.05);
        }

        @media only screen and (max-width: 600px) {
            .school-card {
                width: 20rem;
            }
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
    </style>
</head>
<body>

    <div class="navbar">
        <div class="logo">Galaksi Evaluator</div>
    </div>

    <div class="container-home">
        <div class="content-home">
            <div class="school-card" onclick="redirectToForm()">SMPN 1 KARAWANG BARAT</div>
            <div class="school-card" onclick="redirectToForm()">SMPN 2 KARAWANG BARAT</div>
            <div class="school-card" onclick="redirectToForm()">SMPN 3 KARAWANG BARAT</div>
            <div class="school-card" onclick="redirectToForm()">SMPN 4 KARAWANG BARAT</div>
            <div class="school-card" onclick="redirectToForm()">SMPN 5 KARAWANG BARAT</div>
            <div class="school-card" onclick="redirectToForm()">SMPN 6 KARAWANG BARAT</div>
        </div>        
    </div>
    <script>
        function redirectToForm() {
            window.location.href = "<?php echo e(route('form')); ?>";
        }
    </script>    
</body>
</html>
<?php /**PATH C:\laragon\www\galaksi\resources\views/home.blade.php ENDPATH**/ ?>