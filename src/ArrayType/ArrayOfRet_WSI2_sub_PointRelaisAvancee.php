<?php

namespace MondialRelay\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRet_WSI2_sub_PointRelaisAvancee ArrayType
 * @subpackage Arrays
 */
class ArrayOfRet_WSI2_sub_PointRelaisAvancee extends AbstractStructArrayBase
{
    /**
     * The ret_WSI2_sub_PointRelaisAvancee
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \MondialRelay\StructType\Ret_WSI2_sub_PointRelaisAvancee[]
     */
    public $ret_WSI2_sub_PointRelaisAvancee;
    /**
     * Constructor method for ArrayOfRet_WSI2_sub_PointRelaisAvancee
     * @uses ArrayOfRet_WSI2_sub_PointRelaisAvancee::setRet_WSI2_sub_PointRelaisAvancee()
     * @param \MondialRelay\StructType\Ret_WSI2_sub_PointRelaisAvancee[] $ret_WSI2_sub_PointRelaisAvancee
     */
    public function __construct(array $ret_WSI2_sub_PointRelaisAvancee = array())
    {
        $this
            ->setRet_WSI2_sub_PointRelaisAvancee($ret_WSI2_sub_PointRelaisAvancee);
    }
    /**
     * Get ret_WSI2_sub_PointRelaisAvancee value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \MondialRelay\StructType\Ret_WSI2_sub_PointRelaisAvancee[]|null
     */
    public function getRet_WSI2_sub_PointRelaisAvancee()
    {
        return isset($this->ret_WSI2_sub_PointRelaisAvancee) ? $this->ret_WSI2_sub_PointRelaisAvancee : null;
    }
    /**
     * This method is responsible for validating the values passed to the setRet_WSI2_sub_PointRelaisAvancee method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRet_WSI2_sub_PointRelaisAvancee method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRet_WSI2_sub_PointRelaisAvanceeForArrayConstraintsFromSetRet_WSI2_sub_PointRelaisAvancee(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfRet_WSI2_sub_PointRelaisAvanceeRet_WSI2_sub_PointRelaisAvanceeItem) {
            // validation for constraint: itemType
            if (!$arrayOfRet_WSI2_sub_PointRelaisAvanceeRet_WSI2_sub_PointRelaisAvanceeItem instanceof \MondialRelay\StructType\Ret_WSI2_sub_PointRelaisAvancee) {
                $invalidValues[] = is_object($arrayOfRet_WSI2_sub_PointRelaisAvanceeRet_WSI2_sub_PointRelaisAvanceeItem) ? get_class($arrayOfRet_WSI2_sub_PointRelaisAvanceeRet_WSI2_sub_PointRelaisAvanceeItem) : sprintf('%s(%s)', gettype($arrayOfRet_WSI2_sub_PointRelaisAvanceeRet_WSI2_sub_PointRelaisAvanceeItem), var_export($arrayOfRet_WSI2_sub_PointRelaisAvanceeRet_WSI2_sub_PointRelaisAvanceeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ret_WSI2_sub_PointRelaisAvancee property can only contain items of type \MondialRelay\StructType\Ret_WSI2_sub_PointRelaisAvancee, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ret_WSI2_sub_PointRelaisAvancee value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \MondialRelay\StructType\Ret_WSI2_sub_PointRelaisAvancee[] $ret_WSI2_sub_PointRelaisAvancee
     * @return \MondialRelay\ArrayType\ArrayOfRet_WSI2_sub_PointRelaisAvancee
     */
    public function setRet_WSI2_sub_PointRelaisAvancee(array $ret_WSI2_sub_PointRelaisAvancee = array())
    {
        // validation for constraint: array
        if ('' !== ($ret_WSI2_sub_PointRelaisAvanceeArrayErrorMessage = self::validateRet_WSI2_sub_PointRelaisAvanceeForArrayConstraintsFromSetRet_WSI2_sub_PointRelaisAvancee($ret_WSI2_sub_PointRelaisAvancee))) {
            throw new \InvalidArgumentException($ret_WSI2_sub_PointRelaisAvanceeArrayErrorMessage, __LINE__);
        }
        if (is_null($ret_WSI2_sub_PointRelaisAvancee) || (is_array($ret_WSI2_sub_PointRelaisAvancee) && empty($ret_WSI2_sub_PointRelaisAvancee))) {
            unset($this->ret_WSI2_sub_PointRelaisAvancee);
        } else {
            $this->ret_WSI2_sub_PointRelaisAvancee = $ret_WSI2_sub_PointRelaisAvancee;
        }
        return $this;
    }
    /**
     * Add item to ret_WSI2_sub_PointRelaisAvancee value
     * @throws \InvalidArgumentException
     * @param \MondialRelay\StructType\Ret_WSI2_sub_PointRelaisAvancee $item
     * @return \MondialRelay\ArrayType\ArrayOfRet_WSI2_sub_PointRelaisAvancee
     */
    public function addToRet_WSI2_sub_PointRelaisAvancee(\MondialRelay\StructType\Ret_WSI2_sub_PointRelaisAvancee $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \MondialRelay\StructType\Ret_WSI2_sub_PointRelaisAvancee) {
            throw new \InvalidArgumentException(sprintf('The ret_WSI2_sub_PointRelaisAvancee property can only contain items of type \MondialRelay\StructType\Ret_WSI2_sub_PointRelaisAvancee, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ret_WSI2_sub_PointRelaisAvancee[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \MondialRelay\StructType\Ret_WSI2_sub_PointRelaisAvancee|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \MondialRelay\StructType\Ret_WSI2_sub_PointRelaisAvancee|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \MondialRelay\StructType\Ret_WSI2_sub_PointRelaisAvancee|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \MondialRelay\StructType\Ret_WSI2_sub_PointRelaisAvancee|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \MondialRelay\StructType\Ret_WSI2_sub_PointRelaisAvancee|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ret_WSI2_sub_PointRelaisAvancee
     */
    public function getAttributeName()
    {
        return 'ret_WSI2_sub_PointRelaisAvancee';
    }
}
