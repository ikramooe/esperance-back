<?php

namespace App\Nova\Templates;

use Illuminate\Http\Request;
use Whitecube\NovaPage\Pages\Template;
use Whitecube\NovaFlexibleContent\Flexible;
use Mdixon18\Fontawesome\Fontawesome;

use Laravel\Nova\Panel;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Select;

use Laravel\Nova\Fields\Image;


class Index extends Template {

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            Flexible::make('Slide')
            ->addLayout('Simple content section', 'wysiwyg', [

               
                Image::make('image'),

                Text::make('Titre','titre')
                ->translatable([
                    'fr' => 'Français',
                    'ar' => 'العربية',
                  ]),

                Textarea::make('Description')
                ->translatable([
                    'fr' => 'Français',
                    'ar' => 'العربية',
                  ]),

              

               
               
            ]),

            new Panel('Presentation', $this->pres()),
            //new Panel('Partie 3', $this->services()),
            new Panel('Partie urgence', $this->urgences()),
            //new Panel('Services', $this->services()),
            new Panel('Partenaires', $this->partenaires()),
        ];
    }


    protected function pres()
    {
        return [


            Text::make('Titre','titre_pres')
            ->translatable([
                'fr' => 'Français',
                'ar' => 'العربية',
              ]),
            Image::make('Image','image_pres'),
            Trix::make('Description','description_pres')
            ->translatable([
                'fr' => 'Français',
                'ar' => 'العربية',
              ]),
            
         
        ];

    }


    protected function services()
    {
        return [


            Text::make('Titre','titre_serv')
            ->translatable([
                'fr' => 'Français',
                'ar' => 'العربية',
              ]),

            Textarea::make('Text','text')
            ->translatable([
                'fr' => 'Français',
                'ar' => 'العربية',
              ]),
          
           

            Flexible::make('Services','services2')
            ->addLayout('Simple content section', 'wysiwyg', [

                Text::make('Titre','titre')
                ->translatable([
                    'fr' => 'Français',
                    'ar' => 'العربية',
                  ]),
              
                Textarea::make('Description')
                ->translatable([
                    'fr' => 'Français',
                    'ar' => 'العربية',
                  ]),

              
              
               
               
            ]),
        ];

    }

    protected function urgences()
    {
        return [


            Text::make('Titre','titre_urg')
            ->translatable([
                'fr' => 'Français',
                'ar' => 'العربية',
              ]),

              Flexible::make('Points')
              ->addLayout('Simple content section', 'wysiwyg', [
  
                
                
                 Text::make('Titre')
                 ->translatable([
                  'fr' => 'Français',
                  'ar' => 'العربية',
                ]),

                Text::make('Description')
                ->translatable([
                 'fr' => 'Français',
                 'ar' => 'العربية',
               ]),
        ]),
  
        Text::make('Titre 2','titre_urg2')
        ->translatable([
            'fr' => 'Français',
            'ar' => 'العربية',
          ]),

          Trix::make('Text ','text_urg2')
          ->translatable([
              'fr' => 'Français',
              'ar' => 'العربية',
            ]),
          
           

           
        ];

    }


    protected function partenaires()
    {
        return [


           

            Flexible::make('Medecins')
            ->addLayout('Simple content section', 'wysiwyg', [

               Image::make('Image'),
               Text::make('Nom')
               ->translatable([
                'fr' => 'Français',
                'ar' => 'العربية',
              ]),

               Text::make('Specialité',"specialite")
               ->translatable([
                'fr' => 'Français',
                'ar' => 'العربية',
              ]),
              
               
               
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