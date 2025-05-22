<!DOCTYPE html>
<html>
    <head>
        <title>Real calculator</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="calc_php.css">
    </head>
    <body align="center">
        <div>
            <form action="disp_calc.php" method="POST">
        <input type="text" name="num1" onchange="">
        
         <br><br>
            <button onclick="">AC</button>
            <button onclick="">C</button>
            <button onclick="" id="mod">%</button>
            <button onclick="" id="div" class="soper" disabled>/</button>
            
            <br><br>
            
            <button onclick="" id="7">7</button>
            <button onclick="" id="8">8</button>
            <button onclick="" id="9">9</button>
            <button onclick=""  id="mul" class="soper" disabled>x</button>
            <br><br>
            
            <button onclick="" id="4">4</button>
            <button onclick="" id="5">5</button>
            <button onclick="" id="6">6</button>
            <button onclick="" id="subt" class="soper" disabled>-</button>
            
            <br><br>
            
            <button onclick="" id="1">1</button>
            <button onclick="" id="2">2</button>
            <button onclick="" id="3">3</button>
            <button onclick="" id="add" class="soper" disabled >+</button>
            <br><br>
            
            <button onclick="" id="zero">0</button>
            <button onclick="" id=".">.</button>
            <button onclick="" id="eql" class="soper" disabled="">=</button>
            <br>
            
        </div>
        </form>
        
    </body>
</html>