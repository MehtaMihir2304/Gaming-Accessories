<?php

include('functions/userfunctions.php');   
include('includes/header.php'); 
include('authenticate.php'); 


?>

<div class="py-3 bg-primary">
    <div class="container">
        <h4 class="text-white">
            <a class="text-white" href="categories.php">
                Collections /
            </a>
            <a class="text-white" href="checkout.php">
                Checkout /
            </a>
        </h4>
    </div>
</div>



<div class="py-5">
    <div class="container">
        <div class="card">
            <div class="card-body shadow">
                <form action="functions/placeorder.php" method="POST">
                    <div class="row">
                        <div class="col-md-7">
                            <h5>Basic Details</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="fw-bold">Name</label>
                                    <input type="text" name="name" placeholder="Enter your full name" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="fw-bold">E-mail</label>
                                    <input type="email" name="email" placeholder="Enter E-mail" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="fw-bold">Phone</label>
                                    <input type="number" name="phone" placeholder="Enter your Phone Nmuber" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="fw-bold">Pin Code</label>
                                    <input type="number" name="pincode" placeholder="Enter Pin Code" class="form-control">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="fw-bold">Address</label>
                                    <textarea name="address" class="form-control" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <h5>Order Details</h5>
                            <hr>
                            <?php $items = getCartItems();
                                $totalPrice = 0; 

                                foreach ($items as $citem)
                                {
                                    ?>
                                    <div class="mb-1 border">
                                        <div class="row align-items-center">
                                            <div class="col-md-2">
                                                <img src="uploads/<?= $citem['image'] ?>" alt="Image" width="80px">
                                            </div>
                                            <div class="col-md-4">
                                                <label><?= $citem['name'] ?></label>
                                            </div>
                                            <div class="col-md-3">
                                                <label><?= $citem['selling_price'] ?></label>
                                            </div>
                                            <div class="col-md-2">
                                                <label>x<?= $citem['prod_qty'] ?></label>
                                            </div>
                                        </div>
                        
                                    </div>
                                
                                <?php
                                $totalPrice += $citem['selling_price'] * $citem['prod_qty'];
                                }
                                
                            ?>
                            <hr>
                            <h5>Total Price : <span class="float-end fw-bold"><?= $totalPrice ?></span></h5>
                            <div class="">
                                <input type="hidden" name="payment_mode" value="COD">
                                <button type="submit" name="placeOrderBtn" class="btn btn-primary w-100">Confirm And Place Order | COD</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php');   ?>