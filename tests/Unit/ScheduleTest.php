<?php

namespace Tests\Unit;

use App\Http\Requests\ScheduleRequest;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Validator;

class ScheduleTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->seed('MoviesTableSeeder');
        $this->seed('SchedulesTableSeeder');
    }
}
