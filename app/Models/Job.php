<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job 
{
    public static function all(): array {
        return [
            ['title' => 'Software Engineer', 'company' => 'Tech Corp', 'location' => 'New York'],
            ['title' => 'Data Analyst', 'company' => 'Data Inc', 'location' => 'San Francisco'],
            ['title' => 'Product Manager', 'company' => 'Business Solutions', 'location' => 'Chicago'],
        ];
    }
}
