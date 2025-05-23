<x-default-layout title="Edit student" section_title="Edit student data">
    <div class="grid grid-cols-3">
        <form action="{{ route('students.update', $student->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="flex flex-col gap-6 px-6 py-8 bg-white border border-slate-300 shadow col-span-3 md:col-span-2">
                <div>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="flex flex-col gap-2">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" class="border border-slate-300 bg-slate-50"
                                placeholder="Student Name"
                                value="{{ old('name', $student->name) }}">
                            @error('name')
                                <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="flex flex-col gap-2">
                            <label for="student_id_number">Student ID Number</label>
                            <input type="text" id="student_id_number" name="student_id_number"
                                class="border border-slate-300 bg-slate-50"
                                placeholder="Student ID (e.g., F5521022)"
                                value="{{ old('student_id_number', $student->student_id_number) }}">
                            @error('student_id_number')
                                <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-6">
                    <div class="flex flex-col gap-2">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="border border-slate-300 bg-slate-50"
                            placeholder="Student Email"
                            value="{{ old('email', $student->email) }}">
                        @error('email')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="phone_number">Phone Number</label>
                        <input type="text" id="phone_number" name="phone_number"
                            class="border border-slate-300 bg-slate-50"
                            placeholder="Student Phone Number"
                            value="{{ old('phone_number', $student->phone_number) }}">
                        @error('phone_number')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-6">
                    <div class="flex flex-col gap-2">
                        <label for="birth_date">Birth date</label>
                        <input type="date" id="birth_date" name="birth_date"
                            class="border border-slate-300 bg-slate-50"
                            value="{{ old('birth_date', $student->birth_date) }}">
                        @error('birth_date')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="gender">Gender</label>
                        <select name="gender" id="gender" class="border border-zinc-300 appearance-none bg-slate-50">
                            <option value="" disabled {{ old('gender', $student->gender) == '' ? 'selected' : '' }}>
                                Select Gender
                            </option>
                            <option value="male" {{ old('gender', $student->gender) == 'male' ? 'selected' : '' }}>
                                Male
                            </option>
                            <option value="female" {{ old('gender', $student->gender) == 'female' ? 'selected' : '' }}>
                                Female
                            </option>
                        </select>
                        @error('gender')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="grid grid-cols-2 gap-6">
                    <div class="flex flex-col gap-2">
                        <label for="major_id">Major</label>
                        <select name="major_id" id="major_id"
                            class="border border-zinc-300 appearance-none bg-slate-50">
                            <option value="">Select</option>
                            @foreach ($majors as $major)
                                <option value="{{ $major->id }}"
                                    {{ old('major_id', $student->major_id) == $major->id ? 'selected' : '' }}>
                                    {{ $major->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('major_id')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="flex flex-col gap-2">
                        <label for="status">Status</label>
                        <select name="status" id="status"
                            class="border border-zinc-300 appearance-none bg-slate-50">
                            <option value="active"
                                {{ old('status', $student->status) == 'Active' ? 'selected' : '' }}>
                                Active
                            </option>
                            <option value="inactive"
                                {{ old('status', $student->status) == 'Inactive' ? 'selected' : '' }}>
                                Inactive
                            </option>
                            <option value="graduated"
                                {{ old('status', $student->status) == 'Graduated' ? 'selected' : '' }}>
                                Graduated
                            </option>
                            <option value="dropped_out"
                                {{ old('status', $student->status) == 'Dropped out' ? 'selected' : '' }}>
                                Dropped out
                            </option>
                        </select>
                        @error('status')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="flex-end flex gap-2">
                    <button type="submit" class="bg-slate-50 border border-slate-500 text-slate-500 px-3 py-2 cursor-pointer">
                        <span>Save</span>
                    </button>
                    <button type="reset" class="bg-slate-50 border border-blue-500 text-blue-500 px-3 py-2 cursor-pointer">
                        <span>Cancel</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</x-default-layout>