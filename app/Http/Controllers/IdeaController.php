<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Resources;
use App\Idea;
use App\User;
use App\Http\Controllers;


class IdeaController extends Controller
{
    protected $ideas;
    protected $users;

    /**
     * �������� ������ ���������� �����������.
     *
     * @return void
     */

    /*public function __construct(IdeaRepository $ideas)
    {
        $this->ideas = $ideas;
    }*/
    /**
     * ����������� ������ ���� ����� ������������.
     *
     * @param Request $request
     * @return Response
     */
    /**
     * �������� ������ ���� ����� ������������.
     *
     * @param Request $request
     * @return Response
     */
    public function show(Request $request)
    {
        if($request->isMethod('post'))
        {
            $rules=[
                'name'=>'required|min:3',
                'mail'=>'required|email',
                'idea'=>'required|min:10'
            ];
            $this->validate($request,$rules);
//            dump($request-all());
        }

        return redirect('/welcome');
    }


    public function Update($id, Request $request, Idea $statuses)
    {
        //dd($statuses);
        Idea::find($id)->update(['statuses' => $request->statuses]);

        return redirect()->back()->with('message', 'Статус идеи обновлён!');
    }

    public function details($id)
    {

        $ideas = Idea::where('id', '=', $id)->get();
//        dd($id);
        return view('ideas.details', [
            'ideas' => $ideas,
            'id' => $id
        ]);
    }


    /**
     * Get all of the tasks for a given user.
     * @param User $user
     * @return Collection
     */

    public function index2()
    {
        $ideas = Idea::where('statuses', '=', 'Одобрена')->orderBy('created_at', 'desc')->get();

        return view('welcome', [
            'ideas' => $ideas

        ]);
    }

    public function index(Idea $user_id)
    {

        $user_id = Auth::id();
        $names = User::where('id','=',$user_id);

//        dd($user_id);
        if ($user_id == '1') {
            $ideas = Idea::all();
            return view('ideas.index', [
                'ideas' => $ideas,
                'user_id' => $user_id,
                'name'=>$names,


            ]);
        }
        else {
            $ideas = Idea::where('user_id', '=', $user_id)->orderBy('created_at', 'desc')->get();

            return view('ideas.index', [
                'ideas' => $ideas,
                'user_id' => $user_id,
                'name'=>$names,

            ]);
        }


    }

    public function welcome(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:255',
            'mail' => 'required|max:255',
            'phone' => 'required|regex:/(8)[0-9]{9}/',
            'idea' => 'required|max:1000',
        ]);

//        $request->user()->ideas()->create([
//            'name' => $request->name,
//            'mail' => $request->mail,
//            'phone' => $request->phone,
//            'idea' => $request->idea,
//        ]);
        return redirect('/');
    }

    /**
     * �������� ����� ������.
     *
     * @param Request $request
     * @return Response
     */


    public function store(Request $request)
    {
        $user_id=Auth::id();
//        dd($user_id);
        $this->validate($request, [
            'user_id' =>'nullable|max:255',
            'name' => 'required|min:3|max:255',
            'mail' => 'required|email|max:255',
            'phone' => 'required|regex:/(8)[0-9]{9}/',
            'idea' => 'required|max:1000',
        ]);
if($user_id != null){
    Idea::create([

        'user_id' => $user_id,
        'name' => $request->name,
        'mail' => $request->mail,
        'phone' => $request->phone,
        'idea' => $request->idea,
    ]);

    return redirect()->back()->with('message', 'Ваша идея отправлена модератору. Спасибо)');
}
else {
    Idea::create([

        'user_id' => $user_id,
        'name' => $request->name,
        'mail' => $request->mail,
        'phone' => $request->phone,
        'idea' => $request->idea,
    ]);


    return redirect()->back()->with('message', 'Ваша идея отправлена модератору. Спасибо)');
}

    }

    public function tindin(Request $request)
    {

    }


    public function destroy(Request $request, Idea $idea)
    {
        $this->authorize('destroy', $idea);

        $idea->delete();

        return redirect('/ideas');
    }

}
