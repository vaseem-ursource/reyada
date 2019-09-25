<?php include('account_master_start.php');?>
<style>
#fileupload {
  display: none;
}

span[role=button] {
  display: table-cell;
  font-family: METRIC-REGULAR;
  font-size: 1rem;
  padding: 15px 15px;
  border-top-left-radius: 0px;
  border-bottom-left-radius: 0px;
  border: 0.5px solid #707070;  
  color: #000;
  cursor: pointer;

  outline: none;
}
span[role=button]:hover,
span[role=button]:focus {
  box-shadow: 0 0 5px #000;
  background-color: #fff;
  border-color: #000;
  outline: 2px solid transparent;
}
.hide {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0,0,0,0);
  border: 0;
}
ul.tools li i:after{
  background:#fff;
}


</style>

<script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script>
<!-- <script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script> -->
<script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/nilsynils/pen/VKQwBJ?depth=everything&order=popularity&page=61&q=tools&show_forks=false" />
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>



<style class="cp-pen-styles">

  .wrapper {
    width: 100%;
    max-width: 800px;
    background: #fff;
    margin: 3em auto;
    padding: 1em 2em;
    border: 1px solid lightGrey;
    border-radius: 3px;
    position: relative;
  }
  .wrapper h2 {
    margin-top: 0;
  }

  .tools {
    padding: 0;
    list-style-type: none;
    display: inline-flex;
    flex-wrap: wrap;
    padding: .5em .5em .5em 0;
    margin: 0;
  }
  .tools li {
    margin: 0 1em 0 0;
    color: grey;
  }
  .tools li a {
    color: grey;
  }

  .editableContent *::selection {
    background: #9dcaff;
  }
  .editableContent:focus {
    outline: none;
  }

  /* .modal {
    position: absolute;
    left: 11em;
    top: 4.5em;
    display: none;
  } */
  .modal__wrapper {
    background: #fff;
    padding: 0 .5em;
    border: 1px solid lightGrey;
    border-radius: 3px;
    transition: all 1s;
    position: relative;
    width: 22em;
  }
  .modal__wrapper:after, .modal__wrapper:before {
    right: 100%;
    top: 50%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
  }
  .modal__wrapper:after {
    border-color: rgba(255, 255, 255, 0);
    border-right-color: #fff;
    border-width: 6px;
    margin-top: -6px;
  }
  .modal__wrapper:before {
    border-color: transparent;
    border-right-color: lightGrey;
    border-width: 7px;
    margin-top: -7px;
  }
  .modal input {
    height: 1.5em;
    padding: .25em;
    width: 20em;
    font-size: 16px;
    border: 0;
  }
  .modal input:focus {
    outline: none;
  }

  .visible {
    display: block;
  }

  a.highlighted {
    background: blue;
    color: white;
  }

  .editableContent a:hover {
    cursor: pointer;
  }

  .linkWrapper {
    position: relative;
  }

  .hoverPop {
    position: absolute;
    left: 0;
    top: 2.2em;
    display: block;
  }
  .hoverPop__wrapper {
    background: #fff;
    padding: .5em .5em;
    border: 1px solid lightGrey;
    border-radius: 3px;
    transition: all 1s;
    position: relative;
    width: auto;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
  }
  .hoverPop__wrapper:after, .hoverPop__wrapper:before {
    bottom: 100%;
    left: 50%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
  }
  .hoverPop__wrapper:after {
    border-color: rgba(255, 255, 255, 0);
    border-bottom-color: #fff;
    border-width: 6px;
    margin-left: -6px;
  }
  .hoverPop__wrapper:before {
    border-color: transparent;
    border-bottom-color: lightGrey;
    border-width: 7px;
    margin-left: -7px;
  }

  div.tag-editor-tag{
    text-transform:uppercase;
    margin: 5px;
    padding: 10px !important;
    font-size: 20px;
    background: white !important;
    color:black !important;
    border: 1px solid black;
  }



  input[type='file'] { 
    display: none; 
  } 
  .file-info { 
    font-size: 0.9em; 
  } 
  .browse-btn { 
    background: #fff; 
    color: #707070; 
    min-height: 35px; 
    padding: 10px; 
    border: 0.5px solid #707070; 
    border-radius: 2px; 
  } 
  .browse-btn-1 { 
    background: #fff; 
    color: #707070; 
    min-height: 35px; 
    padding: 10px; 
    border: 0.5px solid #707070; 
    border-radius: 2px; 
  } 
  
  @media (max-width: 300px) { 
    button { 
      width: 100%; 
      border-top-right-radius: 5px; 
      border-bottom-left-radius: 0; 
    } 
    
    .file-info { 
      display: block; 
      margin: 10px 5px; 
    } 
  } 
  input[type='file'] { 
    opacity: 0; 
    position: absolute; 
  }
  /* ul.tools li i:before, ul li i:after{
    background-color:transparent;
  } */

  .tag-editor-delete i:before, .tag-editor-delete i:after{
    background-color:transparent;
  }
  .tag-editor .tag-editor-delete{
    background-color:transparent !important;
  }
  .tag-editor {
    border:0px !important;

  }

  textarea,select{
    font-size: 13px;
    padding: 5px 10px 5px 0px;
    -webkit-appearance: none;
    background: transparent;
    color: #000000;
    width: 100%;
    border: none;
    border-radius: 0;
    border-bottom: 0.2px solid #999;
  }
  textarea:focus {
    outline: none;
    border-bottom: 0.5px solid #000;
  }

