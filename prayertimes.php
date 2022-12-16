<?php
    include 'namajtimeapi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ramadan <?php echo date('Y')?> BD | Prayer times</title>
    <link rel="icon" href="icon.png">
    <link href="https://fonts.googleapis.com/css?family=Tajawal:400,700" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="otherpages.css">
</head>
<body>
    
    <div class="bck">
        <a class="btn" href="index"><i class="fas fa-arrow-left"></i></a>
    </div>

    <div class="content-wrapper">
        <div class="card">
            <div class="card-header">
                <h2>Prayer times in Bangladesh</h2>
            </div>
            <div class="card-body table-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Date</th>
                        <th>Fajr</th>
                        <th>Dhuhr</th>
                        <th>Asr</th>
                        <th>Maghrib</th>
                        <th>Isha</th>
                    </tr>
                    <tr>
                        <td><?php echo $date ?></td>
                        <td><?php echo $arrHr[0].":".$arrMn[0]." ".$ampm[0]; ?></td>
                        <td><?php echo $arrHr[1].":".$arrMn[1]." ".$ampm[1]; ?></td>
                        <td><?php echo $arrHr[2].":".$arrMn[2]." ".$ampm[2]; ?></td>
                        <td><?php echo $arrHr[3].":".$arrMn[3]." ".$ampm[3]; ?></td>
                        <td><?php echo $arrHr[4].":".$arrMn[4]." ".$ampm[4]; ?></td>
                    </tr>
                </table>
            </div>
            <div class="card-footer">
                <p>Source: aladhan.com</p>
                <p>API link:&ensp;<a href="http://api.aladhan.com/v1/calendarByCity?city=Dhaka&country=Bangladesh&month=05&year=2019">Click</a></p>
                <p>Prayer times may vary.</p>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="preventcontextmenu.js"></script>

</body>
</html>