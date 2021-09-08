<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data["titulo"]; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center my-3"><?php echo $data["titulo"]; ?></h1>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Duracion</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach (surta ['proyectos'] as $proyecto) {?>
                <td>
                    <td><?php echo $proyecto['id'] ?></td>
                    <td><?php echo $proyecto['nombre'] ?></td>
                    <td><?php echo $proyecto['duracion'] ?></td>
                    <td>
                        <a href="" class= "btn btn-info">ver</a>
                        <a href="" class= "btn btn-info">enviar</a>
                        <a href="" class= "btn btn-info"> eliminar</a>
                        
                    

            </tr>
            <?php> } ?> 
            
        </tbody>
    </table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>