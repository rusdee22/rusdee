@extends('layout')

@section('content')

    <form action="{{ route('store') }}" method="+เพิ่มหลักสูตร">
        @csrf
        {{-- ชื่อหลักสูตร --}}
        <div class="mb-3">
            <label for="name" class="form-label">ชื่อหลักสูตร</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        {{-- คำอธิบายหลักสูตร --}}
        <div class="mb-3">
            <label for="description" class="form-label">คำอธิบายหลักสูตร</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>

        {{-- จำนวนชั่วโมงเรียน --}}
        <div class="mb-3">
            <label for="hours" class="form-label">จำนวนชั่วโมงที่เรียน</label>
            <input type="number" class="form-control" id="hours" name="hours" required>
        </div>

        {{-- ปุ่มบันทึก/ยกเลิก --}}
        <div class="mt-4">
            <button type="submit" class="btn btn-success px-4">บันทึก</button>
            <a href="{{ route('index') }}" class="btn btn-warning text-white px-4">ยกเลิก</a>
        </div>
    </form>
@endsection


