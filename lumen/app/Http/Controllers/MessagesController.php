<?php
namespace App\Http\Controllers;

use Illuminate\Http\Response;

class MessagesController extends Controller {

    private $_model = "App\Messages";

    use RESTActions;

    public function index() {
        $m = $this -> _model;
        return $this->respond(Response::HTTP_OK, $m::with('user')->get());
    }

    public function show_user_messages($id) {
        $m = $this -> _model;
        $model = $m::where('user_id', $id)->get();
        if(is_null($model)){
            return $this->respond(Response::HTTP_NOT_FOUND);
        }
        return $this->respond(Response::HTTP_OK, $model);
    }

}
