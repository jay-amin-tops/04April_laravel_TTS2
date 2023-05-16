<?php include('headerfile.php');

?>
<div class="container mt-5">
    <div class="row">
        <table class="table table-bordered">
            <thead class="bg-dark text-light">
                <tr>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($_SESSION['CartData'])) {


                    foreach ($_SESSION['CartData'] as $key => $value) { ?>
                        <tr>
                            <td><?php echo $value['title']; ?></td>
                            <td><?php echo $value['price']; ?></td>
                            <td><?php echo $value['qunaitity']; ?></td>
                            <td>delete</td>
                        </tr>
                    <?php } ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4">
                        <a href="emptycart.php">Empty Cart</a>
                    </td>
                </tr>
            </tfoot>
        <?php } else { ?>

            <tr>
                <td colspan="4">
                    no data found
                </td>
            </tr>
        <?php } ?>
        </table>
    </div>
</div>
</body>

</html>