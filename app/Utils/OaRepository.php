<?php

namespace App\Utils;

use Carbon\Carbon;
use Exception;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class OaRepository
{
    /**
     * @param mixed|null $default
     */
    static public function store(
        array  $request,
        string $key,
        mixed  $default = null
    ): mixed
    {
        return Arr::has($request, $key) ? Arr::get($request, $key) : $default;
    }

    static public function update(
        array  $request,
        string $key,
        mixed  $db_model
    ): mixed
    {
        return Arr::has($request, $key) ? Arr::get($request, $key) : $db_model->$key;
    }

    static public function getWithoutNull(
        array  $request,
        string $key,
        mixed  $default
    ): mixed
    {
        if (!Arr::has($request, $key)) {
            return $default;
        }

        $value = Arr::get($request, $key);

        return is_null($value) ? $default : $value;
    }

    /**
     * @param string|null $string
     */
    static public function oaUcWords(
        ?string $string
    ): string
    {
        if (gettype($string) !== 'string') {
            return '';
        }

        return ucwords(Str::lower($string));
    }

    /**
     * @param string|null $value
     */
    static public function formatNumber(
        ?string $value
    ): string
    {
        $parsed_value = is_null($value)
            ? 0
            : $value;

        return number_format($parsed_value, 2, ',', '.');
    }

    /**
     * @param array|null $excluded_tables
     */
    static public function truncateTables(
        ?array $excluded_tables = []
    ): void
    {
        try {
            $tables = array_merge($excluded_tables, [
                'migrations'
            ]);

            $tableNames = Schema::getConnection()
                ->getDoctrineSchemaManager()
                ->listTableNames();

            Schema::disableForeignKeyConstraints();

            foreach ($tableNames as $name) {
                if (in_array($name, $tables)) {
                    continue;
                }

                DB::table($name)->truncate();
            }

            Schema::enableForeignKeyConstraints();
        } catch (Exception $e) {
            Log::error(
                'Error on truncate tables. ' . PHP_EOL .
                'ERROR - ' . $e->getMessage() . '.' . PHP_EOL .
                'TABLES - ' . implode(', ', $tables) . '.'
            );

            dd('error on truncate tables');
        }
    }

    static public function truncateTableByName(
        string $table
    ): void
    {
        Schema::disableForeignKeyConstraints();

        DB::table($table)->truncate();

        Schema::enableForeignKeyConstraints();
    }


    static public function formatEmailCreatedAt(
        string $created_at
    ): string
    {
        return Carbon::parse($created_at)->format('d-m-Y / H:i');
    }

    /**
     * @param callable|null $update_function
     */
    static function addRelations(
        array    $old_relation_ids,
        array    $new_relations,
        object   $relation,
        callable $update_function = null,
        string   $key = 'value'
    ): void
    {
        foreach ($new_relations as $new_relation) {
            $new_relation_id = OaRepository::store($new_relation, $key);
            if (in_array($new_relation_id, $old_relation_ids)) {
                unset($old_relation_ids[array_search($new_relation_id, $old_relation_ids)]);
                is_null($update_function) ?: $update_function($new_relation);
            } else {
                $new_id = is_null($update_function) ? $new_relation_id : ($update_function($new_relation))->id;
                $relation->syncWithoutDetaching($new_id);
            }
        }

        foreach ($old_relation_ids as $new_relation_id) {
            $relation->detach($new_relation_id);
        }
    }

    /**
     * @param string|null $url
     * @return string|null
     */
    static function ensureHttps(?string $url): ?string
    {
        if (!is_null($url) && !preg_match("~^(?:f|ht)tps?://~i", $url)) {
            $url = 'https://' . $url;
        }
        return $url;
    }
}
