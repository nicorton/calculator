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
    <div id="content">
        <div id="heading">
            <h1 id="h1-itself">Nic's Silly Little Calculator</h1>
        </div>
        <table id="calculator">
            <tr>
                <td colspan="4">
                    <input type="text" id="answer">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="button"
                            value="SQR" 
                            onclick="my_sqrt()"
                            onkeydown="ans(event)">
                </td>
                <td>
                    <input type="button"
                            value="()"
                            onclick="res('()')"
                            onkeydown="ans(event)">
                </td>
                <td>
                    <input type="button"
                            value="%"
                            onclick="res('%')"
                            onkeydown="ans(event)">
                </td>
                <td>
                    <input type="button"
                            value="/"
                            onclick="res('/')"
                            onkeydown="ans(event)">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="button"
                            value="7"
                            onclick="res('7')"
                            onkeydown="ans(event)">
                </td>
                <td>
                    <input type="button"
                            value="8"
                            onclick="res('8')"
                            onkeydown="ans(event)">
                </td>
                <td>
                    <input type="button"
                            value="9"
                            onclick="res('9')"
                            onkeydown="ans(event)">
                </td>
                <td>
                    <input type="button"
                            value="*"
                            onclick="res('*')"
                            onkeydown="ans(event)">
                </td>
            </tr>

            <tr>
                <td>
                    <input type="button"
                            value="4"
                            onclick="res('4')"
                            onkeydown="ans(event)">
                </td>
                <td>
                    <input type="button"
                            value="5"
                            onclick="res('5')"
                            onkeydown="ans(event)">
                </td>
                <td>
                    <input type="button"
                            value="6"
                            onclick="res('6')"
                            onkeydown="ans(event)">
                </td>
                <td>
                    <input type="button"
                            value="-"
                            onclick="res('-')"
                            onkeydown="ans(event)">
                </td>
            </tr>
            <tr>

                <td>
                    <input type="button"
                            value="1"
                            onclick="res('1')"
                            onkeydown="ans(event)">
                </td>
                <td>
                    <input type="button"
                            value="2"
                            onclick="res('2')"
                            onkeydown="ans(event)">
                </td>
                <td>
                    <input type="button"
                            value="3"
                            onclick="res('3')"
                            onkeydown="ans(event)">
                </td>
                <td>
                    <input type="button"
                            value="+"
                            onclick="res('+')"
                            onkeydown="ans(event)">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="button"
                            value="0"
                            onclick="res('0')"
                            onkeydown="ans(event)">
                </td>
                <td>
                    <input type="button"
                            value="."
                            onclick="res('.')"
                            onkeydown="ans(event)">
                </td>
                <td>
                    <input type="button"
                            value="clear"
                            onclick="clearfield()"
                            onkeydown="ans(event)">
                </td>

                <td>
                    <input type="button"
                            value="="
                            onclick="calculate()">
                </td>
            </tr>
        </table>
    </div>
    <script src="script.js"></script>
</body>

</html>