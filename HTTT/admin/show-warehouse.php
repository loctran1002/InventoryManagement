<?php 
include("partials/menu.php");

if(isset($_GET['id']))
{
    $warehouse_id = $_GET['id'];
    
    $sql = "SELECT * from warehouse WHERE id = $warehouse_id";

    $res = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($res);

    if($count == 1)
    {
        $row = mysqli_fetch_assoc($res);

        $warehouse_name = $row['name'];
        $warehouse_address = $row['address'];
    }
    else
    {
        header('location:'.SITE_URL.'admin/warehouse.php');
    }
}
else
{
    header('location:'.SITE_URL.'admin/warehouse.php');
}

?>

<style>
    body {
        background-image: url('../public/image/warehouse.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
    }
</style>

<div class="container-fluid" style="color: #65a2eb;">
    <h3 class="text-center">Warehouse Name: <?php echo $warehouse_name; ?></h3>
    <h3 class="text-center">Warehouse Address: <?php echo $warehouse_address; ?></h3>
    <a href="<?php echo SITE_URL; ?>warehouse.php"><i class="fa fa-arrow-left" aria-hidden="true" style="font-size: 30px; padding-left: 20px;"></i></a> 
</div>

<h4 style="margin-left: 110px; margin-bottom: 20px; color: #29ff00;">Items in Inventory</h4>
<div class="container-xl border" style="margin-top: 10px; margin-bottom: 50px;">
        <div class='table-responsive-xl'>
            <table class="table" id="result2" style="color: yellow">
                <thead>
                    <tr>
                        <th scope="col">Item ID</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">SKU</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Supplier</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql1 = "SELECT * FROM item WHERE warehouse_id = $warehouse_id ORDER BY NAME";
                        
                        $res1 = mysqli_query($conn, $sql1);

                        $count1 = mysqli_num_rows($res1);
                        if($count1 > 0)
                        {
                            while($row1=mysqli_fetch_assoc($res1))
                            {
                                $item_id = $row1['id'];
                                $quantity = $row1['quantity'];
                                $item_name = $row1['name'];
                                $sku = $row1['sku'];
                                $product_id = $row1['product_id'];
                                $supplier = $row1['supplier'];
                                
                                $sql3 = "SELECT name from product WHERE id = $product_id";
                            
                                $res3 = mysqli_query($conn, $sql3);
                                
                                $row3 = mysqli_fetch_assoc($res3);
                            
                                $product_name = $row3['name'];

                                ?>
                                <tr class="res d-none">
                                    <th scope="row"><?php echo $item_id; ?></th>
                                    <td><?php echo $item_name; ?></td>
                                    <td><?php echo $sku; ?></td>
                                    <td><?php echo $quantity; ?></td>
                                    <td><?php echo $product_name; ?></td>
                                    <td><?php echo $supplier; ?></td>
                                </tr>
                                <?php
                                
                            }
                        }
                        else
                        {
                            echo "<div class='text-white text-center' style='font-weight: 800; font-size: 2rem;'><a>No item currently in this warehouse</a></div>";
                        }
                    ?>
                </tbody>
            </table>
            <ul id="PageFragment">
                    <?php
                    if(ceil($count1 / 10) >= 2)
                    {
                        echo "<li class='btn btn-primary active' onclick='changePage(1)'>1</li>";
                    for($i = 2; $i <= ceil($count1 / 10) && $i <= 6;$i++){
                        echo "<li class='btn btn-primary' onclick='changePage(".$i.")'>".$i."</li>";
                    }
                    }
                    ?>
            </ul>
        </div>
    </div>
<script src="../public/js/fragment.js"></script>
<?php include('partials/footer.php'); ?>