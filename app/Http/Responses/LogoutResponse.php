<?php

namespace App\Http\Response;

use Laravel\Fortify\Contracts\LogoutResponse as LogoutResponseContract;

class LogoutResponse implements LogoutResponseContract
{
    /**
     * toResponse
     *
     * @param mixed $request
     * @return void
     */

    public function toResponse($request)
    {
        return redirect('/login');
    }
}
