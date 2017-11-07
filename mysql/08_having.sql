SELECT
  `category_id`,
  SUM(`price`) AS `sum_price`,
  MIN(`price`) AS `min_price`,
  MAX(`price`) AS `max_price`,
  AVG(`price`) AS `average_price`
FROM `products`
GROUP BY `category_id`
HAVING `sum_price` > 1500;