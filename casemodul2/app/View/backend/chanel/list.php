<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
</head>
<body>


<div class="container">
    <a href="home.php?page=create-product">ADD PRODUCT</a>
    <table class="table" id="nuochoa">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Image</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Id Category</th>
            <th scope="col">Describes</th>
            <th scope="col">Status</th>
            <th scope="col" colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php if (isset($products)) {
            foreach ($products as $product) :?>
                <tr>
                    <th scope="row"><?php echo $product->getId() ?></th>
                    <td><img width="100px" src="<?php echo $product->getImage() ?>" alt=""></td>
                    <td><?php echo $product->getName() ?></td>
                    <td><?php echo $product->getPrice() ?></td>
                    <td><?php echo $product->getIdCategory() ?></td>
                    <td><?php echo $product->getDescribes() ?></td>
                    <td><?php echo $product->getStatus() ?></td>
                    <td><a href="home.php?page=update-product&id=<?php echo $product->getId()?>" class="btn btn-warning btn-lg">Edit</a></td>
                    <td><a href="home.php?page=delete-product&id=<?php echo $product->getId()?>" class="btn btn-danger btn-lg">Delete</a></td>
                </tr>
            <?php endforeach;
        } ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#nuochoa').DataTable({});
            });
        </script>
        </tbody>
    </table>
</div>

<?php include_once '../layouts/footer.php' ?>

</body>
</html>