<html>
<head>
<title> Add Student </title>

<script>


  $(document)
    .ready(function() {
      $('.ui.form')
        .form({
          fields: {
            sname: {
              identifier  : 'sname',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter the student name'
                },
              ]
            },
            stphoneno: {
              identifier  : 'stphoneno',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your contact no'
                },
                {
                  type   : 'length[10]',
                  prompt : 'Your contact no should be exactly 10 numbers'
                }
              ]
            },
            smailid: {
              identifier  : 'smailid',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your mail id'
                },
                {
                  type   : 'email',
                  prompt : 'Enter valid mail'
                }
              ]
            }, 
            schoolname: {
              identifier  : 'schoolname',
              rules: [
                {
                  type    : 'empty',
                  prompt  : 'please select school name'
                }
              ]
            },
            sage: {
              identifier  : 'sage',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your age'
                }
              ]
            },
           

            sclass: {
              identifier  : 'sclass',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your class'
                }
              ]
            },

            sparentname: {
              identifier  : 'sparentname',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your parents name'
                }
              ]
            },
            
          }
        })
      ;
    });
  </script>
</head>

<body>

<form class="ui form" action="student" method="post" >
<br />
<h3 class="ui dividing header" style="text-align: left;">Add Student</h3>
<br />
<div class="ui error message"></div>
<div style="align:center">
<div>
  <div class="field">
     <div class="two fields">
      <div class="three wide field">
      <label>Student Name</label>
      </div>
      <div class="four wide field">
        <input type="text" name="sname" placeholder="Name of Student">
      </div>
    </div>
  </div>
  <div class="field">
    <div class="two fields">
      <div class="three wide field">
      <label>Contact No</label>
      </div>
      <div class="four wide field">
        <input type="text" name="stphoneno" placeholder="Contact Number">
      </div>
    </div>
  </div>
  <div class="field">
    <div class="two fields">
      <div class="three wide field">
      <label>Mail Id</label>
      </div>
      <div class="four wide field">
        <input type="text" name="smailid" placeholder="abc@gmail.com">
      </div>
    </div>
     </div>

  <div class="field">
    <div class="two fields">
      <div class="three wide field">
      <label>School</label>
      </div>
      <div class="four wide field">
      <select id="schoolname" name="schoolname" >
      <option value="">Select school </option> 
      </select>
      </div>
    </div>
  </div>

  
 
  </div>
  <div class="field">
    <div class="two fields">
      <div class="three wide field">
      <label>Age</label>
      </div>
      <div class="four wide field">
        <input type="text" name="sage" placeholder="12">
      </div>
    </div>
  </div>
 
  <div class="field">
    <div class="two fields">
      <div class="three wide field">
      <label>Batch</label>
      </div>
      <div class="four wide field">
        <input type="text" name="sbatch" placeholder="Specify the Batch">
      </div>
    </div>
  </div>

  <div class="field">
    <div class="two fields">
      <div class="three wide field">
      <label>Class</label>
      </div>
      <div class="four wide field">
        <input type="text" name="sclass" placeholder="Specify the Class">
      </div>
    </div>
  </div>

  <div class="field">
    <div class="two fields">
      <div class="three wide field">
      <label>Parents Name</label>
      </div>
      <div class="four wide field">
        <input type="text" name="sparentname" placeholder="Enter your parent name">
      </div>
    </div>
  </div>

  

  </div>
<form class="ui form" action="student" method="post" >
<div class="seven wide field">
<input id="submitBtn" type="submit" class="ui primary button" name="Add a new student" value="Add this student record" ></input>
</div>
</div>
</div>
</form>
</body>
<script>
    $('.ui.dropdown')
        .dropdown()
    ;
  $(document).ready(function(){
  $.ajax({ 
    type: 'GET',
    url: "school",
    success: function(data){
      var schools = JSON.parse(data);
      
      for (var i =0; i< schools.length; i++){
        var obj = schools[i];
        console.log(i);
        console.log(obj);
        var element = document.getElementById("schoolname");
        var option = document.createElement("option");
        option.value = obj.sno;
        option.id = obj.sno;
        option.text = obj.school_name;
        element.add(option);
      }
    },
    error:function(error){
      console.log(error);
    }});
  });
  function getText(element) {
  var textHolder = element.options[element.selectedIndex].text
  document.getElementById("txt_holder").value = textHolder;
  }


</script>
</html>