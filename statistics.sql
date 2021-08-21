--
-- Database: `winning`
--

-- --------------------------------------------------------

--
-- Table structure for table `statistics`
--

CREATE TABLE IF NOT EXISTS `statistics` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `smartINDIA` int(11) NOT NULL,
  `AI` int(11) NOT NULL,
  `IOT` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statistics`
--

INSERT INTO `statistics` (`id`, `year`, `smartINDIA`, `AI`, `IOT`) VALUES
(1, 2011, 5, 8, 2),
(2, 2012, 6, 10, 3),
(3, 2013, 7, 12, 4),
(4, 2014, 8, 14, 5),
(5, 2015, 9, 16, 7),
(6, 2016, 10, 17, 6),
(7, 2017, 1, 18, 7),
(8, 2018, 14, 22, 7),
(9, 2019, 1, 25, 8),
(10, 2020, 20, 31, 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `statistics`
--
ALTER TABLE `statistics`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `statistics`
--
ALTER TABLE `statistics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
