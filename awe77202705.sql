-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2019 at 01:16 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `awe77202705`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_12_25_083753_create_news_table', 1),
(4, '2018_12_25_083913_add_user_id_to_news', 1),
(5, '2018_12_25_084021_add_news_image_to_news', 1),
(6, '2018_12_29_063944_add_social_account', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `source` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `news_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `body`, `date`, `source`, `status`, `category`, `created_at`, `updated_at`, `user_id`, `news_image`) VALUES
(1, 'US to expel every last Iranian boot from Syria - Pompeo', 'The US will work with allies to \"expel every last Iranian boot\" from Syria, Secretary of State Mike Pompeo says.\r\n\r\nMr Pompeo warned there would be no US reconstruction aid for areas controlled by Syrian President Bashar al-Assad until Iran and its proxies had left.\r\n\r\nHe also criticised ex-President Barack Obama\'s Middle East policy, saying he had made \"dire misjudgements\".\r\n\r\nMr Pompeo was speaking in Cairo three weeks after President Donald Trump said US troops were pulling out of Syria.\r\n\r\nThe announcement had shocked US allies and sparked strong criticism in Washington.\r\n\r\n    War-weary Syrians in Manbij wait to learn fate\r\n    Trump rewrites US-Syria policy\r\n    After the caliphate: Has IS been defeated?\r\n\r\nMr Pompeo, who has been seeking to reassure allies following Mr Trump\'s surprise announcement, said: \"America will not retreat until the terror fight is over. We will labour tirelessly alongside you to defeat Isis [the Islamic State group], al-Qaeda and other jihadists that threaten our security and yours.\"\r\n\r\nHe added that the US was a \"force for good\" in the Middle East, adding: \"Where America retreats, chaos follows.\"', '2019-01-10', 'bbc.com', 'active', 'Nepal', '2019-01-10 10:57:37', '2019-01-10 10:57:37', 1, 'abcnews_1547138556.jpg'),
(2, 'How Venezuela\'s crisis developed and drove out millions of people', 'Venezuela\'s economy is in freefall. Hyperinflation, power cuts and shortages of food and medicine are driving millions of Venezuelans out of the country.\r\n\r\nAnd yet the man many blame for the dire state of the nation, Nicolás Maduro, is about to be sworn in as president for another six years.\r\n\r\nSo what is going on with Venezuela\'s economy, how did it get to this point, and what have Mr Maduro and his government done to halt the country\'s decline?', '2019-01-09', 'bbc.com', 'active', 'Nepal', '2019-01-10 11:00:14', '2019-01-10 11:00:14', 1, 'venz_1547138714.jpg'),
(3, 'Signals from space: Five theories on what they are', 'Mysterious signals have been picked up from distant galaxies.\r\n\r\nWhen fast radio bursts or FRBs, as they are called, reach Earth\'s telescopes they shine brightly for a few milliseconds, then disappear.\r\n\r\nAstronomers have detected dozens over the past decade - and have just announced they\'ve found more of them, including a rare repeating signal.\r\n\r\nWe don\'t know exactly what they are or where they\'re from, but here are five suspects:\r\nA rapidly spinning neutron star\r\n\r\nWhen stars explode and die they can end up as rapidly spinning neutron stars. Astronomers think those found in a region with a high magnetic field might produce the strange signals.', '2019-01-10', 'bbc.com', 'active', 'Education', '2019-01-10 11:01:15', '2019-01-10 11:01:15', 1, 'neu_1547138775.jpg'),
(4, 'Aaron Ramsey: Juventus leading race to sign Arsenal and Wales midfielder', 'Juventus are leading the race to sign Arsenal midfielder Aaron Ramsey when his contract expires at the end of the season.\r\n\r\nThe 28-year-old\'s current preference is to join the Italian champions but, contrary to some reports, he has yet to make a final decision and will continue to consider offers from a number of Europe\'s leading clubs.\r\n\r\nIt is understood his boyhood dream was to play for Barcelona but despite preliminary talks that option will not be pursued.\r\n\r\n    \'Arsenal cannot afford permanent deals\' - Emery\'s transfer frustration\r\n\r\nAn offer from Paris St-Germain is thought to carry great appeal, while there is also interest from Real Madrid, Bayern Munich and Inter Milan.\r\n\r\nMadrid forward Gareth Bale is understood to have encouraged his Wales team-mate to link up with him in Spain.\r\n\r\nThere have been enquiries from English sides and if Ramsey was to remain in the Premier League he would favour a move to Liverpool.\r\n\r\nHowever, although there is still a possibility the situation might change, it is almost certain the former Cardiff player will go abroad.\r\n\r\nOnce Ramsey\'s choice is made, he is expected to sign a pre-contract agreement and undergo a medical this month.\r\n\r\nHe will complete the campaign with Arsenal prior to leaving as a free agent in the summer.', '2019-01-10', 'cnn.com', 'active', 'Sports', '2019-01-10 11:02:26', '2019-01-10 11:02:26', 1, 'ju_1547138846.jpg'),
(5, 'Serena Williams: my big sister, mentor & boss - hitting partner Jarmere Jenkins', 'Coverage: Daily live commentaries on the BBC Sport website, listen to Tennis Breakfast daily from 07:00 GMT on BBC Radio 5 live Sports Extra. Watch highlights on BBC TV and online from 19 January\r\nFull coverage details\r\n\r\nJarmere Jenkins\' phone lights up. It\'s an incoming call from his older brother Jermaine.\r\n\r\n\"Hey man, how would you like to work with Serena Williams?\"\r\n\r\nJarmere - a former professional tennis player turned investment sales consultant, out of work and plotting his next career move - thought it was a joke.\r\n\r\nFast forward 14 months and he is an integral part of Team Serena, the small network of colleagues and confidants helping one of the world\'s all-time greatest players compete for Grand Slam titles again - little over a year after she \"almost died\" giving birth.\r\n\r\n\"On paper the specific role is hitting partner on court. But the gig is much more than that,\" he says.\r\n\r\nEmployee, hitting partner, gym buddy, \'Mafia\' opponent, friend - to name but a few.\r\n\r\nSo, how has Jenkins ended up here?\r\n\r\nIt is a tale of talent, unfulfilled promised, hard work, a devastating natural disaster, circumstance and fortune all rolled into one.\r\n\r\n    Australian Open - BBC TV, radio and online coverage times\r\n\r\n\'I missed more balls than her - and she had not hit for nine months\'\r\n\r\nStanding on the baseline, Jenkins was feeling nervous. Across the net was someone he considers to be a \"superhero\".', '2019-01-09', 'cnn.com', 'active', 'Sports', '2019-01-10 11:03:15', '2019-01-10 11:03:15', 1, 'sis_1547138895.jpg'),
(6, 'Ctudy in Canada', 'WORK AND EARN A LIVING WHILE YOU STUDY IN CANADA\r\n\r\nFREE EDUCATION SEMINAR: STUDY AT THOMPSON RIVERS UNIVERSITY, BRITISH COLUMBIA, CANADA (DIRECT UNDERGRADUATE & MASTERS ADMISSION)\r\n\r\n           \r\n\r\nIf you are a fresh high school graduate between ages 16 – 21!\r\n\r\nIf you have completed your 1st degree with a CGPA of 1.5 and above!\r\n\r\nIf you are looking for a chance to work while you study!\r\n\r\nIf you are looking for a chance to increase your chances of obtaining a Canadian study permit!\r\n\r\nLook no further!\r\n\r\nTake advantage of the opportunity to become a permanent resident and work in Canada by studying at Thompson Rivers University, British Columbia, Canada.\r\n\r\nCome and meet with ZiPing Feng, Director, International Marketing, Thompson Rivers University, Canada\r\n\r\nVisa processing services provided by a team of Certified Canadian Immigration Consultants\r\n\r\n      Admissions ongoing for 2019 start dates', '2019-01-07', 'maple education', 'active', 'Education', '2019-01-10 11:06:43', '2019-01-10 11:06:43', 1, 'noimage.jpg'),
(7, 'व्यवसायी फिदा हुसेनको हत्याका चार अभियुक्त सार्वजनिक', 'सुनसरीका व्यवसायी फिदा हुसेनको हत्यामा संलग्न चार जनालाई प्रहरीले पक्राउ गरेको छ । दुहवी नगरपालिका ९ छाताबेलीका ब्यवसायी हुसेनको गोली हानी हत्या गर्ने समूहका चार जना अभियुक्तलाई प्रहरीले घटनाको ५१ औं दिनपछि पक्राउ गरी आज सार्वजनिक गरेको हो । व्यक्तिगत रिसइवी र आर्थिक लेनदेनमा भएको असमझदारीको कारण हुसेनको हत्या भएको प्रहरीले जनाएको छ । हत्याका मुख्य योजनाकार छाताबेलीका मोहमद शाकीम हुसेन, दुहवी १२ सीतापुरका विशम्बर यादव, छाताबेलीकै मोहमद जाबीर हुसैनलाई क्षेत्रीय अनुसन्धान ब्यूरो र सुनसरी प्रहरीको सक्रियतामा पक्राउ गगरी सार्वजनिक गरिएको हो । अर्का अभियुक्त छाताबेलीकै जफर मियालाई बाँके प्रहरीले पक्राउ गरी सुनसरी प्रहरीलाई बुझाउने जनाएको छ । प्रहरीले उनीहरुले प्रयोग गरेको कटुवा पेस्तोल खोका सहितको एक थान, गोली २ राउण्ड र चक्कु एकथान बरामद गरेको छ । घटनापछि दुहवी १२ मा रहेको लक्ष्मीनारायणको मन्दिर परिसरमा रहेको नरिवलको रुखमुनि हतियार खनेर लुकाएको अवस्थामा अभियुक्तको बयानका आधारमा प्रहरीले सो हतियार बरामद गरेको सुनसरीका एसपी राजन अधिकारीले जानकारी दिनुभयो । प्रभात भ्रमणका बेला व्यवसायी हुसेनलाई मंसिर ५ गते बिहान सात बजे जयबाबा इँटा भट्टा जाने सुनसरी मोरङ सिंचाइ आयोजनाको शाखा नहरमा गोली हानिएको थियो । मोटरसाईकलमा आएका एक ब्यक्तिले हुसेनमाथि गोली प्रहार गरी भागेका थिए । उनको घटनास्थलमै मृत्यु भएको थियो । हत्याका अभियुक्त पक्राउ गर्नुपर्ने र मृतकलाई शहिद घोषणा गर्नु पर्ने माग राखि उनको शव नै सडकमा राखेर दुहवीबासीले आन्दोलन गरेका थिए ।', '2019-01-09', 'ekantipur', 'disactive', 'Nepal', '2019-01-10 11:40:53', '2019-01-11 10:38:42', 2, 'nep_1547141152.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `social_accounts`
--

CREATE TABLE `social_accounts` (
  `social_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `provider`, `provider_id`, `name`, `email`, `email_verified_at`, `password`, `admin`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'admin', 'admin@gmail.com', '2019-01-10 10:55:45', '$2y$10$/85AabNCNidcyVRkyI166O5FU6X6SZGhj1kfoVG3xYKWnDypLIGs.', 1, 'active', 'aiffCj3rRNR0jX8tGiF3qDKySfnbbbKYNVXjIOnCCfDnGRa8U2KT5UH8VUf3', '2019-01-10 10:55:17', '2019-01-10 10:55:45'),
(3, 'google', '118383670502848940111', 'Smile Kisan', 'smilekishan.sk@gmail.com', '2019-01-10 10:55:45', NULL, 0, 'active', 'yIVrItuiT1Nk76TKR4IsJjtdJvBBLelEwRUjtipowFtbf5W6nexKCqGwGg54', '2019-01-12 06:29:41', '2019-01-12 06:29:41'),
(4, NULL, NULL, 'user', 'user@gmail.com', '2019-01-10 10:55:45', '$2y$10$fX1bFeHLwk3xKI6goh.mYe5JOzUJGYv2Y0YpGt5Rd3fQxTBlqSh1q', 0, 'active', 'Ftx2snIOXHdpFy9dl9hWCOCV3W0vnibzlSUSVOwmNH6xeq791sefRicCuexf', '2019-01-12 06:30:40', '2019-01-12 06:30:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `social_accounts`
--
ALTER TABLE `social_accounts`
  ADD PRIMARY KEY (`social_id`),
  ADD UNIQUE KEY `social_accounts_email_unique` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `social_accounts`
--
ALTER TABLE `social_accounts`
  MODIFY `social_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
