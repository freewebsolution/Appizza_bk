<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PizzaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pizze = Pizza::latest()->paginate(10);
        $data = [
            'pizze' => $pizze,
        ];
        return view('sections.pizze.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sections.pizze.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'ingrediants' => 'required',
            'price' => 'required',
            'featured_image' =>
                'nullable|image|mimes:jpeg,jpg,gif,png,svg|max:2048',
        ]);
        $slug = Str::of($request->name)->slug('-');
        $pizza = Pizza::create([
            'name' => $request->name,
            'slug' => $slug,
            'price' => $request->price,
            'ingrediants' => $request->ingrediants,
            'author_id' => Auth::id()

        ]);

        if ($request->hasFile('featured_image')) {
            @unlink(public_path('/') . $pizza->featured_image);
            $destinationPath = 'img/featured-image/';
            $name = Str::of($pizza->name)->lower()->slug() . '-' . $pizza->id . '.' . $request->file('featured_image')->getClientOriginalExtension();;

            $request->file('featured_image')->move($destinationPath,
                $name);
            $pizza->featured_image = $destinationPath . $name;
            $pizza->update();
        }
        return redirect()->route('pizze.index');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Pizza $pizza
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        {
            $pizza = Pizza::findOrFail($id);
            $data = [
                'pizza' => $pizza
            ];
            return view('sections.pizze.show')->with('data', $data);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Pizza $pizza
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pizza = Pizza::findOrFail($id);
        $data = [
            'pizza' => $pizza
        ];
        return view('sections.pizze.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Pizza $pizza
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        {

            $pizza = Pizza::findOrFail($id);
            $request->validate([
                'name' => 'required|string',
                'ingrediants' => 'required|string',
                'price' => 'required',
                'featured_image' =>
                    'nullable|image|mimes:jpeg,jpg,gif,png,svg|max:2048',
            ]);
            $currentCover = $pizza->featured_image;
            $pizza->update($request->except('featured_image'));
            if ($request->file('featured_image') != $currentCover && $request->hasFile('featured_image')) {
                @unlink(public_path('/') . $pizza->featured_image);
                $destinationPath = 'img/featured-image/';
                $name = Str::of($pizza->name)->lower()->slug() . '-' . $pizza->id . '.' . $request->file('featured_image')->getClientOriginalExtension();;
                $request->file('featured_image')->move($destinationPath,
                    $name);
                $pizza->featured_image = $destinationPath . $name;
            }

            $pizza->update();
            return redirect()->route('pizze.index');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Pizza $pizza
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();
        $nomeImg = $pizza->featured_image;
        $nomeImg = explode('img/featured-image/',$nomeImg);
        $nomeImg = $nomeImg[1];
        if(file_exists(public_path("img/featured-image/".$nomeImg ))){
            unlink(public_path("img/featured-image/".$nomeImg));
        }
        return redirect()->route('pizze.index');
    }
}
