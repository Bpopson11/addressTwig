<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../contact.php";
    require_once __DIR__."/../address.php";

    session_start();

    if (empty($_SESSION['list_of_contacts'])) {
        $_SESSION['list_of_contacts'] = array();
        $_SESSION['list_of_addresses'] = array();
    }


    $app = new Silex\Application();


    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('contacts.html.twig', array('contacts' => Contact::getAll(), 'addresses' => Address::getAll()));
    });

    $app->post("/contacts", function() use ($app) {
        $contact = new Contact($_POST['name'], $_POST['phone']);
        $address = new Address($_POST['street'], $_POST['city'], $_POST['state'], $_POST['zip']);
        $contact->save();
        $address->save();
        return $app['twig']->render('create_contact.html.twig', array('newcontact' => $contact));
    });


    $app["debug"] = true;

    $app->post("/delete_contacts", function() use ($app) {
        Contact::deleteAll();
        Address::deleteAll();
        return $app['twig']->render('delete_contacts.html.twig');
    });

    return $app;
?>
