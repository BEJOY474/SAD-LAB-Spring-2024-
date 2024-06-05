-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2024 at 07:50 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studyabroad`
--

-- --------------------------------------------------------

--
-- Table structure for table `abroad`
--

CREATE TABLE `abroad` (
  `ID` int(11) NOT NULL,
  `RANK_UNI` varchar(10) DEFAULT NULL,
  `UNIVERSITY` varchar(500) DEFAULT NULL,
  `COURSE_OFFER` text NOT NULL,
  `TUITION_FEE` varchar(20) DEFAULT NULL,
  `LIVING_COST` varchar(20) NOT NULL,
  `FUND` varchar(20) NOT NULL,
  `INTERNSHIP` varchar(20) NOT NULL DEFAULT 'NULL',
  `TA_RA_GA` varchar(20) NOT NULL,
  `UNI_IMG` varchar(50) NOT NULL,
  `CONTACT` varchar(200) NOT NULL,
  `ENG_PRO` varchar(20) DEFAULT NULL,
  `SCORE` varchar(10) DEFAULT 'MOI',
  `COUNTRY_NAME` varchar(20) DEFAULT NULL,
  `CGPA` varchar(20) DEFAULT NULL,
  `pubOrPrivate` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `abroad`
--

INSERT INTO `abroad` (`ID`, `RANK_UNI`, `UNIVERSITY`, `COURSE_OFFER`, `TUITION_FEE`, `LIVING_COST`, `FUND`, `INTERNSHIP`, `TA_RA_GA`, `UNI_IMG`, `CONTACT`, `ENG_PRO`, `SCORE`, `COUNTRY_NAME`, `CGPA`, `pubOrPrivate`) VALUES
(1, '150', 'New York University', 'CSE,EEE,CE,NURSING', '20000', '10000', 'NO', 'YES', 'NO', 'nyu.jpg', 'NYU@GMAIL.COM', 'IELTS', '6.5', 'USA', '3.00', 'Private'),
(2, '90', 'University of Sydney', 'CSE,EEE,CE,NURCING,SE,ME', '35000', '15000', 'YES', 'YES', 'NO', 'syd.jpg', 'UOS@gmail.com', 'PTE', '60', 'AUSTRALIA', '3.50', 'Public'),
(4, '3', 'University of Oxford', 'CSE,EEE,CE,NURCING,SE,ME,BBAMBA,BA', '40000', '15000', 'YES', 'NO', 'NO', 'oxf.avif', 'oxfordu@gmail.com', 'IELTS', '7.5', 'UK', '3.50', 'Private'),
(6, '148', 'University of Copenhagen', 'CSE,EEE,CE,NURCING,SE,ME', '30000', '10000', 'YES', 'NO', 'NO', 'uc.jpg', 'uc@gmail.com', 'IELTS', '6.5', 'DENMARK', '3.00', 'Public'),
(7, '67', 'University of Helsinki', 'CSE,EEE,CE,NURCING', '20000', '15000', 'YES', 'YES', 'NO', 'uh.jpg', 'uh@gmail.com', 'IELTS', '6.5', 'FINLAND', '3.00', 'Public'),
(9, '24', 'University Of Texas at Austin', ' Energy and Earth Resources,Statistics,Computational Science, Engineering, and Mathematics,Civil engineering,Computer Science,Architecture,MBA, Business Analytics,', '25000', '15000', 'YES', 'YES', 'YES', '11111UnivTexas.jpg', 'alex@gmail.com', 'TOEFL', '79', 'USA', '3.56', 'Public'),
(10, '151', 'Michigan Technological University', 'CSE,EEE,ME,CE,ECONOMICS,STATISTICS,LAW', '35000', '15000', 'YES', 'YES', 'YES', 'mtu-in-autumn-banner1600.jpg', 'mtu4u@mtu.edu', 'IELTS', '6.5', 'USA', '3.0', 'Public'),
(11, '79', 'Technical University of Munich', 'Computer Science,Chemical Engineering,Electrical and Electronic Engineering,Civil Engineering,Physics,Nanoscience and Nanotechnology', '6466', '12931.98', 'YES', 'YES', 'YES', 'tum.jpeg', 'studium@tum.de', 'IELTS', '6.5', 'GERMANY', '3.6', 'Public'),
(13, '18', 'University of Toronto', 'Aerospace Science and Engineering,Child Study and Education,Electrical and Computer Engineering,Economics,Mechanical and Industrial Engineering,Statistics,Physics,Applied Commputing', '38584', '27520 ', 'YES', 'YES', 'YES', 'UTC.jpeg', 'admissions.sgs@utoronto.ca ', 'IELTS', '7.0', 'CANADA', '3.7', 'Public'),
(14, '34', 'University of British Columbia', 'Astronomy,Bioinformatics, Data Science,Statistics,Computer Science,Law,Biochemistry and Molecular Biology,Economics,Biomedical Engineering,Civil Engineering', '61743.57', '37816.89', 'YES', 'NO', 'YES', 'ubc-vancouver-land-acknowledgment.jpg', 'admissions.inquiry@ubc.ca.', 'IELTS', '7.0', 'CANADA', '3.3', 'Public'),
(15, '136', 'University of Alberta', 'MBA,Biochemistry,Neuroscience ,Biomedical Engineering  ,Agricultural, Food, and Nutritional Science ,Mechanical Engineering,Electrical and Computer Engineering ,Biomedical Engineering,Civil and Environmental Engineering,', '10000', '25000', 'YES', 'YES', 'YES', 'ualberta-sign.jpg', 'welcome@international.ualberta.ca', 'TOEFL', '90', 'CANADA', '3.0', 'Public'),
(16, '103', 'McMaster University', 'Medical Sciences,Nursing,Mathematics and Statistics,Earth and Environmental Sciences,Chemical Biology and Biochemistry,', '19000', '15000', 'NO', 'YES', 'YES', 'McMaster-University.jpg', 'mail.mcmaster.ca', 'IELTS', '6.5', 'CANADA', '3.0', 'Private'),
(17, '103', 'University of Saskatchewan', 'Biomedical Discovery and Commercialization Chemical Biology and Biochemistry Chemistry Earth and Environmental Sciences Mathematics and Statistics Medical Sciences Nursing Occupational Therapy Physiotherapy Psychology', '31218 ', '37950 ', 'YES', 'YES', 'YES', 'Aerial-USask-2-OCN.jpg', 'admissions@usask.ca', 'IELTS', '6.5', 'CANADA', '3.0', 'Public'),
(18, '37', 'University of Manchester', 'Computer Security,Marketing,Health Psychology,Economics and Data Science,Criminology,Data Science (Mathematics),Applied Mathematics,Aerospace Engineering,', '30000', '18000', 'YES', 'YES', 'YES', 'campus-2560x1708.jpeg', 'international@adm.manchester.ac.uk', 'IELTS', '6.5', 'UK', '3.3', 'Private'),
(19, '8', 'University of Cambridge', ' Computer Science And IT (5) Environmental Studies And Earth Sciences , Humanities,Business And Management ,Archaeology,Agriculture And Veterinary, Computer Sciences, Economics, Mat;hematics, Medicine', '43500', '35000', 'YES', 'YES', 'YES', 'University-of-Cambridge-UK.jpeg', 'international.admissions@admin.cam.ac.uk', 'IELTS', '7.5', 'UK', '3.7', 'Private'),
(20, '37', 'University of Edinburgh', 'Data Science,Law,Economics,Human Resource,MBA,omputer Science,Business Analytics,', '28700', '19000', 'YES', 'YES', 'YES', 'UniPostCover--University-of-Edinburgh.jpg', 'international.admissions@admin.cam.ac.uk', 'IELTS', '7.5', 'UK', '3.6', 'Private'),
(21, '3', 'University of St Andrews ', 'Banking and Finance,Information Technology, Software Engineering,International Business,Finance and Economics,', '28700', '29000', 'YES', 'YES', 'YES', '219154_219143_cover_photo-st-salvators-quadrangle-', ' admissions@st-andrews.ac.uk', 'IELTS', '7.0', 'UK', '3.0', 'Public'),
(22, '25', 'Indiana University Bloomington ', 'CSE,EEE,EE,ME,MBA,PSCHYOLOGY,Civil Engineering,Finnace,Accounting,Marketing', '44357', '34246', 'YES', 'YES', 'YES', 'iu.jpg', 'admissions@indiana.edu', 'IELTS', '6.5', 'USA', '3.0', 'Public'),
(23, '1', 'Massachusetts Institute of Technology ', 'Data Science,Biochemistry Bioinformatics Biodiversity, Evolution, Ecology Chemistry Cognitive Neuroscience Computational Sciences,Economic Systems Mathematics', '68580', '82730', 'YES', 'YES', 'YES', 'MIT_Presidential-Search-01-PRESS.jpg', ' admissions@mit.edu', 'IELTS', '7.5', 'USA', '3.5', 'Private'),
(24, '2', 'Harvard University', 'MBA,Biochemistry,Neuroscience ,Biomedical Engineering  ,Agricultural, Food, and Nutritional Science ,Mechanical Engineering,Electrical and Computer Engineering ,Biomedical Engineering,Civil and Environmental Engineering,', '73440', '70000', 'YES', 'YES', 'YES', '102030363-harvard-university.jpg', ' admiss@fas.harvard.edu ', 'IELTS', '8.0', 'USA', '3.7', 'Private'),
(25, '4', 'University of California, Berkeley', 'MBA,Maketing,Finnace,Accounting,Economics,,Law,Medicine,CSE,EE,ECE,EEE,CHE,CE,SWE,', '72452', '70234', 'YES', 'YES', 'YES', '-1x-1.jpg', 'admissions@berkeley.edu', 'IELTS', '7.5', 'USA', '3.6', 'Public'),
(26, '98', 'Humboldt University of Berlin', 'Fish Biology, Fisheries and AquacultureOptical Sciences,Polymer Science,Information Science,Computational Neuroscience,', 'Free', '13,00', 'NO', 'YES', 'YES', 'humboldt-university-of-berlin-acceptance-rate2-min', 'studienservice@hu-berlin.de ', 'DUOLINGO', '110', 'GERMANY', '3.00', 'Public'),
(27, '106', 'RWTH Aachen University', 'Applied Health Informatics and Digital MedicineTextile Engineering,Robotic Systems EngineeringCivil Engineering, Management and Engineering in Computer Aided Mechanical Engineering,', 'Free', '15000', 'YES', 'YES', 'YES', 'show_picture.jpeg', 'studienservice@rwth-aachen.de', 'IELTS', '6.5', 'GERMANY', '3.3', 'Public'),
(28, '175', 'Heidelberg University', 'Mathematics, Medicine,Computer Sciences, Liberal Arts, Theology, Law, Economics,', '26700', '15100', 'YES', 'YES', 'YES', 'Heidelberg Image_1.jpg', 'admission@heidelberg.edu ', 'IELTS', '5.5', 'GERMANY', '3.2', 'Public'),
(29, '38', 'Ludwig Maximilian University of Munich', 'Mathematics,Natural Sciences, Computer Sciences, Liberal Arts, Theology, Law, Economics, Social Sciences, and Medicine', 'Free', '12570', 'YES', 'YES', 'YES', 'schmuckhof.jpg', 'zulassung.international@lmu.de', 'IELTS', '7.5', 'GERMANY', '3.85', 'Public'),
(30, '25', 'University of Melbourne', ' Computer Science, Data Science,Business Analytics,Economics,MBA,', '53562', '69312', 'YES', 'YES', 'YES', 'melbourne-1068x735.jpg', 'study@unimelb.edu.au', 'IELTS', '6.5', 'AUSTRALIA', '3.3', 'Public'),
(31, '36', 'University of Queensland', 'Data Science , Climate Change ,Engineering(IE,EE,CE,CSE,ME,CHE) , Business Administration ,Laws', '35760 ', '21041', 'YES', 'YES', 'YES', 'Em2e14WXEAInFo2.jpg_large', 'study@unimelb.edu.au', 'IELTS', '7.0', 'AUSTRALIA', '3.3', 'Private'),
(32, '67', 'Australian National University ', 'Business Administration,Data Science ,International Relations .Public Policy ,Engineering', '47520', ' 21041', 'YES', 'YES', 'YES', 'ANU_CaseStudy_Overview_Master29.jpg', 'study@anu.edu.au', 'IELTS', '6.5', 'AUSTRALIA', '3.0', 'Private'),
(33, '37', ' Monash University', 'Accounting and finance, Architecture,, languages and humanities, Business and leadership, Computer science ,Economics, Engineering, Environment and sustainability ,Fine art and design Health ,Information technology, Law Media and communication ,Medicine, Music and performing arts, Nursing, Pharmacy and pharmaceutical sciences ,Politics, philosophy and international relations, Psychology  ', '37050', ' 21041', 'YES', 'YES', 'YES', 'marquee_monash_0_0.jpg', 'study@monash.edu', 'PTE', '55', 'AUSTRALIA', '2.80', 'Public'),
(34, '121', 'Technical University of Denmark', 'Civil Engineering,Human-Centered Artificial Intelligence,Physics,Astro-Physics,Quantum Mechnics,Communication Technologies and System Design,Technology Entrepreneurship,Electrical Engineering,Computer Science and Engineering,Architectural Engineering,Ocean Engineering,Sustainable Fisheries and Aquaculture,', '18000', '32000', 'YES', 'YES', 'YES', 'The-Technical-University-of-Denmark-1024x536.jpg', ' bsjo@adm.dtu.dk', 'DUOLINGO', '105', 'DENMARK', '2.57', 'Private'),
(35, '143', 'Aarhus University ', 'Humanities,Social Sciences, Life Sciences, Management, Natural Sciences, Engineering and Technology,,Economics,Physcis,MBA,Marketing', '8625', '10975', 'YES', 'YES', 'YES', '@@cropped-hero.jpeg', ' ma.admission@au.dk', 'IELTS', '6.5', 'DENMARK', '3.4', 'Private'),
(36, '261', 'University of Southern Denmark', 'Data Science,Software Engineering,Mechanical Engineering,Economics,Chemical Engineering and Biotechnology,Chemistry,IT – Product Design ,Computational Biomedicine', '14650', ' 17580', 'YES', 'YES', 'YES', 'sdu 11_274402zv.jpg', ' international@sdu.dk ', 'IELTS', '6.5', 'DENMARK', '3.5', 'Private'),
(37, '688', 'Copenhagen Business School', 'MBA,Applied Economics and Finance,Business Administration and Bio Entrepreneurship,,Social Sciences', '22130.29', '20965.56', 'YES', 'YES', 'YES', 'abroad_uni_id59_tmb_202303.jpg', 'cbs@cbs.dk ', 'IELTS', '7.0', 'DENMARK', '3.0', 'Private'),
(38, '138', ' Aalto University ', 'Mathematics and Statistics Medical Sciences,Economics and Business Administration,Software Engineering,Mechanical Engineering,', '17650', '13578.68 ', 'YES', 'YES', 'YES', 'landmark-1-e1669729309822.jpg', 'studentservices@aalto.fi', 'DUOLINGO', '110', 'FINLAND', '3.0', 'Private'),
(39, '342', 'University of Turku', 'Information and Communication Technology, Materials Engineering, Mechanical Engineering, Biosciences,Accounting and finance, Architecture,, languages and humanities, Business and leadership', '13219 ', '20160', 'YES', 'YES', 'YES', '4-4.jpg', 'admissions@utu.fi', 'IELTS', '7.0', 'FINLAND', '3.4', 'Public'),
(40, '325', ' University of Oulu ', 'Data Science,Statistics,Computer Science,Law,Biochemistry and Molecular Biology,Economics,Business Administration and Bio Entrepreneurship,,Social Sciences', '22540', '15000', 'YES', 'YES', 'YES', 'Kirjatori_1500px.jpg', 'tilat@oulu.fi', 'IELTS', '6.5', 'FINLAND', '3.5', 'Public'),
(41, '102', 'Aix-Marseille University', 'Law, Economics, Languages, Medicine, Pharmacy, Dentistry,Literature, History,Mathematics, Physics, Chemistry, Biology, Engineering', '23768', '15765', 'YES', 'YES', 'YES', 'DIRCOM-presentation_universite.jpg', 'mint-contact@univ-amu.fr', 'IELTS', '6.0', 'FRANCE', '3.2', 'Public'),
(42, '91', 'Université Paris-Saclay', ' Medicine, PharmacyEconomics, Management, Law, Political Science,, Dentistry, Biology,Engineering, Mathematics, Physics, Chemistry, Computer Science', '11129.06', '15229.32 ', 'YES', 'YES', 'YES', 'images.jpeg', 'isabelle.arbogast@univ-evry.fr', 'DUOLINGO', '110', 'FRANCE', '3.0', 'Private'),
(43, '31', 'The University of Tokyo', 'Computer Science,Chemical Engineering,Electrical and Electronic Engineering,Civil Engineering,Physics,Nanoscience and Nanotechnology', '2061', '1115', 'YES', 'YES', 'YES', 'Tokyo-University.jpg', 'syunyu.adm@gs.mail.u-tokyo.ac.jp', 'IELTS', '7.0', 'JAPAN', '3.5', 'Public'),
(44, '32', 'Kyoto University', 'MBA,Applied Economics and Finance,Business Administration and Bio Entrepreneurship,,Social Sciences', '3556.83', '7967.49', 'YES', 'YES', 'YES', '1.What-kind.jpg', 'studyku@mail2.adm.kyoto-u.ac.jp', 'IELTS', '7.0', 'JAPAN', '3.6', 'Public'),
(45, '75', 'Osaka University', 'nformation Technology, Data Science,Law,Economics,Human Resource,Software Engineering,International Business,Finance and Economics,', '3556.88', '4115.84 ', 'YES', 'YES', 'YES', 'dscn0249.jpg', 'admission-pr@office.osaka-u.ac.jp ', 'IELTS', '6.5', 'JAPAN', '3.6', 'Private'),
(46, '62', 'Seoul National University ', 'Arts & Humanities, Design,Computer Science, Data Science,Business Analytics,Economics Instrumental Music, Korean Music, Chemical Convergence for Energy and Environment, Sociology,', '4189 ', '9736.60', 'YES', 'YES', 'YES', 'download.jpeg', 'snuoia@snu.ac.kr', 'IELTS', '6.5', 'SOUTH-KOREA', '3.6', 'Public'),
(47, '56', 'Korea Advanced Institute of Science and Technology', ' Life Sciences,Data Science,Statistics,Computer Science,Law,Biochemistry and Molecular Biology Management, Natural Sciences,', '16000', '12800', 'YES', 'YES', 'YES', '160713-kaist-submitted.jpg', '	isss@kaist.ac.kr', 'IELTS', '6.5', 'SOUTH-KOREA', '3.7', 'Public'),
(48, '847', 'Imperial College London', 'CSE,EEE,CE,SE,BBA,ARCH,PHY,CHM', '15000', '1500', 'NO', 'YES', 'NO', 'IMP.jpg', 'IMP@GMAIL.COM', 'DUOLINGO', '105', 'UK', '2.50', 'Private'),
(49, '112', 'Arkansas State University', 'CSE,EEE,CE,SE,BBA,ARCH,PHY,CHM', '9000', '5000', 'YES', 'NO', 'YES', 'ark.jpg', 'arsu@GMAIL.COM', 'DUOLINGO', '115', 'USA', '2.50', 'Public'),
(50, '24', 'Université PSL', 'CSE,EEE,CE,SE,BBA,ARCH,PHY,CHM', '17000', '1250', 'NO', 'NO', 'NO', 'upsl.jpg', 'upsl@GMAIL.COM', 'DUOLINGO', '100', 'FRANCE', '2.85', 'Public'),
(51, '98', 'Drexel University', 'CSE,EEE,CE,SE,BBA,ARCH,PHY,CHM', '37000', '1300', 'YES', 'YES', 'YES', 'dru.jpg', 'dru@GMAIL.COM', 'DUOLINGO', '125', 'USA', '3.67', 'Private'),
(52, '98', 'Drexel University', 'CSE,EEE,CE,SE,BBA,ARCH,PHY,CHM', '37000', '1300', 'YES', 'YES', 'YES', 'dru.jpg', 'dru@GMAIL.COM', 'MOI', 'MOI', 'USA', '3.67', 'Private'),
(53, '502', 'University of Portsmouth', 'CSE,EEE,CE,SE,BBA,ARCH,PHY,CHM', '19500', '1400', 'YES', 'YES', 'NO', 'UP.jpg', 'uOP@GMAIL.COM', 'MOI', 'MOI', 'UK', '2.90', 'Public'),
(54, '426', 'University of Lille', 'CSE,EEE,CE,SE,BBA,ARCH,PHY,CHM', '14500', '1100', 'NO', 'YES', 'YES', 'udl.jpg', 'uOl@GMAIL.COM', 'PTE', '54', 'FRANCE', '3.00', 'Public'),
(55, '33', 'University Of Michigan', 'CSE,EEE,CE,SE,BBA,ARCH,PHY,CHM', '21500', '1200', 'YES', 'YES', 'YES', 'uom.jpg', 'uom@GMAIL.COM', 'IELTS', '6.5', 'USA', '3.70', 'Public'),
(56, '33', 'University Of Michigan', 'CSE,EEE,CE,SE,BBA,ARCH,PHY,CHM', '21500', '1200', 'YES', 'YES', 'YES', 'uom.jpg', 'uom@GMAIL.COM', 'DUOLINGO', '105', 'USA', '3.70', 'Public'),
(57, '47', 'Texas A&M University', 'Mathematics, Medicine,Computer Sciences, Liberal Arts, Theology, Law, Economics,', '9500', '900', 'YES', 'YES', 'YES', 'ATM.jpg', 'uom@GMAIL.COM', 'DUOLINGO', '100', 'USA', '3.00', 'Public'),
(58, '3339', 'McNeese State University', 'Mathematics, Medicine,Computer Sciences, Liberal Arts, Theology, Law, Economics,', '11520', '1100', 'YES', 'YES', 'YES', 'mcsu.png', 'uom@GMAIL.COM', 'DUOLINGO', '100', 'USA', '2.75', 'Public'),
(59, '3464', 'Minot State University', 'Data Science,Biochemistry Bioinformatics Biodiversity, Evolution, Ecology Chemistry Cognitive Neuroscience Computational Sciences,Economic Systems Mathematics', '8934', '1000', 'YES', 'YES', 'YES', 'mitu.jpg', 'msu@gmail.com', 'DUOLINGO', '100', 'USA', '2.75', 'Public'),
(60, '4467', 'Henderson State University', 'CSE,EEE,CE,SE,BBA,ARCH,PHY,CHM', '1560', '1430', 'YES', 'YES', 'YES', 'hsu.jpg', 'hsu@gmail.com', 'PTE', '53', 'USA', '2.50', 'Public'),
(61, '800', 'International American University', 'CSE,EEE,CE,SE,BBA,ARCH,PHY,CHM', '760', '1000', 'NO', 'YES', 'NO', 'iau.jpg', 'iau@gmail.com', 'PTE', '50', 'USA', '2.00', 'Private'),
(62, '800', 'International American University', 'CSE,EEE,CE,SE,BBA,ARCH,PHY,CHM', '760', '1000', 'NO', 'YES', 'NO', 'iau.jpg', 'iau@gmail.com', 'DUOLINGO', '90', 'USA', '2.00', 'Private'),
(63, '800', 'International American University', 'CSE,EEE,CE,SE,BBA,ARCH,PHY,CHM', '760', '1000', 'NO', 'YES', 'NO', 'iau.jpg', 'iau@gmail.com', 'IELTS', '5.5', 'USA', '2.00', 'Private'),
(64, '800', 'International American University', 'CSE,EEE,CE,SE,BBA,ARCH,PHY,CHM', '760', '1000', 'NO', 'YES', 'NO', 'iau.jpg', 'iau@gmail.com', 'iTEP', '3.5', 'USA', '2.00', 'Private'),
(65, '800', 'International American University', 'CSE,EEE,CE,SE,BBA,ARCH,PHY,CHM', '760', '1000', 'NO', 'YES', 'NO', 'iau.jpg', 'iau@gmail.com', 'MOI', 'MOI', 'USA', '2.00', 'Private'),
(66, '19', 'University of South Wales', 'Mathematics, Medicine,Computer Sciences, Liberal Arts, Theology, Law, Economics,', '42000', '2100', 'YES', 'YES', 'NO', 'usw.jpg', 'UNSW@gmail.com', 'PTE', '64', 'AUSTRALIA', '3.00', 'Private'),
(67, '25', 'University of Melbourne', 'Computer Science, Data Science,Business Analytics,Economics,MBA', '3000', '2200', 'YES', 'YES', 'NO', 'uofml.jpg', 'uoml@gmail.com', 'PTE', '58', 'AUSTRALIA', '3.00', 'Public'),
(68, '5', 'Stanford University ', 'Energy and Earth Resources,Statistics,Computational Science, Engineering, and Mathematics,Civil engineering,Computer Science,Arc', '55000', '10000', 'YES', 'YES', 'YES', 'stnfrd.jpg', 'su@gmail.com', 'DUOLINGO', '125', 'USA', '3.00', 'Private'),
(69, '5', 'Stanford University ', 'Energy and Earth Resources,Statistics,Computational Science, Engineering, and Mathematics,Civil engineering,Computer Science,Arc', '55000', '10000', 'YES', 'YES', 'YES', 'stnfrd.jpg', 'su@gmail.com', 'IELTS', '7.0', 'USA', '3.00', 'Private'),
(70, '5', 'Stanford University ', 'Energy and Earth Resources,Statistics,Computational Science, Engineering, and Mathematics,Civil engineering,Computer Science,Arc', '55000', '10000', 'YES', 'YES', 'YES', 'stnfrd.jpg', 'su@gmail.com', 'TOEFL', '90', 'USA', '3.00', 'Private'),
(71, '38', 'Institut Polytechnique de Paris ', 'CSE,EEE,CE,NURCING,SE,ME,BBAMBA,BA', '30000', '15000', 'NO', 'YES', 'NO', 'ins.avif', 'ins@gmail.com', 'IELTS', '6.5', 'FRANCE', '3.00', 'Private'),
(72, '89', 'The University of Adelaide', 'Energy and Earth Resources,Statistics,Computational Science, Engineering, and Mathematics,Civil engineering,Computer Science,Arc', '32000', '20000', 'YES', 'YES', 'YES', 'adilade.jpg', 'uoa@gmail.com', 'IELTS', '6.5', 'AUSTRALIA', '3.00', 'Public'),
(73, '89', 'The University of Adelaide', 'Energy and Earth Resources,Statistics,Computational Science, Engineering, and Mathematics,Civil engineering,Computer Science,Arc', '32000', '20000', 'YES', 'YES', 'YES', 'adilade.jpg', 'uoa@gmail.com', 'PTE', '58', 'AUSTRALIA', '3.00', 'Public'),
(74, '91', 'Tokyo Institute of Technology ', 'CSE,EEE,CE,NURCING,SE,ME,BBAMBA,BA', '15000', '10000', 'YES', 'YES', 'NO', 'japan.jpg', 'tiot@gmail.com', 'DUOLINGO', '120', 'JAPAN', '3.00', 'Private'),
(75, '91', ' Tokyo Institute of Technology ', 'CSE,EEE,CE,NURCING,SE,ME,BBAMBA,BA', '15000', '10000', 'YES', 'YES', 'NO', 'japan.jpg', 'tiot@gmail.com', 'IELTS', '6', 'JAPAN', '3.00', 'Private'),
(76, '100', 'Pohang University of Science and Technology', 'CSE,EEE,CE,NURCING,SE,ME,BBAMBA,BA', '20000', '10000', 'YES', 'YES', 'YES', 'kor.jpg', 'pust@gmail.com', 'DUOLINGO', '120', 'SOUTH-KOREA', '3.00', 'Private'),
(77, '100', 'Pohang University of Science and Technology', 'CSE,EEE,CE,NURCING,SE,ME,BBAMBA,BA', '20000', '10000', 'YES', 'YES', 'YES', 'kor.jpg', 'pust@gmail.com', 'IELTS', '6.5', 'SOUTH-KOREA', '3.00', 'Private'),
(78, '100', 'University of Nottingham', 'Energy and Earth Resources,Statistics,Computational Science, Engineering, and Mathematics,Civil engineering,Computer Science,Arc', '30000', '10000', 'YES', 'NO', 'YES', 'un.jpg', 'uon@gmail.com', 'DUOLINGO', '130', 'UK', '3.00', 'Public'),
(79, '3', 'University of Oxford', 'CSE,EEE,CE,NURCING,SE,ME,BBAMBA,BA', '99000', '15000', 'YES', 'YES', 'YES', 'ox.avif', 'oxfordu@gmail.com', 'TOEFL', '100', 'UK', '3.20', 'Public'),
(80, '9', 'University College London', 'CSE,EEE,CE,NURCING,SE,ME', '30000', '10000', 'YES', 'YES', 'NO', 'unl.avif', 'unl@gmail.com', 'TOEFL', '92', 'UK', '3.00', 'Public'),
(81, '21', 'University of Toronto', 'CSE,EEE,CE,NURCING,SE,ME,BBAMBA,BA', '30000', '15000', 'YES', 'YES', 'YES', 'tr.jpeg', 'ut@gmail.com', 'TOEFL', '100', 'CANADA', '3.50', 'Public'),
(82, '35', 'The University of British Columbia', 'CSE,EEE,CE,NURCING,SE,ME', '55000', '20000', 'YES', 'YES', 'YES', 'ub.jpg', 'ubc@gmail.com', 'TOEFL', '90', 'CANADA', '3.00', 'Private'),
(83, '12', 'York University', 'CSE,EEE,CE,NURCING', '20000', '10000', 'YES', 'YES', 'YES', 'yu.htm', 'yu@gmail.com', 'TOEFL', '80', 'USA', '3.5', 'Public'),
(84, '183', 'Curtin University - Australia', 'Energy and Earth Resources,Statistics,Computational Science, Engineering, and Mathematics,Civil engineering,Computer Science,Arc', '32000', '25000', 'YES', 'YES', 'NO', 'j3.jpg', 'cua@gmail.com', 'IELTS', '70', 'AUSTRALIA', '2.50', 'Public'),
(85, '89', 'University of Adelaide', 'CSE,EEE,CE,NURCING,SE,ME,BBAMBA,BA', '35000', '20000', 'YES', 'YES', 'NO', 'ua.jpg', 'uad@gmail.com', 'TOEFL', '80', 'AUSTRALIA', '3.00', 'Public'),
(86, '42', 'Monash University', 'Energy and Earth Resources,Statistics,Computational Science, Engineering, and Mathematics,Civil engineering,Computer Science,Arc', '40000', '25000', 'YES', 'YES', 'YES', 'mu.jpg', 'mu@gmail.com', 'TOEFL', '94', 'AUSTRALIA', '3.25', 'Public'),
(87, '2', 'Harvard University', 'CSE,EEE,CE,NURCING,SE,ME,BBAMBA,BA', '60000', '25000', 'YES', 'YES', 'YES', 'hu.jpg', 'hu@gmail.com', 'IELTS', '102', 'USA', '3.80', 'Public'),
(88, '157', 'University of Southern California', 'CSE,EEE,CE,NURCING,SE,ME,BBAMBA,BA', '20000', '20000', 'YES', 'YES', 'YES', 'ucl.jpeg', 'ucl@gmail.com', 'TOEFL', '80', 'USA', '3.00', 'Public'),
(89, '23', 'University of Copenhagen', 'Energy and Earth Resources,Statistics,Computational Science, Engineering, and Mathematics,Civil engineering,Computer Science,Arc', '20000', '15000', 'YES', 'NO', 'NO', 'uoc.jpg', 'uoc@gmail.com', 'TOEFL', '80', 'DENMARK', '2.95', 'Public'),
(90, '103', 'Aarhus University', 'CSE,EEE,CE,NURCING,SE,ME', '35000', '25000', 'YES', 'YES', 'NO', 'au.jpg', 'au@gmail.com', 'TOEFL', '80', 'DENMARK', '3.00', 'Public'),
(91, '259', 'Technical University of Denmark (DTU)', 'CSE,EEE,CE,NURCING,SE,ME,BBAMBA,BA', '35000', '25000', 'NO', 'YES', 'NO', 'dut.jpg', 'dut@gmail.com', 'IELTS', '75', 'DENMARK', '3.00', 'Public'),
(92, '67', 'University of Helsinki ', 'CSE,EEE,CE,NURCING,SE,ME,BBAMBA,BA', '30000', '25000', 'YES', 'YES', 'YES', 'uhf.jpg', 'uh@gmail.com', 'TOEFL', '90', 'FINLAND', '3.00', 'Public'),
(93, '149', 'Aalto University', 'CSE,EEE,CE,NURCING,SE,ME,BBAMBA,BA', '20000', '20000', 'NO', 'YES', 'NO', 'dd.webp', 'aud@gmail.com', 'TOEFL', '79', 'FINLAND', '2.85', 'Public');

-- --------------------------------------------------------

--
-- Table structure for table `admininfo`
--

CREATE TABLE `admininfo` (
  `id` int(20) NOT NULL,
  `phnNum` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `currentPass` varchar(100) NOT NULL,
  `newPass` varchar(100) NOT NULL,
  `comfPass` varchar(100) NOT NULL,
  `usrName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admininfo`
--

INSERT INTO `admininfo` (`id`, `phnNum`, `email`, `address`, `currentPass`, `newPass`, `comfPass`, `usrName`) VALUES
(1, '01406480752', 'bijoy@gmail.com', 'Notun-bazar , Dhaka', 'Admin123', 'Admin123', 'Admin123', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `admin_order_info_all`
--

CREATE TABLE `admin_order_info_all` (
  `id` int(111) NOT NULL,
  `cus_email` varchar(111) NOT NULL,
  `orde_pro_id` int(111) NOT NULL,
  `per_pro_price` int(111) NOT NULL,
  `pro_qunity` int(111) NOT NULL,
  `per_pro_total_price` int(111) NOT NULL,
  `cus_address` varchar(111) NOT NULL,
  `ovrall_sell_price` int(111) NOT NULL,
  `ord_date` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL,
  `Deliver` varchar(20) NOT NULL DEFAULT 'Deliver'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_order_info_all`
