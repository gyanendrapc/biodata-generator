<?php require_once 'templates/header.php';?>
<div class=""><?php // echo $error; ?></div>

<div class="container">
  <table>
    <!-- Personal Information -->
    <tr>
      <td colspan="4"><h3>Bio-Data</h3></td>
    </tr>

    <!-- Image -->
    <?php if ($target_file) { ?>
    <tr>
      <td colspan="4">
        <div
          class="image"
          style="
            background-image: url('<?php echo $target_file;?>');
            float: right;
            margin-right: 20px;
          "
        ></div>
      </td>
    </tr>
    <tr>
      <td colspan="4">
        <h4>
          <u><b>Personal Information:</b></u>
        </h4>
      </td>
    </tr>
    <?php } ?>
    <!-- Name -->
    <?php if ($name) { ?>
    <tr>
      <td>Name</td>
      <td colspan="3">
        <?php echo ": ".$name;?>
      </td>
    </tr>
    <?php } ?>
    <!-- Father's Name -->
    <?php if ($fname) {?>
    <tr>
      <td>Father's Name</td>
      <td colspan="3">
        <?php echo ": ".$fname;?>
      </td>
    </tr>
    <?php } ?>
    <!-- Date of Birth -->
    <?php if ($dob) {?>
    <tr>
      <td>Date Of Birth</td>
      <td colspan="3">
        <?php echo ": ".$dob;?>
      </td>
    </tr>
    <?php } ?>

    <!-- Gender -->
    <?php if ($gender) { ?>
    <tr>
      <td>Gender</td>
      <td colspan="3">
        <?php echo ": ".$gender;?>
      </td>
    </tr>
    <?php } ?>
    <!-- Marital Status -->
    <?php if ($marital_status) { ?>

    <tr>
      <td>Marital Status:</td>
      <td colspan="3">
        <?php echo ": ".$marital_status;?>
      </td>
    </tr>
    <?php } ?>
    <!-- Nationality -->
    <?php if ($nationality) { ?>

    <tr>
      <td>Nationality</td>
      <td colspan="3">
        <?php echo ": ".$nationality;?>
      </td>
    </tr>
    <?php } ?>
    <!-- Citizenship No -->
    <?php if ($citizenship_no) { ?>

    <tr>
      <td>Citizenship No</td>
      <td colspan="3">
        <?php echo ": " . $citizenship_no;?>
      </td>
    </tr>
    <?php } ?>
    <!-- Driving License -->
    <?php if ($driving_license && $wheel) { ?>
    <tr>
      <td>Driving License</td>
      <td colspan="3">
        <?php echo ": " . $driving_license . "(" . $wheel. ")" ?>
      </td>
    </tr>
    <?php } ?>
    <!-- Languages -->
    <?php if ($languages) { ?>

    <tr>
      <td>Languages</td>
      <td colspan="3">
        <?php echo ": ".$languages;?>
      </td>
    </tr>
    <?php } ?>
    <!-- Permanent Address -->
    <?php if ($paddress) { ?>
    <tr>
      <td>Permanent Address</td>
      <td colspan="3">
        <?php echo ": ". $paddress;?>
      </td>
    </tr>
    <?php } ?>
    <!-- Temporary Address -->
    <?php if ($taddress) { ?>
    <tr>
      <td>Temporary Address</td>
      <td colspan="3">
        <?php echo ": ".$taddress;?>
      </td>
    </tr>
    <?php } ?>
    <!-- Contact No -->
    <?php if ($contact) { ?>
    <tr>
      <td>Contact-no</td>
      <td colspan="3">
        <?php echo ": ".$contact;?>
      </td>
    </tr>

    <?php } ?>
    <!-- Email -->
    <?php if ($email) { ?>
    <tr>
      <td>Email</td>
      <td colspan="3">
        <?php echo ": ".$email;?>
      </td>
    </tr>
    <?php } ?>

    <!-- ============ACADEMIC INFORMATION=========== -->
    <tr>
      <td colspan="4">
        <h4>
          <u><b>Academic Information:</b></u>
        </h4>
      </td>
    </tr>
    <tr>
      <td>
        <label for="" style="font-weight: bold; font-style: italic;"
          >Year</label
        >
      </td>
      <td>
        <label for="" style="font-weight: bold; font-style: italic;"
          >Institution</label
        >
      </td>
      <td>
        <label for="" style="font-weight: bold; font-style: italic;"
          >Affiliation</label
        >
      </td>
      <td>
        <label for="" style="font-weight: bold; font-style: italic;"
          >Percentage</label
        >
      </td>
    </tr>
    <!-- First -->
    <!-- First -->
    <?php if ($year1 && $institution1 && $affiliation1 && $percentage1) { ?>
    <tr>
      <td>
        <?php echo $year1 . "(B.S.)"; ?>
      </td>
      <td>
        <?php echo $institution1; ?>
      </td>
      <td>
        <?php echo $affiliation1; ?>
      </td>
      <td style="text-align: center;">
        <?php echo $percentage1 . "%"; ?>
      </td>
    </tr>
    <?php } ?>
    <!-- Second -->
    <?php if ($year2 && $institution2 && $affiliation2 && $percentage2) { ?>
    <tr>
      <td>
        <?php echo $year2 ."(B.S.)"; ?>
      </td>
      <td>
        <?php echo $institution2; ?>
      </td>
      <td>
        <?php echo $affiliation2; ?>
      </td>
      <td style="text-align: center;">
        <?php echo $percentage2 . "%"; ?>
      </td>
    </tr>
    <?php } ?>
    <!-- Third -->

    <?php if ($year3 && $institution3 && $affiliation3 && $percentage3) { ?>
    <tr>
      <td>
        <?php echo $year3 ."(B.S.)"; ?>
      </td>
      <td>
        <?php echo $institution3; ?>
      </td>
      <td>
        <?php echo $affiliation3; ?>
      </td>
      <td style="text-align: center;">
        <?php echo $percentage3 . "%"; ?>
      </td>
    </tr>
    <?php } ?>
    <!-- Fourth -->
    <?php if ($year4 && $institution4 && $affiliation4 && $percentage4) { ?>
    <tr>
      <td>
        <?php echo $year4 ."(B.S.)"; ?>
      </td>
      <td>
        <?php echo $institution4; ?>
      </td>
      <td>
        <?php echo $affiliation4; ?>
      </td>
      <td style="text-align: center;">
        <?php echo $percentage4 . "%"; ?>
      </td>
    </tr>
    <?php } ?>

    <!-- =====JOB EXPERIENCE======= -->
    <tr>
      <td colspan="4">
        <h4>
          <u><b>Job Experience:</b></u>
        </h4>
      </td>
    </tr>
    <tr>
      <td>
        <label for="" style="font-weight: bold; font-style: italic;"
          >Designation</label
        >
      </td>
      <td colspan="2">
        <label for="" style="font-weight: bold; font-style: italic;"
          >Institution</label
        >
      </td>
      <td>
        <label for="" style="font-weight: bold; font-style: italic;"
          >Duration</label
        >
      </td>
    </tr>
    <!-- First -->
    <?php if ($designation && $institution && $duration) { ?>
    <tr>
      <td>
        <?php echo $designation; ?>
      </td>
      <td colspan="2">
        <?php echo $institution; ?>
      </td>
      <td colspan="2" style="text-align: center;">
        <?php echo $duration . "-Years"; ?>
      </td>
    </tr>
    <?php } ?>

    <!-- =========SKILLS======= -->
    <tr>
      <td colspan="4">
        <h4>
          <u><b>Academic Information:</b></u>
        </h4>
      </td>
    </tr>
    <?php if ($skills) { ?>
    <tr>
      <td colspan="4">
        <p>
          <?php echo $skills; ?>
        </p>
      </td>
    </tr>
    <?php } ?>
  </table>
</div>
<?php require_once 'templates/footer.php';?>
