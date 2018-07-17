<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::orderBy('event_date', 'asc')->paginate(10);
        return view('events.index')->with('events', $events);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request , [
            'title' => 'required' ,
            'body' => 'required',
            'event_date' => 'required'
        ]);
        //create event
        $event = new Event;
        $event->title = $request->input('title');
        $event->body = $request->input('body');
        $event->event_date = $request->input('event_date');
        $event->start_time = $request->input('start_time');
        $event->end_time = $request->input('end_time');
        $event->Location = $request->input('location');
        $event->user_id  = auth()->user()->id;
        $event->save();

        return redirect('/events')->with('success' , 'Event Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);
        return view('events.show')->with('event', $event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);
        if(auth()->user()->id !== $event->user_id){
            return redirect('events')->with('error', 'Unauthorized Page');
        }
        return view('events.edit')->with('event', $event);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request , [
            'title' => 'required' ,
            'body' => 'required',
            'event_date' => 'required'
        ]);
        //create event
        $event = Event::find($id);
        $event->title = $request->input('title');
        $event->body = $request->input('body');
        $event->event_date = $request->input('event_date');
        $event->start_time = $request->input('start_time');
        $event->end_time = $request->input('end_time');
        $event->Location = $request->input('location');
        $event->save();  
        return redirect('/events')->with('success' , 'Event Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        if(auth()->user()->id !== $event->user_id){
            return redirect('events')->with('error', 'Unauthorized Page');
        }
        $oldTags =$post->filterTags;
        foreach ($oldTags as $tag) {
            $tag->posts()->detach();
        }
        $event->delete();
        return redirect('/events')->with('success', 'Event Deleted'); 

    }
}
