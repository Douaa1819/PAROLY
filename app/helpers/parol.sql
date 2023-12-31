CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `role` enum('admin','client','artist') DEFAULT NULL,
  `additional` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `genre` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `album` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `genre_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `lyrics` (
  `id` int(11) NOT NULL,
  `name_lyrics` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `song` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `album_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `lyrics_song` (
  `id` int(11) NOT NULL,
  `lyrics_id` int(11) DEFAULT NULL,
  `song_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `playliste` (
  `playliste_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `rating` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `lyrics_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `reclamation` (
  `id` int(11) NOT NULL,
  `type_reclamation` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `lyrics_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `song_playlist` (
  `id` int(11) NOT NULL,
  `playlist_id` int(11) DEFAULT NULL,
  `song_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;





ALTER TABLE `album`
  ADD PRIMARY KEY (`id`),
  ADD KEY `genre_id` (`genre_id`);


ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `lyrics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

ALTER TABLE `lyrics_song`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lyrics_id` (`lyrics_id`),
  ADD KEY `song_id` (`song_id`);


ALTER TABLE `playliste`
  ADD PRIMARY KEY (`playliste_id`),
  ADD KEY `user_id` (`user_id`);


ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `lyrics_id` (`lyrics_id`);

ALTER TABLE `reclamation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `lyrics_id` (`lyrics_id`);


ALTER TABLE `song`
  ADD PRIMARY KEY (`id`),
  ADD KEY `album_id` (`album_id`);

ALTER TABLE `song_playlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `playlist_id` (`playlist_id`),
  ADD KEY `song_id` (`song_id`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);


ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `song_playlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `album`
  ADD CONSTRAINT `album_ibfk_1` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`id`);


ALTER TABLE `lyrics`
  ADD CONSTRAINT `lyrics_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);


ALTER TABLE `lyrics_song`
  ADD CONSTRAINT `lyrics_song_ibfk_1` FOREIGN KEY (`lyrics_id`) REFERENCES `lyrics` (`id`),
  ADD CONSTRAINT `lyrics_song_ibfk_2` FOREIGN KEY (`song_id`) REFERENCES `song` (`id`);


ALTER TABLE `playliste`
  ADD CONSTRAINT `playliste_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);


ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `rating_ibfk_2` FOREIGN KEY (`lyrics_id`) REFERENCES `lyrics` (`id`);

ALTER TABLE `reclamation`
  ADD CONSTRAINT `reclamation_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `reclamation_ibfk_2` FOREIGN KEY (`lyrics_id`) REFERENCES `lyrics` (`id`);

ALTER TABLE `song`
  ADD CONSTRAINT `song_ibfk_2` FOREIGN KEY (`album_id`) REFERENCES `album` (`id`);


ALTER TABLE `song_playlist`
  ADD CONSTRAINT `song_playlist_ibfk_1` FOREIGN KEY (`playlist_id`) REFERENCES `playliste` (`playliste_id`),
  ADD CONSTRAINT `song_playlist_ibfk_2` FOREIGN KEY (`song_id`) REFERENCES `song` (`id`);


