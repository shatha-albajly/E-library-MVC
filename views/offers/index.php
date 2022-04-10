<main class="dashboard">

    <p>
        <a href="/offers/create" type="button" class="btn btn-sm btn-success">Add Offers</a>
    </p>
    <form action="" method="get">
        <div class="input-group mb-3">
            <input type="text" name="search" class="form-control" placeholder="Search" value="<?php echo $keyword ?>">
            <div class="input-group-append">
                <button class="btn btn-success" type="submit">Search</button>
            </div>
        </div>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">title</th>
                <th scope="col">discount</th>
                <th scope="col">start date</th>
                <th scope="col">end date</th>
                <th scope="col">all books</th>



                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>


            <?php
            foreach ($products as $i => $product) {
            ?>
            <?php if ($product['is_active']) : ?>

            <tr>
                <th scope="row"><?php echo (int)$i + 1 ?></th>

                <td><?php echo $product['title'] ?></td>
                <td><?php echo $product['discount'] ?></td>

                <td><?php echo $product['start_date'] ?></td>
                <td><?php echo $product['end_date'] ?></td>
                <td><?php echo $product['all_books'] ?></td>



                <td>
                    <a href="/offers/update?id=<?php echo $product['id'] ?>"
                        class="btn btn-sm btn-outline-primary">Edit</a>
                    <form method="post" action="/offers/delete" style="display: inline-block">
                        <input type="hidden" name="id" value="<?php echo $product['id'] ?>" />
                        <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                    </form>
                </td>
            </tr>

            <?php endif; ?>

            <?php } ?>
        </tbody>
    </table>

</main>