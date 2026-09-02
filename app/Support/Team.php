<?php

namespace App\Support;

class Team
{
    private static ?array $members = null;

    /**
     * All team members from resources/data/team.json, keyed by id, sorted by 'order'.
     *
     * @return array<string, array<string, mixed>>
     */
    public static function all(): array
    {
        return self::$members ??= collect(json_decode(
            file_get_contents(base_path('resources/data/team.json')),
            true,
            flags: JSON_THROW_ON_ERROR
        ))
            ->sortBy('order')
            ->keyBy('id')
            ->all();
    }

    /**
     * Members for a page, in the order the page lists them.
     * Unknown ids throw outside production so typos surface during development.
     *
     * @param  list<string>  $ids
     * @return list<array<string, mixed>>
     */
    public static function members(array $ids): array
    {
        $all = self::all();

        return array_values(array_filter(array_map(
            function (string $id) use ($all) {
                if (! isset($all[$id]) && ! app()->isProduction()) {
                    throw new \InvalidArgumentException("Unknown team member id '{$id}' — check resources/data/team.json");
                }

                return $all[$id] ?? null;
            },
            $ids
        )));
    }
}
