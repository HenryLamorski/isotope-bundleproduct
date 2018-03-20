<?php

/**
 * Isotope eCommerce for Contao Open Source CMS
 *
 * Copyright (C) 2009-2016 terminal42 gmbh & Isotope eCommerce Workgroup
 *
 * @link       https://isotopeecommerce.org
 * @license    https://opensource.org/licenses/lgpl-3.0.html
 */


/**
 * Table tl_iso_producttype
 */
$GLOBALS['TL_DCA']['tl_iso_producttype']['palettes']['bundle'] = '{name_legend},name,class,fallback,integer_only;{description_legend:hide},description;{prices_legend:hide},prices;{template_legend},list_template,reader_template,list_gallery,reader_gallery,cssClass;{attributes_legend},attributes;{variants_legend:hide},variants;{expert_legend:hide},shipping_exempt,downloads';

echo "<pre>";print_r($GLOBALS['TL_DCA']['tl_iso_producttype']);echo "</pre>";