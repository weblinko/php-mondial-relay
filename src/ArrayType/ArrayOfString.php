<?php

namespace MondialRelay\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfString ArrayType
 * @subpackage Arrays
 */
class ArrayOfString extends AbstractStructArrayBase
{
    /**
     * The string
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    public $string;
    /**
     * Constructor method for ArrayOfString
     * @uses ArrayOfString::setString()
     * @param string[] $string
     */
    public function __construct(array $string = array())
    {
        $this
            ->setString($string);
    }
    /**
     * Get string value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]|null
     */
    public function getString()
    {
        return isset($this->string) ? $this->string : null;
    }
    /**
     * This method is responsible for validating the values passed to the setString method
     * This method is willingly generated in order to preserve the one-line inline validation within the setString method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateStringForArrayConstraintsFromSetString(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfStringStringItem) {
            // validation for constraint: itemType
            if (!is_string($arrayOfStringStringItem)) {
                $invalidValues[] = is_object($arrayOfStringStringItem) ? get_class($arrayOfStringStringItem) : sprintf('%s(%s)', gettype($arrayOfStringStringItem), var_export($arrayOfStringStringItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The string property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set string value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param string[] $string
     * @return \MondialRelay\ArrayType\ArrayOfString
     */
    public function setString(array $string = array())
    {
        // validation for constraint: array
        if ('' !== ($stringArrayErrorMessage = self::validateStringForArrayConstraintsFromSetString($string))) {
            throw new \InvalidArgumentException($stringArrayErrorMessage, __LINE__);
        }
        if (is_null($string) || (is_array($string) && empty($string))) {
            unset($this->string);
        } else {
            $this->string = $string;
        }
        return $this;
    }
    /**
     * Add item to string value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \MondialRelay\ArrayType\ArrayOfString
     */
    public function addToString($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The string property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->string[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string string
     */
    public function getAttributeName(): string
    {
        return 'string';
    }
}
