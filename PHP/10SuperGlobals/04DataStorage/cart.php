<?php 
include("header.php");
if ( isset($_GET['emptycart'])) {
    echo "called";
    unset($_SESSION['cartdata'] );
    header("location:cart.php");
}
?>
<h2 class="text-center my-3">Cart data</h2>
<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <table class="table table-bordered">
                <tr>
                    <td>Title</td>
                    <td>price</td>
                </tr>
                <?php 
                if (isset($_SESSION['cartdata'])) {
                foreach ($_SESSION['cartdata'] as $key => $value) { ?>
                    <tr>
                        <td><?php echo $value['product_title'] ?></td>
                        <td><?php echo $value['product_price'] ?></td>
                    </tr>
                    <?php } 
                    }else{ ?>
                        <tr> 
                            <td colspan="2">Cart is empty</td>
                        </tr>
                        <?php
                    
                    }?>
            </table>
            <?php if (isset($_SESSION['cartdata'])) { ?>
                <a href="cart.php?emptycart=1">Empty Cart</a>
            <?php } ?>
        </div>
    </div>
</div>