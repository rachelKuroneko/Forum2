<?php

namespace App\Http\Controllers;

use App\Thread;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
    // we will make a contructor here
    function __construct()
    {
      return $this->middleware('auth')->except('index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         // Getting the threads
         // Using paginate method
         // The paginate method automatically takes care of setting the proper
         // limit and offset based on the current page being viewed by the user.
         $threads = Thread::paginate(15);
         return view ('thread.index', compact('threads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('thread.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate, or can also create another folder by ieself for the validation
        $this->validate($request, [
              'subject'=>'required|min:5',
              'type'=>'required',
              'thread'=>'required|min:10',
              'g-recaptcha-response' => 'required|captcha'
        ]);

        // Store
        // assign user-id while creating the threads
        // first have to find authenticated user
        auth()->user()->threads()->create($request->all());

        // redirect
        return back()->withMessage('Thread Created!');

    }

    /**
     * Display the specified resource.
     * returning single thread
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function show(Thread $thread)
    {
        return view ('thread.single', compact('thread'));
    }

    /**
     * Show the form for editing the specified resource.
     * the form will be similar to the create form
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function edit(Thread $thread)
    {
        return view ('thread.edit', compact('thread'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Thread $thread)
    {
        // if user is the true user that created the thread
        if(auth()->user()->id !== $thread->user_id)
        {
            abort(401, "unauthorized");
        }
        // validate part for update
        $this->validate($request, [
              'subject'=>'required|min:5',
              'type'=>'required',
              'thread'=>'required|min:10'
        ]);

        //Update for each thread
        $thread->update($request->all());

        // redirect user to the "show single" page
        return redirect()->route('thread.show', $thread->id)->withMessage('Thread Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function destroy(Thread $thread)
    {

        if(auth()->user()->id !== $thread->user_id)
        {
            abort(401, "unauthorized");
        }
        // this is to remove the thread from DB
        $thread->delete();

        return redirect()->route('thread.index')->withMessage('Thread Deleted!');
    }
}
