<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - Galaksi Administrator</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            display: flex;
        }

        .navbar {
            background: linear-gradient(to right, #007bff, #0056b3);
            width: 100%;
            height: 60px;
            display: flex;
            justify-content: space-between;
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
        }

        .sidebar-container {
            width: 250px;
            height: 100vh;
            background: #ffffff;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 60px;
            left: 0;
            padding-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .sidebar-container a {
            display: block;
            width: 80%;
            padding: 10px;
            text-decoration: none;
            color: #333;
            font-size: 16px;
            border-radius: 5px;
            transition: background 0.3s, color 0.3s;
            text-align: center;
            margin: 5px 0;
        }

        .sidebar-container a:hover {
            background: #007bff;
            color: white;
        }

        .content {
            margin-left: 260px;
            padding: 20px;
            margin-top: 80px;
            width: calc(100% - 260px);
        }
        .sidebar-container .active{
            background-color: #007bff;
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
            width: 70rem;
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
            .sidebar-container {
                width: 200px;
            }
            .content {
                margin-left: 210px;
                width: calc(100% - 210px);
            }
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="logo">Galaksi Administrator</div>
    </div>

    <div class="sidebar-container">
        <a href="#" class="active">Pertolongan Pertama</a>
        <a href="#">Remaja Sehat Peduli Sesama</a>
        <a href="#">Penyuluhan</a>
        <a href="#">Karya Relawan</a>
        <a href="#">Paduan Suara</a>
    </div>
    <div class="container-home" style="margin-left: 17rem;">
        <div class="content-home">
            <div class="school-card" onclick="redirectToHasil()">SMPN 1 KARAWANG BARAT</div>
            <div class="school-card" onclick="redirectToHasil()">SMPN 2 KARAWANG BARAT</div>
            <div class="school-card" onclick="redirectToHasil()">SMPN 3 KARAWANG BARAT</div>
            <div class="school-card" onclick="redirectToHasil()">SMPN 4 KARAWANG BARAT</div>
            <div class="school-card" onclick="redirectToHasil()">SMPN 5 KARAWANG BARAT</div>
            <div class="school-card" onclick="redirectToHasil()">SMPN 6 KARAWANG BARAT</div>
        </div>        
    </div>
    <script>
        function redirectToHasil() {
            window.location.href = "<?php echo e(route('hasil')); ?>";
        }
    </script>    
</body>
</html><?php /**PATH C:\laragon\www\galaksi\resources\views/admin_pp.blade.php ENDPATH**/ ?>