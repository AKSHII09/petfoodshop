<!DOCTYPE html>
<html>
<head>

<title>User Report</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">

</head>


<?php
$con=mysqli_connect("localhost","root","","petshop");
if($con){
    // echo 'success';                                                  //short connection file
}
else{
    echo 'failed';
}
?>
<body>
    <h1>Admin Report</h1>
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
            <th>id</th>
                <th>Admin Name</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>

    <?php
// include('/dbconnect.php');
$showemps="SELECT * FROM `admin`";
$showempsrun=mysqli_query($con,$showemps);
while($row=mysqli_fetch_array($showempsrun)){
    ?>
     <tr>
                <td><?php echo $row['ID'];?></td>
                <td><?php echo $row['AdminName'];?></td>
                <td><?php echo $row['UserName'];?></td>
                <td><?php echo $row['UserName'];?></td>
                <td><?php echo $row['UserName'];?></td>
                <td><?php echo $row['UserName'];?></td>
        
                ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate
            </tr>
<?php } ?>



    </tbody>
        <tfoot>
            <tr>
            <th>id</th>
                <th>Admin Name</th>
                <th>Password</th>
            </tr>
        </tfoot>
    </table>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
} );
</script>
</body>
</html>