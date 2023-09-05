<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Support\Facades\Redirect;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    // public function render($request, Throwable $exception)
    // {
        // dd($exception->getStatusCode());

<<<<<<< HEAD

        // if ($exception->getStatusCode() == 401) {
=======
        // if ($exception->getStatusCode() == 401) {
        //     return redirect()->route('login');
        // }

        // if ($exception->getStatusCode() == 403) {
>>>>>>> 1ea0269b68e4fceff77b5efe4a0d08c52fb9994a
        //     return redirect()->route('login');
        // }

        // if ($exception->getStatusCode() == 403) {
        //     return redirect()->route('login');
        // }

        // if ($exception->getStatusCode() == 404) {
        //     return redirect()->route('visitor.home');
        // }


    //     return parent::render($request, $exception);

    // }


    // public function report(Throwable $exception){
    //     return 'repot';
    // }



}
