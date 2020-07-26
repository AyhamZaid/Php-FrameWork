<?php



        $router->get('php/php7' ,'PagesController@home');
        $router->get( 'php/php7/login' , 'PagesController@login');
        $router->get( 'php/php7/about' , 'PagesController@about');
        $router->get( 'php/php7/contact' , 'PagesController@contact') ;
        $router->get('php/php7/users', 'UsersController@index');
        $router->post('php/php7/users', 'UsersController@store');
     
     
        

    

?>
