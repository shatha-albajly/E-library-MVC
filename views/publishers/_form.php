<main class="dashboard">
    <form method="post" enctype="multipart/form-data">

        <?php




        if ($product['image']) : ?>
        <img src="/<?php echo $product['image'] ?>" class="product-img-view">
        <?php endif; ?>
        <div class="form-group">
            <label>publishers Image</label><br>
            <input type="file" name="image">
        </div>

        <div class="form-group">
            <h4>publishers Name</h4>
            <input type="text" name="name" class="form-control"
                value="<?php echo isset($product['name']) ? $product['name'] : ''; ?>">
        </div>

        <div class="form-group">
            <h4>publishers phone</h4>
            <input type="tel" name="phone" class="form-control"
                value="<?php echo isset($product['phone']) ? $product['phone'] : ''; ?>">
        </div>


        <div class="form-group">
            <h4>publishers Alterative Phone</h4>
            <input type="tel" name="alt_phone" class="form-control"
                value="<?php echo isset($product['alt_phone']) ? $product['alt_phone'] : ''; ?>">
        </div>


        <div class="form-group">
            <h4>publishers Fax</h4>
            <input type="text" name="fax" class="form-control"
                value="<?php echo isset($product['fax']) ? $product['fax'] : ''; ?>">
        </div>

        <div class="form-group">
            <h4>publishers Email</h4>
            <input type="email" name="email" class="form-control"
                value="<?php echo isset($product['email']) ? $product['email'] : ''; ?>">
        </div>

        <div class="form-group">
            <h4>publishers Address</h4>
            <input type="address" name="address" class="form-control"
                value="<?php echo isset($product['address']) ? $product['address'] : ''; ?>">
        </div>

        <div class="form-group">
            <h4>publishers Country</h4>
            <input type="text" name="country" class="form-control"
                value="<?php echo isset($product['country']) ? $product['country'] : ''; ?>">
        </div>




        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</main>