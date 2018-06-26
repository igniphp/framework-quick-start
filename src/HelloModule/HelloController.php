<?php declare(strict_types=1);

namespace Application\HelloModule;

use Igni\Http\Controller;
use Igni\Http\Response;
use Igni\Http\Router\Route;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class HelloController implements Controller
{
    public function __invoke(ServerRequestInterface $request): ResponseInterface
    {
        return Response::fromText("Hello {$request->getAttribute('name')}!");
    }

    public static function getRoute(): Route
    {
        return Route::get('/hello/{name}');
    }
}
