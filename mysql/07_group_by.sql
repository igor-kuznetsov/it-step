SELECT `name`, `price` FROM `products` GROUP BY `price`;

SELECT `price`, GROUP_CONCAT(`name`) FROM `products` GROUP BY `price`;

SELECT
  `category`,
  SUM(`price`) AS `sum_price`,
  MIN(`price`) AS `min_price`,
  MAX(`price`) AS `max_price`,
  AVG(`price`) AS `average_price`
FROM `products`
GROUP BY `category`;