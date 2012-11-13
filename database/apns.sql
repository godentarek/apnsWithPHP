-- ----------------------------
--  Table structure for `apns_channels`
-- ----------------------------
DROP TABLE IF EXISTS `apns_channels`;
CREATE TABLE `apns_channels` (
  `channel_id` int(11) NOT NULL AUTO_INCREMENT,
  `channel_name` varchar(255) NOT NULL,
  `app_id` int(11) NOT NULL,
  PRIMARY KEY (`channel_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `apns_queue`
-- ----------------------------
DROP TABLE IF EXISTS `apns_queue`;
CREATE TABLE `apns_queue` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `device_token` varchar(64) NOT NULL,
  `payload` varchar(256) NOT NULL,
  `time_queued` datetime NOT NULL,
  `time_sent` datetime DEFAULT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `apns_users`
-- ----------------------------
DROP TABLE IF EXISTS `apns_users`;
CREATE TABLE `apns_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `app_id` varchar(255) NOT NULL,
  `udid` varchar(40) NOT NULL,
  `device_token` varchar(64) NOT NULL,
  `subscribed_channel` int(11) NOT NULL,
  `ip` varchar(256) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;
