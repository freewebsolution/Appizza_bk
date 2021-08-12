<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function profile()
    {
        $user = Auth::user();
        $data = [
            'user'=> $user
        ];
        return view('sections.users.edit')->with('data',$data);
    }
    public function index()
    {
        $user = User::latest()->get();
        $pizza = Pizza::latest()->get();
        $lastUser = $user->first();
        $lastPizza = $pizza->first();

        $cards = collect([
            [
                'title' => 'Utenti Registrati',
                'value' => count($user->whereBetween('created_at', [
                    today()->subDays(30)->startOfDay()->toDateTimeString(),
                    today()->endOfDay()->toDateTimeString()])),
                'period' => 'Ultimo Mese',
            ],
            [
                'title' => 'Pizze inserite',
                'value' => count($pizza->whereBetween('created_at', [
                    today()->subDays(30)->startOfDay()->toDateTimeString(),
                    today()->endOfDay()->toDateTimeString()])),
                'period' => 'Ultimo Mese',
            ],
            [
                'title' => 'Utenti Registrati',
                'value' => $user->count(),
                'period' => 'Di Sempre',
            ],
            [
                'title' => 'Pizze inserite',
                'value' => $pizza->count(),
                'period' => 'Di Sempre',
            ],
        ]);
        $lasts = collect([
            [
                'heading' => 'Ultimo utente registrato',
                'image' => $lastUser->avatar ? $lastUser->avatar :
                    'https://eu.ui-avatars.com/api/?name=' . $lastUser->name,
                'name' => $lastUser->name,
                'detail' => $lastUser->email,
                'updated_at' => $lastUser->created_at,
            ],
            [
                'heading' => 'Ultima pizza inserita',
                'image' => isset($lastPizza->featured_image) ? $lastPizza->featured_image : 'https://via.placeholder.com/150',
                'name' => $lastPizza->name,
                'detail' => $lastPizza->authorName->name,
                'updated_at' => $lastPizza->created_at,
            ],


        ]);
        $data = [
            'cards' => $cards,
            'lasts' => $lasts,
        ];

        return view('dashboard')->with('data', $data);
    }
}

