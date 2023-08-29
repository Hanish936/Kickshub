-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2023 at 10:52 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoppingcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `mycart`
--

CREATE TABLE `mycart` (
  `Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `myshoppingcart`
--

CREATE TABLE `myshoppingcart` (
  `Id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Price` float NOT NULL,
  `Discount` float NOT NULL,
  `i_d` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `myshoppingcart`
--

INSERT INTO `myshoppingcart` (`Id`, `Name`, `Image`, `Price`, `Discount`, `i_d`) VALUES
(1, 'Yeezy Boost 350 V2 Carbon Beluga\r\n', 'sneaker1.webp', 100, 90, 1),
(2, 'Yeezy Boost 350 V2 \'Onyx\'', 'sneaker2.webp', 200, 100, 2),
(3, 'Yeezy Boost 350 V2 \'Bone\'', 'sneaker3.webp', 200, 100, 3),
(4, 'Yeezy Foam Runner \'Carbon\'', 'sneaker4.webp', 500, 200, 4),
(5, 'Air Jordan 1 Low Black University Blue', 'sneaker5.webp', 200, 100, 5),
(6, 'Air Jordan 1 Retro Low OG SP Travis Scott Olive', 'sneaker6.webp', 500, 100, 6),
(7, 'Air Jordan 1 Retro High OG \'Chicago Lost & Found\' (GS)', 'sneaker7.webp', 600, 100, 7),
(8, 'Air Jordan 1 Mid GS \'Ice Blue\'', 'sneaker8.webp', 600, 200, 8);

-- --------------------------------------------------------

--
-- Table structure for table `productdetail`
--

CREATE TABLE `productdetail` (
  `Id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Price` float NOT NULL,
  `detail` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productdetail`
--

INSERT INTO `productdetail` (`Id`, `Name`, `Image`, `Price`, `detail`) VALUES
(1, 'ADIDAS YEEZY', 'sneaker1.webp', 100, 'The adidas Yeezy 700 V3 Kyanite features familiar qualities that fans of the 700 V3 will appreciate. The upper is composed of Primeknit material that is enshrined in a glow-in-the-dark TPU cage. From there, a cream-colored EVA foam midsole adds a tonal element to the sneaker’s design.'),
(2, 'Nike dunks', 'sneaker2.webp', 500, 'This is the best sneaker'),
(3, 'Yeezy Boost 350 V2 \'Bone\'', 'sneaker3.webp', 500, 'The Yeezy Boost 350 V2 ‘Pure Oat’ treats the lifestyle runner to a refined makeover, highlighted by a breathable Primeknit upper in a subtle ivory finish. A monofilament side stripe adds a see-through element to the minimalist design, while a webbing pull tab at the heel provides easy on and off. Inside the shoe, three-stripe branding on the interior heel is accompanied by ‘Yeezy’ stamped on the sockliner. Responsive cushioning comes courtesy of a TPU-wrapped full-length Boost midsole.'),
(4, 'Yeezy Foam Runner \'Carbon\'', 'sneaker4.webp', 500, 'The adidas Yeezy Foam Runner ‘Carbon’ brings a stealthy one-note finish to the futuristic slip-on. A dark shade of grey is applied to the one-piece build, made with injected EVA foam and featuring flowing lines and a sculpted heel designed to cradle the back of the foot. Strategically mapped vents throughout the vamp and side panels provide enhanced breathability, while the textured footbed offers a comfortable fit. Underpinning the clog-like silhouette is a durable rubber outsole.'),
(5, 'Air Jordan 1 Low Black University Blue', 'sneaker5.webp', 400, 'Make your stride iconic with the Air Jordan 1 Low. Classic black and white leather get energised with a splash of Dark Powder Blue on the heel and outsole, while crafted details like the woven label, polyester tongue (with pe'),
(6, 'Air Jordan 1 Retro Low OG SP Travis Scott Olive', 'sneaker6.webp', 600, 'The Travis Scott x Air Jordan 1 Low OG SP ‘Black Phantom’ continues the Houston rapper’s remixed series centered around Michael Jordan’s debut signature shoe. This pair sports a black nubuck upper with tonal suede overlays and contrast white stitching throughout. Scott’s signature reverse Swoosh decorates the lateral side, while the opposite side features a traditional Swoosh accompanied by Cactus Jack branding. Mismatched heel tabs display a retro Wings logo on the right shoe and an embroidered bee motif on the left. The low-top is mounted on a black rubber cupsole with stitched sidewall construction and encapsulated Air-sole cushioning.'),
(7, 'Air Jordan 1 Retro High OG \'Chicago Lost & Found\'', 'sneaker7.webp', 400, 'The Air Jordan 1 Retro High OG ‘Chicago Lost & Found’ brings back the iconic silhouette that started it all. Featuring the high-cut shape of the original 1985 release, the leather upper combines a white base with a black signature Swoosh and scarlet overlays at the forefoot and heel. Cracked black leather appears on the padded collar, while a vintage pre-yellowed finish is applied to the white rubber midsole. The vintage ‘80s aesthetic extends to the special packaging, highlighted by a damaged box plastered with sale stickers and topped with a mismatched replacement lid. An accompanying sales invoice is emblematic of a time when the Air Jordan 1 lingered on the shelves of mom and pop stores,'),
(8, 'Air Jordan 1 Mid GS \'Ice Blue\'', 'sneaker8.webp', 1000, 'Every time the AJ1 gets a remake, you get the classic sneaker in new colours and textures for an exciting, revamped look but with all the familiar comforts you know. Premium materials and accents give modern expression to an all-time favourite.\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `myshoppingcart`
--
ALTER TABLE `myshoppingcart`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `productdetail`
--
ALTER TABLE `productdetail`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `myshoppingcart`
--
ALTER TABLE `myshoppingcart`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `productdetail`
--
ALTER TABLE `productdetail`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
