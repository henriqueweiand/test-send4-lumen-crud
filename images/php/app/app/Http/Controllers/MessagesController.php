<?php namespace App\Http\Controllers;

use Illuminate\Http\Response;

class MessagesController extends Controller {

    const MODEL = "App\Messages";

    use RESTActions;

    public function index() {
        $m = self::MODEL;
        return $this->respond(Response::HTTP_OK, $m::with('user')->get());
    }

    public function show_user_messages($id) {
        $m = self::MODEL;
        $model = $m::where('user_id', $id)->get();
        if(is_null($model)){
            return $this->respond(Response::HTTP_NOT_FOUND);
        }
        return $this->respond(Response::HTTP_OK, $model);
    }

}
