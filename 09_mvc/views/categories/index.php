<?php if (!empty($data['categories'])) : ?>
    <ul>
        <?php foreach ($data['categories'] as $category) : ?>
            <h3>
                <a href="/products/index/category/<?php echo $category['id']; ?>">
                    <?php echo $category['name']; ?>
                </a>
            </h3>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
