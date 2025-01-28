<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Post;
use Illuminate\Http\UploadedFile;

class PostControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase; // Refresh the database after each test

    public function test_create_post()
    {
        // Simulate a user creating a new post through the web interface
        $response = $this->post(route('posts.store'), [
            'title' => 'New Post Title',
            'description' => 'New Post Description',
            'image' => $this->create_test_image(),
        ]);
 
        // Assert that the post is successfully stored in the database
        $this->assertCount(1, Post::all());
 
        // Assert that the user is redirected to the Posts Index page after post creation
        $response->assertRedirect(route('posts.index'));
    }
 
    // Helper function to create a test image for the post
    private function create_test_image()
    {
        // Create a mock image file using Laravel's UploadedFile class
        $file = UploadedFile::fake()->image('test_image.jpeg');
 
        // Return the path to the temporary image file
        return $file;
    }
}
