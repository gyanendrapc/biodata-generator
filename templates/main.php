<div class="header">
  <h2>Bio-Data Generator</h2>
</div>
<div class="form-data">
  <form action="submit.php" method="post" enctype="multipart/form-data">
    <table>
      <tr class="table-head">
        <th colspan="2">
          <h3 style="font-weight: bold; text-align: left;">
            <u>Personal Information:</u>
          </h3>
        </th>
      </tr>
      <tr>
        <td>Name:</td>
        <td>
          <input
          type="text"
          name="name"
          placeholder="Enter your name"
          required
          />
        </td>
      </tr>
      <tr>
        <td>Father's Name:</td>
        <td>
          <input
          type="text"
          name="fname"
          placeholder="Enter your father's mame"
          />
        </td>
      </tr>
      <tr>
        <td>Date Of Birth:</td>
        <td>
          <input
          type="date"
          name="dob"
          placeholder="Enter your born date"
          required
          />
        </td>
      </tr>
      <tr>
        <td>Gender:</td>
        <td>
          <input
          type="radio"
          name="gender"
          value="Male"
          id=""
          required
          checked
          />Male
          <input
          type="radio"
          name="gender"
          value="Female"
          id=""
          required
          />Female
          <input
          type="radio"
          name="gender"
          value="Other"
          id=""
          required
          />Other's
        </td>
      </tr>
      <tr>
        <td>Marital Status:</td>
        <td>
          <input
          type="radio"
          name="marital-status"
          value="married"
          id=""
          checked
          />Married
          <input
          type="radio"
          name="marital-status"
          value="unmarried"
          />Unmarried
        </td>
      </tr>
      <tr>
        <td>Nationality:</td>
        <td><input type="text" placeholder="Nepali" name="nationality" /></td>
      </tr>
      <tr>
        <td>Citizenship Number:</td>
        <td>
          <input
          type="number"
          name="citizenship-no"
          placeholder="33-01-72-00221"
          />
        </td>
      </tr>
      <tr>
        <td>Driving License:</td>
        <td>
          <input
          type="number"
          name="driving-license"
          placeholder="02-05-00379000"
          />
          <select name="wheel" id="">
            <option value="Two Wheeler">Two Wheeler</option>
            <option value="Three Wheeler">Three Wheeler</option>
            <option value="Four Wheeler">Four Wheeler</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>Languages:</td>
        <td>
          <input
          type="text"
          name="languages"
          placeholder="English, Nepali, Hindi,"
          />
        </td>
      </tr>
      <tr>
        <td>Permanent Address:</td>
        <td>
          <input
          type="text"
          name="paddress"
          placeholder="Enter your permanent address"
          required
          />
        </td>
      </tr>
      <tr>
        <td>Temporary Address:</td>
        <td>
          <input
          type="text"
          name="taddress"
          placeholder="Enter your temporary address"
          />
        </td>
      </tr>
      <tr>
        <td>Contact-no:</td>
        <td>
          <input
          type="tel"
          name="contact"
          placeholder="Enter your phone number"
          required
          />
        </td>
      </tr>
      <tr>
        <td>Email:</td>
        <td>
          <input
          type="email"
          name="email"
          placeholder="Enter your email id"
          id=""
          required
          />
        </td>
      </tr>

      <tr>
        <td>Image:</td>
        <td><input type="file" name="image" id="" /></td>
      </tr>

      <tr class="table-head">
        <th colspan="2">
          <h3 style="font-weight: bold; text-align: left;">
            <u>Academic Information:</u>
          </h3>
        </th>
      </tr>
      <tr>
        <td colspan="2">
          <div>
            <h5>First</h5>
            <label for="year">Year</label>
            <input
            type="number"
            min="0"
            name="year1"
            placeholder="2000"
            />&nbsp;&nbsp;
            <label for="institution">Institution</label>
            <input
            type="text"
            placeholder="Shree Public Higher Secondary School, Umajan"
            name="institution1"
            />&nbsp;&nbsp;
            <label for="affiliation">Affiliation</label>
            <select name="affiliation1" id="">
            <option value="S.L.C/S.E.E">S.L.C/S.E.E</option>
                  <option value="+2">+2</option>
                  <option value="Bachelor">Bachelor</option>
                  <option value="Masters">Master's</option>
               </select
              >&nbsp;&nbsp;
              <label for="percentage">Percentage</label>
              <input
              type="number"
              name="percentage1"
              min="0"
              max="100"
              placeholder="80"
              />
            </div>
            <div>
              <h5>Second</h5>
              <label for="year">Year</label>
              <input
              type="number"
              min="4"
              name="year2"
              placeholder=""
              />&nbsp;&nbsp;
              <label for="institution">Institution</label>
              <input
              type="text"
              placeholder=""
              name="institution2"
              />&nbsp;&nbsp;
              <label for="affiliation">Affiliation</label>
              <select name="affiliation2" id="">
              <option value="S.L.C/S.E.E">S.L.C/S.E.E</option>
                  <option value="+2" selected>+2</option>
                  <option value="Bachelor">Bachelor</option>
                  <option value="Masters">Master's</option>
              </select
                >&nbsp;&nbsp;
                <label for="percentage">Percentage</label>
                <input
                type="number"
                name="percentage2"
                min="0"
                max="100"
                placeholder=""
                />
              </div>
              <div>
                <h5>Third</h5>
                <label for="year">Year</label>
                <input
                type="number"
                min="4"
                name="year3"
                placeholder=""
                />&nbsp;&nbsp;
                <label for="institution">Institution</label>
                <input
                type="text"
                placeholder=""
                name="institution3"
                />&nbsp;&nbsp;
                <label for="affiliation">Affiliation</label>
                <select name="affiliation3" id="">
                  <option value="S.L.C/S.E.E">S.L.C/S.E.E</option>
                  <option value="+2">+2</option>
                  <option value="Bachelor" selected>Bachelor</option>
                  <option value="Masters">Master's</option>
                  </select
                  >&nbsp;&nbsp;
                  <label for="percentage">Percentage</label>
                  <input
                  type="number"
                  name="percentage3"
                  min="0"
                  max="100"
                  placeholder=""
                  />
                </div>
                <div>
                  <h5>Fourth</h5>
                  <label for="year">Year</label>
                  <input
                  type="number"
                  min="4"
                  name="year4"
                  placeholder=""
                  />&nbsp;&nbsp;
                  <label for="institution">Institution</label>
                  <input
                  type="text"
                  placeholder=""
                  name="institution4"
                  />&nbsp;&nbsp;
                  <label for="affiliation">Affiliation</label>
                  <select name="affiliation4" id="">
                  <option value="S.L.C/S.E.E">S.L.C/S.E.E</option>
                  <option value="+2">+2</option>
                  <option value="Bachelor">Bachelor</option>
                  <option value="Masters" selected>Master's</option>
                    </select
                    >&nbsp;&nbsp;
                    <label for="percentage">Percentage</label>
                    <input
                    type="number"
                    name="percentage4"
                    min="0"
                    max="100"
                    placeholder=""
                    />
                  </div>
                </td>
              </tr>
              <tr class="table-head">
                <th colspan="2">
                  <h3 style="font-weight: bold; text-align: left;">
                    <u>Woking Information:</u>
                  </h3>
                </th>
              </tr>
              <tr>
                <td colspan="2">
                  <label for="Designation">Designation</label>
                  <input
                  type="text"
                  name="designation"
                  placeholder="Service Engineer"
                  />
                  <label for="Institution">Institution</label>
                  <input
                  type="text"
                  name="institution"
                  placeholder="MAW Earth Movers Pvt Ltd"
                  />
                  <label for="">Duration</label>
                  <input
                  type="number"
                  name="duration"
                  min="1"
                  max="75"
                  id=""
                  placeholder="2 Years"
                  />
                </td>
              </tr>
              <tr class="table-head">
                <th colspan="2">
                  <h3 style="font-weight: bold; text-align: left;">
                    <u>Skills:</u>
                  </h3>
                </th>
              </tr>
              <tr>
                <td colspan="2">
                  <textarea name="skill" style="height: 100px; width: 100%;"></textarea>
                </td>
              </tr>
              <tr class="submit-button">
                <td colspan="2"><input type="submit" value="generate" /></td>
              </tr>

              <!-- submit button -->
            </table>
          </form>
        </div>
