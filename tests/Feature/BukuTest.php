<?php

namespace Tests\Feature;

use App\Models\Buku;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BukuTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    use RefreshDatabase;
    private $user;

    protected function setUp(): void
    {
        parent::setUp();
        $this->user = $this->createUser();
    }

    
}
