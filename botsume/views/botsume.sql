-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Generation Time: Nov 05, 2016 at 02:40 PM

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
--

-- --------------------------------------------------------

--
-- Table structure for table `bots`
--

CREATE TABLE `bots` (
  `id` int(11) NOT NULL,
  `userid` text NOT NULL,
  `botname` text NOT NULL,
  `description` text NOT NULL,
  `botid` text NOT NULL,
  `imgsrc` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bots`
--

INSERT INTO `bots` (`id`, `userid`, `botname`, `description`, `botid`, `imgsrc`) VALUES
(1, 'ee3f924a-a350-11e6-ae29-bb567f77d6cd', 'Financial Aid Bot', 'This bot helps students understand financial aid award letters.					', '2dcb25be-a351-11e6-ae29-bb567f77d6cd', '');

-- --------------------------------------------------------

--
-- Table structure for table `facebook`
--

CREATE TABLE `facebook` (
  `id` int(13) NOT NULL,
  `botid` text NOT NULL,
  `apitoken` text NOT NULL,
  `webhook` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(14) NOT NULL,
  `botid` text NOT NULL,
  `questionid` text NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `botid`, `questionid`, `question`, `answer`) VALUES
(1, '2dcb25be-a351-11e6-ae29-bb567f77d6cd', '807cfda0-a351-11e6-ae29-bb567f77d6cd', 'What is federal verification?', 'When students submit a FAFSA, the Central Processing System selects some applications to be verified. Institutions are required to confirm the information reported and may choose additional applications to verify.'),
(2, '2dcb25be-a351-11e6-ae29-bb567f77d6cd', '98d22de4-a351-11e6-ae29-bb567f77d6cd', 'How will I know if my FAFSA has been selected for verification?', 'Students who provide an e-mail address when completing the FAFSA electronically, will receive an e-mail from the processor with an online link to their Student Aid Report, or SAR, which will indicate they have been selected. In addition, we will notify students via their Colby e-mail address.'),
(3, '2dcb25be-a351-11e6-ae29-bb567f77d6cd', 'ac0abd9a-a351-11e6-ae29-bb567f77d6cd', 'When will I hear from Colby that my FAFSA was selected?', 'Currently enrolled students can expect to hear from Student Financial Services by May 30th if they were selected by April 30th for the upcoming academic year. Students selected May 1st or later will typically hear from us within 30 business days after we are notified. Students who have been accepted for the upcoming year will work with the Office of Admissions and Financial Aid until June 30th to complete the verification process. At that time, their files will be transferred to Student Financial Services to resolve any remaining requirements.'),
(4, '2dcb25be-a351-11e6-ae29-bb567f77d6cd', 'cb81f21a-a351-11e6-ae29-bb567f77d6cd', 'What do I have to do to meet this requirement?', 'This will vary from student to student. We will send instructions to the Colby e-mail address if more information is required; some students may be required to submit additional forms. To verify income, taxfilers must use the IRS Data Retrieval Tool (DRT) on the FAFSA or submit an IRS Tax Transcript. Other documents may also be required in order to verify information.'),
(5, '2dcb25be-a351-11e6-ae29-bb567f77d6cd', 'e57eaff0-a351-11e6-ae29-bb567f77d6cd', 'Is there a deadline for submitting any requested information?', 'The worksheet and/or any additional information must be submitted within 30 days of our request. However, we recommend doing so as soon as possible. If a returning student is selected for federal verification prior to the first aid award, we will not calculate the aid eligibility until verification is complete. No financial aid will be disbursed if a student is selected and has not completed the federal verification process. If verification isnâ€™t completed by the studentâ€™s last day of classes due to withdrawal or the end of the semester, financial aid may be forfeited.'),
(6, '2dcb25be-a351-11e6-ae29-bb567f77d6cd', 'f976e658-a351-11e6-ae29-bb567f77d6cd', 'Do signed copies of the studentâ€™s and/or parentsâ€™ tax returns and W-2â€™s need to be submitted to Colby?', 'Yes. Signed copies of the tax returns and W-2â€™s, along with all other forms and schedules related to the returns, must be submitted to Colby even when the Data Retrieval Tool is used or an IRS Tax Transcript is submitted.'),
(7, '2dcb25be-a351-11e6-ae29-bb567f77d6cd', '0c56c4e6-a352-11e6-ae29-bb567f77d6cd', 'If the IRS DRT wasnâ€™t used when the FAFSA was completed, can it be utilized later?', 'Yes. Go to FAFSA.gov, log in to the studentâ€™s FAFSA record, and select â€œMake FAFSA corrections.â€ From there, navigate to the Financial Information section of the form and follow instructions to determine if you are eligible to use the IRS Data Retrieval Tool. It may take up to two weeks for IRS information to be available for the DRT for electronic filers, and eight weeks for paper filers. After using the tool, do not make corrections to the FAFSA. E-mail sfs@colby.edu with the new information.'),
(8, '2dcb25be-a351-11e6-ae29-bb567f77d6cd', '2ce9a1d8-a352-11e6-ae29-bb567f77d6cd', 'How do I request an IRS Tax Transcript if Iâ€™m not eligible to use the DRT or have difficulty utilizing it?', 'If students cannot or will not use the IRS Data Retrieva Tool, either at initial FAFSA filing or through the FAFSA on the Web correction process, they must document AGI, taxes paid, and untaxed income by providing an IRS Tax Return Transcript for the student and spouse or parents, as applicable. Ways to request the IRS transcript are listed below.  Go to www.irs.gov/transcript for instructions on how to order the IRS Tax Return Transcript, either online or by mail. By mailing or faxing the paper Form 4506T-EZ  to the IRS, which can be printed from the IRS website.'),
(9, '2dcb25be-a351-11e6-ae29-bb567f77d6cd', '92fb502a-a352-11e6-ae29-bb567f77d6cd', 'What if the student and/or parents file an amended tax return?', 'Students or parents who file an amended return cannot use the the IRS DRT, and if they amend the return after using the DRT, must notify Colby that they have done so. In addition to a copy of the original tax return required by Colby of all aid applicants, the documents below are also required to complete federal verification.  A signed copy of the IRS Form 1040X that was filed with the IRS must be submitted to our office. An IRS Tax Return Transcript (that will only include information from the original tax return and does not have to be signed), or any IRS transcript (such as a return transcript for taxpayer or RTFTP) that includes all the income and tax information required to be verified: AGI, income tax paid, education credits, etc.'),
(10, '2dcb25be-a351-11e6-ae29-bb567f77d6cd', 'ae0c9590-a352-11e6-ae29-bb567f77d6cd', 'If there are any errors, how will the FAFSA be corrected?', 'When corrections are necessary, Colby will send them to the processor electronically. If there is a change to the expected family contribution and federal aid eligibility, notification will be sent to the studentâ€™s Colby e-mail address. An online link will be provided in order to view the Statement of Financial Aid (award letter).'),
(11, '2dcb25be-a351-11e6-ae29-bb567f77d6cd', '007fb7da-a353-11e6-ae29-bb567f77d6cd', 'Do I have to reapply for financial aid each year?', 'Students must reapply for financial aid each year so that annual aid offers reflect familiesâ€™ most current financial circumstances. Applications are reviewed only when all requested documents and information have been received by Student Financial Services. It is strongly recommended that students and parents complete information together whenever possible beginning with federal tax returns, then completing the FAFSA and CSS Profile. Instructions to reapply for financial aid can be found here.'),
(12, '2dcb25be-a351-11e6-ae29-bb567f77d6cd', '391e905c-a353-11e6-ae29-bb567f77d6cd', 'What do I need to do if this is my first time applying for aid?', 'US citizens: As with returning US students who apply for financial aid, we ask that you complete your federal income taxes, then complete the CSS Profile Form as well as the FAFSA. Students who do not complete a financial aid application prior to admission will not be considered for College grant assistance for two award years.'),
(13, '2dcb25be-a351-11e6-ae29-bb567f77d6cd', '58301de4-a353-11e6-ae29-bb567f77d6cd', 'When is the aid application due?', 'All application materials are due April 30th in advance of the upcoming academic year. Though the government may allow tax filing extensions, it does not mean Colby can allow the same extension to apply for Colby financial aid. Tax returns and income documentation are for the most recent calendar year ended. (Ex. 2016-2017 Financial Aid Application Deadline: April 30, 2016; Income Documentation: Year Ended December 31, 2015). Click here for more information on applying for financial aid.'),
(14, '2dcb25be-a351-11e6-ae29-bb567f77d6cd', '71d1740a-a353-11e6-ae29-bb567f77d6cd', 'How soon are applications reviewed?', 'Financial Aid Renewal Applications are reviewed in the order in which the application becomes complete. Students are notified via their Colby email when their Statement of Financial Aid is ready to be viewed online. Historically, files are reviewed approximately 2-3 months after the application has been completed. Students can check the status of their application here in order to see if any documents are missing from the application.'),
(15, '2dcb25be-a351-11e6-ae29-bb567f77d6cd', '85a58fca-a353-11e6-ae29-bb567f77d6cd', 'My familyâ€™s financial situation has changed. Can I have my financial aid award reviewed?', 'If a family wishes to request a review of Colbyâ€™s analysis due to a substantial change in their financial situation, they should call 1-800-723-4033 or email SFS@colby.edu to obtain the proper form and instructions. Student Financial Services focuses on initial awards through the month of July to ensure that families who have completed their Renewal Application in a timely manner will receive awards before the start of the school year. Attention is gradually shifted to requests for review in the month of August. We appreciate your patience as we strive to give each application a thorough analysis but if the review has not been completed, it is asked that the family pay at least one-half of the previous yearâ€™s family contribution before the first day of classes.'),
(16, '2dcb25be-a351-11e6-ae29-bb567f77d6cd', '94f2a59e-a353-11e6-ae29-bb567f77d6cd', 'My student account statement shows pending aid. When will the aid be finalized?', 'Aid funds (all grants and loans) will be finalized (credited to the semesterâ€™s charges) no earlier than 10 days prior to the first day of classes for the fall and spring term. Federal Perkins and Stafford Loans do not appear as pending on the Student Account Statement until the student has completed a loan request form confirming his/her decision to borrow.'),
(17, '2dcb25be-a351-11e6-ae29-bb567f77d6cd', 'aa3d30ae-a353-11e6-ae29-bb567f77d6cd', 'How can I find out about outside scholarships?', 'Outside scholarships are a great way to reduce the cost of attendance after Colby has awarded the need-based federal and institutional grants for which you may be eligible. There are many websites available to assist you in your search; it is advised that you do not spend money on scholarship search services as they are often not reputable and you can normally find the information yourself for free. Our new scholarship page provides many links to search services in addition to particular scholarships.');

-- --------------------------------------------------------

--
-- Table structure for table `synonyms`
--

CREATE TABLE `synonyms` (
  `id` int(14) NOT NULL,
  `questionid` text NOT NULL,
  `word` text NOT NULL,
  `synonym` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `userid` text NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `userid`, `username`, `email`, `password`) VALUES
(1, 'ee3f924a-a350-11e6-ae29-bb567f77d6cd', 'ColbyBots', 'nedixo20@colby.edu', '9fd8ff0fcfd4f337b27c1ca076ce22f96a56c334');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bots`
--
ALTER TABLE `bots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facebook`
--
ALTER TABLE `facebook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `synonyms`
--
ALTER TABLE `synonyms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bots`
--
ALTER TABLE `bots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `facebook`
--
ALTER TABLE `facebook`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `synonyms`
--
ALTER TABLE `synonyms`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;