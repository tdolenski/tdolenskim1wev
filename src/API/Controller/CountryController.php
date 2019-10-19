<?php
/**
 * Created by PhpStorm.
 * User: gael
 * Date: 18/10/2019
 * Time: 16:24
 */

namespace App\API\Controller;

use App\API\Controller\AbstractController;
use App\API\Repository\CountryRepository;

class CountryController extends AbstractController
{
    private $countryRepository;

    public function __construct(CountryRepository $countryRepository)
    {
        $this->countryRepository = $countryRepository;
    }

    public function index(array $uriVars = [])
    {
        $this->render([
            'countries' => $this->countryRepository->findAll()
        ]);
    }
}