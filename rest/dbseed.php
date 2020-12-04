<?php
/**
 * Creates basic database scheme and fill fixtures
 */

require "bootstrap.php";

$statement = <<<EOS
                    CREATE TABLE `posts` (
                        `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                        `user_id` int(11) DEFAULT NULL,
                        `title` varchar(255) NOT NULL,
                        `views` int(11) NOT NULL DEFAULT '0',
                        `image` varchar(255) NOT NULL,
                        `body` text NOT NULL,
                        `published` tinyint(1) NOT NULL,
                        `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                        `updated_at` timestamp NOT NULL DEFAULT '2020-11-25 22:00:00',
                        FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
                    ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
                    
                    
                    INSERT INTO `posts` (`id`, `user_id`, `title`, `views`, `image`, `body`, `published`, `created_at`, `updated_at`) VALUES
                    (1, 1, 'First post', 0, 'post.jpg', 'This is the body of the second post on this site', 1, '2020-11-12 13:52:58', '2020-11-12 13:52:58'),
                    (2, 1, 'Second post', 0, 'post.jpg', 'This is the body of the second post on this site', 0, '2020-11-12 12:54:58', '2020-11-12 12:54:58');
                    
                    CREATE TABLE `categories` (
                        `id` int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
                        `name` varchar(255) NOT NULL
                    ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
                    
                    CREATE TABLE `post_categories` (
                        `id` int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
                        `post_id` int(11) DEFAULT NULL,
                        `category_id` int(11) DEFAULT NULL,
                        FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
                        FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
                    ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
                    
                    INSERT INTO `categories` (`id`, `name`) VALUES
                    (1, 'News'),
                    (2, 'Sport'),
                    (3, 'Lifestyle');
                    
                    INSERT INTO `post_categories` (`id`, `post_id`, `category_id`) VALUES
                    (1, 1, 1),
                    (2, 2, 2);
    EOS;

try {
    $query = $db->exec($statement);
    echo "Tables created!\n";
} catch (\PDOException $e) {
    exit($e->getMessage());
}
