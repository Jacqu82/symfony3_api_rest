<?php

namespace Tests\AppBundle\Controller\Api;

use AppBundle\Test\ApiTestCase;

class TokenControllerTest extends ApiTestCase
{
    public function testPOSTCreateToken()
    {
        $this->createUser('weaverryan', 'qwerty');

        $response = $this->client->post('/api/tokens', [
            'auth' => ['weaverryan', 'qwerty']
        ]);

        $this->assertEquals(200, $response->getStatusCode());
        $this->asserter()->assertResponsePropertyExists(
            $response,
            'token'
        );
        $this->debugResponse($response);
    }

    public function testPOSTTokenInvalidCredentials()
    {
        $this->createUser('weaverryan', 'qwerty');

        $response = $this->client->post('/api/tokens', [
            'auth' => ['weaverryan', 'asdfgh']
        ]);

        $this->assertEquals(401, $response->getStatusCode());
        $this->assertEquals('application/problem+json', $response->getHeader('Content-Type')[0]);
        $this->asserter()->assertResponsePropertyEquals($response, 'type', 'about:blank');
        $this->asserter()->assertResponsePropertyEquals($response, 'title', 'Unauthorized');
        $this->asserter()->assertResponsePropertyEquals($response, 'detail', 'Invalid credentials.');
        //$this->debugResponse($response);
    }
}
