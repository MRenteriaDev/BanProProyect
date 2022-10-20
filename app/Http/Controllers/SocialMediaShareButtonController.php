<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class SocialMediaShareButtonController extends Controller
{
    public function index()
    {
        $share_buttons = \Share::page(
            'https://www.w3techpoint.com/laravel/how-to-add-social-share-button-in-laravel-app',
            'How to Add Social Media Share Button in Laravel App?'
        )
        ->facebook()
        ->twitter()
        ->linkedin()
        ->whatsapp()
        ->telegram()
        ->reddit();

        $view_data['share_buttons'] = $share_buttons;

        return view('post')->with($view_data);
    }
}
