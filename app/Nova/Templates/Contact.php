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

            Text::make('Adresse '),
            Text::make('Email'),
            Text::make('Téléphone','telephone'),




            Text::make('Facebook'),
            Text::make('Twitter'),
            Text::make('LinkedIn','linkedin'),
            
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