<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you!</title>
</head>
<body>
    <div id="palette">    
        <div id="Actual">
            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 64 64">
                <defs>
                    <linearGradient id="a" x1="100%" x2="0%" y1="0%" y2="100%">
                        <stop offset="0%" stop-color="#FF6A3A"/><stop offset="100%" stop-color="#FF527B"/>
                    </linearGradient>
                </defs>
                <g fill="none">
                    <circle cx="32" cy="32" r="32" fill="url(#a)"/>
                    <path stroke="#FFF" stroke-width="4" d="m18.286 34.686 8.334 7.98 19.094-18.285"/>
                </g>
            </svg>
            <h1 style="font-size: 35px; line-height: 34px;">Thanks for subscribing!</h1>
            <p>A confirmation email has been sent to <b><?php echo $_GET["email"]?></b>. Please open it and click the button inside to confirm your subscription. </p>
            <div id="button_cont">
                <a href="index.php"><button id="button">Dismiss message</button></a>
            </div>
        </div>
    </div>

    <style>
        html, body {
            background-color: rgb(33, 43, 66);
            height: 100%;
            width: 100%;
            padding: 0;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 15px;
        }

        #palette {
            position: relative;
            height: 60%;
            width: 28.5%;
            background-color: white;
            margin: auto;
            border-radius: 24px;
        }

        #Actual {
            position: relative;
            width: 75%;
            height: 75%;
            padding-left: 12.5%;
            padding-right: 12.5%;
            padding-top: 12.5%;
            padding-bottom: 12.5%;
        }

        #button_cont {
            padding-top: 15px;
            height: inherit;
            width: 100%;
            margin: auto;
        }

        #button {
            width: 100%;
            height: 16%;
            color: white;
            background-color: rgb(25, 25, 58);
            border: none;
            border-radius: 5.5px;
        }

        #button:hover {
            cursor: pointer;
            background-image: linear-gradient(270deg, rgb(230, 67, 18), rgb(221, 49, 86));
        }

    </style>
</body>
</html>