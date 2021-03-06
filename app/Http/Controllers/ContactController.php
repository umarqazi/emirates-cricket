<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\ContactReply;
use App\Http\Requests\ContactUs;
use App\Notifications\ContactReplyMail;
use App\Services\ContactService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    /**
     * @var ContactService
     */
    public $contact_service;

    /**
     * ContactController constructor.
     */
    public function __construct()
    {
        $this->contact_service = new ContactService();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(): \Illuminate\View\View
    {
        $contacts = $this->contact_service->all();
        return view('backend.contact.list', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function createContact(): \Illuminate\View\View
    {
        return view('frontend.contact-us');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeContact(ContactUs $request): \Illuminate\Http\RedirectResponse
    {
        $this->contact_service->store($request->except('_token'));
        return redirect()->back()->with('success','Your Request has been Submitted Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show(Contact $contact): \Illuminate\View\View
    {
        /* Mark Contact Request to READ on VIEW. */
        $this->contact_service->update($contact->id, array('status' => Contact::$Read));

        return view('backend.contact.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id): ?\Illuminate\Http\Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ContactReply $request, Contact $contact): ?\Illuminate\Http\RedirectResponse
    {
        $response = $this->contact_service->update($contact->id, $request->except(['_token', '_method', 'action']));
        if ($response) {

            /* Notify User about the Reply */
            $contact->notify(new ContactReplyMail($contact));

            /* Update Contact after Reply */
            $this->contact_service->update($contact->id, array('status' => Contact::$Replied, 'replied_by' => Auth::id()));
            return redirect()->back()->with('success','Contact Reply has been Submitted Successfully!');
        } else {
            return redirect()->back()->with('error','Failed to Submit Reply!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact): \Illuminate\Http\Response
    {
        $status = $this->contact_service->delete($contact->id);
        if ($status) {
            return redirect()->back()->with('success','Contact Request has been Deleted Successfully!');
        }
    }
}
