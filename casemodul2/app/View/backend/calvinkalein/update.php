<div class="container">
    <form method="post" enctype="multipart/form-data">
        <h3>CREATE PRODUCT</h3>
        <?php if (isset($product)) :?>
            <div class="mb-3">
                <label for="name-product" class="form-label">Name</label>
                <input type="text" required class="form-control" id="name-product" name="name-product" value="<?php echo $product->getName()?>">
            </div>
            <div class="mb-3">
                <label for="price-product" class="form-label">Price</label>
                <input type="text" required class="form-control" id="price-product" name="price-product" value="<?php echo $product->getPrice()?>">
            </div>
            <div class="mb-3">
                <label for="id-category" class="form-label">ID-Category</label>
                <input type="number" required class="form-control" id="id-category" name="id-category" value="<?php echo $product->getIdCategory()?>">
            </div>
            <div class="mb-3">
                <label for="describes" class="form-label">Describes</label>
                <input type="text" class="form-control" id="describes" name="describes" value="<?php echo $product->getDescribes()?>">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <input type="number" class="form-control" id="status" name="status" value="<?php echo $product->getStatus()?>">
            </div>
            <div class="mb-3">
                <label for="avt" class="form-label">Image</label>
                <input type="file" class="form-control" id="avt" name="fileToUpload">
            </div>
        <?php endif ?>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>