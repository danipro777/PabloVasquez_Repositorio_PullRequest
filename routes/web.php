# Branching

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;

Este proyecto tiene como objetivo enseñarles a utilizar de manera sencilla el branching, los code reviews y las pull request. 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/example', [ExampleController::class, 'example']);
