<?php if (!empty($data['products'])) : ?>
    <ul>
        <?php foreach ($data['products'] as $product) : ?>
            <h3>
                <a href="/products/product/id/<?php echo $product['id']; ?>">
                    <?php echo $product['name']; ?>
                </a>
            </h3>
            <p>$<?php echo $product['price']; ?></p>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
