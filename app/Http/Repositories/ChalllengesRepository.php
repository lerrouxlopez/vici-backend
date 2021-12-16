<?php


namespace App\Http\Repositories;

use App\Http\Repositories\BaseRepository;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use DateTime;
/**
 * Class FundRepository
 *
 * @package App\Data\Repositories\Users
 */
class ChalllengesRepository extends BaseRepository
{
    /**
     * Declaration of Variables
     */
    private $campaign;
    

    /**
     * PropertyRepository constructor.
     * @param Fund 
     */
    public function __construct( 

    ){ 

    }

    public function register($data)
    {
        if($data['name'] == "Challenge 1"){
            return [
                'status' => 500,
                'message' => 'Something is wrong',
                'data' => [],
            ];
        }

        return [
            'status' => 200,
            'message' => 'Success!',
            'data' => [],
        ];
    }

    public function update($data)
    {
        return [
            'status' => 200,
            'message' => 'Success!',
            'data' => $data,
        ];
    }

    
    
}
