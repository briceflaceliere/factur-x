<?php

namespace horstoeko\zugferd\ram;

/**
 * Class representing DocumentLineDocumentType
 *
 *
 * XSD Type: DocumentLineDocumentType
 */
class DocumentLineDocumentType
{

    /**
     * @var \horstoeko\zugferd\udt\IDType $lineID
     */
    private $lineID = null;

    /**
     * @var string $lineStatusCode
     */
    private $lineStatusCode = null;

    /**
     * @var \horstoeko\zugferd\udt\CodeType $lineStatusReasonCode
     */
    private $lineStatusReasonCode = null;

    /**
     * @var \horstoeko\zugferd\ram\NoteType[] $includedNote
     */
    private $includedNote = [
        
    ];

    /**
     * Gets as lineID
     *
     * @return \horstoeko\zugferd\udt\IDType
     */
    public function getLineID()
    {
        return $this->lineID;
    }

    /**
     * Sets a new lineID
     *
     * @param \horstoeko\zugferd\udt\IDType $lineID
     * @return self
     */
    public function setLineID(\horstoeko\zugferd\udt\IDType $lineID)
    {
        $this->lineID = $lineID;
        return $this;
    }

    /**
     * Gets as lineStatusCode
     *
     * @return string
     */
    public function getLineStatusCode()
    {
        return $this->lineStatusCode;
    }

    /**
     * Sets a new lineStatusCode
     *
     * @param string $lineStatusCode
     * @return self
     */
    public function setLineStatusCode($lineStatusCode)
    {
        $this->lineStatusCode = $lineStatusCode;
        return $this;
    }

    /**
     * Gets as lineStatusReasonCode
     *
     * @return \horstoeko\zugferd\udt\CodeType
     */
    public function getLineStatusReasonCode()
    {
        return $this->lineStatusReasonCode;
    }

    /**
     * Sets a new lineStatusReasonCode
     *
     * @param \horstoeko\zugferd\udt\CodeType $lineStatusReasonCode
     * @return self
     */
    public function setLineStatusReasonCode(\horstoeko\zugferd\udt\CodeType $lineStatusReasonCode)
    {
        $this->lineStatusReasonCode = $lineStatusReasonCode;
        return $this;
    }

    /**
     * Adds as includedNote
     *
     * @return self
     * @param \horstoeko\zugferd\ram\NoteType $includedNote
     */
    public function addToIncludedNote(\horstoeko\zugferd\ram\NoteType $includedNote)
    {
        $this->includedNote[] = $includedNote;
        return $this;
    }

    /**
     * isset includedNote
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIncludedNote($index)
    {
        return isset($this->includedNote[$index]);
    }

    /**
     * unset includedNote
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIncludedNote($index)
    {
        unset($this->includedNote[$index]);
    }

    /**
     * Gets as includedNote
     *
     * @return \horstoeko\zugferd\ram\NoteType[]
     */
    public function getIncludedNote()
    {
        return $this->includedNote;
    }

    /**
     * Sets a new includedNote
     *
     * @param \horstoeko\zugferd\ram\NoteType[] $includedNote
     * @return self
     */
    public function setIncludedNote(array $includedNote)
    {
        $this->includedNote = $includedNote;
        return $this;
    }


}

