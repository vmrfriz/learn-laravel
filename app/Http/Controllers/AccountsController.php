<?php

namespace App\Http\Controllers;

use App\Account;
use App\Worker;
use Illuminate\Http\Request;

class AccountsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts = Account::all();
        return view('accounts.index', compact($accounts));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $services = [
            'ATI' => 'АвтоТрансИнфо',
            'NAS' => 'Сетевое хранилище',
            'Email' => 'Email @promtrans.pro',
            'UL' => 'Умная логистика',
            'Wialon' => 'Wialon',
            'Bitrix24' => 'Битрикс24',
        ];

        if ($request->get('service') == 'all') {
            $view = view('accounts.create-all', [
                'worker_id' => $request->get('worker_id'),
                'service' => $request->get('service'),
                'workers' => Worker::all(['id', 'sname', 'fname', 'mname']),
                'services' => $services,
            ]);
            
        } else {
            // dd([
            //     'service' => $request->get('service'),
            //     'services' => $services,
            // ]);
            $view = view('accounts.create', [
                'worker_id' => $request->get('worker_id'),
                'service' => $request->get('service'),
                'services' => $services,
            ]);
        }

        return $view;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function show(Account $account)
    {
        return view('accounts.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit(Account $account)
    {
        return view('accounts.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Account $account)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account $account)
    {
        //
    }
}
