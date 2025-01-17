<?php

namespace horstoeko\zugferd\entities\en16931\ram;

/**
 * Class representing SpecifiedPeriodType
 *
 *
 * XSD Type: SpecifiedPeriodType
 */
class SpecifiedPeriodType
{

    /**
     * @var \horstoeko\zugferd\entities\en16931\udt\DateTimeType $startDateTime
     */
    private $startDateTime = null;

    /**
     * @var \horstoeko\zugferd\entities\en16931\udt\DateTimeType $endDateTime
     */
    private $endDateTime = null;

    /**
     * Gets as startDateTime
     *
     * @return \horstoeko\zugferd\entities\en16931\udt\DateTimeType
     */
    public function getStartDateTime()
    {
        return $this->startDateTime;
    }

    /**
     * Sets a new startDateTime
     *
     * @param \horstoeko\zugferd\entities\en16931\udt\DateTimeType $startDateTime
     * @return self
     */
    public function setStartDateTime(\horstoeko\zugferd\entities\en16931\udt\DateTimeType $startDateTime)
    {
        $this->startDateTime = $startDateTime;
        return $this;
    }

    /**
     * Gets as endDateTime
     *
     * @return \horstoeko\zugferd\entities\en16931\udt\DateTimeType
     */
    public function getEndDateTime()
    {
        return $this->endDateTime;
    }

    /**
     * Sets a new endDateTime
     *
     * @param \horstoeko\zugferd\entities\en16931\udt\DateTimeType $endDateTime
     * @return self
     */
    public function setEndDateTime(\horstoeko\zugferd\entities\en16931\udt\DateTimeType $endDateTime)
    {
        $this->endDateTime = $endDateTime;
        return $this;
    }


}

