  <?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request;
use App\Trituracion;
use App\Raspado;
use App\Deshidratadora;
use App\Cartones;
use App\Freido;


Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/raspado', function () {
    return view('raspado');
});
Route::get('/deshidratadora', function () {
    return view('deshidratadora');
});
Route::get('/freido', function () {
    return view('freido');
});

//===================Trituracion======================
//carga vista con dato
Route::get('/triturado', function () {
  $trituraciones = Trituracion::all();
  return view('triturado', compact('trituraciones'));
});
//crea en la base de datos
Route::post('trituradores', function(Request $request){
  $newTriturado = new Trituracion;
  $newTriturado->costales = $request->input('costales');
  $newTriturado->kilos = $request->input('kilos');
  $newTriturado->javas = $request->input('javas');
  $newTriturado->tiempo = $request->input('tiempo');
  $newTriturado->cantidad = $request->input('cantidad');
  $newTriturado->save();
  return Redirect::back()->with('message','Creado con exito!');
})->name('triturado.crear');
//elimina de la base de datos con id
Route::delete('triturado/{id}', function ($id) {
  $trituracion = Trituracion::findOrFail($id);
  $trituracion->delete();
  return Redirect::back()->with('message','Borrado con exito!');
  return view('triturado', compact('trituraciones'));
})->name('triturado.borrar');
//editar con un modal
Route::put('triturado/{id}',function(Request $request, $id){
  $editTriturado =  Trituracion::findOrFail($id);
  $editTriturado->costales = $request->input('costales');
  $editTriturado->kilos = $request->input('kilos');
  $editTriturado->javas = $request->input('javas');
  $editTriturado->tiempo = $request->input('tiempo');
  $editTriturado->cantidad = $request->input('cantidad');
  $editTriturado->save();
  return Redirect::back()->with('message','Editado con exito!');
  return view('triturado', compact('trituraciones'));
})->name('triturado.actualizar');
//


//===================Raspado======================
//carga vista con dato
Route::get('/raspado', function () {
  $raspados = Raspado::all();
  return view('raspado', compact('raspados'));
});
//crea en la base de datos
Route::post('raspado', function(Request $request){
  $newRaspado = new Raspado;
  $newRaspado->tipo = $request->input('tipo');
  $newRaspado->cantidad = $request->input('cantidad');
  $newRaspado->kilos = $request->input('kilos');
  $newRaspado->tiempo = $request->input('tiempo');

  $newRaspado->save();
  return Redirect::back()->with('message','Creado con exito!');
})->name('raspado.crear');
//elimina de la base de datos con id
Route::delete('raspado/{id}', function ($id) {
  $Raspado = Raspado::findOrFail($id);
  $Raspado->delete();
  return Redirect::back()->with('message','Borrado con exito!');
  return view('raspado', compact('raspados'));
})->name('raspado.borrar');
//editar con un modal
Route::put('raspado/{id}',function(Request $request, $id){
  $editRaspado =  Raspado::findOrFail($id);
  $editRaspado->tipo = $request->input('tipo');
  $editRaspado->cantidad = $request->input('cantidad');
  $editRaspado->kilos = $request->input('kilos');
  $editRaspado->tiempo = $request->input('tiempo');
  $editRaspado->save();
  return Redirect::back()->with('message','Editado con exito!');
  return view('raspado', compact('raspados'));
})->name('raspado.actualizar');
//


//===================Deshidratadora======================
//carga vista con dato
Route::get('/deshidratadora', function () {
  $deshidratadora = Deshidratadora::all();
  $cartones = Cartones::all();
  return view('deshidratadora', compact('deshidratadora','cartones'));
});
//crea en la base de datos
Route::post('deshidratadora1', function(Request $request){
  $newDeshidratadora = new Deshidratadora;
  $newDeshidratadora->tipo = $request->input('tipo');
  $newDeshidratadora->cantidad = $request->input('cantidad');
  $newDeshidratadora->kilos = $request->input('kilos');
  $newDeshidratadora->tiempo = $request->input('tiempo');
  $newDeshidratadora->save();
  return Redirect::back()->with('message','Creado con exito!');
})->name('deshidratadora.crear');

Route::post('deshidratadora2', function(Request $request){
  $newCarton = new Cartones;
  $newCarton->secos = $request->input('secos');
  $newCarton->doblados = $request->input('doblados');
  $newCarton->total = $request->input('total');
  $newCarton->save();
  return Redirect::back()->with('message','Carton creado con exito!');
})->name('deshidratadora.createCarton');

//editar con un modal
Route::put('deshidratadora/{id}',function(Request $request, $id){
  $editDeshidratadora =  Deshidratadora::findOrFail($id);
  $editDeshidratadora->tipo = $request->input('tipo');
  $editDeshidratadora->cantidad = $request->input('cantidad');
  $editDeshidratadora->kilos = $request->input('kilos');
  $editDeshidratadora->tiempo = $request->input('tiempo');
  $editDeshidratadora->save();
  return Redirect::back()->with('message','Editado con exito!');
})->name('deshidratadora.actualizar');

Route::put('deshidratadora2/{id}',function(Request $request, $id){
  $editCartones =  Cartones::findOrFail($id);
  $editCartones->doblados = $request->input('doblados');
  $editCartones->secos = $request->input('secos');
  $editCartones->total = $request->input('total');
  $editCartones->save();
  return Redirect::back()->with('message','Editado con exito!');
})->name('deshidratadora.actualizarCartones');

//elimina de la base de datos con id
Route::delete('deshidratadora/{id}', function ($id) {
  $Deshidratadora = Deshidratadora::findOrFail($id);
  $Deshidratadora->delete();
  return Redirect::back()->with('message','Borrado con exito!');
  return view('deshidratadora', compact('deshidratadora'));
})->name('deshidratadora.borrar');

Route::delete('deshidratadora2/{id}', function ($id) {
  $carton = Cartones::findOrFail($id);
  $carton->delete();
  return Redirect::back()->with('message','Borrado con exito!');
})->name('deshidratadora.deleteCartones');



//===================Freido======================
//carga vista con dato
Route::get('/freido', function () {
  $freido = Freido::all();
  return view('freido', compact('freido'));
});
//crea en la base de datos
Route::post('freido', function(Request $request){
  $newFreido = new Freido;
  $newFreido->tipo = $request->input('tipo');
  $newFreido->cantidad = $request->input('cantidad');
  $newFreido->kilos = $request->input('kilos');
  $newFreido->save();
  return Redirect::back()->with('message','Creado con exito!');
})->name('freido.crear');
//elimina de la base de datos con id
Route::delete('freido/{id}', function ($id) {
  $freido = Freido::findOrFail($id);
  $freido->delete();
  return Redirect::back()->with('message','Borrado con exito!');
  return view('freido', compact('freido'));
})->name('freido.borrar');
//editar con un modal
Route::put('freido/{id}',function(Request $request, $id){
  $editFreido =  Freido::findOrFail($id);
  $editFreido->tipo = $request->input('tipo');
  $editFreido->cantidad = $request->input('cantidad');
  $editFreido->kilos = $request->input('kilos');
  $editFreido->save();
  return Redirect::back()->with('message','Editado con exito!');
  return view('freido', compact('freido'));
})->name('freido.actualizar');
//




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
