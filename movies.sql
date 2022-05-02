-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2022 at 11:24 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

CREATE TABLE `favourites` (
  `favourite_id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `movie_id` int(10) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movie_id` int(11) NOT NULL,
  `title` varchar(250) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `release_date` date NOT NULL,
  `image` varchar(250) NOT NULL,
  `overview` longtext NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `title`, `release_date`, `image`, `overview`, `time_stamp`) VALUES
(1, 'The Batman', '2022-03-01', '/tRS6jvPM9qPrrnx2KRp3ew96Yot.jpg', 'In his second year of fighting crime, Batman uncovers corruption in Gotham City that connects to his own family while facing a serial killer known as the Riddler.', '2022-05-02 13:39:01'),
(2, 'Uncharted', '2022-02-10', '/aEGiJJP91HsKVTEPy1HhmN0wRLm.jpg', 'A young street-smart, Nathan Drake and his wisecracking partner Victor â€œSullyâ€ Sullivan embark on a dangerous pursuit of â€œthe greatest treasure never foundâ€ while also tracking clues that may lead to Nathanâ€™s long-lost brother.', '2022-05-02 13:39:05'),
(3, 'Spider-Man: No Way Home', '2021-12-15', '/iQFcwSGbZXMkeyKrxbPnwnRo5fl.jpg', 'Peter Parker is unmasked and no longer able to separate his normal life from the high-stakes of being a super-hero. When he asks for help from Doctor Strange the stakes become even more dangerous, forcing him to discover what it truly means to be Spider-Man.', '2022-05-02 13:39:08'),
(4, 'Sonic the Hedgehog 2', '2022-03-30', '/egoyMDLqCxzjnSrWOz50uLlJWmD.jpg', 'After settling in Green Hills, Sonic is eager to prove he has what it takes to be a true hero. His test comes when Dr. Robotnik returns, this time with a new partner, Knuckles, in search for an emerald that has the power to destroy civilizations. Sonic teams up with his own sidekick, Tails, and together they embark on a globe-trotting journey to find the emerald before it falls into the wrong hands.', '2022-05-02 13:39:10'),
(5, 'Turning Red', '2022-03-10', '/fOy2Jurz9k6RnJnMUMRDAgBwru2.jpg', 'Thirteen-year-old Mei is experiencing the awkwardness of being a teenager with a twist â€“ when she gets too excited, she transforms into a giant red panda.', '2022-05-02 13:39:13'),
(6, '365 Days: This Day', '2022-04-27', '/zBG5Mg29NH9xxpWMMG7BIvKwYhL.jpg', 'Laura and Massimo are back and hotter than ever. But the reunited couple\'s new beginning is complicated by Massimoâ€™s family ties and a mysterious man who enters Lauraâ€™s life to win her heart and trust, at any cost.', '2022-05-02 13:39:16'),
(7, 'The Outfit', '2022-02-25', '/2n95p9isIi1LYTscTcGytlI4zYd.jpg', 'Leonard is an English tailor who used to craft suits on Londonâ€™s world-famous Savile Row. After a personal tragedy, heâ€™s ended up in Chicago, operating a small tailor shop in a rough part of town where he makes beautiful clothes for the only people around who can afford them: a family of vicious gangsters.', '2022-05-02 13:39:19'),
(8, 'Moonfall', '2022-02-03', '/x747ZvF0CcYYTTpPRCoUrxA2cYy.jpg', 'A mysterious force knocks the moon from its orbit around Earth and sends it hurtling on a collision course with life as we know it.', '2022-05-02 13:39:25'),
(9, 'ì•¼ì°¨', '2022-04-08', '/hXTWVJMsI9BkxMLliqL1j0FT55t.jpg', 'Nicknamed after a human-devouring spirit, the ruthless leader of an overseas black ops team takes up a dangerous mission in a city riddled with spies.', '2022-05-02 13:39:27'),
(10, 'Encanto', '2021-11-24', '/3G1Q5xF40HkUBJXxt2DQgQzKTp5.jpg', 'The tale of an extraordinary family, the Madrigals, who live hidden in the mountains of Colombia, in a magical house, in a vibrant town, in a wondrous, charmed place called an Encanto. The magic of the Encanto has blessed every child in the family with a unique gift from super strength to the power to healâ€”every child except one, Mirabel. But when she discovers that the magic surrounding the Encanto is in danger, Mirabel decides that she, the only ordinary Madrigal, might just be her exceptional family\'s last hope.', '2022-05-02 13:39:29'),
(11, 'All the Old Knives', '2022-04-08', '/xicKILMzPn6XZYCOpWwaxlUzg6S.jpg', 'When the CIA discovers one of its agents leaked information that cost more than 100 people their lives, veteran operative Henry Pelham is assigned to root out the mole with his former lover and colleague Celia Harrison.', '2022-05-02 13:39:31'),
(12, 'Blacklight', '2022-02-10', '/iDeWAGnmloZ5Oz3bocDp4rSbUXd.jpg', 'Travis Block is a shadowy Government agent who specializes in removing operatives whose covers have been exposed. He then has to uncover a deadly conspiracy within his own ranks that reaches the highest echelons of power.', '2022-05-02 13:39:33'),
(13, 'War of the Worlds: Annihilation', '2021-12-22', '/dqWiut9F30jkiKHHkYTf2RIy1g7.jpg', 'A mother and son find themselves faced with a brutal alien invasion where survival will depend on discovering the unthinkable truth about the enemy.', '2022-05-02 13:39:37'),
(14, 'The Adam Project', '2022-03-11', '/ewUqXnwiRLhgmGhuksOdLgh49Ch.jpg', 'After accidentally crash-landing in 2022, time-traveling fighter pilot Adam Reed teams up with his 12-year-old self on a mission to save the future.', '2022-05-02 13:39:40'),
(15, 'Venom: Let There Be Carnage', '2021-09-30', '/vIgyYkXkg6NC2whRbYjBD7eb3Er.jpg', 'After finding a host body in investigative reporter Eddie Brock, the alien symbiote must face a new enemy, Carnage, the alter ego of serial killer Cletus Kasady.', '2022-05-02 13:41:20'),
(16, 'The Ice Age Adventures of Buck Wild', '2022-01-28', '/eG0oOQVsniPAuecPzDD1B1gnYWy.jpg', 'The fearless one-eyed weasel Buck teams up with mischievous possum brothers Crash & Eddie as they head off on a new adventure into Buck\'s home: The Dinosaur World.', '2022-05-02 13:41:26'),
(17, 'Sonic the Hedgehog', '2020-02-12', '/gnWFYFTTUC62NHSGcMuo4JGK0t4.jpg', 'Powered with incredible speed, Sonic The Hedgehog embraces his new home on Earth. That is, until Sonic sparks the attention of super-uncool evil genius Dr. Robotnik. Now itâ€™s super-villain vs. super-sonic in an all-out race across the globe to stop Robotnik from using Sonicâ€™s unique power for world domination.', '2022-05-02 13:41:29'),
(18, 'åƒ•ã®ãƒ’ãƒ¼ãƒ­ãƒ¼ã‚¢ã‚«ãƒ‡ãƒŸã‚¢ THE MOVIE ãƒ¯ãƒ¼ãƒ«ãƒ‰ ãƒ’ãƒ¼ãƒ­ãƒ¼ã‚º ãƒŸãƒƒã‚·ãƒ§ãƒ³', '2021-08-06', '/cugmVwK0N4aAcLibelKN5jWDXSx.jpg', 'A mysterious group called Humarize strongly believes in the Quirk Singularity Doomsday theory which states that when quirks get mixed further in with future generations, that power will bring forth the end of humanity. In order to save everyone, the Pro-Heroes around the world ask UA Academy heroes-in-training to assist them and form a world-classic selected hero team. It is up to the heroes to save the world and the future of heroes in what is the most dangerous crisis to take place yet in My Hero Academia.', '2022-05-02 13:41:34'),
(19, 'Gold', '2022-01-13', '/yzH5zvuEzzsHLZnn0jwYoPf0CMT.jpg', 'In the not-too-distant future, two drifters traveling through the desert stumble across the biggest gold nugget ever found and the dream of immense wealth and greed takes hold. They hatch a plan to excavate their bounty, with one man leaving to secure the necessary tools while the other remains with the gold. The man who remains must endure harsh desert elements, ravenous wild dogs, and mysterious intruders, while battling the sinking suspicion that he has been abandoned to his fate.', '2022-05-02 13:41:38'),
(20, 'Virus-32', '2022-04-21', '/i0zbSmiyyylh7H3Qb4jgscz46Pm.jpg', 'A virus is unleashed and a chilling massacre runs through the streets of Montevideo.', '2022-05-02 13:41:56'),
(21, 'Sing 2', '2021-12-01', '/6mJrgL7Mi13XjJeGYJFlD6UEVQw.jpg', 'Buster and his new cast now have their sights set on debuting a new show at the Crystal Tower Theater in glamorous Redshore City. But with no connections, he and his singers must sneak into the Crystal Entertainment offices, run by the ruthless wolf mogul Jimmy Crystal, where the gang pitches the ridiculous idea of casting the lion rock legend Clay Calloway in their show. Buster must embark on a quest to find the now-isolated Clay and persuade him to return to the stage.', '2022-05-02 13:42:00'),
(22, 'Morbius', '2022-03-30', '/tj4lzGgHrfjnjVqAKkLIjFqPSyO.jpg', 'Dangerously ill with a rare blood disorder, and determined to save others suffering his same fate, Dr. Michael Morbius attempts a desperate gamble. What at first appears to be a radical success soon reveals itself to be a remedy potentially worse than the disease.', '2022-05-02 13:42:02'),
(23, 'Bull Shark', '2022-02-05', '/u5lEdCvKLkm1EhfQt3qe8Rr5DvR.jpg', 'A hungry shark begins feeding on unsuspecting lake goers in a small Texas town.', '2022-05-02 13:42:05'),
(24, 'The In Between', '2022-02-11', '/i9rEpTqC6aIQOWOc4PDEEAE3hFe.jpg', 'After surviving a car accident that took the life of her boyfriend, a teenage girl believes he\'s attempting to reconnect with her from the after world.', '2022-05-02 13:42:09'),
(25, 'Eternals', '2021-11-03', '/c6H7Z4u73ir3cIoCteuhJh7UCAR.jpg', 'The Eternals are a team of ancient aliens who have been living on Earth in secret for thousands of years. When an unexpected tragedy forces them out of the shadows, they are forced to reunite against mankindâ€™s most ancient enemy, the Deviants.', '2022-05-02 13:42:15'),
(26, 'Doctor Strange in the Multiverse of Madness', '2022-05-04', '/ndCSoasjIZAMMDIuMxuGnNWu4DU.jpg', 'Doctor Strange, with the help of mystical allies both old and new, traverses the mind-bending and dangerous alternate realities of the Multiverse to confront a mysterious new adversary.', '2022-05-02 13:42:18'),
(27, 'åŠ‡å ´ç‰ˆã€Œé¬¼æ»…ã®åˆƒã€ç„¡é™åˆ—è»Šç·¨', '2020-10-16', '/qjGrUmKW78MCFG8PTLDBp67S27p.jpg', 'TanjirÅ Kamado, joined with Inosuke Hashibira, a boy raised by boars who wears a boar\'s head, and Zenitsu Agatsuma, a scared boy who reveals his true power when he sleeps, boards the Infinity Train on a new mission with the Fire Hashira, KyÅjurÅ Rengoku, to defeat a demon who has been tormenting the people and killing the demon slayers who oppose it!', '2022-05-02 13:42:20'),
(28, 'Sans rÃ©pit', '2022-02-25', '/7CamWBejQ9JQOO5vAghZfrFpMXY.jpg', 'After going to extremes to cover up an accident, a corrupt cop\'s life spirals out of control when he starts receiving threats from a mysterious witness.', '2022-05-02 13:42:23'),
(29, 'Ghostbusters: Afterlife', '2021-11-11', '/zplzc6jxO3SK7Pa4yxVoRY5VflT.jpg', 'When a single mom and her two kids arrive in a small town, they begin to discover their connection to the original Ghostbusters and the secret legacy their grandfather left behind.', '2022-05-02 16:53:25'),
(30, 'Pirates of the Caribbean: Dead Man\'s Chest', '2006-07-06', '/8zfRLCgKrLAc5SSnACz8ZqmeKAP.jpg', 'Captain Jack Sparrow works his way out of a blood debt with the ghostly Davy Jones to avoid eternal damnation.', '2022-05-02 16:53:28'),
(31, 'Desperate Riders', '2022-02-25', '/i5dUmY2xRzgkmjHJYKNj8kPX1Xx.jpg', 'After Kansas Red rescues young Billy from a card-game shootout, the boy asks Red for help protecting his family from the outlaw Thorn, whoâ€™s just kidnapped Billyâ€™s mother, Carol. As Red and Billy ride off to rescue Carol, they run into beautiful, tough-as-nails Leslie, whoâ€™s managed to escape Thornâ€™s men. The three race to stop Thornâ€™s wedding to Carol with guns a-blazing - but does she want to be rescued?', '2022-05-02 16:53:34'),
(32, 'Resident Evil: Welcome to Raccoon City', '2021-11-24', '/o76ZDm8PS9791XiuieNB93UZcRV.jpg', 'Once the booming home of pharmaceutical giant Umbrella Corporation, Raccoon City is now a dying Midwestern town. The companyâ€™s exodus left the city a wastelandâ€¦with great evil brewing below the surface. When that evil is unleashed, the townspeople are foreverâ€¦changedâ€¦and a small group of survivors must work together to uncover the truth behind Umbrella and make it through the night.', '2022-05-02 16:53:39'),
(33, 'Pirates of the Caribbean: On Stranger Tides', '2011-05-14', '/uzIGtyS6bbnJzGsPL93WCF1FWm8.jpg', 'Captain Jack Sparrow crosses paths with a woman from his past, and he\'s not sure if it\'s love -- or if she\'s a ruthless con artist who\'s using him to find the fabled Fountain of Youth. When she forces him aboard the Queen Anne\'s Revenge, the ship of the formidable pirate Blackbeard, Jack finds himself on an unexpected adventure in which he doesn\'t know who to fear more: Blackbeard or the woman from his past.', '2022-05-02 16:53:56'),
(34, 'Scream', '2022-01-12', '/ifUfE79O1raUwbaQRIB7XnFz5ZC.jpg', 'Twenty-five years after a streak of brutal murders shocked the quiet town of Woodsboro, a new killer has donned the Ghostface mask and begins targeting a group of teenagers to resurrect secrets from the townâ€™s deadly past.', '2022-05-02 16:54:01'),
(35, 'Shang-Chi and the Legend of the Ten Rings', '2021-09-01', '/cinER0ESG0eJ49kXlExM0MEWGxW.jpg', 'Shang-Chi must confront the past he thought he left behind when he is drawn into the web of the mysterious Ten Rings organization.', '2022-05-02 16:54:04'),
(36, 'Kimi', '2022-02-10', '/mruT954ve6P1zquaRs6XG0hA5k9.jpg', 'A tech worker with agoraphobia discovers recorded evidence of a violent crime but is met with resistance when she tries to report it. Seeking justice, she must do the thing she fears the most: she must leave her apartment.', '2022-05-02 16:54:08'),
(37, 'The Commando', '2022-01-07', '/pnZ9NMxRqbcJ2dPNROIoregruv5.jpg', 'An elite DEA agent returns home after a failed mission when his family makes an unexpected discovery in their house â€“ a stash of money worth $3 million. They soon face the danger and threat of a newly released criminal and his crew, who will do whatever it takes to retrieve the money, including kidnap the agentâ€™s daughters. Stakes are high and lives are at risk in this head-to-head battle as the agent stops at nothing to protect his family against the money-hungry criminals.', '2022-05-02 16:54:11'),
(38, 'Pirates of the Caribbean: The Curse of the Black Pearl', '2003-07-09', '/jOh79POQu4hyVIseUxdQxTW7vOf.jpg', 'Jack Sparrow, a freewheeling 18th-century pirate, quarrels with a rival pirate bent on pillaging Port Royal. When the governor\'s daughter is kidnapped, Sparrow decides to help the girl\'s love save her.', '2022-05-02 16:54:13'),
(39, 'Pirates of the Caribbean: At World\'s End', '2007-05-19', '/3Au8rkDVsRK2AT4jq9dg6jH6buy.jpg', 'Captain Barbossa, long believed to be dead, has come back to life and is headed to the edge of the Earth with Will Turner and Elizabeth Swann. But nothing is quite as it seems.', '2022-05-02 16:54:16'),
(40, 'The Boss Baby: Family Business', '2021-07-01', '/pxOiKwRvNp3zFOiuwpYpzlbmEgC.jpg', 'The Templeton brothers â€” Tim and his Boss Baby little bro Ted â€” have become adults and drifted away from each other. But a new boss baby with a cutting-edge approach and a can-do attitude is about to bring them together again â€¦ and inspire a new family business.', '2022-05-02 16:54:21'),
(41, 'Jackass Forever', '2022-02-01', '/f2J8DpT5bqV0AiI9VVcfiuqKo5l.jpg', 'Celebrate the joy of a perfectly executed shot to the groin as Johnny Knoxville, Steve-O and the rest of the gang return alongside some newcomers for one final round of hilarious, wildly absurd and often dangerous displays of stunts and comedy.', '2022-05-02 16:54:29'),
(42, 'The Matrix Resurrections', '2021-12-16', '/eNI7PtK6DEYgZmHWP9gQNuff8pv.jpg', 'Plagued by strange memories, Neo\'s life takes an unexpected turn when he finds himself back inside the Matrix.', '2022-05-02 16:54:37'),
(43, 'The Northman', '2022-04-07', '/cqnVuxXe6vA7wfNWubak3x36DKJ.jpg', 'Prince Amleth is on the verge of becoming a man when his father is brutally murdered by his uncle, who kidnaps the boy\'s mother. Two decades later, Amleth is now a Viking who\'s on a mission to save his mother, kill his uncle and avenge his father.', '2022-05-02 17:15:46'),
(44, 'Doctor Strange', '2016-10-25', '/aL53oMdZKZRJRH8txH07DLuleF9.jpg', 'After his career is destroyed, a brilliant but arrogant surgeon gets a new lease on life when a sorcerer takes him under her wing and trains him to defend the world against evil.', '2022-05-02 17:15:53'),
(45, 'The House', '2022-01-14', '/hk4PwhKhT7q7jp1lvA8aiYqDluy.jpg', 'Across different eras, a poor family, an anxious developer and a fed-up landlady become tied to the same mysterious house in this animated dark comedy.', '2022-05-02 17:16:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `time_stamp`) VALUES
(1, 'jointheteam', 'jointheteam@aglet.co.za', 'bc5b20e2010c48452541558eea70cf69', '2022-04-30 22:00:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `favourites`
--
ALTER TABLE `favourites`
  ADD PRIMARY KEY (`favourite_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movie_id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `favourites`
--
ALTER TABLE `favourites`
  MODIFY `favourite_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
