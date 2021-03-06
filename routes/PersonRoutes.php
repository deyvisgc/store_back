<?php

$router->group(['prefix'=>'api/v1/'], function ($app) {
    $app->get('obtener-person', 'Persona\PersonaController@getPerson');
    $app->get('obtener-personById/{idPerson}', 'Persona\PersonaController@getPersonById');
    $app->put('update-person', 'Persona\PersonaController@updatePerson');
    $app->put('update-status', 'Persona\PersonaController@updateStatusPerson');
    $app->post('delete-person', 'Persona\PersonaController@deletePerson');
    $app->post('crear-person', 'Persona\PersonaController@createPerson');
});
