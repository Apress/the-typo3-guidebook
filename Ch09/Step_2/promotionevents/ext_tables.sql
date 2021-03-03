CREATE TABLE tx_promotionevents_domain_model_event (
    title varchar(200) DEFAULT '',
    description text DEFAULT '' NOT NULL,
    promotiondate DATE,
    promotiontime TIME,
    location varchar(200) DEFAULT '',
    locationlink varchar(1024) DEFAULT ''
);
