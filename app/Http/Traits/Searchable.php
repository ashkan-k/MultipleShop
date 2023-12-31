<?php

namespace App\Http\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

trait Searchable
{
    public function scopeSearch(Builder $builder, string $search = null)
    {
        if ($search) {
            if (!$this->search_fields) {
                throw new \Exception("Please define the search_fields property .");
            }

            if (count($this->search_fields) > 0) {
                $builder = $builder->where(function ($builder) use ($search) {
                    foreach ($this->search_fields as $field) {
                        if (str_contains($field, '.')) {
                            $relation = Str::beforeLast($field, '.');
                            $column = Str::afterLast($field, '.');

                            if (count($this->search_fields) > 1) {
                                $builder = $builder->orWhereRelation($relation, $column, 'like', '%' . $search . '%');
                            } else {
                                $builder = $builder->WhereRelation($relation, $column, 'like', '%' . $search . '%');
                            }
                            continue;
                        }

                        if (count($this->search_fields) > 1) {
                            $builder = $builder->orWhere($field, 'like', '%' . $search . '%');
                        } else {
                            $builder = $builder->Where($field, 'like', '%' . $search . '%');
                        }
                    }
                    return $builder;
                });
            }
        }

        return $builder;
    }

    public function scopeFilter(Builder $builder, $request = null, $type = 'or')
    {
        if (!$this->filter_fields) {
            throw new \Exception("Please define the filter_fields property .");
        }

        if (count($request->all())) {
            $builder = $builder->where(function ($builder) use ($request, $type) {
                foreach ($this->filter_fields as $field) {
                    if (str_contains($field, '.')) {
                        $relation = Str::beforeLast($field, '.');
                        $column = Str::afterLast($field, '.');

                        if ($request->$column) {
                            if ($type == 'or') {
                                $builder = $builder->orWhereHas($relation, function ($query) use ($column, $request) {
                                    return $query->whereIn($column, explode(',', $request->$column));
                                });
                            } else {
                                $builder = $builder->WhereHas($relation, function ($query) use ($column, $request) {
                                    return $query->whereIn($column, explode(',', $request->$column));
                                });
                            }
                            continue;
                        }
                    } elseif ($request->$field) {
                        if ($type == 'or') {
                            $builder = $builder->orWhereIn($field, explode(',', $request->$field));
                        } else {
                            $builder = $builder->WhereIn($field, explode(',', $request->$field));
                        }
                    }

                    if ($request->$field === '0' || $request->$field === '1') {
                        if ($type == 'or') {
                            $builder = $builder->orWhere($field, explode(',', $request->$field));
                        } else {
                            $builder = $builder->Where($field, explode(',', $request->$field));
                        }
                    }
                }

                return $builder;
            });
        }

        return $builder;
    }
}
