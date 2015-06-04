<?php namespace App\Http\Controllers\Admin;

use App\AdminButtons;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminButtonsRequest;
use Illuminate\Http\Request;

class AdminController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('admin.index');
	}
    public function createButton(AdminButtonsRequest $request, AdminButtons $adminButtons)
    {
        $adminButtons->create($request->all());
        return view('admin.index');
    }

}
