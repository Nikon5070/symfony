<?php

namespace App\Controller;

use App\Util\NumberTools;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class LuckyController extends AbstractController
{
    /** @var NumberTools */
    protected $numberTools;

    /**
     * LuckyController constructor.
     * @param \App\Util\NumberTools $numberTools
     */
    public function __construct(\App\Util\NumberTools $numberTools)
    {
        $this->numberTools = $numberTools;
    }


    public function number()
    {
        return new Response(
            '<html><body>Lucky number for "MASTER" version: ' . $this->numberTools . '</body></html>'
        );
    }
}
