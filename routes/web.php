<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PoiController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/proses-login', [LoginController::class, 'prosesLogin'])->name('proses-login');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

// Gunakan Controller PoiController
Route::prefix('/poi')->group(function(){
    Route::get('/semua', [PoiController::class, 'semua'])->name('poi.semua')->middleware('auth');
    Route::get('/tambah', [PoiController::class, 'tambah'])->name('poi.tambah')->middleware('auth');
    Route::post('/proses-tambah', [PoiController::class, 'proses_tambah'])->name('poi.proses.tambah');
    Route::get('/edit', [PoiController::class, 'edit'])->name('poi.edit')->middleware('auth');
    Route::post('/update-judul', [PoiController::class, 'update_judul'])->middleware('auth');
    Route::post('/update-deskripsi', [PoiController::class, 'update_deskripsi'])->middleware('auth');
    Route::get('/hapus', [PoiController::class, 'hapus'])->name('poi.hapus')->middleware('auth');
    Route::get('/detail/{id}', [PoiController::class, 'detail'])->middleware('auth');
    Route::get('/kategori/{id}', [PoiController::class, 'kategori'])->middleware('auth');
});




// Route::redirect('/', '/home');

// Named route
// Route::get('/home', function(){
//     return view('sidebar1');
// })->name('home');

// Route::get('/named', function(){
//     echo "<a href='".route('beranda')."'>Beranda</a>";
// });

// Route::get('/data/kabupaten/{nama_kabupaten}', function($nama_kabupaten){
//     return "Data Kabupaten $nama_kabupaten";
// });


// Route::get('/Ngawi/{kec}/{desa}', function($a, $b){
//     echo "<h5>Data Kabupaten Ngawi</h5><br/>";
//     echo "<h3>Kecamatan : $a</h3><br/>";
//     echo "<h2>Desa/Kelurahan : $b</h2>";
// });

// Route::get('/Solo/{kec?}/{kel?}', function($a = "Laweyan", $b = "Pajang"){
//     echo "<h5>Data Kota Solo</h5><br/>";
//     echo "<h3>Kecamatan : $a</h3><br/>";
//     echo "<h2>Desa/Kelurahan : $b</h2>";
// });

// Route Parameter with Regex
// Route::get('/data_pegawai/{id_peg}', function($id){
//     echo "Berikut Data dari Pegawai dengan ID  $id :";
// })->where('id_peg', '[A-Z]{2}[0-9]+');

// Route::get('/user/{id}', function ($id) {
//     return "Tampilkan user dengan id = $id";
// })->where('id', '[A-Z]{2}[0-9]+');


// Route redirect
// Route::get('/forumbaru', function(){
//     return "F O R U M --- B A R U";
// })->middleware('auth');

// Route::redirect('/forum', '/forumbaru');

// Route Grouping
// Route::prefix('/soloraya')->group(function(){
//     Route::get('/sragen', function(){
//         echo "Data Wilayah Sragen";
//     });

//     Route::get('/klaten', function(){
//         echo "Data Wilayah Klaten";
//     });

//     Route::get('/boyolali', function(){
//         echo "Data Wilayah Boyolali";
//     });
// });




// Route Fallback
Route::fallback(function(){
    echo "Oopps, alamat web yang Anda tuliskan salah !";
});



// Route with return view
// Route::get('/beranda', function(){
//     return view('beranda');
// });

// Route with wiew inside a directory
// Route::get('/kulon', function(){
//     return view('soloraya.daftar_kota', 
//         [
//             'alias' => 'Solo Raya',
//             'kuliner' => ['Tongseng', 'Sate Kambing', 'Nasi Liwet', 'Soto Bening/Seger']
//         ]
//     );
// });

// with "compact" syntax
// Route::get('/wetan', function(){
//     $alias = 'Eks Karesidenan Madiun';
//     $kuliner = ['Nasi Pecel', 'Tahu Tepo', 'Sate Kambing', 'Kripik Tempe' ];

//     return view('platae.daftar_kota', compact("alias", "kuliner"));
// });