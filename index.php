<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci Series</title>

    <style>

        body{
            margin:0;
            padding:0;
            font-family:Arial;
            background-image:url('https://images.unsplash.com/photo-1509228627152-72ae9ae6848d?q=80&w=1600');
            background-size:cover;
            background-position:center;
            height:100vh;
        }

        .overlay{
            background:rgba(0,0,0,0.6);
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
        }

        .box{

            text-align:center;

            background:rgba(255,255,255,0.9);

            padding:50px;

            border-radius:15px;

            width:500px;
        }

        h1{
            color:#0b2341;
            font-size:45px;
        }

        p{
            font-size:20px;
            color:#333;
        }

        .btn{

            display:inline-block;

            margin-top:25px;

            padding:15px 35px;

            background:#ff9800;

            color:white;

            text-decoration:none;

            border-radius:8px;

            font-size:22px;
        }

        .btn:hover{
            background:#e68900;
        }

    </style>

</head>

<body>

<div class="overlay">

    <div class="box">

        <h1>Fibonacci Series</h1>

        <p>
            Click the button below to generate
            Fibonacci Series upto N terms
        </p>

        <a href="generate.php" class="btn">
            Generate Series
        </a>

    </div>

</div>

</body>
</html>