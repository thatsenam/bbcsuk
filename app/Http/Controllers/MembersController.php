<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;
use Exception;

class MembersController extends Controller
{

    /**
     * Display a listing of the members.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $members = Member::paginate(25);

        return view('members.index', compact('members'));
    }

    /**
     * Show the form for creating a new member.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {


        return view('members.create');
    }


    public function store(Request $request)
    {


        $data = $this->getData($request);

        Member::create($data);
        if ($request->front_end) {
            return back()
                ->with('success_message', 'Form was successfully submitted.');
        }

        return redirect()->route('members.member.index')
            ->with('success_message', 'Member was successfully added.');

    }

    /**
     * Display the specified member.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $member = Member::findOrFail($id);

        return view('members.show', compact('member'));
    }

    /**
     * Show the form for editing the specified member.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $member = Member::findOrFail($id);


        return view('members.edit', compact('member'));
    }

    /**
     * Update the specified member in the storage.
     *
     * @param int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {


        $data = $this->getData($request);

        $member = Member::findOrFail($id);
        $member->update($data);

        return redirect()->route('members.member.index')
            ->with('success_message', 'Member was successfully updated.');

    }

    /**
     * Remove the specified member from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $member = Member::findOrFail($id);
            $member->delete();

            return redirect()->route('members.member.index')
                ->with('success_message', 'Member was successfully deleted.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }


    /**
     * Get the request's data from the request.
     *
     * @param Illuminate\Http\Request\Request $request
     * @return array
     */
    protected function getData(Request $request)
    {
        $rules = [
            'applicant_name' => 'required|nullable|string|min:1',
            'age' => 'numeric|nullable',
            'address' => 'string|min:1|nullable',
            'mobile_number' => 'required|nullable|numeric',
            'email' => 'required|nullable',
            'spouse_name' => 'string|min:1|nullable',
            'spouse_age' => 'numeric|nullable',
            'spouse_email' => 'nullable',
            'children_1_name' => 'string|min:1|nullable',
            'children_1_age' => 'numeric|nullable',
            'children_1_mobile' => 'string|min:1|nullable',
            'children_1_email' => 'nullable',
            'children_2_name' => 'string|min:1|nullable',
            'children_2_age' => 'numeric|nullable',
            'children_2_mobile' => 'string|min:1|nullable',
            'children_2_email' => 'nullable',
            'reference_name' => 'string|min:1|nullable',
            'status' => 'string|min:1|nullable',
        ];

        $data = $request->validate($rules);


        return $data;
    }

}
