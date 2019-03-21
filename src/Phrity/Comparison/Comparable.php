<?php
/**
 * File for Comparable inteface.
 * Part of Phrity/Comparison package.
 */
namespace Phrity\Comparison;

/**
 * Interface for comparable instances.
 */
interface Comparable extends Equalable
{
    /**
     * Compare $this and $that and return result as comparison identifier as integer.
     * @param  mixed $that            The instance to compare with
     * @return integer                Must return  0 if $this is equal to $that
     *                                Must return -1 if $this is less than $that
     *                                Must return  1 if $this is greater than $that
     * @throws IncomparableException  Must throw if $this can not be compared with $that
     */
    public function compare($that);

    /**
     * If $this is greater than $that.
     * @param  mixed $that            The instance to compare with
     * @return boolean                True if $this is greater than $that
     * @throws IncomparableException  Must throw if $this can not be compared with $that
     */
    public function greaterThan($that);

    /**
     * If $this is greater than or equal to $that.
     * @param  mixed $that            The instance to compare with
     * @return boolean                True if $this is greater than or equal to $that
     * @throws IncomparableException  Must throw if $this can not be compared with $that
     */
    public function greaterThanOrEqual($that);

    /**
     * If $this is less than $that.
     * @param  mixed $that            The instance to compare with
     * @return boolean                True if $this is less than $that
     * @throws IncomparableException  Must throw if $this can not be compared with $that
     */
    public function lessThan($that);

    /**
     * If $this is less than or equal to $this.
     * @param  mixed $that            The instance to compare with
     * @return boolean                True if $this is less than or equal to $this
     * @throws IncomparableException  Must throw if $this can not be compared with $that
     */
    public function lessThanOrEqual($that);
}
