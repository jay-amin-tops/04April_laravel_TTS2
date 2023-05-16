<?php include('headerfile.php'); 
if (isset($_POST['prod1_save'])) {
    $_SESSION['CartData'] =array("product1"=>array("title"=>$_REQUEST["prod1_title"],"price"=>$_REQUEST["prod1_price"],"qunaitity"=>$_REQUEST["prod1_qunaitity"]));

}
if (isset($_POST['prod2_save'])) {
    $SecondProdData =array("product2"=>array("title"=>$_REQUEST["prod2_title"],"price"=>$_REQUEST["prod2_price"],"qunaitity"=>$_REQUEST["prod2_qunaitity"]));
    $_SESSION['CartData'] = array_merge($_SESSION['CartData'],$SecondProdData);
}

?>
<div class="container mt-5">
    <div class="row">
        <div class="col-3">
            <div class="card">
                <img src="images/1.avif" class="card-img-top w-100" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    <form method="post">
                        <input type="text" name="prod1_title" value="product1 keyboard" id="prod1_title">
                        <input type="text" name="prod1_price" value="4512" id="prod1_price">
                        <input type="text" name="prod1_qunaitity" value="5" id="prod1_qunaitity">
                        <input type="submit" name="prod1_save" value="Add to cart">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <img src="images/2.jpg" class="card-img-top w-100" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <form method="post">
                        <input type="text" name="prod2_title" value="product1 mouse" id="prod2_title">
                        <input type="text" name="prod2_price" value="9878" id="prod2_price">
                        <input type="text" name="prod2_qunaitity" value="1" id="prod2_qunaitity">
                        <input type="submit" name="prod2_save" value="Add to cart">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <img src="images/3.jpg" class="card-img-top w-100" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <img src="images/4.webp" class="card-img-top w-100" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <img src="images/1.avif" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>