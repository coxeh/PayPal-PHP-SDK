<?php

namespace PayPal\Api;

use PayPal\Common\PayPalModel;

/**
 * Class Subscriber
 *
 * Shipping information for the invoice recipient.
 *
 * @package PayPal\Api
 *
 * @property string prefix
 * @property string given_name
 * @property string surname
 * @property string middle_name
 * @property string suffix
 * @property string alternate_full_name
 * @property string full_name
 */
class Name extends PayPalModel
{
    /**
     * The prefix.
     *
     * @param string $prefix
     * 
     * @return $this
     */
    public function setPrefix($prefix)
    {
        $this->prefix = $prefix;
        return $this;
    }

    /**
     * The invoice prefix.
     *
     * @return string
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * The given name.
     *
     * @param string $givenName
     *
     * @return $this
     */
    public function setGivenName($givenName)
    {
        $this->given_name = $givenName;
        return $this;
    }

    /**
     * The invoice given name.
     *
     * @return string
     */
    public function getGivenName()
    {
        return $this->given_name;
    }

    /**
     * The surname.
     *
     * @param string $surname
     *
     * @return $this
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
        return $this;
    }

    /**
     * The invoice surname.
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * The middle name.
     *
     * @param string $middleName
     *
     * @return $this
     */
    public function setMiddleName($middleName)
    {
        $this->middle_name = $middleName;
        return $this;
    }

    /**
     * The invoice middle name.
     *
     * @return string
     */
    public function getMiddleName()
    {
        return $this->middle_name;
    }

    /**
     * The suffix.
     *
     * @param string $suffix
     *
     * @return $this
     */
    public function setSuffix($suffix)
    {
        $this->suffix = $suffix;
        return $this;
    }

    /**
     * The invoice suffix.
     *
     * @return string
     */
    public function getSuffix()
    {
        return $this->suffix;
    }

    /**
     * The alternate full name.
     *
     * @param string $alternateFullName
     *
     * @return $this
     */
    public function setAlternateFullName($alternateFullName)
    {
        $this->alternate_full_name = $alternateFullName;
        return $this;
    }

    /**
     * The invoice alternate full name.
     *
     * @return string
     */
    public function getAlternateFullName()
    {
        return $this->alternate_full_name;
    }

    /**
     * The full name.
     *
     * @param string $alternateFullName
     *
     * @return $this
     */
    public function setFullName($fullName)
    {
        $this->full_name = $fullName;
        return $this;
    }

    /**
     * The invoice full name.
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->full_name;
    }
}
