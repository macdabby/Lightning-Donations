<?php

namespace Modules\Donations\Pages;

use Lightning\View\JS;
use Lightning\View\Page;

class Donate extends Page {
    protected $page = ['donate', 'Donations'];

    public function hasAccess() {
        return true;
    }

    public function get() {
        JS::set('donations', [
            'goal' => 50000,
            'total' => 500,
        ]);
    }
}
