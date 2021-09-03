<?php

namespace Tests\Feature\Components;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HeaderComponentTest extends TestCase
{
    public function test_renders_title()
    {
        $title = 'Test Title';

        $view = $this->blade(
            '<x-header :title="$title"/>', compact('title')
        );

        $view->assertSee($title);
    }
}
