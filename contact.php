<?php
class Contact
{
    private $name;
    private $phone;
    private $street;
    private $city;
    private $state;
    private $zip;


    function __construct($name, $phone, $street, $city, $state, $zip)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->street = $street;
        $this->city = $city;
        $this->state = $state;
        $this->zip = $zip;
    }

    function setName($new_name)
    {
        $this->name = (string) $new_name;
    }

    function getName()
    {
        return $this->name;
    }

    function setPhone($new_phone)
    {
        $this->phone = (string) $new_phone;
    }

    function getPhone()
    {
        return $this->phone;
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
        array_push($_SESSION['list_of_contacts'], $this);
    }

    static function getAll()
    {
        return $_SESSION['list_of_contacts'];
    }

    static function deleteAll()
    {
        $_SESSION['list_of_contacts'] = array();
    }
}

?>
