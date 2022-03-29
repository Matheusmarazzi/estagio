<?php

namespace App\Http\Controllers\Admin;
use App\Models\Noticia;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class NoticiaController extends Controller
{
    Protected $noticia;
    Protected $user;
    public function _construct(Noticia $noticia, User $user )
    {
        $this->noticia = $noticia;
        $this->user = $user;
    }
    public function index(Request $request, $userid)
    {   
    /*funçao listar noticias*/
        if(!$user = User::find($userid)){
            return redirect()->back();
        }
        $noticias = $user->noticias()
                            ->where('corpo', 'LIKE', "%{$request->search}%")
                            ->get();
       return view('users.noticias.index', compact('user','noticias' )); 
    }
    /*funçao criar noticias*/
    public function create($userid)
    {
        if(!$user = User::find($userid)){
            return redirect()->back();
        }
       return view('users.noticias.create', compact('user')); 
    }
    /*funçao salvar noticias*/
    public function store(Request $request, $userid)
    {
        if(!$user = User::find($userid)){
            return redirect()->back();
        }
       $user->noticias()->create($request->all());
       return redirect()->route('noticias.index', $user->id);
    }
    /*funçao editar noticias*/
    public function editar($userid, $id)
    {
        if(!$noticia = noticia::find($id)){
            return redirect()->back();
        }
        $user = $noticia->user;
       return view('users.noticias.edit', compact('user', 'noticia')); 
    }
    /*funçao atualizar noticias*/
    public function update(Request $request, $id)
    {
        if(!$noticia = noticia::find($id)){
            return redirect()->back();
        }
       $noticia->update([
           'corpo' => $request->corpo,
           'titulo' =>$request->titulo
       ]);
       return redirect()->route('noticias.index', 'user->id'); 
    }
    /*funçao deletar noticias*/
    public function destroy($id){
        if(!$noticia = noticia::find($id)){
            return redirect()->back();
        }

        $noticia->delete();
        return redirect()->route('noticia.index');
        echo "funcionou";
    }        
}
