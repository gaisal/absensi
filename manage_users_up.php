<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    
    <!-- DataTables CSS -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- LINK CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

    <style>
      table{
      width:100%;
      table-layout: fixed;
      }
      .tbl-header{
        background-color: rgba(255,255,255,0.3);
      }
      .tbl-content{
        height: 790px;
        overflow-x:auto;
        margin-top: 0px;
        border: 1px solid rgba(255,255,255,0.3);
      }
      tbody button {
        background-color: transparent;
        border: none;
        display: block;
        margin: auto;
        border-bottom: 2px solid #0e2225;
        color: #0e2225;
      }
      tbody button:hover {
        cursor: pointer;
        border-bottom: 2px solid #3e9ba8;
        color: black;
      }
      th{
        padding: 20px 15px;
        text-align: center;
        font-weight: 500;
        font-size: 16px;
        color: #000;
        text-transform: uppercase;
      }
      td{
        padding: 15px;
        text-align: center;
        vertical-align:middle;
        font-weight: 300;
        font-size: 15px;
        color: #000;
        border-bottom: solid 1px rgba(255,255,255,0.5);
      }
      img{
        display: block;
        float: left;
        position: absolute;
        margin: 0 6px 5px 0;
        width: 25px;  

      }
    </style>
</head>

<table cellpadding="0" cellspacing="0" border="0">
<tbody>
<?php
  //Connect to database
  require'config.php';

    $sql = "SELECT * FROM users WHERE del_fingerid=0 ORDER BY id DESC";
    $result = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($result, $sql)) {
        echo '<p class="error">SQL Error</p>';
    }
    else{
      mysqli_stmt_execute($result);
        $resultl = mysqli_stmt_get_result($result);
      if (mysqli_num_rows($resultl) > 0){
          while ($row = mysqli_fetch_assoc($resultl)){
  ?>
              <TR>
              <TD><?php  
                		if ($row['fingerprint_select'] == 1) {
                			echo "<img src='img/ok_check.png' title='The selected UID'>";
                		}
                    $fingerid = $row['fingerprint_id'];
                	?>
                	<form>
                		<button type="button" class="select_btn" id="<?php echo $fingerid;?>" title="select this UID"><?php echo $fingerid;?></button>
                	</form>
                  </label>
                </div>
              </TD>
              <TD><?php echo $row['username'];?></TD>
              <TD><?php echo $row['gender'];?></TD>
              <TD><?php echo $row['serialnumber'];?></TD>
              <TD><?php echo $row['user_date'];?></TD>
              <TD><?php echo $row['time_in'];?></TD>
              </TR>
<?php
        }   
    }
  }
?>
</tbody>
</table>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>