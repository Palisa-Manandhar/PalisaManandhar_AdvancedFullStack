<div class="mb-3">
    <label for="name" class="form-label">Full Name</label>
    <input type="text" name="name" id="name"
           class="form-control" value="{{ old('name', $student->name ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" id="email"
           class="form-control" value="{{ old('email', $student->email ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input type="text" name="phone" id="phone"
           class="form-control" value="{{ old('phone', $student->phone ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="address" class="form-label">Address</label>
    <textarea name="address" id="address" class="form-control"
              rows="3" required>{{ old('address', $student->address ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label for="date_of_birth" class="form-label">Date of Birth</label>
    <input type="date" name="date_of_birth" id="date_of_birth"
           class="form-control"
           value="{{ old('date_of_birth', isset($student) ? $student->date_of_birth->format('Y-m-d') : '') }}"
           max="{{ date('Y-m-d', strtotime('-1 day')) }}" required>
</div>

<button type="submit" class="btn btn-primary">{{ $buttonText }}</button>
<a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
