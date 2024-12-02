use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;

Route::controller(GuestController::class)->group(function() {
Route::get('/', 'getHome')->name('home');
Route::post('/guests', 'createGuest')->name('createGuest');
Route::get('/edit-reservation/{guest_id}', 'getEditReservation')->name('getEditReservation');
Route::post('/edit-reservation', 'editReservation')->name('editReservation');
Route::post('/delete-reservation/{guest_id}', 'deleteReservation')->name('deleteReservation');
Route::post('/update-guest/{guest_id}', 'updateGuest')->name('updateGuest');
Route::post('/delete-guest/{guest_id}', 'deleteGuest')->name('deleteGuest');
});