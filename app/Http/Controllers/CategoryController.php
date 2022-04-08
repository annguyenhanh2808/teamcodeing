<?php

namespace App\Http\Controllers;

use App\Category;
use App\Components\Recusive;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $category;
    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function create()
    {
        $htmlOption = $this->getCategory($parentId = '');
//        foreach ($data as $value){
//            if($value['parent_id'] == 0){
//                echo "<option>" . $value['name'] . "</option>";
//                foreach ($data as $value2){
//                    if($value2['parent_id'] == $value['id']){
//                        echo "<option>" . '-' . $value2['name'] . "</option>";
//                        foreach ($data as $value3){
//                            if($value3['parent_id'] == $value2['id']){
//                                echo "<option>" . '--' . $value3['name'] . "</option>";
//                            }
//                        }
//                    }
//                }
//            }
//        }
//
        return view('admin.category.add', compact('htmlOption'));
    }
    public function index()
    {
        $categories = $this->category->latest()->paginate(5);
        return view('admin.category.index', compact('categories'));
    }
    public function store(Request $request)
    {
        $this->category->create([
            'name'=> $request->name,
            'parent_id' => $request->parent_id,
            'slug' => str_slug($request->name)
        ]);

        return redirect()->route('categories.index');
    }

    public function getCategory($parentId)
    {
        $data = $this->category->all();
        $recusive = new Recusive($data);
        $htmlOption = $recusive->categoryRecusive($parentId);
        return $htmlOption;
    }

    public function edit($id)
    {
        $category = $this->category->find($id);
        $htmlOption = $this->getCategory($category->parent_id);

        return view('admin.category.edit', compact('category', 'htmlOption'));
    }

    public function update($id, Request $request)
    {
        $this->category->find($id)->update([
            'name'=> $request->name,
            'parent_id' => $request->parent_id,
            'slug' => str_slug($request->name)
        ]);
        return redirect()->route('categories.index');
    }

    public function delete($id)
    {
        $this->category->find($id)->delete();
        return redirect()->route('categories.index');
    }
}
