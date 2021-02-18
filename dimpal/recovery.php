<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<form  method="POST" action = "<?php echo htmlentities($_SERVER['PHP_SELF']);?>">
        <div class="forget-box" style = "max-width: 100%;
                                       height: 50%;
                                       top: 50%;
                                       left: 50%;
                                       position: absolute;
                                       transform: translate(-50% , -50%);
                                       padding: 60px 40px 50px 40px;
                                       background: rgb(243, 241, 241);
                                       ">
           <h1>
               Forget password
           </h1>
           <div class="textbox">
            
                 <input type="email" placeholder="email" name="email" value="">
            </div>
         

          <button class="btn" name = "SUBMIT" type="submit">Send Email</button>
           
        
        </div>
    </form>
</body>
</html>