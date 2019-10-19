<?php
/**
 * Created by PhpStorm.
 * User: gael
 * Date: 19/10/2019
 * Time: 12:12
 */

namespace App\Front\Controller;

use App\Front\Controller\AbstractController;

class CountryController extends AbstractController
{
    public function index(array $uriVars = [])
    {
        $date = new \DateTime();

        $this->render('country/index', [
            'date' => $date->format('d/m/Y')
        ]);
    }
}