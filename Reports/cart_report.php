<!DOCTYPE html>
<html>
<head>
    <title>Cart Report</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<?php
$con=mysqli_connect("localhost","root","","petshop");
if($con){
    // echo 'success'; //short connection file
}
else{
    echo 'failed';
}
?>
<body>
    <h1>Cart Report</h1>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>User_Id</th>
                <th>Product_Id</th>
                <th>Product_Name</th>
                <th>Description</th>
                <th>Quantity</th>
                <th>Category</th>
                <th>Size</th>
                <th>Price</th>
                <th>Total Price</th>
                <th>Image</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $showemps="SELECT * FROM `cart`";
            $showempsrun=mysqli_query($con,$showemps);
            while($row=mysqli_fetch_array($showempsrun)){
            ?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['user_id'];?></td>
                <td><?php echo $row['product_id'];?></td>
                <td><?php echo $row['product_name'];?></td>
                <td><?php echo $row['description'];?></td>
                <td><?php echo $row['qty'];?></td>
                <td><?php echo $row['category'];?></td>
                <td><?php echo $row['size'];?></td>
                <td><?php echo $row['price'];?></td>
                <td><?php echo $row['total_price'];?></td>
                <td><?php echo $row['img'];?></td>
                <td><?php echo $row['created_at'];?></td>
            </tr>
            <?php } ?>
        </tbody>
        <tfoot>
           
            <tr>
                <th colspan="12">
                    <label for="dateFilter">No of Products Added to Cart:</label>
                    <input type="text" id="dateFilter">
                </th>
            </tr>
        </tfoot>
    </table>

    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>

    <script>
        $(document).ready(function() {
            var table = $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    {
                        extend: 'pdfHtml5',
                        text: 'PDF',
                        customize: function(doc) {
                            // Add date filter value to the PDF
                            doc.content.splice(1, 0, {
                                text: $('#dateFilter').val(),
                                alignment: 'center'
                            });
                        }
                    }
                ]
            });

            $('#dateFilter').datepicker({
                dateFormat: 'yy-mm-dd',
                onSelect: function(dateText) {
                    table.draw();
                }
            });

            $.fn.dataTable.ext.search.push(
                function(settings, data, dataIndex) {
                    var minDate = $('#dateFilter').datepicker('getDate');
                    var currentDate = new Date(data[11]);

                    if (!minDate) {
                        return true;
                    }

                    if (isNaN(currentDate.getTime())) {
                        return false;
                    }

                    // Check if the record's date is equal to the selected date
                    return currentDate.toDateString() === minDate.toDateString();
                }
            );
        });
    </script>
</body>
</html>
