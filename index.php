<?php require("timer.php"); ?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ECM Timer</title>
    
    <!--CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" type="text/css" />
    <link rel="stylesheet" href="css/main.css" type="text/css" />
    
</head>
<body>
    <div class='wrapper'>
        <div class='timer'>
            <h1 id="num">?</h1>
        </div>
        <input type="number" id="inputnum">
    </div>

    <!--JS-->
    <script type="text/javascript">
        var eta = <?php echo $execTime*1000; ?> - <?php echo $serverTime; ?>;
        var time = 1;
        setTimeout(function(){
            time = 1;
            setInterval(function(){
                if(time == 30){
                    time = 1;
                }else{
                    time++;
                }
                document.getElementById("num").innerHTML = time;
            }, 1000);
        }, eta);
    </script>
</body>
</html>