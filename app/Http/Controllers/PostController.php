<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use Auth;



class PostController extends Controller
{
   
    
    public function __construct() {
        $this->middleware(['auth', 'clearance']);
    }
    

    public function index() {
        $posts = Post::orderby('id', 'desc')->paginate(1000); 

        return view('posts.index', compact('posts'));
    }

    
    public function create() {

        
        $ph_voda = [];
        for ($number=5; $number <= 9; $number=$number+0.2){

        $ph_voda["$number"] = $number;
    }


        
        $klor= [];
        for ($i=0; $i <= 5; $i=$i+0.1){

            $klor["$i"] = $i;
        }

        
        $temperatura= [];
        for ($j=15; $j <= 36; $j=$j+0.5){

            $temperatura["$j"] = $j;
        }

        
        $flokulant= [];
        for ($a=0; $a <= 100; $a=$a+10){

            $flokulant["$a"] = $a;
        }

       
        $kemija= [];
        for ($b=0; $b <= 300; $b=$b+10){

            $kemija["$b"] = $b;
        }

     return view('posts.create', compact('ph_voda','klor','temperatura','flokulant','kemija'));
       
    }
    
    public function store(Request $request) { 
       
        $this->validate($request, [
            'pranje_pjescanog_filtera'=>'max:3',
            'ph'=>'max:10',
            'body'=>'max:100'
            
            ]);

       
        $post = Post::create([
            'ph' => request('ph'),
            'Cl' => request('Cl'),
            'temp_vode' => request('temp_vode'),
            'pranje_pjescanog_filtera' => request('pranje_pjescanog_filtera'),
            'pranje_mehanickog_predfiltera_u' => request('pranje_mehanickog_predfiltera_u'),
            'vizualni_pregled_opreme_za_dk' => request('vizualni_pregled_opreme_za_dk'),
            'vizualni_pregled_sve_ostale_o' => request('vizualni_pregled_sve_ostale_o'),
            'vizualni_pregled_stanja_bazena_v' => request('vizualni_pregled_stanja_bazena_v'),
            'viz_pregl_stanja_str_i_el_o_srt_b' => request('viz_pregl_stanja_str_i_el_o_srt_b'),
            'ciscenje_skoljke_bazena_pod' => request('ciscenje_skoljke_bazena_pod'),
            'ciscenje_skoljke_bazena_zid' => request('ciscenje_skoljke_bazena_zid'),
            'ciscenje_preljevnih_kanala' => request('ciscenje_preljevnih_kanala'),
            'pranje_kompenzacije_bazena' => request('pranje_kompenzacije_bazena'),
            'ubaceno_flokulanta' => request('ubaceno_flokulanta'),
            'stanje_tekuceg_klora' => request('stanje_tekuceg_klora'),
            'stanje_sumporne_kiseline' => request('stanje_sumporne_kiseline'),
            'body' => request('body'),
            'user_id' => Auth::id(),
        ]);

    
        return redirect()->action('PostController@index')
            ->with('flash_message', 'Unos kreiran.');
    }

    
    public function show($id) {
        $post = Post::findOrFail($id); 

        return view ('posts.show', compact('post'));
    }

    
    public function edit($id) {
        $post = Post::findOrFail($id);

        
      
        $ph_voda = [];
        for ($number=5; $number <= 9; $number=$number+0.2){

        $ph_voda["$number"] = $number;
    }
        
        $klor= [];
        for ($i=0; $i <= 5; $i=$i+0.1){

            $klor["$i"] = $i;
        }

        $temperatura= [];
        for ($j=15; $j <= 36; $j=$j+0.5){

            $temperatura["$j"] = $j;
        }

        $flokulant= [];
        for ($a=0; $a <= 100; $a=$a+10){

            $flokulant["$a"] = $a;
        }

       
        $kemija= [];
        for ($b=0; $b <= 300; $b=$b+10){

            $kemija["$b"] = $b;
        }




        return view('posts.edit', compact('post','ph_voda','klor','temperatura','flokulant','kemija'));
    }

    
    public function update(Request $request, $id) {
       
        $this->validate($request, [
          
            'body'=>'max:100',
        ]);

       
        $post = Post::findOrFail($id);
       
        $post->ph = $request->input('ph');
        $post->Cl = $request->input('Cl');
        $post->temp_vode = $request->input('temp_vode');
        $post->pranje_pjescanog_filtera = $request->input('pranje_pjescanog_filtera');
        $post->pranje_mehanickog_predfiltera_u = $request->input('pranje_mehanickog_predfiltera_u');
        $post->vizualni_pregled_opreme_za_dk = $request->input('vizualni_pregled_opreme_za_dk');
        $post->vizualni_pregled_sve_ostale_o = $request->input('vizualni_pregled_sve_ostale_o');
        $post->vizualni_pregled_stanja_bazena_v = $request->input('vizualni_pregled_stanja_bazena_v');
        $post->viz_pregl_stanja_str_i_el_o_srt_b = $request->input('viz_pregl_stanja_str_i_el_o_srt_b');
        $post->ciscenje_skoljke_bazena_pod = $request->input('ciscenje_skoljke_bazena_pod');
        $post->ciscenje_skoljke_bazena_zid = $request->input('ciscenje_skoljke_bazena_zid');
        $post->ciscenje_preljevnih_kanala = $request->input('ciscenje_preljevnih_kanala');
        $post->pranje_kompenzacije_bazena = $request->input('pranje_kompenzacije_bazena');
        $post->ubaceno_flokulanta = $request->input('ubaceno_flokulanta');
        $post->stanje_tekuceg_klora = $request->input('stanje_tekuceg_klora');
        $post->stanje_sumporne_kiseline = $request->input('stanje_sumporne_kiseline');
        $post->body = $request->input('body');
        $post->user_id = Auth::id();
        $post->save();


        return redirect()->route('posts.index', 
            $post->id)->with('flash_message', 
            'Unos je editiran');

    }

    
    public function destroy($id) {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('posts.index')
            ->with('flash_message',
             'Unos je uspješno izbrisan');

    }
}