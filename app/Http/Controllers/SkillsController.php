<?php

namespace App\Http\Controllers;

use App\Skills;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = Skills::get()->where('active', 1);
        return view(
            'admin.skills.index',
            compact(
                'skills',
            ),
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'skill' => 'required|unique:skills|max:255',
            'value' => 'required',
        ],[
            'skill.required' => 'يرجي ادخال أسم المهارة',
            'skill.unique' => 'أسم المهارة مسجل مسبقا',
            'value.required' => 'يرجي ادخال قيمة المهارة',
        ]);

        skills::create([
            'skill' => $request->skill,
            'value' => $request->value,
            'user_id' =>(Auth::user()->id),
        ]);
        session()->flash('Add');
        return redirect('/skills');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Skills  $skills
     * @return \Illuminate\Http\Response
     */
    public function show(Skills $skills)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Skills  $skills
     * @return \Illuminate\Http\Response
     */
    public function edit(Skills $skills)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Skills  $skills
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skills $skills)
    {
        $id = $request->id;

        $this->validate($request, [

            'skill' => 'required|max:255|unique:skills,skill,'.$id,
            'value' => 'required',
        ],[

            'skill.required' => 'يرجي ادخال أسم المهارة',
            'skill.unique' => 'أسم المهارة مسجل مسبقا',
            'value.required' => 'يرجي ادخال قيمة المهارة',

        ]);

        $skills = skills::find($id);
        $skills->update([
            'skill' => $request->skill,
            'value' => $request->value,
        ]);

        session()->flash('Edit');
        return redirect('/skills');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Skills  $skills
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Skills $skills)
    {
        $id = $request->id;
        skills::find($id)->delete();
        session()->flash('Delete');
        return redirect('/skills');
    }
}
