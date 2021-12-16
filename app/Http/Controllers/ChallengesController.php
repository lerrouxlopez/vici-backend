<?php

namespace App\Http\Controllers;

use App\Http\Services\Challenges\ChallengesService;

use Illuminate\Http\Request;

class ChallengesController extends Controller
{
    //

    public function insert(
        Request $request,
        ChallengesService $challenge
    )
    {
        $data = $request->all();
        $info = $challenge->register($data);
        return $info;
    }

    public function update(
        Request $request,
        ChallengesService $challenge,
        $id
    )
    {
        $data = $request->all();
        $data['id'] = $id;
        $info = $challenge->update($data);
        return $info;
    }
    
    
}
