-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 08-09-2020 a las 17:21:59
-- Versión del servidor: 10.1.45-MariaDB
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `emprenet_socnet`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `idface` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`id`, `nombre`, `idface`, `created_at`, `updated_at`) VALUES
(1, 'United States', 1, '2020-06-01 18:49:46', '0000-00-00 00:00:00'),
(2, 'Canada', 2, '2020-06-01 18:49:46', '0000-00-00 00:00:00'),
(3, 'Afghanistan', 3, '2020-06-01 18:58:49', '0000-00-00 00:00:00'),
(4, 'Albania', 4, '2020-06-01 18:58:49', '0000-00-00 00:00:00'),
(5, 'Algeria', 5, '2020-06-01 18:58:49', '0000-00-00 00:00:00'),
(6, 'American Samoa', 6, '2020-06-01 18:58:49', '0000-00-00 00:00:00'),
(7, 'Andorra', 7, '2020-06-01 18:58:49', '0000-00-00 00:00:00'),
(8, 'Angola', 8, '2020-06-01 18:58:49', '0000-00-00 00:00:00'),
(9, 'Anguilla', 9, '2020-06-01 18:58:49', '0000-00-00 00:00:00'),
(10, 'Antartica', 10, '2020-06-01 18:58:49', '0000-00-00 00:00:00'),
(11, 'Antigua and/or Barbuda', 11, '2020-06-01 18:58:49', '0000-00-00 00:00:00'),
(12, 'Argentina', 12, '2020-06-01 18:58:49', '0000-00-00 00:00:00'),
(13, 'Armenia', 13, '2020-06-01 18:58:49', '0000-00-00 00:00:00'),
(14, 'Aruba', 14, '2020-06-01 18:58:49', '0000-00-00 00:00:00'),
(15, 'Australia', 15, '2020-06-01 18:58:49', '0000-00-00 00:00:00'),
(16, 'Austria', 16, '2020-06-01 18:58:49', '0000-00-00 00:00:00'),
(17, 'Azerbaijan', 17, '2020-06-01 18:58:49', '0000-00-00 00:00:00'),
(18, 'Bahamas', 18, '2020-06-01 18:58:49', '0000-00-00 00:00:00'),
(19, 'Bahrain', 19, '2020-06-01 18:58:49', '0000-00-00 00:00:00'),
(20, 'Bangladesh', 20, '2020-06-01 18:58:49', '0000-00-00 00:00:00'),
(21, 'Barbados', 21, '2020-06-01 18:58:49', '0000-00-00 00:00:00'),
(22, 'Belarus', 22, '2020-06-01 18:58:49', '0000-00-00 00:00:00'),
(23, 'Belgium', 23, '2020-06-01 18:58:49', '0000-00-00 00:00:00'),
(24, 'Belize', 24, '2020-06-01 18:58:49', '0000-00-00 00:00:00'),
(25, 'Benin', 25, '2020-06-01 18:58:49', '0000-00-00 00:00:00'),
(26, 'Bermuda', 26, '2020-06-01 18:58:49', '0000-00-00 00:00:00'),
(27, 'Bhutan', 27, '2020-06-01 18:58:49', '0000-00-00 00:00:00'),
(28, 'Bolivia', 28, '2020-06-01 18:58:49', '0000-00-00 00:00:00'),
(29, 'Bosnia and Herzegovina', 29, '2020-06-01 18:58:49', '0000-00-00 00:00:00'),
(30, 'Botswana', 30, '2020-06-01 18:58:49', '0000-00-00 00:00:00'),
(31, 'Bouvet Island', 31, '2020-06-01 18:58:49', '0000-00-00 00:00:00'),
(32, 'Brazil', 32, '2020-06-01 18:58:49', '0000-00-00 00:00:00'),
(34, 'Brunei Darussalam', 34, '2020-06-01 18:58:49', '0000-00-00 00:00:00'),
(35, 'Bulgaria', 35, '2020-06-01 18:58:49', '0000-00-00 00:00:00'),
(36, 'Burkina Faso', 36, '2020-06-01 18:58:49', '0000-00-00 00:00:00'),
(37, 'Burundi', 37, '2020-06-01 18:58:49', '0000-00-00 00:00:00'),
(38, 'Cambodia', 38, '2020-06-01 18:58:49', '0000-00-00 00:00:00'),
(39, 'Cameroon', 39, '2020-06-01 18:58:49', '0000-00-00 00:00:00'),
(40, 'Cape Verde', 40, '2020-06-01 18:58:49', '0000-00-00 00:00:00'),
(41, 'Cayman Islands', 41, '2020-06-01 18:58:49', '0000-00-00 00:00:00'),
(42, 'Central African Republic', 42, '2020-06-01 18:58:49', '0000-00-00 00:00:00'),
(43, 'Chad', 43, '2020-06-01 18:58:49', '0000-00-00 00:00:00'),
(44, 'Chile', 44, '2020-06-01 18:58:49', '0000-00-00 00:00:00'),
(45, 'China', 45, '2020-06-01 18:58:49', '0000-00-00 00:00:00'),
(46, 'Christmas Island', 46, '2020-06-01 18:58:49', '0000-00-00 00:00:00'),
(47, 'Cocos (Keeling) Islands', 47, '2020-06-01 18:58:49', '0000-00-00 00:00:00'),
(48, 'Colombia', 48, '2020-06-01 18:58:49', '0000-00-00 00:00:00'),
(49, 'Comoros', 49, '2020-06-01 18:58:49', '0000-00-00 00:00:00'),
(50, 'Congo', 50, '2020-06-01 18:58:49', '0000-00-00 00:00:00'),
(51, 'Cook Islands', 51, '2020-06-01 22:09:32', '0000-00-00 00:00:00'),
(52, 'Costa Rica', 52, '2020-06-01 22:09:32', '0000-00-00 00:00:00'),
(53, 'Croatia (Hrvatska)', 53, '2020-06-01 22:09:32', '0000-00-00 00:00:00'),
(54, 'Cuba', 54, '2020-06-01 22:09:32', '0000-00-00 00:00:00'),
(55, 'Cyprus', 55, '2020-06-01 22:09:32', '0000-00-00 00:00:00'),
(56, 'Czech Republic', 56, '2020-06-01 22:09:32', '0000-00-00 00:00:00'),
(57, 'Denmark', 57, '2020-06-01 22:09:32', '0000-00-00 00:00:00'),
(58, 'Djibouti', 58, '2020-06-01 22:09:32', '0000-00-00 00:00:00'),
(59, 'Dominica', 59, '2020-06-01 22:09:32', '0000-00-00 00:00:00'),
(60, 'Dominican Republic', 60, '2020-06-01 22:09:32', '0000-00-00 00:00:00'),
(61, 'East Timor', 61, '2020-06-01 22:09:32', '0000-00-00 00:00:00'),
(62, 'Ecuador', 62, '2020-06-01 22:09:32', '0000-00-00 00:00:00'),
(63, 'Egypt', 63, '2020-06-01 22:09:32', '0000-00-00 00:00:00'),
(64, 'El Salvador', 64, '2020-06-01 22:09:32', '0000-00-00 00:00:00'),
(65, 'Equatorial Guinea', 65, '2020-06-01 22:09:32', '0000-00-00 00:00:00'),
(66, 'Eritrea', 66, '2020-06-01 22:09:32', '0000-00-00 00:00:00'),
(67, 'Estonia', 67, '2020-06-01 22:09:32', '0000-00-00 00:00:00'),
(68, 'Ethiopia', 68, '2020-06-01 22:09:32', '0000-00-00 00:00:00'),
(69, 'Falkland Islands (Malvinas)', 69, '2020-06-01 22:09:32', '0000-00-00 00:00:00'),
(70, 'Faroe Islands', 70, '2020-06-01 22:09:32', '0000-00-00 00:00:00'),
(71, 'Fiji', 71, '2020-06-01 22:09:32', '0000-00-00 00:00:00'),
(72, 'Finland', 72, '2020-06-01 22:09:32', '0000-00-00 00:00:00'),
(73, 'France', 73, '2020-06-01 22:09:32', '0000-00-00 00:00:00'),
(74, 'France, Metropolitan', 74, '2020-06-01 22:09:32', '0000-00-00 00:00:00'),
(75, 'French Guiana', 75, '2020-06-01 22:09:32', '0000-00-00 00:00:00'),
(76, 'French Polynesia', 76, '2020-06-01 22:09:32', '0000-00-00 00:00:00'),
(77, 'French Southern Territories', 77, '2020-06-01 22:09:32', '0000-00-00 00:00:00'),
(78, 'Gabon', 78, '2020-06-01 22:09:32', '0000-00-00 00:00:00'),
(79, 'Gambia', 79, '2020-06-01 22:09:32', '0000-00-00 00:00:00'),
(80, 'Georgia', 80, '2020-06-01 22:09:32', '0000-00-00 00:00:00'),
(81, 'Germany', 81, '2020-06-01 22:09:32', '0000-00-00 00:00:00'),
(82, 'Ghana', 82, '2020-06-01 22:09:32', '0000-00-00 00:00:00'),
(83, 'Gibraltar', 83, '2020-06-01 22:09:32', '0000-00-00 00:00:00'),
(84, 'Greece', 84, '2020-06-01 22:09:32', '0000-00-00 00:00:00'),
(85, 'Greenland', 85, '2020-06-01 22:09:32', '0000-00-00 00:00:00'),
(86, 'Grenada', 86, '2020-06-01 22:09:32', '0000-00-00 00:00:00'),
(87, 'Guadeloupe', 87, '2020-06-01 22:09:32', '0000-00-00 00:00:00'),
(88, 'Guam', 88, '2020-06-01 22:09:32', '0000-00-00 00:00:00'),
(89, 'Guatemala', 89, '2020-06-01 22:09:32', '0000-00-00 00:00:00'),
(90, 'Guinea', 90, '2020-06-01 22:09:32', '0000-00-00 00:00:00'),
(91, 'Guinea-Bissau', 91, '2020-06-01 22:09:32', '0000-00-00 00:00:00'),
(92, 'Guyana', 92, '2020-06-01 22:09:32', '0000-00-00 00:00:00'),
(93, 'Haiti', 93, '2020-06-01 22:09:32', '0000-00-00 00:00:00'),
(94, 'Heard and Mc Donald Islands', 94, '2020-06-01 22:09:32', '0000-00-00 00:00:00'),
(95, 'Honduras', 95, '2020-06-01 22:09:32', '0000-00-00 00:00:00'),
(96, 'Hong Kong', 96, '2020-06-01 22:09:32', '0000-00-00 00:00:00'),
(97, 'Hungary', 97, '2020-06-01 22:09:32', '0000-00-00 00:00:00'),
(98, 'Iceland', 98, '2020-06-01 22:09:32', '0000-00-00 00:00:00'),
(99, 'India', 99, '2020-06-01 22:09:32', '0000-00-00 00:00:00'),
(100, 'Indonesia', 100, '2020-06-01 22:09:32', '0000-00-00 00:00:00'),
(101, 'Iran (Islamic Republic of)', 101, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(102, 'Iraq', 102, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(103, 'Ireland', 103, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(104, 'Israel', 104, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(105, 'Italy', 105, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(106, 'Ivory Coast', 106, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(107, 'Jamaica', 107, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(108, 'Japan', 108, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(109, 'Jordan', 109, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(110, 'Kazakhstan', 110, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(111, 'Kenya', 111, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(112, 'Kiribati', 112, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(113, 'Korea, Democratic People\'s Republic of', 113, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(114, 'Korea, Republic of', 114, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(115, 'Kosovo', 115, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(116, 'Kuwait', 116, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(117, 'Kyrgyzstan', 117, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(118, 'Lao People\'s Democratic Republic', 118, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(119, 'Latvia', 119, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(120, 'Lebanon', 120, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(121, 'Lesotho', 121, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(122, 'Liberia', 122, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(123, 'Libyan Arab Jamahiriya', 123, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(124, 'Liechtenstein', 124, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(125, 'Lithuania', 125, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(126, 'Luxembourg', 126, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(127, 'Macau', 127, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(128, 'Macedonia', 128, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(129, 'Madagascar', 129, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(130, 'Malawi', 130, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(131, 'Malaysia', 131, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(132, 'Maldives', 132, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(133, 'Mali', 133, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(134, 'Malta', 134, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(135, 'Marshall Islands', 135, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(136, 'Martinique', 136, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(137, 'Mauritania', 137, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(138, 'Mauritius', 138, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(139, 'Mayotte', 139, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(140, 'México', 140, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(141, 'Micronesia, Federated States of', 141, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(142, 'Moldova, Republic of', 142, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(143, 'Monaco', 143, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(144, 'Mongolia', 144, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(145, 'Montenegro', 145, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(146, 'Montserrat', 146, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(147, 'Morocco', 147, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(148, 'Mozambique', 148, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(149, 'Myanmar', 149, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(150, 'Namibia', 150, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(151, 'Nauru', 151, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(152, 'Nepal', 152, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(153, 'Netherlands', 153, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(154, 'Netherlands Antilles', 154, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(155, 'New Caledonia', 155, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(156, 'New Zealand', 156, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(157, 'Nicaragua', 157, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(158, 'Niger', 158, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(159, 'Nigeria', 159, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(160, 'Niue', 160, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(161, 'Norfork Island', 161, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(162, 'Northern Mariana Islands', 162, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(163, 'Norway', 163, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(164, 'Oman', 164, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(165, 'Pakistan', 165, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(166, 'Palau', 166, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(167, 'Panama', 167, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(168, 'Papua New Guinea', 168, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(169, 'Paraguay', 169, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(170, 'Peru', 170, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(171, 'Philippines', 171, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(172, 'Pitcairn', 172, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(173, 'Poland', 173, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(174, 'Portugal', 174, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(175, 'Puerto Rico', 175, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(176, 'Qatar', 176, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(177, 'Reunion', 177, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(178, 'Romania', 178, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(179, 'Russian Federation', 179, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(180, 'Rwanda', 180, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(181, 'Saint Kitts and Nevis', 181, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(182, 'Saint Lucia', 182, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(183, 'Saint Vincent and the Grenadines', 183, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(184, 'Samoa', 184, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(185, 'San Marino', 185, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(186, 'Sao Tome and Principe', 186, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(187, 'Saudi Arabia', 187, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(188, 'Senegal', 188, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(189, 'Serbia', 189, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(190, 'Seychelles', 190, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(191, 'Sierra Leone', 191, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(192, 'Singapore', 192, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(193, 'Slovakia', 193, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(194, 'Slovenia', 194, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(195, 'Solomon Islands', 195, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(196, 'Somalia', 196, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(197, 'South Africa', 197, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(198, 'South Georgia South Sandwich Islands', 198, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(199, 'Spain', 199, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(200, 'Sri Lanka', 200, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(201, 'St. Helena', 201, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(202, 'St. Pierre and Miquelon', 202, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(203, 'Sudan', 203, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(204, 'Suriname', 204, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(205, 'Svalbarn and Jan Mayen Islands', 205, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(206, 'Swaziland', 206, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(207, 'Sweden', 207, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(208, 'Switzerland', 208, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(209, 'Syrian Arab Republic', 209, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(210, 'Taiwan', 210, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(211, 'Tajikistan', 211, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(212, 'Tanzania, United Republic of', 212, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(213, 'Thailand', 213, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(214, 'Togo', 214, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(215, 'Tokelau', 215, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(216, 'Tonga', 216, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(217, 'Trinidad and Tobago', 217, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(218, 'Tunisia', 218, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(219, 'Turkey', 219, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(220, 'Turkmenistan', 220, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(221, 'Turks and Caicos Islands', 221, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(222, 'Tuvalu', 222, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(223, 'Uganda', 223, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(224, 'Ukraine', 224, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(225, 'United Arab Emirates', 225, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(226, 'United Kingdom', 226, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(227, 'United States minor outlying islands', 227, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(228, 'Uruguay', 228, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(229, 'Uzbekistan', 229, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(230, 'Vanuatu', 230, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(231, 'Vatican City State', 231, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(232, 'Venezuela', 232, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(233, 'Vietnam', 233, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(238, 'Yemen', 238, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(239, 'Yugoslavia', 239, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(240, 'Zaire', 240, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(241, 'Zambia', 241, '2020-06-01 22:38:28', '0000-00-00 00:00:00'),
(242, 'Zimbawe', 242, '2020-06-01 22:38:28', '0000-00-00 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `paises`
--
ALTER TABLE `paises`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
