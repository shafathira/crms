function select(e) {

    var select_id=e.id; //id =course_id
    var selected_index = e.selectedIndex -1; //index apa dia ambik bila dia choose course_code tu
    var course_name = select_id+"_name"; //course_1 + _name = course_1_name
    var credit_hour = select_id+"_creditH";

    document.getElementById(course_name).value = courses[selected_index]["course_name"];
    document.getElementById(credit_hour).value = courses[selected_index]["credit_hour"];

}

function select_edit(e) {

    var select_id=e.id; //id =course_id
    var selected_index = e.selectedIndex; //index apa dia ambik bila dia choose course_code tu
    var course_name = select_id+"_name"; //course_1 + _name = course_1_name
    var credit_hour = select_id+"_creditH";

    document.getElementById(course_name).value = courses[selected_index]["course_name"];
    document.getElementById(credit_hour).value = courses[selected_index]["credit_hour"];

}
