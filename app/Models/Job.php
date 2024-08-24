<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    public static function all(): array
    {
        return [
            ['id' => 1, 'title' => 'Job 1', 'description' => 'loremipsum'],
            ['id' => 2, 'title' => 'Job 2', 'description' => 'loremipsum**'],
            ['id' => 3, 'title' => 'Job 3', 'description' => 'Description 3'],
        ];
    }

    public static function find(int $id): array
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);
        if (! $job) {
            abort(404);
        }
        return $job;
    }
}
