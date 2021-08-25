<?php

namespace Tests\Feature\Components;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\User;

class TweetComponentTest extends TestCase
{
    public function test_component_renders_username_and_icon()
    {
        $nameToSee = 'Mike Tyson';

        $user = User::factory()->make([
            'name' => $nameToSee
        ]);

        $view = $this->buildComponent($user, 'Tweet Body');

        $view->assertSee($nameToSee);
        $view->assertSee($user->avatar);
    }

    public function test_component_renders_body()
    {
        $user = User::factory()->make();
        $tweetBody = 'Tweet Body';

        $view = $this->buildComponent($user, $tweetBody);

        $view->assertSee($tweetBody);
    }

    private function buildComponent(User $user, string $body)
    {
        return $this->blade(
            '<x-tweet :user="$user">' .
                $body .
            '</x-tweet>',
            [
                'user' => $user
            ]
        );
    }
}
