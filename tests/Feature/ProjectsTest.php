<?php

namespace Tests\Feature;

use App\Models\Project;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;
use Tests\TestCase;

class ProjectsTest extends TestCase
{
    use DatabaseMigrations;

    public User $user;

    public function setUp(): void
    {
        parent::setUp();

        $this->user = User::factory()->create();

        $this->withoutExceptionHandling();
    }

    /**
     * A basic feature test example.
     */
    public function test_user_can_add_project(): void
    {
        $project = Project::factory()->make();

        $response = $this
            ->actingAs($this->user)
            ->post('/projects', array_merge(['user_id' => $this->user->id], $project->toArray()));

        $response->assertCreated();
        $this->assertDatabaseHas('projects', $project->toArray());
    }

    /**
     * @return void
     */
    public function test_validation_errors_for_project(): void
    {
        $response = $this->actingAs($this->user)
            ->post('/projects', [
                'user_id' => 1,
            ]);

        $response
            ->assertStatus(302)
            ->assertSessionHas(['error' => 'Failed Creating Project!']);
    }

    /**
     * @return void
     */
    public function test_a_project_can_be_deleted(): void
    {
        $project =  Project::factory()->create();

        $response = $this
            ->actingAs($this->user)
            ->call('DELETE','/projects/'.$project->id);

        $response
            ->assertOk()
            ->assertJson([
                "id"      => $project->id,
                "deleted" => true
            ]);
    }
}
