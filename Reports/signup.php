<!DOCTYPE html>
<html>
<head>

<title>signup Report</title>
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
    <h1>Sign Up Report</h1>
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
            <th>Id</th>
                <th>UserName</th>
                <th>Email</th>
                <!-- <th>Password</th> -->
                <th>Created At</th>
                <th>Address</th>
                <th>Pincode</th>
                <th>phone No</th>
            </tr>
        </thead>
        <tbody>
    <?php
// include('/dbconnect.php');
$showemps="SELECT * FROM `signup`";
$showempsrun=mysqli_query($con,$showemps);
while($row=mysqli_fetch_array($showempsrun)){
    ?>
     <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['username'];?></td>
                <td><?php echo $row['email'];?></td>
                <!-- <td><?php echo $row['password'];?></td> -->
                <td><?php echo $row['created_at'];?></td>
                <td><?php echo $row['address'];?></td>
                <td><?php echo $row['pincode'];?></td>
                <td><?php echo $row['phone'];?></td>
        
              
            </tr>
<?php } ?>



    </tbody>
        <tfoot>
            <tr>
            <th>Id</th>
                <th>UserName</th>
                <th>Email</th>
                <th>Password</th>
                <th>Created At</th>
                <th>Address</th>
                <th>Pincode</th>
                <th>phone No</th>   
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