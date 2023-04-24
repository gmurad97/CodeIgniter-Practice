<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        *,
        *::before,
        *::after {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }

        body {
            background-color: #222f3e;
        }

        .container {
            height: 100vh;
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        h1 {
            font-family: "Courier";
            font-size: 48px;
            font-style: italic;
            font-weight: bold;
            color: #10ac84;
            animation: pulseText 1024ms linear infinite alternate;
        }

        @keyframes pulseText {
            from {
                text-shadow: 0px 0px 2px #10ac84;
            }

            to {
                text-shadow: 0px 0px 12px #10ac84;
            }
        }
    </style>
    <div class="container">
        <h1>Welcome To About Page</h1>
    </div>
</body>

</html>