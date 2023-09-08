@csrf
<div class="row">
  {{-- Name Console --}}
  <div class="col-6">
    <div class="mb-3">
      <label for="console-name" class="form-label">Name Console</label>
      <input type="text" class="form-control" id="console-name" name="label"
        value="{{ old('label', $console->label) }}">
    </div>
  </div>
  {{-- Production year --}}
  <div class="col-6">
    <div class="mb-3">
      <label for="year" class="form-label">Production year</label>
      <input type="number" class="form-control" id="year" name="year_production"
        value="{{ old('year_production', $console->year_production) }}">
    </div>
  </div>
  {{-- Company name --}}
  <div class="col-6">
    <div class="mb-3">
      <label for="console-company" class="form-label">Name Company</label>
      <input type="text" class="form-control" id="console-company" name="company"
        value="{{ old('company', $console->company) }}">
    </div>
  </div>

  {{-- BUTTON --}}
  <div class="col-12">
    <div class="d-flex justify-content-between my-3">
      <a class="btn btn-secondary" href="{{ route('admin.consoles.index') }}">Back</a>
      <button class="btn btn-primary">Save</button>
    </div>
  </div>
</div>
