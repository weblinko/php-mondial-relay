<?php

namespace MondialRelay\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRet_WSI2_sub_PointRelaisHoraires ArrayType
 * @subpackage Arrays
 */
class ArrayOfRet_WSI2_sub_PointRelaisHoraires extends AbstractStructArrayBase
{
    /**
     * The ret_WSI2_sub_PointRelaisHoraires
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \MondialRelay\StructType\Ret_WSI2_sub_PointRelaisHoraires[]
     */
    public $ret_WSI2_sub_PointRelaisHoraires;
    /**
     * Constructor method for ArrayOfRet_WSI2_sub_PointRelaisHoraires
     * @uses ArrayOfRet_WSI2_sub_PointRelaisHoraires::setRet_WSI2_sub_PointRelaisHoraires()
     * @param \MondialRelay\StructType\Ret_WSI2_sub_PointRelaisHoraires[] $ret_WSI2_sub_PointRelaisHoraires
     */
    public function __construct(array $ret_WSI2_sub_PointRelaisHoraires = array())
    {
        $this
            ->setRet_WSI2_sub_PointRelaisHoraires($ret_WSI2_sub_PointRelaisHoraires);
    }
    /**
     * Get ret_WSI2_sub_PointRelaisHoraires value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \MondialRelay\StructType\Ret_WSI2_sub_PointRelaisHoraires[]|null
     */
    public function getRet_WSI2_sub_PointRelaisHoraires()
    {
        return isset($this->ret_WSI2_sub_PointRelaisHoraires) ? $this->ret_WSI2_sub_PointRelaisHoraires : null;
    }
    /**
     * This method is responsible for validating the values passed to the setRet_WSI2_sub_PointRelaisHoraires method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRet_WSI2_sub_PointRelaisHoraires method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRet_WSI2_sub_PointRelaisHorairesForArrayConstraintsFromSetRet_WSI2_sub_PointRelaisHoraires(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfRet_WSI2_sub_PointRelaisHorairesRet_WSI2_sub_PointRelaisHorairesItem) {
            // validation for constraint: itemType
            if (!$arrayOfRet_WSI2_sub_PointRelaisHorairesRet_WSI2_sub_PointRelaisHorairesItem instanceof \MondialRelay\StructType\Ret_WSI2_sub_PointRelaisHoraires) {
                $invalidValues[] = is_object($arrayOfRet_WSI2_sub_PointRelaisHorairesRet_WSI2_sub_PointRelaisHorairesItem) ? get_class($arrayOfRet_WSI2_sub_PointRelaisHorairesRet_WSI2_sub_PointRelaisHorairesItem) : sprintf('%s(%s)', gettype($arrayOfRet_WSI2_sub_PointRelaisHorairesRet_WSI2_sub_PointRelaisHorairesItem), var_export($arrayOfRet_WSI2_sub_PointRelaisHorairesRet_WSI2_sub_PointRelaisHorairesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ret_WSI2_sub_PointRelaisHoraires property can only contain items of type \MondialRelay\StructType\Ret_WSI2_sub_PointRelaisHoraires, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ret_WSI2_sub_PointRelaisHoraires value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \MondialRelay\StructType\Ret_WSI2_sub_PointRelaisHoraires[] $ret_WSI2_sub_PointRelaisHoraires
     * @return \MondialRelay\ArrayType\ArrayOfRet_WSI2_sub_PointRelaisHoraires
     */
    public function setRet_WSI2_sub_PointRelaisHoraires(array $ret_WSI2_sub_PointRelaisHoraires = array())
    {
        // validation for constraint: array
        if ('' !== ($ret_WSI2_sub_PointRelaisHorairesArrayErrorMessage = self::validateRet_WSI2_sub_PointRelaisHorairesForArrayConstraintsFromSetRet_WSI2_sub_PointRelaisHoraires($ret_WSI2_sub_PointRelaisHoraires))) {
            throw new \InvalidArgumentException($ret_WSI2_sub_PointRelaisHorairesArrayErrorMessage, __LINE__);
        }
        if (is_null($ret_WSI2_sub_PointRelaisHoraires) || (is_array($ret_WSI2_sub_PointRelaisHoraires) && empty($ret_WSI2_sub_PointRelaisHoraires))) {
            unset($this->ret_WSI2_sub_PointRelaisHoraires);
        } else {
            $this->ret_WSI2_sub_PointRelaisHoraires = $ret_WSI2_sub_PointRelaisHoraires;
        }
        return $this;
    }
    /**
     * Add item to ret_WSI2_sub_PointRelaisHoraires value
     * @throws \InvalidArgumentException
     * @param \MondialRelay\StructType\Ret_WSI2_sub_PointRelaisHoraires $item
     * @return \MondialRelay\ArrayType\ArrayOfRet_WSI2_sub_PointRelaisHoraires
     */
    public function addToRet_WSI2_sub_PointRelaisHoraires(\MondialRelay\StructType\Ret_WSI2_sub_PointRelaisHoraires $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \MondialRelay\StructType\Ret_WSI2_sub_PointRelaisHoraires) {
            throw new \InvalidArgumentException(sprintf('The ret_WSI2_sub_PointRelaisHoraires property can only contain items of type \MondialRelay\StructType\Ret_WSI2_sub_PointRelaisHoraires, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ret_WSI2_sub_PointRelaisHoraires[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \MondialRelay\StructType\Ret_WSI2_sub_PointRelaisHoraires|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \MondialRelay\StructType\Ret_WSI2_sub_PointRelaisHoraires|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \MondialRelay\StructType\Ret_WSI2_sub_PointRelaisHoraires|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \MondialRelay\StructType\Ret_WSI2_sub_PointRelaisHoraires|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \MondialRelay\StructType\Ret_WSI2_sub_PointRelaisHoraires|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ret_WSI2_sub_PointRelaisHoraires
     */
    public function getAttributeName()
    {
        return 'ret_WSI2_sub_PointRelaisHoraires';
    }
}
