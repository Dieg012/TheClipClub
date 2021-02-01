let categories;
let userId;
function initialize(id) {
    userId = id;
    categoriesCall();
    projectsCall(userId);
}

function categoriesCall() {
    $.ajax({
        url: '/api/categories',
        type: 'GET',
        dataType: 'json',
        success: printCategories,
    });
}

function projectsCall() {
    $.ajax({
        url: '/api/myProjects/'+userId,
        type: 'GET',
        dataType: 'json',
        success: printProjects,
    });
}

function printProjects(json) {
    $('#projects').empty();
    for(let i=0; i<json.length; i++) {
        let div;
        div = addName(json[i],div);
        div = addCategory(json[i],div);
        div = addTags(json[i],div);
        div = addArtists(json[i],div);
        div = addDescription(json[i],div);
        //div = addMap(json[i],div);
        div = addCreatedAt(json[i],div);
        div = addDeleteDiv(json[i],div);
    }
}

function printCategories(json) {
    categories = json;
}

function showModal(id) {
    console.log(id);
    $('#deleteModal').modal('show');
    $('#deleteProjectButton').click(function () {
        $.ajax({
            url: '/api/deleteProject/'+id,
            type: 'DELETE',
            success: projectsCall,
        })
    });
}

//Auxiliar Methods
function addName(json, div) {
    div = $('<div class="project bg-white border border-secondary col-5  mt-2 p-2 rounded">').appendTo('#projects');
    let projectName = json.name;
    $('<h3 class="projectName text-center text-primary">'+projectName+'</h3>').appendTo(div);
    return div;
}

function addCategory(json,div) {
    $('<strong>'+categories[0]+'</strong>').appendTo(div);
    let category = json.category;
    $('<p>'+category+'<p>').appendTo(div);
    return div;
}

function addTags(json,div) {
    $('<strong>'+categories[1]+'</strong>').appendTo(div);
    $('<br>').appendTo(div);
    let tags = json.tags;
    for(let i=0; i<tags.length; i++) {
        let tag = tags[i];
        tagsStr = '#'+tag.tag;
        $('<a href="">'+tagsStr+'</a>').appendTo(div);
    }
    $('<br>').appendTo(div);
    return div;
}

function addArtists(json,div) {
    $('<strong>'+categories[2]+'</strong>').appendTo(div);
    $('<br>').appendTo(div);
    let director = json.director;
    if(director != null) {
        $('<span>'+director+' '+'</span>').appendTo(div);
    }
    let actor = json.actor;
    if(actor != null) {
        $('<span>'+actor+' '+'</span>').appendTo(div);
    }
    let technitian = json.technitian;
    if(technitian != null) {
        $('<span>'+technitian+' '+'</span>').appendTo(div);
    }
    let producer = json.producer;
    if(producer != null) {
        $('<span>'+producer+' '+'</span>').appendTo(div);
    }
    let screenwriter = json.screenwriter;
    if(screenwriter != null) {
        $('<span>'+screenwriter+' '+'</span>').appendTo(div);
    }
    $('<br>').appendTo(div);
    return div;
}

function addDescription(json,div) {
    $('<strong>'+categories[3]+'</strong>').appendTo(div);
    let desc = json.description;
    $('<p>'+desc+'<p>').appendTo(div);
    return div;
}

function addMap(json,div) {
    let mapDiv = $('<div id="'+json.id+'" style="width: 100%; height: 400px;" class="border rounded">').appendTo(div);
    var mymap = L.map(json.id).setView([json.coordinates], 13);
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        maxZoom: 18,
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
            'Imagery  <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1
    }).addTo(mymap);
    L.marker([json.coordinates]).addTo(mymap)
        .bindPopup("<strong>The best"+json.category+" ever done.</strong>").openPopup();
}

function addCreatedAt(json,div) {
    let updated = json.updated_at;
    updated = formatDate(updated);
    $('<i class="d-flex justify-content-end">'+updated+'</i>').appendTo(div);
    return div;
}

function addDeleteDiv(json,div) {
    let newDiv = $('<div class="deleteDiv">').appendTo(div);
    let button = $('<button type="button" style="width: 45px;" class="btn btn-danger" onclick="showModal('+json.id+')"/>').appendTo(newDiv);
    let img = $('<img class="deleteImg" src="/img/trash.png" >').appendTo(button);
}

function formatDate(datetime) {
    let year = null;
    let month = null;
    let day = null;
    let hour = null;
    let minute = null;
    let second = null;

    var str = datetime;
    year = str.substring(0, 4);
    month = str.substring(5, 7);
    day = str.substring(8, 10);
    hour = str.substring(11, 13);
    minute = str.substring(14, 16);
    second = str.substring(17, 19);

    let date = year+'-'+month+'-'+day+' '+hour+':'+minute;

    return date;
}


