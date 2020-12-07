<!-- connect to database -->
<?php 

$id = $_GET['productID'];

include("./actions/connection.php");

$sql = "SELECT * FROM products WHERE productID=$id";
$result = mysqli_query($connect, $sql);
$row = $result->fetch_assoc();

?>

<?php include("./static/header.html"); ?>

<!-- product detail -->
<video src="./assets/product_details/media/Tesla.mp4" width="100%" muted loop autoplay></video>
<div class="container my-5">
    <div class="row">
        <div class="col-12 mt-3">
            <div class="card border-0 shadow-lg">
                <div class="card-horizontal">
                    <div>
                        <img class="h-100" style="object-fit: cover; object-position: center;" src="<?php echo $row['productImageUrl']; ?>" width="460" alt="<?php echo $row['productName']; ?>">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title pl-0 text-danger pt-2"><span><?php echo $row['productName']; ?></span> <span class="float-right">$<?php echo $row['productPrice']; ?></span></h4>
                        <div class="pl-4 pb-3 border-left border-danger">
                            <p class="text-dark">
                                <?php echo $row['productAbout']; ?>
                            </p>
                        </div>
                        <table class="table">
                            <tbody>
                                <tr>
                                <td class="pl-3 border-light border-bottom background-shade text-light"><?php echo $row['productSpec1']; ?></td>
                                </tr>
                                <tr>
                                <td class="pl-3 border-light border-bottom background-shade text-light"><?php echo $row['productSpec2']; ?></td>
                                </tr>
                                <tr>
                                <td class="pl-3 border-danger border-0 background-shade text-light"><?php echo $row['productSpec3']; ?></td>
                                </tr>
                            </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h1 class="display-4 mt-3">Model S</h1>
    <p class="text-justify">
        <?php echo $row['productDescription']; ?>
    </p>
    <h1>History</h1>
    <p class="text-justify">
        <?php echo $row['productHistory']; ?>
    </p>
    <a href="https://en.wikipedia.org/wiki/Tesla_Model_S">Continue Reading ...</a>
</div>

<!-- Footer Section -->
<?php include("./static/footer.html"); ?>