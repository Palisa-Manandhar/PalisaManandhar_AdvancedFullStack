<div class="mb-3">
    <label for="name" class="form-label">Course Name</label>
    <input type="text" name="name" id="name"
           class="form-control" value="{{ old('name', $course->name ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea name="description" id="description"
              class="form-control" rows="4" required>{{ old('description', $course->description ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label for="duration" class="form-label">Duration (weeks)</label>
    <input type="number" name="duration" id="duration"
           class="form-control" min="1" max="104"
           value="{{ old('duration', $course->duration ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="fee" class="form-label">Fee</label>
    <input type="number" name="fee" id="fee"
           class="form-control" min="0" max="999999.99" step="0.01"
           value="{{ old('fee', $course->fee ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="difficulty" class="form-label">Difficulty</label>
    <select name="difficulty" id="difficulty" class="form-select" required>
        <option value="">Select difficulty</option>
        <option value="Easy" @selected(old('difficulty', $course->difficulty ?? '') === 'Easy')>Easy</option>
        <option value="Medium" @selected(old('difficulty', $course->difficulty ?? '') === 'Medium')>Medium</option>
        <option value="Hard" @selected(old('difficulty', $course->difficulty ?? '') === 'Hard')>Hard</option>
    </select>
</div>

<div class="form-check mb-3">
    <input type="checkbox" name="is_active" id="is_active"
           class="form-check-input" value="1"
           @checked(old('is_active', $course->is_active ?? true))>
    <label for="is_active" class="form-check-label">Active Course</label>
</div>

<button type="submit" class="btn btn-primary">{{ $buttonText }}</button>

<a href="{{ route('courses.index') }}" class="btn btn-secondary">Cancel</a>