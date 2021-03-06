<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;
use App\Http\Middleware\ForbidIfWithdrawalExists;
use App\Http\Middleware\ForbidIfWithdrawalExceedsUserBalance;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \App\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
        \App\Http\Middleware\TrustProxies::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            // \Illuminate\Session\Middleware\AuthenticateSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],

        'api' => [
            'throttle:60,1',
            'bindings',
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
        'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'forbid-if-not-ticket-owner' => \App\Http\Middleware\ForbidIfNotTicketOwner::class,
        'forbid-if-ticket-is-closed' => \App\Http\Middleware\ForbidIfTicketIsClosed::class,
        'forbid-if-not-sell-owner' => \App\Http\Middleware\ForbidIfNotSellOwner::class,
        'forbid-if-ticket-is-open' => \App\Http\Middleware\ForbidIfTicketIsOpen::class,
        'forbid-if-sell-ticket-is-open' => \App\Http\Middleware\ForbidIfSellTicketIsOpen::class,
        'forbid-if-sell-exists' => \App\Http\Middleware\ForbidIfSellExists::class,
        'forbid-if-withdrawal-exists' => \App\Http\Middleware\ForbidIfWithdrawalExists::class,
        'forbid-if-withdrawal-exceeds-limit' => \App\Http\Middleware\ForbidIfWithdrawalExceedsLimit::class,
        'forbid-if-withdrawal-exceeds-user-balance' => \App\Http\Middleware\ForbidIfWithdrawalExceedsUserBalance::class,
    ];
}
