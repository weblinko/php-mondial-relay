<?php

namespace MondialRelay\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfArrayOfString ArrayType
 * @subpackage Arrays
 */
class ArrayOfArrayOfString extends AbstractStructArrayBase
{
    /**
     * The ArrayOfString
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \MondialRelay\ArrayType\ArrayOfString[]
     */
    public $ArrayOfString;
    /**
     * Constructor method for ArrayOfArrayOfString
     * @uses ArrayOfArrayOfString::setArrayOfString()
     * @param \MondialRelay\ArrayType\ArrayOfString[] $arrayOfString
     */
    public function __construct(array $arrayOfString = array())
    {
        $this
            ->setArrayOfString($arrayOfString);
    }
    /**
     * Get ArrayOfString value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \MondialRelay\ArrayType\ArrayOfString[]|null
     */
    public function getArrayOfString()
    {
        return isset($this->ArrayOfString) ? $this->ArrayOfString : null;
    }
    /**
     * This method is responsible for validating the values passed to the setArrayOfString method
     * This method is willingly generated in order to preserve the one-line inline validation within the setArrayOfString method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateArrayOfStringForArrayConstraintsFromSetArrayOfString(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfArrayOfStringArrayOfStringItem) {
            // validation for constraint: itemType
            if (!$arrayOfArrayOfStringArrayOfStringItem instanceof \MondialRelay\ArrayType\ArrayOfString) {
                $invalidValues[] = is_object($arrayOfArrayOfStringArrayOfStringItem) ? get_class($arrayOfArrayOfStringArrayOfStringItem) : sprintf('%s(%s)', gettype($arrayOfArrayOfStringArrayOfStringItem), var_export($arrayOfArrayOfStringArrayOfStringItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ArrayOfString property can only contain items of type \MondialRelay\ArrayType\ArrayOfString, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ArrayOfString value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \MondialRelay\ArrayType\ArrayOfString[] $arrayOfString
     * @return \MondialRelay\ArrayType\ArrayOfArrayOfString
     */
    public function setArrayOfString(array $arrayOfString = array())
    {
        // validation for constraint: array
        if ('' !== ($arrayOfStringArrayErrorMessage = self::validateArrayOfStringForArrayConstraintsFromSetArrayOfString($arrayOfString))) {
            throw new \InvalidArgumentException($arrayOfStringArrayErrorMessage, __LINE__);
        }
        if (is_null($arrayOfString) || (is_array($arrayOfString) && empty($arrayOfString))) {
            unset($this->ArrayOfString);
        } else {
            $this->ArrayOfString = $arrayOfString;
        }
        return $this;
    }
    /**
     * Add item to ArrayOfString value
     * @throws \InvalidArgumentException
     * @param \MondialRelay\ArrayType\ArrayOfString $item
     * @return \MondialRelay\ArrayType\ArrayOfArrayOfString
     */
    public function addToArrayOfString(\MondialRelay\ArrayType\ArrayOfString $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \MondialRelay\ArrayType\ArrayOfString) {
            throw new \InvalidArgumentException(sprintf('The ArrayOfString property can only contain items of type \MondialRelay\ArrayType\ArrayOfString, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ArrayOfString[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \MondialRelay\ArrayType\ArrayOfString|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \MondialRelay\ArrayType\ArrayOfString|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \MondialRelay\ArrayType\ArrayOfString|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \MondialRelay\ArrayType\ArrayOfString|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \MondialRelay\ArrayType\ArrayOfString|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ArrayOfString
     */
    public function getAttributeName(): string
    {
        return 'ArrayOfString';
    }
}
