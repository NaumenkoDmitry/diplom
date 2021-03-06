<?php

namespace Tests\Feature;

use App\Models\Media;
use App\Models\MediaTypes;
use App\Services\Images\ImageNameHelper;
use http\Client\Curl\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class MediaControllerTest extends TestCase
{
    use DatabaseMigrations;
    use WithoutMiddleware;

    protected $testFileName = "test_file_name.jpg";

    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $mock = \Mockery::mock(ImageNameHelper::class);
        $mock->shouldReceive("generateName")->andReturn($this->testFileName);
        $this->app->instance(ImageNameHelper::class, $mock);
        factory(MediaTypes::class,2)->create();
        Storage::fake('local');
        $user = factory(\App\User::class,1)->create()->first();
        $this->actingAs($user);

    }

    public function testStoreImage()
    {
        $model = factory(Media::class,1)->make()->first()->toArray();
        $model['file']= UploadedFile::fake()->image("test_file.jpg",1000,1000);
        $response = $this->post(route('media.store'),$model);
        $media = Media::first();
        $response->assertStatus(302);
        $response->assertSessionHasNoErrors();
        $this->assertEquals(1, Media::all()->count());
        $this->assertEquals($this->testFileName, $media->src);
        $this->assertImagesExists();

    }
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testStoreVideo()
    {
        $model = factory(Media::class,1)->state("video")->make()->first()->toArray();
        $response = $this->post(route('media.store'),$model);
        $response->assertStatus(302);
        $response->assertSessionHasNoErrors();
        $media = Media::first();
        $this->assertEquals(1, Media::all()->count());
        $this->assertImagesMissing();
        $this->assertEquals($model['src'], $media->src);
    }
    public function testRemoveVideo()
    {
        $model = factory(Media::class,1)->state("video")->make()->first()->toArray();
        $this->post(route('media.store'),$model);
        $media = Media::first();
        $response = $this->delete(route('media.destroy', ['medium'=>$media->id]));
        $response->assertStatus(302);
        $response->assertSessionHasNoErrors();
    }
    public function testRemoveImage()
    {
        $this->withExceptionHandling();
        $model = factory(Media::class,1)->make()->first()->toArray();
        $model['file']= UploadedFile::fake()->image("test_file.jpg",1000,1000);
        $this->post(route('media.store'),$model);
        $media = Media::first();
        $response = $this->delete(route('media.destroy', ['medium'=>$media->id]));
        $response->assertStatus(302);
        $response->assertSessionHasNoErrors();
        $this->assertImagesMissing();
        $this->assertEquals(0, Media::all()->count());
    }

    public function testUpdateImagebyVideo()
    {
        $this->withExceptionHandling();
        $model = factory(Media::class,1)->make()->first()->toArray();
        $model['file']= UploadedFile::fake()->image("test_file.jpg",1000,1000);
        $this->post(route('media.store'), $model);

        $model = factory(Media::class,1)->state("video")->make()->first()->toArray();
        $media = Media::first();
        $response = $this->patch(route('media.update', ['medium'=>$media->id]), $model);
        $media = Media::first();
        $response->assertStatus(302);
        $response->assertSessionHasNoErrors();
        $this->assertEquals($model['src'], $media->src);
        $this->assertImagesMissing();

    }
    public function testUpdateVideoByImage()
    {
        $this->withExceptionHandling();
        $model = factory(Media::class,1)->state("video")->make()->first()->toArray();
        $this->post(route('media.store'), $model);
        $media = Media::first();
        $model = factory(Media::class,1)->make()->first()->toArray();
        $model['file']= UploadedFile::fake()->image("test_file.jpg",1000,1000);
        $response = $this->patch(route('media.update', ['medium'=>$media->id]), $model);
        $media = Media::first();
        $response->assertStatus(302);
        $response->assertSessionHasNoErrors();
        $this->assertEquals($this->testFileName, $media->src);
        $this->assertImagesExists();

    }
    protected function assertImagesExists(): void
    {
        Storage::assertExists("public/images/small/{$this->testFileName}");
        Storage::assertExists("public/images/middle/{$this->testFileName}");
        Storage::assertExists("public/images/big/{$this->testFileName}");
    }

    protected function assertImagesMissing(): void
    {
        Storage::assertMissing("public/images/small/{$this->testFileName}");
        Storage::assertMissing("public/images/middle/{$this->testFileName}");
        Storage::assertMissing("public/images/big/{$this->testFileName}");
    }


}
