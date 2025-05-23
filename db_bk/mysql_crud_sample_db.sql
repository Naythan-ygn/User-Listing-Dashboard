
CREATE SCHEMA `mysql_crud_sample_db_8` DEFAULT CHARACTER SET utf8 ;
USE `mysql_crud_sample_db_8` ;

CREATE TABLE `Persons` (
  `id` int NOT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `postal_code` varchar(45) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `remark` varchar(255) DEFAULT NULL,
  `created_by` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_by` int DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `edu_finished_high_school` tinyint NOT NULL DEFAULT '0',
  `edu_got_degree` tinyint NOT NULL DEFAULT '0',
  `edu_got_master` tinyint NOT NULL DEFAULT '0',
  `title` tinyint NOT NULL DEFAULT '1',
  `martial_status` tinyint NOT NULL DEFAULT '1',
  `gender` int NOT NULL DEFAULT '1',
  `password` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT 'password',
  `profile_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;


ALTER TABLE `Persons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

ALTER TABLE `Persons`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;