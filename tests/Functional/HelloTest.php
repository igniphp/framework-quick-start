<?php declare(strict_types=1);

namespace ApplicationTest\Functional;

use Application\HelloModule\HelloController;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ServerRequestInterface;
use Mockery;

class HelloTest extends TestCase
{
    public function testSayHello(): void
    {
        $hello = new HelloController();
        $request = Mockery::mock(ServerRequestInterface::class);
        $request->shouldReceive('getAttribute')
            ->withArgs(['name'])
            ->andReturn('Jon');
        $response = $hello($request);

        self::assertSame('Hello Jon!', (string) $response->getBody());
    }
}
