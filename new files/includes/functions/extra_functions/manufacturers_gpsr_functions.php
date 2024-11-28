<?php

function zen_get_products_manufacturers_gpsr_company($product_id)
{
    global $db;

    $sql = "SELECT m.manufacturers_gpsr_company
            FROM " . TABLE_PRODUCTS . " p
            LEFT JOIN " . TABLE_MANUFACTURERS . " m USING (manufacturers_id)
            WHERE p.products_id = " . (int)$product_id;

    $product = $db->Execute($sql, 1);

    return ($product->EOF) ? '' : $product->fields['manufacturers_gpsr_company'];
}

function zen_get_products_manufacturers_gpsr_contact_person($product_id)
{
    global $db;

    $sql = "SELECT m.manufacturers_gpsr_contact_person
            FROM " . TABLE_PRODUCTS . " p
            LEFT JOIN " . TABLE_MANUFACTURERS . " m USING (manufacturers_id)
            WHERE p.products_id = " . (int)$product_id;

    $product = $db->Execute($sql, 1);

    return ($product->EOF) ? '' : $product->fields['manufacturers_gpsr_contact_person'];
}

function zen_get_products_manufacturers_gpsr_street($product_id)
{
    global $db;

    $sql = "SELECT m.manufacturers_gpsr_street
            FROM " . TABLE_PRODUCTS . " p
            LEFT JOIN " . TABLE_MANUFACTURERS . " m USING (manufacturers_id)
            WHERE p.products_id = " . (int)$product_id;

    $product = $db->Execute($sql, 1);

    return ($product->EOF) ? '' : $product->fields['manufacturers_gpsr_street'];
}

function zen_get_products_manufacturers_gpsr_postcode($product_id)
{
    global $db;

    $sql = "SELECT m.manufacturers_gpsr_postcode
            FROM " . TABLE_PRODUCTS . " p
            LEFT JOIN " . TABLE_MANUFACTURERS . " m USING (manufacturers_id)
            WHERE p.products_id = " . (int)$product_id;

    $product = $db->Execute($sql, 1);

    return ($product->EOF) ? '' : $product->fields['manufacturers_gpsr_postcode'];
}

function zen_get_products_manufacturers_gpsr_city($product_id)
{
    global $db;

    $sql = "SELECT m.manufacturers_gpsr_city
            FROM " . TABLE_PRODUCTS . " p
            LEFT JOIN " . TABLE_MANUFACTURERS . " m USING (manufacturers_id)
            WHERE p.products_id = " . (int)$product_id;

    $product = $db->Execute($sql, 1);

    return ($product->EOF) ? '' : $product->fields['manufacturers_gpsr_city'];
}

function zen_get_products_manufacturers_gpsr_country($product_id)
{
    global $db;

    $sql = "SELECT m.manufacturers_gpsr_country
            FROM " . TABLE_PRODUCTS . " p
            LEFT JOIN " . TABLE_MANUFACTURERS . " m USING (manufacturers_id)
            WHERE p.products_id = " . (int)$product_id;

    $product = $db->Execute($sql, 1);

    return ($product->EOF) ? '' : $product->fields['manufacturers_gpsr_country'];
}

function zen_get_products_manufacturers_gpsr_url($product_id)
{
    global $db;

    $sql = "SELECT m.manufacturers_gpsr_url
            FROM " . TABLE_PRODUCTS . " p
            LEFT JOIN " . TABLE_MANUFACTURERS . " m USING (manufacturers_id)
            WHERE p.products_id = " . (int)$product_id;

    $product = $db->Execute($sql, 1);

    return ($product->EOF) ? '' : $product->fields['manufacturers_gpsr_url'];
}

function zen_get_products_manufacturers_gpsr_company_noneu($product_id)
{
    global $db;

    $sql = "SELECT m.manufacturers_gpsr_company_noneu
            FROM " . TABLE_PRODUCTS . " p
            LEFT JOIN " . TABLE_MANUFACTURERS . " m USING (manufacturers_id)
            WHERE p.products_id = " . (int)$product_id;

    $product = $db->Execute($sql, 1);

    return ($product->EOF) ? '' : $product->fields['manufacturers_gpsr_company_noneu'];
}

function zen_get_products_manufacturers_gpsr_contact_person_noneu($product_id)
{
    global $db;

    $sql = "SELECT m.manufacturers_gpsr_contact_person_noneu
            FROM " . TABLE_PRODUCTS . " p
            LEFT JOIN " . TABLE_MANUFACTURERS . " m USING (manufacturers_id)
            WHERE p.products_id = " . (int)$product_id;

    $product = $db->Execute($sql, 1);

    return ($product->EOF) ? '' : $product->fields['manufacturers_gpsr_contact_person_noneu'];
}

