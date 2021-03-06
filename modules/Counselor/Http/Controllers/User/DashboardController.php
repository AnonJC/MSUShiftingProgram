<?php

declare(strict_types=1);

namespace MnkyDevTeam\Counselor\Http\Controllers\User;

use Illuminate\View\View;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

final class DashboardController extends Controller
{
    public function __invoke() : View
    {
        $counselor = Auth::guard('counselor')->user();

        return \view('counselor::user.dashboard', \compact('counselor'));
    }
}
