<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Fact;
use App\Models\Tag;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    //
    public function __construct()
    {
        // parent::__construct();

        $letters = [
            'a',
            'b',
            'c',
            'd',
            'e',
            'f',
            'g',
            'h',
            'i',
            'j',
            'k',
            'l',
            'm',
            'n',
            'o',
            'p',
            'q',
            'r',
            's',
            't',
            'u',
            'v',
            'w',
            'x',
            'y',
            'z',
        ];

        $this->data['letters'] = $letters;
    }
    
    public function index()
    {
        // $tags = DB::select("SELECT name, SUBSTR(name, 1, 1) AS alpha FROM tags GROUP BY SUBSTR(name, 0, 2), name ORDER BY alpha, name");

        $topics = Tag::selectRaw('id, name, slug, SUBSTR(name, 1, 1) as alpha')
                    ->orderBy('alpha', 'asc')
                    ->where('status', 'active')
                    ->get()
                    ->groupBy('alpha');

        $this->data['title'] = "Topic";
        // $this->data['tags'] = $tags;
        $this->data['topics'] = $topics;
		return $this->loadTheme('tags.index', $this->data);
    }

    public function show($letter)
    {
        $alpha = Str::lower($letter);
        $tags = Tag::where('name', 'like', "{$alpha}%")->where('status', 'active')->orderBy('name', 'asc');

        $this->data['title'] = "Topic Letter: " . ucfirst($letter);
        $this->data['tags'] = $tags->get();
        $this->data['letter'] = $letter;
		return $this->loadTheme('tags.detail', $this->data);
    }
}
