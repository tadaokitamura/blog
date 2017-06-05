<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use DB;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = [
        'title',
        'content',
    ];

    public static function blogsearch($attributes)
    {
        $keyword = current(array_slice($attributes, 0, 1, true));
        $date_start = current(array_slice($attributes, 1, 1, true));
        $date_end = current(array_slice($attributes, 2, 1, true));

        if ($keyword <> null and $date_start <> null and $date_end <> null) {

            echo '指定された日付の範囲内でキーワードを検索しました';
            $blogsearch = Post::where(function ($query) use ($keyword) {
                $query->where('title', 'like', '%' .$keyword. '%')
                ->orWhere('content', 'like', '%' .$keyword. '%');
            })
            ->wherebetween('created_at', [$date_start, $date_end])->get();

        } else if ($date_start <> null and $date_end <> null) {

            $blogsearch = Post::wherebetween('created_at', [$date_start, $date_end])->get();

        } else if ($keyword <> null) {

            echo 'キーワードを検索しました';
            $blogsearch = Post::where(function ($query) use ($keyword) {
                $query->where('title', 'like', '%' .$keyword. '%')
                ->orWhere('content', 'like', '%' .$keyword. '%');
            })->get();

        } else {

            echo '検索キーワードまたは日付範囲を指定して下さい。';
            $blogsearch = Post::all();

        }

        return $blogsearch;

    }

}
