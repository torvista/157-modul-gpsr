RAW GOOGLE TRANSLATION

GPSR manufacturer information 1.0.3 for Zen Cart 1.5.7 German

Copyright 2024 webchills (www.webchills.at)
General Public License

This module expands the administration of manufacturers with new input fields for the extended manufacturer information provided for by the Product Safety Regulation (GPSR), which will come into force on December 13, 2024.

The data stored there will then be displayed on the article detail page for articles from the respective manufacturer.

Example for manufacturers with a branch in the EU:
https://gpsr.zencartdemo.at/index.php?main_page=product_info&cPath=3_12&products_id=7

Example for manufacturers without a branch in the EU:
https://gpsr.zencartdemo.at/index.php?main_page=product_info&cPath=1_5&products_id=27

tested with:

Zen Cart Version:
1.5.7i German

PHP Version:
8.3.x

INSTALLATION:

This module is only suitable for the German Zen Cart 1.5.7i version.

Make sure that you have updated your shop to 1.5.7i before installing this module.
The modified files provided for this module are at the version 1.5.7i!

IMPORTANT:

To install this module, you should have the following tools:

1) A good text editor
This does not mean Notepad or Microsoft Word included in Windows.

You need a text editor that understands utf-8 and can also save in utf-8 format without BOM.

Recommendation: UltraEdit (free 30-day trial version available)
The free text editor Notepad++ is also well suited

2) A tool for comparing files
When installing this module, you need to compare the contents of some of your existing Zen Cart files with the contents of the new module files and merge the changes.

Recommendation: BeyondCompare (free 30-day trial version available)
The free program WinMerge is also well suited

Recommendation:

First install this module in a test system and configure/test it there and finally adapt it to your own requirements. Only then use it in a live shop! Be sure to back up all of your shop's files via FTP and back up the database with phpMyAdmin or other suitable tools!
IMPORTANT
Before implementing these changes:
Make a BACKUP of the shop and database!
No liability, use at your own risk!
Backup made? OK, then read on...
The installation takes place in the following steps. Follow this procedure.
1.
Open the install.sql file in the SQL folder with a text editor and copy the contents
2.
Open Zen Cart Administration and under Tools > Install SQL Patches copy the contents into the field and send.
This expands the manufacturers table with various additional fields and creates a general switch for the GPSR display in the frontend.
3.
In the CHANGED FILES folder, rename the YOURADMIN folder to the name of your admin directory.
This module changes the YOURADMIN/manufacturers.php file.
If you have already made changes to this file (e.g. by installing other extensions), then do not simply upload this file.
Instead, compare it with the corresponding file in your shop and make the changes manually using WinMerge or BeyondCompare.
The language files are also changed.
You also compare these with the corresponding files in your shop and make the changes manually using WinMerge or BeyondCompare.
Then upload the files to your shop's admin directory and overwrite the existing ones.

4.
Now you can revise your manufacturers with the new information in the administration under Tools > Manufacturers.
If the manufacturer has a branch in the EU, then the information under GPSR additional information on the manufacturer is sufficient.
This is where you enter the manufacturer's data.
If the manufacturer does not have a branch in the EU, you must also fill in the fields under Additional information on the importer for manufacturers without an EU branch.
This is where you enter the importer's data.
If you want to provide further information, there are 3 additional fields available.
Many wholesalers provide you with the data; if you are unsure, please clarify this with your wholesaler.
Now revise your manufacturers.
The Manufacturer Contact Person and Importer Responsible Person fields will be empty in many cases if there is no dedicated contact person.
The Manufacturer Company Name (and if the manufacturer is not in the EU) Importer Company Name fields must be filled in in any case, however; they control whether the information appears on the item detail page at all.
In the manufacturer overview under Tools > Manufacturer, you can see for each manufacturer whether you have already filled in the GPSR company name fields.

5.
So that your newGPSR data is displayed on the item detail page for the items of the respective manufacturer, you now need to change and add files in the frontend.
Upload the contents of the NEW FILES folder in the specified structure to the shop directory.
No existing files will be overwritten.

Now look in the CHANGED FILES folder
This module changes the file includes/modules/pages/product_info/main_template_vars.php
If you have already made changes to this file (e.g. by installing other extensions), then do not simply upload this file.
Instead, compare it with the corresponding file in your shop and make the changes manually using WinMerge or BeyondCompare.
Then upload the file to your shop's directory and overwrite the existing ones with it.

A new area for displaying the GPSR information must now be added to the item detail page.

Download the following file from your store:

includes/templates/YOURTEMPLATE/templates/tpl_product_info_display.php

Open the file with a text editor

Copy the following section:

