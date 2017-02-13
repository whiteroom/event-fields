#
# Table structure for table 'tx_news_domain_model_news'
#
CREATE TABLE tx_news_domain_model_news (

	event_title varchar(255) DEFAULT '' NOT NULL,
	event_type varchar(255) DEFAULT '' NOT NULL,
	event_speaker varchar(255) DEFAULT '' NOT NULL,
	event_language varchar(255) DEFAULT '' NOT NULL,
	event_date int(11) DEFAULT '0' NOT NULL,
	event_time varchar(255) DEFAULT '' NOT NULL,
	event_opening_hours varchar(255) DEFAULT '' NOT NULL,
	event_end varchar(255) DEFAULT '' NOT NULL,
	fee_free tinyint(1) unsigned DEFAULT '0' NOT NULL,
	fee varchar(255) DEFAULT '' NOT NULL,
	event_currency varchar(255) DEFAULT '' NOT NULL,
	location varchar(255) DEFAULT '' NOT NULL,
	location_street varchar(255) DEFAULT '' NOT NULL,
	location_city varchar(255) DEFAULT '' NOT NULL,
	location_country varchar(255) DEFAULT '' NOT NULL,
	location_wheelchair_accessible tinyint(1) unsigned DEFAULT '0' NOT NULL,
	organizer varchar(255) DEFAULT '' NOT NULL,
	organizer_www varchar(255) DEFAULT '' NOT NULL,
	organizer_email varchar(255) DEFAULT '' NOT NULL,
	registration_until varchar(255) DEFAULT '' NOT NULL,
	notes text NOT NULL,
	subheader varchar(255) DEFAULT '' NOT NULL,
	frontend_user int(11) DEFAULT '0' NOT NULL,

);
