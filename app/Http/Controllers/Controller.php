<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $name = 'categories';

    protected function view($view) {
        return view($this->name . '.' . $view)
            ->with($this->defaults());
    }

    protected function redirect($path = null) {
        return redirect('/' . $this->name . ($path ? '/' . $path : ''));
    }

    protected function defaults() {
        return [
            'resourceName' => ucfirst($this->name),
            'resourceUrl' => $this->name,
        ];
    }
}