<!--bof GPSR -->
<?php if ($flag_show_gpsr) { ?>
<?php if (!empty($manufacturers_gpsr_company)) { ?>
<div id="gpsrinfo" class="productGeneral">
<ul id="gpsrDetailsList">
<?php echo '<li><b>' . TEXT_MANUFACTURER_GPSR_INFO . '' . $manufacturers_name . '</b></li>'; ?>
<?php echo '<li>' . TEXT_MANUFACTURER_GPSR_CONTACT_INFO . '</li>'; ?>
 <?php echo '<li>&nbsp; </li>'; ?>
 <?php echo '<li>' . TEXT_MANUFACTURER_GPSR_ADDRESS_INFO . '</li>'; ?>
 <?php echo ((!empty($manufacturers_gpsr_company)) ? '<li>' . TEXT_MANUFACTURER_GPSR_COMPANY . $manufacturers_gpsr_company . '</li>' : '') . "\n"; ?>
 <?php echo ((!empty($manufacturers_gpsr_contact_person)) ? '<li>' . TEXT_MANUFACTURER_GPSR_CONTACT_PERSON . $manufacturers_gpsr_contact_person . '</li>' : '') . "\n"; ?>
 <?php echo ((!empty($manufacturers_gpsr_street)) ? '<li>' . TEXT_MANUFACTURER_GPSR_STREET . $manufacturers_gpsr_street . '</li>' : '') . "\n"; ?>
 <?php echo ((!empty($manufacturers_gpsr_city)) ? '<li>' . TEXT_MANUFACTURER_GPSR_POSTCODE . $manufacturers_gpsr_postcode . ' ' . TEXT_MANUFACTURER_GPSR_CITY . $manufacturers_gpsr_city . '</li>' : '') . "\n"; ?>
 <?php echo ((!empty($manufacturers_gpsr_country)) ? '<li>' . TEXT_MANUFACTURER_GPSR_COUNTRY . $manufacturers_gpsr_country . '</li>' : '') . "\n"; ?>
 <?php echo '<li>&nbsp; </li>'; ?>
 <?php echo '<li>' . TEXT_MANUFACTURER_GPSR_URL_INFO . '</li>'; ?>
 <?php echo ((!empty($manufacturers_gpsr_url)) ? '<li>' . TEXT_MANUFACTURER_GPSR_URL . $manufacturers_gpsr_url . '</li>' : '') . "\n"; ?>
 <?php if (!empty($manufacturers_gpsr_company_noneu)) { ?>
 <?php echo '<li>&nbsp; </li>'; ?>
 <?php echo '<li>' . TEXT_MANUFACTURER_GPSR_CONTACT_INFO_NONEU . '</li>'; ?>
 <?php echo '<li>&nbsp; </li>'; ?>
 <?php echo '<li>' . TEXT_MANUFACTURER_GPSR_ADDRESS_INFO . '</li>'; ?>
 <?php echo ((!empty($manufacturers_gpsr_company_noneu)) ? '<li>' . TEXT_MANUFACTURER_GPSR_COMPANY_NONEU . $manufacturers_gpsr_company_noneu . '</li>' : '') . "\n"; ?>
 <?php echo ((!empty($manufacturers_gpsr_contact_person_noneu)) ? '<li>' . TEXT_MANUFACTURER_GPSR_CONTACT_PERSON_NONEU . $manufacturers_gpsr_contact_person_noneu . '</li>' : '') . "\n"; ?>
 <?php echo ((!empty($manufacturers_gpsr_street_noneu)) ? '<li>' . TEXT_MANUFACTURER_GPSR_STREET_NONEU . $manufacturers_gpsr_street_noneu . '</li>' : '') . "\n"; ?>
 <?php echo ((!empty($manufacturers_gpsr_city_noneu)) ? '<li>' . TEXT_MANUFACTURER_GPSR_POSTCODE_NONEU . $manufacturers_gpsr_postcode_noneu . ' ' . TEXT_MANUFACTURER_GPSR_CITY_NONEU . $manufacturers_gpsr_city_noneu . '</li>' : '') . "\n"; ?>
 <?php echo ((!empty($manufacturers_gpsr_country_noneu)) ? '<li>' . TEXT_MANUFACTURER_GPSR_COUNTRY_NONEU . $manufacturers_gpsr_country_noneu . '</li>' : '') . "\n"; ?>
 <?php echo '<li>&nbsp; </li>'; ?>
 <?php echo '<li>' . TEXT_MANUFACTURER_GPSR_URL_INFO . '</li>'; ?>
 <?php echo ((!empty($manufacturers_gpsr_url_noneu)) ? '<li>' . TEXT_MANUFACTURER_GPSR_URL_NONEU . $manufacturers_gpsr_url_noneu . '</li>' : '') . "\n"; ?>
 <?php echo '<li>&nbsp; </li>'; ?>
 <?php } ?>
 <?php echo ((!empty($manufacturers_gpsr_additional_1)) ? '<li>' . TEXT_MANUFACTURER_GPSR_ADDITIONAL_1 . $manufacturers_gpsr_additional_1 . '</li>' : '') . "\n"; ?>
 <?php echo ((!empty($manufacturers_gpsr_additional_2)) ? '<li>' . TEXT_MANUFACTURER_GPSR_ADDITIONAL_2 . $manufacturers_gpsr_additional_2 . '</li>' : '') . "\n"; ?>
<?php echo ((!empty($manufacturers_gpsr_additional_3)) ? '<li>' . TEXT_MANUFACTURER_GPSR_ADDITIONAL_3 . $manufacturers_gpsr_additional_3 . '</li>' : '') . "\n"; ?>
</ul>
</div>
<?php } ?>
<?php } ?>
<!--eof GPSR -->

And then insert it at the desired location in your includes/templates/YOURTEMPLATE/templates/tpl_product_info_default.php.

In the folder MODIFIED FILES you will find an already adapted includ