<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\APIModel;
use Carbon\Carbon;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;

class APIController extends Controller
{
    public $segment_check = 1;

    function checkUsername(Request $req) {
        if (APIModel::getUsername($req->username)) {
            echo "username exist";
        } else {
            echo "not exists";
        }
    }

    function retrieveSitemap() {
        $target_url = str_replace("http://", "", str_replace("https://", "", url('/')));
        $generator_url = "https://sitemap-generator.nikkoagustino.my.id/api/sitemap/".$target_url;
        echo "Retrieving ".$generator_url;
        file_put_contents("sitemap.xml", file_get_contents($generator_url));
    }
}
