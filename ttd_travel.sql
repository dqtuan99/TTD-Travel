-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Dec 21, 2019 at 09:16 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ttd_travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `text` varchar(1000) COLLATE utf8_vietnamese_ci NOT NULL,
  `publish_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `text`, `publish_date`, `user_id`, `post_id`) VALUES
(1, 'Test comment 1', '2019-12-22 00:37:30', 1, 11),
(4, 'Test comment 2', '2019-12-22 00:49:08', 8, 11);

-- --------------------------------------------------------

--
-- Table structure for table `continent`
--

CREATE TABLE `continent` (
  `continent_id` int(11) NOT NULL,
  `continent_name` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8_vietnamese_ci DEFAULT 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, fuga.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `continent`
--

INSERT INTO `continent` (`continent_id`, `continent_name`, `description`) VALUES
(1, 'Asia', 'From the nomadic steppes of Kazakhstan to the frenetic streets of Hanoi, Asia is a continent so full of intrigue, adventure, solace and spirituality that it has fixated and confounded travellers for centuries.'),
(2, 'Africa', 'Africa. There\'s nowhere like it on the planet for wildlife, wild lands and rich traditions that endure. Prepare to fall in love.'),
(3, 'America', 'The great American experience is about so many things: bluegrass and beaches, snow-covered peaks and redwood forests, restaurant-loving cities and big open skies.'),
(4, 'North Pole', 'Few places have stirred the hearts and minds of explorers more than the North Pole. It is the opportunity of a lifetime - so join us on an extraordinary voyage to the North Pole.'),
(5, 'Europe', 'There simply is no way to tour Europe and not be awestruck by its natural beauty, epic history and dazzling artistic and culinary diversity.'),
(6, 'Oceania', 'Australia and New Zealand\'s medley of mountains, deserts, reefs, forests, beaches and multicultural cities are an eternal draw for travellers. Remote, beautiful and friendly, the Pacific islands\' white sands and clear waters are almost perfection.');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` int(11) NOT NULL,
  `city` varchar(45) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `country` varchar(45) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `continent_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `city`, `country`, `continent_id`, `post_id`) VALUES
(1, 'Ha Noi', 'Viet Nam', 1, 7),
(2, 'Tokyo', 'Japan', 1, 3),
(3, 'New York', 'America', 3, 4),
(4, 'Berlin', 'Germany', 5, 8),
(5, 'Cairo', 'Egypt', 2, 9),
(6, 'North Pole', 'North Pole', 4, 10),
(7, 'Canberra', 'Australia', 6, 11);

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `media_id` int(11) NOT NULL,
  `img_path` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `video_path` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`media_id`, `img_path`, `video_path`, `post_id`) VALUES
(1, 'imagesdes/Oceania/Australia/great-ocean-road-victoria-australia-4k-wallpaper.jpg', NULL, 11),
(2, 'imagesdes/North Pole/8a91qw.jpg', NULL, 11),
(3, 'images/123.jpg', NULL, 11),
(4, 'images/123.jpg', NULL, 10),
(5, 'imagesdes/North Pole/8a91qw.jpg', NULL, 10),
(6, 'imagesdes/Oceania/Australia/great-ocean-road-victoria-australia-4k-wallpaper.jpg', NULL, 8);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `text` text COLLATE utf8_vietnamese_ci NOT NULL,
  `publish_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `thumbnail_img` varchar(300) COLLATE utf8_vietnamese_ci NOT NULL DEFAULT 'images/no-thumbnail.jpg',
  `user_id` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `title`, `text`, `publish_date`, `thumbnail_img`, `user_id`) VALUES
