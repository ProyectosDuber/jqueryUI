<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="js/jquery.js"></script>
        <script src="js/jquery-ui/jquery-ui.js"></script>
        <LINK REL="stylesheet" TYPE="text/css" HREF="js/jquery-ui/jquery-ui.css">
        
        <style>
            #radio{
                zoom: 0.50;
            }
            
        </style>
        <script>
            $(function () {
                $("#radio").buttonset();
            });  
        </script>
    </head>
    <body>
        <form>
            <div id="radio">
                <input type="radio" id="radio1" name="mio" value="1"><label for="radio1">Choice 1</label>
                <input type="radio" id="radio2" name="mio"value="2" ><label for="radio2">Choice 2</label>
                <input type="radio" id="radio3" name="mio" value="3"><label for="radio3">Choice 3</label>
                <input type="radio" id="radio4" name="mio" value="4"><label for="radio4">Choice 4</label>
               
            </div>
            <input type="button" id="boton" value="conprobar">
        </form>
        <script>
        $("#boton").click(function (){
           // console.log($("input:radio[name=mio]:checked").val());
            console.log($("#radio input:checked").val());
        });
           
        
        </script>
    </body>
</html>
