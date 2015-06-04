<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\TestExam;
use App\Issues;

use Illuminate\Http\Request;

use App\Http\Requests\TestExamRequest;
use App\Http\Requests\IssuesRequest;

class AdminTestExamController extends Controller {

        private $oldTest;

    public function __construct(TestExam $oldTest)
    {
        $this->oldTest = $oldTest;
    }
	public function index()
	{
        return view('admin.addtest');
	}

    public function viewForm(){
        $oldTest = $this->oldTest->get();
        return view('admin.addquestion', compact('oldTest'));
    }

	public function createTest(TestExamRequest $request, TestExam $testExam)
	{
		$testExam->create($request->all());

        $oldTest = $this->oldTest->get();
        return view('admin.addquestion', compact('oldTest'));
	}
    public function createQuestion(IssuesRequest $request, Issues $issues)
    {
        $issues->create($request->all());
        $oldTest = $this->oldTest->get();
        return view('admin.addquestion', compact('oldTest'));
    }



	public function store()
	{
		//
	}


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