</style>

<!-- bootstrap-wysiwyg --> 
<!-- <link href="<?= base_url('assets/vendors/google-code-prettify/bin/prettify.min.css');?>" rel="stylesheet"> -->



<script type='text/javascript' src='https://rawgit.com/Pixabay/jQuery-tagEditor/master/jquery.caret.min.js'></script>

<script type='text/javascript' src='https://code.jquery.com/ui/1.11.4/jquery-ui.min.js'></script>

<script type='text/javascript' src='https://rawgit.com/Pixabay/jQuery-tagEditor/master/jquery.tag-editor.js'></script>

<link href="https://rawgit.com/Pixabay/jQuery-tagEditor/master/jquery.tag-editor.css" rel="stylesheet">



<div id="profilepage mb-5"> 
  <span class="h2 text-left mb-5">Your Profile Page</span>  
</div> 

<div class="section-header pb-1 col-md-12 pl-0 mt-3" id="Personal">
  <div class="col-12 mt-2 p-0">
      <div style="border-bottom:1px solid black">
          <span class="text-left h4">Personal Details</span> 
      </div>
  </div>
  <form id="profile-form" style="width:100%; margin: 0em 0em 0em 0em;" class="pl-0" method="POST" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-5">
          <div class="group">
            <input type="text" name="u_fullname" value="<?= (isset($coworker['FullName']) && !empty($coworker['FullName'])) ? $coworker['FullName'] : ''; ?>" ><span class="highlight"></span><span class="bar"></span>
            <label>Full Name</label>
          </div>
        </div>
        <div class="col-md-5">
          <div class="group">
            <input type="text" name="u_callyou" value="<?= (isset($coworker['Salutation']) && !empty($coworker['Salutation'])) ? $coworker['Salutation'] : ''; ?>"><span class="highlight"></span><span class="bar"></span>
            <label>What can we call you?</label>
          </div>
        </div>
        <div class="col-md-5">
          <div class="group">
            <select name="u_gender" id="gender">
              <option value="">-- Select Gender --</option>
              <option <?= ($coworker['Gender'] == 'Male' ) ? 'selected' : '' ?> value="Male"> Male</option>
              <option <?= ($coworker['Gender'] == 'Female' ) ? 'selected' : '' ?> value="Female">Female</option>
              <option <?= ($coworker['Gender'] == 'Other' ) ? 'selected' : '' ?> value="Other">Other</option>
            </select>
          </div>
        </div>
        <div class="col-md-5">
          <div class="group">
            <input type="date" name="u_dob" value="<?= (isset($coworker['DateOfBirth']) && !empty($coworker['DateOfBirth'])) ? date("Y-m-d", strtotime($coworker['DateOfBirth'])) : ''; ?>" class="bg-light"><span class="highlight"></span><span class="bar"></span>
            <label>Date of Birth</label>
          </div>
        </div>
        <div class="col-md-5">
          <div class="group">
            <input name="u_phone" value="<?= (isset($coworker['LandLine']) && !empty($coworker['LandLine'])) ? $coworker['LandLine'] : ''; ?>" type="text" ><span class="highlight"></span><span class="bar"></span>
            <label>Phone</label>
          </div>
        </div>
        <div class="col-md-5">
          <div class="group">
            <input name="u_mobile" value="<?= (isset($coworker['MobilePhone']) && !empty($coworker['MobilePhone'])) ? $coworker['MobilePhone'] : ''; ?>" type="text" ><span class="highlight"></span><span class="bar"></span>
            <label>Mobile</label>
          </div>
        </div>
        <div class="col-md-10">
          <div class="group">
            <input name="u_email" value="<?= (isset($coworker['Email']) && !empty($coworker['Email'])) ? $coworker['Email'] : ''; ?>" type="email" class="bg-light" disabled="true"><span class="highlight"></span><span class="bar"></span>
            <label>Email</label>
          </div>
          <span>Contact us to change your email</span>
        </div>
          <div class="col-md-12 group pt-1 pl-0">
                <button type="submit"  style=";outline:none;" class="btn custom-button-bl float-right">Save</button>
          </div>


          <div class="col-md-10">
          <div class="group">
            <textarea  name="u_address" placeholder="Address" rows="4"><?= (isset($coworker['Address']) && !empty($coworker['Address'])) ? $coworker['Address'] : ''; ?></textarea>
          </div>
        </div>
        <div class="col-md-5">
          <div class="group">
            <input name="u_town" value="<?= (isset($coworker['CityName']) && !empty($coworker['CityName'])) ? $coworker['CityName'] : ''; ?>" type="text" ><span class="highlight"></span><span class="bar"></span>
            <label>Town / City</label>
          </div>
        </div>
        <div class="col-md-5">
          <div class="group">
            <input name="u_state" value="<?= (isset($coworker['State']) && !empty($coworker['State'])) ? $coworker['State'] : ''; ?>" type="text" ><span class="highlight"></span><span class="bar"></span>
            <label>State / Province</label>
          </div>
        </div>
        <div class="col-md-5">
          <div class="group">
            <input name="u_zip" value="<?= (isset($coworker['PostCode']) && !empty($coworker['PostCode'])) ? $coworker['PostCode'] : ''; ?>" type="text" ><span class="highlight"></span><span class="bar"></span>
            <label>Zip / Postcode</label>
          </div>
        </div>
        <div class="col-md-5">
          <div class="group">
            <input name="u_billingname" value="<?= (isset($coworker['BillingName']) && !empty($coworker['BillingName'])) ? $coworker['BillingName'] : ''; ?>" type="text" ><span class="highlight"></span><span class="bar"></span>
            <label>Company / Org.Name</label>
          </div>
        </div>
        <div class="col-md-5">
          <div class="group">
            <input name="u_vat" value="<?= (isset($coworker['TaxIDNumber']) && !empty($coworker['TaxIDNumber'])) ? $coworker['TaxIDNumber'] : ''; ?>" type="text" ><span class="highlight"></span><span class="bar"></span>
            <label>VAT / Tax Number</label>
          </div>
        </div>
        <div class="col-md-5">
          <div class="group">
            <input name="u_website" value="<?= (isset($coworker['ProfileWebsite']) && !empty($coworker['ProfileWebsite'])) ? $coworker['ProfileWebsite'] : ''; ?>" type="text" ><span class="highlight"></span><span class="bar"></span>
            <label>Company Website</label>
          </div>
        </div>
          <div class="col-md-12 group pt-4 ">
              <input type="checkbox" name="u_membership2" id="membership2" value="u_membership2" style="width:15px;height:15px;">
              <span style="color:#999; font-size: 18px;">My Billing Details are diffrent than my personal details</span><br>
              <button type="submit"  style="outline:none;" class="btn custom-button-bl float-right">Save</button>
            </div>
      </div>
