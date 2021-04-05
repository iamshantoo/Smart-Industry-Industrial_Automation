<?php
include"dbcon.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Smart Factory</title>
  <!-- <title>Historical Graph</title> -->
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <!-- <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css"> -->
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
  <!-- plugins:css -->
  <link rel="stylesheet" href="node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="node_modules/jquery-bar-rating/dist/themes/css-stars.css">
  <link rel="stylesheet" href="node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<style type="text/css">
.small-box h3, .small-box p {
   
    color:limegreen !important;
}
h4,h5 {
  color:limegreen !important;
}

    div .card-body{
      background-color: rgb(10,20,30);
    }

    div .content{
      background-color: rgb(10,12,14);
    }

    div .chart{
      background-color: transparent;
    }

    div .card-title{color: limegreen;
      text-align: center;
    }

    div .card{
      background-color: rgb(10,12,14);
    }
    div .inner{
      background-color: rgb(10,20,30);
      color:limegreen;
    }

    .material-icons {
        vertical-align:-14%
      }
      
  </style>

</head>
<body>
    <div style = "background-color: rgb(10,12,14)">
    <div class="col-md-12 stretch-card grid-margin">      
            <h1 class="m-0 text-red" style = "text-align: left;">Smart Factory - Industrial Automation Dashboard
              <a href="historytable.php" class="button" style = "text-align: right;">
                <i class="material-icons w3-xxlarge">search</i>
              </a>
            </h1>
          </div>
          
          <!-- Content Header (Page header) -->
    
      <div class="col-md-12 stretch-card grid-margin">
        <h1 class="m-0 text-red" style = "text-align: left; font-size: 26px"> Machines online: 11<br>Machines offline: 05</h1> 
      </div>
    <div style = "background-color: rgb(10,12,14)">
    <div class="row">
      <!-- machines online -->
      <div class="col-sm-3">
              <div class="small-box bg-info">
                <div class="inner">
                  <h1 style="font-size: 20px"> Machine ID: M01 </h1>
                  <h2 style="font-size: 20px"> Current Flow: 12A </h2>
                 </div>

              </div>
            </div>

            <div class="col-sm-3">
              <div class="small-box bg-info">
                <div class="inner">
                  <h1 style="font-size: 20px"> Machine ID: M02 </h1>
                  <h2 style="font-size: 20px"> Current Flow: 8A </h2>
                 </div>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="small-box bg-info">
                <div class="inner">
                  <h1 style="font-size: 20px"> Machine ID: M03 </h1>
                  <h2 style="font-size: 20px"> Current Flow: 0A </h2>
                 </div>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="small-box bg-info">
                <div class="inner">
                  <h1 style="font-size: 20px"> Machine ID: M04 </h1>
                  <h2 style="font-size: 20px"> Current Flow: 10A </h2>
                 </div>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="small-box bg-info">
                <div class="inner">
                  <h1 style="font-size: 20px"> Machine ID: M05 </h1>
                  <h2 style="font-size: 20px"> Current Flow: 12A </h2>
                 </div>

              </div>
            </div>

            <div class="col-sm-3">
              <div class="small-box bg-info">
                <div class="inner">
                  <h1 style="font-size: 20px"> Machine ID: M06 </h1>
                  <h2 style="font-size: 20px"> Current Flow: 0A </h2>
                 </div>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="small-box bg-info">
                <div class="inner">
                  <h1 style="font-size: 20px"> Machine ID: M07 </h1>
                  <h2 style="font-size: 20px"> Current Flow: 5A </h2>
                 </div>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="small-box bg-info">
                <div class="inner">
                  <h1 style="font-size: 20px"> Machine ID: M08 </h1>
                  <h2 style="font-size: 20px"> Current Flow: 0A </h2>
                 </div>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="small-box bg-info">
                <div class="inner">
                  <h1 style="font-size: 20px"> Machine ID: M09 </h1>
                  <h2 style="font-size: 20px"> Current Flow: 12A </h2>
                 </div>

              </div>
            </div>

            <div class="col-sm-3">
              <div class="small-box bg-info">
                <div class="inner">
                  <h1 style="font-size: 20px"> Machine ID: M10 </h1>
                  <h2 style="font-size: 20px"> Current Flow: 8A </h2>
                 </div>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="small-box bg-info">
                <div class="inner">
                  <h1 style="font-size: 20px"> Machine ID: M11 </h1>
                  <h2 style="font-size: 20px"> Current Flow: 0A </h2>
                 </div>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="small-box bg-info">
                <div class="inner">
                  <h1 style="font-size: 20px"> Machine ID: M12 </h1>
                  <h2 style="font-size: 20px"> Current Flow: 10A </h2>
                 </div>
              </div>
            </div>

             <div class="col-sm-3">
              <div class="small-box bg-info">
                <div class="inner">
                  <h1 style="font-size: 20px"> Machine ID: M13 </h1>
                  <h2 style="font-size: 20px"> Current Flow: 12A </h2>
                 </div>

              </div>
            </div>

            <div class="col-sm-3">
              <div class="small-box bg-info">
                <div class="inner">
                  <h1 style="font-size: 20px"> Machine ID: M014 </h1>
                  <h2 style="font-size: 20px"> Current Flow: 0A </h2>
                 </div>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="small-box bg-info">
                <div class="inner">
                  <h1 style="font-size: 20px"> Machine ID: M15 </h1>
                  <h2 style="font-size: 20px"> Current Flow: 10A </h2>
                 </div>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="small-box bg-info">
                <div class="inner">
                  <h1 style="font-size: 20px"> Machine ID: M16 </h1>
                  <h2 style="font-size: 20px"> Current Flow: 5A </h2>
                 </div>
              </div>
            </div>
    </div>
