<?php

namespace App\Http\Controllers;

use App\Gorev;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GorevController extends Controller
{
    //
     /**
    *
    *
    * @return auth
    */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tasks = request()->user()->tasks;
 
        return response()->json([
            'tasks' => $tasks,
        ], 200);
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
        //
        $this->validate($request, [
            'name'        => 'required|max:255',
            'description' => 'required',
        ]);
 
        $task = Gorev::create([
            'name'        => request('name'),
            'description' => request('description'),
            'user_id'     => Auth::user()->id
        ]);
 
        return response()->json([
            'task'    => $task,
            'message' => 'Kayıt Başarılı'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Gorev $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Gorev $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gorev $task)
    {
        //
        $this->validate($request, [
            'name'        => 'required|max:255',
            'description' => 'required',
        ]);
 
        $task->name = request('name');
        $task->description = request('description');
        $task->save();
 
        return response()->json([
            'message' => 'Güncelleme Başarılı!'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gorev $task)
    {
        //
        $task->delete();
 
        return response()->json([
            'message' => 'Silinme Başarılı!'
        ], 200);
    }
}
