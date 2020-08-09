<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Models\BolgsTable;

class BolgsInfoController extends BaseController
{
    public function get_bolgs_info() {
        $query = BolgsTable::query()->get();
        $query->makeHidden('content');
        return response_data(0, $query, '');
    }

    public function blogs_content(Request $request) {
        $request->validate([
            'id' => 'required'
        ]);
        $user_id = $request->input('id');
        $query = BolgsTable::query()->where('id', $user_id)->first();
        $query->created_at->getTimestamp();
        return response_data(0, $query, '');
    }

    public function set_blogs_content(Request $request) {
        $request->validate([
            'contents' => 'required',
            'content_title' => 'required',
            'content_subhead' => 'required'
        ]);
        /* @var BolgsTable */
        $content_title = $request->content_title;
        $content_subhead = $request->content_subhead;
        $content = $request->contents;
        $query = new BolgsTable();
        $query->content = $content;
        $query->content_title = $content_title;
        $query->content_subhead = $content_subhead;
        $query->like = 0;
        $query->collect = 0;
        $query->save();
        return response_data(0, null, '添加成功');
    }
}