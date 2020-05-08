<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmail;
use App\Jobs\SendSms;
use App\Services\Notification\Constants\EmailTypes;
use App\Services\Notification\Exceptions\UserDoesNotHaveNumber;
use App\Services\Notification\Notification;
use App\User;
use Illuminate\Http\Request;

class NotificationController extends Controller
{

    /**
     *  show send email for
     */
    public function email()
    {

        $users = User::all();
        $emailTypes = EmailTypes::toString();
        return view('notification.send-email', compact('users', 'emailTypes'));
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
            'user' => 'integer | exists:users,id',
            'email_type' => 'integer'
        ]);

        try {
            $mailable = EmailTypes::toMail($request->email_type);
            SendEmail::dispatch(User::find($request->user), new $mailable)->onQueue('emails');

            return redirect()->back()->with('success', __('notification.email_sent_successfully'));
        } catch (\Throwable $th) {
            return redirect()->back()->with('failed', __('notification.email_has_problem'));
        }
    }


    public function sms()
    {

        $users = User::all();
        return view('notification.send-sms', compact('users'));
    }

    public function sendSms(Request $request)
    {
        $request->validate([
            'user' => 'integer | exists:users,id',
            'text' => 'string | max:255'
        ]);

        try {
                SendSms::dispatch(User::find($request->user), $request->text);
            return $this->redirectBack('success', __('notification.sms_sent_successfully'));
        } catch (UserDoesNotHaveNumber $exception) {
            return $this->redirectBack('failed', __('notification.user_does_not_have_phone_number'));
        } catch (\Exception $e) {
            return $this->redirectBack('failed', __('notification.sms_has_problem'));
        }

    }

    private function redirectBack(String $type, String $text)
    {
        return redirect()->back()->with($type, $text);
    }


    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public
    function index()
    {
        //
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public
    function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public
    function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function destroy($id)
    {
        //
    }
}
