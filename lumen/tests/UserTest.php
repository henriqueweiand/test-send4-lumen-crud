<?php

// use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    use DatabaseTransactions;

    public function testCreate() {
        $this->disableExceptionHandling();

        $user = factory('App\Users') -> raw();
        $response = $this->json('POST', '/users', $user);
        $response->assertResponseStatus(201);

        $this->seeInDatabase('users', ['email' => $user['email']]);
    }

    public function testList() {
        $this->disableExceptionHandling();
        $users = factory('App\Users', 3) -> create();

        $this->get('/users', []);
        $this->seeStatusCode(200);
        $this->seeJsonStructure([
            [
                'name',
                'lastname',
                'email',
                'telephone',
                'created_at',
                'updated_at',
            ]
        ]);
    }

    public function testShow() {
        $this->disableExceptionHandling();
        $users = factory('App\Users') -> create();

        $this->get('/users/'.$users['id'], []);
        $this->seeStatusCode(200);
        $this->seeJsonStructure(
            [
                'name',
                'lastname',
                'email',
                'telephone',
                'created_at',
                'updated_at',
            ]
        );
    }

    public function testDelete() {
        $this->disableExceptionHandling();
        $users = factory('App\Users') -> create();

        $this->delete('/users/'.$users['id'], []);
        $this->seeStatusCode(204);
    }
}
