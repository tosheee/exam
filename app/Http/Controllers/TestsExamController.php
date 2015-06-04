<?php namespace App\Http\Controllers;

use App\ArrayTest;
use App\ArrayTest2;
use App\ArrayTest3;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\TestExam;
use Illuminate\Http\Request;
use Input;
use DB;
class TestsExamController extends Controller
{
    private $tests;

    public function __construct(TestExam $testExam){
        $this->tests = $testExam;
    }
    /*
          * списък с тестовете
          * */
    public function index()
    {
        $tests = $this->tests->get();
        return view('testsexam.choosetest', compact('tests'));
    }
     /*
    * избор на тест и визуализация
    * */
   public function showItemTest($id = 0)
   {
       $item = DB::table('test_exams')
           ->where('test_exams.id', '=', $id)
           ->join('issues', 'test_id', '=', 'test_exams.id')
           ->select('test_exams.id', 'test_exams.test_title', 'issues.question','issues.ans_a','issues.ans_b','issues.ans_c','issues.ans_d' )
           ->get();
       return view('testsexam.viewtest', compact('item'));
   }
    /*
     * обработка на резултата
     * */
    public function  result($testId)
    {
        $count=0;
        $a = Input::all('a[]');
        //var_dump($testId);
        $answers = DB::table('answers')
            ->where('test_id', '=', $testId)
            ->get();
            $this->trueAnswers($testId);
    foreach ($a as $key=>$key2) {
              foreach($key2 as $item){
                  foreach($answers as $answer ){
                      if($answer->answer == $item) {
                      $count++;
                      }
                  }
               }
            }
        echo '<h3>Правилни отговори: '. $count .'</h3><br>';
    }//end result()
    /*
     * обработка на правилните отговори за отделните заявки
     * */
    public function  trueAnswers($testId){
        $answers = DB::table('answers')
            ->where('test_id', '=', $testId)
            ->get();
           $j=1;
        echo "Oтговори:<br>";
        foreach($answers as $answer){
            switch($answer->answer){
            case 1 :echo $j. '.(a, '; break;
            case 2: echo $j. '.(б, ';break;
            case 3: echo $j. '.(в, ';break;
            case 4: echo $j. '.(г, ';break;
            case 5: echo $j. '.(a, ';break;
            case 6: echo $j. '.(б, ';break;
            case 7: echo $j. '.(в, ';break;
            case 8: echo $j. '.(г, ';break;
            case 9: echo $j. '.(a, ';break;
            case 10: echo $j. '.(б, ';break;
            case 11: echo $j. '.(в, ';break;
            case 12: echo $j. '.(г, ';break;
            case 13: echo $j. '.(a, ';break;
            case 14: echo $j. '.(б, ';break;
            case 15: echo $j. '.(в, ';break;
            case 16: echo $j. '.(г, ';break;
            case 17: echo $j. '.(a, ';break;
            case 18: echo $j. '.(б, ';break;
            case 19: echo $j. '.(в, ';break;
            case 20: echo $j. '.(г, ';break;
            case 21: echo $j. '.(a, ';break;
            case 22: echo $j. '.(б, ';break;
            case 23: echo $j. '.(в, ';break;
            case 24: echo $j. '.(г, ';break;
            case 25: echo $j. '.(a, ';break;
            case 26: echo $j. '.(б, ';break;
            case 27: echo $j. '.(в, ';break;
            case 28: echo $j. '.(г, ';break;
            case 29: echo $j. '.(a, ';break;
            case 30: echo $j. '.(б, ';break;
            case 31: echo $j. '.(в, ';break;
            case 32: echo $j. '.(г, ';break;
            case 33: echo $j. '.(a, ';break;
            case 34: echo $j. '.(б, ';break;
            case 35: echo $j. '.(в, ';break;
            case 36: echo $j. '.(г, ';break;
            case 37: echo $j. '.(a, ';break;
            case 38: echo $j. '.(б, ';break;
            case 39: echo $j. '.(в, ';break;
            case 40: echo $j. '.(г, ';break;
            case 41: echo $j. '.(a, ';break;
            case 42: echo $j. '.(б, ';break;
            case 43: echo $j. '.(в, ';break;
            case 44: echo $j. '.(г, ';break;
            case 45: echo $j. '.(a, ';break;
            case 46: echo $j. '.(б, ';break;
            case 47: echo $j. '.(в, ';break;
            case 48: echo $j. '.(г, ';break;
            case 49: echo $j. '.(a, ';break;
            case 50: echo $j. '.(б, ';break;
            case 51: echo $j. '.(в, ';break;
            case 52: echo $j. '.(г, ';break;
            case 53: echo $j. '.(a, ';break;
            case 54: echo $j. '.(б, ';break;
            case 55: echo $j. '.(в, ';break;
            case 56: echo $j. '.(г, ';break;
            case 57: echo $j. '.(a, ';break;
            case 58: echo $j. '.(б, ';break;
            case 59: echo $j. '.(в, ';break;
            case 60: echo $j. '.(г, ';break;
            case 61: echo $j. '.(a, ';break;
            case 62: echo $j. '.(б, ';break;
            case 63: echo $j. '.(в, ';break;
            case 64: echo $j. '.(г, ';break;
            case 65: echo $j. '.(a, ';break;
            case 66: echo $j. '.(б, ';break;
            case 67: echo $j. '.(в, ';break;
            case 68: echo $j. '.(г, ';break;
            case 69: echo $j. '.(a, ';break;
            case 70: echo $j. '.(б, ';break;
            case 71: echo $j. '.(в, ';break;
            case 72: echo $j. '.(г, ';break;
            case 73: echo $j. '.(a, ';break;
            case 74: echo $j. '.(б, ';break;
            case 75: echo $j. '.(в, ';break;
            case 76: echo $j. '.(г, ';break;
            case 77: echo $j. '.(a, ';break;
            case 78: echo $j. '.(б, ';break;
            case 79: echo $j. '.(в, ';break;
            case 80: echo $j. '.(г, ';break;
           }
            $j++;
        }
    }//end ans

}