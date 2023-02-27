<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StoriesTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @var User|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Factories\HasFactory|\Illuminate\Database\Eloquent\Model|mixed
     */
    public User $user;

    public function setUp(): void
    {
        parent::setUp();

        $this->user = User::factory()->create();

        $this->withoutExceptionHandling();
    }

    /**
     * Test for getting all stories.
     */
    public function test_list_all_stories(): void
    {
        $response = $this->get('/stories');

        $response->assertStatus(200);
    }
}
