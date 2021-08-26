<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    public function test_user_model_has_avatar_avatarlarge_profileimage_atts()
    {
        $user = User::factory()->make();

        $this->assertNotNull($user->avatar);
        $this->assertNotNull($user->avatarLarge);
        $this->assertNotNull($user->profileImage);

        return $user;
    }

    /**
     * @depends test_user_model_has_avatar_avatarlarge_profileimage_atts
     */
    public function test_main_and_large_avatars_links($user)
    {
        $avatarUrl = 'https://i.pravatar.cc/';
        $mainSize = 40;
        $largeSize = 150;

        $this->assertEquals(
            $this->buildAvatarUrl($user, $avatarUrl, $mainSize),
            $user->avatar
        );

        $this->assertEquals(
            $this->buildAvatarUrl($user, $avatarUrl, $largeSize),
            $user->avatarLarge
        );

        return $user;
    }

    /**
     * @depends test_user_model_has_avatar_avatarlarge_profileimage_atts
     */
    public function test_profile_image_link(User $user)
    {
        $imageUrl = 'https://picsum.photos/seed/';

        $this->assertEquals(
            $imageUrl . $user->username . '/750/220.webp',
            $user->profileImage
        );
    }

    private function buildAvatarUrl(User $user, string $baseUrl, int $size)
    {
        return $baseUrl . $size . '?u=' . $user->email;
    }
}
