<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Attribute\MapQueryParameter;

class ConferenceControler extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(
        #[MapQueryParameter]
        string $hello = 'World',
    ): Response
    {
        $greet = '';
        if ($hello) {
            $greet = sprintf('<h1>Hello %s!</h1>', htmlspecialchars($hello));
        }

        return new Response(<<<EOF
            <html>
                <body>
                    {$greet}
                    <img src="/images/under-construction.gif" />
                </body>
            </html>
            EOF
        );
    }
}
