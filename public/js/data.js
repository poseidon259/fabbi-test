$(document).ready(function () {
    let meal = $('#meal-category').val();
    console.log(meal);
    $.ajax({
        url: baseUrl + 'api/restaurants',
        data: {

        }
    })
})
