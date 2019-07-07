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
/* input[type=text] {
  display: table-cell;
  margin-left: 0px;
  /* width: 20rem; */
  /* font-family: Arial;
  font-size: 1rem;
  padding: 15px 15px;
  
border:none; */
  
  /* background-color: #ffffff; */
/* } */
/* input[type=text]:focus {
  box-shadow: 0 0 5px #fff;
  border-color: #fff;
  outline: 2px solid transparent;
} */
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
</style>

<!-- bootstrap-wysiwyg --> 
<!-- <link href="<?= base_url('assets/vendors/google-code-prettify/bin/prettify.min.css');?>" rel="stylesheet"> -->
<!-- Include Editor style. -->
<!-- <link href='https://cdn.jsdelivr.net/npm/froala-editor@3.0.2/css/froala_editor.pkgd.min.css' rel='stylesheet' type='text/css' /> -->

<!-- Include JS file. -->
<!-- <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@3.0.2/js/froala_editor.pkgd.min.js'></script> -->


<script type='text/javascript' src='https://rawgit.com/Pixabay/jQuery-tagEditor/master/jquery.caret.min.js'></script>

<script type='text/javascript' src='https://code.jquery.com/ui/1.11.4/jquery-ui.min.js'></script>

<script type='text/javascript' src='https://rawgit.com/Pixabay/jQuery-tagEditor/master/jquery.tag-editor.js'></script>

<link href="https://rawgit.com/Pixabay/jQuery-tagEditor/master/jquery.tag-editor.css" rel="stylesheet">



<div style="border-bottom:1px solid black"> 
    <span class="text-left h4">Your Profile Page</span>  
</div> 
 
<div class="col-12 p-0 row"> 
    <div class="col-3 p-3 text-center"> 
        <span class="p-5 rounded-circle h1" style="background-color:#F5F5F5;color:#707070;display: inline-grid">N</span> 
    </div> 
    <div class="col-9 p-3 row"> 
    <div class="col-12"> 
 
 
 
        <span class="h5 p-0 " style="letter-spacing: 2px;">YOUR PHOTO</span> 
        <span class="p-0 pull-right">Delete <span class="h3">X</span></span> 
        <div class="col-12 row"> 
           <div class="input-container"> 
              <input type="file" id="real-input"> 
              <button class="browse-btn"> 
                Browse Files 
              </button> 
              <span class="file-info">Upload a file</span> 
            </div> 
            </div> 
            <div class="col-12 mt-2 p-0"> 
                    <span class="">File smaller than 10 MB and at least 400px by 400px.</span>  
            </div> 
          
      </div>  
  <div class="col-12 mt-4 "> 
        <span class="h5 p-0 " style="letter-spacing: 2px;">YOUR PHOTO</span> 
        <span class="p-0 pull-right">Delete <span class="h3">X</span></span> 
        <div class="col-12 row"> 
        <div class="input-container"> 
              <input type="file" id="real-input-1"> 
              <button class="browse-btn-1"> 
                Browse Files 
              </button> 
              <span class="file-info-1">Upload a file</span> 
            </div> 
        </div> 
     
    </div> 
    
    
        <div class="col-12 mt-2 p-0">
                <a href="#" style="color:black;"><span>See</span> <i class="fa fa-angle-right fa-2x pl-1 align-middle"></i></a> 
                <a href="#" style="color:black;" class="pl-3"><span>My</span> <i class="fa fa-angle-right fa-2x pl-1 align-middle"></i></a> 
            </div>
    </div>
   
</div>
<div class="section-header pb-1 col-md-12 pl-0">
            <div class="col-12 mt-2 p-0">
                <div style="border-bottom:1px solid black">
                    <span class="text-left h4">Professional Profile</span> 
                </div>
            </div>

            <form style="width:100%; margin: 0em 0em 0em 0em;" class="pl-0">
                <div class="row">
                  <div class="col-md-5">
                    <div class="group">
                      <input type="text" name="companyname"><span class="highlight"></span><span class="bar"></span>
                      <label>Company Name</label>
                    </div>
                  </div>
                  <div class="col-md-5 pl-4">
                    <div class="group">
                      <input type="text" name="industry"><span class="highlight"></span><span class="bar"></span>
                      <label>Industry</label>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="group">
                      <input type="text" name="rolepos"><span class="highlight"></span><span class="bar"></span>
                      <label>Your role / position</label>
                    </div>
                  </div>
                </div>
            </form>

            <!-- <div class="col-12 pt-5 mt-5 p-0">
            <textarea id="froala-editor">Initialize the Froala WYSIWYG HTML Editor on a textarea.</textarea>
            </div>

            <script>
  new FroalaEditor('textarea#froala-editor')
