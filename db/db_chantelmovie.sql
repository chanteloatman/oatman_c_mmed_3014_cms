-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 08, 2018 at 08:13 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_chantelmovie`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_genres`
--

CREATE TABLE `tbl_genres` (
  `genres_id` tinyint(3) UNSIGNED NOT NULL,
  `genres_type` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_genres`
--

INSERT INTO `tbl_genres` (`genres_id`, `genres_type`) VALUES
(1, 'Action'),
(2, 'Comedy'),
(3, 'Romance'),
(4, 'Musical'),
(5, 'Kids');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_movies`
--

CREATE TABLE `tbl_movies` (
  `movies_id` mediumint(8) UNSIGNED NOT NULL,
  `movies_cover` varchar(100) NOT NULL,
  `movies_title` varchar(80) NOT NULL,
  `movies_year` year(4) NOT NULL,
  `movies_runtime` varchar(30) NOT NULL,
  `movies_storyline` tinytext NOT NULL,
  `movies_trailer` varchar(60) NOT NULL,
  `movies_release` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_movies`
--

INSERT INTO `tbl_movies` (`movies_id`, `movies_cover`, `movies_title`, `movies_year`, `movies_runtime`, `movies_storyline`, `movies_trailer`, `movies_release`) VALUES
(1, 'cover-warm-bodies.jpg', 'Warm Bodies', 2013, '1h 38min', 'Modern Day love story of zombie meets human, only to find that our zombie friend \"R\" is more human than expected.', 'trailer-warm-bodies.mp4', '2013-02-13'),
(2, 'cover-jumanji-jungle.jpg', 'Jumanji - Welcome to the Jungle', 2017, '1h 59min', 'When 4 school kids find themselves in detention, they discover a mysterious video game that becomes more realistic then they\'d like.', 'trailer-jumanji-jungle.mp4', '2017-12-20'),
(3, 'cover-divergent.jpg', 'Divergent', 2014, '2h 19min', 'In a place divided by 5 factions, there are some that don\'t conform to society, divergents, who will change everything the people of the factions thought they were.', 'trailer-divergent.mp4', '2014-03-21'),
(4, 'cover-maze-runner.jpg', 'The Maze Runner', 2014, '1h 53m', 'When a sickness takes over the world, desperation calls to find a cure. Follow the children who are forced to face the tests, of the unknown mazes of finding a cure, on this adventurous and dangerous quest.  ', 'trailer-maze-runner.mp4', '2014-09-11'),
(5, 'cover-sherlock-holmes.jpg', 'Sherlock Holmes', 2009, '2h 10min', 'Mystery, action, adventure, and a way of thinking. Follow Sherlock Holmes as he takes on the world from an intriguing perspective.', 'trailer-sherlock-holmes.mp4', '2009-12-25'),
(6, 'cover-sister-act.jpg', 'Sister Act', 1992, '1h 30m', 'When a showgirl witnesses a crime, the only place she can hide is where no one will ever find her, posing as a nun in a convent.', 'trailer-sister-act.mp4', '1992-05-29'),
(7, 'cover-the-devil-wears-prada.jpg', 'The Devil Wears Prada', 2006, '1h 50min', 'A smart but sensible new graduate lands a job as an assistant to Miranda Priestly, the demanding editor-in-chief of a high fashion magazine.', 'trailer-the-devil-wears-prada.mp4', '2006-06-29'),
(8, 'cover-hello-dolly.jpg', 'Hello, Dolly!', 1969, '2h 28min', 'Follow Dolly Levi on her matchmaking journey in this comedic and romantic musical.', 'trailer-hello-dolly.mp4', '1969-12-16'),
(9, 'cover-tangled.jpg', 'Tangled', 2010, '1h 40m', 'Follow Rapunzel, a curious girl who\'s never left her tower, as bandit Flynn Rider takes her to her dream to see the flying lanterns up close. She discovers that the lanterns relate to who she is more than she ever thought.', 'trailer-tangled.mp4', '2010-11-24'),
(10, 'cover-bee-movie.jpg', 'Bee Movie', 2007, '1h 35m', 'Follow Barry the bee as he discovers where honey really is ending up.', 'trailer-bee-movie.mp4', '2007-11-02'),
(11, 'cover-veggietales-beans.jpg', 'Veggietales - Lord of the Beans', 2005, '51min', 'You\'ve heard of Lord of the Rings, but here comes Lord of the Beans. Follow Toto and his fellow journey companions, as they discover what the true meaning of what to do with a gift is.', 'trailer-veggietales-lord-of-the-beans.mp4', '2005-10-01'),
(12, 'cover-time-travellers-wife.jpg', 'The Time Traveller\'s Wife', 2009, '1h 48min', 'Henry involuntary travel\'s through time, appearing in various moments in the life of his true love.', 'trailer-time-travellers-wife.mp4', '2009-08-14'),
(13, 'cover-the-wedding-planner.jpg', 'The Wedding Planner', 2001, '1h 43min', 'One of the most successful wedding planners finds herself breaking the most important rule: don\'t fall in love with the groom.', 'trailer-the-wedding-planner.mp4', '2001-01-26'),
(14, 'cover-moana.jpg', 'Moana', 2016, '1h 47min', 'In Ancient Polynesia, when a terrible curse incurred by the Demigod Maui reaches Moana\'s island, she answers the Ocean\'s call to seek out the Demigod to set things right.', 'trailer-moana.mp4', '2016-11-23'),
(15, 'cover-high-strung.jpg', 'High Strung', 2016, '1h 37min', 'When a hip hop violinist busking in the New York subway encounters a classical dancer on scholarship at the Manhattan Conservatory of the Arts, sparks fly.', 'trailer-high-strung.mp4', '2016-04-08'),
(16, 'cover-scooby-doo.jpg', 'Scooby Doo', 2002, '1h 29min', 'Something spooky is coming to a mysterious amusement park, and it\'s up to Scooby Doo and his friends to save the world.', 'trailer-scooby-doo.mp4', '2002-06-14'),
(17, 'cover-spy-kids.jpg', 'Spy Kids', 2001, '1h 30min', 'When two kids find out that they\'re parents are spys, they take on the family business themselves when their parents get kidnapped. ', 'trailer-spy-kids.mp4', '2001-03-18'),
(18, 'cover-enchanted.jpg', 'Enchanted', 2007, '1h 49min', 'Find out what happens when fairytales and the real world collide, in this family-fun musical.', 'trailer-enchanted.mp4', '2007-11-21'),
(19, 'cover-50-first-dates.jpg', '50 First Dates', 2004, '1h 39min', 'Henry Roth is a man afraid of commitment up until he meets the beautiful Lucy. They hit it off and Henry think he\'s finally found the girl of his dreams, until he discovers she has short-term memory loss and forgets him the very next day.', 'trailer-50-first-dates.mp4', '2018-02-14'),
(20, 'cover-sydney-white.jpg', 'Sydney White', 2007, '1h 48min', 'A modern retelling of Snow White set against students in their freshman year of college in the greek system.', 'trailer-sydney-white.mp4', '2007-09-21'),
(21, 'cover-the-5th-wave.jpg', 'The 5th Wave', 2016, '1h 57min', 'Four waves of increasingly deadly alien attacks have left most of Earth decimated. Cassie is on the run, desperately trying to save her younger brother.', 'trailer-the-5th-wave.mp4', '2016-01-22'),
(22, 'cover-step-up-revolution.jpg', 'Step Up Revolution', 2012, '1h 46min', 'Emily arrives in Miami with aspirations to become a professional dancer. She sparks with Sean, the leader of a dance crew whose neighborhood is threatened by Emily\'s father\'s development plans.', 'trailer-step-up-revolution.mp4', '2012-07-26'),
(23, 'cover-bewitched.jpg', 'Bewitched', 2005, '1h 56m', 'Thinking he can overshadow an unknown actress in the part, an egocentric actor unknowingly gets a witch cast in an upcoming television remake of the classic 1964 sitcom Bewitched.', 'trailer-bewitched.mp4', '2005-06-24'),
(24, 'cover-barbra.jpg', 'Barbra: The Music... The Mem\'ries... The Magic!', 2017, '1h 50min', 'Barbra Streisand\'s film concert event finds the legend joined by a roster of special guests, as she takes audiences on a journey of her life\'s work, like a stroll down mem\'ry lane with a good friend.', 'trailer-barbra.mp4', '2017-11-22'),
(25, 'cover-lilo-and-stitch.jpg', 'Lilo and Stitch', 2002, '1h 25min', 'A Hawaiian girl adopts an unusual pet who is actually a notorious extra-terrestrial fugitive.', 'trailer-lilo-and-stitch.mp4', '2002-06-21'),
(26, 'cover-the-proposal.jpg', 'The Proposal', 2009, '1h 48min', 'A pushy boss forces her young assistant to marry her in order to keep her visa status in the U.S. and avoid deportation to Canada.', 'trailer-the-proposal.mp4', '2009-06-19'),
(27, 'cover-test.jpg', 'Test Movie', 2000, '1h 43min', 'Test desc.', 'trailer-test.mp4', '2000-05-04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mov_genre`
--

CREATE TABLE `tbl_mov_genre` (
  `mov_genre_id` mediumint(8) UNSIGNED NOT NULL,
  `movies_id` mediumint(9) NOT NULL,
  `genres_id` mediumint(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mov_genre`
--

INSERT INTO `tbl_mov_genre` (`mov_genre_id`, `movies_id`, `genres_id`) VALUES
(1, 1, 3),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 2),
(7, 7, 2),
(8, 8, 4),
(9, 9, 5),
(10, 10, 5),
(11, 11, 5),
(12, 12, 3),
(13, 13, 3),
(14, 14, 5),
(15, 15, 4),
(16, 16, 1),
(17, 17, 1),
(18, 18, 4),
(19, 19, 3),
(20, 20, 2),
(21, 21, 1),
(22, 22, 4),
(23, 23, 2),
(24, 24, 4),
(25, 25, 5),
(26, 26, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` smallint(8) UNSIGNED NOT NULL,
  `user_fname` varchar(250) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_pass` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_ip` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_fname`, `user_name`, `user_pass`, `user_email`, `user_date`, `user_ip`) VALUES
(1, 'chantel', 'chanteloatman', 'projectCMS', 'c_oatman@fanshaweonline.ca', '2018-04-06 18:20:47', '127.0.0.1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_genres`
--
ALTER TABLE `tbl_genres`
  ADD PRIMARY KEY (`genres_id`);

--
-- Indexes for table `tbl_movies`
--
ALTER TABLE `tbl_movies`
  ADD PRIMARY KEY (`movies_id`);

--
-- Indexes for table `tbl_mov_genre`
--
ALTER TABLE `tbl_mov_genre`
  ADD PRIMARY KEY (`mov_genre_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_genres`
--
ALTER TABLE `tbl_genres`
  MODIFY `genres_id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_movies`
--
ALTER TABLE `tbl_movies`
  MODIFY `movies_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_mov_genre`
--
ALTER TABLE `tbl_mov_genre`
  MODIFY `mov_genre_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` smallint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
