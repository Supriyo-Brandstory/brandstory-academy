<?php

namespace App\View\Components;

use App\Models\Blog;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BlogComponent extends Component
{
   public $blogs;
    /**
     * Accept subCategoryId parameter
     */
    public function __construct($subCategoryId = null)
    {
        $query = Blog::orderBy('id', 'desc');

        if ($subCategoryId) {
            $query->where('blog_sub_category_id', $subCategoryId);
        }

        $this->blogs = $query->take(3)->get();
    }

    public function render()
    {
        return view('components.blog-component');
    }
}
