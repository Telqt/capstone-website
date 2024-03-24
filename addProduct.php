<?php

include_once("dashboardPanel.php");

?>

<div class="dash_prod_container">
    <h1>ADD PRODUCTS</h1>
    <p>Add a new product to the Database</p>

    <div class="addProductPanel">
        <form action="">
            <div class="addLeftPanel">
                <p>Basic Information</p>
                <div class="nameDescPanel">
                    <p>Product Name</p>
                    <input type="text" name="productname" required autocomplete="off">
                    <p>Product Description</p>
                    <textarea id="desc" type="text" name="productdesc" required autocomplete="off"></textarea>
                    
                    <p>Category</p>
                    <select type="text" name="productname" required autocomplete="off">
                        <option value="">Bag</option>
                        <option value="">Bags with Frame</option>
                        <option value="">Back to Back Vest</option>
                        <option value="">Bandolier</option>
                        <option value="">Parts</option>
                        <option value="">Accessories</option>
                    </select>
                    <p>Price</p>
                    <input id="price" type="number" name="price" required autocomplete="off">
                    <h2>PHP</h2>
                </div>
            </div>
            <div class="addRightPanel">
                <p>Product Image</p>
                <div class="imgPanel">
                    <img src="" alt="">
                    <input type="file" name="productphoto" required autocomplete="off">
                </div>
                <input id="productSavebtn" type="submit" name="submit" value="Save Changes">
            </div>
        </form>
    </div>

</div>

<?php

include_once("dashboardFooter.php");

?>