--

INSERT INTO `admin_order_info_all` (`id`, `cus_email`, `orde_pro_id`, `per_pro_price`, `pro_qunity`, `per_pro_total_price`, `cus_address`, `ovrall_sell_price`, `ord_date`, `status`, `Deliver`) VALUES
(18, 'nhrabbi444@gmail.com', 6, 350, 2, 700, 'badda', 700, '2024-01-25', 'pending', 'Deliver'),
(36, 'tifnath203055@bscse.uiu.ac.bd', 13, 200, 1, 200, 'Banani', 700, '2024-02-02', 'pending', 'Deliver'),
(37, 'tifnath203055@bscse.uiu.ac.bd', 5, 500, 1, 500, 'Banani', 700, '2024-02-02', 'pending', 'Deliver'),
(43, 'bmunshi649@gmail.com', 12, 250, 1, 250, 'Badda-Dhaka', 250, '2024-04-07', 'pending', 'Deliver'),
(44, 'bmunshi649@gmail.com', 12, 250, 1, 250, 'Shatarkul-Dhaka', 250, '2024-04-28', 'pending', 'Deliver'),
(45, 'bmunshi649@gmail.com', 25, 689, 1, 689, 'badda', 689, '2024-04-28', 'pending', 'Deliver'),
(46, 'bmunshi649@gmail.com', 11, 900, 2, 1800, 'badda', 1800, '2024-05-06', 'pending', 'Deliver');

