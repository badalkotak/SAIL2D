-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 10, 2017 at 08:06 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `SAIL2D`
--

-- --------------------------------------------------------

--
-- Table structure for table `Affiliations`
--

CREATE TABLE `Affiliations` (
  `AffiliationId` int(11) NOT NULL,
  `AffiliationName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Affiliations`
--

INSERT INTO `Affiliations` (`AffiliationId`, `AffiliationName`) VALUES
(2, 'KJSIEIT'),
(1, 'KJSP');

-- --------------------------------------------------------

--
-- Table structure for table `Cities`
--

CREATE TABLE `Cities` (
  `city_id` int(5) NOT NULL,
  `city_name` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Cities`
--

INSERT INTO `Cities` (`city_id`, `city_name`, `state`) VALUES
(1, 'Port Blair', 'Andaman and Nicobar Islands'),
(2, 'Adilabad', 'Andhra Pradesh'),
(3, 'Adoni', 'Andhra Pradesh'),
(4, 'Alwal', 'Andhra Pradesh'),
(5, 'Anakapalle', 'Andhra Pradesh'),
(6, 'Anantapur', 'Andhra Pradesh'),
(7, 'Bapatla', 'Andhra Pradesh'),
(8, 'Belampalli', 'Andhra Pradesh'),
(9, 'Bhimavaram', 'Andhra Pradesh'),
(10, 'Bhongir', 'Andhra Pradesh'),
(11, 'Bobbili', 'Andhra Pradesh'),
(12, 'Bodhan', 'Andhra Pradesh'),
(13, 'Chilakalurupet', 'Andhra Pradesh'),
(14, 'Chinna Chawk', 'Andhra Pradesh'),
(15, 'Chirala', 'Andhra Pradesh'),
(16, 'Chittur', 'Andhra Pradesh'),
(17, 'Cuddapah', 'Andhra Pradesh'),
(18, 'Dharmavaram', 'Andhra Pradesh'),
(19, 'Dhone', 'Andhra Pradesh'),
(20, 'Eluru', 'Andhra Pradesh'),
(21, 'Gaddiannaram', 'Andhra Pradesh'),
(22, 'Gadwal', 'Andhra Pradesh'),
(23, 'Gajuwaka', 'Andhra Pradesh'),
(24, 'Gudivada', 'Andhra Pradesh'),
(25, 'Gudur', 'Andhra Pradesh'),
(26, 'Guntakal', 'Andhra Pradesh'),
(27, 'Guntur', 'Andhra Pradesh'),
(28, 'Hindupur', 'Andhra Pradesh'),
(29, 'Hyderabad', 'Andhra Pradesh'),
(30, 'Jagtial', 'Andhra Pradesh'),
(31, 'Kadiri', 'Andhra Pradesh'),
(32, 'Kagaznagar', 'Andhra Pradesh'),
(33, 'Kakinada', 'Andhra Pradesh'),
(34, 'Kallur', 'Andhra Pradesh'),
(35, 'Kamareddi', 'Andhra Pradesh'),
(36, 'Kapra', 'Andhra Pradesh'),
(37, 'Karimnagar', 'Andhra Pradesh'),
(38, 'Karnul', 'Andhra Pradesh'),
(39, 'Kavali', 'Andhra Pradesh'),
(40, 'Khammam', 'Andhra Pradesh'),
(41, 'Kodar', 'Andhra Pradesh'),
(42, 'Kondukur', 'Andhra Pradesh'),
(43, 'Koratla', 'Andhra Pradesh'),
(44, 'Kottagudem', 'Andhra Pradesh'),
(45, 'Kukatpalle', 'Andhra Pradesh'),
(46, 'Lalbahadur Nagar', 'Andhra Pradesh'),
(47, 'Machilipatnam', 'Andhra Pradesh'),
(48, 'Mahbubnagar', 'Andhra Pradesh'),
(49, 'Malkajgiri', 'Andhra Pradesh'),
(50, 'Mancheral', 'Andhra Pradesh'),
(51, 'Mandamarri', 'Andhra Pradesh'),
(52, 'Mangalagiri', 'Andhra Pradesh'),
(53, 'Markapur', 'Andhra Pradesh'),
(54, 'Miryalaguda', 'Andhra Pradesh'),
(55, 'Nalgonda', 'Andhra Pradesh'),
(56, 'Nandyal', 'Andhra Pradesh'),
(57, 'Narasapur', 'Andhra Pradesh'),
(58, 'Narasaraopet', 'Andhra Pradesh'),
(59, 'Nellur', 'Andhra Pradesh'),
(60, 'Nirmal', 'Andhra Pradesh'),
(61, 'Nizamabad', 'Andhra Pradesh'),
(62, 'Nuzvid', 'Andhra Pradesh'),
(63, 'Ongole', 'Andhra Pradesh'),
(64, 'Palakollu', 'Andhra Pradesh'),
(65, 'Palasa', 'Andhra Pradesh'),
(66, 'Palwancha', 'Andhra Pradesh'),
(67, 'Patancheru', 'Andhra Pradesh'),
(68, 'Piduguralla', 'Andhra Pradesh'),
(69, 'Ponnur', 'Andhra Pradesh'),
(70, 'Proddatur', 'Andhra Pradesh'),
(71, 'Qutubullapur', 'Andhra Pradesh'),
(72, 'Rajamahendri', 'Andhra Pradesh'),
(73, 'Rajampet', 'Andhra Pradesh'),
(74, 'Rajendranagar', 'Andhra Pradesh'),
(75, 'Ramachandrapuram', 'Andhra Pradesh'),
(76, 'Ramagundam', 'Andhra Pradesh'),
(77, 'Rayachoti', 'Andhra Pradesh'),
(78, 'Rayadrug', 'Andhra Pradesh'),
(79, 'Samalkot', 'Andhra Pradesh'),
(80, 'Sangareddi', 'Andhra Pradesh'),
(81, 'Sattenapalle', 'Andhra Pradesh'),
(82, 'Serilungampalle', 'Andhra Pradesh'),
(83, 'Siddipet', 'Andhra Pradesh'),
(84, 'Sikandarabad', 'Andhra Pradesh'),
(85, 'Sirsilla', 'Andhra Pradesh'),
(86, 'Srikakulam', 'Andhra Pradesh'),
(87, 'Srikalahasti', 'Andhra Pradesh'),
(88, 'Suriapet', 'Andhra Pradesh'),
(89, 'Tadepalle', 'Andhra Pradesh'),
(90, 'Tadepallegudem', 'Andhra Pradesh'),
(91, 'Tadpatri', 'Andhra Pradesh'),
(92, 'Tandur', 'Andhra Pradesh'),
(93, 'Tanuku', 'Andhra Pradesh'),
(94, 'Tenali', 'Andhra Pradesh'),
(95, 'Tirupati', 'Andhra Pradesh'),
(96, 'Tuni', 'Andhra Pradesh'),
(97, 'Uppal Kalan', 'Andhra Pradesh'),
(98, 'Vijayawada', 'Andhra Pradesh'),
(99, 'Vinukonda', 'Andhra Pradesh'),
(100, 'Visakhapatnam', 'Andhra Pradesh'),
(101, 'Vizianagaram', 'Andhra Pradesh'),
(102, 'Vuyyuru', 'Andhra Pradesh'),
(103, 'Wanparti', 'Andhra Pradesh'),
(104, 'Warangal', 'Andhra Pradesh'),
(105, 'Yemmiganur', 'Andhra Pradesh'),
(106, 'Itanagar', 'Arunachal Pradesh'),
(107, 'Barpeta', 'Assam'),
(108, 'Bongaigaon', 'Assam'),
(109, 'Dhuburi', 'Assam'),
(110, 'Dibrugarh', 'Assam'),
(111, 'Diphu', 'Assam'),
(112, 'Guwahati', 'Assam'),
(113, 'Jorhat', 'Assam'),
(114, 'Karimganj', 'Assam'),
(115, 'Lakhimpur', 'Assam'),
(116, 'Lanka', 'Assam'),
(117, 'Nagaon', 'Assam'),
(118, 'Sibsagar', 'Assam'),
(119, 'Silchar', 'Assam'),
(120, 'Tezpur', 'Assam'),
(121, 'Tinsukia', 'Assam'),
(122, 'Alipur Duar', 'West Bengal'),
(123, 'Arambagh', 'West Bengal'),
(124, 'Asansol', 'West Bengal'),
(125, 'Ashoknagar Kalyangarh', 'West Bengal'),
(126, 'Baharampur', 'West Bengal'),
(127, 'Baidyabati', 'West Bengal'),
(128, 'Baj Baj', 'West Bengal'),
(129, 'Bally', 'West Bengal'),
(130, 'Bally Cantonment', 'West Bengal'),
(131, 'Balurghat', 'West Bengal'),
(132, 'Bangaon', 'West Bengal'),
(133, 'Bankra', 'West Bengal'),
(134, 'Bankura', 'West Bengal'),
(135, 'Bansbaria', 'West Bengal'),
(136, 'Baranagar', 'West Bengal'),
(137, 'Barddhaman', 'West Bengal'),
(138, 'Basirhat', 'West Bengal'),
(139, 'Bhadreswar', 'West Bengal'),
(140, 'Bhatpara', 'West Bengal'),
(141, 'Bidhannagar', 'West Bengal'),
(142, 'Binnaguri', 'West Bengal'),
(143, 'Bishnupur', 'West Bengal'),
(144, 'Bolpur', 'West Bengal'),
(145, 'Calcutta', 'West Bengal'),
(146, 'Chakdaha', 'West Bengal'),
(147, 'Champdani', 'West Bengal'),
(148, 'Chandannagar', 'West Bengal'),
(149, 'Contai', 'West Bengal'),
(150, 'Dabgram', 'West Bengal'),
(151, 'Darjiling', 'West Bengal'),
(152, 'Dhulian', 'West Bengal'),
(153, 'Dinhata', 'West Bengal'),
(154, 'Dum Dum', 'West Bengal'),
(155, 'Durgapur', 'West Bengal'),
(156, 'Gangarampur', 'West Bengal'),
(157, 'Garulia', 'West Bengal'),
(158, 'Gayespur', 'West Bengal'),
(159, 'Ghatal', 'West Bengal'),
(160, 'Gopalpur', 'West Bengal'),
(161, 'Habra', 'West Bengal'),
(162, 'Halisahar', 'West Bengal'),
(163, 'Haora', 'West Bengal'),
(164, 'HugliChunchura', 'West Bengal'),
(165, 'Ingraj Bazar', 'West Bengal'),
(166, 'Islampur', 'West Bengal'),
(167, 'Jalpaiguri', 'West Bengal'),
(168, 'Jamuria', 'West Bengal'),
(169, 'Jangipur', 'West Bengal'),
(170, 'Jhargram', 'West Bengal'),
(171, 'Kaliyaganj', 'West Bengal'),
(172, 'Kalna', 'West Bengal'),
(173, 'Kalyani', 'West Bengal'),
(174, 'Kamarhati', 'West Bengal'),
(175, 'Kanchrapara', 'West Bengal'),
(176, 'Kandi', 'West Bengal'),
(177, 'Karsiyang', 'West Bengal'),
(178, 'Katwa', 'West Bengal'),
(179, 'Kharagpur', 'West Bengal'),
(180, 'Kharagpur Railway Settlement', 'West Bengal'),
(181, 'Khardaha', 'West Bengal'),
(182, 'Kharia', 'West Bengal'),
(183, 'Koch Bihar', 'West Bengal'),
(184, 'Konnagar', 'West Bengal'),
(185, 'Krishnanagar', 'West Bengal'),
(186, 'Kulti', 'West Bengal'),
(187, 'Madhyamgram', 'West Bengal'),
(188, 'Maheshtala', 'West Bengal'),
(189, 'Memari', 'West Bengal'),
(190, 'Midnapur', 'West Bengal'),
(191, 'Naihati', 'West Bengal'),
(192, 'Navadwip', 'West Bengal'),
(193, 'Ni Barakpur', 'West Bengal'),
(194, 'North Barakpur', 'West Bengal'),
(195, 'North Dum Dum', 'West Bengal'),
(196, 'Old Maldah', 'West Bengal'),
(197, 'Panihati', 'West Bengal'),
(198, 'Phulia', 'West Bengal'),
(199, 'Pujali', 'West Bengal'),
(200, 'Puruliya', 'West Bengal'),
(201, 'Raiganj', 'West Bengal'),
(202, 'Rajpur', 'West Bengal'),
(203, 'Rampur Hat', 'West Bengal'),
(204, 'Ranaghat', 'West Bengal'),
(205, 'Raniganj', 'West Bengal'),
(206, 'Rishra', 'West Bengal'),
(207, 'Shantipur', 'West Bengal'),
(208, 'Shiliguri', 'West Bengal'),
(209, 'Shrirampur', 'West Bengal'),
(210, 'Siuri', 'West Bengal'),
(211, 'South Dum Dum', 'West Bengal'),
(212, 'Titagarh', 'West Bengal'),
(213, 'Ulubaria', 'West Bengal'),
(214, 'UttarparaKotrung', 'West Bengal'),
(215, 'Araria', 'Bihar'),
(216, 'Arrah', 'Bihar'),
(217, 'Aurangabad', 'Bihar'),
(218, 'Bagaha', 'Bihar'),
(219, 'Begusarai', 'Bihar'),
(220, 'Bettiah', 'Bihar'),
(221, 'Bhabua', 'Bihar'),
(222, 'Bhagalpur', 'Bihar'),
(223, 'Bihar', 'Bihar'),
(224, 'Buxar', 'Bihar'),
(225, 'Chhapra', 'Bihar'),
(226, 'Darbhanga', 'Bihar'),
(227, 'Dehri', 'Bihar'),
(228, 'DighaMainpura', 'Bihar'),
(229, 'Dinapur', 'Bihar'),
(230, 'Dumraon', 'Bihar'),
(231, 'Gaya', 'Bihar'),
(232, 'Gopalganj', 'Bihar'),
(233, 'Goura', 'Bihar'),
(234, 'Hajipur', 'Bihar'),
(235, 'Jahanabad', 'Bihar'),
(236, 'Jamalpur', 'Bihar'),
(237, 'Jamui', 'Bihar'),
(238, 'Katihar', 'Bihar'),
(239, 'Khagaria', 'Bihar'),
(240, 'Khagaul', 'Bihar'),
(241, 'Kishanganj', 'Bihar'),
(242, 'Lakhisarai', 'Bihar'),
(243, 'Madhipura', 'Bihar'),
(244, 'Madhubani', 'Bihar'),
(245, 'Masaurhi', 'Bihar'),
(246, 'Mokama', 'Bihar'),
(247, 'Motihari', 'Bihar'),
(248, 'Munger', 'Bihar'),
(249, 'Muzaffarpur', 'Bihar'),
(250, 'Nawada', 'Bihar'),
(251, 'Patna', 'Bihar'),
(252, 'Phulwari', 'Bihar'),
(253, 'Purnia', 'Bihar'),
(254, 'Raxaul', 'Bihar'),
(255, 'Saharsa', 'Bihar'),
(256, 'Samastipur', 'Bihar'),
(257, 'Sasaram', 'Bihar'),
(258, 'Sitamarhi', 'Bihar'),
(259, 'Siwan', 'Bihar'),
(260, 'Supaul', 'Bihar'),
(261, 'Chandigarh', 'Chandigarh'),
(262, 'Ambikapur', 'Chhattisgarh'),
(263, 'Bhilai', 'Chhattisgarh'),
(264, 'Bilaspur', 'Chhattisgarh'),
(265, 'Charoda', 'Chhattisgarh'),
(266, 'Chirmiri', 'Chhattisgarh'),
(267, 'Dhamtari', 'Chhattisgarh'),
(268, 'Durg', 'Chhattisgarh'),
(269, 'Jagdalpur', 'Chhattisgarh'),
(270, 'Korba', 'Chhattisgarh'),
(271, 'Raigarh', 'Chhattisgarh'),
(272, 'Raipur', 'Chhattisgarh'),
(273, 'Rajnandgaon', 'Chhattisgarh'),
(274, 'Bhalswa Jahangirpur', 'Delhi'),
(275, 'Burari', 'Delhi'),
(276, 'Chilla Saroda Bangar', 'Delhi'),
(277, 'Dallo Pura', 'Delhi'),
(278, 'Delhi', 'Delhi'),
(279, 'Deoli', 'Delhi'),
(280, 'Dilli Cantonment', 'Delhi'),
(281, 'Gharoli', 'Delhi'),
(282, 'Gokalpur', 'Delhi'),
(283, 'Hastsal', 'Delhi'),
(284, 'Jaffrabad', 'Delhi'),
(285, 'Karawal Nagar', 'Delhi'),
(286, 'Khajuri Khas', 'Delhi'),
(287, 'Kirari Suleman Nagar', 'Delhi'),
(288, 'Mandoli', 'Delhi'),
(289, 'Mithe Pur', 'Delhi'),
(290, 'Molarband', 'Delhi'),
(291, 'Mundka', 'Delhi'),
(292, 'Mustafabad', 'Delhi'),
(293, 'Nangloi Jat', 'Delhi'),
(294, 'Ni Dilli', 'Delhi'),
(295, 'Pul Pehlad', 'Delhi'),
(296, 'Puth Kalan', 'Delhi'),
(297, 'Roshan Pura', 'Delhi'),
(298, 'Sadat Pur Gujran', 'Delhi'),
(299, 'Sultanpur Majra', 'Delhi'),
(300, 'Tajpul', 'Delhi'),
(301, 'Tigri', 'Delhi'),
(302, 'Ziauddin Pur', 'Delhi'),
(303, 'Madgaon', 'Goa'),
(304, 'Mormugao', 'Goa'),
(305, 'Panaji', 'Goa'),
(306, 'Ahmadabad', 'Gujarat'),
(307, 'Amreli', 'Gujarat'),
(308, 'Anand', 'Gujarat'),
(309, 'Anjar', 'Gujarat'),
(310, 'Bardoli', 'Gujarat'),
(311, 'Bharuch', 'Gujarat'),
(312, 'Bhavnagar', 'Gujarat'),
(313, 'Bhuj', 'Gujarat'),
(314, 'Borsad', 'Gujarat'),
(315, 'Botad', 'Gujarat'),
(316, 'Chandkheda', 'Gujarat'),
(317, 'Chandlodiya', 'Gujarat'),
(318, 'Dabhoi', 'Gujarat'),
(319, 'Dahod', 'Gujarat'),
(320, 'Dholka', 'Gujarat'),
(321, 'Dhoraji', 'Gujarat'),
(322, 'Dhrangadhra', 'Gujarat'),
(323, 'Disa', 'Gujarat'),
(324, 'Gandhidham', 'Gujarat'),
(325, 'Gandhinagar', 'Gujarat'),
(326, 'Ghatlodiya', 'Gujarat'),
(327, 'Godhra', 'Gujarat'),
(328, 'Gondal', 'Gujarat'),
(329, 'Himatnagar', 'Gujarat'),
(330, 'Jamnagar', 'Gujarat'),
(331, 'Jamnagar', 'Gujarat'),
(332, 'Jetpur', 'Gujarat'),
(333, 'Junagadh', 'Gujarat'),
(334, 'Kalol', 'Gujarat'),
(335, 'Keshod', 'Gujarat'),
(336, 'Khambhat', 'Gujarat'),
(337, 'Kundla', 'Gujarat'),
(338, 'Mahuva', 'Gujarat'),
(339, 'Mangrol', 'Gujarat'),
(340, 'Modasa', 'Gujarat'),
(341, 'Morvi', 'Gujarat'),
(342, 'Nadiad', 'Gujarat'),
(343, 'Navagam Ghed', 'Gujarat'),
(344, 'Navsari', 'Gujarat'),
(345, 'Palitana', 'Gujarat'),
(346, 'Patan', 'Gujarat'),
(347, 'Porbandar', 'Gujarat'),
(348, 'Puna', 'Gujarat'),
(349, 'Rajkot', 'Gujarat'),
(350, 'Ramod', 'Gujarat'),
(351, 'Ranip', 'Gujarat'),
(352, 'Siddhapur', 'Gujarat'),
(353, 'Sihor', 'Gujarat'),
(354, 'Surat', 'Gujarat'),
(355, 'Surendranagar', 'Gujarat'),
(356, 'Thaltej', 'Gujarat'),
(357, 'Una', 'Gujarat'),
(358, 'Unjha', 'Gujarat'),
(359, 'Upleta', 'Gujarat'),
(360, 'Vadodara', 'Gujarat'),
(361, 'Valsad', 'Gujarat'),
(362, 'Vapi', 'Gujarat'),
(363, 'Vastral', 'Gujarat'),
(364, 'Vejalpur', 'Gujarat'),
(365, 'Veraval', 'Gujarat'),
(366, 'Vijalpor', 'Gujarat'),
(367, 'Visnagar', 'Gujarat'),
(368, 'Wadhwan', 'Gujarat'),
(369, 'Ambala', 'Haryana'),
(370, 'Ambala Cantonment', 'Haryana'),
(371, 'Ambala Sadar', 'Haryana'),
(372, 'Bahadurgarh', 'Haryana'),
(373, 'Bhiwani', 'Haryana'),
(374, 'Charkhi Dadri', 'Haryana'),
(375, 'Dabwali', 'Haryana'),
(376, 'Faridabad', 'Haryana'),
(377, 'Gohana', 'Haryana'),
(378, 'Hisar', 'Haryana'),
(379, 'Jagadhri', 'Haryana'),
(380, 'Jind', 'Haryana'),
(381, 'Kaithal', 'Haryana'),
(382, 'Karnal', 'Haryana'),
(383, 'Narnaul', 'Haryana'),
(384, 'Narwana', 'Haryana'),
(385, 'Palwal', 'Haryana'),
(386, 'Panchkula', 'Haryana'),
(387, 'Panipat', 'Haryana'),
(388, 'Rewari', 'Haryana'),
(389, 'Rohtak', 'Haryana'),
(390, 'Sirsa', 'Haryana'),
(391, 'Sonipat', 'Haryana'),
(392, 'Thanesar', 'Haryana'),
(393, 'Tohana', 'Haryana'),
(394, 'Yamunanagar', 'Haryana'),
(395, 'Shimla', 'Himachal Pradesh'),
(396, 'Anantnag', 'Jammu and Kashmir'),
(397, 'Baramula', 'Jammu and Kashmir'),
(398, 'Bari Brahmana', 'Jammu and Kashmir'),
(399, 'Jammu', 'Jammu and Kashmir'),
(400, 'Kathua', 'Jammu and Kashmir'),
(401, 'Sopur', 'Jammu and Kashmir'),
(402, 'Srinagar', 'Jammu and Kashmir'),
(403, 'Udhampur', 'Jammu and Kashmir'),
(404, 'Adityapur', 'Jharkhand'),
(405, 'Bagbahra', 'Jharkhand'),
(406, 'Bhuli', 'Jharkhand'),
(407, 'Bokaro', 'Jharkhand'),
(408, 'Chaibasa', 'Jharkhand'),
(409, 'Chas', 'Jharkhand'),
(410, 'Daltenganj', 'Jharkhand'),
(411, 'Devghar', 'Jharkhand'),
(412, 'Dhanbad', 'Jharkhand'),
(413, 'Hazaribag', 'Jharkhand'),
(414, 'Jamshedpur', 'Jharkhand'),
(415, 'Jharia', 'Jharkhand'),
(416, 'Jhumri Tilaiya', 'Jharkhand'),
(417, 'Jorapokhar', 'Jharkhand'),
(418, 'Katras', 'Jharkhand'),
(419, 'Lohardaga', 'Jharkhand'),
(420, 'Mango', 'Jharkhand'),
(421, 'Phusro', 'Jharkhand'),
(422, 'Ramgarh', 'Jharkhand'),
(423, 'Ranchi', 'Jharkhand'),
(424, 'Sahibganj', 'Jharkhand'),
(425, 'Saunda', 'Jharkhand'),
(426, 'Sindari', 'Jharkhand'),
(427, 'Bagalkot', 'Karnataka'),
(428, 'Bangalore', 'Karnataka'),
(429, 'Basavakalyan', 'Karnataka'),
(430, 'Belgaum', 'Karnataka'),
(431, 'Bellary', 'Karnataka'),
(432, 'Bhadravati', 'Karnataka'),
(433, 'Bidar', 'Karnataka'),
(434, 'Bijapur', 'Karnataka'),
(435, 'Bommanahalli', 'Karnataka'),
(436, 'Byatarayanapura', 'Karnataka'),
(437, 'Challakere', 'Karnataka'),
(438, 'Chamrajnagar', 'Karnataka'),
(439, 'Channapatna', 'Karnataka'),
(440, 'Chik Ballapur', 'Karnataka'),
(441, 'Chikmagalur', 'Karnataka'),
(442, 'Chintamani', 'Karnataka'),
(443, 'Chitradurga', 'Karnataka'),
(444, 'Dasarahalli', 'Karnataka'),
(445, 'Davanagere', 'Karnataka'),
(446, 'Dod Ballapur', 'Karnataka'),
(447, 'Gadag', 'Karnataka'),
(448, 'Gangawati', 'Karnataka'),
(449, 'Gokak', 'Karnataka'),
(450, 'Gulbarga', 'Karnataka'),
(451, 'Harihar', 'Karnataka'),
(452, 'Hassan', 'Karnataka'),
(453, 'Haveri', 'Karnataka'),
(454, 'Hiriyur', 'Karnataka'),
(455, 'Hosakote', 'Karnataka'),
(456, 'Hospet', 'Karnataka'),
(457, 'Hubli', 'Karnataka'),
(458, 'Ilkal', 'Karnataka'),
(459, 'Jamkhandi', 'Karnataka'),
(460, 'Kanakapura', 'Karnataka'),
(461, 'Karwar', 'Karnataka'),
(462, 'Kolar', 'Karnataka'),
(463, 'Kollegal', 'Karnataka'),
(464, 'Koppal', 'Karnataka'),
(465, 'Krishnarajapura', 'Karnataka'),
(466, 'Mahadevapura', 'Karnataka'),
(467, 'Maisuru', 'Karnataka'),
(468, 'Mandya', 'Karnataka'),
(469, 'Mangaluru', 'Karnataka'),
(470, 'Nipani', 'Karnataka'),
(471, 'Pattanagere', 'Karnataka'),
(472, 'Puttur', 'Karnataka'),
(473, 'Rabkavi', 'Karnataka'),
(474, 'Raichur', 'Karnataka'),
(475, 'Ramanagaram', 'Karnataka'),
(476, 'Ranibennur', 'Karnataka'),
(477, 'Robertsonpet', 'Karnataka'),
(478, 'Sagar', 'Karnataka'),
(479, 'Shahabad', 'Karnataka'),
(480, 'Shahpur', 'Karnataka'),
(481, 'Shimoga', 'Karnataka'),
(482, 'Shorapur', 'Karnataka'),
(483, 'Sidlaghatta', 'Karnataka'),
(484, 'Sira', 'Karnataka'),
(485, 'Sirsi', 'Karnataka'),
(486, 'Tiptur', 'Karnataka'),
(487, 'Tumkur', 'Karnataka'),
(488, 'Udupi', 'Karnataka'),
(489, 'Ullal', 'Karnataka'),
(490, 'Yadgir', 'Karnataka'),
(491, 'Yelahanka', 'Karnataka'),
(492, 'Alappuzha', 'Kerala'),
(493, 'Beypur', 'Kerala'),
(494, 'Cheruvannur', 'Kerala'),
(495, 'Edakkara', 'Kerala'),
(496, 'Edathala', 'Kerala'),
(497, 'Kalamassery', 'Kerala'),
(498, 'Kannan Devan Hills', 'Kerala'),
(499, 'Kannangad', 'Kerala'),
(500, 'Kannur', 'Kerala'),
(501, 'Kayankulam', 'Kerala'),
(502, 'Kochi', 'Kerala'),
(503, 'Kollam', 'Kerala'),
(504, 'Kottayam', 'Kerala'),
(505, 'Koyilandi', 'Kerala'),
(506, 'Kozhikkod', 'Kerala'),
(507, 'Kunnamkulam', 'Kerala'),
(508, 'Malappuram', 'Kerala'),
(509, 'Manjeri', 'Kerala'),
(510, 'Nedumangad', 'Kerala'),
(511, 'Neyyattinkara', 'Kerala'),
(512, 'Palakkad', 'Kerala'),
(513, 'Pallichal', 'Kerala'),
(514, 'Payyannur', 'Kerala'),
(515, 'Ponnani', 'Kerala'),
(516, 'Talipparamba', 'Kerala'),
(517, 'Thalassery', 'Kerala'),
(518, 'Thiruvananthapuram', 'Kerala'),
(519, 'Thrippunithura', 'Kerala'),
(520, 'Thrissur', 'Kerala'),
(521, 'Tirur', 'Kerala'),
(522, 'Tiruvalla', 'Kerala'),
(523, 'Vadakara', 'Kerala'),
(524, 'Ashoknagar', 'Madhya Pradesh'),
(525, 'Balaghat', 'Madhya Pradesh'),
(526, 'Basoda', 'Madhya Pradesh'),
(527, 'Betul', 'Madhya Pradesh'),
(528, 'Bhind', 'Madhya Pradesh'),
(529, 'Bhopal', 'Madhya Pradesh'),
(530, 'BinaEtawa', 'Madhya Pradesh'),
(531, 'Burhanpur', 'Madhya Pradesh'),
(532, 'Chhatarpur', 'Madhya Pradesh'),
(533, 'Chhindwara', 'Madhya Pradesh'),
(534, 'Dabra', 'Madhya Pradesh'),
(535, 'Damoh', 'Madhya Pradesh'),
(536, 'Datia', 'Madhya Pradesh'),
(537, 'Dewas', 'Madhya Pradesh'),
(538, 'Dhar', 'Madhya Pradesh'),
(539, 'Gohad', 'Madhya Pradesh'),
(540, 'Guna', 'Madhya Pradesh'),
(541, 'Gwalior', 'Madhya Pradesh'),
(542, 'Harda', 'Madhya Pradesh'),
(543, 'Hoshangabad', 'Madhya Pradesh'),
(544, 'Indore', 'Madhya Pradesh'),
(545, 'Itarsi', 'Madhya Pradesh'),
(546, 'Jabalpur', 'Madhya Pradesh'),
(547, 'Jabalpur Cantonment', 'Madhya Pradesh'),
(548, 'Jaora', 'Madhya Pradesh'),
(549, 'Khandwa', 'Madhya Pradesh'),
(550, 'Khargone', 'Madhya Pradesh'),
(551, 'Mandidip', 'Madhya Pradesh'),
(552, 'Mandsaur', 'Madhya Pradesh'),
(553, 'Mau', 'Madhya Pradesh'),
(554, 'Morena', 'Madhya Pradesh'),
(555, 'Murwara', 'Madhya Pradesh'),
(556, 'Nagda', 'Madhya Pradesh'),
(557, 'Nimach', 'Madhya Pradesh'),
(558, 'Pithampur', 'Madhya Pradesh'),
(559, 'Raghogarh', 'Madhya Pradesh'),
(560, 'Ratlam', 'Madhya Pradesh'),
(561, 'Rewa', 'Madhya Pradesh'),
(562, 'Sagar', 'Madhya Pradesh'),
(563, 'Sarni', 'Madhya Pradesh'),
(564, 'Satna', 'Madhya Pradesh'),
(565, 'Sehore', 'Madhya Pradesh'),
(566, 'Sendhwa', 'Madhya Pradesh'),
(567, 'Seoni', 'Madhya Pradesh'),
(568, 'Shahdol', 'Madhya Pradesh'),
(569, 'Shajapur', 'Madhya Pradesh'),
(570, 'Sheopur', 'Madhya Pradesh'),
(571, 'Shivapuri', 'Madhya Pradesh'),
(572, 'Sidhi', 'Madhya Pradesh'),
(573, 'Singrauli', 'Madhya Pradesh'),
(574, 'Tikamgarh', 'Madhya Pradesh'),
(575, 'Ujjain', 'Madhya Pradesh'),
(576, 'Vidisha', 'Madhya Pradesh'),
(577, 'Achalpur', 'Maharashtra'),
(578, 'Ahmadnagar', 'Maharashtra'),
(579, 'Akola', 'Maharashtra'),
(580, 'Akot', 'Maharashtra'),
(581, 'Amalner', 'Maharashtra'),
(582, 'Ambajogai', 'Maharashtra'),
(583, 'Amravati', 'Maharashtra'),
(584, 'Anjangaon', 'Maharashtra'),
(585, 'Aurangabad', 'Maharashtra'),
(586, 'Badlapur', 'Maharashtra'),
(587, 'Ballarpur', 'Maharashtra'),
(588, 'Baramati', 'Maharashtra'),
(589, 'Barsi', 'Maharashtra'),
(590, 'Basmat', 'Maharashtra'),
(591, 'Bhadravati', 'Maharashtra'),
(592, 'Bhandara', 'Maharashtra'),
(593, 'Bhiwandi', 'Maharashtra'),
(594, 'Bhusawal', 'Maharashtra'),
(595, 'Bid', 'Maharashtra'),
(596, 'Mumbai', 'Maharashtra'),
(597, 'Buldana', 'Maharashtra'),
(598, 'Chalisgaon', 'Maharashtra'),
(599, 'Chandrapur', 'Maharashtra'),
(600, 'Chikhli', 'Maharashtra'),
(601, 'Chiplun', 'Maharashtra'),
(602, 'Chopda', 'Maharashtra'),
(603, 'Dahanu', 'Maharashtra'),
(604, 'Deolali', 'Maharashtra'),
(605, 'Dhule', 'Maharashtra'),
(606, 'Digdoh', 'Maharashtra'),
(607, 'Diglur', 'Maharashtra'),
(608, 'Gadchiroli', 'Maharashtra'),
(609, 'Gondiya', 'Maharashtra'),
(610, 'Hinganghat', 'Maharashtra'),
(611, 'Hingoli', 'Maharashtra'),
(612, 'Ichalkaranji', 'Maharashtra'),
(613, 'Jalgaon', 'Maharashtra'),
(614, 'Jalna', 'Maharashtra'),
(615, 'Kalyan', 'Maharashtra'),
(616, 'Kamthi', 'Maharashtra'),
(617, 'Karanja', 'Maharashtra'),
(618, 'Khadki', 'Maharashtra'),
(619, 'Khamgaon', 'Maharashtra'),
(620, 'Khopoli', 'Maharashtra'),
(621, 'Kolhapur', 'Maharashtra'),
(622, 'Kopargaon', 'Maharashtra'),
(623, 'Latur', 'Maharashtra'),
(624, 'Lonavale', 'Maharashtra'),
(625, 'Malegaon', 'Maharashtra'),
(626, 'Malkapur', 'Maharashtra'),
(627, 'Manmad', 'Maharashtra'),
(628, 'Mira Bhayandar', 'Maharashtra'),
(629, 'Nagpur', 'Maharashtra'),
(630, 'Nalasopara', 'Maharashtra'),
(631, 'Nanded', 'Maharashtra'),
(632, 'Nandurbar', 'Maharashtra'),
(633, 'Nashik', 'Maharashtra'),
(634, 'Navghar', 'Maharashtra'),
(636, 'Navi Mumbai', 'Maharashtra'),
(637, 'Osmanabad', 'Maharashtra'),
(638, 'Palghar', 'Maharashtra'),
(639, 'Pandharpur', 'Maharashtra'),
(640, 'Parbhani', 'Maharashtra'),
(641, 'Phaltan', 'Maharashtra'),
(642, 'Pimpri', 'Maharashtra'),
(643, 'Pune', 'Maharashtra'),
(644, 'Pune Cantonment', 'Maharashtra'),
(645, 'Pusad', 'Maharashtra'),
(646, 'Ratnagiri', 'Maharashtra'),
(647, 'SangliMiraj', 'Maharashtra'),
(648, 'Satara', 'Maharashtra'),
(649, 'Shahada', 'Maharashtra'),
(650, 'Shegaon', 'Maharashtra'),
(651, 'Shirpur', 'Maharashtra'),
(652, 'Sholapur', 'Maharashtra'),
(653, 'Shrirampur', 'Maharashtra'),
(654, 'Sillod', 'Maharashtra'),
(655, 'Thane', 'Maharashtra'),
(656, 'Udgir', 'Maharashtra'),
(657, 'Ulhasnagar', 'Maharashtra'),
(658, 'Uran Islampur', 'Maharashtra'),
(659, 'Vasai', 'Maharashtra'),
(660, 'Virar', 'Maharashtra'),
(661, 'Wadi', 'Maharashtra'),
(662, 'Wani', 'Maharashtra'),
(663, 'Wardha', 'Maharashtra'),
(664, 'Warud', 'Maharashtra'),
(665, 'Washim', 'Maharashtra'),
(666, 'Yavatmal', 'Maharashtra'),
(667, 'Imphal', 'Manipur'),
(668, 'Shillong', 'Meghalaya'),
(669, 'Tura', 'Meghalaya'),
(670, 'Aizawl', 'Mizoram'),
(671, 'Lunglei', 'Mizoram'),
(672, 'Dimapur', 'Nagaland'),
(673, 'Kohima', 'Nagaland'),
(674, 'Wokha', 'Nagaland'),
(675, 'Balangir', 'Orissa'),
(676, 'Baleshwar', 'Orissa'),
(677, 'Barbil', 'Orissa'),
(678, 'Bargarh', 'Orissa'),
(679, 'Baripada', 'Orissa'),
(680, 'Bhadrak', 'Orissa'),
(681, 'Bhawanipatna', 'Orissa'),
(682, 'Bhubaneswar', 'Orissa'),
(683, 'Brahmapur', 'Orissa'),
(684, 'Brajrajnagar', 'Orissa'),
(685, 'Dhenkanal', 'Orissa'),
(686, 'Jaypur', 'Orissa'),
(687, 'Jharsuguda', 'Orissa'),
(688, 'Kataka', 'Orissa'),
(689, 'Kendujhar', 'Orissa'),
(690, 'Paradwip', 'Orissa'),
(691, 'Puri', 'Orissa'),
(692, 'Raurkela', 'Orissa'),
(693, 'Raurkela Industrial Township', 'Orissa'),
(694, 'Rayagada', 'Orissa'),
(695, 'Sambalpur', 'Orissa'),
(696, 'Sunabeda', 'Orissa'),
(697, 'Karaikal', 'Pondicherry'),
(698, 'Ozhukarai', 'Pondicherry'),
(699, 'Pondicherry', 'Pondicherry'),
(700, 'Abohar', 'Punjab'),
(701, 'Amritsar', 'Punjab'),
(702, 'Barnala', 'Punjab'),
(703, 'Batala', 'Punjab'),
(704, 'Bathinda', 'Punjab'),
(705, 'Dhuri', 'Punjab'),
(706, 'Faridkot', 'Punjab'),
(707, 'Fazilka', 'Punjab'),
(708, 'Firozpur', 'Punjab'),
(709, 'Firozpur Cantonment', 'Punjab'),
(710, 'Gobindgarh', 'Punjab'),
(711, 'Gurdaspur', 'Punjab'),
(712, 'Hoshiarpur', 'Punjab'),
(713, 'Jagraon', 'Punjab'),
(714, 'Jalandhar', 'Punjab'),
(715, 'Kapurthala', 'Punjab'),
(716, 'Khanna', 'Punjab'),
(717, 'Kot Kapura', 'Punjab'),
(718, 'Ludhiana', 'Punjab'),
(719, 'Malaut', 'Punjab'),
(720, 'Maler Kotla', 'Punjab'),
(721, 'Mansa', 'Punjab'),
(722, 'Moga', 'Punjab'),
(723, 'Mohali', 'Punjab'),
(724, 'Pathankot', 'Punjab'),
(725, 'Patiala', 'Punjab'),
(726, 'Phagwara', 'Punjab'),
(727, 'Rajpura', 'Punjab'),
(728, 'Rupnagar', 'Punjab'),
(729, 'Samana', 'Punjab'),
(730, 'Sangrur', 'Punjab'),
(731, 'Sirhind', 'Punjab'),
(732, 'Sunam', 'Punjab'),
(733, 'Tarn Taran', 'Punjab'),
(734, 'Ajmer', 'Rajasthan'),
(735, 'Alwar', 'Rajasthan'),
(736, 'Balotra', 'Rajasthan'),
(737, 'Banswara', 'Rajasthan'),
(738, 'Baran', 'Rajasthan'),
(739, 'Bari', 'Rajasthan'),
(740, 'Barmer', 'Rajasthan'),
(741, 'Beawar', 'Rajasthan'),
(742, 'Bharatpur', 'Rajasthan'),
(743, 'Bhilwara', 'Rajasthan'),
(744, 'Bhiwadi', 'Rajasthan'),
(745, 'Bikaner', 'Rajasthan'),
(746, 'Bundi', 'Rajasthan'),
(747, 'Chittaurgarh', 'Rajasthan'),
(748, 'Chomun', 'Rajasthan'),
(749, 'Churu', 'Rajasthan'),
(750, 'Daosa', 'Rajasthan'),
(751, 'Dhaulpur', 'Rajasthan'),
(752, 'Didwana', 'Rajasthan'),
(753, 'Fatehpur', 'Rajasthan'),
(754, 'Ganganagar', 'Rajasthan'),
(755, 'Gangapur', 'Rajasthan'),
(756, 'Hanumangarh', 'Rajasthan'),
(757, 'Hindaun', 'Rajasthan'),
(758, 'Jaipur', 'Rajasthan'),
(759, 'Jaisalmer', 'Rajasthan'),
(760, 'Jalor', 'Rajasthan'),
(761, 'Jhalawar', 'Rajasthan'),
(762, 'Jhunjhunun', 'Rajasthan'),
(763, 'Jodhpur', 'Rajasthan'),
(764, 'Karauli', 'Rajasthan'),
(765, 'Kishangarh', 'Rajasthan'),
(766, 'Kota', 'Rajasthan'),
(767, 'Kuchaman', 'Rajasthan'),
(768, 'Ladnun', 'Rajasthan'),
(769, 'Makrana', 'Rajasthan'),
(770, 'Nagaur', 'Rajasthan'),
(771, 'Nawalgarh', 'Rajasthan'),
(772, 'Nimbahera', 'Rajasthan'),
(773, 'Nokha', 'Rajasthan'),
(774, 'Pali', 'Rajasthan'),
(775, 'Rajsamand', 'Rajasthan'),
(776, 'Ratangarh', 'Rajasthan'),
(777, 'Sardarshahr', 'Rajasthan'),
(778, 'Sawai Madhopur', 'Rajasthan'),
(779, 'Sikar', 'Rajasthan'),
(780, 'Sujangarh', 'Rajasthan'),
(781, 'Suratgarh', 'Rajasthan'),
(782, 'Tonk', 'Rajasthan'),
(783, 'Udaipur', 'Rajasthan'),
(784, 'Alandur', 'Tamil Nadu'),
(785, 'Ambattur', 'Tamil Nadu'),
(786, 'Ambur', 'Tamil Nadu'),
(787, 'Arakonam', 'Tamil Nadu'),
(788, 'Arani', 'Tamil Nadu'),
(789, 'Aruppukkottai', 'Tamil Nadu'),
(790, 'Attur', 'Tamil Nadu'),
(791, 'Avadi', 'Tamil Nadu'),
(792, 'Avaniapuram', 'Tamil Nadu'),
(793, 'Bodinayakkanur', 'Tamil Nadu'),
(794, 'Chengalpattu', 'Tamil Nadu'),
(795, 'Dharapuram', 'Tamil Nadu'),
(796, 'Dharmapuri', 'Tamil Nadu'),
(797, 'Dindigul', 'Tamil Nadu'),
(798, 'Erode', 'Tamil Nadu'),
(799, 'Gopichettipalaiyam', 'Tamil Nadu'),
(800, 'Gudalur', 'Tamil Nadu'),
(801, 'Gudiyattam', 'Tamil Nadu'),
(802, 'Hosur', 'Tamil Nadu'),
(803, 'Idappadi', 'Tamil Nadu'),
(804, 'Kadayanallur', 'Tamil Nadu'),
(805, 'Kambam', 'Tamil Nadu'),
(806, 'Kanchipuram', 'Tamil Nadu'),
(807, 'Karur', 'Tamil Nadu'),
(808, 'Kavundampalaiyam', 'Tamil Nadu'),
(809, 'Kovilpatti', 'Tamil Nadu'),
(810, 'Koyampattur', 'Tamil Nadu'),
(811, 'Krishnagiri', 'Tamil Nadu'),
(812, 'Kumarapalaiyam', 'Tamil Nadu'),
(813, 'Kumbakonam', 'Tamil Nadu'),
(814, 'Kuniyamuthur', 'Tamil Nadu'),
(815, 'Kurichi', 'Tamil Nadu'),
(816, 'Madhavaram', 'Tamil Nadu'),
(817, 'Madras', 'Tamil Nadu'),
(818, 'Madurai', 'Tamil Nadu'),
(819, 'Maduravoyal', 'Tamil Nadu'),
(820, 'Mannargudi', 'Tamil Nadu'),
(821, 'Mayiladuthurai', 'Tamil Nadu'),
(822, 'Mettupalayam', 'Tamil Nadu'),
(823, 'Mettur', 'Tamil Nadu'),
(824, 'Nagapattinam', 'Tamil Nadu'),
(825, 'Nagercoil', 'Tamil Nadu'),
(826, 'Namakkal', 'Tamil Nadu'),
(827, 'Nerkunram', 'Tamil Nadu'),
(828, 'Neyveli', 'Tamil Nadu'),
(829, 'Pallavaram', 'Tamil Nadu'),
(830, 'Pammal', 'Tamil Nadu'),
(831, 'Pannuratti', 'Tamil Nadu'),
(832, 'Paramakkudi', 'Tamil Nadu'),
(833, 'Pattukkottai', 'Tamil Nadu'),
(834, 'Pollachi', 'Tamil Nadu'),
(835, 'Pudukkottai', 'Tamil Nadu'),
(836, 'Puliyankudi', 'Tamil Nadu'),
(837, 'Punamalli', 'Tamil Nadu'),
(838, 'Rajapalaiyam', 'Tamil Nadu'),
(839, 'Ramanathapuram', 'Tamil Nadu'),
(840, 'Salem', 'Tamil Nadu'),
(841, 'Sankarankoil', 'Tamil Nadu'),
(842, 'Sivakasi', 'Tamil Nadu'),
(843, 'Srivilliputtur', 'Tamil Nadu'),
(844, 'Tambaram', 'Tamil Nadu'),
(845, 'Tenkasi', 'Tamil Nadu'),
(846, 'Thanjavur', 'Tamil Nadu'),
(847, 'Theni Allinagaram', 'Tamil Nadu'),
(848, 'Thiruthangal', 'Tamil Nadu'),
(849, 'Thiruvarur', 'Tamil Nadu'),
(850, 'Thuthukkudi', 'Tamil Nadu'),
(851, 'Tindivanam', 'Tamil Nadu'),
(852, 'Tiruchchirappalli', 'Tamil Nadu'),
(853, 'Tiruchengode', 'Tamil Nadu'),
(854, 'Tirunelveli', 'Tamil Nadu'),
(855, 'Tirupathur', 'Tamil Nadu'),
(856, 'Tiruppur', 'Tamil Nadu'),
(857, 'Tiruvannamalai', 'Tamil Nadu'),
(858, 'Tiruvottiyur', 'Tamil Nadu'),
(859, 'Udagamandalam', 'Tamil Nadu'),
(860, 'Udumalaipettai', 'Tamil Nadu'),
(861, 'Valparai', 'Tamil Nadu'),
(862, 'Vaniyambadi', 'Tamil Nadu'),
(863, 'Velampalaiyam', 'Tamil Nadu'),
(864, 'Velluru', 'Tamil Nadu'),
(865, 'Viluppuram', 'Tamil Nadu'),
(866, 'Virappanchatram', 'Tamil Nadu'),
(867, 'Virudhachalam', 'Tamil Nadu'),
(868, 'Virudunagar', 'Tamil Nadu'),
(869, 'Agartala', 'Tripura'),
(870, 'Agartala MCl', 'Tripura'),
(871, 'Badharghat', 'Tripura'),
(872, 'Agra', 'Uttar Pradesh'),
(873, 'Aligarh', 'Uttar Pradesh'),
(874, 'Allahabad', 'Uttar Pradesh'),
(875, 'Amroha', 'Uttar Pradesh'),
(876, 'Aonla', 'Uttar Pradesh'),
(877, 'Auraiya', 'Uttar Pradesh'),
(878, 'Ayodhya', 'Uttar Pradesh'),
(879, 'Azamgarh', 'Uttar Pradesh'),
(880, 'Baheri', 'Uttar Pradesh'),
(881, 'Bahraich', 'Uttar Pradesh'),
(882, 'Ballia', 'Uttar Pradesh'),
(883, 'Balrampur', 'Uttar Pradesh'),
(884, 'Banda', 'Uttar Pradesh'),
(885, 'Baraut', 'Uttar Pradesh'),
(886, 'Bareli', 'Uttar Pradesh'),
(887, 'Basti', 'Uttar Pradesh'),
(888, 'Behta Hajipur', 'Uttar Pradesh'),
(889, 'Bela', 'Uttar Pradesh'),
(890, 'Bhadohi', 'Uttar Pradesh'),
(891, 'Bijnor', 'Uttar Pradesh'),
(892, 'Bisalpur', 'Uttar Pradesh'),
(893, 'Biswan', 'Uttar Pradesh'),
(894, 'Budaun', 'Uttar Pradesh'),
(895, 'Bulandshahr', 'Uttar Pradesh'),
(896, 'Chandausi', 'Uttar Pradesh'),
(897, 'Chandpur', 'Uttar Pradesh'),
(898, 'Chhibramau', 'Uttar Pradesh'),
(899, 'Chitrakut Dham', 'Uttar Pradesh'),
(900, 'Dadri', 'Uttar Pradesh'),
(901, 'Deoband', 'Uttar Pradesh'),
(902, 'Deoria', 'Uttar Pradesh'),
(903, 'Etah', 'Uttar Pradesh'),
(904, 'Etawah', 'Uttar Pradesh'),
(905, 'Faizabad', 'Uttar Pradesh'),
(906, 'Faridpur', 'Uttar Pradesh'),
(907, 'Farrukhabad', 'Uttar Pradesh'),
(908, 'Fatehpur', 'Uttar Pradesh'),
(909, 'Firozabad', 'Uttar Pradesh'),
(910, 'Gajraula', 'Uttar Pradesh'),
(911, 'Ganga Ghat', 'Uttar Pradesh'),
(912, 'Gangoh', 'Uttar Pradesh'),
(913, 'Ghaziabad', 'Uttar Pradesh'),
(914, 'Ghazipur', 'Uttar Pradesh'),
(915, 'Gola Gokarannath', 'Uttar Pradesh'),
(916, 'Gonda', 'Uttar Pradesh'),
(917, 'Gorakhpur', 'Uttar Pradesh'),
(918, 'Hapur', 'Uttar Pradesh'),
(919, 'Hardoi', 'Uttar Pradesh'),
(920, 'Hasanpur', 'Uttar Pradesh'),
(921, 'Hathras', 'Uttar Pradesh'),
(922, 'Jahangirabad', 'Uttar Pradesh'),
(923, 'Jalaun', 'Uttar Pradesh'),
(924, 'Jaunpur', 'Uttar Pradesh'),
(925, 'Jhansi', 'Uttar Pradesh'),
(926, 'Kadi', 'Uttar Pradesh'),
(927, 'Kairana', 'Uttar Pradesh'),
(928, 'Kannauj', 'Uttar Pradesh'),
(929, 'Kanpur', 'Uttar Pradesh'),
(930, 'Kanpur Cantonment', 'Uttar Pradesh'),
(931, 'Kasganj', 'Uttar Pradesh'),
(932, 'Khatauli', 'Uttar Pradesh'),
(933, 'Khora', 'Uttar Pradesh'),
(934, 'Khurja', 'Uttar Pradesh'),
(935, 'Kiratpur', 'Uttar Pradesh'),
(936, 'Kosi Kalan', 'Uttar Pradesh'),
(937, 'Laharpur', 'Uttar Pradesh'),
(938, 'Lakhimpur', 'Uttar Pradesh'),
(939, 'Lakhnau', 'Uttar Pradesh'),
(940, 'Lakhnau Cantonment', 'Uttar Pradesh'),
(941, 'Lalitpur', 'Uttar Pradesh'),
(942, 'Loni', 'Uttar Pradesh'),
(943, 'Mahoba', 'Uttar Pradesh'),
(944, 'Mainpuri', 'Uttar Pradesh'),
(945, 'Mathura', 'Uttar Pradesh'),
(946, 'Mau', 'Uttar Pradesh'),
(947, 'Mauranipur', 'Uttar Pradesh'),
(948, 'Mawana', 'Uttar Pradesh'),
(949, 'Mirat', 'Uttar Pradesh'),
(950, 'Mirat Cantonment', 'Uttar Pradesh'),
(951, 'Mirzapur', 'Uttar Pradesh'),
(952, 'Modinagar', 'Uttar Pradesh'),
(953, 'Moradabad', 'Uttar Pradesh'),
(954, 'Mubarakpur', 'Uttar Pradesh'),
(955, 'Mughal Sarai', 'Uttar Pradesh'),
(956, 'Muradnagar', 'Uttar Pradesh'),
(957, 'Muzaffarnagar', 'Uttar Pradesh'),
(958, 'Nagina', 'Uttar Pradesh'),
(959, 'Najibabad', 'Uttar Pradesh'),
(960, 'Nawabganj', 'Uttar Pradesh'),
(961, 'Noida', 'Uttar Pradesh'),
(962, 'Obra', 'Uttar Pradesh'),
(963, 'Orai', 'Uttar Pradesh'),
(964, 'Pilibhit', 'Uttar Pradesh'),
(965, 'Pilkhuwa', 'Uttar Pradesh'),
(966, 'Rae Bareli', 'Uttar Pradesh'),
(967, 'Ramgarh Nagla Kothi', 'Uttar Pradesh'),
(968, 'Rampur', 'Uttar Pradesh'),
(969, 'Rath', 'Uttar Pradesh'),
(970, 'Renukut', 'Uttar Pradesh'),
(971, 'Saharanpur', 'Uttar Pradesh'),
(972, 'Sahaswan', 'Uttar Pradesh'),
(973, 'Sambhal', 'Uttar Pradesh'),
(974, 'Sandila', 'Uttar Pradesh'),
(975, 'Shahabad', 'Uttar Pradesh'),
(976, 'Shahjahanpur', 'Uttar Pradesh'),
(977, 'Shamli', 'Uttar Pradesh'),
(978, 'Sherkot', 'Uttar Pradesh'),
(979, 'Shikohabad', 'Uttar Pradesh'),
(980, 'Sikandarabad', 'Uttar Pradesh'),
(981, 'Sitapur', 'Uttar Pradesh'),
(982, 'Sukhmalpur Nizamabad', 'Uttar Pradesh'),
(983, 'Sultanpur', 'Uttar Pradesh'),
(984, 'Tanda', 'Uttar Pradesh'),
(985, 'Tilhar', 'Uttar Pradesh'),
(986, 'Tundla', 'Uttar Pradesh'),
(987, 'Ujhani', 'Uttar Pradesh'),
(988, 'Unnao', 'Uttar Pradesh'),
(989, 'Varanasi', 'Uttar Pradesh'),
(990, 'Vrindavan', 'Uttar Pradesh'),
(991, 'Dehra Dun', 'Uttaranchal'),
(992, 'Dehra Dun Cantonment', 'Uttaranchal'),
(993, 'Gola Range', 'Uttaranchal'),
(994, 'Haldwani', 'Uttaranchal'),
(995, 'Haridwar', 'Uttaranchal'),
(996, 'Kashipur', 'Uttaranchal'),
(997, 'Pithoragarh', 'Uttaranchal'),
(998, 'Rishikesh', 'Uttaranchal'),
(999, 'Rudrapur', 'Uttaranchal'),
(1000, 'Rurki', 'Uttaranchal');

-- --------------------------------------------------------

--
-- Table structure for table `Courses`
--

CREATE TABLE `Courses` (
  `CourseId` int(11) NOT NULL,
  `CourseName` varchar(50) NOT NULL,
  `ProgramId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Courses`
--

INSERT INTO `Courses` (`CourseId`, `CourseName`, `ProgramId`) VALUES
(1, 'Test 123', 17),
(2, '1234', 16),
(3, 'ADC', 6),
(4, 'Test Course 123 Comps', 5),
(5, 'Test Course 123 Comps 1', 5),
(13, 'Test Course 123 Comps 2', 5),
(14, 'TE Sub 1', 17),
(15, 'I.T. Sub 1', 6),
(16, '1234', 6),
(18, '123456', 5),
(19, 'Object Oriented Programming', 6),
(20, 'Test course', 6),
(21, 'Techinical Drawing', 11),
(22, 'Course 1', 16),
(23, 'Test Course', 12),
(24, 'Test Again', 12),
(25, 'Laplace', 18),
(26, 'Test Bio Course', 13),
(27, 'ADBMS', 5),
(28, 'Microprocessor', 6),
(29, 'Digital System Design', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Domains`
--

CREATE TABLE `Domains` (
  `DomainId` int(11) NOT NULL,
  `DomainName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Domains`
--

INSERT INTO `Domains` (`DomainId`, `DomainName`) VALUES
(17, 'Basic Science'),
(15, 'Bio Science'),
(16, 'Chemical Engineering'),
(14, 'Civil Engineering'),
(2, 'Computer Science'),
(1, 'Electrical'),
(13, 'Mechanical Engineering'),
(18, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `E_CS`
--

CREATE TABLE `E_CS` (
  `id` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `E` int(11) NOT NULL,
  `CS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `PendingRating`
--

CREATE TABLE `PendingRating` (
  `id` int(11) NOT NULL,
  `ScoreId` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `TakeRating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `PI`
--

CREATE TABLE `PI` (
  `PIId` int(11) NOT NULL,
  `TopicId` int(11) NOT NULL,
  `PIConcept` varchar(300) NOT NULL,
  `PIQuestion` varchar(500) NOT NULL,
  `PIAnswer` varchar(100) NOT NULL,
  `PIPlausibleDistractors` varchar(300) NOT NULL,
  `User` int(11) NOT NULL,
  `ActivityRating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `PIDisagrement`
--

CREATE TABLE `PIDisagrement` (
  `ID` int(11) NOT NULL,
  `ScoreId` int(11) NOT NULL,
  `PostedBy` int(11) NOT NULL,
  `ReviewedBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `PIScores`
--

CREATE TABLE `PIScores` (
  `ScoreId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `ReviewerId` int(11) NOT NULL,
  `PIId` int(11) NOT NULL,
  `Score1` int(11) NOT NULL,
  `Score2` int(11) NOT NULL,
  `TotalScore` int(11) NOT NULL,
  `Reason1` varchar(500) NOT NULL,
  `Reason2` varchar(500) NOT NULL,
  `Done` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Programs`
--

CREATE TABLE `Programs` (
  `ProgramId` int(11) NOT NULL,
  `DomainId` int(11) NOT NULL,
  `ProgramName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Programs`
--

INSERT INTO `Programs` (`ProgramId`, `DomainId`, `ProgramName`) VALUES
(1, 1, 'Electrical Engineering'),
(2, 1, 'Electronics Engineering'),
(3, 1, 'Electronic and Telecommunication Engineering'),
(4, 1, 'Instrumentation Engineering'),
(5, 2, 'Computer Engineering'),
(6, 2, 'Information Technology'),
(7, 13, 'Mechanical Engineering'),
(8, 13, 'Automobile Engineering'),
(9, 13, 'Production Engineering'),
(10, 13, 'Marine Engineering'),
(11, 14, 'Civil Engineering'),
(12, 14, 'Construction Engineering'),
(13, 15, 'Bio-Medical Engineering'),
(14, 15, 'Bio-Technology'),
(15, 15, 'Bio-Informatics Engineering'),
(16, 16, 'Chemical Engineering'),
(17, 16, 'Textile Engineering'),
(18, 17, 'Engineering Mathematics'),
(19, 17, 'Engineering Physics'),
(20, 17, 'Engineering Chemistry'),
(21, 18, 'Printing and Packaging Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `Topics`
--

CREATE TABLE `Topics` (
  `TopicId` int(11) NOT NULL,
  `CourseId` int(11) NOT NULL,
  `TopicName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Topics`
--

INSERT INTO `Topics` (`TopicId`, `CourseId`, `TopicName`) VALUES
(1, 16, 'Topic 1'),
(2, 19, 'OOP Concepts'),
(3, 15, 'Chapter 1'),
(4, 4, 'Microprocessor'),
(7, 21, '3D Drawing'),
(8, 24, 'C1'),
(9, 19, 'Loops in Java'),
(11, 25, 'Laplace Inverse'),
(12, 26, 'Test bio topic'),
(13, 27, 'Transactions'),
(14, 28, 'Addressing Modes'),
(15, 29, 'Boolean Algebra'),
(16, 3, 'DC Motor');

-- --------------------------------------------------------

--
-- Table structure for table `TPS`
--

CREATE TABLE `TPS` (
  `TPSId` int(11) NOT NULL,
  `TopicId` int(11) NOT NULL,
  `ThinkQuestion` varchar(300) NOT NULL,
  `ThinkOutput` varchar(300) NOT NULL,
  `PairQuestion` varchar(300) NOT NULL,
  `PairOutput` varchar(300) NOT NULL,
  `ShareQuestion` varchar(300) NOT NULL,
  `ShareOutput` varchar(300) NOT NULL,
  `ThinkDuration` int(11) NOT NULL,
  `PairDuration` int(11) NOT NULL,
  `ShareDuration` int(11) NOT NULL,
  `User` int(11) NOT NULL,
  `ActivityRating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `TPSDisagrement`
--

CREATE TABLE `TPSDisagrement` (
  `ID` int(11) NOT NULL,
  `ScoreId` int(11) NOT NULL,
  `PostedBy` int(11) NOT NULL,
  `ReviewedBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `TPSScores`
--

CREATE TABLE `TPSScores` (
  `ScoreId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `ReviewerId` int(11) NOT NULL,
  `TPSId` int(11) NOT NULL,
  `Score1` int(2) NOT NULL,
  `Score2` int(2) NOT NULL,
  `Score3` int(2) NOT NULL,
  `Score4` int(2) NOT NULL,
  `Score5` int(2) NOT NULL,
  `Score6` int(2) NOT NULL,
  `TotalScore` int(2) NOT NULL,
  `Reason1` varchar(500) NOT NULL,
  `Reason2` varchar(500) NOT NULL,
  `Reason3` varchar(500) NOT NULL,
  `Reason4` varchar(500) NOT NULL,
  `Reason5` varchar(500) NOT NULL,
  `Reason6` varchar(500) NOT NULL,
  `Done` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `UpdatedTPSScores`
--

CREATE TABLE `UpdatedTPSScores` (
  `ScoreId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `ReviewerId` int(11) NOT NULL,
  `TPSId` int(11) NOT NULL,
  `Score1` int(2) NOT NULL,
  `Score2` int(2) NOT NULL,
  `Score3` int(2) NOT NULL,
  `Score4` int(2) NOT NULL,
  `Score5` int(2) NOT NULL,
  `Score6` int(2) NOT NULL,
  `TotalScore` int(2) NOT NULL,
  `Reason1` varchar(500) NOT NULL,
  `Reason2` varchar(500) NOT NULL,
  `Reason3` varchar(500) NOT NULL,
  `Reason4` varchar(500) NOT NULL,
  `Reason5` varchar(500) NOT NULL,
  `Reason6` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `UpdatePIScores`
--

CREATE TABLE `UpdatePIScores` (
  `ScoreId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `ReviewerId` int(11) NOT NULL,
  `PIId` int(11) NOT NULL,
  `Score1` int(11) NOT NULL,
  `Score2` int(11) NOT NULL,
  `TotalScore` int(11) NOT NULL,
  `Reason1` varchar(500) NOT NULL,
  `Reason2` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `UserDetails`
--

CREATE TABLE `UserDetails` (
  `UserId` int(11) NOT NULL,
  `UserFirstName` varchar(30) NOT NULL,
  `UserLastName` varchar(30) NOT NULL,
  `UserMiddleName` varchar(30) NOT NULL,
  `UserEmail` varchar(120) NOT NULL,
  `UserPassword` varchar(30) NOT NULL,
  `Gender` varchar(2) NOT NULL,
  `AffiliationID` int(11) NOT NULL,
  `CityAndState` int(5) NOT NULL,
  `TeachingExperience` int(11) NOT NULL,
  `UserRating` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `UserDomains`
--

CREATE TABLE `UserDomains` (
  `ID` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `TopicId` int(11) NOT NULL,
  `CourseId` int(11) NOT NULL,
  `ProgramId` int(11) NOT NULL,
  `DomainId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `UserDomains`
--

INSERT INTO `UserDomains` (`ID`, `UserId`, `TopicId`, `CourseId`, `ProgramId`, `DomainId`) VALUES
(9, 15, 2, 19, 6, 2),
(10, 16, 16, 3, 6, 2),
(11, 1, 2, 19, 6, 2),
(12, 2, 4, 4, 5, 2),
(13, 3, 12, 26, 13, 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Affiliations`
--
ALTER TABLE `Affiliations`
  ADD PRIMARY KEY (`AffiliationId`),
  ADD UNIQUE KEY `AffiliationName` (`AffiliationName`);

--
-- Indexes for table `Cities`
--
ALTER TABLE `Cities`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `Courses`
--
ALTER TABLE `Courses`
  ADD PRIMARY KEY (`CourseId`),
  ADD KEY `ProgramId` (`ProgramId`);

--
-- Indexes for table `Domains`
--
ALTER TABLE `Domains`
  ADD PRIMARY KEY (`DomainId`),
  ADD UNIQUE KEY `DomainName` (`DomainName`);

--
-- Indexes for table `E_CS`
--
ALTER TABLE `E_CS`
  ADD PRIMARY KEY (`id`),
  ADD KEY `UserId` (`UserId`);

--
-- Indexes for table `PendingRating`
--
ALTER TABLE `PendingRating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `PI`
--
ALTER TABLE `PI`
  ADD PRIMARY KEY (`PIId`),
  ADD KEY `PI_ibfk_1` (`TopicId`),
  ADD KEY `fk_User` (`User`);

--
-- Indexes for table `PIDisagrement`
--
ALTER TABLE `PIDisagrement`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `PIId` (`ScoreId`),
  ADD KEY `fk_pbpi` (`PostedBy`),
  ADD KEY `fk_rbpi` (`ReviewedBy`);

--
-- Indexes for table `PIScores`
--
ALTER TABLE `PIScores`
  ADD PRIMARY KEY (`ScoreId`),
  ADD KEY `UserId` (`UserId`),
  ADD KEY `ReviewerId` (`ReviewerId`),
  ADD KEY `PIId` (`PIId`);

--
-- Indexes for table `Programs`
--
ALTER TABLE `Programs`
  ADD PRIMARY KEY (`ProgramId`),
  ADD UNIQUE KEY `ProgramName` (`ProgramName`),
  ADD KEY `Programs_ibfk_1` (`DomainId`);

--
-- Indexes for table `Topics`
--
ALTER TABLE `Topics`
  ADD PRIMARY KEY (`TopicId`),
  ADD UNIQUE KEY `TopicName` (`TopicName`),
  ADD KEY `CourseId` (`CourseId`);

--
-- Indexes for table `TPS`
--
ALTER TABLE `TPS`
  ADD PRIMARY KEY (`TPSId`),
  ADD KEY `TPS_ibfk_1` (`TopicId`),
  ADD KEY `fk_userid` (`User`);

--
-- Indexes for table `TPSDisagrement`
--
ALTER TABLE `TPSDisagrement`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `TPSId` (`ScoreId`),
  ADD KEY `fk_pb` (`PostedBy`),
  ADD KEY `fk_rb` (`ReviewedBy`);

--
-- Indexes for table `TPSScores`
--
ALTER TABLE `TPSScores`
  ADD PRIMARY KEY (`ScoreId`),
  ADD KEY `UserId` (`UserId`),
  ADD KEY `ReviewerId` (`ReviewerId`),
  ADD KEY `TPSId` (`TPSId`);

--
-- Indexes for table `UpdatedTPSScores`
--
ALTER TABLE `UpdatedTPSScores`
  ADD PRIMARY KEY (`ScoreId`),
  ADD KEY `UserId` (`UserId`),
  ADD KEY `ReviewerId` (`ReviewerId`),
  ADD KEY `updatedtpsscores_ibfk_3` (`TPSId`);

--
-- Indexes for table `UpdatePIScores`
--
ALTER TABLE `UpdatePIScores`
  ADD PRIMARY KEY (`ScoreId`);

--
-- Indexes for table `UserDetails`
--
ALTER TABLE `UserDetails`
  ADD PRIMARY KEY (`UserId`),
  ADD UNIQUE KEY `UserEmail` (`UserEmail`),
  ADD KEY `AffiliationID` (`AffiliationID`),
  ADD KEY `UserDetails_ibfk_1` (`CityAndState`);

--
-- Indexes for table `UserDomains`
--
ALTER TABLE `UserDomains`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `userdomains_ibfk_1` (`UserId`),
  ADD KEY `userdomains_ibfk_2` (`TopicId`),
  ADD KEY `userdomains_ibfk_3` (`CourseId`),
  ADD KEY `userdomains_ibfk_4` (`ProgramId`),
  ADD KEY `userdomains_ibfk_5` (`DomainId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Affiliations`
--
ALTER TABLE `Affiliations`
  MODIFY `AffiliationId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `Courses`
--
ALTER TABLE `Courses`
  MODIFY `CourseId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `Domains`
--
ALTER TABLE `Domains`
  MODIFY `DomainId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `E_CS`
--
ALTER TABLE `E_CS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `PendingRating`
--
ALTER TABLE `PendingRating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `PI`
--
ALTER TABLE `PI`
  MODIFY `PIId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `PIDisagrement`
--
ALTER TABLE `PIDisagrement`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `PIScores`
--
ALTER TABLE `PIScores`
  MODIFY `ScoreId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Programs`
--
ALTER TABLE `Programs`
  MODIFY `ProgramId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `Topics`
--
ALTER TABLE `Topics`
  MODIFY `TopicId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `TPS`
--
ALTER TABLE `TPS`
  MODIFY `TPSId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `TPSDisagrement`
--
ALTER TABLE `TPSDisagrement`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `TPSScores`
--
ALTER TABLE `TPSScores`
  MODIFY `ScoreId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `UpdatedTPSScores`
--
ALTER TABLE `UpdatedTPSScores`
  MODIFY `ScoreId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `UpdatePIScores`
--
ALTER TABLE `UpdatePIScores`
  MODIFY `ScoreId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `UserDetails`
--
ALTER TABLE `UserDetails`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `UserDomains`
--
ALTER TABLE `UserDomains`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Courses`
--
ALTER TABLE `Courses`
  ADD CONSTRAINT `Courses_ibfk_1` FOREIGN KEY (`ProgramId`) REFERENCES `Programs` (`ProgramId`) ON DELETE CASCADE;

--
-- Constraints for table `E_CS`
--
ALTER TABLE `E_CS`
  ADD CONSTRAINT `e_cs_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `UserDetails` (`UserId`);

--
-- Constraints for table `PI`
--
ALTER TABLE `PI`
  ADD CONSTRAINT `PI_ibfk_1` FOREIGN KEY (`TopicId`) REFERENCES `Topics` (`TopicId`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_User` FOREIGN KEY (`User`) REFERENCES `UserDetails` (`UserId`);

--
-- Constraints for table `PIDisagrement`
--
ALTER TABLE `PIDisagrement`
  ADD CONSTRAINT `PIDisagrement_ibfk_1` FOREIGN KEY (`ScoreId`) REFERENCES `PIScores` (`ScoreId`),
  ADD CONSTRAINT `fk_pbpi` FOREIGN KEY (`PostedBy`) REFERENCES `UserDetails` (`UserId`),
  ADD CONSTRAINT `fk_rbpi` FOREIGN KEY (`ReviewedBy`) REFERENCES `UserDetails` (`UserId`);

--
-- Constraints for table `PIScores`
--
ALTER TABLE `PIScores`
  ADD CONSTRAINT `PIScores_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `UserDetails` (`UserId`) ON DELETE CASCADE,
  ADD CONSTRAINT `PIScores_ibfk_2` FOREIGN KEY (`ReviewerId`) REFERENCES `UserDetails` (`UserId`) ON DELETE CASCADE,
  ADD CONSTRAINT `PIScores_ibfk_3` FOREIGN KEY (`PIId`) REFERENCES `PI` (`PIId`) ON DELETE CASCADE;

--
-- Constraints for table `Programs`
--
ALTER TABLE `Programs`
  ADD CONSTRAINT `Programs_ibfk_1` FOREIGN KEY (`DomainId`) REFERENCES `Domains` (`DomainId`) ON DELETE CASCADE;

--
-- Constraints for table `Topics`
--
ALTER TABLE `Topics`
  ADD CONSTRAINT `Topics_ibfk_1` FOREIGN KEY (`CourseId`) REFERENCES `Courses` (`CourseId`) ON DELETE CASCADE;

--
-- Constraints for table `TPS`
--
ALTER TABLE `TPS`
  ADD CONSTRAINT `TPS_ibfk_1` FOREIGN KEY (`TopicId`) REFERENCES `Topics` (`TopicId`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_userid` FOREIGN KEY (`User`) REFERENCES `UserDetails` (`UserId`);

--
-- Constraints for table `TPSDisagrement`
--
ALTER TABLE `TPSDisagrement`
  ADD CONSTRAINT `fk_pb` FOREIGN KEY (`PostedBy`) REFERENCES `UserDetails` (`UserId`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_rb` FOREIGN KEY (`ReviewedBy`) REFERENCES `UserDetails` (`UserId`) ON DELETE CASCADE;

--
-- Constraints for table `TPSScores`
--
ALTER TABLE `TPSScores`
  ADD CONSTRAINT `TPSScores_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `UserDetails` (`UserId`) ON DELETE CASCADE,
  ADD CONSTRAINT `TPSScores_ibfk_2` FOREIGN KEY (`ReviewerId`) REFERENCES `UserDetails` (`UserId`) ON DELETE CASCADE,
  ADD CONSTRAINT `TPSScores_ibfk_3` FOREIGN KEY (`TPSId`) REFERENCES `TPS` (`TPSId`) ON DELETE CASCADE;

--
-- Constraints for table `UpdatedTPSScores`
--
ALTER TABLE `UpdatedTPSScores`
  ADD CONSTRAINT `updatedtpsscores_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `UserDetails` (`UserId`),
  ADD CONSTRAINT `updatedtpsscores_ibfk_2` FOREIGN KEY (`ReviewerId`) REFERENCES `UserDetails` (`UserId`),
  ADD CONSTRAINT `updatedtpsscores_ibfk_3` FOREIGN KEY (`TPSId`) REFERENCES `TPSScores` (`ScoreId`);

--
-- Constraints for table `UserDetails`
--
ALTER TABLE `UserDetails`
  ADD CONSTRAINT `UserDetails_ibfk_1` FOREIGN KEY (`CityAndState`) REFERENCES `Cities` (`city_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `UserDetails_ibfk_2` FOREIGN KEY (`AffiliationID`) REFERENCES `Affiliations` (`AffiliationId`);

--
-- Constraints for table `UserDomains`
--
ALTER TABLE `UserDomains`
  ADD CONSTRAINT `userdomains_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `UserDetails` (`UserId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `userdomains_ibfk_2` FOREIGN KEY (`TopicId`) REFERENCES `Topics` (`TopicId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `userdomains_ibfk_3` FOREIGN KEY (`CourseId`) REFERENCES `Courses` (`CourseId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `userdomains_ibfk_4` FOREIGN KEY (`ProgramId`) REFERENCES `Programs` (`ProgramId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `userdomains_ibfk_5` FOREIGN KEY (`DomainId`) REFERENCES `Domains` (`DomainId`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
