<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>About</title>
    <style>
  body {
            background:linear-gradient(to bottom left, blue, whitesmoke,yellow);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            margin: 0;
            background-repeat: no-repeat;
            background-size: 1800px 800px;
        }
        
        header {
            background-color: black;
            position: relative;
            bottom: 30px;
        }
        .intro{
            background-color: b#fec66d
        }
        
        nav {
            background-color: rgba(46, 43, 43, 0.979);
            display: flex;
            justify-content: space-evenly;
            padding: 5px;
            border-radius: 3px;
            font-weight: bold;
        }
        
        h1 {
            text-align: center;
            font-weight: lighter;
            font-size: 50px;
        }
        
        h1 img {
            height: 70px;
            width: 70px;
            position: relative;
            top: 20px;
        }
        
        a {
            text-decoration: none;
            color: azure;
            padding: 2px 6px 2px 6px;
            border-radius: 2px;
        }
        
        .link:hover {
            color: rgba(230, 245, 100, 0.979);
        }
        
        footer {
            text-align: center;
            margin-top: auto;
            background-color: black;
            color: whitesmoke;
            padding: 10px;
        }
        
        .about {
            background:linear-gradient(to bottom left, blue, whitesmoke,yellow);
            margin: auto;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 3px 6px black;
            font-family: Arial, Helvetica, sans-serif;
            position: relative;
            bottom: 13px;
        }
        .about:hover{
            background:linear-gradient(to bottom left, blue, whitesmoke,yellow,pink,orange);
            border-radius: 34px;
            box-shadow: 0 5px 9px wheat;
        }
        
        .fa {
            padding: 10px;
            font-size: 15px;
            width: 15px;
            text-align: center;
            text-decoration: none;
            margin: auto;
            border-radius: 50%;
        }
        
        .fa-facebook {
            background: #3B5998;
            color: white;
        }
           
        .fa-linkedin {
            background: #007bb5;
            color: white;
        }
        
        .fa-instagram {
            background: radial-gradient(circle farthest-corner at 35% 90%, #fec564, transparent 50%), radial-gradient(circle farthest-corner at 0 140%, #fec564, transparent 50%), radial-gradient(ellipse farthest-corner at 0 -25%, #5258cf, transparent 50%), radial-gradient(ellipse farthest-corner at 20% -50%, #5258cf, transparent 50%), radial-gradient(ellipse farthest-corner at 100% 0, #893dc2, transparent 50%), radial-gradient(ellipse farthest-corner at 60% -20%, #893dc2, transparent 50%), radial-gradient(ellipse farthest-corner at 100% 100%, #d9317a, transparent), linear-gradient(#6559ca, #bc318f 30%, #e33f5f 50%, #f77638 70%, #fec66d 100%);
            color: white;
        }

    </style>
</head>

<body>

    <?php include '_header.php'; ?>
     
     <div class="about">
        <div class="intro">
            <h3><b> Developed By:</b></h3>
            <h4>Aakash Yadav</h4>
            <h5><b>I'm Web Development and Designing </h5>
            <p>Welcome you all to Quora website<br/> Our aim is to develop a simple easy Question and Answer website ..</p>
            <p>Simple dynamic website which has the following specifications:</p>
            <ul>
                <li>Any any can a ask a queston on our website  and any one can give the answer on a website</li>
                <li>Flow of the page: Home Page &#x2192; View all Threads &#x2192; Select Threads  &#x2192; View answer of the Thread &#x2192;Give answers of the Threads &#x2192; Take answer of a question   </li>
            </ul>
        </div>
        <div class="contact">
            <h3 style="font-weight:bold">Connect me through:</h3>
            <ul>
                <li><strong>Mobile no:</strong> (+91) 9118048934</li>
                <li><strong>E-mail id:</strong> ay339980@gmail.com</li>
                
        </div>

    </div>
    <div>


    <?php include '_footer.php';?>

</body>
<html>