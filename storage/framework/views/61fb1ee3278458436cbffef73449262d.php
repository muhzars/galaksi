<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nilai - Galaksi</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Arial, sans-serif;
            background: #f4f4f4;
        }

        /* Navbar Styling */
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

        .navbar .menu {
            display: flex;
            gap: 20px;
            margin-right: 2rem;
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

        /* Header Styling */
        .header {
            text-align: center;
            padding: 100px 20px 20px;
        }

        .kop h1 {
            font-size: 28px;
            color: #0056b3;
        }

        .kop h2 {
            font-size: 20px;
            color: #333;
        }

        .regu h2 {
            font-size: 18px;
            color: #666;
        }

        /* Table Styling */
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background: white;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        thead {
            background: #007bff;
            color: white;
        }

        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }

        tbody tr:nth-child(even) {
            background: #f9f9f9;
        }

        tbody tr:hover {
            background: #ddd;
            cursor: pointer;
        }
        .sign-container{
            text-align: center;
            padding: 100px 20px 20px;
            margin-left: 5rem;
        }

        /* Responsive Design */
        @media only screen and (max-width: 600px) {
            table {
                width: 95%;
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
        <div class="logo">Galaksi Of The Red Cross</div>
        <div class="menu">
        </div>
    </div>

    <div class="header">
        <div class="kop">
            <h1>Rekap Nilai Lomba Tandu Darurat</h1>
            <h2>Galaksi Of The Red Cross</h2>
            <h2>MAN 2 Karawang</h2>
            <h2>Tahun 2025</h2>
        </div>
        <div class="regu">
            <h2>Regu : __________</h2>
            <h2>Waktu : __________</h2>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Kriteria</th>
                <th>Juri 1</th>
                <th>Juri 2</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Kekuatan</td>
                <td>5</td>
                <td>5</td>
                <td>50</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Kerapihan</td>
                <td></td>
                <td></td>
                <td>10</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Ketepatan</td>
                <td></td>
                <td></td>
                <td>12</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Kesesuaian</td>
                <td></td>
                <td></td>
                <td>28</td>
            </tr>
            <tr style="font-weight: bold; background: #007bff; color: white;">
                <td>5</td>
                <td>Total</td>
                <td colspan="2"></td>
                <td>100</td>
            </tr>
        </tbody>
    </table>
    <div class="sign-container" style="display: flex; flex-direction: row;">
        <div class="sign">
            <p style="margin-bottom: 5rem;">Panitia Rekap</p>
            <p>(__________)</p>
        </div>
        <div class="sign-peserta" style="margin-left: 20rem;">
            <p style="margin-bottom: 5rem;">Peserta</p>
            <p>(__________)</p>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\laragon\www\galaksi\resources\views/hasil.blade.php ENDPATH**/ ?>