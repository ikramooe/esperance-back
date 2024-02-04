<?php

namespace App\Nova\Templates;

use Illuminate\Http\Request;
use Whitecube\NovaFlexibleContent\Flexible;
use Mdixon18\Fontawesome\Fontawesome;

use Laravel\Nova\Panel;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Select;

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
        return [];
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