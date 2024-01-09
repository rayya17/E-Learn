<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>403 Forbidden</title>
    <style>
        * {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
        }

        body {
            margin: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #f5f5f5;
        }

        .forbidden-page {
            max-width: 600px;
            width: 80%;
            box-shadow: 0px 0px 8px 1px #ccc;
            background: #fff;
            border-radius: 8px;
            text-align: center;
            padding: 30px;
        }

        img {
            width: 100%;
            max-height: 300px;
            height: auto;
            margin: 0 0 15px;
        }

        h1 {
            font-size: 36px;
            margin: 10px 0;
            color: #ff6347; /* Tomata color */
        }

        p {
            font-size: 18px;
            margin: 16px 0 24px;
        }

        button {
            border-radius: 50px;
            padding: 10px 30px;
            font-size: 18px;
            cursor: pointer;
            background: #62AD9B;
            color: #fff;
            border: none;
            box-shadow: 0 4px 8px 0 #ccc;
        }
    </style>
</head>
<body>
    <div class="forbidden-page">
        <div style="text-align:center;">
            <img src="https://www.hostinger.co.id/tutorial/wp-content/uploads/sites/11/2017/08/403-forbidden.webp" alt="403 Forbidden">
        </div>
        <h1>403 Forbidden</h1>
        <p>Anda tidak memiliki izin untuk mengakses halaman ini.</p>
        <button id="backButton">Kembali ke Home</button>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var backButton = document.querySelector("#backButton");

            backButton.addEventListener("click", function () {
                window.history.back();
            });
        });
    </script>
</body>
</html>
