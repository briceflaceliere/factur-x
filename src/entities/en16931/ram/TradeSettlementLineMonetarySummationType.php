<?php

namespace horstoeko\zugferd\entities\en16931\ram;

/**
 * Class representing TradeSettlementLineMonetarySummationType
 *
 *
 * XSD Type: TradeSettlementLineMonetarySummationType
 */
class TradeSettlementLineMonetarySummationType
{

    /**
     * @var \horstoeko\zugferd\entities\en16931\udt\AmountType $lineTotalAmount
     */
    private $lineTotalAmount = null;

    /**
     * Gets as lineTotalAmount
     *
     * @return \horstoeko\zugferd\entities\en16931\udt\AmountType
     */
    public function getLineTotalAmount()
    {
        return $this->lineTotalAmount;
    }

    /**
     * Sets a new lineTotalAmount
     *
     * @param \horstoeko\zugferd\entities\en16931\udt\AmountType $lineTotalAmount
     * @return self
     */
    public function setLineTotalAmount(\horstoeko\zugferd\entities\en16931\udt\AmountType $lineTotalAmount)
    {
        $this->lineTotalAmount = $lineTotalAmount;
        return $this;
    }


}

