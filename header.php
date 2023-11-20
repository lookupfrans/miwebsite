<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stevenhoven Store</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC&amp;display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="icon" type="image/png" sizes="180x180" href="favo.png">
    <style>
        h2 {
            font-size: 30px;
            border-bottom: 1px solid #000;
            padding-bottom: 5px;
            font-family: 'Amatic SC', sans-serif;
            font-size: 90px;
            font-weight: bold;
            margin-left: 190px;
            width: 100%;
            opacity: 0.8;
        }

        .container {
            padding: 20px;
            max-width: 850px;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin-left: 190px;
            
        }

        nav li {
            display: inline;
            margin-right: 10px;
            background: #000;
            padding: 5px 5px 5px 5px;
            border: 1px solid #fff;
        }

         nav li:hover {
             background: brown;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            font-size: 10px;
            font-family: montserrat, sans-serif;
        }

         .content {
              display: none;
        }
    
        .loader > .image-title {
          height: 200px;
          width: 100px;
          justify-content: center;
          align-items: center;
          text-align: center;
          /*border-top-color: #2a88e6;
          border: 15px solid #45474b;*/
          /*position: absolute;*/
          background-image: url(../img/jpg6.jpg);
          margin: auto;
          margin-bottom: 400px;
          top: 0;
          bottom: 0;
          left: 0;
          right: 0;
          border-radius: 0;
          animation: fadeOut 1s infinite linear;
          /*-webkit-animation-duration: 5s;animation-duration: 1s;*/
          /*-webkit-animation-fill-mode: both;animation-fill-mode: both;*/
        }
        
        @keyframes fadeOut {
          0% {opacity: 1;}
          100% {opacity: 0;} 
        }
    </style>
</head>

<body>
    <div class="loader" style="text-align:center;height:100vh; width:100vw;overflow:hidden;background:#000;">
    <img class="image-title" alt="" src="logo.jpg" style="width: 20%; height:20%;position:absolute;"/>
    <div></div>
  </div>
  <div class="content">
    <div class="container">
        <h2 style="font-size:90px;">Stevenhoven Store</h2>

        <nav>
            <ul>
                <li><a href="#" id="en">English</a></li>
                <li><a href="#" id="es">Indonesia</a></li>
            </ul>
        </nav>
    </div>
  </div>

       <script>
    $(window).on('load', function () {
      $(".loader").fadeOut(5000);
      $(".content").fadeIn(5000);
    });
</body>

</html>
