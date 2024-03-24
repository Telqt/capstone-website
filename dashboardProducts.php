<?php

include_once("dashboardPanel.php");

?>


<div class="dash_prod_container">
    <h1>PRODUCTS</h1>
    <a id="add" href="addProduct.php">Add Product</a>
</div>


<div class="product-display">
    <section>
        <nav>
            <div class="colh">Product Image</div>
            <div class="colh">Product Name</div>
            <div class="colh">Product Price</div>
            <div class="colh">Product Category</div>
            <div class="colh">Action</div>
        </nav>
    </section>

    <?php 

        include_once("./backend/dbh.php");

        $select = mysqli_query($conn,"SELECT * FROM products");


        while ($row = mysqli_fetch_array($select)) {
            echo "
            <div class='row'>
                <div class='col'><img src='" . $row['prodPicture'] ."'></div>
                <div class='col'>" . $row['prodName'] ."</div>
                <div class='col'>₱" . $row['prodPrice'] ."</div>
                <div class='col'>" . $row['prodCategory'] ."</div>
                <div class='col'>
                    <a class='edit' href='edit.php?edit=" . $row['prodID'] ."'>Edit</a>
                    <a class='delete' href='delete.php?edit=" . $row['prodID'] ."'>Delete</a>
                </div>
            </div>
            
            ";
        }

    ?>
</div>

<?php


include_once("dashboardFooter.php");

?>