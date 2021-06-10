$(document).ready(function() {

    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID

    var course;
    var course_counter = 2;

    for(let i=0; i < courses.length; i++){
        course += '<option value="'+courses[i]["id"]+'">'+courses[i]["course_code"]+'</option>';
    }



    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        //add input box
        var template =  `<tr>
                        <td>
                        <select onchange="select(this)" id="course_`+course_counter+`" name="course_id[]">
                        <option value="" selected disabled>Choose course</option>` +
                            course +
                            `</select>
                        </td>

                        <td><input id="course_`+course_counter+`_name" type="text" disabled name="course_name[]" /></td>
                        <td><input id="course_`+course_counter+`_creditH" type="number" disabled name="credit_hour[]" /></td>
                        <td><input id="lecture_hour" type="number" name="lecture_hour[]" /></td>
                        <td><input id="tutorial_hour" type="number" name="tutorial_hour[]" /></td>
                        <td><input id="lab_hour" type="number" name="lab_hour[]" /></td>
                        <td><input id="student_number" type="number" name="student_number[]" /></td>
                        <td><input id="lecturer_name" type="text" name="lecturer_name[]" /></td>

                        </tr>`
        $(wrapper).append(template);
        course_counter++;
    });
});
