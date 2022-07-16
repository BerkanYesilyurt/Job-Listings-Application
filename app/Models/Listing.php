<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'title', 'logo', 'company', 'location', 'website', 'email', 'description', 'tags'];

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
            return self::orderBy('id', 'DESC')->get();
        }

    }

    public static function findIt($id){
        $listings = self::all();
        foreach($listings as $listing){
            if($listing['id'] == $id){
                return $listing;
            }
        }
    }


}
