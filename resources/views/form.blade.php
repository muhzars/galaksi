<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Penilaian - Galaksi Evaluator</title>
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

        .school-card {
            background: white;
            padding: 15px;
            width: 50%;
            border-radius: 10px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .content-form {
            display: flex;
            width: 60%;
            flex-direction: row;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
        }

        .judul h2 {
            text-align: center;
            margin-right: 4rem
        }
        select {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 2px solid #007bff;
            border-radius: 5px;
            background: white;
            cursor: pointer;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            text-align: center;
            font-weight: bold;
            transition: all 0.3s ease-in-out;
        }

        @media only screen and (max-width: 600px) {
            .school-card, .content-form {
                width: 90%;
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
                select {
                    font-size: 12px;  /* Perkecil teks */
                    padding: 6px;  /* Kurangi padding */
                    width: 90%;  /* Pastikan select tidak melewati layar */
                    max-width: 200px;  /* Batasi ukuran maksimal */
                    height: 50px;  /* Kurangi tinggi */
                    display: block;
                    margin: 0 auto; /* Tengahkan elemen select */
                }

                select optgroup {
                    font-size: 12px; /* Perkecil teks optgroup */
                }

                select option {
                    font-size: 12px;
                    padding: 5px;
                }
                

        }

        button[type="submit"] {
            background: linear-gradient(to right, #007bff, #0056b3);
            color: white;
            font-size: 18px;
            font-weight: bold;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s;
            display: block;
            width: 60%;
            margin: 20px auto;
            text-align: center;
        }

        button[type="submit"]:hover {
            background: linear-gradient(to right, #0056b3, #004094);
            transform: scale(1.05);
        }

        .content-form input[type="text"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: border 0.3s, box-shadow 0.3s;
        }

        .content-form input[type="text"]:focus {
            border-color: #007bff;
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.5);
            outline: none;
        }

    </style>
</head>
<body>
    <div class="navbar">
        <div class="logo">Galaksi Evaluator</div>
    </div>
    <form id="form" action="/form" method="POST">
        <div class="container-home">
            <div class="school-card">SMPN 1 KARAWANG BARAT</div>
            <div class="content-form">
                <div class="judul" style="margin-right: 6rem">
                    <h3>Poin A</h3>
                </div>
                <select>
                    <optgroup label="Kurang" style="background-color:red;">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </optgroup>
                    <optgroup label="Sedang" style="background-color:yellow;">
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                    </optgroup>
                    <optgroup label="Baik" style="background-color:blue;">
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                    </optgroup>
                    <optgroup label="Sangat Baik" style="background-color:green;">
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                    </optgroup>
                </select>
            </div>
            <div class="content-form">
                <div class="judul" style="margin-right: 6rem">
                    <h3>Poin A</h3>
                </div>
                <select>
                    <optgroup label="Kurang" style="background-color:red;">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </optgroup>
                    <optgroup label="Sedang" style="background-color:yellow;">
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                    </optgroup>
                    <optgroup label="Baik" style="background-color:blue;">
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                    </optgroup>
                    <optgroup label="Sangat Baik" style="background-color:green;">
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                    </optgroup>
                </select>
            </div>
                <div class="content-form">
                    <div class="judul">
                        <h2>Waktu</h2>
                    </div>
                    <input type="text" placeholder="Waktu Pembuatan" required>
                </div>
                <button type="submit">Update</button>
        </div>
    </form>
    <script>
        document.querySelectorAll('.content-form').forEach(form => {
            form.addEventListener('click', function(event) {
                if (event.target.tagName === 'BUTTON') {
                    form.querySelectorAll('.desc button').forEach(btn => btn.classList.remove('selected'));
                    event.target.classList.add('selected');
                }
            });
        });
    </script>
    
</body>
</html>
