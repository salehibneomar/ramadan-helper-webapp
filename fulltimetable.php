<?php 
    date_default_timezone_set('Asia/Dhaka');
    $currDate = trim(date('d M Y'));
    $jsonFile = 'ramadanfulltimetable.json';
    $data = file_get_contents($jsonFile);
    $obj = json_decode($data, true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ramadan <?php echo date('Y')?> BD | Full time table</title>
    <link rel="icon" href="icon.png">
    <link href="https://fonts.googleapis.com/css?family=Tajawal:400,700" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="tablepage.css">
</head>
<body>
    
    <div class="bck">
        <a class="btn" href="index"><i class="fas fa-arrow-left"></i></a>
    </div>

    <div class="content-wrapper">
        <div class="card">
            <div id="printcontent">
            <div class="card-header">
                <h2>Ramadan Mubarak 2019</h2>
                <h4>Sehr and Iftar timings of Dhaka</h4>
                <p>Source: Islamic Foundation BD</p>
            </div>
            <div class="card-body">
                <table class="table table-bordered maintable">
                    <thead>
                    <tr>
                        <th>Serial</th>
                        <th>Date</th>
                        <th>Day</th>
                        <th>Sehr ends</th>
                        <th>Iftar</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                            $i=0;
                            while($i<count($obj)){
                                echo "<tr>";
                                echo "<td>".$obj[$i]['serial']."</td>";
                                echo "<td>".$obj[$i]['date']."</td>";
                                echo "<td>".$obj[$i]['day']."</td>";
                                echo "<td>".$obj[$i]['sehrEnds']."</td>";
                                echo "<td>".$obj[$i]['iftar']."</td>";
                                echo "</tr>";
                                $i++;
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            </div>
            <div class="card-footer">
                <button class="btn" onclick="Print('printcontent')">Print&ensp;<i class="fas fa-print"></i></button>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="preventcontextmenu.js"></script>
    <script>
        function Print(param){
            var main = document.body.innerHTML;
            var content = document.getElementById(param).innerHTML;
            document.body.innerHTML = content;
            window.print();
            document.body.innerHTML = main;
        }
    </script>
</body>
</html>