-- --------------------------------------------------------

--
-- Table structure for table `allapplyloan`
--

CREATE TABLE `allapplyloan` (
  `id` int(111) NOT NULL,
  `applyUsrId` varchar(111) NOT NULL,
  `msg` varchar(111) NOT NULL,
  `loginUserId` varchar(20) NOT NULL,
  `loginUserEmail` varchar(200) NOT NULL,
  `applyUserEmail` varchar(200) NOT NULL,
  `applyPostNum` varchar(100) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `decission` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allapplyloan`
--

INSERT INTO `allapplyloan` (`id`, `applyUsrId`, `msg`, `loginUserId`, `loginUserEmail`, `applyUserEmail`, `applyPostNum`, `time`, `decission`) VALUES
(9, '5', 'ami 5% interest e apnake loan debo...', '42', 'mansurapinky419@gmail.com', 'bmunshi649@gmail.com', '5', '2024-04-30 06:35:11.415231', 'Pending'),
(11, '19', '3% interest e apnake tk debo...', '44', 'munshi.bd1993@gmail.com', 'bmunshi649@gmail.com', '19', '2024-05-01 17:39:36.770541', 'Approved'),
(13, '20', 'ami lone nete chai 3% interest debo . but 1 year er jonno..', '39', 'bmunshi649@gmail.com', 'mansurapinky419@gmail.com', '20', '2024-05-02 06:33:29.004759', 'Approved'),
(14, '10', '2% interest e tk debo', '42', 'mansurapinky419@gmail.com', 'sbain898@gmail.com', '10', '2024-05-07 17:18:25.460775', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `all_record`
--

CREATE TABLE `all_record` (
  `id` int(100) NOT NULL,
  `log_usr_id` int(100) DEFAULT NULL,
  `log_usr_name` varchar(100) DEFAULT NULL,
  `log_usr_email` varchar(100) DEFAULT NULL,
  `log_usr_phone` varchar(100) DEFAULT NULL,
  `log_usr_adrs` text DEFAULT NULL,
  `log_usr_status` varchar(100) DEFAULT NULL,
  `add_prsn_id` int(100) DEFAULT NULL,
  `add_prsn_name` varchar(100) DEFAULT NULL,
  `add_prsn_email` varchar(100) DEFAULT NULL,
  `add_prsn_phone` varchar(100) DEFAULT NULL,
  `add_prsn_status` varchar(100) DEFAULT NULL,
  `add_prsn_adrs` text DEFAULT NULL,
  `log_usr_img` varchar(200) DEFAULT NULL,
  `log_usr_time` varchar(100) DEFAULT NULL,
  `add_usr_img` varchar(200) DEFAULT NULL,
  `add_usr_time` varchar(100) NOT NULL,
  `log_usr_cl_nm` varchar(100) DEFAULT NULL,
  `add_prns_cls` varchar(100) DEFAULT NULL,
  `log_sub` varchar(50) NOT NULL,
  `add_sub` varchar(50) NOT NULL,
  `log_ins` varchar(20) NOT NULL DEFAULT 'null',
  `add_ins` varchar(20) NOT NULL DEFAULT 'null'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `all_record`
--

INSERT INTO `all_record` (`id`, `log_usr_id`, `log_usr_name`, `log_usr_email`, `log_usr_phone`, `log_usr_adrs`, `log_usr_status`, `add_prsn_id`, `add_prsn_name`, `add_prsn_email`, `add_prsn_phone`, `add_prsn_status`, `add_prsn_adrs`, `log_usr_img`, `log_usr_time`, `add_usr_img`, `add_usr_time`, `log_usr_cl_nm`, `add_prns_cls`, `log_sub`, `add_sub`, `log_ins`, `add_ins`) VALUES
(73, 40, 'Rahmatullah Munshi Nishat', 'munshi.bd1993@gmail.com', '01869403321', 'New-Zealand', 'teacher', 89, 'Bejoy Munshi', 'bmunshi649@gmail.com', '01406480752', 'student', NULL, 'nsht.jpg', NULL, 'zh.jpg', 'Mon,Tus,Wed(5.00 PM)', '6-7', '6-7', 'Math', 'Math', 'New-Zealand Universi', 'Rajuk Uttara Model');

-- --------------------------------------------------------

--
-- Table structure for table `applyjob`
--

CREATE TABLE `applyjob` (
  `id` int(20) NOT NULL,
  `jobId` varchar(20) NOT NULL,
  `applyId` varchar(20) NOT NULL,
  `postId` varchar(20) NOT NULL,
  `decision` varchar(100) NOT NULL DEFAULT 'null',
  `applyEmail` varchar(100) NOT NULL,
  `postEmail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applyjob`
--

INSERT INTO `applyjob` (`id`, `jobId`, `applyId`, `postId`, `decision`, `applyEmail`, `postEmail`) VALUES
(36, '89', '39', '89', 'Approved', 'bmunshi649@gmail.com', 'munshi.bd1993@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `sl` int(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `product_quantity` int(100) NOT NULL,
  `totalPrice` int(100) NOT NULL,
  `each_pro_price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`sl`, `product_id`, `customer_email`, `date`, `product_quantity`, `totalPrice`, `each_pro_price`) VALUES
