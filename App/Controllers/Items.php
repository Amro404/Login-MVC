<?php

namespace App\Controllers;	

use \App\Models\User;
use \Core\View;
use \App\Auth;

/**
 * Home controller
 *
 * PHP version 7.0
 */
class Items extends Authenticated {

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction(){

        View::renderTemplate("Items/index.html");
    }

}
