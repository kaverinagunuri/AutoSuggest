<?php  
include 'connect.php';




?>
<html>
    <head>
        <title>
            Auto Suggest Field
        </title>
        <link rel="stylesheet" href="style.css"/>
        <script type="text/javascript" src="jquery-2.2.2.min.js"></script>
        <script type="text/javascript" src="script.js"></script>
    </head>
    <body>
        <input type="text" class="autosuggest"/>
        <input type="submit" value="search"/>
        <div class="dropdown">
            <ul class="result">
                
            </ul>
        </div>
    </body>
</html>