SELECT
  `category`,
  SUM(`price`) AS `sum_price`,
  MIN(`price`) AS `min_price`,
  MAX(`price`) AS `max_price`,
  AVG(`price`) AS `average_price`
FROM `products`
GROUP BY `category`
HAVING `sum_price` > 1500;