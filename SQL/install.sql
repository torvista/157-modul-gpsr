##################################################################################
# GPSR Herstellerinformationen 1.0.3 INSTALL - 2024-11-18 - webchills
##################################################################################

ALTER TABLE manufacturers 
ADD COLUMN manufacturers_gpsr_company VARCHAR(255) AFTER manufacturers_image,
ADD COLUMN manufacturers_gpsr_contact_person VARCHAR(255) AFTER manufacturers_gpsr_company,
ADD COLUMN manufacturers_gpsr_street VARCHAR(255) AFTER manufacturers_gpsr_contact_person,
ADD COLUMN manufacturers_gpsr_postcode VARCHAR(10) AFTER manufacturers_gpsr_street,
ADD COLUMN manufacturers_gpsr_city VARCHAR(255) AFTER manufacturers_gpsr_postcode,
ADD COLUMN manufacturers_gpsr_country VARCHAR(255) AFTER manufacturers_gpsr_city,
ADD COLUMN manufacturers_gpsr_url VARCHAR(255) AFTER manufacturers_gpsr_country,
ADD COLUMN manufacturers_gpsr_company_noneu VARCHAR(255) AFTER manufacturers_gpsr_url,
ADD COLUMN manufacturers_gpsr_contact_person_noneu VARCHAR(255) AFTER manufacturers_gpsr_company_noneu,
ADD COLUMN manufacturers_gpsr_street_noneu VARCHAR(255) AFTER manufacturers_gpsr_contact_person_noneu,
ADD COLUMN manufacturers_gpsr_postcode_noneu VARCHAR(10) AFTER manufacturers_gpsr_street_noneu,
ADD COLUMN manufacturers_gpsr_city_noneu VARCHAR(255) AFTER manufacturers_gpsr_postcode_noneu,
ADD COLUMN manufacturers_gpsr_country_noneu VARCHAR(255) AFTER manufacturers_gpsr_city_noneu,
ADD COLUMN manufacturers_gpsr_url_noneu VARCHAR(255) AFTER manufacturers_gpsr_country_noneu,
ADD COLUMN manufacturers_gpsr_additional_1 VARCHAR(255) AFTER manufacturers_gpsr_url_noneu,
ADD COLUMN manufacturers_gpsr_additional_2 VARCHAR(255) AFTER manufacturers_gpsr_additional_1,
ADD COLUMN manufacturers_gpsr_additional_3 VARCHAR(255) AFTER manufacturers_gpsr_additional_2;

# Insert default english text to Product General (product_type_id = 1).
# Maybe you need to copy/repeat for your custom product types (using product_type_id = ?).
INSERT IGNORE INTO product_type_layout (configuration_title, configuration_key, configuration_value, configuration_description, product_type_id, sort_order, date_added, set_function, last_modified) 
VALUES 
('Show GPSR Manufacturer Info', 'SHOW_PRODUCT_INFO_GPSR', '0', 'Should the extended GPSR manufacturer info be displayed on the product page?', 1, 3, NOW(), 'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), ', NOW());

#optionally replace with german text
#REPLACE INTO product_type_layout_language (configuration_title, configuration_key, languages_id, configuration_description, last_modified, date_added) 
#VALUES 
#('GPSR Herstellerinfo anzeigen', 'SHOW_PRODUCT_INFO_GPSR', 43, 'Sollen die unter Webshop > Hersteller hinterlegten erweiterten GPSR Herstellerinformationen auf der Artikeldetailseite angezeigt werden?<br/> 0= AUS 1= AN', NOW(), NOW());
