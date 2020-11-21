<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function flashSuccess($title, $message) {
        $this->setupFlash($title, $message, 'success');
    }

    public function flashError($title, $message) {
        $this->setupFlash($title, $message, 'error');
    }

    private function setupFlash($title, $message, $type) {
        request()->session()->flash('swal_msg', [
            'title' => $title,
            'message' => $message,
            'type' => $type,
        ]);
    }

}
