<?php
class Address
{
    private $street;
    private $city;
    private $state;
    private $zip;


    function __construct($street, $city, $state, $zip)
    {
        $this->street = $street;
        $this->city = $city;
        $this->state = $state;
        $this->zip = $zip;
    }

    function setStreet($new_street)
    {
        $this->street = (string) $new_street;
    }

    function getStreet()
    {
        return $this->street;
    }

    function setCity($new_city)
    {
        $this->city = (string) $new_city;
    }

    function getCity()
    {
        return $this->city;
    }

    function setState($new_state)
    {
        $this->state = (string) $new_state;
    }

    function getState()
    {
        return $this->state;
    }

    function setZip($new_zip)
    {
        $this->zip = (string) $new_zip;
    }

    function getZip()
    {
        return $this->zip;
    }

    function save()
    {
        array_push($_SESSION['list_of_addresses'], $this);
    }

    static function getAll()
    {
        return $_SESSION['list_of_addresses'];
    }

    static function deleteAll()
    {
        $_SESSION['list_of_addresses'] = array();
    }
}
?>
