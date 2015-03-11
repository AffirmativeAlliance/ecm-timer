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
        <div class='g-2-3 centered-text'>
            <div class="content-box" id="timer-box">
                <h1 id="num">?</h1>
            </div>
        </div>
        <div class='g-1-3 centered-text'>
            <input type="text" id="inputnum" onKeyPress="return isNumberKey(event);" placeholder="#">
        </div>
    </div>

    <!--JS-->
    <script type="text/javascript">
        var time = 1;
        setTimeout(function(){
            time = <?php echo $futureTime; ?>;
            setInterval(function(){
                if(time == 30){
                    time = 1;
                }else{
                    time++;
                }
                document.getElementById("num").innerHTML = time;
                if(time == document.getElementById("inputnum").value){
                    blink();
                }else{
                    unBlink();
                }
            }, 1000);
        }, 2000);
        
        function blink(){
            document.getElementById('timer-box').style.backgroundColor = '#CCCCCC';
            document.getElementById('timer-box').style.borderColor= '#9F9F9F';
            document.getElementById('timer-box').style.color= '#000000';
            document.getElementById('inputnum').style.backgroundColor= '#DCDCDC';
            document.getElementById('inputnum').style.borderColor= '#C6C6C6';
            document.getElementById('inputnum').style.color= '#000000';
            document.body.style.backgroundColor = '#F4F4F4';
        }
        
        function unBlink(){
            document.getElementById('timer-box').style.backgroundColor = "#333"
            document.getElementById('timer-box').style.borderColor= '#606060'
            document.getElementById('timer-box').style.color= '#FFFFFF';
            document.getElementById('inputnum').style.backgroundColor= '#232323';
            document.getElementById('inputnum').style.borderColor= '#393939';
            document.getElementById('inputnum').style.color= '#FFFFFF';
            document.body.style.backgroundColor = '#0b0b0b';
        }
        
        function isNumberKey(evt){
            var charCode = (evt.which) ? evt.which : evt.keyCode
            return !(charCode > 31 && (charCode < 48 || charCode > 57));
        }
        

    </script>
</body>
</html>