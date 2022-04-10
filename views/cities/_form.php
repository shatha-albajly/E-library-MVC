<main class="dashboard">
    <form method="post" enctype="multipart/form-data">




        <div class="form-group">
            <h4>city Name</h4>
            <input type="text" name="name" class="form-control"
                value="<?php echo isset($product['name']) ? $product['name'] : ''; ?>">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</main>