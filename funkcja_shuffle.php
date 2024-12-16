<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
        table-layout:fixed;
        
    }
    td{
        border: dodgerblue 2px solid;
        padding-top: 10px;
        padding-bottom: 10px;
        color: blue; 
        text-align: center;
        background-color: aliceblue;
    }
    
</style>
<body>
   
<table>
    <tr>
<?php $liczby= range(0, 10, 1);
    shuffle($liczby); foreach($liczby as $value){?>
<td><?=$value?></td> 
<?php }?>
    </table>

</body>
</html>