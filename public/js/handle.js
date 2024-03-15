$(document).ready(function () {
    let mealCategoryElement = $('#meal-category');
    let peopleElement = $('#people');
    let errorMeal = $('.error-meal');
    let errorPeople = $('.error-people');
    let nextStep1 = $('#next-step-1');
    let displayText = true;

    nextStep1.click(function (event) {
        let meal = mealCategoryElement.val();
        let people = peopleElement.val();

        if (!validateStepOne(meal, people, displayText)) {
            event.preventDefault();
        }

        sessionStorage.setItem('meal', meal);
        sessionStorage.setItem('people', people);
    });

    peopleElement.on('input change', function () {
        let meal = mealCategoryElement.val();
        let people = peopleElement.val();

        if (validateStepOne(meal, people)) {
            nextStep1.removeClass('btn-disable');
            errorPeople.text('');
            errorMeal.text('');
        } else {
            nextStep1.addClass('btn-disable');
        }
    });
});

function validateStepOne(meal, people, displayText) {
    if (!meal) {
        if (displayText) {
            $('.error-meal').text('Please select a meal category');
        }
        return false;
    }

    if (!people || people <= 0) {
        if (displayText) {
            $('.error-people').text('Please choose the number of people');
        }
        return false;
    }

    return true;
}
