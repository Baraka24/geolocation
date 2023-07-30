<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1 cellspacing=0 cellpadding=10>
        <tr>
            <th>#</th>
            <th>Nom</th>
            <th>Maps</th>
        </tr>
        <?php
        require 'connection.php';
        $rows=mysqli_query($conn,"SELECT * FROM `tb_data`");
        $i=1;
        foreach($rows as $row):
         ?>
        <tr>
            <td><?=$i++?></td>
            <td><?=$row['nom']?></td>
            <td style="width: 450px;height: 450psx;">
            <iframe src="https://www.google.com/maps?q=<?=$row['latitude']?>,<?=$row['longitude']?>&hl=es;z=14;&output=embed" style="width:100%;height:100%" frameborder="0"></iframe>
             
            </td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>