<?php namespace App\Http\Controllers\Admin;

use App\Answers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\TestExam;
use Illuminate\Http\Request;
use App\Http\Requests\AnswersRequest;
class AdminAnswerController extends Controller {

    private $oldTest;

    public function __construct(TestExam $oldTest)
    {
        $this->oldTest = $oldTest;
    }
	public function index()
	{
        $oldTest = $this->oldTest->get();
        return view('admin.addanswers', compact('oldTest'));
	}
    public function createAnswer(AnswersRequest $request, Answers $answers)
    {
        $answers->create($request->all());
        $oldTest = $this->oldTest->get();
        return view('admin.addanswers', compact('oldTest'));
    }
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
