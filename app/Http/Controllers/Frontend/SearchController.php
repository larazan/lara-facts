<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Person;
use App\Models\Quote;
use App\Models\Tag;
use App\Models\Article;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function index2()
    {
        $person = 'albert';
        $search = 'kata';
        $keyword = 'kata';
        $alpha = 'i';
        $tags = Tag::where('name', 'like', "{$alpha}%")->where('status', 'active')->paginate(20);

        $searchres = DB::table('facts')
            ->select(
                '*',
            )
            ->where('title', 'LIKE', "%$keyword%")
            ->get()
            ->map(function ($row) use ($keyword) {
                $row->words = preg_replace('/(' . $keyword . ')/i', "<b>$1</b>", $row->title);
                return $row;
            });
        
        $this->data['title'] = "Search";
        $this->data['search'] = $search;
        $this->data['tags'] = $tags;
        $this->data['searchres'] = $searchres;
		return $this->loadTheme('search.index', $this->data);
    }

    public function search(Request $request)
    {
        // validate 4 character
        $this->validate($request, [
            'search' => 'required|min:4'
        ]);

        $search = $request->input('search');
        
        $tags = Tag::where('name', 'like', "%$search%")->get();
        $facts = DB::table('facts')
            ->select(
                '*',
            )
            ->where('title', 'LIKE', "%$search%")
            ->get()
            ->map(function ($row) use ($search) {
                $row->title = preg_replace('/(' . $search . ')/i', "<b>$1</b>", $row->title);
                return $row;
            });

        if ($facts->count() > 0) {
            # code...
        }

        $this->data['title'] = "Search";
        $this->data['search'] = $search;
        $this->data['quotes'] = $facts;
        $this->data['tags'] = $tags;
        return $this->loadTheme('search.index', $this->data);
    }
}
