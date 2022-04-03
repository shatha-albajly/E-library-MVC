<main class="dashboard">
    <form method="post" enctype="multipart/form-data">

        <?php




        if ($product['image']) : ?>
        <img src="/<?php echo $product['image'] ?>" class="product-img-view">
        <?php endif; ?>
        <div class="form-group">
            <label>Product Image</label><br>
            <input type="file" name="image">
        </div>

        <div class="form-group">
            <h4>اسم الكتاب</h4>
            <input type="text" name="title" class="form-control"
                value="<?php echo isset($product['title']) ? $product['title'] : ''; ?>">
        </div>
        <div class="form-group">
            <h4>وصف الكتاب</h4>
            <textarea class="form-control" name="description"><?php echo isset($product['description']) ?></textarea>
        </div>
        <div class="form-group">
            <h4>سعر الكتاب</h4>
            <input type="number" step=".01" name="price" class="form-control"
                value="<?php echo isset($product['price']) ?>">
        </div>

        <div class="form-group">
            <h4>القسم</h4>
            <input type="number" name="category-id" class="form-control"
                value="<?php echo isset($product['category_id']) ?>">
        </div>

        <div class="form-group">
            <h4>الكمية</h4>
            <input type="text" name="quantity" class="form-control" value="<?php echo isset($product['quantity']) ?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</main>