<?php

namespace App\Http\Controllers;

use App\Events\NewMessage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Auth\AuthManager;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests\UpdateProfieRequest;
use App\Notifications\MessageReceiveid;
use App\Repository\ConversationRepository;

class ConversationsController extends Controller
{

    private $r;
    private $auth;

    public function __construct(ConversationRepository $conversationRepository, AuthManager $auth)
    {
        $this->middleware('auth');
        $this->r = $conversationRepository;
        $this->auth = $auth;
    }


    public function index(){

        $users = User::select('name', 'id')->where('id', '!=', Auth::user()->id)->get();
        return view('pages.message',[

            'users' => $this->r->getConversations($this->auth->user()->id),
            'unread' => $this->r->unreadCount($this->auth->user()->id)

        ]);

    }
    public function show(User $user){

        // $user = User::find($id);
        // $users = User::select('name', 'id')->where('id', '!=', Auth::user()->id)->get();
        $me = $this->auth->user();
        $message = $this->r->getMessagesFor($me->id, $user->id)->paginate(2);
        $unread = $this->r->unreadCount($me->id);

        if(isset($unread[$user->id])){

            $this->r->readAllFrom($user->id, $me->id);
            unset($unread[$user->id]);
        }

        return view('conversations.show',['users' => $this->r->getConversations($me->id),
        'user'=>$user,
        // Je veux tous les messages consernant ces deux user
        'messages' => $message,
        'unread' => $unread,

    ]);
    }

    public function store(User $user, StoreMessageRequest $request){

          $message = $this->r->createMessage(
            $request->get('content'),
            $this->auth->user()->id,
            $user->id
        );

        broadcast(new NewMessage($message));
        // $user->notify(new MessageReceiveid($message));

        return redirect(route('conversations.show', ['user'=> $user->id]));
    }

    public function edit(){

        return view('conversations.edit')->with('user', auth()->user());
    }

    public function update(UpdateProfieRequest $request){

        $user = auth()->user();

        $user->update([

            'name'=> $request->name,
            'email'=>$request->email,
            'photo'=>$request->photo,
        ]);

        return back();
    }
}
