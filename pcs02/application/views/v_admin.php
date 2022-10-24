<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halo Dunia</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Email</td>
            <td>Nama</td>
        </tr>
        <?php 
            foreach($admin as $row){
                echo 
                "
                <tr>
                    <td>".$row['email']."</td>
                    <td>".$row['nama']."</td>
                </tr>
                ";
            }
        ?> 
    </table>
    
</body>
</html>