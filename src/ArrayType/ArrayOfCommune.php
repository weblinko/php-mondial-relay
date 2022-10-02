<?php

namespace MondialRelay\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCommune ArrayType
 * @subpackage Arrays
 */
class ArrayOfCommune extends AbstractStructArrayBase
{
    /**
     * The Commune
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \MondialRelay\StructType\Commune[]
     */
    public $Commune;
    /**
     * Constructor method for ArrayOfCommune
     * @uses ArrayOfCommune::setCommune()
     * @param \MondialRelay\StructType\Commune[] $commune
     */
    public function __construct(array $commune = array())
    {
        $this
            ->setCommune($commune);
    }
    /**
     * Get Commune value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \MondialRelay\StructType\Commune[]|null
     */
    public function getCommune()
    {
        return isset($this->Commune) ? $this->Commune : null;
    }
    /**
     * This method is responsible for validating the values passed to the setCommune method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCommune method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCommuneForArrayConstraintsFromSetCommune(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfCommuneCommuneItem) {
            // validation for constraint: itemType
            if (!$arrayOfCommuneCommuneItem instanceof \MondialRelay\StructType\Commune) {
                $invalidValues[] = is_object($arrayOfCommuneCommuneItem) ? get_class($arrayOfCommuneCommuneItem) : sprintf('%s(%s)', gettype($arrayOfCommuneCommuneItem), var_export($arrayOfCommuneCommuneItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Commune property can only contain items of type \MondialRelay\StructType\Commune, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Commune value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \MondialRelay\StructType\Commune[] $commune
     * @return \MondialRelay\ArrayType\ArrayOfCommune
     */
    public function setCommune(array $commune = array())
    {
        // validation for constraint: array
        if ('' !== ($communeArrayErrorMessage = self::validateCommuneForArrayConstraintsFromSetCommune($commune))) {
            throw new \InvalidArgumentException($communeArrayErrorMessage, __LINE__);
        }
        if (is_null($commune) || (is_array($commune) && empty($commune))) {
            unset($this->Commune);
        } else {
            $this->Commune = $commune;
        }
        return $this;
    }
    /**
     * Add item to Commune value
     * @throws \InvalidArgumentException
     * @param \MondialRelay\StructType\Commune $item
     * @return \MondialRelay\ArrayType\ArrayOfCommune
     */
    public function addToCommune(\MondialRelay\StructType\Commune $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \MondialRelay\StructType\Commune) {
            throw new \InvalidArgumentException(sprintf('The Commune property can only contain items of type \MondialRelay\StructType\Commune, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Commune[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \MondialRelay\StructType\Commune|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \MondialRelay\StructType\Commune|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \MondialRelay\StructType\Commune|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \MondialRelay\StructType\Commune|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \MondialRelay\StructType\Commune|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Commune
     */
    public function getAttributeName()
    {
        return 'Commune';
    }
}
