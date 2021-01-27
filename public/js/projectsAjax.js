window.onload = initialize;
function initialize() {
    $.ajax({
        url: '/myProjects',
        type: 'GET',
        dataType: 'json',
        success: printProjects,
    });
}

function printProjects(json) {
    let projectName = json[0].name;
    $('#projectName').html(projectName);
    console.log(projectName);
}
