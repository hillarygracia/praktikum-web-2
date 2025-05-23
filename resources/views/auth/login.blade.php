<x-auth-layout title="Login" section_title="Login" section_description="Access your account">
    <form action="{{ route('auth.authenticate') }}" method="POST" class="flex flex-col gap-4 mt-2">
        @csrf
        @method("POST")

        <div class="flex flex-col gap-2">
            <label for="email" class="font-semibold text-sm">Email</label>
            <input type="email" id="email" name="email" class="px-3 py-2 border border-zinc-300 bg-slate-50" placeholder="Your email" value="{{ old('email') }}">
            @error('email')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="flex flex-col gap-2">
            <label for="password" class="font-semibold text-sm">Password</label>
            <input type="password" id="password" name="password" class="px-3 py-2 border border-zinc-300 bg-slate-50" placeholder="Your password">
            @error('password')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="flex items-center gap-2">
            <input type="checkbox" id="remember_me" name="remember_me" class="w-4 h-4">
            <label for="remember_me" class="text-sm">Remember Me</label>
        </div>

        <button type="submit" class="bg-blue-500 border text-white px-3 py-2 text-center gap-2 cursor-pointer mt-4">
            <span>Login</span>
        </button>

        <p class="text-zinc-600 text-sm text-center">
            Don't have an account?
            <a href="{{ route('auth.register') }}" class="text-blue-500 font-semibold underline">Register Here!</a>
        </p>
    </form>
</x-auth-layout>