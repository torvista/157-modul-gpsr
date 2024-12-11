# GPSR Manufacturer Contact details for product data - Zen Cart

## Status
This branch as an encapsulated plugin is now abandoned since a very different version is continued here:
https://github.com/torvista/Zen_Cart-GPSR



Compatible with Zen Cart 2.1.0 and tested with php 8.4.1.

This plugin 
- Adds new fields to the manufacturers table to store the manufacturers contact details and (if the manufacturer is outside the EU) the importer/distributor contact details.
- The details are displayed on the product info page

This module used the 157-modul-gpsr as the starting point. The original readme has not been updated, nor the german language files.

## 157-modul-gpsr

GPSR manufacturer information for Zen Cart 1.5.7 German

This module extends the administration of manufacturers with new input fields for the extended manufacturer information provided for by the Product Safety Regulation (GPSR), which will come into force on December 13, 2024.
The data stored there is then displayed on the article detail page for articles from the respective manufacturer.

Example for manufacturers with a branch in the EU:
* https://gpsr.zencartdemo.at/index.php?main_page=product_info&cPath=3_12&products_id=7

Example for manufacturers without a branch in the EU:
* https://gpsr.zencartdemo.at/index.php?main_page=product_info&cPath=1_5&products_id=27
