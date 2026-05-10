<?php

namespace App\Http\Controllers;

use App\Jobs\SendWelcomeEmailJob;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Bus\Batch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
         $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();

            return redirect()->route('home');
        }

        return back()->withErrors([
            'email' => 'Неверный логин или пароль',
        ])->onlyInput('email');
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);
        $request->session()->regenerate();

//        SendWelcomeEmailJob::dispatch($user)
//            ->onQueue('high');

//        SendWelcomeEmailJob::dispatch($user)
//            ->delay(Carbon::now()->addMinute(10));




//        SendWelcomeEmailJob::dispatch($user)
//            ->delay(Carbon::tomorrow()->setTime(9, 0));
//
//        $batch = Bus::batch([
//            new SendWelcomeEmailJob('u1@mail.com'),
//            new SendWelcomeEmailJob('u2@mail.com'),
//            new SendWelcomeEmailJob('u3@mail.com'),
//            new SendWelcomeEmailJob('u4@mail.com'),
//        ])
//            ->then(function (Batch $batch) {
//                \Log::info('Batch completed:' . $batch->id);
//            })
//            ->catch(function (Batch $batch, \Throwable $e) {
//
//            })
//            ->finally(function (Batch $batch) {
//
//            })
//            ->allowFailures()
//            ->dispatch();
//        echo $batch->totalJobs;
//        echo $batch->pendingJobs;
//        echo $batch->processedJobs();
//        echo $batch->progress();
//
//        $b = Bus::findBatch($batchId);
//        $batch->cancel();




//        Bus::chain([
//            new ProcessDataJob(),
//            new GenerateReportJob(),
//            new SenReportJob(),
//        ])
//            ->catch(function(\Throwable $e) {
//
//            })
//            ->dispatch();




        SendWelcomeEmailJob::dispatch($user)
            ->delay(Carbon::now()->addMinute(3));

        return redirect()->route('home');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
