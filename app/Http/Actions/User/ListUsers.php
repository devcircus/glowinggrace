<?php

namespace App\Http\Actions\User;

use App\Http\Actions\Action;
use App\Http\Responders\User\ListUsersResponder;
use App\Services\User\ListUsersService;
use Illuminate\Http\Request;

class ListUsers extends Action
{
    /** @var \App\Http\Responders\User\ListUsersResponder */
    private $responder;

    /**
     * Construct a new ListUsers action.
     *
     * @param  \App\Http\Responders\User\ListUsersResponder  $responder
     */
    public function __construct(ListUsersResponder $responder)
    {
        $this->responder = $responder;
    }

    /**
     * List the users.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return $this->responder->withPayload([
            'filters' => $request->all('search', 'trashed'),
            'users' => ListUsersService::call($request->only('search', 'trashed')),
        ])->respond();
    }
}
