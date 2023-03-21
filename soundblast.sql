-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 21, 2023 lúc 02:59 PM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `soundblast`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `artist`
--

CREATE TABLE `artist` (
  `artistID` int(11) NOT NULL,
  `artistName` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `artist`
--

INSERT INTO `artist` (`artistID`, `artistName`) VALUES
(1, 'Super Stars'),
(2, 'MiiNa'),
(3, 'Passenger'),
(4, 'Hòa Minzy'),
(5, 'Minh Quân'),
(6, 'Emmce L'),
(7, 'Krix'),
(8, 'Czee'),
(9, 'Kai Đinh'),
(10, 'Đức Phúc'),
(11, 'Mỹ Linh'),
(12, 'Hiền Thục'),
(13, 'Uyên Pím'),
(14, 'Karik'),
(15, 'Lil Wuyn'),
(16, 'HIEUTHUHAI'),
(17, 'Hiền Hồ'),
(18, 'Phúc XP'),
(19, 'KxR'),
(20, 'MONO'),
(21, 'Freak D'),
(22, 'Min'),
(37, 'Ngọc Sơn'),
(38, 'Quang Lê'),
(39, 'Blacka'),
(40, 'Lyly'),
(41, 'Bích Phương'),
(42, 'Westlife');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `author`
--

CREATE TABLE `author` (
  `authorID` int(11) NOT NULL,
  `authorName` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `author`
--

INSERT INTO `author` (`authorID`, `authorName`) VALUES
(1, 'Nam Em'),
(3, 'Hiền Hồ'),
(4, 'Đen Vâu'),
(6, 'MiiNa'),
(9, 'Hòa Minzy'),
(10, 'Nam Em'),
(11, 'Emcee L'),
(12, 'Krix'),
(14, 'Kai Đinh'),
(15, 'Đức Phúc'),
(17, 'Simon C'),
(20, 'HIEUTHUHAI'),
(21, 'Hiền Hồ'),
(22, 'PhucXP'),
(23, 'O.lew'),
(24, 'MONO'),
(25, 'Karik'),
(26, 'Lil Wuyn'),
(27, 'Hoài An'),
(28, 'Huy Tuấn'),
(29, 'Passenger'),
(30, 'Super Stars'),
(31, 'Ngọc Sơn'),
(32, 'Quang Lê'),
(33, 'Huỳnh Hiền Năng'),
(34, 'Quang Huy'),
(35, 'Pelle Nylen');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `fbID` int(11) NOT NULL,
  `fbContent` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `userID` bigint(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `feedback`
--

INSERT INTO `feedback` (`fbID`, `fbContent`, `userID`) VALUES
(3, 'Trang web xịn quá', 3),
(5, 'trang web xịn xò', 3),
(6, 'Giao diện thân thiện, dễ sử dụng', 5),
(7, 'hihi', 3),
(8, 'hehe', 3),
(9, 'good system', 16);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `genre`
--

CREATE TABLE `genre` (
  `genreID` int(11) NOT NULL,
  `genreName` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `genre`
--

INSERT INTO `genre` (`genreID`, `genreName`) VALUES
(1, 'Nhạc Việt'),
(2, 'Nhạc Nước Ngoài'),
(3, 'Nhạc Rap'),
(4, 'Nhạc Trữ Tình'),
(5, 'Nhạc Xuân');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reviewsong`
--

CREATE TABLE `reviewsong` (
  `reviewID` int(11) NOT NULL,
  `reviewContent` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `songID` int(11) NOT NULL,
  `userID` bigint(11) UNSIGNED NOT NULL,
  `cmtAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `reviewsong`
--

INSERT INTO `reviewsong` (`reviewID`, `reviewContent`, `songID`, `userID`, `cmtAt`) VALUES
(2, 'Bài hát này hay quá', 12, 3, '2023-03-11 17:00:00'),
(3, 'hihi', 12, 3, '2023-03-11 17:00:00'),
(4, 'hihi', 12, 3, '2023-03-11 17:00:00'),
(5, 'haha', 12, 3, '2023-03-11 19:57:40'),
(6, 'kaka', 12, 3, '2023-03-11 20:00:01'),
(7, 'abc', 12, 3, '2023-03-11 20:00:18'),
(8, 'tuyệt vời', 12, 3, '2023-03-11 20:04:04'),
(9, 'tuyệt vời', 12, 3, '2023-03-11 20:10:12'),
(10, 'tuyệt vời', 12, 3, '2023-03-11 20:16:43'),
(14, 'chuyện cũ bỏ qua nha', 31, 3, '2023-03-16 06:42:15'),
(15, 'chuyện cũ bỏ qua nha', 31, 3, '2023-03-16 06:47:02'),
(16, 'bài hát hay quá', 4, 3, '2023-03-16 07:13:53'),
(17, 'hi', 4, 3, '2023-03-16 07:14:08'),
(18, 'ahah', 4, 3, '2023-03-16 07:14:17'),
(19, 'ạkdhhf', 4, 3, '2023-03-16 07:14:27'),
(20, 'fahkjdhf', 4, 3, '2023-03-16 07:14:33'),
(21, 'fahkjdhf', 4, 3, '2023-03-16 07:14:48'),
(22, 'fahkjdhf', 4, 3, '2023-03-16 07:15:03'),
(23, 'fahkjdhf', 4, 3, '2023-03-16 07:15:23'),
(24, 'hihi', 4, 6, '2023-03-16 07:16:36'),
(25, 'hihi', 4, 6, '2023-03-16 07:18:00'),
(26, 'hihi', 4, 6, '2023-03-16 07:19:19'),
(27, 'hihi', 4, 6, '2023-03-16 07:19:55'),
(28, 'hihi', 4, 6, '2023-03-16 07:20:36'),
(29, 'Thương', 23, 6, '2023-03-17 09:31:03'),
(30, 'Thương Thương', 23, 3, '2023-03-17 09:32:18'),
(31, 'Thương Thương', 23, 3, '2023-03-17 09:41:31'),
(32, 'Thương Thương', 23, 3, '2023-03-17 09:47:23'),
(33, 'Thương Thương', 23, 3, '2023-03-17 09:48:03'),
(34, 'Thương Thương', 23, 3, '2023-03-17 09:52:00'),
(35, 'Thương Thương', 23, 3, '2023-03-17 09:53:25'),
(36, 'Thương Thương', 23, 3, '2023-03-17 09:54:17'),
(37, 'Thương Thương', 23, 3, '2023-03-17 09:54:47'),
(38, 'Thương Thương', 23, 3, '2023-03-17 09:57:38'),
(39, 'Thương Thương', 23, 3, '2023-03-17 09:58:06'),
(40, 'Thương Thương', 23, 3, '2023-03-17 09:58:38'),
(41, 'Thương Thương', 23, 3, '2023-03-17 09:58:54'),
(42, 'Thương Thương', 23, 3, '2023-03-17 09:59:10'),
(43, 'Thương Thương', 23, 3, '2023-03-17 10:01:44'),
(44, 'Thương Thương', 23, 3, '2023-03-17 10:02:17'),
(45, 'Thương Thương', 23, 3, '2023-03-17 10:02:53'),
(46, 'Thương Thương', 23, 3, '2023-03-17 10:03:22'),
(47, 'Thương Thương', 23, 3, '2023-03-17 10:03:42'),
(48, 'Thương Thương', 23, 3, '2023-03-17 10:04:10'),
(49, 'Thương Thương', 23, 3, '2023-03-17 10:04:33'),
(50, 'Thương Thương', 23, 3, '2023-03-17 10:04:45'),
(51, 'Thương Thương', 23, 3, '2023-03-17 10:05:19'),
(52, 'Thương Thương', 23, 3, '2023-03-17 10:06:39'),
(53, 'Thương Thương', 23, 3, '2023-03-17 10:08:33'),
(54, 'Thương Thương', 23, 3, '2023-03-17 10:11:02'),
(55, 'Thương Thương', 23, 3, '2023-03-17 10:11:33'),
(56, 'Thương Thương', 23, 3, '2023-03-17 10:12:06'),
(57, 'Thương Thương', 23, 3, '2023-03-17 10:12:38'),
(58, 'Thương Thương', 23, 3, '2023-03-17 10:12:50'),
(59, 'Thương Thương', 23, 3, '2023-03-17 10:13:34'),
(60, 'Thương Thương', 23, 3, '2023-03-17 10:14:03'),
(61, 'Thương Thương', 23, 3, '2023-03-17 10:14:44'),
(62, 'abc', 25, 3, '2023-03-17 21:30:56'),
(63, 'hello. the song is great', 20, 16, '2023-03-21 06:01:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `song`
--

CREATE TABLE `song` (
  `songID` int(11) NOT NULL,
  `songName` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `img` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL DEFAULT 'default.png',
  `mp3` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `authorID` int(11) NOT NULL,
  `genresID` int(11) NOT NULL,
  `numberOfLike` int(11) NOT NULL DEFAULT 0,
  `numberOfHear` int(11) NOT NULL DEFAULT 0,
  `numberOfSearch` int(11) NOT NULL DEFAULT 0,
  `createAt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `song`
--

INSERT INTO `song` (`songID`, `songName`, `img`, `mp3`, `authorID`, `genresID`, `numberOfLike`, `numberOfHear`, `numberOfSearch`, `createAt`) VALUES
(1, 'Phi Hành Gia', 'phihanhgia.png', 'phihanhgia.mp3', 26, 3, 11, 17, 45, '2023-03-10'),
(2, 'Câu Chuyện Đầu Năm', 'cauchuyendaunam.png', 'cauchuyendaunam.mp3', 27, 5, 19, 19, 13, '2023-03-15'),
(3, '11:11', '1111.png', '1111.mp3', 6, 1, 13, 17, 17, '2023-03-08'),
(4, 'Let Her go', 'lethergo.png', 'lethergo.mp3', 29, 2, 10, 14, 20, '2023-03-12'),
(5, 'Bật Tình Yêu Lên', 'battinhyeulen.png', 'battinhyeulen.mp3', 9, 1, 18, 20, 18, '2023-03-01'),
(7, 'Chuyện Đôi Ta', 'chuyendoita.png', 'chuyendoita.mp3', 11, 1, 14, 13, 21, '2023-03-12'),
(12, 'Em Đồng Ý', 'emdongy.png', 'emdongy.mp3', 15, 1, 21, 25, 69, '2023-03-05'),
(19, 'Người Rất Tốt Không Gặp Sẽ Tốt Hơn', 'nguoirattotkhonggapsetothon.png', 'nguoirattotkhonggapsetothon.mp3', 21, 1, 11, 13, 20, '2023-03-01'),
(20, 'Như Anh Đã Thấy Em', 'nhuanhdathayem.jpg', 'nhuanhdathayem.mp3', 22, 1, 12, 17, 96, '2023-03-11'),
(22, 'Waiting For You', 'waitingforyou.png', 'waitingforyou.mp3', 24, 1, 20, 15, 25, '2023-03-04'),
(23, 'Thương', 'thuong.png', 'thuong.mp3', 25, 3, 18, 22, 17, '2023-03-14'),
(24, 'Khúc Giao Mùa', 'khucgiaomua.png', 'khucgiaomua.mp3', 28, 5, 11, 16, 27, '2023-03-15'),
(25, 'Cry On My Shoulder ', 'cryonmyshoulder.png', 'cryonmyshoulder.mp3', 30, 2, 12, 21, 16, '2023-03-15'),
(26, 'Ngủ Một Mình', 'ngumotminh.png', 'ngumotminh.png', 20, 1, 11, 22, 18, '2023-03-07'),
(27, 'Hát nữa đi em', 'hatnuadiem.png', 'hatnuadiem.mp3', 31, 4, 17, 19, 59, '2023-03-08'),
(28, 'Đập Vỡ Cây Đàn', 'dapvocaydan.png', 'dapvocaydan.png', 32, 4, 19, 11, 22, '2023-03-09'),
(29, 'Vượt Chướng Ngại Vật', 'vuotchuongngaivat.png', 'vuotchuongngaivat.mp3', 26, 3, 21, 22, 21, '2023-03-09'),
(30, 'Lời Đường Mật', 'loiduongmat.png', 'loiduongmat.mp3', 20, 3, 13, 16, 19, '2023-03-11'),
(31, 'Chuyện Cũ Bỏ Qua', 'chuyencuboqua.png', 'chuyencuboqua.mp3', 33, 5, 15, 17, 25, '2023-03-03'),
(32, 'Ngày Xuân Long Phụng', 'ngayxuanlongphung.png', 'ngayxuanlongphung.mp3', 34, 5, 12, 18, 25, '2023-03-13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `song-artist`
--

CREATE TABLE `song-artist` (
  `song-artistID` int(11) NOT NULL,
  `songID` int(11) NOT NULL,
  `artistID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `song-artist`
--

INSERT INTO `song-artist` (`song-artistID`, `songID`, `artistID`) VALUES
(29, 1, 15),
(34, 2, 12),
(2, 3, 2),
(32, 4, 3),
(3, 5, 4),
(6, 5, 9),
(5, 7, 6),
(11, 12, 10),
(24, 19, 17),
(9, 20, 18),
(10, 20, 21),
(13, 22, 20),
(31, 23, 13),
(30, 23, 14),
(28, 24, 5),
(27, 24, 11),
(33, 25, 1),
(35, 26, 16),
(36, 27, 37),
(37, 28, 38),
(38, 29, 15),
(39, 29, 39),
(41, 30, 16),
(40, 30, 40),
(42, 31, 41),
(43, 32, 41);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user-song`
--

CREATE TABLE `user-song` (
  `user-songID` int(11) NOT NULL,
  `userID` bigint(20) UNSIGNED NOT NULL,
  `songID` int(11) NOT NULL,
  `accessAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `user-song`
--

INSERT INTO `user-song` (`user-songID`, `userID`, `songID`, `accessAt`) VALUES
(95, 3, 25, '2023-03-19 08:05:20'),
(96, 3, 2, '2023-03-19 08:05:22'),
(97, 3, 24, '2023-03-19 08:05:24'),
(98, 3, 23, '2023-03-19 08:05:28'),
(99, 3, 32, '2023-03-19 08:05:30'),
(100, 3, 4, '2023-03-19 08:05:34'),
(101, 3, 7, '2023-03-19 08:05:36'),
(102, 3, 20, '2023-03-19 08:05:39'),
(103, 3, 30, '2023-03-19 08:05:45'),
(105, 3, 1, '2023-03-19 08:05:50'),
(106, 3, 29, '2023-03-19 08:05:52'),
(107, 3, 28, '2023-03-19 08:05:54'),
(108, 3, 27, '2023-03-19 08:05:58'),
(109, 3, 3, '2023-03-19 08:06:00'),
(110, 3, 26, '2023-03-19 08:06:04'),
(111, 3, 26, '2023-03-19 08:06:13'),
(112, 3, 26, '2023-03-19 08:07:28'),
(113, 3, 25, '2023-03-21 05:53:57'),
(114, 16, 25, '2023-03-21 05:59:04'),
(115, 16, 23, '2023-03-21 05:59:10'),
(116, 16, 22, '2023-03-21 06:00:16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `img`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'a', NULL, NULL, '$2y$10$iahFAxp7YCMPDOsZ1r9LSeTWXqrV9mfirWZgRVy2DnW0dWI9lKwxe', 'avatar.jpg', NULL, '2023-03-10 23:35:44', '2023-03-10 23:35:44'),
(3, 'tuananh', NULL, NULL, '$2y$10$atye8YXB1/AUpPoiqWOYBeUo40x2Ctciu70NhphyWkSE1igCu0C5a', 'tuananh.jpg', NULL, '2023-03-10 23:45:52', '2023-03-10 23:45:52'),
(5, 'tuananh1', NULL, NULL, '$2y$10$gjXOYIVhvVUbNvOU.eZSX.8ZLILg/grYvL3ld1xvAEZO6b3K67g5i', 'default.jpg', NULL, '2023-03-12 08:47:32', '2023-03-12 08:47:32'),
(6, 'tuananh2', NULL, NULL, '$2y$10$w7Ei7ltTbcqh77m29frqL.jL7fkgUjYP3nrf1qE.aOGAfR.3tJMky', 'default.jpg', NULL, '2023-03-12 08:50:19', '2023-03-12 08:50:19'),
(7, 'tuananhdinh', NULL, NULL, '$2y$10$sAaDnP2kb25bZ5XqXgFEteGZE189jmFLCCYcKjwZYB0ZZBZmdCAM2', 'IMG_0055-2.jpg', NULL, '2023-03-12 08:52:34', '2023-03-12 08:52:34'),
(8, 'khanhnhat29', NULL, NULL, '$2y$10$beZf.ek1GNdGzp25PfJjruRueceEO3xYg1QRylRkjbo8Kii0wtmA.', 'z3701594475056_28977d117a12ff614933134bdf8d5c52.jpg', NULL, '2023-03-12 10:41:56', '2023-03-12 10:41:56'),
(9, 'khanhnhat', NULL, NULL, '$2y$10$Lg2HKMmeuiqBHnElweUcxuWuzAPsojuzBbigw9/JSztX40DgHRD4S', 'z3701594475056_28977d117a12ff614933134bdf8d5c52.jpg', NULL, '2023-03-12 22:36:58', '2023-03-12 22:36:58'),
(13, 'nhat12', NULL, NULL, '$2y$10$sV1sfWVS6f2HWUj1JrQGX.o4zrzCPBRh/cpqtpBaGfvXHUSv2A5Xq', 'logo.png', NULL, '2023-03-13 05:59:53', '2023-03-13 05:59:53'),
(14, 'em', NULL, NULL, '$2y$10$UM78d34VYiEOJwA7mQPXbeCQXEj.xu7GgyGAr.SKTQxrqrYzPvw16', 'logo.png', NULL, '2023-03-13 06:46:02', '2023-03-13 06:46:02'),
(15, 'nhat123', NULL, NULL, '$2y$10$2XBW4XTJzMB5/6oYBv3ZTOY0WBddKDh0C.il/kw9uS7Sf8dAQ2msS', 'logo.png', NULL, '2023-03-14 02:02:59', '2023-03-14 02:02:59'),
(16, 'tuananh1234', NULL, NULL, '$2y$10$KoCx8ruqUzNezwlqPXuYOuPMnlLwOnHEn1lv3a64KZS8l5HhGc6EO', 'default.jpg', NULL, '2023-03-21 05:58:14', '2023-03-21 05:58:14');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`artistID`);

--
-- Chỉ mục cho bảng `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`authorID`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fbID`),
  ADD KEY `userID` (`userID`);

--
-- Chỉ mục cho bảng `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genreID`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `reviewsong`
--
ALTER TABLE `reviewsong`
  ADD PRIMARY KEY (`reviewID`),
  ADD KEY `songID` (`songID`,`userID`),
  ADD KEY `userID` (`userID`);

--
-- Chỉ mục cho bảng `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`songID`),
  ADD KEY `artistID` (`authorID`,`genresID`),
  ADD KEY `authorID` (`authorID`),
  ADD KEY `genresID` (`genresID`);

--
-- Chỉ mục cho bảng `song-artist`
--
ALTER TABLE `song-artist`
  ADD PRIMARY KEY (`song-artistID`),
  ADD KEY `songID` (`songID`,`artistID`),
  ADD KEY `artistID` (`artistID`);

--
-- Chỉ mục cho bảng `user-song`
--
ALTER TABLE `user-song`
  ADD PRIMARY KEY (`user-songID`),
  ADD KEY `songID` (`songID`),
  ADD KEY `userID` (`userID`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_name_unique` (`name`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `artist`
--
ALTER TABLE `artist`
  MODIFY `artistID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `author`
--
ALTER TABLE `author`
  MODIFY `authorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fbID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `genre`
--
ALTER TABLE `genre`
  MODIFY `genreID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `reviewsong`
--
ALTER TABLE `reviewsong`
  MODIFY `reviewID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT cho bảng `song`
--
ALTER TABLE `song`
  MODIFY `songID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `song-artist`
--
ALTER TABLE `song-artist`
  MODIFY `song-artistID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT cho bảng `user-song`
--
ALTER TABLE `user-song`
  MODIFY `user-songID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `reviewsong`
--
ALTER TABLE `reviewsong`
  ADD CONSTRAINT `reviewsong_ibfk_1` FOREIGN KEY (`songID`) REFERENCES `song` (`songID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reviewsong_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `song`
--
ALTER TABLE `song`
  ADD CONSTRAINT `song_ibfk_2` FOREIGN KEY (`authorID`) REFERENCES `author` (`authorID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `song_ibfk_3` FOREIGN KEY (`genresID`) REFERENCES `genre` (`genreID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `song-artist`
--
ALTER TABLE `song-artist`
  ADD CONSTRAINT `song-artist_ibfk_1` FOREIGN KEY (`songID`) REFERENCES `song` (`songID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `song-artist_ibfk_2` FOREIGN KEY (`artistID`) REFERENCES `artist` (`artistID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `user-song`
--
ALTER TABLE `user-song`
  ADD CONSTRAINT `user-song_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user-song_ibfk_2` FOREIGN KEY (`songID`) REFERENCES `song` (`songID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
