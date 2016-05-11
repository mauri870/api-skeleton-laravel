<?php

namespace App\Applications\Dashboard\Http\Controllers;

use App\Applications\Dashboard\Http\Controllers\Base\BaseController;
use App\Applications\Dashboard\Http\Requests\Base\BaseRequest;
use App\Applications\Dashboard\Http\Requests\MailFormRequest;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Applications\Dashboard\Notifications\Facades\Notify;

class MailController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return $this->view('mail.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param MailFormRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(MailFormRequest $request)
    {
        Mail::send('dashboard::templates.mail',
            [
                'data' => $request->get('message')
            ], function ($message) use ($request) {
                $message->from(env('MAIL_USERNAME', null));
                $message->to($request->get('to'), null);

                if($request->get('cc') != ''){
                    $message->cc($request->get('cc'));
                }

                if($request->get('bcc') != ''){
                    $message->bcc($request->get('bcc'));
                }

                $message->subject($request->get('subject'));
            });

        //Log Users action
        Log::info(
            'Email send in dashboard from '.$request->getClientIp(). ' to '.$request->get('to')
        );

        Notify::set(
            'Sucesso','success','Email para '.$request->get('to').' enviado com sucesso!',
            true
        );

        return redirect()
            ->route('dashboard.mail.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(BaseRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
