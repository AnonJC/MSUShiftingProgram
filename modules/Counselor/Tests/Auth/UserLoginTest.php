<?php

declare(strict_types=1);

namespace MnkyDevTeam\Counselor\Tests\Auth;

use Tests\TestCase;
use Tests\Helpers\CounselorFactoryHelper;
use Illuminate\Foundation\Testing\RefreshDatabase;

final class UserLoginTest extends TestCase
{
    use RefreshDatabase;
    use CounselorFactoryHelper;

    /**
     * @test
     */
    public function shouldRedirectToLoginPageIfUserIsNotYetAuthenticated() : void
    {
        $this->get(\route('counselor.home'))->assertRedirect(\route('counselor.login'));
    }

    /**
     * @test
     */
    public function shouldRedirectProfilePageOnceAuthenticated() : void
    {
        $this->fakeUserWithAuth('jtrogelio', 'jtrogelio');
        $this->post(\route('counselor.login.submit'), ['username' => 'jtrogelio', 'password' => 'jtrogelio'])
            ->assertRedirect(\route('counselor.user.dashboard'));
    }

     /**
     * @test
     */
    public function shouldSeeErrorMessageIfFailedToAuthenticateUser() : void
    {
        $this->post(\route('counselor.login.submit'), ['username' => 'unknown', 'password' => 'invalid-password'])
            ->assertSessionHasErrors();
    }
}
