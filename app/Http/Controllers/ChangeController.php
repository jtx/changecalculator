<?php

namespace App\Http\Controllers;

use App\Services\ChangeGenerator;
use Illuminate\Http\Request;

class ChangeController extends Controller
{
    /**
     * @var ChangeGenerator
     */
    protected $changeGenerator;

    /**
     * @param ChangeGenerator $changeGenerator
     */
    public function __construct(ChangeGenerator $changeGenerator)
    {
        $this->changeGenerator = $changeGenerator;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('index');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Request $request)
    {
        $request->validate(['owed' => 'required|numeric|gte:0', 'paid' => 'required|numeric|gte:0']);

        $owed = (float) $request->get('owed');
        $paid = (float) $request->get('paid');

        $results = $this->changeGenerator->generateChanger($owed, $paid);

        if (!count($results)) {
            $results = ['Bad User!' => 'Why are you messing with me?'];
        }

        return view('show', compact('results'));
    }
}
