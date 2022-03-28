SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `admin_reg` (
  `admin_id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `address` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;


INSERT INTO `admin_reg` (`admin_id`, `password`, `name`, `mail`, `contact`, `address`, `gender`) VALUES
('admin1', '123', 'Mayank Anand', 'mayank@outlook.com', '8912345677', 'Thane', 'Male'),
('admin2', '12345', 'Sana', 'sana@yahoo.com', '9874563210', 'Mumbai', 'Female');

-- Table structure for table `book_tour`
--

CREATE TABLE `book_tour` (
  `user_id` varchar(20) NOT NULL,
  `tour_id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `num` int(10) NOT NULL,
  `day` int(10) NOT NULL,
  `month` int(10) NOT NULL,
  `year` int(10) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;


-- Dumping data for table `book_tour`
--

INSERT INTO `book_tour` (`user_id`, `tour_id`, `name`, `num`, `day`, `month`, `year`, `total`) VALUES
('user1', 'tour02', 'Amritsar', 5, 2, 5, 2019, 25000),
('user1', 'tour03', 'Agra', 2, 15, 11, 2020, 30000);


-- Table structure for table `message`
--

CREATE TABLE `message` (
  `name` varchar(20) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;


-- Dumping data for table `message`
--

INSERT INTO `message` (`name`, `mail`, `contact`, `message`) VALUES
('Mayank Anand', 'mayank@gmail.com', '8912345677', 'Tours & Travels.'),
('singh', 'singh@gmail.com', '1234567890', 'Tours & Travels.'),
('Nano', 'abc@gmail.com', '9876543210', 'Trip To World!');


-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `user_id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;



-- Dumping data for table `reg`
--

INSERT INTO `reg` (`user_id`, `password`, `name`, `mail`, `contact`, `address`, `gender`) VALUES
('', '', '', '', '', '', ''),
('user1', '123', 'Atul', 'user1@gmail.com', '9876543210', 'Delhi', 'Male'),
('user2', '123', 'Riya', 'user2@gmail.com', '6549873210', 'Mumbai', 'Female'),
('user3', '123', 'Rohan', 'rohan@gmail.com', '9143453020', 'Punjab', 'Male'),
('user4', '321', 'priyanka', 'priyanka@gmail.com', '9831117201', 'Banglore', 'Female');



-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `tour_id` varchar(20) NOT NULL,
  `name` varchar(40) NOT NULL,
  `price` int(10) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`tour_id`, `name`, `price`, `image`) VALUES
('tour01', 'Jammu&Kashmir', 10000, 'images/jk.jpg'),
('tour02', 'Amritsar', 5000, 'images/amritsar.jpg'),
('tour03', 'Agra', 15000, 'images/agra.jpg'),
('tour04', 'Rajasthan', 15000, 'images/raj.jpg'),
('tour05', 'Kanyakumari', 20000, 'images/kanya.jpg');



-- Indexes for table `admin_reg`
--
ALTER TABLE `admin_reg`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`user_id`);