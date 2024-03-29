--
-- Database: `testing1`
--

-- --------------------------------------------------------

--
-- Table structure for table `country_state_city`
--

CREATE TABLE `country_state_city` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country_state_city`
--

INSERT INTO `country_state_city` (`id`, `name`, `parent_id`) VALUES
(1, 'USA', 0),
(2, 'Canada', 0),
(3, 'Australia', 0),
(4, 'New York', 1),
(5, 'Alabama', 1),
(6, 'California', 1),
(7, 'Ontario', 2),
(8, 'British Columbia', 2),
(9, 'New South Wales', 3),
(10, 'Queensland', 3),
(11, 'New York city', 4),
(12, 'Buffalo', 4),
(13, 'Albany', 4),
(14, 'Birmingham', 5),
(15, 'Montgomery', 5),
(16, 'Huntsville', 5),
(17, 'Los Angeles', 6),
(18, 'San Francisco', 6),
(19, 'San Diego', 6),
(20, 'Toronto', 7),
(21, 'Ottawa', 7),
(22, 'Vancouver', 8),
(23, 'Victoria', 8),
(24, 'Sydney', 9),
(25, 'Newcastle', 9),
(26, 'City of Brisbane', 10),
(27, 'Gold Coast', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country_state_city`
--
ALTER TABLE `country_state_city`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `country_state_city`
--
ALTER TABLE `country_state_city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;