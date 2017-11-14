SELECT
  `products`.`name`,
  `categories`.`name`
FROM `products`
  INNER JOIN `categories` ON `products`.`category_id` = `categories`.`id`;


SELECT
  `products`.`name`,
  `categories`.`name`
FROM `products`
  RIGHT JOIN `categories`
    ON `products`.`category_id` = `categories`.`id`;