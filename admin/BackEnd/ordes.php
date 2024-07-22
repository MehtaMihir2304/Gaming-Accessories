<?php

include('../middleware/adminMiddleware.php');  
include('includes/header.php'); 


?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary fw-bold">
                    <h4 class="text-white">Orders
                        <a href="order_history.php" class="btn btn-warning float-end">Order History</a>
                    </h4>
                </div>
                <div class="card-body" id="">
                    <table class="table table-border table-striped  ">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>User</th>
                                <th>Price</th>
                                <th>Date</th>
                                <th>View</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $orders = getAllOrders();

                                if(mysqli_num_rows($orders) > 0)
                                {
                                    foreach ($orders as $item)
                                    {
                                        ?>
                                           <tr>
                                                <td><?= $item['id']; ?></td>
                                                <td><?= $item['name']; ?></td>
                                                <td><?= $item['tracking_no']; ?></td>
                                                <td><?= $item['total_price']; ?></td>
                                                <td><?= $item['created_at']; ?></td>
                                                <td>
                                                    <a href="view-order.php?t=<?= $item['tracking_no']; ?>" class="btn btn-primary">View Details </a>
                                                </td>
                                            </tr>
                                        <?php

                                    }
                                }
                                else
                                {
                                    ?>
                                    <tr>                       
                                        <td><?= $item['id']; ?></td>
                                        <td colspan="5">No Orders Yet</td>
                                        
                                    </tr>

                                    <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php');   ?>