</div>

<div class="section-header pb-1 col-md-12 pl-0 membership2" id="billing" >
  <div class="col-12 mt-2 p-0">
      <div style="border-bottom:1px solid black">
          <span class="text-left h4">Billing Details</span>
      </div>
  </div>

      <div class="row">
        <div class="col-md-10">
            <div class="group">
              <textarea name="u_billing_address" placeholder="Billing Address" rows="4"><?= (isset($coworker['BillingAddress']) && !empty($coworker['BillingAddress'])) ? $coworker['BillingAddress'] : ''; ?></textarea>
            </div>
          </div>
        <div class="col-md-5">
          <div class="group">
            <input name="u_billing_town" value="<?= (isset($coworker['BillingCityName']) && !empty($coworker['BillingCityName'])) ? $coworker['BillingCityName'] : ''; ?>" type="text" ><span class="highlight"></span><span class="bar"></span>
            <label>Billing Town</label>
          </div>
        </div>
        <div class="col-md-5">
          <div class="group">
            <input name="u_billing_province" value="<?= (isset($coworker['BillingState']) && !empty($coworker['BillingState'])) ? $coworker['BillingState'] : ''; ?>" type="text" ><span class="highlight"></span><span class="bar"></span>
            <label>Billing State / Province</label>
          </div>
        </div>
        <div class="col-md-5">
          <div class="group">
            <input name="u_billing_zip" value="<?= (isset($coworker['BillingPostCode']) && !empty($coworker['BillingPostCode'])) ? $coworker['BillingPostCode'] : ''; ?>" type="text" ><span class="highlight"></span><span class="bar"></span>
            <label>Billing Zip / Postcode</label>
          </div>
        </div>
        <div class="col-md-5">
          <div class="group">
            <input name="u_send_my_invoice" value="<?= (isset($coworker['BillingEmail']) && !empty($coworker['BillingEmail'])) ? $coworker['BillingEmail'] : ''; ?>" type="text" ><span class="highlight"></span><span class="bar"></span>
            <label>Send my Invoices to</label>
          </div>
        </div>
          <div class="col-md-12 group pt-4 ">
              <button type="submit"  style="outline:none;" class="btn custom-button-bl float-right">Save</button>
            </div>
      </div>
