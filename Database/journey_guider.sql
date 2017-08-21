-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2017 at 05:25 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `journey_guider`
--

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `ID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Embed` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`ID`, `Name`, `Embed`) VALUES
(1, 'Australia', 'https://www.youtube.com/embed/vUF7ja9ehIs'),
(2, 'Malaysia', 'https://www.youtube.com/embed/uZ3tB1UO1hM'),
(3, 'Singapore', 'https://www.youtube.com/embed/P_q3BdrFsLI'),
(4, 'Paris', ''),
(5, 'Italy', ''),
(6, 'Switzerland', ''),
(7, 'Japan', ''),
(8, 'Brazil', ''),
(9, 'Bangladesh', '');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `ID` int(11) NOT NULL,
  `C_ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Location` varchar(70) NOT NULL,
  `Description` text NOT NULL,
  `Image` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`ID`, `C_ID`, `Name`, `Location`, `Description`, `Image`) VALUES
(1, 9, 'Six Seasons Hotel', 'Dhaka', 'First time Dhaka only hotel room, hotel coffeehouse for breakfast and to work. Cannot comment much.', 'download.jpg'),
(2, 9, 'Lakeshore Banani', 'Dhaka', 'The staff at Lakeshore Banani is nothing short of excellent. Always friendly, always willing to offer assistance. Very well located, close to Gulshan 1 and 2. Very impressed and will absolutely return. Thank you for a great first trip to Dhaka.', 'LBPic.jpg'),
(3, 9, 'Westin Dhaka', 'Dhaka', 'only think is missing no children activities. it would be good if you add children activities', 'WDPic.jpg'),
(4, 9, 'Radisson Blue Water Garden', 'Dhaka', 'Excellent service during the stay from Jan 10 to Jan 12, 2017', 'RDPic.jpg'),
(5, 9, 'Platinum Grand', 'Chittagong', 'Good enough for business. Airport limousine service is excellent.', 'PGPic.jpg'),
(6, 4, 'Shangri-La', '10 Avenue d\'Iéna, 75116 Paris, France', 'First time Paris only hotel room, hotel coffeehouse for breakfast and to work. Cannot comment much.', 'ShangriLaParisHotel.jpg'),
(7, 4, 'Hotel Le Bristol ', '112 Rue du Faubourg Saint-Honoré, 75008 Paris', 'The staff at Lakeshore Banani is nothing short of excellent. Always friendly, always willing to offer assistance. Very well located, close to Gulshan 1 and 2. Very impressed and will absolutely return. Thank you for a great first trip to Dhaka', 'HotelLeBristol.jpg'),
(8, 4, 'Le Royal Monceau-Raffles', '37 Avenue Hoche, 75008 Paris', 'only think is missing no children activities. it would be good if you add children activities', 'Le_Royal_Monceau_Raffles.jpg'),
(9, 4, 'Saint James Paris ', '43 Avenue Bugeaud, 75116 Paris', 'Excellent service during the stay from Jan 10 to Jan 12, 2017', 'SaintJamesParis.jpg'),
(10, 4, 'Le Meurice', '228 Rue de Rivoli, 75001 Paris', 'Good enough for business. Airport limousine service is excellent.', 'Le_Meurice.jpg'),
(11, 3, 'Ritz-Carlton Millenia Singapore', '7 Raffles Ave, Singapore', 'First time Dhaka only hotel room, hotel coffeehouse for breakfast and to work. Cannot comment much.', 'the-ritz-carlton-millenia.jpg'),
(12, 3, 'Raffles Hotel', '1 Beach Rd, Singapore', 'The staff at Lakeshore Banani is nothing short of excellent. Always friendly, always willing to offer assistance. Very well located, close to Gulshan 1 and 2. Very impressed and will absolutely return. Thank you for a great first trip to Dhaka.', 'raffles_hotel.jpg'),
(13, 3, 'Four Seasons ', '190 Orchard Blvd, Singapore', 'only think is missing no children activities. it would be good if you add children activities', 'four_seasons_sing.jpg'),
(14, 3, 'The Fullerton Hotel Singapore', '1 Fullerton Square, Singapore', 'Excellent service during the stay from Jan 10 to Jan 12, 2017', 'Fullerton_hotel.jpg'),
(15, 3, 'Mandarin Oriental', '5 Raffles Avenue, Singapore', 'Good enough for business. Airport limousine service is excellent.', 'mandarin_oriental.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `ID` int(11) NOT NULL,
  `C_ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `Image` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`ID`, `C_ID`, `Name`, `Description`, `Image`) VALUES
(1, 2, 'Perhentian Islands', 'Sea lovers planning to visit Malaysia should put the Perhentian Islands on the top of their list of places to see. This is a small archipelago with two main islands; Besar, the bigger, and Kecil, the smaller. Both boast splendid beaches, white sand, an amazingly blue, shallow sea and the shadows of tall palm trees. Apart from tourists, the islands are mostly uninhabited, making them a perfect place to disconnect and take a break from modern life. The Perhentian Islands are especially recommended to those who enjoy the sea not just for a swim, but also for water activities such as canoeing (both islands can be circumnavigated in a day), scuba diving and snorkeling. The islands are fringed by a coral reef, and the underwater life is rich with sea turtles and many species of tropical fish.', 'PHisland.jpg'),
(2, 2, 'Langkawi', 'Langkawi is the main island of a group of 99, which form the archipelago with the same name. Often overlooked, especially by Western tourists, in favor of the better-known Thai islands and Singapore, Langkawi offers breathtaking scenery with its beautiful beaches, fine sand, crystal-clear water and coastal mangrove swamps. The inland areas are no less striking; the tropical jungles are thick with luxuriant vegetation and rich in fauna (the island’s name itself indicates an eagle with characteristic reddish feathers), and will impress nature lovers looking for a pristine, largely untouched rainforest.\r\n\r\n', 'langkawi.jpg'),
(3, 2, 'Cameron Highlands', 'Sitting 1500 meters above sea level, the Cameron Highlands is an extensive hill station named after William Cameron, the British surveyor who stumbled upon the soft, curvy sides of these picturesque green hills in 1885. The area hosts the largest tea plantations in Malaysia, which give it the characteristic, fuzzy appearance that attracts so many tourists here. Many also visit the hills and trek down the trails. But the Cameron Highlands’ beauty and popularity are also due to its climate. With temperatures rarely dropping below 10°C or rising above 21°C, this is the coolest region of Malaysia, and a wonderful break from the tropical Malaysian climate.', 'CMlands.jpg'),
(4, 1, 'Fraser Island', 'World Heritage-listed Fraser Island, between Bundaberg and Brisbane off Australia\'s east coast, is the largest sand island in the world and one of Australia\'s most unique four-wheel-drive adventures. Along windswept Seventy Five Mile Beach, visitors can see the rusted hulls of shipwrecks, the colored sandstone cliffs of The Cathedrals, and the bubbling fish-filled rock pools called Champagne Pools.Venturing inland, highlights include crystal clear freshwater creeks and lakes, some fed by springs, others perched amid towering sand dunes, and ancient rainforests filled with an amazing diversity of plants and animals. Sharks, dolphins, and whales prowl the waters and the island\'s fauna includes wild horses, dingoes, bats, sugar gliders, and more than 300 species of birds. ', 'australia-queensland-fraser-island-3.jpg'),
(5, 1, 'Daintree National Park', 'A Wet Tropics World Heritage Area, Daintree National Park in Far North Queensland is among the most ancient ecosystems on earth. The area belongs to the Eastern Kuku Yalanji Aboriginal people, and many of its natural features hold great spiritual significance. The park encompasses two main sections: Mossman Gorge where crystal clear waters gush over granite boulders, and Cape Tribulation where rainforest meets reef along the white sandy beaches of the Coral Sea. The stunning stretch of coast is one of the few places in the world where two of the planet\'s richest ecosystems converge. The park\'s astounding biodiversity includes more than 18,000 plant species and a vast array of animal species including the cassowary, crocodile, giant blue Ulysses butterfly, and the secretive Bennett\'s tree kangaroo. The resort town of Port Douglas, just south of the park, is a great base to arrange wilderness safaris into the park.', 'queensland-dt-nationalpark.jpg'),
(6, 1, 'Kakadu National Park', 'Kakadu National Park, in the Top End or the Northern Territory, is a World Heritage Site and one of the planet\'s great wilderness areas. Covering more than 19,840 sq km, Kakadu is the largest national park in Australia and the second largest in the world. Within its borders lie monsoon rainforests, mangrove swamps, rivers, gorges, ancient rock paintings, wetlands, and waterfalls as well as an astounding diversity of wildlife. In addition to the many mammals and reptiles, more than 300 different species of birds make their home here, and visitors may spot saltwater crocodiles prowling the wetlands. Visitors can view the park\'s diverse ecosystems by car, air, on foot via the vast network of hiking trails, or by boat on the rivers or floodplains. During the wet season (Nov-April), many roads and attractions close due to heavy flooding.', 'kakadu-national-park-wallpaper-7.jpg'),
(7, 3, 'Marina Bay Sands', 'The opulent Marina Bay Sands resort complex includes a hotel, high-end luxury brands, a mall with a canal running through it, the ArtScience Museum, and the Marina Bay Sands Skypark - a vantage point for taking in the entire city. The Skypark\'s viewing deck and infinity pool are found in the ship (yes, ship) that tops the hotel. Only hotel guests are allowed to use the infinity pool but anyone can visit the observation deck. From the skypark, you can see the innovative double helix bridge, the port, the Gardens by the Bay, and the impressive skyline. While up there on top of the city, guests can grab a snack or a coffee at the rooftop restaurant or pick up some keepsakes from the souvenir stand. You can purchase a photo of yourself green-screened in front of the massive hotel as it\'s all lit up at night, but the cost is steep: 50 Singapore dollars. Better to ask a fellow tourist to snap a photo of you. The luxury and elegance of the Marina Bay Sands exemplify Singapore\'s taste, and help designate a major international city in Southeast Asia.', 'marina_bay_singapore.jpg'),
(8, 3, 'Gardens by the Bay', 'Once you\'ve glimpsed this beautifully designed green space (from the top of the Marina Bay Sands, perhaps) you won\'t be able to stay away. Wander through the Bay East Garden, perfect for enjoying the vibrant plant life and escaping the city bustle for a moment. You won\'t want to miss Supertree Grove, where you\'ll find a cluster of the iconic, futuristic structures designed to perform environmentally sustainable functions. Then, head to the Cloud Forest Dome to see the world\'s tallest indoor waterfall and learn a bit about biodiversity. ', 'gardens-by-the-bay.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `E_ID` int(30) NOT NULL,
  `H_ID` int(11) NOT NULL,
  `Rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `Pass` longtext NOT NULL,
  `Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `email`, `Pass`, `Name`) VALUES
(4, 'krsultan069@gmail.com', '1234', 'arf111'),
(5, 'arefeen.sultan@facebook.com', '3456', 'aref111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`ID`,`C_ID`),
  ADD KEY `C_ID` (`C_ID`),
  ADD KEY `C_ID_2` (`C_ID`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`ID`,`C_ID`),
  ADD KEY `C_ID` (`C_ID`),
  ADD KEY `C_ID_2` (`C_ID`);

--
-- Indexes for table `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`E_ID`,`H_ID`),
  ADD KEY `E_ID` (`E_ID`),
  ADD KEY `E_ID_2` (`E_ID`),
  ADD KEY `H_ID` (`H_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `hotels`
--
ALTER TABLE `hotels`
  ADD CONSTRAINT `hotels_ibfk_1` FOREIGN KEY (`C_ID`) REFERENCES `country` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `places`
--
ALTER TABLE `places`
  ADD CONSTRAINT `FK_C_ID` FOREIGN KEY (`C_ID`) REFERENCES `country` (`ID`);

--
-- Constraints for table `rates`
--
ALTER TABLE `rates`
  ADD CONSTRAINT `fk_e_id_2` FOREIGN KEY (`E_ID`) REFERENCES `user` (`ID`),
  ADD CONSTRAINT `rates_ibfk_1` FOREIGN KEY (`H_ID`) REFERENCES `hotels` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
