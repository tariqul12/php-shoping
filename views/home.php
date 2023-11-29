<?php include "header.php" ?>
<section class="bg-info-subtle py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $key=> $product) { ?>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="<?php echo $product["image"] ?>" alt="">
                        <div class="card-body">
                            <h1 class="card-title"><?php echo $product["name"] ?></h1>
                            <h5>code:<?php echo $product["code"] ?></h5>
                            <h6>Price:<?php echo $product["price"] ?> Taka</h6>
                            <hr>
                            <a href="web.php?page=detail&&id=<?php echo $product["id"] ?>" class="btn btn-success">detail</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>


<?php include "footer.php" ?>