</div>

<div class="section-header pb-1 col-md-12 pl-0" id="professional">
  <div class="col-12 mt-2 p-0">
      <div style="border-bottom:1px solid black">
          <span class="text-left h4">Professional Profile</span> 
      </div>
  </div>

      <div class="row mt-4">
        <div class="col-md-5">
          <div class="group">
            <input type="text" name="u_company" value="<?= (isset($coworker['CompanyName']) && !empty($coworker['CompanyName'])) ? $coworker['CompanyName'] : ''; ?>"><span class="highlight"></span><span class="bar"></span>
            <label>Company Name</label>
          </div>
        </div>
        <div class="col-md-5 pl-4">
          <div class="group">
            <input type="text" name="u_industry" value="<?= (isset($coworker['BusinessArea']) && !empty($coworker['BusinessArea'])) ? $coworker['BusinessArea'] : ''; ?>"><span class="highlight"></span><span class="bar"></span>
            <label>Industry</label>
          </div>
        </div>
        <div class="col-md-5">
          <div class="group">
            <input type="text" name="u_rolepos" value="<?= (isset($coworker['Position']) && !empty($coworker['Position'])) ? $coworker['Position'] : ''; ?>"><span class="highlight"></span><span class="bar"></span>
            <label>Your role / position</label>
          </div>
        </div>
      </div>

      <span><b>Your Bio</b></span>
  <section class="wrapper mx-0 my-2 p-3" style="min-height:200px;"> 
    <ul class="tools">
      <li>
        <a href='#' data-role='bold'>
          <i class="fa fa-bold" aria-hidden="true"></i>
        </a>
      </li>
      <li>
        <a href='#' data-role='italic'>
          <i class="fa fa-italic" aria-hidden="true"></i>
        </a>
      </li>
      <li>
        <a href='#' data-role='insertUnorderedList'>
          <i class="fa fa-list" aria-hidden="true"></i>
        </a>
      </li>
      <li>
        <a href='#' data-role='insertOrderedList'>
          <i class="fa fa-list-ol" aria-hidden="true"></i>
        </a>
      </li>
      <li>
        <a href='#' data-role='createLink'>
          <i class="fa fa-link" aria-hidden="true"></i>
        </a>
      </li>
      <li>
        <a href='#' data-role='unlink'>
          <i class="fa fa-unlink" aria-hidden="true"></i>
        </a>
      </li>
      <li>
        <a href='#' data-role='insertHorizontalRule'>
          <i class="fa fa-minus" aria-hidden="true"></i>
        </a>
      </li>
      <li>
        <a href='#' data-role='insertParagraph'>
          <i class="fa fa-paragraph" aria-hidden="true"></i>
        </a>
      </li>
      <li>
        <a href='#' data-role='justifyLeft'>
          <i class="fa fa-align-left" aria-hidden="true"></i>
        </a>
      </li>
      <li>
        <a href='#' data-role='justifyCenter'>
          <i class="fa fa-align-center" aria-hidden="true"></i>
        </a>
      </li>
      <li>
        <a href='#' data-role='justifyRight'>
          <i class="fa fa-align-right" aria-hidden="true"></i>
        </a>
      </li>
      <li>
        <a href='#' data-role='subscript'>
          <i class="fa fa-subscript" aria-hidden="true"></i>
        </a>
      </li>
      <li>
        <a href='#' data-role='superscript'>
          <i class="fa fa-superscript" aria-hidden="true"></i>
        </a>
      </li>
      <li>
        <a href='#' data-role='underline'>
          <i class="fa fa-underline" aria-hidden="true"></i>
        </a>
      </li>
    </ul>
    <hr style="margin:5px">
    <div class="modal">
      <div class="modal__wrapper">
        <!-- <form class="urlForm" name="urlForm"> -->
          <input class="url" name="urlField" placeholder="Add URL" />
          <i class="fa fa-close closeModal" aria-hidden="true"></i>
        <!-- </form> -->
      </div>
    </div>
    <div class="editableContent" id="texteditor" onkeyup="textareaKeyFunction()" contenteditable spellcheck="false">
      <?= (isset($coworker['ProfileSummary']) && !empty($coworker['ProfileSummary'])) ? $coworker['ProfileSummary'] : ''; ?>
    </div>
  </section>
  <textarea name="yourbio" id="yourbio"  style="display:none;"></textarea>
