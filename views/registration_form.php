<?php
require_once "forms_doc.php";

class RegistrationForm extends FormsDoc
{
    protected function showHeader()
    {
        echo "<h1>This is the registration page</h1>";
    }

    protected function showForm()
    {
        echo '<label for="name">Name:</label>
            <input class="form-field" type="text" id="name" name="name" value="" />
            <span class="error">* </span>

            <br />

            <label for="email">Email:</label>
            <input class="form-field" type="text" id="email" name="email" value="" />
            <span class="error">* </span>

            <br />
            
            <label for="password">Password:</label>
            <input class="form-field" type="text" id="password" name="password" value="" />
            <span class="error">* </span>

            <br />

            <label for="confirm_password">Confirm password:</label>
            <input class="form-field" type="text" id="confirm_password" name="confirm_password" value="" />
            <span class="error">*</span>

            <br />

            <input type="hidden" name="page" value="register">
            <input type="submit" name="submit" value="Submit" id="submit">';
    }
}
