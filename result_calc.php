<?php
//you can place php logic here(e.g., form processing
?>
<!doctype html>
<html lang="en">
    <head>
        <title>result</title>
        <style>
            body{
                font-family: Arial, sans-serif;
                background: #f7f9f6;
                margin: 0;
                padding: 0;
                
            }
            
            .container{
                max-width: 500px;
                margin: 40px auto;
                background: #ffffff;
                padding: 30px;
                box-shadow: 0 4px 10px rgba(0,0,0,0.1);
                border-radius: 8px;
                
            }
            
            h2{
                text-align: center;
                color: #333;
            }
            
            .input-group{
                display: flex;
                flex-direction: column;
                margin-bottom: 15px;
            }
            
            .input-group label{
                margin-bottom: 5px;
                font-weight: bold;
            }
            
            .input-group input{
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 40px;
                font-size: 1rem;
            }
            
            .error{
                color: red;
                font-size: 0.9rem;
                display: none;
            }
            
            button{
                width: 100px;
                padding: 12px;
                background-color: #007bff;
                color: white;
                border: none;
                border-radius: 6px;
                font-size: 1rem;
                cursor: pointer;
                margin-top: 10px;
            }
            
            button:hover{
                background-color: #0056b3;
            }
            
            @media (max-width: 600px){
                .container {
                    margin: 20px;
                    padding: 20px;
                }
            }
        </style>
            
    </head>
    <body>
        <div class="container">
            <h2>Enter Marks (Out of 100)</h2>
            <form id="marksform" onsubmit="return validatefrom();">
          <?php
          for($i=1; $i<=6; $i++)
          {
              echo '<div class="input-group">
              <label for="subject'.$i . '">Subject ' .$i . ':</label>
                      <input type="number" id="subject' . $i . '" name="subject' . $i . '" min="0" max="100" required>
                      <div class="error" id="error' . $i . '">Please enter a valid marks (0-100).</div>
                          </div>';
          }
?>  
            <button type="submit">Submit</button>
            </form>    
        </div>
        
        <script>
            function validateform()
            {
                let isvalid=true;
                
                for(let i=1; i<=6; i++){
                    const input = document.getElementById('subject' + i);
                    const error = document.getElementById('error' + i);
                    const value = parseInt(input.value);
                    
                    if(isNan(value) || value < 0 || value > 100){
                        error.style.display = 'block';
                        isvalid = false;
                        
                    }else{
                        error.style.display='none';
                    }
                    
                }
                return isvalid;
            }
        </script>
    </body>
</html>
