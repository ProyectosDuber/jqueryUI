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
        <script>
            $(function () {
                $("#check").button();
                $("#format").buttonset();
            });
        </script>
        <style>
            #format { margin-top: 2em; }
        </style>
    </head>
    <body>

        <input type="checkbox" id="check"><label for="check">Toggle</label>

        <div id="format">
            <input type="checkbox" id="check1" value="1"><label for="check1">B</label>
            <input type="checkbox" id="check2" value="2"><label for="check2">I</label>
            <input type="checkbox" id="check3" value="3"><label for="check3">U</label>
        </div>
        
        <script>
        $("#format input").click(function (){
         
        console.log($("#check1"));
      
        });
        
        </script>
    </body>
</html>
