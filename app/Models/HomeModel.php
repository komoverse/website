<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class HomeModel extends Model
{
    use HasFactory;

    static function saveSubscriber($req) {
        $insert = DB::table('tb_newsletter_subscriber')
                    ->insert([
                        'email' => $req->email,
                        'name' => $req->name,
                    ]);
        return $insert;
    }

    static function getNews($lang) {
        $result = DB::table('tb_news_'.$lang)
                    ->where('visibility', '=', '1')
                    ->orderBy('is_pinned', 'desc')
                    ->orderBy('right_pinned', 'desc')
                    ->orderBy('id', 'desc')
                    ->paginate(10);
        return $result;
    }

    static function getSingleNews($lang, $slug) {
        $result = DB::table('tb_news_'.$lang)
                    ->where('visibility', '=', '1')
                    ->where('slug', '=', $slug)
                    ->first();
        return $result;
    }

    static function getPartners($lang) {
        $result = DB::table('tb_partners_'.$lang)
                    ->where('visibility', '=', '1')
                    ->orderBy('is_pinned', 'desc')
                    ->orderBy('id', 'desc')
                    ->paginate(10);
        return $result;
    }

    static function getSinglePartner($lang, $slug) {
        $result = DB::table('tb_partners_'.$lang)
                    ->where('visibility', '=', '1')
                    ->where('slug', '=', $slug)
                    ->first();
        return $result;
    }

    static function getAcademy($lang) {
        $result = DB::table('tb_academy_'.$lang)
                    ->where('visibility', '=', '1')
                    ->orderBy('is_pinned', 'desc')
                    ->orderBy('id', 'desc')
                    ->paginate(10);
        return $result;
    }

    static function getSingleAcademy($lang, $slug) {
        $result = DB::table('tb_academy_'.$lang)
                    ->where('visibility', '=', '1')
                    ->where('slug', '=', $slug)
                    ->first();
        return $result;
    }

    static function getNewsPreview($lang, $slug) {
        $result = DB::table('tb_news_'.$lang)
                    ->where('slug', '=', $slug)
                    ->first();
        return $result;
    }

    static function getPartnerPreview($lang, $slug) {
        $result = DB::table('tb_partners_'.$lang)
                    ->where('slug', '=', $slug)
                    ->first();
        return $result;
    }

    static function getAcademyPreview($lang, $slug) {
        $result = DB::table('tb_academy_'.$lang)
                    ->where('slug', '=', $slug)
                    ->first();
        return $result;
    }
}
