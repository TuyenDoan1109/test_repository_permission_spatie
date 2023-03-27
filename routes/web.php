<?php

use Illuminate\Support\Facades\Route;

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

// BACKEND
Route::name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('dashboard');

    // Authentication
    Route::namespace('Auth')->group(function () {
        Route::get('/login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'login']);
        Route::post('/logout', [App\Http\Controllers\Admin\Auth\LoginController::class, 'logout'])->name('logout');
        Route::get('/register', [App\Http\Controllers\Admin\Auth\RegisterController::class, 'showRegisterForm'])->name('register');
        Route::post('/register', [App\Http\Controllers\Admin\Auth\RegisterController::class, 'register']);
    });

    // Category
    Route::resource('categories', App\Http\Controllers\Admin\CategoryController::class);
    Route::get('/categories-with-deleted', [App\Http\Controllers\Admin\CategoryController::class, 'indexWithDeleted'])->name('categories.indexWithDeleted');
    Route::post('/categories-force-delete/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'forceDelete'])->name('categories.forceDelete');
    Route::get('/categories-restore/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'restore'])->name('categories.restore');

    // Subcategory
    Route::resource('subcategories', App\Http\Controllers\Admin\SubcategoryController::class);
    Route::get('/subcategories-with-deleted', [App\Http\Controllers\Admin\SubcategoryController::class, 'indexWithDeleted'])->name('subcategories.indexWithDeleted');
    Route::post('/subcategories-force-delete/{id}', [App\Http\Controllers\Admin\SubcategoryController::class, 'forceDelete'])->name('subcategories.forceDelete');
    Route::get('/subcategories-restore/{id}', [App\Http\Controllers\Admin\SubcategoryController::class, 'restore'])->name('subcategories.restore');

    // Product
    Route::resource('products', App\Http\Controllers\Admin\ProductController::class);
    Route::get('/products-with-deleted', [App\Http\Controllers\Admin\ProductController::class, 'indexWithDeleted'])->name('products.indexWithDeleted');
    Route::post('/products-force-delete/{id}', [App\Http\Controllers\Admin\ProductController::class, 'forceDelete'])->name('products.forceDelete');
    Route::get('/products-restore/{id}', [App\Http\Controllers\Admin\ProductController::class, 'restore'])->name('products.restore');

    // Admin
    Route::resource('admins', App\Http\Controllers\Admin\AdminController::class);
    Route::get('/admins-with-deleted', [App\Http\Controllers\Admin\AdminController::class, 'indexWithDeleted'])->name('admins.indexWithDeleted');
    Route::post('/admins-force-delete/{id}', [App\Http\Controllers\Admin\AdminController::class, 'forceDelete'])->name('admins.forceDelete');
    Route::get('/admins-restore/{id}', [App\Http\Controllers\Admin\AdminController::class, 'restore'])->name('admins.restore');
    Route::get('/admins-edit-role/{id}', [App\Http\Controllers\Admin\AdminController::class, 'editRole'])->name('admins.editRole');
    Route::post('/admins-update-role', [App\Http\Controllers\Admin\AdminController::class, 'updateRole'])->name('admins.updateRole');
    Route::get('/admins-edit-permission/{id}', [App\Http\Controllers\Admin\AdminController::class, 'editPermission'])->name('admins.editPermission');
    Route::post('/admins-update-permission', [App\Http\Controllers\Admin\AdminController::class, 'updatePermission'])->name('admins.updatePermission');

    // Role
    Route::resource('roles', App\Http\Controllers\Admin\RoleController::class);
    Route::get('/roles-with-deleted', [App\Http\Controllers\Admin\RoleController::class, 'indexWithDeleted'])->name('roles.indexWithDeleted');
    Route::post('/roles-force-delete/{id}', [App\Http\Controllers\Admin\RoleController::class, 'forceDelete'])->name('roles.forceDelete');
    Route::get('/roles-restore/{id}', [App\Http\Controllers\Admin\RoleController::class, 'restore'])->name('roles.restore');
    Route::get('/roles-edit-permission/{id}', [App\Http\Controllers\Admin\RoleController::class, 'editPermission'])->name('roles.editPermission');
    Route::post('/roles-update-permission', [App\Http\Controllers\Admin\RoleController::class, 'updatePermission'])->name('roles.updatePermission');

    // Permission
    Route::resource('permissions', App\Http\Controllers\Admin\PermissionController::class);
    Route::get('/permissions-with-deleted', [App\Http\Controllers\Admin\PermissionController::class, 'indexWithDeleted'])->name('permissions.indexWithDeleted');
    Route::post('/permissions-force-delete/{id}', [App\Http\Controllers\Admin\PermissionController::class, 'forceDelete'])->name('permissions.forceDelete');
    Route::get('/permissions-restore/{id}', [App\Http\Controllers\Admin\PermissionController::class, 'restore'])->name('permissions.restore');
});




// FRONTEND
Route::get('/', [App\Http\Controllers\PageController::class, 'index'])->name('home');
Route::namespace('Auth')->group(function () {
    Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
    Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
    Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);
});
