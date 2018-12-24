<?php
/**
 * Created by PhpStorm.
 * User: ssa41
 * Date: 2018-12-24
 * Time: 오후 10:35
 */

namespace App\Queries;


class CommunityLinkQuery
{
    public static function get()
    {
        return CommunityLink::with('votes', 'creator', 'channel')
            ->forChannel($channel)
            ->where('approved', 1)
            ->groupBy('community_links.id')
            ->orderBy($orderBy, 'desc')
            ->paginate(3);
    }
}