(5, 10, 'ngvmnt44@gmail.com', '2024-01-21', 1, 230, 230),
(7, 9, 'ngvmnt44@gmail.com', '2024-01-21', 2, 300, 150),
(64, 14, 'asaid202332@bscse.uiu.ac.bd', '2024-03-19', 3, 450, 150),
(90, 22, 'mansurapinky419@gmail.com', '2024-05-19', 1, 250, 250),
(91, 5, 'mansurapinky419@gmail.com', '2024-05-31', 1, 500, 500),
(94, 20, 'sbain898@gmail.com', '2024-06-02', 1, 150, 150),
(95, 22, 'sbain898@gmail.com', '2024-06-02', 1, 250, 250);

-- --------------------------------------------------------

--
-- Table structure for table `cmnt`
--

CREATE TABLE `cmnt` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `msg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cmnt`
--

INSERT INTO `cmnt` (`id`, `name`, `email`, `msg`) VALUES
(4, 'Bejoy Munshi', 'bmunshi649@gmail.com', 'Very helpful website.'),
(5, 'Boka Azam', 'boka22@gmail.com', 'Login korte partese na. Plz help me.'),
(6, 'Toslima Ifnath', 'tifnath333@gmail.com', 'Need search options'),
(7, 'Toslima Ifnath', 'tifnath333@gmail.com', 'Need search options'),
(8, 'Toslima Ifnath', 'tifnath333@gmail.com', 'Need search options'),
(9, 'Toslima Ifnath', 'tifnath333@gmail.com', 'Need search options'),
(10, 'Taslima Ifnath Shefa', 'tifnath203055@bscse.uiu.ac.bd', 'nice website...'),
(11, 'Rawnak Azam', 'rawnak4499@gmail.com', 'Nice website'),
(12, 'Rawnak Azam', 'rawnak4499@gmail.com', 'Useful website'),
(13, 'Rawnak Azam', 'rawnak4499@gmail.com', 'Useful website'),
(14, 'rifique', 'rofiq299@gmail.com', 'nice'),
(15, 'Adam Zampa', 'azampa@melbournestars.com.au', 'Robot is awesome.'),
(16, 'Adam Zampa', 'azampa@melbournestars.com.au', 'Robot is awesome.');

