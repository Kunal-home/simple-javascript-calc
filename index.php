<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>calculator</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div>
            <h1 style="color:#f542ad; text-align:center; font-size:50px">CALCULATOR<h1>
        </div>
        <div class="container">
                     <input type="text" name="display" id="screen" style=" color:white;height:10vh; width:80vw; text-align:right; background-color:#4b5057; font-size:30px; margin-left:10vw;" >
        <div id="buttons">
                     <table >
                                <tr>
                                      <td class="button"><button>+</button></td>
                                      <td class="button"><button>-</button></td>
                                      <td class="button"><button>x</button></td>
                                      <td class="button"><button>/</button></td>
                                </tr>
                                <tr>
                                      <td class="button"><button>7</button></td>
                                      <td class="button"><button>8</button></td>
                                      <td class="button"><button>9</button></td>
                                      <td class="button"><button>C</button></td>
                                </tr>
                                <tr>
                                      <td class="button"><button>4</button></td>
                                      <td class="button"><button>5</button></td>
                                      <td class="button"><button>6</button></td>
                                      <th class="button" rowspan="3"><button>=</button></th> 
                                </tr>
                                <tr>
                                      <td class="button"><button>1</button></td>
                                      <td class="button"><button>2</button></td>
                                      <td class="button"><button>3</button></td>
                                     
                                </tr>
                                <tr>
                                      <th class="button" colspan="2"><button >0</button></th>
                                      <td class="button"><button>.</button></td>
                                </tr>
                                
                     </table>
                  </div>
        </div>
                
           
        
        <script src="calc.js" async defer></script>
    </body>
</html>