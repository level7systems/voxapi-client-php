<?php
/*
 * APIv3SandboxLib
 *
 * This file was automatically generated by APIMATIC BETA v2.0 on 03/02/2015
 */

class CountryModel {
    /**
     * The three letter identifier for the country
     * @param string $countryCodeA3 public property
     */
    protected $countryCodeA3;

    /**
     * The country name
     * @param string $countryName public property
     */
    protected $countryName;

    /**
     * A flag indicating if there are regulatory requirements in this country
     * @param bool $hasRegulationRequirement public property
     */
    protected $hasRegulationRequirement;

    /**
     * A flag indicating if the country has states
     * @param bool $hasStates public property
     */
    protected $hasStates;

    /**
     * The international phone code of the country
     * @param int $phoneCode public property
     */
    protected $phoneCode;

    /**
	 * Constructor to set initial or default values of member properties
	 * @param   string $countryCodeA3    Initialization value for the property $this->countryCodeA3
	 * @param   string $countryName    Initialization value for the property $this->countryName
	 * @param   bool $hasRegulationRequirement    Initialization value for the property $this->hasRegulationRequirement
	 * @param   bool $hasStates    Initialization value for the property $this->hasStates
	 * @param   int $phoneCode    Initialization value for the property $this->phoneCode
	 */
    public function __construct()
    {
        if(5 == func_num_args())
        {
            $this->countryCodeA3 = func_get_arg(0);
            $this->countryName = func_get_arg(1);
            $this->hasRegulationRequirement = func_get_arg(2);
            $this->hasStates = func_get_arg(3);
            $this->phoneCode = func_get_arg(4);
        }
    }

    /**
     * Return a property of the response if it exists.
     * Possibilities include: code, raw_body, headers, body (if the response is json-decodable)
     * @return mixed
     */
    public function __get($property)
    {
        if (property_exists($this, $property)) {
            //UTF-8 is recommended for correct JSON serialization
            $value = $this->$property;
            if (is_string($value) && mb_detect_encoding($value, "UTF-8", TRUE) != "UTF-8") {
                return utf8_encode($value);
            }
            else {
                return $value;
            }
        }
    }
    
    /**
     * Set the properties of this object
     * @param string $property the property name
     * @param mixed $value the property value
     */
    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            //UTF-8 is recommended for correct JSON serialization
            if (is_string($value) && mb_detect_encoding($value, "UTF-8", TRUE) != "UTF-8") {
                $this->$property = utf8_encode($value);
            }
            else {
                $this->$property = $value;
            }
        }

        return $this;
    }

    /**
     * Encode this object to JSON
     */
    public function to_json()
    {
        $json = array();
        foreach($this as $key => $value) {
            $json[$key] = $value;
        }
        return $json;
    }
}