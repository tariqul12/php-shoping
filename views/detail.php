<?php include "header.php" ?>
<section class="py-5 bg-primary-subtle ">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-body">
                    <img src="<?php echo $singleProdct['image'] ?>" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-body">
                    <h1><?php echo $singleProdct['name'] ?></h1>
                    <h4> code: <?php echo $singleProdct['code'] ?></h4>
                    <h4>Price: <?php echo $singleProdct['price'] ?> taka</h4>
                    <p><?php echo $singleProdct['detail'] ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php" ?>
