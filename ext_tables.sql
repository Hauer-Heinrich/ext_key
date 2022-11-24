CREATE TABLE tx_extkey_domain_model_address (
    title varchar(255) NOT NULL DEFAULT '',
    name varchar(255) NOT NULL DEFAULT '',
    slug varchar(255) NOT NULL DEFAULT '',
    image int(11) unsigned NOT NULL DEFAULT '0',
    description text,
    categories int(11) unsigned DEFAULT '0' NOT NULL
);