(1, 'Title1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto expedita quibusdam, fugit repellat quo cum laboriosam soluta quos dicta, reprehenderit molestias, eum laudantium tempore nihil praesentium autem quas ea eius, cupiditate voluptatibus aspernatur. Doloremque harum nemo et tempore optio quasi aspernatur, quae quos quo, est, voluptates voluptas accusantium. Alias accusantium sapiente atque quisquam architecto illum magni ipsa est sit eum, numquam suscipit necessitatibus aspernatur, harum modi saepe enim at perferendis quo eaque. Nihil possimus omnis, porro, corrupti nisi nostrum voluptate temporibus sapiente ab. Provident accusantium odit corporis! Adipisci iusto maiores laborum facere eos odit mollitia deleniti expedita neque id ex alias totam ipsa, quod praesentium suscipit qui eligendi similique quas perferendis, veniam dolore sit. Cumque harum iure odio assumenda ex dicta ullam, vitae, vel magni laborum similique voluptates tempore temporibus odit ab doloremque explicabo laboriosam, commodi excepturi error. Dolorem rerum quas eligendi minus cum beatae inventore earum optio corporis explicabo sunt facilis nemo officia amet aut molestiae cupiditate eaque ea in vero atque, dolor, quia, suscipit eveniet. Quasi culpa minus molestiae rerum, fuga neque voluptates cum officia, quia vel doloremque numquam, qui tempora aspernatur quis, dicta expedita. Omnis praesentium voluptatum, illo quo velit assumenda incidunt laudantium, fugit nobis doloribus vero harum aut excepturi laborum explicabo minima ipsam distinctio vitae officiis ad fugiat, ipsum saepe eaque ab quisquam. Maiores similique, aliquid quo beatae laudantium a possimus aliquam? Laborum non fugiat ipsum totam esse, qui maxime quibusdam cum, veritatis illum possimus optio, at sint natus numquam facilis dignissimos vel enim voluptas accusamus, dicta sequi dolorem. Minima suscipit facilis dolor est modi reprehenderit tempora nesciunt at ullam voluptates assumenda consequatur fuga nisi quibusdam delectus praesentium atque pariatur possimus, sint, blanditiis reiciendis ex magni! Temporibus dolore nulla consequuntur dolorum nesciunt consectetur totam soluta, cum rem eos, veniam deserunt? Voluptatem vel pariatur id, eaque voluptatibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem sint sequi alias, officiis ipsa cupiditate? Error omnis consectetur nisi soluta vero quaerat labore ipsa assumenda similique laborum fugiat sunt iure, aperiam velit quis nam, repellat eius hic eum officia. Rem quae adipisci provident, maxime possimus, quasi laboriosam harum non esse molestias repellat modi dignissimos eaque similique aliquam doloremque dolores assumenda, tempore asperiores veritatis fugit voluptate et earum! Est quo molestiae mollitia sit perferendis, sequi! Aspernatur, distinctio, laborum! Numquam nihil, quae voluptate pariatur iusto? Eius placeat, dolore, natus accusamus necessitatibus ullam exercitationem consectetur! Eaque ad enim temporibus dicta harum ullam voluptate.', '2019-05-18 01:05:05', 'images/no-thumbnail.jpg', 1),
(2, 'Title2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto expedita quibusdam, fugit repellat quo cum laboriosam soluta quos dicta, reprehenderit molestias, eum laudantium tempore nihil praesentium autem quas ea eius, cupiditate voluptatibus aspernatur. Doloremque harum nemo et tempore optio quasi aspernatur, quae quos quo, est, voluptates voluptas accusantium. Alias accusantium sapiente atque quisquam architecto illum magni ipsa est sit eum, numquam suscipit necessitatibus aspernatur, harum modi saepe enim at perferendis quo eaque. Nihil possimus omnis, porro, corrupti nisi nostrum voluptate temporibus sapiente ab. Provident accusantium odit corporis! Adipisci iusto maiores laborum facere eos odit mollitia deleniti expedita neque id ex alias totam ipsa, quod praesentium suscipit qui eligendi similique quas perferendis, veniam dolore sit. Cumque harum iure odio assumenda ex dicta ullam, vitae, vel magni laborum similique voluptates tempore temporibus odit ab doloremque explicabo laboriosam, commodi excepturi error. Dolorem rerum quas eligendi minus cum beatae inventore earum optio corporis explicabo sunt facilis nemo officia amet aut molestiae cupiditate eaque ea in vero atque, dolor, quia, suscipit eveniet. Quasi culpa minus molestiae rerum, fuga neque voluptates cum officia, quia vel doloremque numquam, qui tempora aspernatur quis, dicta expedita. Omnis praesentium voluptatum, illo quo velit assumenda incidunt laudantium, fugit nobis doloribus vero harum aut excepturi laborum explicabo minima ipsam distinctio vitae officiis ad fugiat, ipsum saepe eaque ab quisquam. Maiores similique, aliquid quo beatae laudantium a possimus aliquam? Laborum non fugiat ipsum totam esse, qui maxime quibusdam cum, veritatis illum possimus optio, at sint natus numquam facilis dignissimos vel enim voluptas accusamus, dicta sequi dolorem. Minima suscipit facilis dolor est modi reprehenderit tempora nesciunt at ullam voluptates assumenda consequatur fuga nisi quibusdam delectus praesentium atque pariatur possimus, sint, blanditiis reiciendis ex magni! Temporibus dolore nulla consequuntur dolorum nesciunt consectetur totam soluta, cum rem eos, veniam deserunt? Voluptatem vel pariatur id, eaque voluptatibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem sint sequi alias, officiis ipsa cupiditate? Error omnis consectetur nisi soluta vero quaerat labore ipsa assumenda similique laborum fugiat sunt iure, aperiam velit quis nam, repellat eius hic eum officia. Rem quae adipisci provident, maxime possimus, quasi laboriosam harum non esse molestias repellat modi dignissimos eaque similique aliquam doloremque dolores assumenda, tempore asperiores veritatis fugit voluptate et earum! Est quo molestiae mollitia sit perferendis, sequi! Aspernatur, distinctio, laborum! Numquam nihil, quae voluptate pariatur iusto? Eius placeat, dolore, natus accusamus necessitatibus ullam exercitationem consectetur! Eaque ad enim temporibus dicta harum ullam voluptate.', '2019-02-18 01:05:13', 'images/no-thumbnail.jpg', 1),
(3, 'Title3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto expedita quibusdam, fugit repellat quo cum laboriosam soluta quos dicta, reprehenderit molestias, eum laudantium tempore nihil praesentium autem quas ea eius, cupiditate voluptatibus aspernatur. Doloremque harum nemo et tempore optio quasi aspernatur, quae quos quo, est, voluptates voluptas accusantium. Alias accusantium sapiente atque quisquam architecto illum magni ipsa est sit eum, numquam suscipit necessitatibus aspernatur, harum modi saepe enim at perferendis quo eaque. Nihil possimus omnis, porro, corrupti nisi nostrum voluptate temporibus sapiente ab. Provident accusantium odit corporis! Adipisci iusto maiores laborum facere eos odit mollitia deleniti expedita neque id ex alias totam ipsa, quod praesentium suscipit qui eligendi similique quas perferendis, veniam dolore sit. Cumque harum iure odio assumenda ex dicta ullam, vitae, vel magni laborum similique voluptates tempore temporibus odit ab doloremque explicabo laboriosam, commodi excepturi error. Dolorem rerum quas eligendi minus cum beatae inventore earum optio corporis explicabo sunt facilis nemo officia amet aut molestiae cupiditate eaque ea in vero atque, dolor, quia, suscipit eveniet. Quasi culpa minus molestiae rerum, fuga neque voluptates cum officia, quia vel doloremque numquam, qui tempora aspernatur quis, dicta expedita. Omnis praesentium voluptatum, illo quo velit assumenda incidunt laudantium, fugit nobis doloribus vero harum aut excepturi laborum explicabo minima ipsam distinctio vitae officiis ad fugiat, ipsum saepe eaque ab quisquam. Maiores similique, aliquid quo beatae laudantium a possimus aliquam? Laborum non fugiat ipsum totam esse, qui maxime quibusdam cum, veritatis illum possimus optio, at sint natus numquam facilis dignissimos vel enim voluptas accusamus, dicta sequi dolorem. Minima suscipit facilis dolor est modi reprehenderit tempora nesciunt at ullam voluptates assumenda consequatur fuga nisi quibusdam delectus praesentium atque pariatur possimus, sint, blanditiis reiciendis ex magni! Temporibus dolore nulla consequuntur dolorum nesciunt consectetur totam soluta, cum rem eos, veniam deserunt? Voluptatem vel pariatur id, eaque voluptatibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem sint sequi alias, officiis ipsa cupiditate? Error omnis consectetur nisi soluta vero quaerat labore ipsa assumenda similique laborum fugiat sunt iure, aperiam velit quis nam, repellat eius hic eum officia. Rem quae adipisci provident, maxime possimus, quasi laboriosam harum non esse molestias repellat modi dignissimos eaque similique aliquam doloremque dolores assumenda, tempore asperiores veritatis fugit voluptate et earum! Est quo molestiae mollitia sit perferendis, sequi! Aspernatur, distinctio, laborum! Numquam nihil, quae voluptate pariatur iusto? Eius placeat, dolore, natus accusamus necessitatibus ullam exercitationem consectetur! Eaque ad enim temporibus dicta harum ullam voluptate.', '2019-05-18 01:05:34', 'images/North_Pole_Penguins-Animal_HD_Wallpaper_1366x768.jpg', 1),
(4, 'Title4', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto expedita quibusdam, fugit repellat quo cum laboriosam soluta quos dicta, reprehenderit molestias, eum laudantium tempore nihil praesentium autem quas ea eius, cupiditate voluptatibus aspernatur. Doloremque harum nemo et tempore optio quasi aspernatur, quae quos quo, est, voluptates voluptas accusantium. Alias accusantium sapiente atque quisquam architecto illum magni ipsa est sit eum, numquam suscipit necessitatibus aspernatur, harum modi saepe enim at perferendis quo eaque. Nihil possimus omnis, porro, corrupti nisi nostrum voluptate temporibus sapiente ab. Provident accusantium odit corporis! Adipisci iusto maiores laborum facere eos odit mollitia deleniti expedita neque id ex alias totam ipsa, quod praesentium suscipit qui eligendi similique quas perferendis, veniam dolore sit. Cumque harum iure odio assumenda ex dicta ullam, vitae, vel magni laborum similique voluptates tempore temporibus odit ab doloremque explicabo laboriosam, commodi excepturi error. Dolorem rerum quas eligendi minus cum beatae inventore earum optio corporis explicabo sunt facilis nemo officia amet aut molestiae cupiditate eaque ea in vero atque, dolor, quia, suscipit eveniet. Quasi culpa minus molestiae rerum, fuga neque voluptates cum officia, quia vel doloremque numquam, qui tempora aspernatur quis, dicta expedita. Omnis praesentium voluptatum, illo quo velit assumenda incidunt laudantium, fugit nobis doloribus vero harum aut excepturi laborum explicabo minima ipsam distinctio vitae officiis ad fugiat, ipsum saepe eaque ab quisquam. Maiores similique, aliquid quo beatae laudantium a possimus aliquam? Laborum non fugiat ipsum totam esse, qui maxime quibusdam cum, veritatis illum possimus optio, at sint natus numquam facilis dignissimos vel enim voluptas accusamus, dicta sequi dolorem. Minima suscipit facilis dolor est modi reprehenderit tempora nesciunt at ullam voluptates assumenda consequatur fuga nisi quibusdam delectus praesentium atque pariatur possimus, sint, blanditiis reiciendis ex magni! Temporibus dolore nulla consequuntur dolorum nesciunt consectetur totam soluta, cum rem eos, veniam deserunt? Voluptatem vel pariatur id, eaque voluptatibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem sint sequi alias, officiis ipsa cupiditate? Error omnis consectetur nisi soluta vero quaerat labore ipsa assumenda similique laborum fugiat sunt iure, aperiam velit quis nam, repellat eius hic eum officia. Rem quae adipisci provident, maxime possimus, quasi laboriosam harum non esse molestias repellat modi dignissimos eaque similique aliquam doloremque dolores assumenda, tempore asperiores veritatis fugit voluptate et earum! Est quo molestiae mollitia sit perferendis, sequi! Aspernatur, distinctio, laborum! Numquam nihil, quae voluptate pariatur iusto? Eius placeat, dolore, natus accusamus necessitatibus ullam exercitationem consectetur! Eaque ad enim temporibus dicta harum ullam voluptate.', '2019-04-18 01:05:34', 'images/sa_pa_terraces.jpg', 1),
(5, 'Ba Thanh An Cut', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto expedita quibusdam, fugit repellat quo cum laboriosam soluta quos dicta, reprehenderit molestias, eum laudantium tempore nihil praesentium autem quas ea eius, cupiditate voluptatibus aspernatur. Doloremque harum nemo et tempore optio quasi aspernatur, quae quos quo, est, voluptates voluptas accusantium. Alias accusantium sapiente atque quisquam architecto illum magni ipsa est sit eum, numquam suscipit necessitatibus aspernatur, harum modi saepe enim at perferendis quo eaque. Nihil possimus omnis, porro, corrupti nisi nostrum voluptate temporibus sapiente ab. Provident accusantium odit corporis! Adipisci iusto maiores laborum facere eos odit mollitia deleniti expedita neque id ex alias totam ipsa, quod praesentium suscipit qui eligendi similique quas perferendis, veniam dolore sit. Cumque harum iure odio assumenda ex dicta ullam, vitae, vel magni laborum similique voluptates tempore temporibus odit ab doloremque explicabo laboriosam, commodi excepturi error. Dolorem rerum quas eligendi minus cum beatae inventore earum optio corporis explicabo sunt facilis nemo officia amet aut molestiae cupiditate eaque ea in vero atque, dolor, quia, suscipit eveniet. Quasi culpa minus molestiae rerum, fuga neque voluptates cum officia, quia vel doloremque numquam, qui tempora aspernatur quis, dicta expedita. Omnis praesentium voluptatum, illo quo velit assumenda incidunt laudantium, fugit nobis doloribus vero harum aut excepturi laborum explicabo minima ipsam distinctio vitae officiis ad fugiat, ipsum saepe eaque ab quisquam. Maiores similique, aliquid quo beatae laudantium a possimus aliquam? Laborum non fugiat ipsum totam esse, qui maxime quibusdam cum, veritatis illum possimus optio, at sint natus numquam facilis dignissimos vel enim voluptas accusamus, dicta sequi dolorem. Minima suscipit facilis dolor est modi reprehenderit tempora nesciunt at ullam voluptates assumenda consequatur fuga nisi quibusdam delectus praesentium atque pariatur possimus, sint, blanditiis reiciendis ex magni! Temporibus dolore nulla consequuntur dolorum nesciunt consectetur totam soluta, cum rem eos, veniam deserunt? Voluptatem vel pariatur id, eaque voluptatibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem sint sequi alias, officiis ipsa cupiditate? Error omnis consectetur nisi soluta vero quaerat labore ipsa assumenda similique laborum fugiat sunt iure, aperiam velit quis nam, repellat eius hic eum officia. Rem quae adipisci provident, maxime possimus, quasi laboriosam harum non esse molestias repellat modi dignissimos eaque similique aliquam doloremque dolores assumenda, tempore asperiores veritatis fugit voluptate et earum! Est quo molestiae mollitia sit perferendis, sequi! Aspernatur, distinctio, laborum! Numquam nihil, quae voluptate pariatur iusto? Eius placeat, dolore, natus accusamus necessitatibus ullam exercitationem consectetur! Eaque ad enim temporibus dicta harum ullam voluptate.', '2019-05-18 01:05:34', 'images/no-thumbnail.jpg', 1),
(6, 'Dung An Cut', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto expedita quibusdam, fugit repellat quo cum laboriosam soluta quos dicta, reprehenderit molestias, eum laudantium tempore nihil praesentium autem quas ea eius, cupiditate voluptatibus aspernatur. Doloremque harum nemo et tempore optio quasi aspernatur, quae quos quo, est, voluptates voluptas accusantium. Alias accusantium sapiente atque quisquam architecto illum magni ipsa est sit eum, numquam suscipit necessitatibus aspernatur, harum modi saepe enim at perferendis quo eaque. Nihil possimus omnis, porro, corrupti nisi nostrum voluptate temporibus sapiente ab. Provident accusantium odit corporis! Adipisci iusto maiores laborum facere eos odit mollitia deleniti expedita neque id ex alias totam ipsa, quod praesentium suscipit qui eligendi similique quas perferendis, veniam dolore sit. Cumque harum iure odio assumenda ex dicta ullam, vitae, vel magni laborum similique voluptates tempore temporibus odit ab doloremque explicabo laboriosam, commodi excepturi error. Dolorem rerum quas eligendi minus cum beatae inventore earum optio corporis explicabo sunt facilis nemo officia amet aut molestiae cupiditate eaque ea in vero atque, dolor, quia, suscipit eveniet. Quasi culpa minus molestiae rerum, fuga neque voluptates cum officia, quia vel doloremque numquam, qui tempora aspernatur quis, dicta expedita. Omnis praesentium voluptatum, illo quo velit assumenda incidunt laudantium, fugit nobis doloribus vero harum aut excepturi laborum explicabo minima ipsam distinctio vitae officiis ad fugiat, ipsum saepe eaque ab quisquam. Maiores similique, aliquid quo beatae laudantium a possimus aliquam? Laborum non fugiat ipsum totam esse, qui maxime quibusdam cum, veritatis illum possimus optio, at sint natus numquam facilis dignissimos vel enim voluptas accusamus, dicta sequi dolorem. Minima suscipit facilis dolor est modi reprehenderit tempora nesciunt at ullam voluptates assumenda consequatur fuga nisi quibusdam delectus praesentium atque pariatur possimus, sint, blanditiis reiciendis ex magni! Temporibus dolore nulla consequuntur dolorum nesciunt consectetur totam soluta, cum rem eos, veniam deserunt? Voluptatem vel pariatur id, eaque voluptatibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem sint sequi alias, officiis ipsa cupiditate? Error omnis consectetur nisi soluta vero quaerat labore ipsa assumenda similique laborum fugiat sunt iure, aperiam velit quis nam, repellat eius hic eum officia. Rem quae adipisci provident, maxime possimus, quasi laboriosam harum non esse molestias repellat modi dignissimos eaque similique aliquam doloremque dolores assumenda, tempore asperiores veritatis fugit voluptate et earum! Est quo molestiae mollitia sit perferendis, sequi! Aspernatur, distinctio, laborum! Numquam nihil, quae voluptate pariatur iusto? Eius placeat, dolore, natus accusamus necessitatibus ullam exercitationem consectetur! Eaque ad enim temporibus dicta harum ullam voluptate.', '2019-07-18 01:05:34', 'images/no-thumbnail.jpg', 1),
(7, 'Tuan Dep Trai', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto expedita quibusdam, fugit repellat quo cum laboriosam soluta quos dicta, reprehenderit molestias, eum laudantium tempore nihil praesentium autem quas ea eius, cupiditate voluptatibus aspernatur. Doloremque harum nemo et tempore optio quasi aspernatur, quae quos quo, est, voluptates voluptas accusantium. Alias accusantium sapiente atque quisquam architecto illum magni ipsa est sit eum, numquam suscipit necessitatibus aspernatur, harum modi saepe enim at perferendis quo eaque. Nihil possimus omnis, porro, corrupti nisi nostrum voluptate temporibus sapiente ab. Provident accusantium odit corporis! Adipisci iusto maiores laborum facere eos odit mollitia deleniti expedita neque id ex alias totam ipsa, quod praesentium suscipit qui eligendi similique quas perferendis, veniam dolore sit. Cumque harum iure odio assumenda ex dicta ullam, vitae, vel magni laborum similique voluptates tempore temporibus odit ab doloremque explicabo laboriosam, commodi excepturi error. Dolorem rerum quas eligendi minus cum beatae inventore earum optio corporis explicabo sunt facilis nemo officia amet aut molestiae cupiditate eaque ea in vero atque, dolor, quia, suscipit eveniet. Quasi culpa minus molestiae rerum, fuga neque voluptates cum officia, quia vel doloremque numquam, qui tempora aspernatur quis, dicta expedita. Omnis praesentium voluptatum, illo quo velit assumenda incidunt laudantium, fugit nobis doloribus vero harum aut excepturi laborum explicabo minima ipsam distinctio vitae officiis ad fugiat, ipsum saepe eaque ab quisquam. Maiores similique, aliquid quo beatae laudantium a possimus aliquam? Laborum non fugiat ipsum totam esse, qui maxime quibusdam cum, veritatis illum possimus optio, at sint natus numquam facilis dignissimos vel enim voluptas accusamus, dicta sequi dolorem. Minima suscipit facilis dolor est modi reprehenderit tempora nesciunt at ullam voluptates assumenda consequatur fuga nisi quibusdam delectus praesentium atque pariatur possimus, sint, blanditiis reiciendis ex magni! Temporibus dolore nulla consequuntur dolorum nesciunt consectetur totam soluta, cum rem eos, veniam deserunt? Voluptatem vel pariatur id, eaque voluptatibus. Ro rang la Tuan rat dep trai roi. May can tao phai noi lai cau nay bao nhieu lan nua thi moi hieu the ha thang ngu si dan nay ???? Blyat.', '2019-07-18 14:11:31', 'images/123.jpg', 1),
(8, 'Germany', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto expedita quibusdam, fugit repellat quo cum laboriosam soluta quos dicta, reprehenderit molestias, eum laudantium tempore nihil praesentium autem quas ea eius, cupiditate voluptatibus aspernatur. Doloremque harum nemo et tempore optio quasi aspernatur, quae quos quo, est, voluptates voluptas accusantium. Alias accusantium sapiente atque quisquam architecto illum magni ipsa est sit eum, numquam suscipit necessitatibus aspernatur, harum modi saepe enim at perferendis quo eaque. Nihil possimus omnis, porro, corrupti nisi nostrum voluptate temporibus sapiente ab. Provident accusantium odit corporis! Adipisci iusto maiores laborum facere eos odit mollitia deleniti expedita neque id ex alias totam ipsa, quod praesentium suscipit qui eligendi similique quas perferendis, veniam dolore sit. Cumque harum iure odio assumenda ex dicta ullam, vitae, vel magni laborum similique voluptates tempore temporibus odit ab doloremque explicabo laboriosam, commodi excepturi error. Dolorem rerum quas eligendi minus cum beatae inventore earum optio corporis explicabo sunt facilis nemo officia amet aut molestiae cupiditate eaque ea in vero atque, dolor, quia, suscipit eveniet. Quasi culpa minus molestiae rerum, fuga neque voluptates cum officia, quia vel doloremque numquam, qui tempora aspernatur quis, dicta expedita. Omnis praesentium voluptatum, illo quo velit assumenda incidunt laudantium, fugit nobis doloribus vero harum aut excepturi laborum explicabo minima ipsam distinctio vitae officiis ad fugiat, ipsum saepe eaque ab quisquam. Maiores similique, aliquid quo beatae laudantium a possimus aliquam? Laborum non fugiat ipsum totam esse, qui maxime quibusdam cum, veritatis illum possimus optio, at sint natus numquam facilis dignissimos vel enim voluptas accusamus, dicta sequi dolorem. Minima suscipit facilis dolor est modi reprehenderit tempora nesciunt at ullam voluptates assumenda consequatur fuga nisi quibusdam delectus praesentium atque pariatur possimus, sint, blanditiis reiciendis ex magni! Temporibus dolore nulla consequuntur dolorum nesciunt consectetur totam soluta, cum rem eos, veniam deserunt? Voluptatem vel pariatur id, eaque voluptatibus. Prepare for a roller-coaster ride of feasts, treats and temptations experiencing Germany\'s soul-stirring scenery, spirit-lifting culture, big-city beauties, romantic palaces and half-timbered towns.', '2019-12-18 19:00:45', 'imagesdes/Europe/German/germany-miniatur-wunderland-port-of-hamburg.jpg', 1),
(9, 'Egypt', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto expedita quibusdam, fugit repellat quo cum laboriosam soluta quos dicta, reprehenderit molestias, eum laudantium tempore nihil praesentium autem quas ea eius, cupiditate voluptatibus aspernatur. Doloremque harum nemo et tempore optio quasi aspernatur, quae quos quo, est, voluptates voluptas accusantium. Alias accusantium sapiente atque quisquam architecto illum magni ipsa est sit eum, numquam suscipit necessitatibus aspernatur, harum modi saepe enim at perferendis quo eaque. Nihil possimus omnis, porro, corrupti nisi nostrum voluptate temporibus sapiente ab. Provident accusantium odit corporis! Adipisci iusto maiores laborum facere eos odit mollitia deleniti expedita neque id ex alias totam ipsa, quod praesentium suscipit qui eligendi similique quas perferendis, veniam dolore sit. Cumque harum iure odio assumenda ex dicta ullam, vitae, vel magni laborum similique voluptates tempore temporibus odit ab doloremque explicabo laboriosam, commodi excepturi error. Dolorem rerum quas eligendi minus cum beatae inventore earum optio corporis explicabo sunt facilis nemo officia amet aut molestiae cupiditate eaque ea in vero atque, dolor, quia, suscipit eveniet. Quasi culpa minus molestiae rerum, fuga neque voluptates cum officia, quia vel doloremque numquam, qui tempora aspernatur quis, dicta expedita. Omnis praesentium voluptatum, illo quo velit assumenda incidunt laudantium, fugit nobis doloribus vero harum aut excepturi laborum explicabo minima ipsam distinctio vitae officiis ad fugiat, ipsum saepe eaque ab quisquam. Maiores similique, aliquid quo beatae laudantium a possimus aliquam? Laborum non fugiat ipsum totam esse, qui maxime quibusdam cum, veritatis illum possimus optio, at sint natus numquam facilis dignissimos vel enim voluptas accusamus, dicta sequi dolorem. Minima suscipit facilis dolor est modi reprehenderit tempora nesciunt at ullam voluptates assumenda consequatur fuga nisi quibusdam delectus praesentium atque pariatur possimus, sint, blanditiis reiciendis ex magni! Temporibus dolore nulla consequuntur dolorum nesciunt consectetur totam soluta, cum rem eos, veniam deserunt? Voluptatem vel pariatur id, eaque voluptatibus. Egypt welcomes you with its mighty Nile and magnificent monuments, the beguiling desert and lush delta, and with its long past and welcoming, story-loving people.', '2019-12-18 19:00:45', 'imagesdes/Africa/Ai Cap/pexels-photo-71241.jpeg', 1),
(10, 'How to visit to North Pole', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto expedita quibusdam, fugit repellat quo cum laboriosam soluta quos dicta, reprehenderit molestias, eum laudantium tempore nihil praesentium autem quas ea eius, cupiditate voluptatibus aspernatur. Doloremque harum nemo et tempore optio quasi aspernatur, quae quos quo, est, voluptates voluptas accusantium. Alias accusantium sapiente atque quisquam architecto illum magni ipsa est sit eum, numquam suscipit necessitatibus aspernatur, harum modi saepe enim at perferendis quo eaque. Nihil possimus omnis, porro, corrupti nisi nostrum voluptate temporibus sapiente ab. Provident accusantium odit corporis! Adipisci iusto maiores laborum facere eos odit mollitia deleniti expedita neque id ex alias totam ipsa, quod praesentium suscipit qui eligendi similique quas perferendis, veniam dolore sit. Cumque harum iure odio assumenda ex dicta ullam, vitae, vel magni laborum similique voluptates tempore temporibus odit ab doloremque explicabo laboriosam, commodi excepturi error. Dolorem rerum quas eligendi minus cum beatae inventore earum optio corporis explicabo sunt facilis nemo officia amet aut molestiae cupiditate eaque ea in vero atque, dolor, quia, suscipit eveniet. Quasi culpa minus molestiae rerum, fuga neque voluptates cum officia, quia vel doloremque numquam, qui tempora aspernatur quis, dicta expedita. Omnis praesentium voluptatum, illo quo velit assumenda incidunt laudantium, fugit nobis doloribus vero harum aut excepturi laborum explicabo minima ipsam distinctio vitae officiis ad fugiat, ipsum saepe eaque ab quisquam. Maiores similique, aliquid quo beatae laudantium a possimus aliquam? Laborum non fugiat ipsum totam esse, qui maxime quibusdam cum, veritatis illum possimus optio, at sint natus numquam facilis dignissimos vel enim voluptas accusamus, dicta sequi dolorem. Minima suscipit facilis dolor est modi reprehenderit tempora nesciunt at ullam voluptates assumenda consequatur fuga nisi quibusdam delectus praesentium atque pariatur possimus, sint, blanditiis reiciendis ex magni! Temporibus dolore nulla consequuntur dolorum nesciunt consectetur totam soluta, cum rem eos, veniam deserunt? Voluptatem vel pariatur id, eaque voluptatibus. If you would jump at the chance of travelling to the North Pole aboard the only working Russian nuclear icebreaker in the world, this trip departing in July could be for you.', '2019-12-18 19:01:26', 'imagesdes/North Pole/8a91qw.jpg', 1),
(11, 'Australia', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto expedita quibusdam, fugit repellat quo cum laboriosam soluta quos dicta, reprehenderit molestias, eum laudantium tempore nihil praesentium autem quas ea eius, cupiditate voluptatibus aspernatur. Doloremque harum nemo et tempore optio quasi aspernatur, quae quos quo, est, voluptates voluptas accusantium. Alias accusantium sapiente atque quisquam architecto illum magni ipsa est sit eum, numquam suscipit necessitatibus aspernatur, harum modi saepe enim at perferendis quo eaque. Nihil possimus omnis, porro, corrupti nisi nostrum voluptate temporibus sapiente ab. Provident accusantium odit corporis! Adipisci iusto maiores laborum facere eos odit mollitia deleniti expedita neque id ex alias totam ipsa, quod praesentium suscipit qui eligendi similique quas perferendis, veniam dolore sit. Cumque harum iure odio assumenda ex dicta ullam, vitae, vel magni laborum similique voluptates tempore temporibus odit ab doloremque explicabo laboriosam, commodi excepturi error. Dolorem rerum quas eligendi minus cum beatae inventore earum optio corporis explicabo sunt facilis nemo officia amet aut molestiae cupiditate eaque ea in vero atque, dolor, quia, suscipit eveniet. Quasi culpa minus molestiae rerum, fuga neque voluptates cum officia, quia vel doloremque numquam, qui tempora aspernatur quis, dicta expedita. Omnis praesentium voluptatum, illo quo velit assumenda incidunt laudantium, fugit nobis doloribus vero harum aut excepturi laborum explicabo minima ipsam distinctio vitae officiis ad fugiat, ipsum saepe eaque ab quisquam. Maiores similique, aliquid quo beatae laudantium a possimus aliquam? Laborum non fugiat ipsum totam esse, qui maxime quibusdam cum, veritatis illum possimus optio, at sint natus numquam facilis dignissimos vel enim voluptas accusamus, dicta sequi dolorem. Minima suscipit facilis dolor est modi reprehenderit tempora nesciunt at ullam voluptates assumenda consequatur fuga nisi quibusdam delectus praesentium atque pariatur possimus, sint, blanditiis reiciendis ex magni! Temporibus dolore nulla consequuntur dolorum nesciunt consectetur totam soluta, cum rem eos, veniam deserunt? Voluptatem vel pariatur id, eaque voluptatibus. Australia is the unexpected: a place where the world\'s oldest cultures share vast ochre plains, stylish laneways and unimaginably blue waters with successive waves of new arrivals from across the globe.', '2019-12-18 19:03:01', 'imagesdes/Oceania/Australia/great-ocean-road-victoria-australia-4k-wallpaper.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `react`
--

CREATE TABLE `react` (
  `react_id` int(11) NOT NULL,
  `react_type` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `react`
--

INSERT INTO `react` (`react_id`, `react_type`, `user_id`, `post_id`) VALUES
(3, 1, 1, 11),
(4, 1, 1, 11),
(5, 2, 1, 11),
(6, 2, 1, 10),
(7, 2, 1, 10),
(8, 2, 1, 10),
(9, 2, 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(32) COLLATE utf8_vietnamese_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_vietnamese_ci NOT NULL,
  `fullname` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `avatarPath` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL DEFAULT 'images/avatar-default.jpg',
  `phone` varchar(45) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `description` text COLLATE utf8_vietnamese_ci,
  `isAdmin` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `fullname`, `email`, `avatarPath`, `phone`, `birthday`, `description`, `isAdmin`) VALUES
(1, 'dqtuan99', '7f1c9f0f60dbd68fb2904966b5a9ed86bca578a0195617d6dc236a5a1c8e10f4', 'Do Quang Tuan', 'tegieng9a4@gmail.com', 'images/tuan.jpg', '0915897016', '1999-04-10', 'Tuan cuc dep trai', 1),
(5, 'qtuan999', '7f1c9f0f60dbd68fb2904966b5a9ed86bca578a0195617d6dc236a5a1c8e10f4', 'Do Quang Tuan', 'testuser1@gmail.com', 'images/avatar-default.jpg', '0915897016', NULL, NULL, 0),
(6, 'tegieng9a4', '7f1c9f0f60dbd68fb2904966b5a9ed86bca578a0195617d6dc236a5a1c8e10f4', 'Do Quang Tuan', 'tegieng9a4@gmail.com', 'images/avatar-default.jpg', '0915897016', NULL, NULL, 0),
(7, 'testuser123', '7f1c9f0f60dbd68fb2904966b5a9ed86bca578a0195617d6dc236a5a1c8e10f4', 'Do Quang Tuan', 'testuser1@gmail.com', 'images/avatar-default.jpg', '0915897016', NULL, NULL, 0),
(8, 'bathanh1234', '7f1c9f0f60dbd68fb2904966b5a9ed86bca578a0195617d6dc236a5a1c8e10f4', 'Nguyen Ba Thanh', 'testuser4321@gmail.com', 'images/bathanh.jpg', '113', NULL, 'Hoc de sanh vai voi cac cuong quoc nam chau.', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `cmt_post_fk` (`post_id`),
  ADD KEY `cmt_user_fk` (`user_id`);

--
-- Indexes for table `continent`
--
ALTER TABLE `continent`
  ADD PRIMARY KEY (`continent_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`),
  ADD KEY `location_post_fk` (`post_id`),
  ADD KEY `location_continent_fk` (`continent_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`media_id`),
  ADD KEY `media_post_fk` (`post_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `react`
--
ALTER TABLE `react`
  ADD PRIMARY KEY (`react_id`),
  ADD KEY `react_user_fk` (`user_id`),
  ADD KEY `react_post_fk` (`post_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `continent`
--
ALTER TABLE `continent`
  MODIFY `continent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `react`
--
ALTER TABLE `react`
  MODIFY `react_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `cmt_post_fk` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cmt_user_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `location_continent_fk` FOREIGN KEY (`continent_id`) REFERENCES `continent` (`continent_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `location_post_fk` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_post_fk` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `react`
--
ALTER TABLE `react`
  ADD CONSTRAINT `react_post_fk` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `react_user_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
