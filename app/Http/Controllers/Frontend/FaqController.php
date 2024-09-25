<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Faq;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::orderBy('order_position', 'ASC');

		$this->data['title'] = "Faqs";
		$this->data['faqs'] = $faqs->get();
		return $this->loadTheme('faqs.index', $this->data);
    }
}
