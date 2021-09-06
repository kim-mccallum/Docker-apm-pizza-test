DROP TABLE IF EXISTS `pizzas`;

CREATE TABLE `pizzas` (
  id INT AUTO_INCREMENT PRIMARY KEY,
  `title` varchar(255) NOT NULL,
  `ingredients` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
)