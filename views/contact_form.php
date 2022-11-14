<?php
require_once "forms_doc.php";

class ContactForm extends FormsDoc
{
    protected function showHeader()
    {
        echo "<h1>This is the contact page</h1>";
    }

    protected function showForm()
    {
        echo
        '<label for="name">Name:</label>
      <select id="title" name="title">
        <option value="" selected>Title</option>
        <option value="mr">Mr</option>
        <option value="mrs">Mrs</option>
      </select>
      <input class="form-field" type="text" id="name" name="name" value="" />
      <span class="error">* </span>
      <span class="error"> </span>

      <br />
      <label for="email">Email:</label>
      <input class="form-field" type="text" id="email" name="email" value="" />
      <span class="error">* </span>

      <br />
      <label for="phonenumber">Phone number:</label>
      <input class="form-field" type="text" id="phonenumber" name="phonenumber" value="" />
      <span class="error">*</span>

      <br />
      <span>Preferred communication channel:</span>
      <input type="radio" id="email_channel" name="communication_channel" value="email"
          />
      <label for="email_channel">Email</label>
      <input type="radio" id="phone_channel" name="communication_channel" value="phone"
       />
      <label for="phone_channel">Phone</label>
      <span class="error">* </span>

      <br />
      <label for="message">Message:</label>
      <textarea class="form-field" name="message" id="message"></textarea>
      <br />
      <input type="hidden" name="page" value="contact">
      <input type="submit" name="submit" value="Submit" id="submit">';
    }
}
