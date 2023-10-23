<?php
  
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobOrder;
use Illuminate\Support\Facades\Validator;
 
class JobOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $joborder = JobOrder::orderBy('created_at', 'DESC')->get();
  
        return view('admin.joborders.index', compact('joborder'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.joborders.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'fullname' => 'required|string',
            'gender' => 'required|in:male,female',
            'nationality' => 'required|string',
            'date_of_birth' => 'required|date',
            'identity_number' => 'required|string',
            'residency' => 'nullable|string',
            'date_of_issue' => 'required|date',
            'issuing_authority' => 'required|string',
            'marital_status' => 'required|in:single,married,widowed,divorced',
            'email' => 'required|email',
            'phone' => 'required|string',
            // 'possibility_of_travel' => 'required|boolean',
            // 'worked_before' => 'required|boolean',
            'qualification' => 'required|string',
            'qualification_type' => 'required|string',
            'certificate_source' => 'required|string',
            'attach_certificates' => 'required|file|max:2048',
            'section_type' => 'required|string',
            'graduation_date' => 'required|date',
            'academic_experience' => 'nullable|string',
            'attach_academic_experience' => 'nullable|array',
            'attach_academic_experience.*' => 'nullable|file|max:2048',
            'training_courses' => 'nullable|string',
            'attach_training_courses' => 'nullable|array',
            'attach_training_courses.*' => 'nullable|file|max:2048',
            'english_level' => 'required|string',
            'computer_level' => 'required|string',
            'hear_about_company' => 'required|string',
            'cv' => 'required|file|max:2048',
            'attach_additional_information' => 'nullable|array',
            'attach_additional_information.*' => 'nullable|file|max:2048',
        ]);

        // If validation fails, redirect back with errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Validation passed, create and save the model
        $jobOrder = new JobOrder();
        $jobOrder->fullname = $request->input('fullname');
        $jobOrder->gender = $request->input('gender');
        $jobOrder->nationality = $request->input('nationality');
        $jobOrder->date_of_birth = $request->input('date_of_birth');
        $jobOrder->identity_number = $request->input('identity_number');
        $jobOrder->residency = $request->input('residency');
        $jobOrder->date_of_issue = $request->input('date_of_issue');
        $jobOrder->issuing_authority = $request->input('issuing_authority');
        $jobOrder->marital_status = $request->input('marital_status');
        $jobOrder->email = $request->input('email');
        $jobOrder->phone = $request->input('phone');
        $jobOrder->possibility_of_travel = $request->input('possibility_of_travel') == null ? 0 : 1 ;
        $jobOrder->worked_before = $request->input('worked_before') == null ? 0 : 1 ;
        $jobOrder->qualification = $request->input('qualification');
        $jobOrder->qualification_type = $request->input('qualification_type');
        $jobOrder->certificate_source = $request->input('certificate_source');
        $jobOrder->section_type = $request->input('section_type');
        $jobOrder->graduation_date = $request->input('graduation_date');
        $jobOrder->academic_experience = $request->input('academic_experience');
        $jobOrder->training_courses = $request->input('training_courses');
        $jobOrder->english_level = $request->input('english_level');
        $jobOrder->computer_level = $request->input('computer_level');
        $jobOrder->hear_about_company = $request->input('hear_about_company');

        // Handling single image
        if ($request->hasFile('attach_certificates')) {
            $imgPath = $request->file('attach_certificates')->store('files', 'public');
            $jobOrder->attach_certificates = $imgPath;
        }

        // Handling multiple images
        if ($request->hasFile('attach_academic_experience')) {
            $imgPaths = [];
            foreach ($request->file('attach_academic_experience') as $img) {
                $imgPath = $img->store('files', 'public');
                $imgPaths[] = $imgPath;
            }
            $jobOrder->attach_academic_experience = implode("|", $imgPaths);
        }

        // Handling multiple images
        if ($request->hasFile('attach_training_courses')) {
            $imgPaths = [];
            foreach ($request->file('attach_training_courses') as $img) {
                $imgPath = $img->store('files', 'public');
                $imgPaths[] = $imgPath;
            }
            $jobOrder->attach_training_courses = implode("|", $imgPaths);
        }

        if ($request->hasFile('cv')) {
            $imgPath = $request->file('cv')->store('files', 'public');
            $jobOrder->cv = $imgPath;
        }

        // Handling multiple images
        if ($request->hasFile('attach_additional_information')) {
            $imgPaths = [];
            foreach ($request->file('attach_additional_information') as $img) {
                $imgPath = $img->store('files', 'public');
                $imgPaths[] = $imgPath;
            }
            $jobOrder->attach_additional_information = implode("|", $imgPaths);
        }
        
        $jobOrder->save();

 
        return redirect()->route('joborders.index')->with('success', 'JobOrder added successfully');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $joborder = JobOrder::findOrFail($id);
  
        return view('admin.joborders.show', compact('joborder'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $joborder = JobOrder::findOrFail($id);
  
        return view('admin.joborders.edit', compact('joborder'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $joborder = JobOrder::findOrFail($id);
  
        $joborder->update($request->all());
  
        return redirect()->route('joborders.index')->with('success', 'joborder updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $joborder = JobOrder::findOrFail($id);
  
        $joborder->delete();
  
        return redirect()->route('joborders.index')->with('success', 'joborder deleted successfully');
    }
}