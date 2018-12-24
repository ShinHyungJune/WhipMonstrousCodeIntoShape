<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommunityLinkController extends Controller
{
    $orderBy = $sortByPopular ? 'vode_count' : 'updated_at';

    // 쿼리 오브젝트를 만들어서 이 긴 코드를 퇴치하자
    /*$links = CommunityLink::with('votes', 'creator', 'channel')
    ->forChannel($channel)
    ->where('approved', 1)
    ->groupBy('community_links.id')
    ->orderBy($orderBy, 'desc')
    ->paginate(3);*/

    $links = CommunityLinkQuery::get();
}
