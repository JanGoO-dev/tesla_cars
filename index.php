<!-- connect to database -->
<?php 
include("./actions/connection.php");

$sql = "SELECT productID, productName, productImageUrl, productAbout FROM products";
$result = mysqli_query($connect, $sql);

?>

<!-- header section -->
<?php include("./static/header.html"); ?>

<!-- Showcase Slider / Carousel -->
<?php include("./static/slider.html"); ?>

<!-- Featured Prodducts -->
<h1 class="display-4 text-center pt-5" style="color: rgba(128, 128, 128, 0.623);"><span class="text-danger">Our</span> Products</h1>

<div class="container mx-auto row py-5">
    <?php if (mysqli_num_rows($result) > 0) { ?>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <div class="col-12 col-md-4 col-sm-6">
                <div class="card border-0">
                    <img src="<?php echo $row['productImageUrl'] ?>" class="card-img-top rounded shadow" alt="<?php $row['productName'] ?> Car">
                    <div class="card-body">
                        <h5 class="card-title text-danger"><?php $row['productName'] ?></h5>
                        <p class="card-text text-justify">
                        <?php 
                            echo mb_strimwidth($row['productAbout'], 0, 100, "...");
                        ?>
                        <br>
                        <a href="details.php?productID=<?php echo $row['productID']; ?>" class="btn btn-outline-danger btn-sm my-3 btn-block">See Details</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    <?php } else { echo "0 products to show"; }?>
</div>

<!-- Footer Section -->
<?php include("./static/footer.html"); ?>