-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2020 at 12:51 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iplocatordb`
--

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `sno` int(10) UNSIGNED NOT NULL,
  `code1` varchar(2) NOT NULL,
  `code2` varchar(2) NOT NULL,
  `tld` varchar(3) NOT NULL,
  `country_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`sno`, `code1`, `code2`, `tld`, `country_name`) VALUES
(1, 'AA', 'AW', '.aw', 'Aruba'),
(2, 'AC', 'AG', '.ag', 'Antigua and Barbuda'),
(3, 'AE', 'AE', '.ae', 'United Arab Emirates'),
(4, 'AF', 'AF', '.af', 'Afghanistan'),
(5, 'AG', 'DZ', '.dz', 'Algeria'),
(6, 'AJ', 'AZ', '.az', 'Azerbaijan'),
(7, 'AL', 'AL', '.al', 'Albania'),
(8, 'AM', 'AM', '.am', 'Armenia'),
(9, 'AN', 'AD', '.ad', 'Andorra'),
(10, 'AO', 'AO', '.ao', 'Angola'),
(11, 'AQ', 'AS', '.as', 'American Samoa'),
(12, 'AR', 'AR', '.ar', 'Argentina'),
(13, 'AS', 'AU', '.au', 'Australia'),
(14, 'AT', '-', '-', 'Ashmore and Cartier Islands'),
(15, 'AU', 'AT', '.at', 'Austria'),
(16, 'AV', 'AI', '.ai', 'Anguilla'),
(17, '-', 'AX', '.ax', 'Aland Islands'),
(18, 'AY', 'AQ', '.aq', 'Antarctica'),
(19, 'BA', 'BH', '.bh', 'Bahrain'),
(20, 'BB', 'BB', '.bb', 'Barbados'),
(21, 'BC', 'BW', '.bw', 'Botswana'),
(22, 'BD', 'BM', '.bm', 'Bermuda'),
(23, 'BE', 'BE', '.be', 'Belgium'),
(24, 'BF', 'BS', '.bs', 'Bahamas, The'),
(25, 'BG', 'BD', '.bd', 'Bangladesh'),
(26, 'BH', 'BZ', '.bz', 'Belize'),
(27, 'BK', 'BA', '.ba', 'Bosnia and Herzegovina'),
(28, 'BL', 'BO', '.bo', 'Bolivia (Plurinational State of)'),
(29, 'TB', 'BL', '.bl', 'Saint Barthelemy'),
(30, 'BM', 'MM', '.mm', 'Myanmar'),
(31, 'BN', 'BJ', '.bj', 'Benin'),
(32, 'BO', 'BY', '.by', 'Belarus'),
(33, 'BP', 'SB', '.sb', 'Solomon Islands'),
(34, 'BQ', '-', '-', 'Navassa Island'),
(35, 'BR', 'BR', '.br', 'Brazil'),
(36, 'BS', '-', '-', 'Bassas da India'),
(37, 'BT', 'BT', '.bt', 'Bhutan'),
(38, 'BU', 'BG', '.bg', 'Bulgaria'),
(39, 'BV', 'BV', '.bv', 'Bouvet Island'),
(40, 'BX', 'BN', '.bn', 'Brunei'),
(41, 'BY', 'BI', '.bi', 'Burundi'),
(42, 'CA', 'CA', '.ca', 'Canada'),
(43, 'CB', 'KH', '.kh', 'Cambodia'),
(44, 'CD', 'TD', '.td', 'Chad'),
(45, 'CE', 'LK', '.lk', 'Sri Lanka'),
(46, 'CF', 'CG', '.cg', 'Congo, Republic of the'),
(47, 'CG', 'CD', '.cd', 'Congo (Democratic Republic of the)'),
(48, 'CH', 'CN', '.cn', 'China'),
(49, 'CI', 'CL', '.cl', 'Chile'),
(50, 'CJ', 'KY', '.ky', 'Cayman Islands'),
(51, 'CK', 'CC', '.cc', 'Cocos (Keeling) Islands'),
(52, 'CM', 'CM', '.cm', 'Cameroon'),
(53, 'CN', 'KM', '.km', 'Comoros'),
(54, 'CO', 'CO', '.co', 'Colombia'),
(55, 'CQ', 'MP', '.mp', 'Northern Mariana Islands'),
(56, 'CR', '-', '-', 'Coral Sea Islands'),
(57, 'CS', 'CR', '.cr', 'Costa Rica'),
(58, 'CT', 'CF', '.cf', 'Central African Republic'),
(59, 'CU', 'CU', '.cu', 'Cuba'),
(60, 'CV', 'CV', '.cv', 'Cabo Verde'),
(61, 'CW', 'CK', '.ck', 'Cook Islands'),
(62, 'CY', 'CY', '.cy', 'Cyprus'),
(63, 'DA', 'DK', '.dk', 'Denmark'),
(64, 'DJ', 'DJ', '.dj', 'Djibouti'),
(65, 'DO', 'DM', '.dm', 'Dominica'),
(66, 'DR', 'DO', '.do', 'Dominican Republic'),
(67, 'DX', '-', '-', 'Dhekelia Sovereign Base Area'),
(68, 'EC', 'EC', '.ec', 'Ecuador'),
(69, 'EG', 'EG', '.eg', 'Egypt'),
(70, 'EI', 'IE', '.ie', 'Ireland'),
(71, 'EK', 'GQ', '.gq', 'Equatorial Guinea'),
(72, 'EN', 'EE', '.ee', 'Estonia'),
(73, 'ER', 'ER', '.er', 'Eritrea'),
(74, 'ES', 'SV', '.sv', 'El Salvador'),
(75, 'ET', 'ET', '.et', 'Ethiopia'),
(76, 'EU', '-', '-', 'Europa Island'),
(77, 'EZ', 'CZ', '.cz', 'Czechia'),
(78, 'FG', 'GF', '.gf', 'French Guiana'),
(79, 'FI', 'FI', '.fi', 'Finland'),
(80, 'FJ', 'FJ', '.fj', 'Fiji'),
(81, 'FK', 'FK', '.fk', 'Falkland Islands (Islas Malvinas)'),
(82, 'FM', 'FM', '.fm', 'Micronesia (Federated States of)'),
(83, 'FO', 'FO', '.fo', 'Faroe Islands'),
(84, 'FP', 'PF', '.pf', 'French Polynesia'),
(85, 'FR', 'FR', '.fr', 'France'),
(86, 'FS', 'TF', '.tf', 'French Southern and Antarctic Lands'),
(87, 'GA', 'GM', '.gm', 'Gambia, The'),
(88, 'GB', 'GA', '.ga', 'Gabon'),
(89, 'GG', 'GE', '.ge', 'Georgia'),
(90, 'GH', 'GH', '.gh', 'Ghana'),
(91, 'GI', 'GI', '.gi', 'Gibraltar'),
(92, 'GJ', 'GD', '.gd', 'Grenada'),
(93, 'GK', 'GG', '.gg', 'Guernsey'),
(94, 'GL', 'GL', '.gl', 'Greenland'),
(95, 'GM', 'DE', '.de', 'Germany'),
(96, 'GO', '-', '-', 'Glorioso Islands'),
(97, 'GP', 'GP', '.gp', 'Guadeloupe'),
(98, 'GQ', 'GU', '.gu', 'Guam'),
(99, 'GR', 'GR', '.gr', 'Greece'),
(100, 'GT', 'GT', '.gt', 'Guatemala'),
(101, 'GV', 'GN', '.gn', 'Guinea'),
(102, 'GY', 'GY', '.gy', 'Guyana'),
(103, 'GZ', '-', '-', 'Gaza Strip'),
(104, 'HA', 'HT', '.ht', 'Haiti'),
(105, 'HK', 'HK', '.hk', 'Hong Kong'),
(106, 'HM', 'HM', '.hm', 'Heard Island and McDonald Islands'),
(107, 'HO', 'HN', '.hn', 'Honduras'),
(108, 'HR', 'HR', '.hr', 'Croatia'),
(109, 'HU', 'HU', '.hu', 'Hungary'),
(110, 'IC', 'IS', '.is', 'Iceland'),
(111, 'ID', 'ID', '.id', 'Indonesia'),
(112, 'IM', 'IM', '.im', 'Isle of Man'),
(113, 'IN', 'IN', '.in', 'India'),
(114, 'IO', 'IO', '.io', 'British Indian Ocean Territory'),
(115, 'IP', '-', '-', 'Clipperton Island'),
(116, 'IR', 'IR', '.ir', 'Iran (Islamic Republic of)'),
(117, 'IS', 'IL', '.il', 'Israel'),
(118, 'IT', 'IT', '.it', 'Italy'),
(119, 'IV', 'CI', '.ci', 'Cote d''Ivoire'),
(120, 'IZ', 'IQ', '.iq', 'Iraq'),
(121, 'JA', 'JP', '.jp', 'Japan'),
(122, 'JE', 'JE', '.je', 'Jersey'),
(123, 'JM', 'JM', '.jm', 'Jamaica'),
(124, 'JN', 'SJ', '-', 'Jan Mayen'),
(125, 'JO', 'JO', '.jo', 'Jordan'),
(126, 'JU', '-', '-', 'Juan de Nova Island'),
(127, 'KE', 'KE', '.ke', 'Kenya'),
(128, 'KG', 'KG', '.kg', 'Kyrgyzstan'),
(129, 'KN', 'KP', '.kp', 'Korea (Democratic People''s Republic of)'),
(130, 'KR', 'KI', '.ki', 'Kiribati'),
(131, 'KS', 'KR', '.kr', 'Korea (Republic of)'),
(132, 'KT', 'CX', '.cx', 'Christmas Island'),
(133, 'KU', 'KW', '.kw', 'Kuwait'),
(134, 'KV', 'XK', '-', 'Kosovo'),
(135, 'KZ', 'KZ', '.kz', 'Kazakhstan'),
(136, 'LA', 'LA', '.la', 'Laos'),
(137, 'LE', 'LB', '.lb', 'Lebanon'),
(138, 'LG', 'LV', '.lv', 'Latvia'),
(139, 'LH', 'LT', '.lt', 'Lithuania'),
(140, 'LI', 'LR', '.lr', 'Liberia'),
(141, 'LO', 'SK', '.sk', 'Slovakia'),
(142, '-', 'UM', '.us', 'United States Minor Outlying Islands'),
(143, 'LS', 'LI', '.li', 'Liechtenstein'),
(144, 'LT', 'LS', '.ls', 'Lesotho'),
(145, 'LU', 'LU', '.lu', 'Luxembourg'),
(146, 'LY', 'LY', '.ly', 'Libya'),
(147, 'MA', 'MG', '.mg', 'Madagascar'),
(148, 'MB', 'MQ', '.mq', 'Martinique'),
(149, 'MC', 'MO', '.mo', 'Macau'),
(150, 'MD', 'MD', '.md', 'Moldova (Republic of)'),
(151, 'MF', 'YT', '.yt', 'Mayotte'),
(152, 'MG', 'MN', '.mn', 'Mongolia'),
(153, 'MH', 'MS', '.ms', 'Montserrat'),
(154, 'MI', 'MW', '.mw', 'Malawi'),
(155, 'MJ', 'ME', '.me', 'Montenegro'),
(156, 'MK', 'MK', '.mk', 'North Macedonia'),
(157, 'ML', 'ML', '.ml', 'Mali'),
(158, 'MN', 'MC', '.mc', 'Monaco'),
(159, 'MO', 'MA', '.ma', 'Morocco'),
(160, 'MP', 'MU', '.mu', 'Mauritius'),
(161, 'MR', 'MR', '.mr', 'Mauritania'),
(162, 'MT', 'MT', '.mt', 'Malta'),
(163, 'MU', 'OM', '.om', 'Oman'),
(164, 'MV', 'MV', '.mv', 'Maldives'),
(165, 'MX', 'MX', '.mx', 'Mexico'),
(166, 'MY', 'MY', '.my', 'Malaysia'),
(167, 'MZ', 'MZ', '.mz', 'Mozambique'),
(168, 'NC', 'NC', '.nc', 'New Caledonia'),
(169, 'NE', 'NU', '.nu', 'Niue'),
(170, 'NF', 'NF', '.nf', 'Norfolk Island'),
(171, 'NG', 'NE', '.ne', 'Niger'),
(172, 'NH', 'VU', '.vu', 'Vanuatu'),
(173, 'NI', 'NG', '.ng', 'Nigeria'),
(174, 'NL', 'NL', '.nl', 'Netherlands'),
(175, 'NM', '', '', 'No Man''s Land'),
(176, 'NO', 'NO', '.no', 'Norway'),
(177, 'NP', 'NP', '.np', 'Nepal'),
(178, 'NR', 'NR', '.nr', 'Nauru'),
(179, 'NS', 'SR', '.sr', 'Suriname'),
(180, '-', 'BQ', '.bq', 'Bonaire, Sint Eustatius and Saba'),
(181, 'NU', 'NI', '.ni', 'Nicaragua'),
(182, 'NZ', 'NZ', '.nz', 'New Zealand'),
(183, 'PA', 'PY', '.py', 'Paraguay'),
(184, 'PC', 'PN', '.pn', 'Pitcairn Islands'),
(185, 'PE', 'PE', '.pe', 'Peru'),
(186, 'PF', '-', '-', 'Paracel Islands'),
(187, 'PG', '-', '-', 'Spratly Islands'),
(188, 'PK', 'PK', '.pk', 'Pakistan'),
(189, 'PL', 'PL', '.pl', 'Poland'),
(190, 'PM', 'PA', '.pa', 'Panama'),
(191, 'PO', 'PT', '.pt', 'Portugal'),
(192, 'PP', 'PG', '.pg', 'Papua New Guinea'),
(193, 'PS', 'PW', '.pw', 'Palau'),
(194, 'PU', 'GW', '.gw', 'Guinea-Bissau'),
(195, 'QA', 'QA', '.qa', 'Qatar'),
(196, 'RE', 'RE', '.re', 'Reunion'),
(197, 'RI', 'RS', '.rs', 'Serbia'),
(198, 'RM', 'MH', '.mh', 'Marshall Islands'),
(199, 'RN', 'MF', '-', 'Saint Martin'),
(200, 'RO', 'RO', '.ro', 'Romania'),
(201, 'RP', 'PH', '.ph', 'Philippines'),
(202, 'RQ', 'PR', '.pr', 'Puerto Rico'),
(203, 'RS', 'RU', '.ru', 'Russia'),
(204, 'RW', 'RW', '.rw', 'Rwanda'),
(205, 'SA', 'SA', '.sa', 'Saudi Arabia'),
(206, 'SB', 'PM', '.pm', 'Saint Pierre and Miquelon'),
(207, 'SC', 'KN', '.kn', 'Saint Kitts and Nevis'),
(208, 'SE', 'SC', '.sc', 'Seychelles'),
(209, 'SF', 'ZA', '.za', 'South Africa'),
(210, 'SG', 'SN', '.sn', 'Senegal'),
(211, 'SH', 'SH', '.sh', 'Saint Helena'),
(212, 'SI', 'SI', '.si', 'Slovenia'),
(213, 'SL', 'SL', '.sl', 'Sierra Leone'),
(214, 'SM', 'SM', '.sm', 'San Marino'),
(215, 'SN', 'SG', '.sg', 'Singapore'),
(216, 'SO', 'SO', '.so', 'Somalia'),
(217, 'SP', 'ES', '.es', 'Spain'),
(218, '-', 'SS', '.ss', 'South Sudan'),
(219, 'ST', 'LC', '.lc', 'Saint Lucia'),
(220, 'SU', 'SD', '.sd', 'Sudan'),
(221, 'SV', 'SJ', '.sj', 'Svalbard'),
(222, 'SW', 'SE', '.se', 'Sweden'),
(223, 'SX', 'GS', '.gs', 'South Georgia and the South Sandwich Islands'),
(224, 'NN', 'SX', '.sx', 'Sint Maarten'),
(225, 'SY', 'SY', '.sy', 'Syrian Arab Republic'),
(226, 'SZ', 'CH', '.ch', 'Switzerland'),
(227, 'TD', 'TT', '.tt', 'Trinidad and Tobago'),
(228, 'TE', '-', '-', 'Tromelin Island'),
(229, 'TH', 'TH', '.th', 'Thailand'),
(230, 'TI', 'TJ', '.tj', 'Tajikistan'),
(231, 'TK', 'TC', '.tc', 'Turks and Caicos Islands'),
(232, 'TL', 'TK', '.tk', 'Tokelau'),
(233, 'TN', 'TO', '.to', 'Tonga'),
(234, 'TO', 'TG', '.tg', 'Togo'),
(235, 'TP', 'ST', '.st', 'Sao Tome and Principe'),
(236, 'TS', 'TN', '.tn', 'Tunisia'),
(237, 'TT', 'TL', '.tl', 'Timor-Leste'),
(238, 'TU', 'TR', '.tr', 'Turkey'),
(239, 'TV', 'TV', '.tv', 'Tuvalu'),
(240, 'TW', 'TW', '.tw', 'Taiwan (Province of China)'),
(241, 'TX', 'TM', '.tm', 'Turkmenistan'),
(242, 'TZ', 'TZ', '.tz', 'Tanzania, United Republic of'),
(243, 'UC', 'CW', '.cw', 'Curacao'),
(244, 'UG', 'UG', '.ug', 'Uganda'),
(245, 'UK', 'GB', '.uk', 'United Kingdom of Great Britain and Northern Ireland'),
(246, 'UP', 'UA', '.ua', 'Ukraine'),
(247, 'US', 'US', '.us', 'United States of America'),
(248, 'UV', 'BF', '.bf', 'Burkina Faso'),
(249, 'UY', 'UY', '.uy', 'Uruguay'),
(250, 'UZ', 'UZ', '.uz', 'Uzbekistan'),
(251, 'VC', 'VC', '.vc', 'Saint Vincent and the Grenadines'),
(252, 'VE', 'VE', '.ve', 'Venezuela (Bolivarian Republic of)'),
(253, 'VI', 'VG', '.vg', 'Virgin Islands (British)'),
(254, 'VM', 'VN', '.vn', 'Vietnam'),
(255, 'VQ', 'VI', '.vi', 'Virgin Islands (U.S.)'),
(256, 'VT', 'VA', '.va', 'Holy See'),
(257, 'WA', 'NA', '.na', 'Namibia'),
(258, 'WE', 'PS', '.ps', 'Palestine, State of'),
(259, 'WF', 'WF', '.wf', 'Wallis and Futuna'),
(260, 'WI', 'EH', '.eh', 'Western Sahara'),
(261, 'WS', 'WS', '.ws', 'Samoa'),
(262, 'WZ', 'SZ', '.sz', 'Eswatini'),
(263, 'YI', 'CS', '.yu', 'Serbia and Montenegro'),
(264, 'YM', 'YE', '.ye', 'Yemen'),
(265, 'ZA', 'ZM', '.zm', 'Zambia'),
(266, 'ZI', 'ZW', '.zw', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `ipinfotable`
--

CREATE TABLE `ipinfotable` (
  `sno` int(10) UNSIGNED NOT NULL,
  `ipaddress` varchar(30) NOT NULL,
  `continent` varchar(100) NOT NULL,
  `country` varchar(200) NOT NULL,
  `flagimage` varchar(200) NOT NULL,
  `city` varchar(60) NOT NULL,
  `equator_relative` varchar(60) NOT NULL,
  `timezone` varchar(60) NOT NULL,
  `recdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ipinfotable`
--

INSERT INTO `ipinfotable` (`sno`, `ipaddress`, `continent`, `country`, `flagimage`, `city`, `equator_relative`, `timezone`, `recdate`) VALUES
(1, '124.120.86.42', 'Asia', 'Thailand', 'https://cdn.ipwhois.io/flags/th.svg', 'Bangkok', 'Above the Equator', 'Asia/Bangkok', '2020-08-07 10:16:26'),
(2, '140.89.65.51', 'North America', 'United States', 'https://cdn.ipwhois.io/flags/us.svg', 'Sunnyvale', 'Above the Equator', 'America/Los_Angeles', '2020-08-07 11:24:12'),
(3, '196.25.255.250', 'Africa', 'South Africa', 'https://cdn.ipwhois.io/flags/za.svg', 'Pretoria', 'Below the Equator', 'Africa/Johannesburg', '2020-08-07 17:42:01');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1596741713),
('m130524_201442_init', 1596741747);

-- --------------------------------------------------------

--
-- Table structure for table `neighbours`
--

CREATE TABLE `neighbours` (
  `sno` int(10) UNSIGNED NOT NULL,
  `country` varchar(100) NOT NULL,
  `neighbour` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `neighbours`
--

INSERT INTO `neighbours` (`sno`, `country`, `neighbour`) VALUES
(1, 'Thailand', 'Laos'),
(2, 'Thailand', 'Myanmar'),
(3, 'Thailand', 'Cambodia'),
(4, 'Thailand', 'Malaysia'),
(5, 'United States', 'Canada'),
(6, 'United States', 'Mexico'),
(7, 'United States', 'Cuba'),
(8, 'South Africa', 'Zimbabwe'),
(9, 'South Africa', 'Eswatini'),
(10, 'South Africa', 'Mozambique'),
(11, 'South Africa', 'Botswana'),
(12, 'South Africa', 'Namibia'),
(13, 'South Africa', 'Lesotho');

-- --------------------------------------------------------

--
-- Table structure for table `searchedip`
--

CREATE TABLE `searchedip` (
  `sno` int(10) UNSIGNED NOT NULL,
  `ipaddress` varchar(30) NOT NULL,
  `country` varchar(100) NOT NULL,
  `searchdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `searchedip`
--

INSERT INTO `searchedip` (`sno`, `ipaddress`, `country`, `searchdate`) VALUES
(1, '124.120.86.42', 'Thailand', '2020-08-07 10:16:26'),
(2, '140.89.65.51', 'United States', '2020-08-07 11:24:12'),
(3, '196.25.255.250', 'South Africa', '2020-08-07 17:42:01');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`sno`),
  ADD KEY `code1` (`code1`),
  ADD KEY `code2` (`code2`);

--
-- Indexes for table `ipinfotable`
--
ALTER TABLE `ipinfotable`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `neighbours`
--
ALTER TABLE `neighbours`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `searchedip`
--
ALTER TABLE `searchedip`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `sno` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=267;
--
-- AUTO_INCREMENT for table `ipinfotable`
--
ALTER TABLE `ipinfotable`
  MODIFY `sno` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `neighbours`
--
ALTER TABLE `neighbours`
  MODIFY `sno` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `searchedip`
--
ALTER TABLE `searchedip`
  MODIFY `sno` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
