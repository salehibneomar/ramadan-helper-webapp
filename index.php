<?php
    include 'timings.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ramadan <?php echo date('Y')?> BD</title>
    <link rel="icon" href="icon.png">
    <link href="https://fonts.googleapis.com/css?family=Tajawal:400,700" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=PT+Mono" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="home.css">
</head>
<body>
    
    <div class="content-wrapper">
        <div class="menu-btn-con">
            <button class="btn" id="open">MENU&ensp;<i class="fas fa-bars"></i></button>
        </div>
        <div id='blur'>
        </div>       
        <div id="sidebar" class="animated slideOutRight">
            <div class="close-btn-con">
                <button id="close"><i class="fas fa-arrow-right"></i></button>
            </div>
            <div class="lists">
                <div class="list-group">
                    <a href="fulltimetable" class="list-group-item list-group-item-action"><i class="fas fa-table"></i>&ensp;Full time table</a>
                    <a href="sehrandiftardua" class="list-group-item list-group-item-action"><i class="fas fa-praying-hands"></i>&ensp;Sehr and Iftar dua</a>
                    <a href="prayertimes" class="list-group-item list-group-item-action"><i class="fas fa-clock"></i>&ensp;Prayer times</a>
                    <a href="fullquran" class="list-group-item list-group-item-action"><i class="fas fa-quran"></i>&ensp;Full Qur'an recitation</a>
                    <a href="islamicytc" class="list-group-item list-group-item-action"><i class="fab fa-youtube"></i>&ensp;Islamic YouTube channels</a>
                    <a href="javascript:void(0)" id="devinfo" class="list-group-item list-group-item-action"><i class="fas fa-code"></i>&ensp;Developer's info</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <div class="top-sections">
                    <p class="title">Ramadan kareem</p>
                    <p class="location"><i class="fas fa-map-marker-alt"></i>&ensp;Timings for Dhaka, Bangladesh</p>
                </div>
                <div class="top-sections">
                    <p class="time" id="Time"></p>
                    <p class="date" id="Date"></p>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <td rowspan="2" id="ramadan-no">Day&ensp;<?php echo $serial ?></td>
                        <td class="normal-td">Sehr ends</td>
                        <td class="normal-td">Iftar</td>
                    </tr>
                    <tr>
                        <td class="normal-td"><?php echo $sehrTime ?></td>
                        <td class="normal-td"><?php echo $iftarTime ?></td>
                    </tr>
                </table>
            </div>
            <div class="card-footer">
                <p>Source: Islamic foundation BD</p>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="menu.js"></script>
    <script src="clock.js"></script>
	<script src="preventcontextmenu.js"></script>
    <script>
        document.getElementById('devinfo').addEventListener('click', function(){
            swal({
                icon: 'info',
                text: "Saleh Ibne Omar."+"\n"+
                "B.Sc. in CSE,"+"\n"+
                "Southeast University, Dhaka-1213."+"\n"+
                "Batch 45."+"\n"+
                "Email: salehibneomar@gmail.com"+"\n"+
				"Copyright © 2019 all rights reserved.",
                button: "Okay",
            });
        });
    </script>
</body>
</html>
<!--
================== App Details ==================
=                                               =
=        Developer: Saleh Ibne Omar             =
=       Date created: 02 May 2019           	=
=                                               =
=================================================
-->