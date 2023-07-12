<?php

namespace TIG\PostNL\Api\Data;

// @codingStandardsIgnoreFile
/**
 * Too many public methods for the code inspection.
 */
interface OrderInterface
{
    /**
     * @return int
     */
    public function getEntityId();

    /**
     * Sets entity ID.
     *
     * @param int $entityId
     * @return $this
     */
    public function setEntityId($entityId);

    /**
     * @param $value
     *
     * @return \TIG\PostNL\Api\Data\OrderInterface
     */
    public function setOrderId($value);

    /**
     * @return int
     */
    public function getOrderId();

    /**
     * @param $value
     *
     * @return \TIG\PostNL\Api\Data\OrderInterface
     */
    public function setQuoteId($value);

    /**
     * @return int
     */
    public function getQuoteId();

    /**
     * @param $value
     *
     * @return \TIG\PostNL\Api\Data\OrderInterface
     */
    public function setType($value);

    /**
     * @return string
     */
    public function getType();

    /**
     * @param $value
     *
     * @return \TIG\PostNL\Api\Data\OrderInterface
     */
    public function setAcCharacteristic($value);

    /**
     * @return string|null
     */
    public function getAcCharacteristic();

    /**
     * @param $value
     *
     * @return \TIG\PostNL\Api\Data\OrderInterface
     */
    public function setAcOption($value);

    /**
     * @return string|null
     */
    public function getAcOption();

    /**
     * @param $value
     *
     * @return \TIG\PostNL\Api\Data\OrderInterface
     */
    public function setAcInformation($value);

    /**
     * @return string|null
     */
    public function getAcInformation();

    /**
     * @param $value
     *
     * @return \TIG\PostNL\Api\Data\OrderInterface
     */
    public function setDeliveryDate($value);

    /**
     * @return string
     */
    public function getDeliveryDate();

    /**
     * @param $value
     *
     * @return \TIG\PostNL\Api\Data\OrderInterface
     */
    public function setExpectedDeliveryTimeStart($value);

    /**
     * @return string
     */
    public function getExpectedDeliveryTimeStart();

    /**
     * @param $value
     *
     * @return \TIG\PostNL\Api\Data\OrderInterface
     */
    public function setExpectedDeliveryTimeEnd($value);

    /**
     * @return string
     */
    public function getExpectedDeliveryTimeEnd();

    /**
     * @param $value
     *
     * @return \TIG\PostNL\Api\Data\OrderInterface
     */
    public function setIsPakjegemak($value);

    /**
     * @return bool
     */
    public function getIsPakjegemak();

    /**
     * @param $value
     *
     * @return \TIG\PostNL\Api\Data\OrderInterface
     */
    public function setPgOrderAddressId($value);

    /**
     * @return int
     */
    public function getPgOrderAddressId();

    /**
     * @return \Magento\Sales\Api\Data\OrderAddressInterface;
     */
    public function getShippingAddress();

    /**
     * @return \Magento\Sales\Api\Data\OrderAddressInterface;
     */
    public function getBillingAddress();

    /**
     * @return \Magento\Sales\Api\Data\OrderAddressInterface;
     */
    public function getPgOrderAddress();

    /**
     * @param $value
     *
     * @return \TIG\PostNL\Api\Data\OrderInterface
     */
    public function setPgLocationCode($value);

    /**
     * @return string
     */
    public function getPgLocationCode();

    /**
     * @param $value
     *
     * @return \TIG\PostNL\Api\Data\OrderInterface
     */
    public function setPgRetailNetworkId($value);

    /**
     * @return string
     */
    public function getPgRetailNetworkId();

    /**
     * @param $value
     *
     * @return \TIG\PostNL\Api\Data\OrderInterface
     */
    public function setProductCode($value);

    /**
     * @return int
     */
    public function getProductCode();

    /**
     * @param $value
     *
     * @return \TIG\PostNL\Api\Data\OrderInterface
     */
    public function setFee($value);

    /**
     * @return float
     */
    public function getFee();

    /**
     * @param $value
     *
     * @return \TIG\PostNL\Api\Data\OrderInterface
     */
    public function setShipAt($value);

    /**
     * @return string
     */
    public function getShipAt();

    /**
     * @return mixed
     */
    public function getParcelCount();

    /**
     * @param $value
     *
     * @return \TIG\PostNL\Api\Data\OrderInterface
     */
    public function setParcelCount($value);

    /**
     * @param $value
     *
     * @return \TIG\PostNL\Api\Data\OrderInterface
     */
    public function setConfirmedAt($value);

    /**
     * @return string
     */
    public function getConfirmedAt();

    /**
     * @param $value
     *
     * @return \TIG\PostNL\Api\Data\OrderInterface
     */
    public function changeCreatedAt($value);

    /**
     * @return string
     */
    public function getCreatedAt();

    /**
     * @param $value
     *
     * @return \TIG\PostNL\Api\Data\OrderInterface
     */
    public function changeUpdatedAt($value);

    /**
     * @return string
     */
    public function getUpdatedAt();

    /**
     * @return int
     */
    public function getShippingDuration();

    /**
     * @param $value
     *
     * @return int
     */
    public function setShippingDuration($value);

    /**
     * @param $value
     *
     * @return \TIG\PostNL\Api\Data\OrderInterface
     */
    public function setConfirmed($value);

    /**
     * @return bool
     */
    public function getConfirmed();

    /**
     * @param $value
     *
     * @return \TIG\PostNL\Api\Data\OrderInterface
     */
    public function setInsuredTier($value);

    /**
     * @return string
     */
    public function getInsuredTier();
}
