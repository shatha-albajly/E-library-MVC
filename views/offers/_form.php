<main class="dashboard">
    <form method="post" enctype="multipart/form-data">



        <div class="form-group">
            <h4>Offers title</h4>
            <input type="text" name="title" class="form-control"
                value="<?php echo isset($product['title']) ? $product['title'] : ''; ?>">
        </div>

        <div class="form-group">
            <h4>Offers discount</h4>
            <input type="number" name="discount" class="form-control"
                value="<?php echo isset($product['discount']) ? $product['discount'] : ''; ?>">
        </div>

        <div class="form-group">
            <h4>Offers start date</h4>
            <input type="date" name="start_date" class="form-control"
                value="<?php echo isset($product['start_date']) ? $product['start_date'] : ''; ?>">
        </div>

        <div class="form-group">
            <h4>Offers end date</h4>
            <input type="date" name="end_date" class="form-control"
                value="<?php echo isset($product['end_date']) ? $product['end_date'] : ''; ?>">
        </div>

        <div class="form-group">
            <h4>Offers all books</h4>
            <input type="text" name="all_books" class="form-control"
                value="<?php echo isset($product['all_books']) ? $product['all_books'] : ''; ?>">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</main>