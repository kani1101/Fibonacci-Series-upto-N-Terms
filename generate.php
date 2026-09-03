<!DOCTYPE html>
<html>
<head>
    <title>Generate Fibonacci Series</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial;
        }

        body{

            background-image:url('https://images.unsplash.com/photo-1509228627152-72ae9ae6848d?q=80&w=1600');

            background-size:cover;
            background-position:center;
            background-repeat:no-repeat;
            background-attachment:fixed;

            min-height:100vh;
        }

        /* Dark Overlay */

        .overlay{

            background:rgba(0,0,0,0.6);

            min-height:100vh;

            padding-bottom:40px;
        }

        /* Header */

        .header{

            background:rgba(0,0,0,0.7);

            color:white;

            text-align:center;

            padding:20px;

            font-size:38px;

            font-weight:bold;

            letter-spacing:2px;
        }

        /* Main Container */

        .container{

            width:700px;

            margin:50px auto;

            background:rgba(255,255,255,0.93);

            padding:35px;

            border-radius:15px;

            box-shadow:0 5px 20px rgba(0,0,0,0.5);
        }

        h2{

            color:#0b2341;

            margin-bottom:25px;

            text-align:center;
        }

        /* Input */

        input[type=number]{

            width:100%;

            padding:15px;

            margin-top:10px;

            border:1px solid #ccc;

            border-radius:8px;

            font-size:18px;
        }

        /* Button */

        button{

            width:100%;

            padding:15px;

            margin-top:20px;

            background:#ff9800;

            color:white;

            border:none;

            border-radius:8px;

            font-size:20px;

            cursor:pointer;

            transition:0.3s;
        }

        button:hover{
            background:#e68900;
        }

        /* Result */

        .result{

            margin-top:30px;

            background:#f5f5f5;

            padding:25px;

            border-radius:10px;

            text-align:center;
        }

        .series{

            color:green;

            font-size:30px;

            font-weight:bold;

            margin-top:15px;

            word-spacing:10px;
        }

        /* Footer */

        .footer{

            background:rgba(0,0,0,0.7);

            color:white;

            text-align:center;

            padding:15px;

            margin-top:40px;
        }

    </style>

</head>

<body>

<div class="overlay">

<!-- Header -->

<div class="header">
    Fibonacci Series Generator
</div>

<!-- Main Container -->

<div class="container">

    <h2>Enter Number of Terms</h2>

    <form method="POST">

        <input type="number"
               name="num"
               placeholder="Enter N value"
               required>

        <button type="submit" name="generate">
            Generate Fibonacci Series
        </button>

    </form>

<?php

if(isset($_POST['generate']))
{
    $n = $_POST['num'];

    $a = 0;
    $b = 1;

    $series = "";

    if($n >= 1)
    {
        $series .= $a . " ";
    }

    if($n >= 2)
    {
        $series .= $b . " ";
    }

    for($i=3; $i<=$n; $i++)
    {
        $c = $a + $b;

        $series .= $c . " ";

        $a = $b;
        $b = $c;
    }

    echo "<div class='result'>";

    echo "<h2>Fibonacci Series</h2>";

    echo "<div class='series'>$series</div>";

    echo "</div>";
}

?>

</div>

<!-- Footer -->

<div class="footer">
    © 2026 Fibonacci Series Project
</div>

</div>

</body>
</html>