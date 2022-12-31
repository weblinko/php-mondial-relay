<?php

namespace MondialRelay\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPeriode ArrayType
 * @subpackage Arrays
 */
class ArrayOfPeriode extends AbstractStructArrayBase
{
    /**
     * The Periode
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \MondialRelay\StructType\Periode[]
     */
    public $Periode;
    /**
     * Constructor method for ArrayOfPeriode
     * @uses ArrayOfPeriode::setPeriode()
     * @param \MondialRelay\StructType\Periode[] $periode
     */
    public function __construct(array $periode = array())
    {
        $this
            ->setPeriode($periode);
    }
    /**
     * Get Periode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \MondialRelay\StructType\Periode[]|null
     */
    public function getPeriode()
    {
        return isset($this->Periode) ? $this->Periode : null;
    }
    /**
     * This method is responsible for validating the values passed to the setPeriode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPeriode method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePeriodeForArrayConstraintsFromSetPeriode(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfPeriodePeriodeItem) {
            // validation for constraint: itemType
            if (!$arrayOfPeriodePeriodeItem instanceof \MondialRelay\StructType\Periode) {
                $invalidValues[] = is_object($arrayOfPeriodePeriodeItem) ? get_class($arrayOfPeriodePeriodeItem) : sprintf('%s(%s)', gettype($arrayOfPeriodePeriodeItem), var_export($arrayOfPeriodePeriodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Periode property can only contain items of type \MondialRelay\StructType\Periode, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Periode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \MondialRelay\StructType\Periode[] $periode
     * @return \MondialRelay\ArrayType\ArrayOfPeriode
     */
    public function setPeriode(array $periode = array())
    {
        // validation for constraint: array
        if ('' !== ($periodeArrayErrorMessage = self::validatePeriodeForArrayConstraintsFromSetPeriode($periode))) {
            throw new \InvalidArgumentException($periodeArrayErrorMessage, __LINE__);
        }
        if (is_null($periode) || (is_array($periode) && empty($periode))) {
            unset($this->Periode);
        } else {
            $this->Periode = $periode;
        }
        return $this;
    }
    /**
     * Add item to Periode value
     * @throws \InvalidArgumentException
     * @param \MondialRelay\StructType\Periode $item
     * @return \MondialRelay\ArrayType\ArrayOfPeriode
     */
    public function addToPeriode(\MondialRelay\StructType\Periode $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \MondialRelay\StructType\Periode) {
            throw new \InvalidArgumentException(sprintf('The Periode property can only contain items of type \MondialRelay\StructType\Periode, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Periode[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \MondialRelay\StructType\Periode|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \MondialRelay\StructType\Periode|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \MondialRelay\StructType\Periode|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \MondialRelay\StructType\Periode|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \MondialRelay\StructType\Periode|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Periode
     */
    public function getAttributeName(): string
    {
        return 'Periode';
    }
}
