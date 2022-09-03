<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Corvey Link Collection</title>
</head>
<body style="background-color: #252626;">
   
    <div id="wrapper">
        <!--insert elements-->
    </div>
    <script src="js.js">
       
       
    </script>
     <?php
        include_once 'includes/functions.inc.php';
        

        $items = fetchitems();
        $arrLength = count($items);
        for($i = 0; $i < $arrLength; $i++) {
            $name = json_encode($items[$i]["description"]);
            $desc = json_encode($items[$i]["name"]);
            $link = json_encode($items[$i]["link"]);
            $kurse = json_encode($items[$i]["kurse"]);
            echo "<script>addItem($name, $desc, $link, $kurse)</script>";
        };

    ?>
    
</body>


<style>
    body {
        margin: 0;
        padding: 0;
        height: 100%;
    }
    #wrapper {
        transform: translate(-50%,-50%);
        position: absolute;
        border: #0693e3 solid 2px;
        border-radius: 0.5vh;
        width: 90%;
        height: 90%;
        top: 50%;
        left: 50%;
        
        
    }
    #item-wrapper {
        position: relative;
        background-color: #3b3b3b;
        width: 300px;
        height: 100px;
        float: left;
        margin-right: 3vh;
        left: 3.5vh;
        margin-top: 3vh;
        border-radius: 1vh;

    }
    #item-name {
        color: rgb(199, 199, 199);
        position: relative;
        left: 5px;
        top: 0.5vh;
        margin-bottom: 10px;
        font-weight: 500;
        font-size: larger;

    }
    #desc-wrapper {
        position: relative;
        left: 5px;
        color: rgb(136, 136, 136);
        width: 90%;
        height: 40%;
        margin-bottom: 2.5px;
        top: 1vh;
       

    }
    #kurse-wrapper {
        position: relative;
        left: 5px;
        color: rgb(136, 136, 136);
        
        width: 90%;
        height: 20px;
        overflow-x: scroll;
        margin-bottom: 7.5px;
    }
   
       #kurse-wrapper::-webkit-scrollbar {
        width: 10px;
        height: 1px;
    }

   #kurse-wrapper::-webkit-scrollbar-track {
        border-radius: 10px;
        background-color: rgba(255, 255, 255, 0.1);
    }

   #kurse-wrapper::-webkit-scrollbar-thumb {
        background-color: rgba(255, 255, 255, 0.781);
        border-radius: 20px;
        -webkit-box-shadow: rgba(0,0,0,.12) 0 3px 13px 1px;
    }
    #item-kurse {
        background-color: #0693e3;
        padding-top: 1px;
        padding-bottom: 1px;
        padding-left: 5px;
        padding-right: 5px;
        border-radius: 5px;
        margin-right: 3px;
        color: #0f0f0f;
    }
    #item-link {
        position: relative;
        
        left: 5px;
        color: rgb(199, 199, 199);
    }

    #item-link a {
        color: #0693e3;
    }
</style>

</html>