</div>


<div class="col-12 mt-2 p-0">
  <span>Your Skills</span>
  <div style="padding :0 7px 0 5px;max-width:900px;margin:auto ;border-bottom:1px solid black">
      <textarea name="ProfileTagsArray" id="hero-demo" class="tag-editor-hidden-src "></textarea>
      <ul class="tag-editor ui-sortable " style="display:none;">
        
        
      </ul>
  </div>
  
  <div class="pt-2">
    <span class="h6">Press enter after each skill. Keep it relevent, less is</span>
  </div>
  
  <div class="col-md-12 group pt-4 pl-0">
      <input type="hidden" name="membership" id="membership" value="true" >
      <button type="submit"  style="outline:none;" class="btn custom-button-bl float-right">Save</button>
  </div>

  <div class="col-12 pt-5 mt-5 p-0" id="social">
      <div style="border-bottom:1px solid black">
          <span class="text-left h3">Social network</span> 
      </div>
  </div>

  <div class="col-12 pt-5 p-0">
    <div class="row">
      <div class="col-md-5">
          <div class="group">
            <label><b><i class="fa fa-twitter text-dark pl-0" style="font-size: 15px"></i></b></label><br>
              <input type="text"  name="twitter" value="<?= (isset($coworker['Twitter']) && !empty($coworker['Twitter'])) ? $coworker['Twitter'] : ''; ?>" placeholder="Twitter"><span class="highlight"></span><span class="bar"></span>
          </div>
      </div>

      <div class="col-md-5 pl-5">
          <div class="group">
            <label><b><i class="fa fa-facebook text-dark pl-0" style="font-size: 15px"></i></b></label><br>
              <input type="text" name="facebook" value="<?= (isset($coworker['Facebook']) && !empty($coworker['Facebook'])) ? $coworker['Facebook'] : ''; ?>" placeholder="Facebook"><span class="highlight"></span><span class="bar"></span>
          </div>
      </div>

      <div class="col-md-5">
          <div class="group">
            <label><b><i class="fa fa-linkedin text-dark pl-0" style="font-size: 15px"></i></b></label><br>
              <input type="text" name="linkedin" value="<?= (isset($coworker['Linkedin']) && !empty($coworker['Linkedin'])) ? $coworker['Linkedin'] : ''; ?>" placeholder="Linkedin"><span class="highlight"></span><span class="bar"></span>
          </div>
      </div>

      <div class="col-md-5 pl-5">
          <div class="group">
            <label><b><i class="fa fa-instagram text-dark pl-0" style="font-size: 15px"></i></b></label><br>
              <input type="text" name="instagram" value="<?= (isset($coworker['Instagram']) && !empty($coworker['Instagram'])) ? $coworker['Instagram'] : ''; ?>" placeholder="Instagram"><span class="highlight"></span><span class="bar"></span>
          </div>
      </div>

      <div class="col-2"></div>
    </div><br>
    <button type="submit"  style="outline:none;" class="btn custom-button-bl float-right">Save</button>
  </div>

  <div class="col-12 pt-5 mt-5 p-0" id="password">
      <div style="border-bottom:1px solid black">
          <span class="text-left h3">Your password</span> 
      </div>
  </div>

  <div class="row pt-4">
    <div class="col-md-5">
      <div class="group">
        <input type="text" name="checkin" value="<?= (isset($coworker['AccessPincode']) && !empty($coworker['AccessPincode'])) ? $coworker['AccessPincode'] : ''; ?>"  disabled ><span class="highlight"></span><span class="bar"></span>
        <label>Checkin & internet pincode</label>
      </div>
    </div>
    <div class="col-md-5 pl-4">
      <div class="group">
        <input type="password" name="old_password"><span class="highlight"></span><span class="bar"></span>
        <label>Old password</label>
      </div>
    </div>
    <div class="col-md-5">
      <div class="group">
        <input type="password" name="new_password"><span class="highlight"></span><span class="bar"></span>
        <label>New password</label>
      </div>
    </div>
    <div class="col-md-5 pl-4">
      <div class="group">
        <input type="password" name="r_new_password"><span class="highlight"></span><span class="bar"></span>
        <label>Repeat New password</label>
      </div>
    </div>
    <div class="col-md-5">
      <div class="group">
      </div>
    </div>
    <div class="col-md-5 pl-4">
      <div class="group">
        <span style="font-size:15px">Forgot it? <a href="<?= base_url('main/forgot_password') ?>"><u style="color: black;">Request a password reset.</u></a></span>
      </div>
    </div>
  </div>
  <br>
  <button type="submit" style="outline:none;" class="btn custom-button-bl float-right">Save</button>

  <div class="col-12 pt-5 mt-5 p-0" id="notification">
      <div style="border-bottom:1px solid black">
        <span class="text-left h3" style="color: black;">Notifications</span>                  
      </div>
  </div>

  <div class="col-md-12 group pt-4 pl-0"> 
      <h5 class="mb-0"><b>would you like to recieve notifications?</b></h5>
      <input type="radio" <?= ($coworker['SignUpToNewsletter']) ? 'checked' : '' ?> value="Yes" name="SignUpToNewsletter" style="width:15px;height:15px;">
      <span style="color:#707070; font-size: 18px;">Yes</span>
      &nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" <?= ($coworker['SignUpToNewsletter']) ? '' : 'checked' ?> value="No" name="SignUpToNewsletter" style="width:15px;height:15px;">
      <span style="color:#707070; font-size: 18px;">No</span><br>
  </div>
  <button type="submit"  style="outline:none;" class="btn custom-button-bl float-right">Save</button>
