<?php

declare(strict_types=1);
/**
 *  Plugin GPSR
 *
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 */

if (!empty($_GET['products_id'])) {
    $gpsr_products_id = (int)$_GET['products_id'];
    $flag_show_gpsr = !empty(zen_get_show_product_switch($gpsr_products_id, 'gpsr'));
    if ($flag_show_gpsr) {
        $manufacturers_gpsr_company = zen_get_products_manufacturers_gpsr_company($gpsr_products_id);
        $manufacturers_gpsr_contact_person = zen_get_products_manufacturers_gpsr_contact_person($gpsr_products_id);
        $manufacturers_gpsr_street = zen_get_products_manufacturers_gpsr_street($gpsr_products_id);
        $manufacturers_gpsr_postcode = zen_get_products_manufacturers_gpsr_postcode($gpsr_products_id);
        $manufacturers_gpsr_city = zen_get_products_manufacturers_gpsr_city($gpsr_products_id);
        $manufacturers_gpsr_country = zen_get_products_manufacturers_gpsr_country($gpsr_products_id);
        $manufacturers_gpsr_url = zen_get_products_manufacturers_gpsr_url($gpsr_products_id);
        $manufacturers_gpsr_company_noneu = zen_get_products_manufacturers_gpsr_company_noneu($gpsr_products_id);
        $manufacturers_gpsr_contact_person_noneu = zen_get_products_manufacturers_gpsr_contact_person_noneu($gpsr_products_id);
        $manufacturers_gpsr_street_noneu = zen_get_products_manufacturers_gpsr_street_noneu($gpsr_products_id);
        $manufacturers_gpsr_postcode_noneu = zen_get_products_manufacturers_gpsr_postcode_noneu($gpsr_products_id);
        $manufacturers_gpsr_city_noneu = zen_get_products_manufacturers_gpsr_city_noneu($gpsr_products_id);
        $manufacturers_gpsr_country_noneu = zen_get_products_manufacturers_gpsr_country_noneu($gpsr_products_id);
        $manufacturers_gpsr_url_noneu = zen_get_products_manufacturers_gpsr_url_noneu($gpsr_products_id);
        $manufacturers_gpsr_additional_1 = zen_get_products_manufacturers_gpsr_additional_1($gpsr_products_id);
        $manufacturers_gpsr_additional_2 = zen_get_products_manufacturers_gpsr_additional_2($gpsr_products_id);
        $manufacturers_gpsr_additional_3 = zen_get_products_manufacturers_gpsr_additional_3($gpsr_products_id);
    }
}
