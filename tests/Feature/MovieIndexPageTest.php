<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Movie;

class MovieIndexPageTest extends TestCase
{
    use RefreshDatabase;

    public function setUp()
    {
        parent::setUp();

        $this->seed('MoviesTableSeeder');
    }

    /**
     * ステータスが200になる.
     *
     * @return void
     */
    public function test_status_code()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * 映画の情報が表示されている.
     *
     * @test
     */
    public function set_movies_data()
    {
        $movies = Movie::All();
        $response = $this->get('/');

        foreach($movies as $movie){
          $response->assertSee($movie->title);
          $response->assertSee($movie->detail);
        }
    }


}