-- --------------------------------------------------------

--
-- Table structure for table `loanpost`
--

CREATE TABLE `loanpost` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL DEFAULT 'Null',
  `email` varchar(100) NOT NULL DEFAULT 'Null',
  `address` varchar(100) NOT NULL DEFAULT 'Null',
  `amount` varchar(100) NOT NULL DEFAULT 'Null',
  `duration` varchar(100) NOT NULL DEFAULT 'Null',
  `interest` varchar(100) NOT NULL DEFAULT '0',
  `designation` varchar(100) NOT NULL DEFAULT 'Null',
  `loneType` varchar(100) NOT NULL DEFAULT 'Null',
  `nid` varchar(100) NOT NULL DEFAULT 'Null',
  `img` varchar(100) NOT NULL DEFAULT 'Null',
  `msg` varchar(100) NOT NULL DEFAULT 'Null',
  `phone` varchar(100) NOT NULL DEFAULT 'Null',
  `time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loanpost`
--

INSERT INTO `loanpost` (`id`, `name`, `email`, `address`, `amount`, `duration`, `interest`, `designation`, `loneType`, `nid`, `img`, `msg`, `phone`, `time`) VALUES
(22, 'Rahmatullah Munshi Nishat', 'munshi.bd1993@gmail.com', 'Null', '5000', '1 month', '1', 'Engineer', 'Provide', '', 'nsht.jpg', 'Null', '01869403321', '2024-05-03 04:39:58.915009'),
(25, 'Bejoy Munshi', 'bmunshi649@gmail.com', 'Badda, Dhaka', '12500', '3 months', '', 'student', 'Take', '', 'bi.jpg', 'For my project', '01406480752', '2024-05-03 04:57:29.487219');

-- --------------------------------------------------------

--
-- Table structure for table `loanposttrk`
--

CREATE TABLE `loanposttrk` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL DEFAULT 'Null',
  `email` varchar(100) NOT NULL DEFAULT 'Null',
  `address` varchar(100) NOT NULL DEFAULT 'Null',
  `amount` varchar(100) NOT NULL DEFAULT 'Null',
  `duration` varchar(100) NOT NULL DEFAULT 'Null',
  `interest` varchar(100) NOT NULL DEFAULT '0',
  `designation` varchar(100) NOT NULL DEFAULT 'Null',
  `loneType` varchar(100) NOT NULL DEFAULT 'Null',
  `nid` varchar(100) NOT NULL DEFAULT 'Null',
  `img` varchar(100) NOT NULL DEFAULT 'Null',
  `msg` varchar(100) NOT NULL DEFAULT 'Null',
  `phone` varchar(100) NOT NULL DEFAULT 'Null',
  `time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loanposttrk`
--

