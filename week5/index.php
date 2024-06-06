<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    
    <?php

        $connect = mysqli_connect('localhost', 'root', 'root', 'PhPGaryWeek5');
        if(!$connect){
            echo 'Error Code:' . mysqli_connect_errno();
            echo 'Error Message:' . mysqli_connect_error();
            exit;
        }

        $query = 'SELECT `Name`, `Hex` FROM colors';
        $results = mysqli_query($connect, $query);
        

        if(!$results){
            echo 'Error Message:' . mysqli_error($connect);
        }else{
            echo 'Total records found: ' . mysqli_num_rows($results);
            $row = mysqli_fetch_all($results, MYSQLI_ASSOC);
            for ($i=0; $i <= count($row); $i++) {
                echo '<div class="card mb-3" style="max-width: 18rem; background-color: ' . $row[$i]['Hex'] . ';">
                <div class="card-header">'. $row[$i]['Name'] . ' </div>
                <div class="card-body">
                  <p class="card-text">background-color: ' . $row[$i]['Hex'] . '</p>
                </div>
              </div>';
                echo '<br>';
                
            }
        }
    ?>

</body>
</html>