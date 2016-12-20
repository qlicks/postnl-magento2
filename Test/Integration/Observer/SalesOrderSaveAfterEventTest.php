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
 * @copyright   Copyright (c) 2016 Total Internet Group B.V. (http://www.totalinternetgroup.nl)
 * @license     http://creativecommons.org/licenses/by-nc-nd/3.0/nl/deed.en_US
 */
namespace TIG\PostNL\Integration\Observer;

use Magento\Framework\Event\Observer;
use Magento\Sales\Model\Order;
use Magento\Sales\Model\Order\Shipment;
use Magento\Sales\Model\ResourceModel\Order\Collection;
use TIG\PostNL\Model\OrderFactory;
use TIG\PostNL\Observer\SalesOrderSaveAfterEvent;
use TIG\PostNL\Test\Integration\TestCase;

/**
 * Class TestSalesOrderSaveAfterEvent
 *
 * @package TIG\PostNL\Integration\Observer
 * @magentoDbIsolation enabled
 */
class TestSalesOrderSaveAfterEvent extends TestCase
{
    protected $instanceClass = SalesOrderSaveAfterEvent::class;

    /**
     * @magentoDataFixture Magento/Sales/_files/order.php
     */
    public function testExecute()
    {
        /** @var Collection $orderCollection */
        $orderCollection = $this->getObject(Collection::class);
        $orderCollection->addFieldToFilter('customer_email', 'customer@null.com');

        /** @var Order $order */
        $order = $orderCollection->getFirstItem();
        $order->setData('shipping_method', 'tig_postnl_regular');

        /** @var Observer $observer */
        $observer = $this->getObject(Observer::class);
        $observer->setData('data_object', $order);

        $this->getInstance()->execute($observer);

        /** @var OrderFactory $orderFactory */
        $factory = $this->objectManager->create(OrderFactory::class);

        /** @var Order $postnlOrder */
        $postnlOrder = $factory->create();
        $orderCollection = $postnlOrder->getCollection();
        $orderCollection->addFieldToFilter('order_id', $order->getId());
        $model = $orderCollection->getFirstItem();

        $this->assertEquals($order->getId(), $model->getData('order_id'));
    }
}
