<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
// use App\Models\mail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;



class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($Folder = '')
    {
        $Folder ? $MailboxName = $Folder : $MailboxName = 'INBOX';

        $Mailbox = UserMail($Folder);


        $Name = Menu('ShowEmailPage')[0];
        $Section = Menu('ShowEmailPage')[1];

        return view(
            'PageElements.dashboard.Mail.Email',
            compact('Name', 'Section', 'MailboxName', 'Mailbox')
        );
    }






    /**
     * Display selected mailbox by user.
     *
     * @return \Illuminate\Http\Response
     */
    public function MailBody($Folder = '', $Msg_uid)
    {

        $Folder ? $MailboxName = $Folder : $MailboxName = 'INBOX';

        $MailBody = ReadMailBody($Folder, $Msg_uid);

        $Name = Menu('ShowEmailPage')[0];
        $Section = Menu('ShowEmailPage')[1];
        return view(
            'PageElements.dashboard.Mail.MailBody',
            compact('Name', 'Section', 'MailboxName', 'Msg_uid', 'MailBody')
        );
    }






    /**
     * Display selected mailbox by user.
     *
     * @return \Illuminate\Http\Response
     */
    public function DownloadAttachment($Folder, $MsgNumber, $FileName)
    {

        $File = DownloadSelectedAttachment($Folder, $MsgNumber, $FileName);
        dd($File);
    }




    /**
     * Send Message of contact us form to company email.
     *
     * @return \Illuminate\Http\Response
     */
    public function SendCUMessage(Request $request)
    {
        $validated = $request->validate([
            'FNAME' => 'required|max:25',
            'EMAIL' => 'required|email',
            'SUBJECT' => 'required',
            'MESSAGE' => 'required',
            'mtcaptcha-verifiedtoken' => 'required'
        ]);

        $data = array(
            'name' => $request->input('FNAME'),
            'email' => $request->input('EMAIL'),
            'subject' => $request->input('SUBJECT'),
            'message' => $request->input('MESSAGE'),
        );

        Mail::to('info@etminan.net')->send(new SendMail($data));
        return back()->with('success', 'Thanks for contacting us!');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function show(mail $mail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function edit(mail $mail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mail $mail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function destroy(mail $mail)
    {
        //
    }
}