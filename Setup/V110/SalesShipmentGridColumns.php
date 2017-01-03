<?php
/**
 *                  ___________       __            __
 *                  \__    ___/____ _/  |_ _____   |  |
 *                    |    |  /  _ \\   __\\__  \  |  |
 *                    |    | |  |_| ||  |   / __ \_|  |__
 *                    |____|  \____/ |__|  (____  /|____/
 *                                              \/
 *          ___          __                                   __
 *         |   |  ____ _/  |_   ____ _______   ____    ____ _/  |_
 *         |   | /    \\   __\_/ __ \\_  __ \ /    \ _/ __ \\   __\
 *         |   ||   |  \|  |  \  ___/ |  | \/|   |  \\  ___/ |  |
 *         |___||___|  /|__|   \_____>|__|   |___|  / \_____>|__|
 *                  \/                           \/
 *                  ________
 *                 /  _____/_______   ____   __ __ ______
 *                /   \  ___\_  __ \ /  _ \ |  |  \\____ \
 *                \    \_\  \|  | \/|  |_| ||  |  /|  |_| |
 *                 \______  /|__|    \____/ |____/ |   __/
 *                        \/                       |__|
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Creative Commons License.
 * It is available through the world-wide-web at this URL:
 * http://creativecommons.org/licenses/by-nc-nd/3.0/nl/deed.en_US
 * If you are unable to obtain it through the world-wide-web, please send an email
 * to servicedesk@totalinternetgroup.nl so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this module to newer
 * versions in the future. If you wish to customize this module for your
 * needs please contact servicedesk@totalinternetgroup.nl for more information.
 *
 * @copyright   Copyright (c) 2017 Total Internet Group B.V. (http://www.totalinternetgroup.nl)
 * @license     http://creativecommons.org/licenses/by-nc-nd/3.0/nl/deed.en_US
 */
namespace TIG\PostNL\Setup\V110;

use TIG\PostNL\Setup\AbstractColumnsInstaller;

class SalesShipmentGridColumns extends AbstractColumnsInstaller
{
    const TABLE_NAME = 'sales_shipment_grid';

    protected $columns = [
        'tig_postnl_ship_at',
        'tig_postnl_confirmed_at',
    ];

    /**
     * @return array
     */
    public function installTigPostnlShipAtColumn()
    {
        return [
            'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            'length' => 255,
            'nullable' => true,
            'default' => null,
            'comment' => 'When is this shipment due for sending',
            'after' => 'shipping_information',
        ];
    }

    /**
     * @return array
     */
    public function installTigPostnlConfirmedAtColumn()
    {
        return [
            'type' => \Magento\Framework\DB\Ddl\Table::TYPE_DATE,
            'nullable' => true,
            'default' => null,
            'comment' => 'When is this order confirmed?',
            'after' => 'tig_postnl_ship_at',
        ];
    }
}
