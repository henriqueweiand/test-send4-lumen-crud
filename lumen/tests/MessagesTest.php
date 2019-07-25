<?php

// use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class MessagesTest extends TestCase
{
    use DatabaseTransactions;

    public function testCreate() {
        $this->disableExceptionHandling();

        $message = factory('App\Messages') -> raw();
        $response = $this->json('POST', '/messages', $message);
        $response->assertResponseStatus(201);

        $this->seeInDatabase('messages', ['user_id' => $message['user_id']]);
    }

    public function testList() {
        $this->disableExceptionHandling();
        $messages = factory('App\Messages', 3) -> create();

        $this->get('/messages', []);
        $this->seeStatusCode(200);
        $this->seeJsonStructure([
            [
                'user_id',
                'description',
                'created_at',
                'updated_at',
            ]
        ]);
    }

    public function testShow() {
        $this->disableExceptionHandling();
        $messages = factory('App\Messages') -> create();

        $this->get('/messages/'.$messages['id'], []);
        $this->seeStatusCode(200);
        $this->seeJsonStructure(
            [
                'user_id',
                'description',
                'created_at',
                'updated_at',
            ]
        );
    }

    public function testDelete() {
        $this->disableExceptionHandling();
        $messages = factory('App\Messages') -> create();

        $this->delete('/messages/'.$messages['id'], []);
        $this->seeStatusCode(204);
    }
}
