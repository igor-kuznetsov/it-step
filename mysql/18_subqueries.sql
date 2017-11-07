CREATE TABLE `orders` (
  `id` INT UNSIGNED AUTO_INCREMENT,
  `date` DATETIME,
  `customer_id` INT UNSIGNED,
  PRIMARY KEY (`id`)
);

INSERT INTO `orders` (`date`, `customer_id`)
VALUES
  ('2017-02-20', 4),
  ('2017-04-10', 3),
  ('2017-04-12', 1),
  ('2017-04-18', 1),
  ('2017-04-18', 2),
  ('2017-04-23', 2),
  ('2017-04-23', 1),
  ('2017-04-25', 1),
  ('2017-05-11', 1),
  ('2017-05-14', 4),
  ('2017-06-17', 4),
  ('2017-06-27', 2),
  ('2017-07-24', 3),
  ('2017-08-11', 1),
  ('2017-08-13', 2),
  ('2017-09-10', 1),
  ('2017-09-11', 1),
  ('2017-09-25', 2),
  ('2017-09-27', 1),
  ('2017-10-17', 4),
  ('2017-10-23', 3),
  ('2017-10-25', 1);



SELECT *
FROM `orders` AS `o1`, `orders` AS `o2`;



SELECT *
FROM `orders` AS `o1`, `orders` AS `o2`
WHERE `o1`.`customer_id` = `o2`.`customer_id`;



SELECT *
FROM `orders` AS `o1`, `orders` AS `o2`
WHERE
  `o1`.`customer_id` = `o2`.`customer_id`
  AND `o1`.`date` < `o2`.`date`;



SELECT
  `o1`.`customer_id` AS `customer`,
  `o1`.`id` AS `order_1`,
  `o1`.`date` AS `order_1_date`,
  `o2`.`id` AS `order_2`,
  `o2`.`date` AS `order_2_date`,
  PERIOD_DIFF( /* Returns the number of months between P1 and P2. P1 and P2 should be in the format YYMM or YYYYMM. */
      DATE_FORMAT(`o2`.`date`, '%Y%m'),
      DATE_FORMAT(`o1`.`date`, '%Y%m')
  ) AS `diff_months`
FROM `orders` AS `o1`, `orders` AS `o2`
WHERE
  `o1`.`customer_id` = `o2`.`customer_id`
  AND `o1`.`date` < `o2`.`date`;



SELECT
  `o1`.`customer_id` AS `customer`,
  `o1`.`id` AS `order_1`,
  `o1`.`date` AS `order_1_date`,
  `o2`.`id` AS `order_2`,
  `o2`.`date` AS `order_2_date`,
  PERIOD_DIFF(
      DATE_FORMAT(`o2`.`date`, '%Y%m'),
      DATE_FORMAT(`o1`.`date`, '%Y%m')
  ) AS `diff_months`,
  (
    SELECT COUNT(*)
    FROM `orders` AS `o3`
    WHERE
      `o3`.`date` > `o1`.`date`
      AND `o3`.`date` < `o2`.`date`
      AND `o3`.`customer_id` = `o1`.`customer_id`
  ) AS `inner_orders`
FROM `orders` AS `o1`, `orders` AS `o2`
WHERE
  `o1`.`customer_id` = `o2`.`customer_id`
  AND `o1`.`date` < `o2`.`date`;



SELECT
  `o1`.`customer_id` AS `customer`,
  `o1`.`id` AS `order_1`,
  `o1`.`date` AS `order_1_date`,
  `o2`.`id` AS `order_2`,
  `o2`.`date` AS `order_2_date`
FROM `orders` AS `o1`, `orders` AS `o2`
WHERE
  `o1`.`customer_id` = `o2`.`customer_id`
  AND `o1`.`date` < `o2`.`date`
  AND (
        SELECT COUNT(*)
        FROM `orders` AS `o3`
        WHERE
          `o3`.`date` > `o1`.`date`
          AND `o3`.`date` < `o2`.`date`
          AND `o3`.`customer_id` = `o1`.`customer_id`
      ) = 0
  AND PERIOD_DIFF(
          DATE_FORMAT(`o2`.`date`, '%Y%m'),
          DATE_FORMAT(`o1`.`date`, '%Y%m')
      ) > 3;



SELECT
  `o1`.`customer_id` AS `customer`
FROM `orders` AS `o1`, `orders` AS `o2`
WHERE
  `o1`.`customer_id` = `o2`.`customer_id`
  AND `o1`.`date` < `o2`.`date`
  AND (
        SELECT COUNT(*)
        FROM `orders` AS `o3`
        WHERE
          `o3`.`date` > `o1`.`date`
          AND `o3`.`date` < `o2`.`date`
          AND `o3`.`customer_id` = `o1`.`customer_id`
      ) = 0
  AND PERIOD_DIFF(
          DATE_FORMAT(`o2`.`date`, '%Y%m'),
          DATE_FORMAT(`o1`.`date`, '%Y%m')
      ) > 3
GROUP BY `o1`.`customer_id`;