<?php

namespace App\Http\Controllers\Admin\PostController;

use App\DataTables\PostDataTable;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class Index extends Controller
{
    public function index(PostDataTable $dataTable){
        
        return $dataTable->render('admin.posts.index');
    }
}
