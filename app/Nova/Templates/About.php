<?php

namespace App\Nova\Templates;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Image;

use Whitecube\NovaPage\Pages\Template;

class About extends Template {

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            Text::make('Titre')
            ->translatable([
                'fr' => 'Français',
                  'ar' => 'العربية',
              ]),
            Trix::make('Text')
            ->translatable([
                'fr' => 'Français',
                  'ar' => 'العربية',
              ]),
            Image::make('Image'),

            Titre::make('Titre mission','titre_mission')
            ->translatable([
                'fr' => 'Français',
                  'ar' => 'العربية',
              ]),
            Trix::make('Text mission','text_mission')
            ->translatable([
                'fr' => 'Français',
                'ar' => 'العربية',
              ]),


            Text::make('Titre vision','titre_vision')
            ->translatable([
                'fr' => 'Français',
                  'ar' => 'العربية',
              ]),
            Trix::make('Text vision','text_vision')
            ->translatable([
                'fr' => 'Français',
                'ar' => 'العربية',
              ]),

            Text::make('Titre valeurs','titre_valeurs')
            ->translatable([
                'fr' => 'Français',
                'ar' => 'العربية',
              ]),
            Trix::make('Text valeurs','text_valeurs')
            ->translatable([
                'fr' => 'Français',
                'ar' => 'العربية',
              ]),
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