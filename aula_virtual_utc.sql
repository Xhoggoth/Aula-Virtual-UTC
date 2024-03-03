-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-03-2024 a las 03:39:16
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: ` aula_virtual_utc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `user_id` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `status` varchar(250) DEFAULT NULL,
  `role_name` varchar(250) DEFAULT NULL,
  `avatar` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(250) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_08_12_000000_create_users_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2022_08_03_061844_create_user_types_table', 1),
(4, '2022_08_03_061918_create_role_type_users_table', 1),
(5, '2022_08_04_053627_create_sequence_tbls_table', 1),
(6, '2022_08_04_053741_create_generate_id_tbls_table', 1),
(7, '2023_02_26_224452_create_students_table', 1),
(8, '2023_04_17_223959_create_teachers_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(250) DEFAULT NULL,
  `tokenable_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `token` varchar(64) DEFAULT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_type_users`
--

CREATE TABLE `role_type_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_type` varchar(250) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `role_type_users`
--

INSERT INTO `role_type_users` (`id`, `role_type`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(4, 'Teachers', NULL, NULL),
(5, 'Student', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(250) DEFAULT NULL,
  `last_name` varchar(250) DEFAULT NULL,
  `gender` varchar(250) DEFAULT NULL,
  `date_of_birth` varchar(250) DEFAULT NULL,
  `roll` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `class` varchar(250) DEFAULT NULL,
  `section` varchar(250) DEFAULT NULL,
  `admission_id` varchar(250) DEFAULT NULL,
  `phone_number` varchar(250) DEFAULT NULL,
  `upload` varchar(250) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` varchar(250) DEFAULT NULL,
  `full_name` varchar(250) DEFAULT NULL,
  `gender` varchar(250) DEFAULT NULL,
  `date_of_birth` varchar(250) DEFAULT NULL,
  `mobile` varchar(250) DEFAULT NULL,
  `joining_date` varchar(250) DEFAULT NULL,
  `qualification` varchar(250) DEFAULT NULL,
  `experience` varchar(250) DEFAULT NULL,
  `username` varchar(250) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `city` varchar(250) DEFAULT NULL,
  `state` varchar(250) DEFAULT NULL,
  `zip_code` varchar(250) DEFAULT NULL,
  `country` varchar(250) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `user_id` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `join_date` varchar(250) DEFAULT NULL,
  `phone_number` varchar(250) DEFAULT NULL,
  `status` varchar(250) DEFAULT NULL,
  `role_name` varchar(250) DEFAULT NULL,
  `avatar` varchar(250) DEFAULT NULL,
  `position` varchar(250) DEFAULT NULL,
  `department` varchar(250) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(250) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_types`
--

CREATE TABLE `user_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_name` varchar(250) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `user_types`
--

INSERT INTO `user_types` (`id`, `type_name`, `created_at`, `updated_at`) VALUES
(1, 'Active', NULL, NULL),
(2, 'Inactive', NULL, NULL),
(3, 'Disable', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `role_name` (`role_name`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD KEY `tokenable_type` (`tokenable_type`),
  ADD KEY `tokenable_id` (`tokenable_id`),
  ADD KEY `token` (`token`);

--
-- Indices de la tabla `role_type_users`
--
ALTER TABLE `role_type_users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_idd` (`user_id`);

--
-- Indices de la tabla `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `role_type_users`
--
ALTER TABLE `role_type_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `user_types`
--
ALTER TABLE `user_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user_types` (`id`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `personal_access_tokens` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