function zen_get_products_manufacturers_gpsr_street_noneu($product_id)
{
    global $db;

    $sql = "SELECT m.manufacturers_gpsr_street_noneu
            FROM " . TABLE_PRODUCTS . " p
            LEFT JOIN " . TABLE_MANUFACTURERS . " m USING (manufacturers_id)
            WHERE p.products_id = " . (int)$product_id;

    $product = $db->Execute($sql, 1);

    return ($product->EOF) ? '' : $product->fields['manufacturers_gpsr_street_noneu'];
}

function zen_get_products_manufacturers_gpsr_postcode_noneu($product_id)
{
    global $db;

    $sql = "SELECT m.manufacturers_gpsr_postcode_noneu
            FROM " . TABLE_PRODUCTS . " p
            LEFT JOIN " . TABLE_MANUFACTURERS . " m USING (manufacturers_id)
            WHERE p.products_id = " . (int)$product_id;

    $product = $db->Execute($sql, 1);

    return ($product->EOF) ? '' : $product->fields['manufacturers_gpsr_postcode_noneu'];
}

function zen_get_products_manufacturers_gpsr_city_noneu($product_id)
{
    global $db;

    $sql = "SELECT m.manufacturers_gpsr_city_noneu
            FROM " . TABLE_PRODUCTS . " p
            LEFT JOIN " . TABLE_MANUFACTURERS . " m USING (manufacturers_id)
            WHERE p.products_id = " . (int)$product_id;

    $product = $db->Execute($sql, 1);

    return ($product->EOF) ? '' : $product->fields['manufacturers_gpsr_city_noneu'];
}

function zen_get_products_manufacturers_gpsr_country_noneu($product_id)
{
    global $db;

    $sql = "SELECT m.manufacturers_gpsr_country_noneu
            FROM " . TABLE_PRODUCTS . " p
            LEFT JOIN " . TABLE_MANUFACTURERS . " m USING (manufacturers_id)
            WHERE p.products_id = " . (int)$product_id;

    $product = $db->Execute($sql, 1);

    return ($product->EOF) ? '' : $product->fields['manufacturers_gpsr_country_noneu'];
}

function zen_get_products_manufacturers_gpsr_url_noneu($product_id)
{
    global $db;

    $sql = "SELECT m.manufacturers_gpsr_url_noneu
            FROM " . TABLE_PRODUCTS . " p
            LEFT JOIN " . TABLE_MANUFACTURERS . " m USING (manufacturers_id)
            WHERE p.products_id = " . (int)$product_id;

    $product = $db->Execute($sql, 1);

    return ($product->EOF) ? '' : $product->fields['manufacturers_gpsr_url_noneu'];
}

function zen_get_products_manufacturers_gpsr_additional_1($product_id)
{
    global $db;

    $sql = "SELECT m.manufacturers_gpsr_additional_1
            FROM " . TABLE_PRODUCTS . " p
            LEFT JOIN " . TABLE_MANUFACTURERS . " m USING (manufacturers_id)
            WHERE p.products_id = " . (int)$product_id;

    $product = $db->Execute($sql, 1);

    return ($product->EOF) ? '' : $product->fields['manufacturers_gpsr_additional_1'];
}

function zen_get_products_manufacturers_gpsr_additional_2($product_id)
{
    global $db;

    $sql = "SELECT m.manufacturers_gpsr_additional_2
            FROM " . TABLE_PRODUCTS . " p
            LEFT JOIN " . TABLE_MANUFACTURERS . " m USING (manufacturers_id)
            WHERE p.products_id = " . (int)$product_id;

    $product = $db->Execute($sql, 1);

    return ($product->EOF) ? '' : $product->fields['manufacturers_gpsr_additional_2'];
}

function zen_get_products_manufacturers_gpsr_additional_3($product_id)
{
    global $db;

    $sql = "SELECT m.manufacturers_gpsr_additional_3
            FROM " . TABLE_PRODUCTS . " p
            LEFT JOIN " . TABLE_MANUFACTURERS . " m USING (manufacturers_id)
            WHERE p.products_id = " . (int)$product_id;

    $product = $db->Execute($sql, 1);

    return ($product->EOF) ? '' : $product->fields['manufacturers_gpsr_additional_3'];
}