INSERT INTO `loanposttrk` (`id`, `name`, `email`, `address`, `amount`, `duration`, `interest`, `designation`, `loneType`, `nid`, `img`, `msg`, `phone`, `time`) VALUES
(9, 'Rahmatullah Munshi Nishat', 'munshi.bd1993@gmail.com', 'Null', '100000', '2 Years', '2', 'Engineer', 'Provide', '4215210453', 'nsht.jpg', 'Null', '01869403321', '2024-04-26 06:37:27.091202'),
(10, 'Sudipta Bain', 'sbain898@gmail.com', 'Null', '60000', '4 Months', '', 'Student', 'Take', '4215210453', 'bainn.jpg', 'For my university tuition fee', '01873602164', '2024-04-26 06:50:45.795588'),
(20, 'Mansura', 'mansurapinky419@gmail.com', '', '150000', '2 Years', '2', 'job holder', 'Provide', '', 'mansura.jpg', 'Null', '01784957693', '2024-05-02 06:16:40.155463'),
(22, 'Rahmatullah Munshi Nishat', 'munshi.bd1993@gmail.com', 'Null', '5000', '1 month', '1', 'Engineer', 'Provide', '', 'nsht.jpg', 'Null', '01869403321', '2024-05-03 04:39:58.926638'),
(25, 'Bejoy Munshi', 'bmunshi649@gmail.com', 'Badda, Dhaka', '12500', '3 months', '', 'student', 'Take', '', 'bi.jpg', 'For my project', '01406480752', '2024-05-03 04:57:29.504237');

-- --------------------------------------------------------

--
-- Table structure for table `loan_dashboaer`
--

