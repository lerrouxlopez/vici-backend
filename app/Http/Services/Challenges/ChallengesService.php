<?php

namespace App\Http\Services\Challenges;

use App\Http\Services\BaseService;

use  App\Http\Repositories\ChalllengesRepository;

// list of repository

class ChallengesService extends BaseService
{   
    private $challenge;
    // private $model;

    public function __construct(
        ChalllengesRepository $challengeRepo
    ){
        $this->challenge = $challengeRepo;
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register($data)
    {   
        $challenge = $this->challenge->register($data);
        return $this->absorb($challenge);
    }

    public function update($data)
    {   
        $challenge = $this->challenge->update($data);
        return $this->absorb($challenge);
    }


}
