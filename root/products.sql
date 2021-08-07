--
-- Database for CST8285 Project Part 3 
-- Group members:
-- André dos Santos Ferreira 
-- Stephanie Ngo 
--

--
-- Database: `products`
--

CREATE DATABASE products;
USE products;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `ID` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `Name` varchar(60) NOT NULL,
  `Price` varchar(9) NOT NULL,
  `Description` varchar(200) NOT NULL DEFAULT '--',
  `Quantity` int(10) NOT NULL DEFAULT 1,
  `Rating` varchar(5) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `Name`, `Price`, `Description`, `Quantity`, `Rating`, `image`) VALUES
(1, 'Grey Sony PS1 Analog Controller Playstation', '12.99', 'Batteries: 1 Lithium ion nattery (included); Dimensions: 3.66 x 5.83 x 2.1 (in); Weight: 4.7 oz.', 1, '5', 'product'),
(2, 'PlayStation System PS1 Console', '64.99', 'CPU: 32-bit RISC; RAM: 2MB, 1MB VRAM; Sound: 16-bit; Dimensions: 2.5 x 10.75 x 7.5 (in).', 1, '4', 'product1'),
(3, 'Game Boy Pocket Green MGB-001 System Console', '89.99', 'CPU Speed: 4.2/8.4 MHz; Resolution: 160x144px; RAM: 32KB; Dimensions: 5.26 x 3.07 x 1.08 (in).', 1, '2', 'product2'),
(4, 'Nintendo 64 System Jungle Green Console N64', '249.99', 'CPU Speed: 95.75MHz; Resolution: 640x480px; RAM: 36 MB; Dimensions: 10.2 x 7.5 x 2.9 (in)', 1, '3', 'product3'),
(5, 'Gamecube System Platinum Silver Console', '119.99', 'CPU Speed: 485 MHz; RAM: 40MB, 4MB VRAM; Dimensions: 4.3 x 5.9 x 6.3 (in).', 1, '1', 'product4'),
(6, 'Gameboy Advance SP Replacement Battery', '16.99', 'Capacity: 850mAh; Volts: 3.7V; Lithium ion cell; Dimensions: 1.94 x 1.11 x 0.19 (in); Weight: 2.12 oz.', 1, '5', 'product5'),
(7, 'Atari 2600 Video Computer System Console', '40.00', 'CPU: 1.19 MHz; RAM: 128 bytes; Resolution: 160 x 192 pixels; 3.5 x 13.625 x 9.125(in).', 1, '4', 'Atari2600'),
(8, 'Super NES System', '140.00', 'CPU: 16-bit (3.58MHz); RAM: 128Kb; Resolution: 512x448 pixels; Dimension: 2.68 x 8 x 10 (in).', 1, '5', 'SuperNintendo'),
(9, 'Atari 7800 System - Video Game Console', '77.00', 'CPU: 1.79MHz; RAM: 4Kb; ROM: 4Kb; Dimensions: 8.5 x 3.0 x 11.0 (in).', 1, '3', 'Atari_7800'),
(10, 'Sega Genesis Console', '125.89', 'CPU: 7.6 MHz; RAM: 64Kb; VRAM: 64 KB; Resolution: 320x224 pixels; Dimensions: 2.25 x 10.95 x 8.45 (in).', 1, '5', 'sega-genesis'),
(11, 'Sega Master System Console', '65.00', 'CPU: 4 MHz; RAM: 8 Kb; VRAM: 16 Kb; Resolution: 256x192 pixels; Dimensions: 14.4 x 6.7 x 2.8 (in).', 1, '4', 'Master_System'),
(12, 'Official Sega Genesis Controller - Original Port', '23.25', 'Official Licensed SEGA Controller; Classic 6-button Layout; 10-foot cable length.', 1, '5', 'genesis-controller'),
(13, 'RetroAC  AC Power Adapter', '9.99', 'Compatible for Super Nintendo and Sega Genesis; Lenght: 5 feet;  ', 1, '5', 'ACAdapter'),
(14, 'AV Cable for Sega Genesis', '12.48', 'Gold plated; Compatible with any AV-ready TV; Lenght: 6 feet.', 1, '5', 'AC-Cable-forGenesis'),
(15, 'Official Atari 7800 Controller', '38.00', 'European layout with one detachable joystick and 2 action buttons; Cable length: 6 feet.', 1, '4', 'Atari_7800_Joypad'),
(16, 'Original Super Nintendo Controller', '32.89', 'Original 6-controller buttons layout; Cable length: 6 feet; Super sensitive buttons for precision control.', 1, '5', 'NES-Controller'),
(17, 'Master System Controller', '27.26', 'Original Model 1 MasterSytem controller with one joystick and 2 actions buttons; Cable length: 6 feet.', 1, '4', 'Master_System-controller'),
(18, 'Nintendo 64 Controller', '39.95', 'Original 10-buttons layout; Accurate analog control; Cable length: 6 feet.', 1, '5', 'N64_Controller'),
(19, 'Nintendo GameCube Controller', '19.90', 'Original 8-buttons layout; Sensitive button for precision control; Cable length: 6 feet.', 1, '5', 'gamecube-controller');

