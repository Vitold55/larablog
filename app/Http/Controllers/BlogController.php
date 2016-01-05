<?php

namespace App\Http\Controllers;


use App\Blog;

class BlogController extends MainController
{
    public function index(Blog $blog)
    {
        $this->data['records'] = $blog->getActiveRecords();

        return view('blog.index', $this->data);
    }

    public function record($slug, Blog $blog)
    {
        $this->data['record'] = $blog->getRecordBySlug($slug);

        return view('blog.record', $this->data);
    }
}