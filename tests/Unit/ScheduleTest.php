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
    }

    /**
     * Scheduleモデルのバリデーションテスト
     *
     * @test
     */
    public function add_invalid_theater_number()
    {
        $request  = new ScheduleRequest();
        $rules    = $request->rules();
        $dataList = [$schedule->theater_number => 0];

        $validator = Validator::make($dataList, $rules);
        $result    = $validator->passes();

        $this->assertEquals('faluse', $result);
    }
}
