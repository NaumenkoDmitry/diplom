<?php

namespace Tests\Feature;

use App\Models\Comment;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class CommentControllerTest extends TestCase
{
    use DatabaseMigrations, WithoutMiddleware;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testStore()
    {
        $comment = factory(Comment::class)->make();
        $response = $this->postJson(route("comments.store"), $comment->getAttributes());
        $this->assertDatabaseHas("comments", $comment->getAttributes());
        $response->assertStatus(200);
    }
    public function testShow()
    {
        $comment1 = factory(Comment::class)->create();
        $comment2 = factory(Comment::class)->create(["puid"=>$comment1->uid]);
        $comment3 = factory(Comment::class)->create(["puid"=>$comment2->uid]);

        $response = $this->getJson(route("comments.show", ["uid"=>$comment1->uid]));
        $response->assertStatus(200);
    }

}
