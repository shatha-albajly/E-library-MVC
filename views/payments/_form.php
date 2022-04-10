<main class="dashboard">
    <form method="post" enctype="multipart/form-data">

        <?php




        if ($product['image']) : ?>
        <img src="/<?php echo $product['image'] ?>" class="product-img-view">
        <?php endif; ?>
        <div class="form-group">
            <label>Payments Image</label><br>
            <input type="file" name="image">
        </div>

        <div class="form-group">
            <h4>Payments Name</h4>
            <input type="text" name="name" class="form-control"
                value="<?php echo isset($product['name']) ? $product['name'] : ''; ?>">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</main>