</div>
</form>

<script language="JavaScript">

  // $('input[type=checkbox]').click(function(){
  // if(this.checked) {
  // $(this)parent().css('color','red');
  // } else {
  // $(this)parent.().css('color','');
  //     }
  // });
  
</script>

<style>
  input[type=checkbox]:checked + span {
    color: #000 !important;
    /* font-weight: bold; */
  }

  input[type=checkbox]:checked:after { 
    border-bottom: 5px solid #000; 
    border-top: 8px solid #000; 
  } 
  
</style>

<script type="text/javascript">
$(document).ready(function(){
    $('input[type="checkbox"]').click(function(){
        var inputValue = $(this).attr("id");
        $("." + inputValue  ).toggle();
    });
});
</script>

<script>
  // trigger upload on space & enter
  // = standard button functionality
  $('#buttonlabel span[role=button]').bind('keypress keyup', function(e) {
    if(e.which === 32 || e.which === 13){
      e.preventDefault();
      $('#fileupload').click();
    }    
  });

  // return chosen filename to additional input
  $('#fileupload').change(function(e) {
    var filename = $('#fileupload').val().split('\\').pop();
    $('#filename').val(filename);
    $('#filename').attr('placeholder', filename);
    $('#filename').focus();
  });
</script>

  <!-- bootstrap-wysiwyg 
  <script src="<?= base_url('assets/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js');?>"></script> 
      <script src="<?= base_url('assets/vendors/jquery.hotkeys/jquery.hotkeys.js');?>"></script> 
      <script src="<?= base_url('assets/vendors/google-code-prettify/src/prettify.js');?>"></script> -->

      <script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='https://use.fontawesome.com/ce726fce7b.js'></script>

