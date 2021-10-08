-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 08, 2021 at 01:49 PM
-- Server version: 8.0.21
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel-blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'news.png',
  `features` enum('article','slider-top','trendNews','mostPopular','slider-footer') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'article',
  `status` enum('published','draft') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'draft',
  `user_id` bigint UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `articles_slug_unique` (`slug`),
  KEY `articles_category_id_foreign` (`category_id`),
  KEY `articles_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `slug`, `category_id`, `description`, `content`, `image_path`, `features`, `status`, `user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'What To Expect From The 2020 Oscar Nomin Ations', 'what-to-expect-from-the-2020-oscar-nomin-ations', 4, 'Veniam tenetur dict', 'Laborum. Exercitatio3.', 'articles/OvxFjFmrteLShyUT4SNFVGYOqM834QFB0bLLn3pD.png', 'trendNews', 'published', 1, NULL, '2021-09-29 15:38:12', '2021-10-02 10:12:47'),
(4, 'What To Expect From The 2020', 'what-to-expect-from-the-2020', 1, 'In nostrud omnis odi', 'Ullamco voluptates 3333 a.', 'articles/pMhPJYQVATN26g66CEf7XQ8RpPkWi2NEyNQ6VW9V.png', 'trendNews', 'published', 1, NULL, '2021-09-29 15:39:19', '2021-09-29 15:45:21'),
(5, 'What To Expect From The 2020 Oscar Nomin', 'what-to-expect-from-the-2020-oscar-nomin', 1, 'Necessitatibus aut q', 'Expedita dicta moles.ddd', 'articles/febnrwEfXLIPaT4QTJYRm1c0VlLno7IDbVmwct8D.png', 'trendNews', 'published', 1, NULL, '2021-09-29 15:39:45', '2021-09-29 15:44:52'),
(8, 'What To Expect From The 2020 Oscar Nomin 444', 'what-to-expect-from-the-2020-oscar-nomin-444', 2, 'Aliquid sunt dolor q', 'Vel veniam, providen.d', 'articles/jIsIoGeKuRpYOpf3n3bC3BBxf3gGsLq36Irv0coV.png', 'trendNews', 'published', 1, NULL, '2021-09-29 15:41:23', '2021-09-29 15:44:22'),
(9, 'Consequuntur Aute Qu', 'consequuntur-aute-qu', 3, 'Ut nihil qui mollit', '<p><br></p><div id=\"bannerR\" style=\"margin: 0px -160px 0px 0px; padding: 0px; position: sticky; top: 20px; width: 160px; height: 10px; float: right; text-align: left; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><div id=\"div-gpt-ad-1474537762122-3\" data-google-query-id=\"COW4ufDtpPMCFZL4dwodk9kKIA\" style=\"margin: 0px; padding: 0px;\"><div id=\"google_ads_iframe_/15188745,22440292294/Lipsum-Unit4_0__container__\" style=\"margin: 0px; padding: 0px; border: 0pt none;\"><iframe id=\"google_ads_iframe_/15188745,22440292294/Lipsum-Unit4_0\" title=\"3rd party ad content\" name=\"google_ads_iframe_/15188745,22440292294/Lipsum-Unit4_0\" width=\"160\" height=\"600\" scrolling=\"no\" marginwidth=\"0\" marginheight=\"0\" frameborder=\"0\" sandbox=\"allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation\" data-google-container-id=\"3\" data-load-complete=\"true\" style=\"margin: 0px; padding: 0px; border-width: 0px; border-style: initial; vertical-align: bottom;\"></iframe></div></div></div><div id=\"Panes\" style=\"margin: 15px 0px 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: center;\"><div style=\"margin: 0px 14.3906px 0px 28.7969px; padding: 0px; width: 436.797px; text-align: left; float: left;\"><h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px;\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div><div style=\"margin: 0px 28.7969px 0px 14.3906px; padding: 0px; width: 436.797px; text-align: left; float: right;\"><h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px;\">Why do we use it?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p><div><br></div></div></div>', 'articles/2N2GuruAQjp4XnWsrjsQ5dW5EttBoHmIrVQ3iGkN.png', 'slider-footer', 'published', 1, NULL, '2021-09-29 15:55:12', '2021-09-29 16:09:18'),
(10, 'Cupiditate Velit Max', 'cupiditate-velit-max', 5, 'Ut eligendi rerum do', 'dAccusamus consequatu.', 'articles/KDTpxRl3vioOP51PqusU5q4DbVNiuRrbisBQoi2D.png', 'slider-footer', 'published', 1, NULL, '2021-09-29 15:55:37', '2021-09-29 16:09:00'),
(11, 'Quidem Mollit Et Ut', 'quidem-mollit-et-ut', 1, 'Ut nihil itaque itaq', 'Est possimus, uljlam .', 'articles/9fsfyKhUZuAqFYVPtFLXFtLMs6LeLWVAy8MQMUnO.png', 'slider-footer', 'published', 1, NULL, '2021-09-29 16:06:12', '2021-09-29 16:08:37'),
(12, 'Ullamco Et Ut Iure Q', 'ullamco-et-ut-iure-q', 4, 'Cumque impedit culp', 'Nisi itaque beatae v.kkk', 'articles/0NnbldyIlEULEl5j7KZEDniCiHcAM9QKPd8xf6Zb.png', 'slider-footer', 'published', 1, NULL, '2021-09-29 16:08:22', '2021-09-29 16:08:22'),
(13, 'Lorem Et Incididunt', 'lorem-et-incididunt', 4, 'Illo id repellendus', 'In velit soluta qui .21', 'articles/xhHyNdtwlDqX8yWT0havpTlYYtU3BdAN9OV4tAUa.png', 'slider-footer', 'published', 1, NULL, '2021-09-29 16:09:53', '2021-09-29 16:09:53'),
(14, 'Non Ea Voluptatum Si', 'non-ea-voluptatum-si', 3, 'Est saepe exercitati', 'Unde necessitatibus .d', 'articles/plaH3vhwJNwNJP8Fp81WuO9UWWuegX3ywYtQKf1N.png', 'mostPopular', 'published', 1, NULL, '2021-09-29 16:30:20', '2021-09-29 16:30:20'),
(15, 'Ut Et Magni Ad Liber', 'ut-et-magni-ad-liber', 4, 'Sit rerum est velit', 'Beatae ut debitis pvr.', 'articles/fGfsqvuDv57ZtnKJd2ZX1SUUQsDDNbGcVhXmXF2r.png', 'mostPopular', 'published', 1, NULL, '2021-09-29 16:30:39', '2021-09-29 16:30:39'),
(16, 'Omnis Qui Omnis Dese', 'omnis-qui-omnis-dese', 4, 'Eligendi iure dolore', 'Aperiam nemo officia.h', 'articles/WXV0JRUjImylSHLR4k9dgbBu5Xw5Sdn882oQOOxY.png', 'mostPopular', 'published', 1, NULL, '2021-09-29 16:31:03', '2021-09-29 16:31:15'),
(17, 'Et Necessitatibus Au', 'et-necessitatibus-au', 2, 'Ut in velit qui eum', '<p>ffffffffffffffffffffffff</p>', 'articles/JWhbOEmIsvwQl5sG1mVCgli6usruialerwmdbzdZ.png', 'mostPopular', 'published', 1, NULL, '2021-09-29 16:31:53', '2021-09-29 16:31:53'),
(18, 'Modi Quae Libero Fug', 'modi-quae-libero-fug', 3, 'Rerum amet quae dol', 'Culpa aute mollit of.cv', 'articles/t5u6wYQV44yQVxBoFZePh9Xf7n2wIGukzqcSs3sk.jpg', 'slider-top', 'published', 1, NULL, '2021-09-29 17:00:49', '2021-09-29 17:00:49'),
(19, 'Laudantium Similiqu', 'laudantium-similiqu', 5, 'Qui soluta velit co', 'Expedita voluptatem .xd', 'articles/O4V1CwtdKlc1AYhQqpCONHiAkI2527nSJvLfLx7B.png', 'slider-top', 'published', 1, NULL, '2021-09-29 17:01:08', '2021-09-29 17:01:08'),
(20, 'Amet Est Anim Quia', 'amet-est-anim-quia', 5, 'Fuga Sed sed nobis', '<p>ffffffffffffffffffffffffffffffffffffff</p>', 'articles/DjnyWOGxqdWIEBqB9EVhFmCHBm9xxvwL8hD3AjYN.jpg', 'slider-top', 'published', 1, NULL, '2021-09-29 17:01:38', '2021-09-29 17:01:38'),
(21, 'Ducimus Incididunt', 'ducimus-incididunt', 3, 'Iure atque ut sint', 'Nisi atque itaque si.ghh', 'articles/zVZO2zIbRDgP1QfFx8RwVZvYCOlbJAcVSr1nHDY1.png', 'slider-top', 'published', 1, NULL, '2021-09-29 17:01:59', '2021-09-29 17:01:59'),
(22, 'Suscipit Ut Ut Obcae', 'suscipit-ut-ut-obcae', 5, 'Facere est quo fuga', 'Consequuntur eu poss.g', 'articles/WmTHefVzeqcd7xE7HybqTUUzjFoCzS5RGKdzO2ez.png', 'slider-top', 'published', 1, NULL, '2021-09-29 17:02:09', '2021-09-29 17:02:09'),
(23, 'In Dolore Dolorem Cillum Hic Sunt Ullam Sint Repellendus Corporis Voluptatem Velit Ipsa Rerum Es', 'in-dolore-dolorem-cillum-hic-sunt-ullam-sint-repellendus-corporis-voluptatem-velit-ipsa-rerum-es', 1, 'Incidunt enim aut est cupidatat ad velit officia aute recusandae Qui suscipit similique sint nis', 'Sed qui est, omnis magnam dolores id, error corporis maiores delectus, ipsa, tenetur unde qui laboru.n', 'articles/UavwAzxjwLOeO6Q5eUffFqS2TyHlvSTI6ApoAgXd.png', 'slider-top', 'published', 1, '2021-10-02 10:35:15', '2021-10-02 10:10:35', '2021-10-02 10:35:15'),
(24, 'Blanditiis Omnis Aspernatur Quisquam Est Vitae Sit Deserunt', 'blanditiis-omnis-aspernatur-quisquam-est-vitae-sit-deserunt', 3, 'Totam beatae lorem unde aspernatur amet tempore deserunt exercitationem blanditiis', 'Magni voluptas laboris in aliquip cumque adipisci temporibus odit odit totam qdddduia qui in et.', 'articles/z9fFpJIs6iGaBqucYCQNlgBCjsWIYCXAo07TT2nG.png', 'article', 'published', 1, NULL, '2021-10-07 18:32:37', '2021-10-07 18:32:49'),
(25, 'Officia Quae Magnam Officia Duis Aut Deserunt Omnis', 'officia-quae-magnam-officia-duis-aut-deserunt-omnis', 1, 'Unde aut voluptatem rerum maiores sed cillum voluptas tenetur consectetur sit tempore fugiat volup', 'Sit veniam, enim ipsa, vero animi, nihil maiores animi, aliquid voluptates id utdddd dolorum ullam volup.', 'articles/Ec0whAkEb44TNa0N7n4cNyZ3J1gdvJCsrspsH8Xa.png', 'article', 'published', 1, NULL, '2021-10-07 18:33:18', '2021-10-07 18:33:18'),
(26, 'Dolor Ipsum Enim Non Ipsam Eligendi Est Omnis Molestias Aut Voluptas Minus Explicabo Dolor Qui Id', 'dolor-ipsum-enim-non-ipsam-eligendi-est-omnis-molestias-aut-voluptas-minus-explicabo-dolor-qui-id', 4, 'Atque est facere aut deserunt dignissimos quisquam quo explicabo Sunt magna nostrud necessitatibus', 'Sed beatae voluptas proident, ad illo labore dfoloribus veniam, expedita minima ut perspiciatis, in q.', 'articles/xItCRngpoRZ60ZMuWBI21wYT2gvQ2rMyIyP8kRrK.png', 'article', 'published', 1, NULL, '2021-10-07 18:36:02', '2021-10-07 18:36:14'),
(27, 'Quae Exercitationem Tempore Labore Ullamco Tempora', 'quae-exercitationem-tempore-labore-ullamco-tempora', 5, 'Id dicta quas dolore laboriosam et', 'Laborum exercitation necessitatibus doloribus porro quisquam efos sed cum numquam quo eum quae archit.', 'articles/DyM9aQgAZMNT6ViDuzUMVO3bwoMzHffOb67fF12n.png', 'article', 'published', 1, NULL, '2021-10-07 18:36:39', '2021-10-07 18:36:39'),
(28, 'Autem Blanditiis Commodi Quisquam Mollitia Ut Nulla Enim Laboris Illum Quod Est Sunt Reprehenderi', 'autem-blanditiis-commodi-quisquam-mollitia-ut-nulla-enim-laboris-illum-quod-est-sunt-reprehenderi', 3, 'Laudantium voluptatem non ut inventore quisquam ut numquam aperiam excepteur ullam est voluptatem', 'Esse, rerum animi, id nisi distinctio. Totam doloremque dexcepteur eaque aliquip enim ea alias repreh.', 'articles/EfUqiueFFkPZ2OOPyWzScJM089mI0coaBMApQMMB.png', 'article', 'published', 1, NULL, '2021-10-08 10:41:08', '2021-10-08 10:41:08'),
(29, 'Sit Voluptate Porro Rerum Maiores Aut Minim Praesentium Itaque Consectetur Eaque Libero Eum Velit', 'sit-voluptate-porro-rerum-maiores-aut-minim-praesentium-itaque-consectetur-eaque-libero-eum-velit', 2, 'Dolorem consequatur porro ducimus recusandae Deleniti vel laudantium architecto ut incididunt dol', 'Sed ipsam qui voluptatem, officia repellenddus. Dolore sapiente exercitationem ut voluptatibus labore.', 'articles/63GJirfRA5dBqlsxjA1YUIVla6LdRR7nu6cZzRiy.png', 'article', 'published', 1, NULL, '2021-10-08 10:41:35', '2021-10-08 10:41:35'),
(30, 'Modi Architecto Commodo In Eveniet Deleniti Enim Labore Dicta Laborum Quisquam Perspiciatis Earum', 'modi-architecto-commodo-in-eveniet-deleniti-enim-labore-dicta-laborum-quisquam-perspiciatis-earum', 2, 'Modi asperiores velit velit dolore voluptatibus quod qui ut amet sit et temporibus omnis nesciunt', 'Et aliqua. Nam possimus, non sit, ut hic consdectetur quia omnis dolorem laboris dolores labore.', 'articles/CyfQ7e1WxQjIuff234EFjuYvuUCpufmQgFHJwmV2.png', 'article', 'published', 1, NULL, '2021-10-08 10:42:01', '2021-10-08 10:42:01'),
(31, 'Rem Provident Dolore Distinctio Facere Sit Dolorem A Soluta Est Provident Quia Dolores Itaque Ea', 'rem-provident-dolore-distinctio-facere-sit-dolorem-a-soluta-est-provident-quia-dolores-itaque-ea', 2, 'Neque sapiente aut dolores occaecat veniam sunt esse voluptatum nihil voluptas ullam ut dignissim', 'Omnis ullamco consequatur?d Ullamco accusamus incididunt quis laborum veniam, laborum. Asperiores bla.', 'articles/nXdwGRngkmlRnxtUCN6OtlQbh3mSS1TyZ5RIjTlk.png', 'article', 'published', 1, NULL, '2021-10-08 10:42:16', '2021-10-08 10:42:16'),
(32, 'Est Temporibus Qui Est Aut Ut Alias Amet', 'est-temporibus-qui-est-aut-ut-alias-amet', 4, 'Totam in iure architecto asperiores minus qui non accusantium eum ab dolores cupiditate qui', 'Et excepturi nesciunt, id numquam et utd reprehenderit, necessitatibus consequat. Anim pariatur? Aut .', 'articles/aA1HA8EvMCBC23S5GmliUhTz17vWMXQufVNDKWwt.png', 'article', 'published', 1, NULL, '2021-10-08 10:42:46', '2021-10-08 10:42:46'),
(33, 'Exercitation Nihil Nostrum Consequatur Optio Nam Velit', 'exercitation-nihil-nostrum-consequatur-optio-nam-velit', 4, 'Odio est ducimus voluptates quae excepteur totam obcaecati accusamus in', 'Sint, tempor aute Nam id conseqduuntur.', 'articles/hL87TMwLF1qqAoFwu9sHZoR6r6icOWp6tPNUiPRv.png', 'article', 'published', 1, NULL, '2021-10-08 10:43:01', '2021-10-08 10:43:01'),
(34, 'Aliqua Necessitatibus Sapiente Tempore Ullam Autem Sed Mollitia Illum Deserunt Reprehenderit', 'aliqua-necessitatibus-sapiente-tempore-ullam-autem-sed-mollitia-illum-deserunt-reprehenderit', 1, 'In recusandae Atque consequatur Do iusto id', 'Eos quisquam sit explicabo. Ndeque magna do facere reprehenderit, amet, veritatis quaerat voluptatum .', 'articles/4RSLwsdqNQHGTwFhX2HVXpMLnNtCUtDJUMVLlN1o.png', 'article', 'published', 1, NULL, '2021-10-08 10:43:21', '2021-10-08 10:43:21');

