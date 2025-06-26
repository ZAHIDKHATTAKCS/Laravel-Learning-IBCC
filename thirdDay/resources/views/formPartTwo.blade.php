<div>
    
    <form action="form2" method="post">
        @csrf
        <div>
            <h3>User Skills</h3>
            <input type="checkbox" name="Skill[]" value="PHP" id="PHP">
            <label for="PHP">PHP</label><br>
            <input type="checkbox" name="Skill[]" value="NodeJS" id="NodeJS">
            <label for="NodeJS">NodeJS</label><br>
            <input type="checkbox" name="Skill[]" value="Laravel" id="Laravel">
            <label for="Laravel">Laravel</label><br>
        </div>
        <br>
        <div>
            <h3>Gender</h3>
            <input type="radio" name="Gender" value="Male" id="Male">
            <label for="Male">Male</label><br>
            <input type="radio" name="Gender" value="Female" id="Female">
            <label for="Female">Female</label><br>
        </div>


        <br>
        <div>
            <h3>City</h3>
            <select name="city" id="">
                <option value="Peshawar">Peshawar</option>
                <option value="Islamabad">Islamabad</option>
                <option value="Rawalpindi">Rawalpindi</option>
            </select>
        </div>

        <div>
            <h3>age</h3>
            <input type="range" name="age" min="18" max="100">
        </div>
        <br>
        <button>Submit Data</button>
    </form>
</div>