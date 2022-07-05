<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    public static function filterIt($request){
        $all = self::all();
        if(isset($request['search'])){
            return self::query()
                ->where('title', 'LIKE', '%' . request('search') . '%')
                ->orWhere('description', 'LIKE', '%' . request('search') . '%')
                ->orWhere('tags', 'LIKE', '%' . request('search') . '%')
                ->get();
        }
        elseif(isset($request['tag'])){
            return self::query()->where('tags', 'LIKE', '%' . request('tag') . '%')->get();
        }
        else{
            return $all;
        }

    }

    public static function find($id){
        $listings = self::all();
        foreach($listings as $listing){
            if($listing['id'] == $id){
                return $listing;
            }
        }
    }


}
