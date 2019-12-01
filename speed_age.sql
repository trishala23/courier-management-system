
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin` text NOT NULL,
  `password` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin`, `password`, `status`) VALUES
(1, 'admin', '1234', 0);

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `id` int(11) NOT NULL,
  `dealer_name` text NOT NULL,
  `branchaddress` text NOT NULL,
  `phone` text NOT NULL,
  `branch_location` text NOT NULL,
  `pincode` text NOT NULL,
  `reqid` text NOT NULL,
  `branch_name` text NOT NULL,
  `branch_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`id`, `dealer_name`, `branchaddress`, `phone`, `branch_location`, `pincode`, `reqid`, `branch_name`, `branch_id`) VALUES
(3, 'sachin', ' xccxc', 'sdsadsd', 'cxc', '0', '54545', 'dsdsdsd', 'bra1528549763'),
(4, 'test', ' tilak nagar ', '9575694043', 'indore', '452010', '1528562775', 'palasiya', 'bra1528562823');

-- --------------------------------------------------------

--
-- Table structure for table `consignment`
--

CREATE TABLE `consignment` (
  `id` int(11) NOT NULL,
  `shippername` text NOT NULL,
  `shipperasddress` text NOT NULL,
  `phone` text NOT NULL,
  `material_descrption` text NOT NULL,
  `no_of_item` int(20) NOT NULL,
  `branch_id` text NOT NULL,
  `booked_at_branch` text NOT NULL,
  `branchlocation` text NOT NULL,
  `date_of_booking` date NOT NULL,
  `destination` text NOT NULL,
  `shipment_charge` text NOT NULL,
  `total_weight` text NOT NULL,
  `corporate_id` text NOT NULL,
  `reciver_name` text NOT NULL,
  `reciver_address` text NOT NULL,
  `reciver_phone` text NOT NULL,
  `ccn` text NOT NULL,
  `booking_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consignment`
--

INSERT INTO `consignment` (`id`, `shippername`, `shipperasddress`, `phone`, `material_descrption`, `no_of_item`, `branch_id`, `booked_at_branch`, `branchlocation`, `date_of_booking`, `destination`, `shipment_charge`, `total_weight`, `corporate_id`, `reciver_name`, `reciver_address`, `reciver_phone`, `ccn`, `booking_id`) VALUES
(1, 'asdasd', 'asdasd', 'asdasd', 'adasd', 1212, '212', 'bra1528562823', '1w212', '2018-06-18', '1212', '1212', '122', '121', 'sachin', '', '', '9944', ''),
(3, 'ds', 's', '21', 'document', 1, '121', 'bra1528562823', '121', '2018-06-22', '121', '121', '1212', '1212', 'surav', '2121', '1212', '1122', '');

-- --------------------------------------------------------

--
-- Table structure for table `corporate`
--

CREATE TABLE `corporate` (
  `id` int(11) NOT NULL,
  `user_id` text NOT NULL,
  `password` text NOT NULL,
  `cname` text NOT NULL,
  `address` text NOT NULL,
  `c_code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `corporate`
--

INSERT INTO `corporate` (`id`, `user_id`, `password`, `cname`, `address`, `c_code`) VALUES
(1, 'sachin', '1234', 'sdfqe11`', 'dfds', 'dsfsdf'),
(6, 'ASDA', 'SDSAD', 'SADASD`', 'asdAS', 'ASDSAD');

-- --------------------------------------------------------

--
-- Table structure for table `deaer`
--

