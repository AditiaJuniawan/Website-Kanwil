<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminRedirectTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_redirects_to_login_when_debug_is_false(): void
    {
        config(['app.debug' => false]);

        $response = $this->get('/admin');

        $response->assertRedirect('/admin/login');
    }
}
