<?php

namespace Edutalk\Base\Http\Controllers;

use Illuminate\Routing\Controller;

class ResolveSlug extends Controller
{
    public function index($slug = null)
    {
        dd($slug);
    }
}
