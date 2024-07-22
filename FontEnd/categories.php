<?php
?>

<?php
 include('includes/header.php'); 
 include('functions/userfunctions.php');   
 
 
?>

<div class="py-3 bg-primary">
    <div class="container">
        <h4 class="text-white">Collections</h4>
    </div>
</div>
<div class="py-5">
    <div class="container">
        <div class="row justify-content">
            <div class="col-md-15">
                <h1>Our Collection</h1>
                <hr>
                <div class="row">
                    <?php
                        $categories = getAllActive("categories");

                        if(mysqli_num_rows($categories) > 0)
                        {
                            foreach($categories as $item)
                            {
                                ?>
                                <div class="col-md-3 mb-2">
                                    <a href="products.php?category=<?= $item['slug']; ?>">
                                        <div class="card shadow">
                                            <div class="card-body">
                                                <img src="uploads/<?= $item['image']; ?>" alt="Category Image" class="w-100">
                                                <h4 class="text-center"><?= $item['name']; ?></h4>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php

                            }
                        }
                        else
                        {
                            echo "No Data available";
                        }


                    ?>
                </div>

            </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php');   ?>
