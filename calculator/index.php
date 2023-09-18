<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator using javascript - Easy Tutorials</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="calculator">
            <form>
                <div class="display">
                    <input type="text" name="display">
                </div>
                <div>
                    <input type="button" value="AC" class="operator" onclick="display.value = '' ">
                    <input type="button" value="DE" class="operator" onclick="display.value = display.value.toString().slice(0,-1)"> <!--sadece bir sayi silmek icin-->
                    <input type="button" value="." class="operator" onclick="display.value += '.' ">
                    <input type="button" value="/" class="operator" onclick="display.value +='/' ">
                </div>
                <div>
                    <input type="button" value="7" onclick="display.value += '7'"> 
                    <input type="button" value="8" onclick="display.value += '8'">
                    <input type="button" value="9" onclick="display.value += '9'">
                    <input type="button" value="*" class="operator" onclick="display.value += '*'">
                </div>
                <div>
                    <input type="button" value="4" onclick="display.value += '4'">
                    <input type="button" value="5" onclick="display.value += '5'">
                    <input type="button" value="6" onclick="display.value += '6'">
                    <input type="button" value="-" class="operator" onclick="display.value += '-'">
                </div>
                <div>
                    <input type="button" value="1" onclick="display.value += '1'">
                    <input type="button" value="2" onclick="display.value += '2'">
                    <input type="button" value="3" onclick="display.value += '3'">
                    <input type="button" value="+" class="operator" onclick="display.value += '+'">
                </div>
                <div>
                    <input type="button" value="00" onclick="display.value += '00'">
                    <input type="button" value="0" onclick="display.value += '0'">
                    <input type="button" value="=" class="equal operator" onclick="display.value = eval(display.value)"> <!--eval:degerlendirmek-->
                </div>
            </form>
        </div>
    </div>
</body>
</html>