-- --------------------------------------------------------

--
-- Table structure for table `article_tag`
--

DROP TABLE IF EXISTS `article_tag`;
CREATE TABLE IF NOT EXISTS `article_tag` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `article_id` bigint UNSIGNED NOT NULL,
  `tag_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `article_tag_article_id_foreign` (`article_id`),
  KEY `article_tag_tag_id_foreign` (`tag_id`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article_tag`
--

INSERT INTO `article_tag` (`id`, `article_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 1, 3, NULL, NULL),
(2, 4, 5, NULL, NULL),
(3, 5, 3, NULL, NULL),
(4, 5, 4, NULL, NULL),
(5, 8, 5, NULL, NULL),
(6, 9, 1, NULL, NULL),
(7, 9, 4, NULL, NULL),
(9, 9, 2, NULL, NULL),
(10, 10, 4, NULL, NULL),
(11, 11, 1, NULL, NULL),
(12, 11, 4, NULL, NULL),
(13, 11, 2, NULL, NULL),
(14, 12, 5, NULL, NULL),
(15, 12, 3, NULL, NULL),
(16, 12, 6, NULL, NULL),
(17, 13, 3, NULL, NULL),
(18, 13, 1, NULL, NULL),
(19, 13, 6, NULL, NULL),
(20, 14, 3, NULL, NULL),
(21, 15, 4, NULL, NULL),
(22, 15, 6, NULL, NULL),
(23, 16, 5, NULL, NULL),
(24, 16, 4, NULL, NULL),
(25, 16, 2, NULL, NULL),
(26, 17, 5, NULL, NULL),
(27, 18, 3, NULL, NULL),
(28, 18, 1, NULL, NULL),
(29, 18, 4, NULL, NULL),
(30, 18, 2, NULL, NULL),
(31, 19, 3, NULL, NULL),
(32, 19, 1, NULL, NULL),
(33, 19, 6, NULL, NULL),
(34, 20, 5, NULL, NULL),
(35, 20, 3, NULL, NULL),
(36, 20, 1, NULL, NULL),
(37, 20, 2, NULL, NULL),
(38, 21, 5, NULL, NULL),
(39, 21, 3, NULL, NULL),
(40, 22, 3, NULL, NULL),
(41, 22, 1, NULL, NULL),
(42, 23, 2, NULL, NULL),
(43, 24, 5, NULL, NULL),
(44, 24, 4, NULL, NULL),
(45, 24, 6, NULL, NULL),
(46, 25, 5, NULL, NULL),
(47, 25, 1, NULL, NULL),
(48, 26, 5, NULL, NULL),
(49, 26, 4, NULL, NULL),
(50, 27, 5, NULL, NULL),
(51, 27, 3, NULL, NULL),
(52, 27, 1, NULL, NULL),
(53, 27, 4, NULL, NULL),
(54, 27, 6, NULL, NULL),
(55, 28, 3, NULL, NULL),
(56, 29, 3, NULL, NULL),
(57, 29, 1, NULL, NULL),
(58, 30, 5, NULL, NULL),
(59, 30, 3, NULL, NULL),
(60, 30, 4, NULL, NULL),
(61, 30, 2, NULL, NULL),
(62, 31, 3, NULL, NULL),
(63, 31, 6, NULL, NULL),
(64, 31, 2, NULL, NULL),
(65, 32, 5, NULL, NULL),
(66, 32, 1, NULL, NULL),
(67, 32, 6, NULL, NULL),
(68, 33, 3, NULL, NULL),
(69, 33, 4, NULL, NULL),
(70, 33, 2, NULL, NULL),
(71, 34, 5, NULL, NULL),
(72, 34, 3, NULL, NULL),
(73, 34, 1, NULL, NULL),
(74, 34, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Lifestyle', 'lifestyle', NULL, '2021-09-29 15:30:49', '2021-09-29 15:30:49'),
(2, 'Travel', 'travel', NULL, '2021-09-29 15:30:58', '2021-09-29 15:30:58'),
(3, 'Fashion', 'fashion', NULL, '2021-09-29 15:31:09', '2021-09-29 15:31:09'),
(4, 'Sports', 'sports', NULL, '2021-09-29 15:31:19', '2021-09-29 15:31:19'),
(5, 'Technology', 'technology', NULL, '2021-09-29 15:31:31', '2021-09-29 15:31:31');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_09_27_150838_create_categories_table', 1),
(6, '2021_09_27_150958_create_articles_table', 1),
(7, '2021_09_27_151010_create_tags_table', 1),
(8, '2021_09_27_192638_create_videos_table', 1),
(9, '2021_09_27_213322_create_article_tag_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tags_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Love', 'love', NULL, NULL),
(2, 'Travel', 'travel', NULL, NULL),
(3, 'Live Style', 'live-style', NULL, NULL),
(4, 'Project', 'project', NULL, NULL),
(5, 'Design', 'design', NULL, NULL),
(6, 'Restaurant', 'restaurant', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$55ImXvD4lkZm.hZIB7rEGODpZUyj304QEB1TgdSwb8s/D21mxd496', NULL, '2021-09-29 15:28:34', '2021-09-29 15:28:34');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
CREATE TABLE IF NOT EXISTS `videos` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `video`, `created_at`, `updated_at`) VALUES
(1, 'NewOld Spondon News - 2020', 'video/jv9f8KJrzq3ZtG9TI3uwaM9H4UCAOmX7urO6rGZM.mp4', '2021-09-29 15:47:11', '2021-09-29 15:47:11'),
(2, 'Banglades News Video', 'video/zoYMCZTfMmJhkXz4SInLx8rvkQqgPH7PpzF7szhY.mp4', '2021-09-29 15:47:44', '2021-09-29 15:47:44'),
(3, 'Latest Video - 2020', 'video/MSWtKmehZqPbIswS0XHKX6cmeXchcnPEtkGkw92l.mp4', '2021-09-29 15:48:11', '2021-09-29 15:48:11'),
(4, 'Spondon News -2019', 'video/RTX3eqjVeChLzdwJn5XO8RUp47QqOsRmN7mH3NHK.mp4', '2021-09-29 15:48:33', '2021-09-29 15:48:33');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `article_tag`
--
ALTER TABLE `article_tag`
  ADD CONSTRAINT `article_tag_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `article_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
