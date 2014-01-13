

<div class="main row">
    <div class="col-md-12">
        <h1>Sign Up</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor faucibus massa et cursus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vestibulum et erat eget cursus.
            Phasellus viverra suscipit justo, id convallis metus placerat sodales. Sed consequat pellentesque consectetur. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin ac feugiat
            dolor. Vivamus porta arcu ac elit iaculis laoreet. Vestibulum in rhoncus nunc. Nunc at quam et neque rhoncus posuere. Etiam lobortis non nisl id ultricies. Nunc bibendum odio vulputate nisl
            condimentum adipiscing. Integer et orci ut nibh tempor lacinia in id turpis. Ut varius est augue, eget molestie mi scelerisque vel. In faucibus condimentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris molestie rhoncus erat vel blandit. Donec dignissim euismod lorem, in laoreet nisi posuere eu. In semper tempus nibh,
            id eleifend turpis viverra quis. Proin eros sapien, volutpat vel molestie at, aliquet non lectus. Morbi quis dui libero. Nam bibendum hendrerit nisi. Pellentesque quis sapien suscipit,
            molestie arcu nec, rutrum nulla. </p>

        <form action="<?php echo BASEURL . 'signup/signupSubmit'; ?>" method="post">
            <label>Email</label><input type="text" name="email" required /><br />
            <label>Password</label><input type="password" name="password" required /><br />
            <label>Confirm Password</label><input type="password" name="confirmPassword" required /><br />
            <label>First Name</label><input type="text" name="firstName" required /><br />
            <label>Last Name</label><input type="text" name="lastName" required/><br />
            <label>Phone Number</label><input type="text" name="phone" required/><br />
            <label></label><input type="submit" name="submit" />
        </form>

    </div>
</div>



