<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use App\Http\Controllers\PartiesController;
use App\Models\Parties;
use phpDocumentor\Reflection\Types\Void_;

use function PHPUnit\Framework\assertFalse;
use function PHPUnit\Framework\assertTrue;

class TestCase extends BaseTestCase
{
    use CreatesApplication;
 
    //test si on reçoit une liste de matchs nulle
    public function testExiste(){
    $parties = Parties::all();
    assertFalse($parties, "");
    }
}