<script>
  Array.prototype.map.call(document.querySelectorAll('.tools a:not([data-role="createLink"])'), (action) => {
    action.addEventListener("click", (e) => {
      e.preventDefault();
      document.execCommand(action.dataset.role, false, action.dataset.value);
    })
  })

  // Handle the link modal
  const modal = document.querySelector('.modal');
  const closeModal = () => {
    modal.classList.remove('visible');
  }
  let closeButton = document.querySelector('.closeModal');
  closeButton.addEventListener('click', closeModal);
  document.addEventListener('keyup', function(e) {
    if (e.keyCode == 27) {
      closeModal();
    }
  });
  let otherClicks = (event) => {
    if (document.querySelector('.modal').contains(event.target)) {
      return false;
    } else {
      closeModal();
      window.removeEventListener('click', otherClicks);
    }
  };
  window.addEventListener('click', otherClicks);
  const anchorLink = document.querySelector('a[data-role="createLink"]');

  anchorLink.addEventListener('click', () => {
    modal.classList.add('visible');
    window.savedSel = saveSelection();
    document.urlForm.urlField.value="";
    document.urlForm.urlField.focus();
  })

  function textareaKeyFunction() {
    var desc=document.getElementById("texteditor").innerHTML;
    document.getElementById("yourbio").value = desc;
  }

  // Save selected text when URL modal opens. From http://stackoverflow.com/questions/5605401/insert-link-in-contenteditable-element
  function saveSelection() {
      if (window.getSelection) {
          sel = window.getSelection();
          if (sel.getRangeAt && sel.rangeCount) {
              var ranges = [];
              for (var i = 0, len = sel.rangeCount; i < len; ++i) {if (window.CP.shouldStopExecution(1)){break;}
                  ranges.push(sel.getRangeAt(i));
              }
              window.CP.exitedLoop(1);

              return ranges;
          }
      } else if (document.selection && document.selection.createRange) {
          return document.selection.createRange();
      }
      return null;
  }

  function restoreSelection(savedSel) {
      if (savedSel) {
          if (window.getSelection) {
              sel = window.getSelection();
              sel.removeAllRanges();
              for (var i = 0, len = savedSel.length; i < len; ++i) {if (window.CP.shouldStopExecution(2)){break;}
                  sel.addRange(savedSel[i]);
              }
              window.CP.exitedLoop(2);

          } else if (document.selection && savedSel.select) {
              savedSel.select();
          }
      }
  }

  // let urlForm = document.querySelector('.urlForm');

  // urlForm.addEventListener('submit',(e) => {
  //   let urlValue = urlForm.querySelector('.url').value;
  //   restoreSelection(window.savedSel);
  //     document.execCommand("CreateLink", false, urlValue);
  //   closeModal();
  //   e.preventDefault();
  // })

  function getSelectionParentElement() {
      var parentEl = null, sel;
      if (window.getSelection) {
          sel = window.getSelection();
          if (sel.rangeCount) {
              parentEl = sel.getRangeAt(0).commonAncestorContainer;
              if (parentEl.nodeType != 1) {
                  parentEl = parentEl.parentNode;
              }
          }
      } else if ( (sel = document.selection) && sel.type != "Control") {
          parentEl = sel.createRange().parentElement();
      }
      return parentEl;
  }
  //# sourceURL=pen.js

  const uploadButton = document.querySelector('.browse-btn'); 
  const fileInfo = document.querySelector('.file-info'); 
  const realInput = document.getElementById('real-input'); 
  
  uploadButton.addEventListener('click', (e) => { 
    realInput.click(); 
  }); 
  
  realInput.addEventListener('change', () => { 
    const name = realInput.value.split(/\\|\//).pop(); 
    const truncated = name.length > 20  
      ? name.substr(name.length - 20)  
      : name; 
    
    fileInfo.innerHTML = truncated; 
  });

  const uploadButton1 = document.querySelector('.browse-btn-1'); 
  const fileInfo1 = document.querySelector('.file-info-1'); 
  const realInput1 = document.getElementById('real-input-1'); 
  
  uploadButton1.addEventListener('click', (e) => { 
    realInput1.click(); 
  }); 
  
  realInput1.addEventListener('change', () => { 
    const name = realInput1.value.split(/\\|\//).pop(); 
    const truncated = name.length > 20  
      ? name.substr(name.length - 20)  
      : name; 
    
    fileInfo1.innerHTML = truncated; 
  });
</script>

<script>
  
  
  var ProfileTagsList = new Array();
  <?php foreach($coworker['ProfileTagsList'] as $key => $val){ ?>
    ProfileTagsList.push('<?php echo $val; ?>');
  <?php } ?>

  $(function () {
    

    $('#hero-demo').tagEditor({
        delimiter: ',',
        initialTags: ProfileTagsList,
        placeholder: 'Enter tags ...',
        autocomplete: {
            delay: 0,
            position: {
                collision: 'flip'
            },
            source: ['ActionScript', 'AppleScript', 'Asp', 'BASIC', 'C', 'C++', 'CSS', 'Clojure', 'COBOL', 'ColdFusion', 'Erlang', 'Fortran', 'Groovy', 'Haskell', 'HTML', 'Java', 'JavaScript', 'Lisp', 'Perl', 'PHP', 'Python', 'Ruby', 'Scala', 'Scheme']
        },
        clickDelete : false,
        beforeTagSave : beforeTagSavecb,
        beforeTagDelete : beforeTagDeletecb,
        onChange: onChangecb
       /* autocomplete: {
            source: googleSuggest,
            minLength: 3,
            delay: 250,
            html: true,
            position: {
                collision: 'flip'
            }
        }*/
    });
    
    function onChangecb(field, editor, tags) {
        debugger;
    }
    
    function beforeTagSavecb(field, editor, tags, tag, val) {
        debugger;
    }
    
    function beforeTagDeletecb(field, editor, tags, val) {
        debugger;
        return true;
    }
  });
</script>
<?php include('account_master_end.php');?>
       

