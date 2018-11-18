
CREATE DATABASE `business_information`;

CREATE TABLE `financial_details` (
  `total_salary` int(25) NOT NULL,
  `total_expenditure` int(25) NOT NULL,
  `revenue` int(25) NOT NULL,
  `profit` int(25) NOT NULL,
  `tax` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `genaral_staff` (
  `name` varchar(30) NOT NULL,
  `email_address` varchar(30) NOT NULL,
  `phone` int(12) NOT NULL,
  `position` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `payroll` (
  `payroll_ID` int(11) NOT NULL,
  `salary` int(25) NOT NULL,
  `tax` int(25) NOT NULL,
  `nssf` int(6) NOT NULL,
  `bonus` int(25) DEFAULT NULL,
  `employee_name` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `senior_staff` (
  `first_name` varchar(10) NOT NULL,
  `last_name` varchar(10) NOT NULL,
  `phone_number` int(12) NOT NULL,
  `email_address` varchar(30) NOT NULL,
  `title` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `senoir_staff` (
  `first_name` int(45) NOT NULL,
  `last_name` int(67) NOT NULL,
  `phone_number` int(12) NOT NULL,
  `email_address` int(23) NOT NULL,
  `title` int(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `payroll`
  ADD PRIMARY KEY (`payroll_ID`);
COMMIT;

