<?php

namespace App\Nova\Templates;

use Illuminate\Http\Request;
use Whitecube\NovaPage\Pages\Template;

use Laravel\Nova\Fields\Text;

class Contact extends Template {

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [

            Text::make('Adresse','adresse'),
            Text::make('Email','email'),
            Text::make('Téléphone','telephone'),

            Text::make('Téléphone 2','telephone_2'),
            Text::make('Téléphone 3','telephone_3'),



            Text::make('Facebook'),
            Text::make('Instagram'),
            Text::make('Tiktok','tiktok'),
            
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }
}