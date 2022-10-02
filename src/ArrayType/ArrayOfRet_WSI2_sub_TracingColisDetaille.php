<?php

namespace MondialRelay\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRet_WSI2_sub_TracingColisDetaille ArrayType
 * @subpackage Arrays
 */
class ArrayOfRet_WSI2_sub_TracingColisDetaille extends AbstractStructArrayBase
{
    /**
     * The ret_WSI2_sub_TracingColisDetaille
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \MondialRelay\StructType\Ret_WSI2_sub_TracingColisDetaille[]
     */
    public $ret_WSI2_sub_TracingColisDetaille;
    /**
     * Constructor method for ArrayOfRet_WSI2_sub_TracingColisDetaille
     * @uses ArrayOfRet_WSI2_sub_TracingColisDetaille::setRet_WSI2_sub_TracingColisDetaille()
     * @param \MondialRelay\StructType\Ret_WSI2_sub_TracingColisDetaille[] $ret_WSI2_sub_TracingColisDetaille
     */
    public function __construct(array $ret_WSI2_sub_TracingColisDetaille = array())
    {
        $this
            ->setRet_WSI2_sub_TracingColisDetaille($ret_WSI2_sub_TracingColisDetaille);
    }
    /**
     * Get ret_WSI2_sub_TracingColisDetaille value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \MondialRelay\StructType\Ret_WSI2_sub_TracingColisDetaille[]|null
     */
    public function getRet_WSI2_sub_TracingColisDetaille()
    {
        return isset($this->ret_WSI2_sub_TracingColisDetaille) ? $this->ret_WSI2_sub_TracingColisDetaille : null;
    }
    /**
     * This method is responsible for validating the values passed to the setRet_WSI2_sub_TracingColisDetaille method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRet_WSI2_sub_TracingColisDetaille method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRet_WSI2_sub_TracingColisDetailleForArrayConstraintsFromSetRet_WSI2_sub_TracingColisDetaille(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfRet_WSI2_sub_TracingColisDetailleRet_WSI2_sub_TracingColisDetailleItem) {
            // validation for constraint: itemType
            if (!$arrayOfRet_WSI2_sub_TracingColisDetailleRet_WSI2_sub_TracingColisDetailleItem instanceof \MondialRelay\StructType\Ret_WSI2_sub_TracingColisDetaille) {
                $invalidValues[] = is_object($arrayOfRet_WSI2_sub_TracingColisDetailleRet_WSI2_sub_TracingColisDetailleItem) ? get_class($arrayOfRet_WSI2_sub_TracingColisDetailleRet_WSI2_sub_TracingColisDetailleItem) : sprintf('%s(%s)', gettype($arrayOfRet_WSI2_sub_TracingColisDetailleRet_WSI2_sub_TracingColisDetailleItem), var_export($arrayOfRet_WSI2_sub_TracingColisDetailleRet_WSI2_sub_TracingColisDetailleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ret_WSI2_sub_TracingColisDetaille property can only contain items of type \MondialRelay\StructType\Ret_WSI2_sub_TracingColisDetaille, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ret_WSI2_sub_TracingColisDetaille value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \MondialRelay\StructType\Ret_WSI2_sub_TracingColisDetaille[] $ret_WSI2_sub_TracingColisDetaille
     * @return \MondialRelay\ArrayType\ArrayOfRet_WSI2_sub_TracingColisDetaille
     */
    public function setRet_WSI2_sub_TracingColisDetaille(array $ret_WSI2_sub_TracingColisDetaille = array())
    {
        // validation for constraint: array
        if ('' !== ($ret_WSI2_sub_TracingColisDetailleArrayErrorMessage = self::validateRet_WSI2_sub_TracingColisDetailleForArrayConstraintsFromSetRet_WSI2_sub_TracingColisDetaille($ret_WSI2_sub_TracingColisDetaille))) {
            throw new \InvalidArgumentException($ret_WSI2_sub_TracingColisDetailleArrayErrorMessage, __LINE__);
        }
        if (is_null($ret_WSI2_sub_TracingColisDetaille) || (is_array($ret_WSI2_sub_TracingColisDetaille) && empty($ret_WSI2_sub_TracingColisDetaille))) {
            unset($this->ret_WSI2_sub_TracingColisDetaille);
        } else {
            $this->ret_WSI2_sub_TracingColisDetaille = $ret_WSI2_sub_TracingColisDetaille;
        }
        return $this;
    }
    /**
     * Add item to ret_WSI2_sub_TracingColisDetaille value
     * @throws \InvalidArgumentException
     * @param \MondialRelay\StructType\Ret_WSI2_sub_TracingColisDetaille $item
     * @return \MondialRelay\ArrayType\ArrayOfRet_WSI2_sub_TracingColisDetaille
     */
    public function addToRet_WSI2_sub_TracingColisDetaille(\MondialRelay\StructType\Ret_WSI2_sub_TracingColisDetaille $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \MondialRelay\StructType\Ret_WSI2_sub_TracingColisDetaille) {
            throw new \InvalidArgumentException(sprintf('The ret_WSI2_sub_TracingColisDetaille property can only contain items of type \MondialRelay\StructType\Ret_WSI2_sub_TracingColisDetaille, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ret_WSI2_sub_TracingColisDetaille[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \MondialRelay\StructType\Ret_WSI2_sub_TracingColisDetaille|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \MondialRelay\StructType\Ret_WSI2_sub_TracingColisDetaille|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \MondialRelay\StructType\Ret_WSI2_sub_TracingColisDetaille|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \MondialRelay\StructType\Ret_WSI2_sub_TracingColisDetaille|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \MondialRelay\StructType\Ret_WSI2_sub_TracingColisDetaille|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ret_WSI2_sub_TracingColisDetaille
     */
    public function getAttributeName()
    {
        return 'ret_WSI2_sub_TracingColisDetaille';
    }
}
