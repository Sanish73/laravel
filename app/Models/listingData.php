<?php

namespace App\Models;

class listingData{
    public static function all(){
        return [
            [
                'id' => 1,
                'title' => 'listing one',
                'description' =>'Here is where you can register web routes for your application. These
                | routes are loaded by the RouteServiceProvider within a group which
                | contains the "web" middleware group. Now create something great!'

            ],
            [
                'id' => 2,
                'title' => 'listing two',
                'description' =>'Here is where you can register web routes for your application. These
                | routes are loaded by the RouteServiceProvider within a group which
                | contains the "web" middleware group. Now create something great!'

            ]
            ];
    }

    public static function find($id){
                $listings = self::all();

                foreach($listings as $listing){
                    if($listing['id'] == $id){
                        return $listing;
                    }
                }
    }

};