CREATE TABLE `deaer` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deaer`
--

INSERT INTO `deaer` (`id`, `username`, `password`) VALUES
(1, 'dealer', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `dearship_request`
--

CREATE TABLE `dearship_request` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `phone` text NOT NULL,
  `applydate` date NOT NULL,
  `amount` int(100) NOT NULL,
  `branch_location` text NOT NULL,
  `office` text NOT NULL,
  `pincode` int(20) NOT NULL,
  `reqid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dearship_request`
--

INSERT INTO `dearship_request` (`id`, `name`, `address`, `phone`, `applydate`, `amount`, `branch_location`, `office`, `pincode`, `reqid`) VALUES
(1, 'sachin', 'sagar', '957669403', '2018-06-13', 12000, 'indore', 'sagar', 0, '12234'),
(2, 'sachin', 'sdas', 'sdsadsd', '2018-06-12', 12000, 'cxc', 'xccxc', 0, '123456'),
(3, 'sachin', 'axdsd', 'sdd', '2018-06-08', 11212, 'zxdsd', 'dsd', 0, '3455'),
(4, 'sachin', 'sdas', 'sdsadsd', '2018-06-12', 12000, 'cxc', 'xccxc', 0, '54545'),
(5, 'gulab', 'asas', '2323232', '2018-06-21', 1200, 'sdsd', 'sdd', 121212, '1528545785'),
(6, 'test', 'indore', '9575694043', '2018-06-15', 23000, 'indore', 'tilak nagar ', 452010, '1528562775');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `id` int(11) NOT NULL,
  `ccn` text NOT NULL,
  `deliveryid` text NOT NULL,
  `shippername` text NOT NULL,
  `bookatbranch` text NOT NULL,
  `deliveryedatbranch` text NOT NULL,
  `dealername` text NOT NULL,
  `dateofdelivery` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`id`, `ccn`, `deliveryid`, `shippername`, `bookatbranch`, `deliveryedatbranch`, `dealername`, `dateofdelivery`) VALUES
(1, '', '', '', '', '', '', '0000-00-00'),
(2, '9944', 'del1528799907', 'asdasd', 'bra1528562823', 'bra1528562823', 'test', '2018-06-16');

-- --------------------------------------------------------

--
-- Table structure for table `dispatcher`
--

CREATE TABLE `dispatcher` (
  `id` int(11) NOT NULL,
  `ccn` text NOT NULL,
  `Branch_name` text NOT NULL,
  `shipper_name` text NOT NULL,
  `phone` text NOT NULL,
  `sender_address` text NOT NULL,
  `reciver_name` text NOT NULL,
  `reciver_phoneno` text NOT NULL,
  `reciver_ address` text NOT NULL,
  `assignto` text NOT NULL,
  `dispatcher_Id` text NOT NULL,
  `dispatchid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dispatcher`
--

INSERT INTO `dispatcher` (`id`, `ccn`, `Branch_name`, `shipper_name`, `phone`, `sender_address`, `reciver_name`, `reciver_phoneno`, `reciver_ address`, `assignto`, `dispatcher_Id`, `dispatchid`) VALUES
(1, '', '', '', '', '', '', '', '', '', '', ''),
(2, '1122', '121', 'ds', '21', 's', '2121', '1212', '2121', 'wew', 'wew', 'DIS1528803165');

-- --------------------------------------------------------

--
-- Table structure for table `emplyee`
--

CREATE TABLE `emplyee` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `role` text NOT NULL,
  `branchid` text NOT NULL,
  `branch_name` text NOT NULL,
  `branch_location` text NOT NULL,
  `dateofjoin` date NOT NULL,
  `salary` int(100) NOT NULL,
  `Empid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emplyee`
--

INSERT INTO `emplyee` (`id`, `name`, `role`, `branchid`, `branch_name`, `branch_location`, `dateofjoin`, `salary`, `Empid`) VALUES
(1, 'sachin', 'dweliver', 'asdsd', 'asdsad', 'asdasda', '2018-06-12', 12000, 'wew'),
(2, 'ASDAS', 'Deliveryboy', 'bra1528562823', 'palasiya', 'indore', '2018-05-29', 122, 'we'),
(3, 'asdds', 'Deliveryboy', 'bra1528549763', 'dsdsdsd', 'cxc', '2018-06-07', 1200, 'EMP1528653917');

-- --------------------------------------------------------

--
-- Table structure for table `place_request`
--

CREATE TABLE `place_request` (
  `id` int(11) NOT NULL,
  `applicant_name` text NOT NULL,
  `applicant_address` text NOT NULL,
  `phoneno` text NOT NULL,
  `date_of_apply` date NOT NULL,
  `amountdeposited` text NOT NULL,
  `branchLocation` text NOT NULL,
  `office_Address` text NOT NULL,
  `placeid` text NOT NULL,
  `status` int(11) NOT NULL,
  `pincode` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `place_request`
--

INSERT INTO `place_request` (`id`, `applicant_name`, `applicant_address`, `phoneno`, `date_of_apply`, `amountdeposited`, `branchLocation`, `office_Address`, `placeid`, `status`, `pincode`) VALUES
(1, '', '', '', '0000-00-00', '', '', '', '', 0, ''),
(2, '', '', '', '0000-00-00', '', '', '', '', 0, ''),
(3, 'sd', 'adsdas', 'sadasd', '2018-06-21', 'sdsad', 'sadas', 'asdas', 'pla1528810365', 1, 'sdsad');

-- --------------------------------------------------------

--
-- Table structure for table `receiver`
--

CREATE TABLE `receiver` (
  `id` int(11) NOT NULL,
  `ccn` text NOT NULL,
  `receiver_name` text NOT NULL,
  `reciverphoneno` text NOT NULL,
  `Material` text NOT NULL,
  `noofitem` text NOT NULL,
  `dateofreceive` text NOT NULL,
  `recivername` text NOT NULL,
  `relation` text NOT NULL,
  `Dispatchername` text NOT NULL,
  `DispatcherID` text NOT NULL,
  `receiver_id` text NOT NULL,
  `BookedAt` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receiver`
--

INSERT INTO `receiver` (`id`, `ccn`, `receiver_name`, `reciverphoneno`, `Material`, `noofitem`, `dateofreceive`, `recivername`, `relation`, `Dispatchername`, `DispatcherID`, `receiver_id`, `BookedAt`, `status`) VALUES
(1, '', '', '', '', '', '', '', '', '', '', '', '', 0),
(2, '1122', '2121', '1212', 'sdsad', '21', '2018-06-15', 'wd', 'adsad', 'wew', 'wew', 'REC1528808024', '', 0),
(3, '1122', '2121', '1212', 'sdsds', '21', '2018-06-15', 'sdsd', 'sdsd', 'wew', 'wew', 'REC1528808913', '121', 0);

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consignment`
--
ALTER TABLE `consignment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corporate`
--
ALTER TABLE `corporate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deaer`
--
ALTER TABLE `deaer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dearship_request`
--
ALTER TABLE `dearship_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dispatcher`
--
ALTER TABLE `dispatcher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emplyee`
--
ALTER TABLE `emplyee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `place_request`
--
ALTER TABLE `place_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receiver`
--
ALTER TABLE `receiver`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `consignment`
--
ALTER TABLE `consignment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `corporate`
--
ALTER TABLE `corporate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `deaer`
--
ALTER TABLE `deaer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dearship_request`
--
ALTER TABLE `dearship_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dispatcher`
--
ALTER TABLE `dispatcher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `emplyee`
--
ALTER TABLE `emplyee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `place_request`
--
ALTER TABLE `place_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `receiver`
--
ALTER TABLE `receiver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
