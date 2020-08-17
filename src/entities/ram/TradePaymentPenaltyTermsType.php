<?php

namespace horstoeko\zugferd\ram;

/**
 * Class representing TradePaymentPenaltyTermsType
 *
 *
 * XSD Type: TradePaymentPenaltyTermsType
 */
class TradePaymentPenaltyTermsType
{

    /**
     * @var \horstoeko\zugferd\udt\DateTimeType $basisDateTime
     */
    private $basisDateTime = null;

    /**
     * @var \horstoeko\zugferd\udt\MeasureType $basisPeriodMeasure
     */
    private $basisPeriodMeasure = null;

    /**
     * @var \horstoeko\zugferd\udt\AmountType $basisAmount
     */
    private $basisAmount = null;

    /**
     * @var float $calculationPercent
     */
    private $calculationPercent = null;

    /**
     * @var \horstoeko\zugferd\udt\AmountType $actualPenaltyAmount
     */
    private $actualPenaltyAmount = null;

    /**
     * Gets as basisDateTime
     *
     * @return \horstoeko\zugferd\udt\DateTimeType
     */
    public function getBasisDateTime()
    {
        return $this->basisDateTime;
    }

    /**
     * Sets a new basisDateTime
     *
     * @param \horstoeko\zugferd\udt\DateTimeType $basisDateTime
     * @return self
     */
    public function setBasisDateTime(\horstoeko\zugferd\udt\DateTimeType $basisDateTime)
    {
        $this->basisDateTime = $basisDateTime;
        return $this;
    }

    /**
     * Gets as basisPeriodMeasure
     *
     * @return \horstoeko\zugferd\udt\MeasureType
     */
    public function getBasisPeriodMeasure()
    {
        return $this->basisPeriodMeasure;
    }

    /**
     * Sets a new basisPeriodMeasure
     *
     * @param \horstoeko\zugferd\udt\MeasureType $basisPeriodMeasure
     * @return self
     */
    public function setBasisPeriodMeasure(\horstoeko\zugferd\udt\MeasureType $basisPeriodMeasure)
    {
        $this->basisPeriodMeasure = $basisPeriodMeasure;
        return $this;
    }

    /**
     * Gets as basisAmount
     *
     * @return \horstoeko\zugferd\udt\AmountType
     */
    public function getBasisAmount()
    {
        return $this->basisAmount;
    }

    /**
     * Sets a new basisAmount
     *
     * @param \horstoeko\zugferd\udt\AmountType $basisAmount
     * @return self
     */
    public function setBasisAmount(\horstoeko\zugferd\udt\AmountType $basisAmount)
    {
        $this->basisAmount = $basisAmount;
        return $this;
    }

    /**
     * Gets as calculationPercent
     *
     * @return float
     */
    public function getCalculationPercent()
    {
        return $this->calculationPercent;
    }

    /**
     * Sets a new calculationPercent
     *
     * @param float $calculationPercent
     * @return self
     */
    public function setCalculationPercent($calculationPercent)
    {
        $this->calculationPercent = $calculationPercent;
        return $this;
    }

    /**
     * Gets as actualPenaltyAmount
     *
     * @return \horstoeko\zugferd\udt\AmountType
     */
    public function getActualPenaltyAmount()
    {
        return $this->actualPenaltyAmount;
    }

    /**
     * Sets a new actualPenaltyAmount
     *
     * @param \horstoeko\zugferd\udt\AmountType $actualPenaltyAmount
     * @return self
     */
    public function setActualPenaltyAmount(\horstoeko\zugferd\udt\AmountType $actualPenaltyAmount)
    {
        $this->actualPenaltyAmount = $actualPenaltyAmount;
        return $this;
    }


}

