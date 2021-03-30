<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Visitor;
use App\Page;
use App\User;

class HomeController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Request $request){

        $visitsCount = 0;
        $onlineCount = 0;
        $pagecount = 0;
        $userCount = 0;
        $interval = intval($request->input('interval', 1));

        if($interval > 120){
            $interval = 120;
        }

        $dateInterval = date('Y-m-d H:i:s', strtotime('-'.$interval.' days'));
        $visitsCount = Visitor::where('date_access', '>=', $dateInterval)->count();

        $datelimit = date('Y-m-d H:i:s', strtotime('-5 minutes'));
        $onlineList = Visitor::select('ip')->where('date_access', '>=', $datelimit)->groupBy('ip')->get();
        $onlineCount = count($onlineList);

        $pageCount = Page::count();

        $userCount = User::count();

        $pagePie = [];

        $visitAll = Visitor::selectRaw('page, count(page) as c')->where('date_access', '>=', $dateInterval)->groupBy('ip')->groupBy('page')->get();

        foreach ($visitAll as $visit){
            $pagePie[ $visit['page']] = intval($visit['c']);
        }

        $pageLabels = json_encode(array_keys($pagePie));
        $pageValues = json_encode(array_Values($pagePie));


        return view('admin.home',[
            'visitsCount' => $visitsCount,
            'onlineCount' => $onlineCount,
            'pageCount' => $pageCount,
            'userCount' => $userCount,
            'pageLabels' => $pageLabels,
            'pageValues' => $pageValues,
            'dateInterval' => $interval
        ]);
    }
}
