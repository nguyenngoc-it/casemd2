<div class="container">
    <form method="post" enctype="multipart/form-data">
        <h3>CREATE PRODUCT</h3>
        <div class="mb-3">
            <label for="name-product" class="form-label">Name</label>
            <input type="text" required class="form-control" id="name-product" name="name-product">
        </div>
        <div class="mb-3">
            <label for="price-product" class="form-label">Price</label>
            <input type="text" required class="form-control" id="price-product" name="price-product">
        </div>
        <div class="mb-3">
            <label for="id-category" class="form-label">ID-Category</label>
            <input type="number" required class="form-control" id="id-category" name="id-category">
        </div>
        <div class="mb-3">
            <label for="describes" class="form-label">Describes</label>
            <input type="text" class="form-control" id="describes" name="describes">
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="number" class="form-control" id="status" name="status">
        </div>
        <div class="mb-3">
            <label for="avt" class="form-label">Image</label>
            <input type="file" class="form-control" id="avt" name="fileToUpload">
        </div>
        <button type="submit" class="btn btn-primary">Create product</button>
    </form>
</div>