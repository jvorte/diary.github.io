-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Εξυπηρετητής: 127.0.0.1
-- Χρόνος δημιουργίας: 21 Ιουλ 2021 στις 10:38:23
-- Έκδοση διακομιστή: 10.4.18-MariaDB
-- Έκδοση PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `diary`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `comments`
--

INSERT INTO `comments` (`id`, `user_name`, `post_id`, `comment`, `created_at`, `updated_at`) VALUES
(4, 'Oscar', 23, 'bgbgbgbg', '2021-06-22 09:44:34', '2021-06-22 09:44:34');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `body`, `created_at`, `updated_at`) VALUES
(12, 'Dimitrios Vortelinas', 'jvortelinas@gmail.com', '068864818152', '', '2021-06-22 12:31:25', '2021-06-22 12:31:25'),
(13, 'Dimitrios Vortelinas', 'jvortelinas@gmail.com', '068864818152', '', '2021-06-22 12:36:01', '2021-06-22 12:36:01'),
(14, 'Dimitrios Vortelinas', 'jvortelinas@gmail.com', '068864818152', 'gegegege', '2021-06-23 03:45:05', '2021-06-23 03:45:05'),
(15, 'Dimitrios Vortelinas', 'jvortelinas@gmail.com', '068864818152', 'rrrrrrrrrrrrrr', '2021-06-23 03:45:53', '2021-06-23 03:45:53');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `failed_jobs`
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
-- Δομή πίνακα για τον πίνακα `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_06_18_085826_create_table_posts', 1),
(5, '2021_06_21_081757_table_contact', 2),
(6, '2021_06_21_112809_create_comments_table', 3),
(7, '2021_06_21_114138_create_replays_table', 3),
(8, '2021_06_22_084103_add_image_to_posts', 4),
(9, '2021_06_22_083939_add_image_post', 5),
(10, '2021_06_22_084016_add_image_posts', 5),
(11, '2021_06_22_124341_create_table_contacts', 6);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created_at`, `updated_at`, `user_name`, `image`) VALUES
(25, 'DIMITRIOS', 'cfdefe', '2021-06-23 04:11:03', '2021-06-23 04:11:03', 'Oscar', NULL),
(26, 'DIMITRIOS', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque nemo asperiores molestias quas quos vero perspiciatis enim et atque hic laborum odio labore commodi vitae possimus ullam numquam, porro quia voluptate. Impedit esse dolorum reprehenderit neque adipisci vitae incidunt accusamus tempore voluptatibus, harum quidem veniam tempora ea consequuntur repellendus. Voluptate officiis, vitae voluptas ratione hic consequuntur architecto earum suscipit ipsa iure recusandae voluptatum, veniam ducimus libero repudiandae mollitia enim vero eum dolor tenetur dolore praesentium debitis. Aliquid deserunt pariatur libero voluptate adipisci rerum soluta porro nulla earum sequi perferendis dolores numquam beatae dolorum, possimus expedita voluptatibus suscipit? Minus soluta quidem fuga illo qui quo exercitationem itaque reiciendis molestias tenetur harum commodi quae quas et rerum debitis, incidunt modi laborum enim porro veritatis? Libero expedita rem dolores, provident illum alias quasi eos rerum iste adipisci temporibus saepe impedit, sequi debitis aliquam nesciunt totam non qui! Quam est dolorum, alias laudantium vel tempore debitis consequuntur voluptas. Id quae, architecto autem expedita voluptatibus, nostrum cumque eligendi nisi laboriosam ex perferendis laudantium eveniet quisquam suscipit ratione! Non reprehenderit vel similique et culpa tempore, illo quibusdam iusto ut pariatur qui laboriosam aperiam consequuntur ad placeat eligendi quae deleniti officiis quod quasi fugit doloremque? Itaque, culpa saepe! Commodi iusto nihil deserunt quasi quo optio ipsam animi ad odit assumenda magnam nisi hic, eaque molestias accusantium est. Placeat voluptatem illo adipisci dolorum doloremque soluta officia eveniet. Quam vitae, atque enim numquam, culpa maiores natus, obcaecati sequi nesciunt sapiente asperiores dolorem soluta doloremque explicabo autem unde. Quos maxime, beatae accusantium hic quia saepe et blanditiis ullam provident voluptates cupiditate tempore dolore laudantium sit harum cum natus voluptatem vero repudiandae quo at officiis aperiam nobis! Rem natus mollitia vel voluptatum minus, voluptatem distinctio nam, corrupti officiis accusantium blanditiis, optio do', '2021-06-23 04:57:56', '2021-06-23 04:57:56', 'Oscar', '1624431475animated-sun-image-0334.gif');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `replays`
--

CREATE TABLE `replays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `replay` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dimitrios Vortelinas', 'jvortelinas@gmail.com', NULL, '$2y$10$gnXC3kIGpGVnLO6I9gCxFOq.2SlGBFoqE6TVIwVoUDC8xozTSIDEq', NULL, '2021-06-18 11:45:42', '2021-06-18 11:45:42'),
(2, 'Oscar', 'dvortelinas@gmail.com', NULL, '$2y$10$/bEYx0jSEzPCPenM97TJ..RYiVevhlcpb4qYaQ3DFyEpC/6pl0zVu', NULL, '2021-06-21 03:44:20', '2021-06-21 03:44:20');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Ευρετήρια για πίνακα `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Ευρετήρια για πίνακα `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `replays`
--
ALTER TABLE `replays`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT για πίνακα `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT για πίνακα `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT για πίνακα `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT για πίνακα `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT για πίνακα `replays`
--
ALTER TABLE `replays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT για πίνακα `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
