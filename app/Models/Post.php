<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Symfony\Component\String\s;

$uniqueId = uniqid();
class Post extends Model{
    use HasFactory;

    public static $posts = [
                    [
                        'id' => 'uuid',
                        'title' => 'Заголовок1',
                        'short_description' => 'Коротное описание1',
                        'body' => 'Тело поста1'
                    ],
                    [
                       'id' => 'uuid',
                        'title' => 'Заголовок2',
                        'short_description' => 'Коротkое описание2',
                        'body' => 'Тело поста2'
                    ]
                       ];

//    public static $fillableVal = [
//        'title',
//        'short_description',
//        'body'
//];
//    public static $fillableVal = [];

//    public static function create($title, $short_description, $body)
//    {
//        $post = ['title' => $title, 'short_description' => $short_description, 'body' => $body];
//        self::$fillableVal[] = $post;
//    }
//
//    public static function allPosts()
//    {
//        return self::$fillableVal;
//    }


    public static function getPosts(){
        return static:: $posts;
}


public static function getPostsId($id){
        foreach (static::$posts as $post){
            if($post['id'] == $id){
                return $post;
            }
    }
}
}
