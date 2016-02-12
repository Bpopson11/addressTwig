<?php
class Contact
{
    private $name;
    private $phone;


    function __construct($name, $phone)
    {
        $this->name = $name;
        $this->phone = $phone;
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
