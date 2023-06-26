/*!
* Start Bootstrap - Landing Page v6.0.6 (https://startbootstrap.com/theme/landing-page)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-landing-page/blob/master/LICENSE)
*/
// This file is intentionally blank
// Use this file to add JavaScript to your project

//location.reload(false);

let save_registration = () => {
    if (document.getElementById('user_name').value == '' || document.getElementById('user_email').value == '') {
        alert("Please provide your name and email for registration.");
    }
    let question = {};
    question['user_name'] = document.getElementById('user_name').value;
    question['user_email'] = document.getElementById('user_email').value;
    $.ajaxSetup({ cache: false });

    jQuery.ajax({
        cache: false,
        type: "POST",
        url: "php/save.php",
        data: question,
        contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
        success: (data2, status, xhr) => {
            console.log(data2);
            window.location.href = 'success.html';
        },
        error: (XMLHttpRequest, textStatus, errorThrown) => {
            console.log("Status: " + textStatus);
            console.log("Error: " + errorThrown);
            redirect_url = "#";
        }
    });

}