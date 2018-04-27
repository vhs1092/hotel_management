CREATE TABLE IF NOT EXISTS `PREFIX_htl_testimonials_block_data` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(255) NOT NULL,
	`designation` text NOT NULL,
	`testimonial_content` text NOT NULL,
	`testimonial_image` text NOT NULL,
	`active` tinyint(1) NOT NULL,
  	`position` int(11) NOT NULL,
	`date_add` datetime NOT NULL,
	`date_upd` datetime NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
