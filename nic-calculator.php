<!DOCTYPE html>
<html>

<?php
	ini_set('resplay_errors',0);

    $op = '';
	
	if( isset( $_REQUEST['calculator'] ))
	{
		$op=$_REQUEST['operator'];
		$num1 = $_REQUEST['firstnum'];
		$num2 = $_REQUEST['secondnum'];
	}
	if($op == "+")
	{
		$res= $num1+$num2;
	}
	if($op == "-")
	{
		$res= $num1-$num2;
	}
	if($op == "*")
	{
		$res = $num1*$num2;
	}
	if($op == "/")
	{
		$res = $num1/$num2;
	}

?>

<head>

    <link rel="stylesheet" type="text/css" href="style.css"/>
	
    <script 
            src = "https://cdnjs.cloudflare.com/ajax/libs/mathjs/10.6.4/math.min.js"
			integrity = "sha512-iphNRh6dPbeuPGIrQbCdbBF/qcqadKWLa35YPVfMZMHBSI6PLJh1om2xCTWhpVpmUyb4IvVS9iYnnYMkleVXLA=="
			crossorigin = "anonymous"
			referrerpolicy = "no-referrer">
	</script>

</head>


<body>

    <div class="grid-container">
        <div class="grid-item row-1" id="title">
            <h1> Nic's Silly Little Calculator </h1>
        </div>
        <div class="grid-item row-2" id="num-inp" >
            <input type="text" id="nic-answer">
        </div>
        <div class="grid-item row-3" id="squrt">
            <input  type="button"
                    value="SQR" 
                    onclick="my_sqrt()"
                    onkeydown="ans(event)">
        </div>

        <div class="grid-item row-3" id="brack">
            <input  type="button"
                    value="()"
                    onclick="res('()')"
                    onkeydown="ans(event)">
        </div>

        <div class="grid-item row-3" id="perc">
            <input type="button"
                value="%"
                onclick="res('%')"
                onkeydown="ans(event)">
        </div>

        <div class="grid-item row-3" id="divide">
            <input  type="button"
                    value="/"
                    onclick="res('/')"
                    onkeydown="ans(event)">
        </div>

        <div class="grid-item row-4" id="sev">
            <input  type="button"
                    value="7"
                    onclick="res('7')"
                    onkeydown="ans(event)">
        </div>

        <div class="grid-item row-4" id="eight">
            <input  type="button"
                    value="8"
                    onclick="res('8')"
                    onkeydown="ans(event)">
        </div>
        
        <div class="grid-item row-4" id="nine">
            <input  type="button"
                    value="9"
                    onclick="res('9')"
                    onkeydown="ans(event)">
        </div>

        <div class="grid-item row-4" id="multi">
            <input  type="button"
                    value="*"
                    onclick="res('*')"
                    onkeydown="ans(event)">
        </div>

        <div class="grid-item row-5" id="four">
            <input  type="button"
                    value="4"
                    onclick="res('4')"
                    onkeydown="ans(event)">
        </div>

        <div class="grid-item row-5" id="5">
            <input  type="button"
                    value="5"
                    onclick="res('5')"
                    onkeydown="ans(event)">
        </div>


    </div>
    



    <script src="script.js"></script>
</body>

</html>