<!-- machines -->

<div class="col-md-12 stretch-card grid-margin">
        <h1 class="m-0 text-red" style = "text-align: left; font-size: 26px"> Environmental Data </h1> 
      </div>

<div class="row">
    <div class="col-sm-3">
              <div class="small-box bg-info">
                <div class="icon" style = "color: green;">
                <i class="ion ion-stats-bars"></i>
              </div>
                <div class="inner">
  <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
 server with default setting (user 'root' with no password) */
$link = mysqli_connect($host, $user, $pass, $db);

// Check connection
if ($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Attempt select query execution
$sql = "SELECT TMP
  from dbox order by id desc limit 1";
if ($result = mysqli_query($link, $sql))
{
    if (mysqli_num_rows($result) > 0)
    {
        while ($row = mysqli_fetch_array($result))
        {
            echo "<h3>" . $row['TMP'] .  "° C</h3>";
            //echo "<h4> Temperature </h4>";
            // echo "<h4>" . $row['TMP'] . "</h4>";
          if($row['TMP'] > 25)
          {
            echo "<h4 > Warm </h4>";
          }
          else if($row['TMP'] < 25)
          {
            echo "<h4 > Cold </h4>";
          }
        }
        // Free result set
        mysqli_free_result($result);
    }
    else
    {
        echo "No records matching your query were found.";
    }
}
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>
                 </div>

              </div>
            </div>
         
          <div class="col-sm-3">
              <div class="small-box bg-info">
                <div class="icon" style = "color: green;">
                <i class="ion ion-stats-bars"></i>
              </div>
                <div class="inner">
                  
  <?php

/* Attempt MySQL server connection. Assuming you are running MySQL
 server with default setting (user 'root' with no password) */
$link = mysqli_connect($host, $user, $pass, $db);

// Check connection
if ($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Attempt select query execution
$sql = "SELECT HUM
  from dbox order by id desc limit 1";


if ($result = mysqli_query($link, $sql))
{
    if (mysqli_num_rows($result) > 0)
    {
        while ($row = mysqli_fetch_array($result))
        {
            echo "<h3>" . $row['HUM'] . "%</h3>";
            //echo "<h4 > Humidity </h4>";
            // echo "<h4>" . $row['HUM'] . "</h4>";
          if($row['HUM'] >= 30 && $row['HUM'] <= 65)
          {
            echo "<h4 > Comfortable </h4>";
          }
          else if($row['HUM'] >= 66)
          {
            echo "<h4 > High </h4>";
          }
           
        }
        // Free result set
        mysqli_free_result($result);
    }
    else
    {
        echo "No records matching your query were found.";
    }
}
// Close connection
mysqli_close($link);
?>
                 
                </div>
              </div>
            </div>  

<!-- <div class="col-lg-4 col-6">
              <div class="small-box bg-info">
                <div class="icon" style = "color: white;">
                <i class="ion ion-stats-bars"></i>
              </div>
                <div class="inner">
                 
                  <?php

// Close connection
mysqli_close($link);
?>
  </div>
         
                </div>
              </div>
            </div> -->

            <div class="col-sm-3">
              <div class="small-box bg-info">
                <div class="icon" style = "color: green;">
                <i class="ion ion-stats-bars"></i>
              </div>
                <div class="inner">
    <?php

/* Attempt MySQL server connection. Assuming you are running MySQL
 server with default setting (user 'root' with no password) */
$link = mysqli_connect($host, $user, $pass, $db);

// Check connection
if ($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Attempt select query execution
$sql = "SELECT VOC
  from dbox order by id desc limit 1";
if ($result = mysqli_query($link, $sql))
{
    if (mysqli_num_rows($result) > 0)
    {
        while ($row = mysqli_fetch_array($result))
        {
            echo "<h3>" . $row['VOC'] . " ppm</h3>";
            //echo "<h4> Air Pollution (VOC) </h4>";
            // echo "<h4>" . $row['VOC'] . " ppm</h4>";
        }
        // Free result set
        mysqli_free_result($result);
    }
    else
    {
        echo "No records matching your query were found.";
    }
}
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>

<div style="background-color: transparent;">

  <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
 server with default setting (user 'root' with no password) */
$link = mysqli_connect($host, $user, $pass, $db);

// Check connection
if ($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Attempt select query execution
$sql = "SELECT VOC
  from dbox order by id desc limit 1";


if ($result = mysqli_query($link, $sql))
{
    if (mysqli_num_rows($result) > 0)
    {
        while ($row = mysqli_fetch_array($result))
        {

          if($row['VOC'] <200)
          {
            echo "<h4 > Fresh Air </h4>";
          }
     
        }
        // Free result set
        mysqli_free_result($result);
    }
    else
    {
        echo "No records matching your query were found.";
    }
}
// Close connection
mysqli_close($link);
?>
  </div>
<div style="background-color:transparent;">

  <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
 server with default setting (user 'root' with no password) */
$link = mysqli_connect($host, $user, $pass, $db);

// Check connection
if ($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Attempt select query execution
$sql = "SELECT VOC
  from dbox order by id desc limit 1";


if ($result = mysqli_query($link, $sql))
{
    if (mysqli_num_rows($result) > 0)
    {
        while ($row = mysqli_fetch_array($result))
        {

          if($row['VOC'] >200 && $row['VOC']<500)
          {
            echo "<h4 > Average Air </h4>";
          }
          
            
            
        }
        // Free result set
        mysqli_free_result($result);
    }
    else
    {
        echo "No records matching your query were found.";
    }
}
// Close connection
mysqli_close($link);
?>
  </div>
                  </div>
                </div>
              </div>
            
            

            <div class="col-sm-3">
              <div class="small-box bg-info">
                <div class="icon" style = "color: green;">
                <i class="ion ion-stats-bars"></i>
              </div>
                <div class="inner">
                  <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
 server with default setting (user 'root' with no password) */
$link = mysqli_connect($host, $user, $pass, $db);

// Check connection
if ($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Attempt select query execution
$sql = "SELECT CH4 FROM dbox order by id desc limit 1 ";
if ($result = mysqli_query($link, $sql))
{
    if (mysqli_num_rows($result) > 0)
    {
        while ($row = mysqli_fetch_array($result))
        {
            echo "<h3>" . $row['CH4'] . " </h3>";
            //echo "<h4> Movement </h4>";

        }
        // Free result set
        mysqli_free_result($result);
    }
    else
    {
        echo "No records matching your query were found.";
    }
}
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

if ($result = mysqli_query($link, $sql))
{
    if (mysqli_num_rows($result) > 0)
    {
        while ($row = mysqli_fetch_array($result))
        {
        
          if($row['CH4'] <= 1)
          {
            echo "<h4 > Movement Detected </h4>";
          }

        }
        // Free result set
        mysqli_free_result($result);
    }
    else
    {
        echo "No records matching your query were found.";
    }
}
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>
 
  <div style="background-color:transparent;">

  <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
 server with default setting (user 'root' with no password) */
$link = mysqli_connect($host, $user, $pass, $db);

// Check connection
if ($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Attempt select query execution
$sql = "SELECT CH4
  from dbox order by id desc limit 1";


if ($result = mysqli_query($link, $sql))
{
    if (mysqli_num_rows($result) > 0)
    {
        while ($row = mysqli_fetch_array($result))
        {

          if($row['CH4'] > 1)
          {
            echo "<h3 > No Movement Detected </h3>";
          }
  
        }
        // Free result set
        mysqli_free_result($result);
    }
    else
    {
        echo "No records matching your query were found.";
    }
}
// Close connection
mysqli_close($link);
?>
  
                </div>
              </div>
            </div>
</div>

<div class="wrapper">
  
    <!-- /.content-header -->
    <section class="content">
      <div class="container-fluid">

<div class="col-md-12 stretch-card grid-margin">
       
      </div>

<div class="row" >

<!-- humidity & temp -->

<div class="col-md-6">
            <!-- LINE CHART -->
            <div class="card card-info">
             
                <h2 class="card-title" style="color:white bold; text-align: center; ">Temperature ( °C )</h2>  
              <div class="card-body">
                  <div class="chart">
                 <canvas id="line-chart3" width="900" height="600"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

          <!-- /.col (LEFT) -->
          <div class="col-sm-6 col-md-6 col-xl-6">
            <!-- LINE CHART -->
            <div class="card card-info">
            
                <h2 class="card-title" style="color:white bold; text-align: center; ">Humidity ( % )</h2>

              <div class="card-body">
                <div class="chart">
                 <canvas id="line-chart4" width="900" height="600"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            </div>


          <div class="col-sm-6 col-md-6 col-xl-6">
           
            <div class="card card-info">   
                <h2 class="card-title" style="color:white bold; text-align: center; ">Air Pollution </h2>

              <div class="card-body">
                <div class="chart">

                 <canvas id="chart1" width="900" height="600"></canvas>
               
                </div>
              </div>
            </div>
          </div>


          <!-- /.col (LEFT) -->
          <div class="col-sm-6" >
            <!-- LINE CHART -->
            <div class="card card-info" >
            
                <h2 class="card-title" style="color:white bold; text-align: center; ">Movement </h2>

              <div class="card-body">
                <div class="chart">
                 <canvas id="line-chart2" width="900" height="600"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
  
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script type="text/javascript">
   setTimeout(function(){
       location.reload();
   },10000);
</script>
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

<script src="RGraph.common.core.js"></script>
<script src="RGraph.bipolar.js"></script>


<?php
include"dbcon.php";
$mysqli = new mysqli($host, $user, $pass, $db) or die($mysqli->error);

$VOC = '';
$date = '';

//query to get data from the table
$sql = "SELECT VOC, date from dbox order by id desc limit 20
   ";
$result = mysqli_query($mysqli, $sql);

//loop through the returned data
while ($row = mysqli_fetch_array($result))
{

    $VOC = $VOC . '"' . $row['VOC'] . '",';
    $date = $date . '"' . $row['date'] . '",';
}
$VOC = trim($VOC, ",");
$date = trim($date, ",");
?>

<script>
  
new Chart(document.getElementById("chart1"), {
    type: 'line',
    data: {
      labels: [<?php echo $date; ?> ],
      
      
      datasets: [
        {
        data: [<?php echo $VOC; ?> ],
        label: "VOC level in ppm",
        borderColor: "#ff8d00",
        fill: false

        }
      ]
    },
    options: {
      legend: { display: true },
      title: {
        display: true,
        // indexLabel: "{$VOC}"
      }
    }
});

</script>




<?php
include"dbcon.php";
$mysqli = new mysqli($host, $user, $pass, $db) or die($mysqli->error);

$CH4 = '';
$date = '';

//query to get data from the table
$sql = "SELECT CH4, date
  from dbox order by id desc limit 20 ";
$result = mysqli_query($mysqli, $sql);

//loop through the returned data
while ($row = mysqli_fetch_array($result))
{

    $CH4 = $CH4 . '"' . $row['CH4'] . '",';
    $date = $date . '"' . $row['date'] . '",';
}
$CH4 = trim($CH4, ",");
$date = trim($date, ",");
?>

<script>
  new Chart(document.getElementById("line-chart2"), {
  type: 'line',
  data: {
    labels: [<?php echo $date; ?>],
    datasets: [{ 
        data: [<?php echo $CH4; ?>],
        label: "Movement",
        borderColor: "rgb(0,128,128)",
        fill: false
      }
    ]
  },
  options: {
    title: {
      display: true,

    }
  }
});
</script>

<?php
include"dbcon.php";
$mysqli = new mysqli($host, $user, $pass, $db) or die($mysqli->error);
$TMP = '';
$date = '';
//query to get data from the table
$sql = "SELECT TMP,date
  from dbox order by id desc limit 20 ";
$result = mysqli_query($mysqli, $sql);

//loop through the returned data
while ($row = mysqli_fetch_array($result))
{
    $TMP = $TMP . '"' . $row['TMP'] . '",';
    $date = $date . '"' . $row['date'] . '",';
}
$TMP = trim($TMP, ",");
$date = trim($date, ",");

?>


<script>
new Chart(document.getElementById("line-chart3"), {
  type: 'line',
  data: {
    labels: [<?php echo $date; ?>],
    datasets: [{ 
        data: [<?php echo $TMP; ?> ],
        label: "Temperature in celcius",
        borderColor: "rgb(255,0,0)",
        fill: false
      }, 
    ]
  },
  options: {
    title: {
      display: true,

    }
  }
});

</script>

<?php
include"dbcon.php";
$mysqli = new mysqli($host, $user, $pass, $db) or die($mysqli->error);
$HUM = '';
$date = '';
//query to get data from the table
$sql = "SELECT HUM,date
  from dbox order by id desc limit 20 ";
$result = mysqli_query($mysqli, $sql);

//loop through the returned data
while ($row = mysqli_fetch_array($result))
{
    $HUM = $HUM . '"' . $row['HUM'] . '",';
    $date = $date . '"' . $row['date'] . '",';
}
$HUM = trim($HUM, ",");
$date = trim($date, ",");

?>


<script>
new Chart(document.getElementById("line-chart4"), {
  type: 'line',
  data: {
    labels: [<?php echo $date; ?>],
    datasets: [{ 
        data: [<?php echo $HUM; ?> ],
        label: "Humidity in %",
        borderColor: "#000080",
        fill: false
      }, 
    ]
  },
  options: {
    title: {
      display: true,

    }
  }
});

</script>

<!-- <iframe src="map.php"style="width: 100%; height:440px;"></iframe> -->

  <!-- plugins:js -->
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
<!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="node_modules/chart.js/dist/Chart.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <!-- <script src="js/off-canvas.js"></script> -->
  <script src="js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</section>
</div>
</div>
</body>

</html>
