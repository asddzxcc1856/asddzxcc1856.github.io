<!DOCTYPE html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
    <style>
        body
        {
            background-image: linear-gradient(to right, grey, pink);
            width: 1400px;
            height: 3000px;
        }
       * 
        {
        box-sizing: border-box;
        }
        header
        {
            background-image: url("coffee.jpg");
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100% 400px;
            height: 400px;
            width: 100%;
            color: white;
            padding: 100px;
            font-style: fantasy;
            font-size: 200%;
            text-align: center;
            opacity: 0.9;
            border-radius: 20px;
            box-shadow: 0 0 20px black;
        }
        div.d
        {
            position: relative;
            float: left;
            width: 20%;
            height: 50px;
            margin: 30px;
            padding: 10px;
            display: inline-block;
            color: black;
            font-size: 125%;
            font-family: impact;
            text-indent: 90px;
            text-shadow: 0 0 20px black;
            border-radius: 20px;
            background-image: linear-gradient(to right, gray, blue);
            box-shadow: 0 0 20px black;
        }
        div.d:hover
        {
            background-image: linear-gradient(to right, gray, orange);
        }
        div.d span
        {
            opacity: 0;
        }
        div.d:hover > span 
        {
            position: relative;
            height: 50px;
            top: 10px;
            display: block;
            border-bottom: 2px solid #808000;
            background-color: #c0c0c0;
            opacity: 0.9;
            transition: opacity 1s;
            border-radius: 20px;
            box-shadow: 0px 0px 2px black;
        }
        @media (max-width="800")
        {
            div.d
            {
                width: 100%;
            }
        }
        div.d span a div
        {
            visibility: hidden;
        }
        div.d span a div:before
        {
            content: "";
            position: absolute;
            top: 25%;
            left: -15%;
            border-width: 10px;
            border-style: solid;
            border-color:  transparent black transparent transparent ;
            
        }
        {
            visibility: hidden;
        }
        div.d span a:hover > div
        {
            visibility: visible;
            background-color: black;
            text-align: center;
            text-indent: 0px;
            width: 100px;
            height: 35px;
            top: 0%;
            color: white;
            left: 60%;
            position: absolute;
        }
        div.d span:hover
        {
            background-color: #808040;
        }
        div.d span span
        {
            opacity: 0;
        }
        div.d span > a
        {
            text-decoration: none;
        }
        div.d > span:hover 
        {
            margin: -20px;
            margin-top: 0px;
            margin-bottom: 0px;
            transition-property: margin;
            transition-delay: 0s;
        }
        div.e
        {
            width: 80px;
            height: 80px;
            top: 120px;
            left: 50%;
            position: absolute;
            display: block;
            border-radius: 100px;
            background-color: black;
            animation-name: example;
            animation-duration: 6s;
            animation-iteration-count: infinite;
            animation-direction: alternate;
        }
        @keyframes example 
        {
            0%
            {
                background-color: orange;
                top: 500px;
                left: 10%;
            }
            50%
            {
                background-color: yellow;
                top: 500px;
                left: 90%;
            }
            100%
            {
                background-color: green;
                top: 500px;
                left: 10%;
            }
        }
        div.p
        {
            margin: 0px;
            padding: 0px;
            width: 100%;
            height: 800px;
            font-family: impact;
            font-size: 125%;
            display: inline-block;
            position: relative;
            float: left;
            background-color: pink;
            opacity: 0.8;
            top: 300px;
            box-shadow: 0px 0px 20px black;
        }
        div.p > span#a
        {
            left: 0%;
            width: 20%;
            height: 800px;
            font-family: impact;
            font-size: 150%;
            padding: 30px;
            top: 0px;
            display: block;
            position: absolute;
            background-image: linear-gradient(to right, #ff8040, green);
            border-right: 1px solid grey;
        }
        div.p > span#b
        {
            left: 20%;
            width: 60%;
            height: 800px;
            font-family: impact;
            font-size: 150%;
            padding: 30px;
            top: 0px;
            display: block;
            position: absolute;
            background-image: linear-gradient(to right, orange, yellow);
            border-right: 1px solid grey;
        }
        div.p > span#c
        {
            left: 80%;
            width: 20%;
            height: 800px;
            font-family: impact;
            font-size: 150%;
            padding: 30px;
            top: 0px;
            display: block;
            position: absolute;
            background-image: linear-gradient(to right, #ff8040, green);
        }
        div.p span#a > p
        {
            font-family: fantasy;
            font-size: 60%;
            text-align: left;
        }
        div.p span#b > p
        {
            font-family: fantasy;
            font-size: 60%;
            text-align: left;
        }
        div.p span#c > p
        {
            font-family: fantasy;
            font-size: 60%;
            text-align: left;
        }
        footer
        {
            width: 100%;
            font-family: impact;
            margin-top: 3000px;
            font-size: 110%;
            padding: 30px;
            display: block;
            background-image: linear-gradient(to right, #ff8040, green);
        }
        
   </style>
</head>    
<script>
        function mydate()
        {
            document.getElementById("demo").innerHTML = "Paragraph changed.";
        }
</script>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>嚕踢c++筆記</title>
<html>
<body>
<header>MY Coding note</header>
<div class="e"></div>
<div class="d">簡介
<span><a href="index.php"">主頁面<div>點我連結</div></a></span>
<span><a href="algorithm.php">演算法<div>點我連結</div></a></span>
<span><a href="code.php">題目建議表<div>點我連結</div></a></span>
</div>
<div class="d">功能02
<span><a href="#">功能1</a></span>
<span><a href="#">功能2</a></span>
<span><a href="#">功能3</a></span>
</div>
<div class="d">功能03
<span><a href="#">功能1</a></span>
<span><a href="#">功能2</a></span>
<span><a href="#">功能3</a></span>
</div>
<div class="d">功能04
<span><a href="#">功能1</a></span>
<span><a href="#">功能2</a></span>
<span><a href="#">功能3</a></span>
</div>
<footer id="demo">站址 : https://asddzxcc1856.github.io/index.html</footer>
<button  type="button" onclick="mydate()">look time</button>
<p id="demo">A Paragraph</p>

</html>