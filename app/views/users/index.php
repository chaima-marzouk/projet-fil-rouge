<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <td>Nom</td>
                <td>Prenom</td>
                <td>Age</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $row) :  ?>
                <tr>
                    <td><?php echo $row->user_nom   ?></td>
                    <td><?php echo $row->user_prenom   ?></td>
                    <td><?php echo $row->user_age   ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>


</body>

</html>