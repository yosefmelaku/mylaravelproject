@extends('layouts.app')

@section('title', 'Edit Student')

@section('content')
<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header bg-warning text-dark">
                <h4 class="mb-0"><i class="bi bi-pencil-square"></i> Edit Student</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('students.update', $student->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <!-- First Name -->
                    <div class="mb-3">
                        <label for="first_name" class="form-label">First Name <span class="text-danger">*</span></label>
                        <input type="text" 
                               class="form-control @error('first_name') is-invalid @enderror" 
                               id="first_name" 
                               name="first_name" 
                               value="{{ old('first_name', $student->first_name) }}"
                               placeholder="Enter first name">
                        @error('first_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Last Name -->
                    <div class="mb-3">
                        <label for="last_name" class="form-label">Last Name <span class="text-danger">*</span></label>
                        <input type="text" 
                               class="form-control @error('last_name') is-invalid @enderror" 
                               id="last_name" 
                               name="last_name" 
                               value="{{ old('last_name', $student->last_name) }}"
                               placeholder="Enter last name">
                        @error('last_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                        <input type="email" 
                               class="form-control @error('email') is-invalid @enderror" 
                               id="email" 
                               name="email" 
                               value="{{ old('email', $student->email) }}"
                               placeholder="Enter email address">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Phone -->
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone <span class="text-danger">*</span></label>
                        <input type="text" 
                               class="form-control @error('phone') is-invalid @enderror" 
                               id="phone" 
                               name="phone" 
                               value="{{ old('phone', $student->phone) }}"
                               placeholder="Enter phone number">
                        @error('phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Department -->
                    <div class="mb-3">
                        <label for="department" class="form-label">Department <span class="text-danger">*</span></label>
                        <select class="form-select @error('department') is-invalid @enderror" 
                                id="department" 
                                name="department">
                            <option value="">Select Department</option>
                            <option value="Computer Science" {{ old('department', $student->department) == 'Computer Science' ? 'selected' : '' }}>Computer Science</option>
                            <option value="Information Technology" {{ old('department', $student->department) == 'Information Technology' ? 'selected' : '' }}>Information Technology</option>
                            <option value="Business Administration" {{ old('department', $student->department) == 'Business Administration' ? 'selected' : '' }}>Business Administration</option>
                            <option value="Engineering" {{ old('department', $student->department) == 'Engineering' ? 'selected' : '' }}>Engineering</option>
                            <option value="Mathematics" {{ old('department', $student->department) == 'Mathematics' ? 'selected' : '' }}>Mathematics</option>
                            <option value="Physics" {{ old('department', $student->department) == 'Physics' ? 'selected' : '' }}>Physics</option>
                            <option value="Chemistry" {{ old('department', $student->department) == 'Chemistry' ? 'selected' : '' }}>Chemistry</option>
                            <option value="Biology" {{ old('department', $student->department) == 'Biology' ? 'selected' : '' }}>Biology</option>
                        </select>
                        @error('department')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Buttons -->
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="{{ route('students.index') }}" class="btn btn-secondary">
                            <i class="bi bi-x-circle"></i> Cancel
                        </a>
                        <button type="submit" class="btn btn-warning">
                            <i class="bi bi-check-circle"></i> Update Student
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
