<?php

namespace App\Filters\Expenses;

use EloquentFilter\ModelFilter;

class Payments extends ModelFilter
{
    /**
     * Related Models that have ModelFilters as well as the method on the ModelFilter
     * As [relatedModel => [input_key1, input_key2]].
     *
     * @var array
     */
    public $relations = [];

    public function search($query)
    {
        return $this->whereLike('description', $query);
    }

    public function category($category)
    {
        return $this->where('category_id', $category);
    }

    public function account($account)
    {
        return $this->where('account_id', $account);
    }
}