</script> -->

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
			<form class="urlForm" name="urlForm">
				<input class="url" name="urlField" placeholder="Add URL" />
				<i class="fa fa-close closeModal" aria-hidden="true"></i>
			</form>
		</div>
	</div>
	<div class="editableContent" contenteditable spellcheck="false">
		
	</div>
</section>
<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='https://use.fontawesome.com/ce726fce7b.js'></script>
<script >Array.prototype.map.call(document.querySelectorAll('.tools a:not([data-role="createLink"])'), (action) => {
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

let urlForm = document.querySelector('.urlForm');

urlForm.addEventListener('submit',(e) => {
	let urlValue = urlForm.querySelector('.url').value;
	restoreSelection(window.savedSel);
  	document.execCommand("CreateLink", false, urlValue);
	closeModal();
	e.preventDefault();
})

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

const uploadButton = document.querySelector('.browse-btn-1'); 
const fileInfo = document.querySelector('.file-info-1'); 
const realInput = document.getElementById('real-input-1'); 
 
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
</script>

<script>
  $(function () {
    $('#hero-demo').tagEditor({
        delimiter: ',',
        initialTags: ['Skill', 'SUPER GOOD SKILL', 'SKILL'],
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

/*
    $('#remove_all_tags').click(function () {
        var tags = $('#demo3').tagEditor('getTags')[0].tags;
        for (i = 0; i < tags.length; i++) {
            $('#demo3').tagEditor('removeTag', tags[i]);
        }
    });*/
});
</script>
            <div class="col-12 mt-2 p-0">
            <div style="padding :0 7px 0 5px;max-width:900px;margin:auto ;border-bottom:1px solid black">
                <textarea id="hero-demo" class="tag-editor-hidden-src "></textarea>
                <ul class="tag-editor ui-sortable " style="display:none;">
                  
                  
                </ul>
            </div>
              <!-- <div style="border-bottom:1px solid black">
                <span>Your skill</span><br>                
                <a href="#"><span class="btn border border-secondary rounded text-uppercase mb-1 p-2">SKILL</span></a>
                <a href="#" class="pl-2"><span class="btn border border-secondary rounded text-uppercase mb-1 p-2">SUPER GOOD SKILL</span></a>
                <a href="#" class="pl-2"><span class="btn border border-secondary rounded text-uppercase mb-1 p-2">SKILL</span></a>
              </div>
            </div> -->
            <div class="pt-2">
            <span class="h6">Press enter after each skill. Keep it relevent, less is</span>
            </div>

            <div class="card border-0 pt-4">
              <div class="card-header p-4">
                <h5><b>Heads up!</b> Yourprofile is not yet listed in the directory. Enable the option list</h5>
              </div>
            </div>
            
            <div class="col-md-12 group pt-4 pl-0">
                <input type="checkbox" name="membership" id="membership2" style="width:15px;height:15px;">
                <span style="color:#999; font-size: 18px;">List my profile in the directory.</span><br>
                <button type="submit"  style="border: 0px;background-color: transparent;" class="float-right">Save <i class="fa fa-angle-right fa-2x pl-1 align-middle"></i></button>
            </div>

            <div class="col-12 pt-5 mt-5 p-0">
                <div style="border-bottom:1px solid black">
                    <span class="text-left h3">Social network</span> 
                </div>
            </div>

            <div class="col-12 pt-5 p-0">
            <div class="row">
              <div class="col-md-5">
                  <div class="group">
                    <label><b><i class="fa fa-twitter text-dark pl-0" style="font-size: 15px"></i></b></label><br>
                      <input type="text" name="twitter" placeholder="Twitter"><span class="highlight"></span><span class="bar"></span>
                  </div>
              </div>

              <div class="col-md-5 pl-5">
                  <div class="group">
                    <label><b><i class="fa fa-facebook text-dark pl-0" style="font-size: 15px"></i></b></label><br>
                      <input type="text" name="facebook" placeholder="Facebook"><span class="highlight"></span><span class="bar"></span>
                  </div>
              </div>

              <div class="col-md-5">
                  <div class="group">
                    <label><b><i class="fa fa-linkedin text-dark pl-0" style="font-size: 15px"></i></b></label><br>
                      <input type="text" name="linkedin" placeholder="Linkedin"><span class="highlight"></span><span class="bar"></span>
                  </div>
              </div>

              <div class="col-md-5 pl-5">
                  <div class="group">
                    <label><b><i class="fa fa-google text-dark pl-0" style="font-size: 15px"></i></b></label><br>
                      <input type="text" name="google" placeholder="Google"><span class="highlight"></span><span class="bar"></span>
                  </div>
              </div>

              <div class="col-md-5">
                  <div class="group">
                    <label><b><i class="fa fa-flickr text-dark pl-0" style="font-size: 15px"></i></b></label><br>
                      <input type="text" name="flicker" placeholder="Flicker"><span class="highlight"></span><span class="bar"></span>
                  </div>
              </div>

              <div class="col-md-5 pl-5">
                  <div class="group">
                    <label><b><i class="fa fa-instagram text-dark pl-0" style="font-size: 15px"></i></b></label><br>
                      <input type="text" name="instagram" placeholder="Instagram"><span class="highlight"></span><span class="bar"></span>
                  </div>
              </div>

              <div class="col-md-5">
                  <div class="group">
                    <label><b><i class="fa fa-vimeo text-dark pl-0" style="font-size: 15px"></i></b></label><br>
                      <input type="text" name="vimeo" placeholder="Vimeo"><span class="highlight"></span><span class="bar"></span>
                  </div>
              </div>

              <div class="col-md-5 pl-5">
                  <div class="group">
                    <label><b><i class="fa fa-tumblr text-dark pl-0" style="font-size: 15px"></i></b></label><br>
                      <input type="text" name="tumblr" placeholder="Tumblr"><span class="highlight"></span><span class="bar"></span>
                  </div>
              </div>
            <div class="col-2"></div>
            </div><br>
              <button type="submit"  style="border: 0px;background-color: transparent;" class="float-right">Save <i class="fa fa-angle-right fa-2x pl-1 align-middle"></i></button>
            </div>

            <div class="col-12 pt-5 mt-5 p-0">
                <div style="border-bottom:1px solid black">
                    <span class="text-left h3">Your password</span> 
                </div>
            </div>

            <form style="width:100%; margin: 0em 0em 0em 0em;" class="pl-0">
                <div class="row">
                  <div class="col-md-5">
                    <div class="group">
                      <input type="text" name="checkin"><span class="highlight"></span><span class="bar"></span>
                      <label>Checkin & internet pincode</label>
                    </div>
                  </div>
                  <div class="col-md-5 pl-4">
                    <div class="group">
                      <input type="password" name="password"><span class="highlight"></span><span class="bar"></span>
                      <label>Password</label>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="group">
                    </div>
                  </div>
                  <div class="col-md-5 pl-4">
                    <div class="group">
                      <label style="font-size:15px">Forgot it? <a href="#"><u style="color: black;">Request a password reset.</u></a></label>
                    </div>
                  </div>
                </div>
                <br>
            <button type="submit"  style="border: 0px;background-color: transparent; font-size:15px" class="float-right">Save <i class="fa fa-angle-right fa-2x pl-1 align-middle"></i></button>
            </form>

            <div class="col-12 pt-5 mt-5 p-0">
                <div style="border-bottom:1px solid black">
                  <span class="text-left h3" style="color: black;">Notifications</span>                  
                </div>
            </div>

            <div class="col-md-12 group pt-4 pl-0"> 
                <h5 class="mb-0"><b>Select when you would like to recieve notifications</b></h5>
                <input type="checkbox" style="width:15px;height:15px;">
                <span style="color:#707070; font-size: 18px;">I would like to receive occasional and relevent updates from Reyada - Crystal Tower</span><br>
                <input type="checkbox" style="width:15px;height:15px;">
                <span style="color:#707070; font-size: 18px;">When the new message is posted in the home page wall.</span><br>
                <input type="checkbox" style="width:15px;height:15px;">
                <span style="color:#707070; font-size: 18px;">When the new comment is posted in the blog.</span><br>
                <input type="checkbox" style="width:15px;height:15px;">
                <span style="color:#707070; font-size: 18px;">When the new comment is posted in an event.</span><br>
                <br>
                <h5 class="mb-0"><b>How and when should we alert you about conversations in the community board?</b></h5>
                <input type="checkbox" style="width:15px;height:15px;">
                <span style="color:#707070; font-size: 18px;">Send me an update in the Morning if there is new message (around 8am)</span><br>
                <input type="checkbox" style="width:15px;height:15px;">
                <span style="color:#707070; font-size: 18px;">Send me an notification shortly after every message. You can still mute individual.</span><br>

                <button type="submit"  style="border: 0px;background-color: transparent;" class="float-right">Save <i class="fa fa-angle-right fa-2x pl-1 align-middle"></i></button>
            </div>
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

<?php include('account_master_end.php');?>
       