CREATE TABLE `loan_dashboaer` (
  `id` int(111) NOT NULL,
  `login_email` varchar(111) NOT NULL,
  `apply_email` varchar(111) NOT NULL,
  `apply_deg` varchar(111) NOT NULL,
  `login_deg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loan_dashboaer`
--

INSERT INTO `loan_dashboaer` (`id`, `login_email`, `apply_email`, `apply_deg`, `login_deg`) VALUES
(7, 'bmunshi649@gmail.com', 'munshi.bd1993@gmail.com', 'Provide', 'Take'),
(9, 'mansurapinky419@gmail.com', 'bmunshi649@gmail.com', 'Take', 'Provide'),
(10, 'sbain898@gmail.com', 'mansurapinky419@gmail.com', 'Provide', 'Take');

-- --------------------------------------------------------

--
-- Table structure for table `massege`
--

CREATE TABLE `massege` (
  `id` int(20) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `img` varchar(250) NOT NULL,
  `msg` varchar(2500) NOT NULL,
  `send_phn` varchar(15) NOT NULL,
  `rec_phn` varchar(15) NOT NULL,
  `snd_time` datetime NOT NULL DEFAULT current_timestamp(),
  `publicKey` varchar(100) NOT NULL,
  `privateKey` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `massege`
--

INSERT INTO `massege` (`id`, `name`, `email`, `img`, `msg`, `send_phn`, `rec_phn`, `snd_time`, `publicKey`, `privateKey`) VALUES
(101, 'Rahmatullah Munshi Nishat', 'munshi.bd1993@gmail.com', 'nsht.jpg', 'EDtlG+7iZDWCEfx1JlzW/lZESENqOWhSVDBCby82SkMxUWd0RUE9PQ==', '01869403321', '01406480752', '2024-05-03 21:35:16', 'wJGIRUFKD$$@CJF--DUCH6453EE', 'wJGIRUFKD$$@CJF--DUCH6453EE'),
(102, 'Bejoy Munshi', 'bmunshi649@gmail.com', 'zh.jpg', 'P44ixnSeBMFptzf3E49ZkmlWS3BJNElvQ3pEdlNVSjlwWmpXWVE9PQ==', '01406480752', '01869403321', '2024-05-03 22:12:40', 'wJGIRUFKD$$@CJF--DUCH6453EE', 'wJGIRUFKD$$@CJF--DUCH6453EE');

-- --------------------------------------------------------

--
-- Table structure for table `massegeloan`
--

CREATE TABLE `massegeloan` (
  `id` int(20) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `img` varchar(250) NOT NULL,
  `msg` varchar(2500) NOT NULL,
  `send_phn` varchar(15) NOT NULL,
  `rec_phn` varchar(15) NOT NULL,
  `snd_time` datetime NOT NULL DEFAULT current_timestamp(),
  `publicKey` varchar(100) NOT NULL,
  `privateKey` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `massegeloan`
--

INSERT INTO `massegeloan` (`id`, `name`, `email`, `img`, `msg`, `send_phn`, `rec_phn`, `snd_time`, `publicKey`, `privateKey`) VALUES
(106, 'Bejoy Munshi', 'bmunshi649@gmail.com', 'bi.jpg', 'BAM537eS7o8fBo6Gq7Pe8GwwN2JpYW8wWDhBRjN1MDJFU29nWXc9PQ==', '01406480752', '01406480752', '2024-05-02 17:02:07', 'wJGIRUFKD$$@CJF--DUCH6453EE', 'wJGIRUFKD$$@CJF--DUCH6453EE'),
(107, 'Rahmatullah Munshi Nishat', 'munshi.bd1993@gmail.com', 'nsht.jpg', '7W9/IsedB8FWylpH+wwowEVoQ0h0NFRlRHdiOTRIM0NKWmhTTGc9PQ==', '01869403321', '01406480752', '2024-05-02 17:03:07', 'wJGIRUFKD$$@CJF--DUCH6453EE', 'wJGIRUFKD$$@CJF--DUCH6453EE'),
(108, 'Bejoy Munshi', 'bmunshi649@gmail.com', 'bi.jpg', 'IP0dK+xm8F4pzYC+ndBobThqYWlaRzNmRkVwaVczZUNqTFlDTHc9PQ==', '01406480752', '01869403321', '2024-05-02 17:12:39', 'wJGIRUFKD$$@CJF--DUCH6453EE', 'wJGIRUFKD$$@CJF--DUCH6453EE'),
(109, 'Rahmatullah Munshi Nishat', 'munshi.bd1993@gmail.com', 'nsht.jpg', 'Z5eLRqcJxm0VIgSxZd0zKFVyUjRKdmIrSFlZa0Q0aWFmUXVRaHc9PQ==', '01869403321', '01406480752', '2024-05-02 17:13:14', 'wJGIRUFKD$$@CJF--DUCH6453EE', 'wJGIRUFKD$$@CJF--DUCH6453EE'),
(110, 'Bejoy Munshi', 'bmunshi649@gmail.com', 'bi.jpg', 'uwYrarYrm9mZl9sel5WGB0cwTnVMSFBxQTNmb3NmMzJac3dFakd2Ukp4VVpwakcxbGRQUHUxM1BrR2c9', '01406480752', '01869403321', '2024-05-02 17:13:45', 'wJGIRUFKD$$@CJF--DUCH6453EE', 'wJGIRUFKD$$@CJF--DUCH6453EE'),
(111, 'Bejoy Munshi', 'bmunshi649@gmail.com', 'bi.jpg', 'ncs7rR8b48Ie+kO6SLprHmpNWS9ETVVPMGxkSitISDZGTU9sckE9PQ==', '01406480752', '01784957693', '2024-05-02 23:27:06', 'wJGIRUFKD$$@CJF--DUCH6453EE', 'wJGIRUFKD$$@CJF--DUCH6453EE'),
(112, 'Bejoy Munshi', 'bmunshi649@gmail.com', 'bi.jpg', '2MFMYMtXC7BzLtjhQf5WqHBzNlV1RC9rWGxrdEp2SUMrcFhzTmc9PQ==', '01406480752', '01784957693', '2024-05-03 08:29:34', 'wJGIRUFKD$$@CJF--DUCH6453EE', 'wJGIRUFKD$$@CJF--DUCH6453EE'),
(113, 'Bejoy Munshi', 'bmunshi649@gmail.com', 'bi.jpg', '1eggjp0Af5jaLH/Y+So4lG5IWjJBMVFBcjdYVXQ2WDFwdmV0Smc9PQ==', '01406480752', '01869403321', '2024-05-03 10:19:46', 'wJGIRUFKD$$@CJF--DUCH6453EE', 'wJGIRUFKD$$@CJF--DUCH6453EE'),
(114, 'Bejoy Munshi', 'bmunshi649@gmail.com', 'bi.jpg', 'ruvJ5GoupITjhjnyAltexlV3RXNqcFVvMnhoNDlhSXFQYTlLUUE9PQ==', '01406480752', '01869403321', '2024-05-03 11:25:49', 'wJGIRUFKD$$@CJF--DUCH6453EE', 'wJGIRUFKD$$@CJF--DUCH6453EE'),
(115, 'Bejoy Munshi', 'bmunshi649@gmail.com', 'bi.jpg', 'PCNOeCY+GTzR4wThoSjK6GFVQkNjdFdSWnZEa3hyVThrVzBCTXc9PQ==', '01406480752', '01784957693', '2024-05-03 11:39:43', 'wJGIRUFKD$$@CJF--DUCH6453EE', 'wJGIRUFKD$$@CJF--DUCH6453EE'),
(116, 'Bejoy Munshi', 'bmunshi649@gmail.com', 'bi.jpg', '0C/04hzUt1HbtW+9d+yoxnljbStpQVRoajVSODR6b0tnVnVOVEE9PQ==', '01406480752', '01784957693', '2024-05-03 11:44:35', 'wJGIRUFKD$$@CJF--DUCH6453EE', 'wJGIRUFKD$$@CJF--DUCH6453EE'),
(117, 'Bejoy Munshi', 'bmunshi649@gmail.com', 'bi.jpg', 'yDssyz4d+NBff4m/nrcH4zBCTHcwZUtZUWZLcFd1SEpNU2hIRkE9PQ==', '01406480752', '01784957693', '2024-05-03 15:41:55', 'wJGIRUFKD$$@CJF--DUCH6453EE', 'wJGIRUFKD$$@CJF--DUCH6453EE'),
(118, 'Sudipta Bain', 'sbain898@gmail.com', 'bainn.jpg', 'eki4JCu8f4XF8VVgaFOqGTJia3VsTlY1V1p1dGlBZmh2YmNoSkE9PQ==', '01873602164', '01784957693', '2024-05-07 23:18:55', 'wJGIRUFKD$$@CJF--DUCH6453EE', 'wJGIRUFKD$$@CJF--DUCH6453EE'),
(119, 'Mansura', 'mansurapinky419@gmail.com', 'mansura.jpg', 'AY6Suj5W+hhB5o2rInKjWVpJKzBUVGJrcnNlWjM0R1YrVHRHUXc9PQ==', '01784957693', '01873602164', '2024-05-07 23:20:57', 'wJGIRUFKD$$@CJF--DUCH6453EE', 'wJGIRUFKD$$@CJF--DUCH6453EE'),
(120, 'Bejoy Munshi', 'bmunshi649@gmail.com', 'bi.jpg', 'PaNnKvUgUxpMmJvXjHtuKEdHVEg5RFE4RmxaT1c0L21PN3FSL2c9PQ==', '01406480752', '01784957693', '2024-05-19 22:05:29', 'wJGIRUFKD$$@CJF--DUCH6453EE', 'wJGIRUFKD$$@CJF--DUCH6453EE');

-- --------------------------------------------------------

--
-- Table structure for table `order_details_info`
--

CREATE TABLE `order_details_info` (
  `id` int(111) NOT NULL,
  `cus_email` varchar(111) NOT NULL,
  `orde_pro_id` int(111) NOT NULL,
  `per_pro_price` int(111) NOT NULL,
  `pro_qunity` int(111) NOT NULL,
  `per_pro_total_price` int(111) NOT NULL,
  `cus_address` varchar(111) NOT NULL,
  `ovrall_sell_price` int(111) NOT NULL,
  `ord_date` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_details_info`
--

INSERT INTO `order_details_info` (`id`, `cus_email`, `orde_pro_id`, `per_pro_price`, `pro_qunity`, `per_pro_total_price`, `cus_address`, `ovrall_sell_price`, `ord_date`, `status`) VALUES
(18, 'nhrabbi444@gmail.com', 10, 230, 1, 230, 'Shatarkul-Dhaka', 230, '2024-01-25', 'pending'),
(19, 'nhrabbi444@gmail.com', 5, 500, 1, 500, 'Shatarkul-Dhaka', 500, '2024-01-25', 'pending'),
(20, 'nhrabbi444@gmail.com', 6, 350, 1, 350, 'Shatarkul-Dhaka', 1380, '2024-01-25', 'pending'),
(21, 'nhrabbi444@gmail.com', 10, 230, 1, 230, 'Shatarkul-Dhaka', 1380, '2024-01-25', 'pending'),
(22, 'nhrabbi444@gmail.com', 7, 400, 2, 800, 'Shatarkul-Dhaka', 1380, '2024-01-25', 'pending'),
(23, 'nhrabbi444@gmail.com', 6, 350, 2, 700, 'badda', 700, '2024-01-25', 'pending'),
(41, 'tifnath203055@bscse.uiu.ac.bd', 13, 200, 1, 200, 'Banani', 700, '2024-02-02', 'pending'),
(42, 'tifnath203055@bscse.uiu.ac.bd', 5, 500, 1, 500, 'Banani', 700, '2024-02-02', 'pending'),
(48, 'bmunshi649@gmail.com', 12, 250, 1, 250, 'Badda-Dhaka', 250, '2024-04-07', 'pending'),
(49, 'bmunshi649@gmail.com', 12, 250, 1, 250, 'Shatarkul-Dhaka', 250, '2024-04-28', 'pending'),
(50, 'bmunshi649@gmail.com', 25, 689, 1, 689, 'badda', 689, '2024-04-28', 'pending'),
(51, 'bmunshi649@gmail.com', 11, 900, 2, 1800, 'badda', 1800, '2024-05-06', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(100) NOT NULL,
  `peoduct_name` varchar(150) NOT NULL,
  `writer_name` varchar(100) NOT NULL,
  `product_price` int(100) NOT NULL,
  `discount` int(100) NOT NULL DEFAULT 0,
  `level_scl_clg_uni` varchar(100) NOT NULL,
  `img` varchar(200) NOT NULL,
  `stock_product` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `peoduct_name`, `writer_name`, `product_price`, `discount`, `level_scl_clg_uni`, `img`, `stock_product`) VALUES
(2, 'Java', 'John Mark', 700, 5, 'University Book', 'java.png', 1),
(5, 'ABC', 'Adam John', 500, 2, 'Kids Book', 'abcPic.jpeg', 4),
(6, 'Panjeree(Math)', 'Abul Khandokar', 350, 10, 'School Book', 'mathbook.webp', 3),
(7, 'Physics(1st)', 'Shah JahanTopon', 400, 15, 'College Book', 'phy.webp', 13),
(9, 'Thakumar Jhuli', 'Shanchib Ray', 150, 15, 'Kids Book', 'tha.jpg', 0),
(10, 'Padda nodir majhi', 'Manik bandhapaddhay', 230, 10, 'Others Book', 'pad.webp', 2),
(11, 'Python', 'Albart Jahn', 900, 5, 'University Book', 'pyt.jpg', 0),
(12, 'লালশালু ', 'সৈয়দ ওয়ালীউল্লাহ', 250, 5, 'Others Book', 'lal.png', 10),
(13, 'জননী', 'শওকত ওসমান', 200, 10, 'Others Book', 'jononi.png', 9),
(14, 'Five Point Someone', 'Chetan Bhagat', 237, 23, 'Others Book', '1898306227five point someone.jpg', 7),
(15, 'Eat That Frog', 'Brian Tracy', 479, 19, 'Others Book', 'eatfrog.jpg', 12),
(16, 'Cracking the Coding Interview ', 'Gayle Laakmann McDowell', 1295, 10, 'Others Book', 'cthc.jpeg', 14),
(17, 'গবেষণায় হাতেখড়ি', ' রাগিব হাসান', 250, 30, 'Others Book', 'rgh.jpg', 22),
(18, 'আমেরিকায় উচ্চশিক্ষা', ' রাগিব হাসান', 260, 25, 'Others Book', 'americay-ucchashikkha.jpg', 27),
(19, 'পাগলা দাসু', 'সুকুমার রায়', 190, 21, 'Kids Book', '5782ef030bc899b8fbc27b7462489070.jpg', 20),
(20, 'কুমড়ো পটাশ', 'সুকুমার রায়', 150, 25, 'Kids Book', 'kumro-potash.jpg', 13),
(21, 'Dragon Mountain', 'Katie Tsang & Kevin Tsang', 430, 35, 'Kids Book', 'images (1).jpeg', 12),
(22, 'লেকচার একের ভিতর সব দ্বিতীয় শ্রেণি ', 'লেকচার প্রকাশনা', 250, 10, 'School Book', 'book_14082023-01-18_1674038174.png', 10),
(23, 'Machine Learning for Beginners', 'David Browon', 765, 30, 'University Book', '9781671158498.jpg', 19),
(24, 'কাবুলিওয়ালা', 'রবীন্দ্রনাথ ঠাকুর', 310, 17, 'Kids Book', 'images (2).jpeg', 29),
(25, 'Neural networks and deep learning', 'Mike Nelson', 689, 35, 'University Book', 'Neural_Networks_and_Deep_Learning_-_Michael_Nielsen.avif', 29),
(26, 'Chowdhury Hossain', 'Chowdhury hossain', 870, 15, 'School Book', 'ch.jpg', 17),
(27, 'Prothomique Gonith', 'Rafique Uddin', 320, 5, 'School Book', 'mt.jpg', 8),
(28, 'ICT', 'Mujibur Rahman', 650, 2, 'College Book', 'i2.jpg', 5),
(29, 'ICT', 'Saddam Hossin', 500, 10, 'College Book', 'i1.jpg', 9),
(30, 'Zoology-1 ', 'Md. Abul Hasan', 600, 3, 'College Book', 'bi1.jpg', 12),
(31, 'Zoology-2', 'Gazi Azmal', 650, 5, 'College Book', 'bio.jpg', 12),
(32, 'Zoology-2', 'Rashid Begam', 650, 0, 'College Book', 'rokimg_20151018_83994.gif', 12);

-- --------------------------------------------------------

--
-- Table structure for table `sequrity`
--

CREATE TABLE `sequrity` (
  `count` int(15) NOT NULL DEFAULT 0,
  `intId` int(10) NOT NULL,
  `actions` varchar(10) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sequrity`
--

INSERT INTO `sequrity` (`count`, `intId`, `actions`) VALUES
(2, 1, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `user_id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `Phone` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `ConfirmPassword` varchar(100) NOT NULL,
  `img` varchar(100) DEFAULT NULL,
  `amountBks` int(100) NOT NULL,
  `amountNgd` int(100) NOT NULL,
  `month_pay` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`user_id`, `name`, `Phone`, `email`, `Password`, `ConfirmPassword`, `img`, `amountBks`, `amountNgd`, `month_pay`) VALUES
(39, 'Bejoy Munshi', '01406480752', 'bmunshi649@gmail.com', 'Munshi202154', 'Munshi202154', 'zh.jpg', 8150, 6000, 'August'),
(42, 'Mansura', '01784957693', 'mansurapinky419@gmail.com', 'pinky', 'pinky', 'mansura.jpg', 18729, 18606, ''),
(43, 'Sudipta Bain', '01873602164', 'sbain898@gmail.com', 'Bain123', 'Bain123', 'bainn.jpg', 6368, 11080, 'September'),
(44, 'Rahmatullah Munshi Nishat', '01869403321', 'munshi.bd1993@gmail.com', 'nishat123', 'nishat123', 'nsht.jpg', 9044, 2419, 'August'),
(45, 'Abdul Karim', '01952736079', 'bmunshi202154@bscse.uiu.ac.bd', 'Karim123', 'Karim123', NULL, 2527, 10556, '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `DateTime` timestamp NULL DEFAULT current_timestamp(),
  `class` varchar(20) NOT NULL,
  `day_time` varchar(100) NOT NULL,
  `sl_clg_un` varchar(100) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `salary` int(50) NOT NULL,
  `version` varchar(50) NOT NULL,
  `img` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `phone`, `address`, `DateTime`, `class`, `day_time`, `sl_clg_un`, `designation`, `subject`, `salary`, `version`, `img`) VALUES
(90, 'Mansura', 'mansurapinky419@gmail.com', '01784957693', 'Badda, Dhaka', '2024-05-29 06:20:06', '8', 'Sunday&Tuesday (7 PM)', 'MIU', 'teacher', 'All', 5000, 'English', 'mansura.jpg'),
(91, 'Sudipta Bain', 'sbain898@gmail.com', '01873602164', 'Family-Bazar', '2024-06-01 13:36:16', '11', 'Sunday&Friday(7.30 PM)', 'Mothijheel School', 'student', 'ICT', 2000, 'Bangla', 'bainn.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `studentloanuserinfo`
--

CREATE TABLE `studentloanuserinfo` (
  `id` int(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `address` varchar(100) DEFAULT 'Null',
  `loneType` varchar(100) DEFAULT 'Null',
  `nid` varchar(100) DEFAULT 'Null',
  `designation` varchar(100) DEFAULT 'EMPTY',
  `img` varchar(200) DEFAULT 'Null'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentloanuserinfo`
--

INSERT INTO `studentloanuserinfo` (`id`, `name`, `email`, `mobile`, `address`, `loneType`, `nid`, `designation`, `img`) VALUES
(6, 'Bejoy Munshi', 'bmunshi649@gmail.com', '01406480752', 'Badda, Dhaka', 'Take', '4215210453', 'student', 'bi.jpg'),
(9, 'Mansura', 'mansurapinky419@gmail.com', '01784957693', '', 'Provide', '92839433202', 'job holder', 'mansura.jpg'),
(10, 'Sudipta Bain', 'sbain898@gmail.com', '01873602164', 'Null', 'Take', '8215234453', 'Student', 'bainn.jpg'),
(11, 'Rahmatullah Munshi Nishat', 'munshi.bd1993@gmail.com', '01869403321', 'Null', 'Provide', '7309221039', 'Engineer', 'nsht.jpg'),
(12, 'Abdul Karim', 'bmunshi202154@bscse.uiu.ac.bd', '01952736079', 'Rangpur', 'Take', '8394449302', 'Student', 'karim.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `trackallpost`
--

CREATE TABLE `trackallpost` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `DateTime` timestamp NULL DEFAULT current_timestamp(),
  `class` varchar(20) NOT NULL,
  `day_time` varchar(100) NOT NULL,
  `sl_clg_un` varchar(100) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `salary` int(50) NOT NULL,
  `version` varchar(50) NOT NULL,
  `img` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trackallpost`
--

INSERT INTO `trackallpost` (`id`, `name`, `email`, `phone`, `address`, `DateTime`, `class`, `day_time`, `sl_clg_un`, `designation`, `subject`, `salary`, `version`, `img`) VALUES
(86, 'Bejoy Munshi', 'bmunshi649@gmail.com', '01406480752', 'Badda, Dhaka', '2024-04-28 18:10:35', '12', 'Sunday&Friday(7.30 PM)', 'UIU', 'teacher', 'Math', 5000, 'Bangla', 'zh.jpg'),
(89, 'Rahmatullah Munshi Nishat', 'munshi.bd1993@gmail.com', '01869403321', 'New-Zealand', '2024-05-03 10:52:30', '6-7', 'Mon,Tus,Wed(5.00 PM)', 'New-Zealand University', 'teacher', 'Math', 5000, 'English', 'nsht.jpg'),
(90, 'Mansura', 'mansurapinky419@gmail.com', '01784957693', 'null', '2024-05-29 06:20:06', '8', 'Sunday&Tuesday (7 PM)', 'MIU', 'teacher', 'All', 5000, 'English', 'mansura.jpg'),
(91, 'Sudipta Bain', 'sbain898@gmail.com', '01873602164', 'Family-Bazar', '2024-06-01 13:36:16', '11', 'Sunday&Friday(7.30 PM)', 'Mothijheel School', 'student', 'ICT', 2000, 'Bangla', 'bainn.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tution_user_info`
--

CREATE TABLE `tution_user_info` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address` text DEFAULT 'null',
  `img` varchar(200) DEFAULT 'impty',
  `designation` varchar(20) DEFAULT 'EMPTY',
  `institut` varchar(200) DEFAULT 'null'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tution_user_info`
--

INSERT INTO `tution_user_info` (`id`, `name`, `email`, `mobile`, `address`, `img`, `designation`, `institut`) VALUES
(35, 'Bejoy Munshi', 'bmunshi649@gmail.com', '01406480752', 'Badda, Dhaka', 'zh.jpg', 'student', 'Rajuk Uttara Model'),
(36, 'Tairin Islam', 'tislam203012@bscse.uiu.ac.bd', '01952736079', 'null', 'impty', 'EMPTY', 'null'),
(37, 'Rofique', 'rofique649@gmail.com', '01782938493', 'null', 'impty', 'EMPTY', 'null'),
(38, 'Mansura', 'mansurapinky419@gmail.com', '01784957693', 'Badda, Dhaka', 'mansura.jpg', 'teacher', 'MIU'),
(39, 'Sudipta Bain', 'sbain898@gmail.com', '01873602164', 'Family-Bazar', 'bainn.jpg', 'student', 'Mothijheel School'),
(40, 'Rahmatullah Munshi Nishat', 'munshi.bd1993@gmail.com', '01869403321', 'New-Zealand', 'nsht.jpg', 'teacher', 'New-Zealand University'),
(41, 'Abdul Karim', 'bmunshi202154@bscse.uiu.ac.bd', '01952736079', 'null', 'impty', 'EMPTY', 'null');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abroad`
--
ALTER TABLE `abroad`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `admininfo`
--
ALTER TABLE `admininfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_order_info_all`
--
ALTER TABLE `admin_order_info_all`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allapplyloan`
--
ALTER TABLE `allapplyloan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all_record`
--
ALTER TABLE `all_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applyjob`
--
ALTER TABLE `applyjob`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `cmnt`
--
ALTER TABLE `cmnt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loanpost`
--
ALTER TABLE `loanpost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loanposttrk`
--
ALTER TABLE `loanposttrk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan_dashboaer`
--
ALTER TABLE `loan_dashboaer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `massege`
--
ALTER TABLE `massege`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `massegeloan`
--
ALTER TABLE `massegeloan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details_info`
--
ALTER TABLE `order_details_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sequrity`
--
ALTER TABLE `sequrity`
  ADD PRIMARY KEY (`intId`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentloanuserinfo`
--
ALTER TABLE `studentloanuserinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trackallpost`
--
ALTER TABLE `trackallpost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tution_user_info`
--
ALTER TABLE `tution_user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abroad`
--
ALTER TABLE `abroad`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `admininfo`
--
ALTER TABLE `admininfo`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_order_info_all`
--
ALTER TABLE `admin_order_info_all`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `allapplyloan`
--
ALTER TABLE `allapplyloan`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `all_record`
--
ALTER TABLE `all_record`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `applyjob`
--
ALTER TABLE `applyjob`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `sl` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `cmnt`
--
ALTER TABLE `cmnt`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `loanpost`
--
ALTER TABLE `loanpost`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `loanposttrk`
--
ALTER TABLE `loanposttrk`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `loan_dashboaer`
--
ALTER TABLE `loan_dashboaer`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `massege`
--
ALTER TABLE `massege`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `massegeloan`
--
ALTER TABLE `massegeloan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `order_details_info`
--
ALTER TABLE `order_details_info`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `sequrity`
--
ALTER TABLE `sequrity`
  MODIFY `intId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `studentloanuserinfo`
--
ALTER TABLE `studentloanuserinfo`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `trackallpost`
--
ALTER TABLE `trackallpost`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `tution_user_info`
--
ALTER TABLE `tution_user_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
