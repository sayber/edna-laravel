<?php

namespace Edna\Controllers;

use App\Http\Controllers\Controller;
use Edna\Collections\EdnaImOutMessageCollection;
use Edna\Jobs\EdnaMessagesJob;
use Illuminate\Http\Request;


class EdnaCallbackController extends Controller
{

    public function callback(Request $request)
    {
       EdnaMessagesJob::dispatch($request->all());

        return response(['status' => 'ok'], 200);
    }

}
