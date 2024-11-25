<DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <style>
        p {
            text-align: center;
            border-top: 1px solid darkgreen;
            border-bottom: 1px solid darkgreen;
            border-left: 20px solid darkgreen;
            border-right: 20px solid darkgreen;
        }
    </style>
</head>
<body>
<?php $r = 6; ?>
<p>Pole koła o promieniu <?php echo $r;?> jest równe <?php echo round(pi()*$r**2,3);?> j<sup>2</sup>.</p>
</body>
</html>