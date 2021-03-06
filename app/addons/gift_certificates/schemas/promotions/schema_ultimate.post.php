<?php
/***************************************************************************
*                                                                          *
*   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
*                                                                          *
* This  is  commercial  software,  only  users  who have purchased a valid *
* license  and  accept  to the terms of the  License Agreement can install *
* and use this program.                                                    *
*                                                                          *
****************************************************************************
* PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
* "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
****************************************************************************/

/** @var array<string, array> $schema */
$schema['bonuses']['gift_certificate'] = [
    'type'     => 'input',
    'function' => ['fn_gift_certificates_promotion_gift_certificate', '#this', '@cart', '@auth', '@cart_products'],
    'zones'    => ['cart'],
    'filter'   => 'floatval'
];

return $schema;
