$('.search').on('click', function() {
    
});


function getLocation(latitude, longitude) {
    $.get(`https://api.open-meteo.com/v1/forecast?latitude=${latitude}&longitude=${longitude}`, function(response) {
        console.log()
    });
}   