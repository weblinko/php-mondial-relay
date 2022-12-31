<?php

namespace MondialRelay\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPointRelais_Details ArrayType
 * @subpackage Arrays
 */
class ArrayOfPointRelais_Details extends AbstractStructArrayBase
{
    /**
     * The PointRelais_Details
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \MondialRelay\StructType\PointRelais_Details[]
     */
    public $PointRelais_Details;
    /**
     * Constructor method for ArrayOfPointRelais_Details
     * @uses ArrayOfPointRelais_Details::setPointRelais_Details()
     * @param \MondialRelay\StructType\PointRelais_Details[] $pointRelais_Details
     */
    public function __construct(array $pointRelais_Details = array())
    {
        $this
            ->setPointRelais_Details($pointRelais_Details);
    }
    /**
     * Get PointRelais_Details value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \MondialRelay\StructType\PointRelais_Details[]|null
     */
    public function getPointRelais_Details()
    {
        return isset($this->PointRelais_Details) ? $this->PointRelais_Details : null;
    }
    /**
     * This method is responsible for validating the values passed to the setPointRelais_Details method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPointRelais_Details method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePointRelais_DetailsForArrayConstraintsFromSetPointRelais_Details(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfPointRelais_DetailsPointRelais_DetailsItem) {
            // validation for constraint: itemType
            if (!$arrayOfPointRelais_DetailsPointRelais_DetailsItem instanceof \MondialRelay\StructType\PointRelais_Details) {
                $invalidValues[] = is_object($arrayOfPointRelais_DetailsPointRelais_DetailsItem) ? get_class($arrayOfPointRelais_DetailsPointRelais_DetailsItem) : sprintf('%s(%s)', gettype($arrayOfPointRelais_DetailsPointRelais_DetailsItem), var_export($arrayOfPointRelais_DetailsPointRelais_DetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PointRelais_Details property can only contain items of type \MondialRelay\StructType\PointRelais_Details, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set PointRelais_Details value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \MondialRelay\StructType\PointRelais_Details[] $pointRelais_Details
     * @return \MondialRelay\ArrayType\ArrayOfPointRelais_Details
     */
    public function setPointRelais_Details(array $pointRelais_Details = array())
    {
        // validation for constraint: array
        if ('' !== ($pointRelais_DetailsArrayErrorMessage = self::validatePointRelais_DetailsForArrayConstraintsFromSetPointRelais_Details($pointRelais_Details))) {
            throw new \InvalidArgumentException($pointRelais_DetailsArrayErrorMessage, __LINE__);
        }
        if (is_null($pointRelais_Details) || (is_array($pointRelais_Details) && empty($pointRelais_Details))) {
            unset($this->PointRelais_Details);
        } else {
            $this->PointRelais_Details = $pointRelais_Details;
        }
        return $this;
    }
    /**
     * Add item to PointRelais_Details value
     * @throws \InvalidArgumentException
     * @param \MondialRelay\StructType\PointRelais_Details $item
     * @return \MondialRelay\ArrayType\ArrayOfPointRelais_Details
     */
    public function addToPointRelais_Details(\MondialRelay\StructType\PointRelais_Details $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \MondialRelay\StructType\PointRelais_Details) {
            throw new \InvalidArgumentException(sprintf('The PointRelais_Details property can only contain items of type \MondialRelay\StructType\PointRelais_Details, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->PointRelais_Details[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \MondialRelay\StructType\PointRelais_Details|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \MondialRelay\StructType\PointRelais_Details|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \MondialRelay\StructType\PointRelais_Details|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \MondialRelay\StructType\PointRelais_Details|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \MondialRelay\StructType\PointRelais_Details|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PointRelais_Details
     */
    public function getAttributeName(): string
    {
        return 'PointRelais_Details';
    }
}
