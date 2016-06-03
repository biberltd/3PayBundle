<html>
    <head>
        <meta charset="utf-8">
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <style>
            body {
                width: 100%;
                text-align: center;
            }
            div{
                display: inline-block;
            }
        </style>
    </head>
    <body>
    <div id="timer"></div><br />
    <div id="result"></div>
    <script>
        $(document).ready(function(){
            var count =300;
            window.setInterval(function(){
                $.post( "http://saitimamoglu.com/3pay/examples/api_plus/check.php",{ id : '<?php echo $_REQUEST['id']?>'}).done(function(data){
                    if(data == 100 ){
                        window.location.replace('http://saitimamoglu.com/3pay/result_success.php');
                    }else if(data >100){
                        window.location.replace('http://saitimamoglu.com/3pay/result_error.php');
                    }else{
                        msg = 'İşleminiz gerçekleştirilirken lütfen bekleyiniz..';
                    }
                    $('#result').text(msg);
                });
                var hours = Math.floor( count / 60);
                hours = hours < 10 ? '0' + hours: hours;
                var minutes = count % 60;
                minutes = minutes < 10 ? '0' + minutes : minutes;
                if(hours <=0 && minutes <=0){
                    window.location.replace('http://saitimamoglu.com/3pay/result_error.php');
                }else{
                    $('#timer').text(hours+':'+minutes);
                }
                count=count-1;
            }, 1000);
        });

    </script>

    </body>
</html>
