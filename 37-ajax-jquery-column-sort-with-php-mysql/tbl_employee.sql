 --  
 -- Table structure for table `tbl_employee`  
 --  
 CREATE TABLE IF NOT EXISTS `tbl_employee` (  
  `id` int(11) NOT NULL AUTO_INCREMENT,  
  `name` varchar(50) NOT NULL,  
  `gender` varchar(10) NOT NULL,  
  `designation` varchar(100) NOT NULL,  
  `age` int(11) NOT NULL,  
  PRIMARY KEY (`id`)  
 ) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;  
 --  
 -- Dumping data for table `tbl_employee`  
 --  
 INSERT INTO `tbl_employee` (`id`, `name`, `gender`, `designation`, `age`) VALUES  
 (1, 'Bruce Tom', 'Male', 'Driver', 36),  
 (5, 'Clara Gilliam', 'Female', 'Programmer', 24),  
 (6, 'Barbra K. Hurley', 'Female', 'Service technician', 26),  
 (7, 'Antonio J. Forbes', 'Male', 'Faller', 32),  
 (8, 'Charles D. Horst', 'Male', 'Financial investigator', 29),  
 (9, 'Beau L. Clayton', 'Male', 'Extractive metallurgical engin', 33),  
 (10, 'Ramona W. Burns', 'Female', 'Electronic typesetting machine operator', 27),  
 (11, 'Jennifer A. Morrison', 'Female', 'Rigging chaser', 29),  
 (12, 'Susan M. Juarez', 'Female', 'Control and valve installer', 25),  
 (13, 'Ellan D. Downie', 'Female', 'Education and training manager', 26),  
 (14, 'Larry T. Williamson', 'Male', 'Teaching assistant', 30),  
 (15, 'Lauren M. Reynolds', 'Female', 'Internet developer', 22),  
 (16, 'Joseph L. Judge', 'Male', 'Refrigeration mechanic', 35),  
 (17, 'Eric C. Lavelle', 'Male', 'Model', 21),  
 (18, 'Cheryl T. Smithers', 'Female', 'Personal banker', 23),  
 (19, 'Tonia J. Diaz', 'Female', 'Facilitator', 29),  
 (20, 'Stephanie P. Lederman', 'Female', 'Mental health aide', 27),  
 (21, 'Edward F. Sanchez', 'Male', 'Marine oiler', 28);