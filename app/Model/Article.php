<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    public function getArticles(){
        $query = Article::select(
            'user_id',
            'body',
            'category1',
            'category2',
            'category3',
            'category4',
            'status'
            )
            ->whereNull('deleted_at')
            ->get();
        return $query;
        // return Article::paginate(5);
        // return Article::all();
    }
}