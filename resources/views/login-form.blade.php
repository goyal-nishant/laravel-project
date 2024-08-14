{{-- 
    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <div>
        {{$error}}
    </div>
    @endforeach
    @endif --}}

<form action="adduser" method="post">
    @csrf
    <div class="input-wrapper">
        <input type="text" placeholder="Enter your name" name="name" value="{{ old('name') }}">
        <span>
            @error('name')
                {{ $message }}
            @enderror
        </span>
    </div>
    <div class="input-wrapper">
        <input type="email" placeholder="Enter your email" name="email" value="{{ old('email') }}">
        <span>
            @error('email')
                {{ $message }}
            @enderror
        </span>
    </div>

    <input type="checkbox" name="skill[]" value="PHP" id="php" {{ in_array('PHP', old('skill', [])) ? 'checked' : '' }}>
    <label for="php">PHP</label>

    <input type="checkbox" name="skill[]" value="CSS" id="css" {{ in_array('CSS', old('skill', [])) ? 'checked' : '' }}>
    <label for="css">CSS</label>

    <input type="checkbox" name="skill[]" value="JAVA" id="java" {{ in_array('JAVA', old('skill', [])) ? 'checked' : '' }}>
    <label for="java">JAVA</label>
    <span>
        @error('skill')
            {{ $message }}
        @enderror
    </span>
    <br><br>
    <input type="radio" name="gender" value="Male" id="Male" {{ old('gender') == 'Male' ? 'checked' : '' }}>
    <label for="Male">Male</label>

    <input type="radio" name="gender" value="Female" id="Female" {{ old('gender') == 'Female' ? 'checked' : '' }}>
    <label for="Female">Female</label>
    <span>
        @error('gender')
            {{ $message }}
        @enderror
    </span>
    <br><br>
    <select name="city">
        <option value="">Select city</option>
        <option value="Delhi" {{ old('city') == 'Delhi' ? 'selected' : '' }}>Delhi</option>
        <option value="Gurgaon" {{ old('city') == 'Gurgaon' ? 'selected' : '' }}>Gurgaon</option>
        <option value="Mumbai" {{ old('city') == 'Mumbai' ? 'selected' : '' }}>Mumbai</option>
    </select>
    <span>
        @error('city')
            {{ $message }}
        @enderror
    </span>
    <div class="input-wrapper">
        <button>Add user</button>
    </div>
</form>

<style>
    input[type='checkbox'] {
        margin-left: 20px;
    }

    input[type='radio'] {
        margin-left: 20px;
    }

    select {
        margin-left: 20px;
    }

    .input-wrapper {
        margin: 20px;
    }

    button {
        width: 180px;
    }
</style>
